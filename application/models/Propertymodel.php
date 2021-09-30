<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Propertymodel extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }

    public function property()
    {
        $specifications = $_POST['specification'];
        $specArr = array();
        foreach ($specifications as $key => $value) {
            array_push($specArr, array("spec".$key=> htmlspecialchars($value)) );
        } 
       
        $now = date('Y-m-d H:i:s');  
        if (isset($_FILES['thumb_img']) && !empty($_FILES['thumb_img']["name"]))
        {
            $config1['upload_path'] = './assets/admin/uploads/property_thumb';  
            $config1['allowed_types'] = 'jpg|jpeg|bmp|png|webp';
            $config1['max_size'] = '30720';   
            $config1['encrypt_name'] = TRUE;   

            $this->load->library('upload', $config1);
            $this->upload->initialize($config1); 
            $this->upload->do_upload('thumb_img'); 
            $thumb_upload=$this->upload->data(); 
        }

        if(isset($_FILES['walkthrough-video']) && $_FILES['walkthrough-video']['size'] != 0 )
        {
                         
            $configVideo['upload_path'] = './assets/admin/uploads/walkthrough_video'; # check path is correct
            $configVideo['max_size'] = '102400';
            $configVideo['allowed_types'] = 'mp4'; # add video extenstion on here
            $configVideo['overwrite'] = FALSE;
            $configVideo['remove_spaces'] = TRUE;
            $configVideo['encrypt_name'] = TRUE; // For unique image name at a time

            $this->load->library('upload', $configVideo);
            $this->upload->initialize($configVideo);
            $this->upload->do_upload('walkthrough-video');
            $videoname=$this->upload->data(); 
        }
        else
        {
            $video_upload = " ";
        }

        if (isset($_FILES['E_Brochure']) && !empty($_FILES['E_Brochure']["name"]))
        {
            $config2['upload_path'] = './assets/admin/uploads/e_brochure';   
            $config2['allowed_types'] = 'pdf';              
            $config2['max_size'] = 0;   
            $config2['remove_spaces'] = TRUE;
            $config2['encrypt_name'] = TRUE;
              

            $this->load->library('upload', $config2);
            $this->upload->initialize($config2); 
            $this->upload->do_upload('E_Brochure'); 
            $EBrochure_upload = $this->upload->data();
        }
        else
        {
            $EBrochure_upload = " ";
        }

      
        $insert_data = array('type'         => $this->input->post('project_type'),
                        'name'              => $this->input->post('property_name'),
                        'title'             => $this->input->post('property_title'),
                        'possession'        => $this->input->post('possession'),
                        'location'          => $this->input->post('location'),
                        'location_address'  => $this->input->post('location_address'),
                        'description'       => $this->input->post('description'), 
                        'thumb_img'         => $thumb_upload['file_name'],                      
                        'walkthrough_video' => $videoname['file_name'],
                        'E-Brochure'        => $EBrochure_upload['file_name'],
                        'apartment_type'    => implode(', ', $_POST['apartment_type']),
                        'price'             => $this->input->post('price'),
                        'property_status'   => $this->input->post('project_status'),                      
                        'feature'           => implode(',', $_POST['features']),  
                        'specification'     => json_encode($specArr),   
                        'google_map'        => $this->input->post('google_map'),                      
                        'created_at'        => $now
                    );

                $insert_property = $this->db->insert('property',$insert_data);

                //step 2 faq insert

                if($insert_property == true)   
                {
                    $property_id = $this->db->insert_id();
                    
                    $count = count($this->input->post('faq_question'));


                    for($i = 0; $i < $count; $i++) {
                        $qust = $this->input->post('faq_question')[$i];
                        $ans = $this->input->post('faq_answer')[$i];

                        $data = array(  'property_id'       => $property_id,
                                        'faq_question'      =>  $qust,
                                        'faq_answer'        =>  $ans,
                                        'create_at'        =>  $now,
                                     );
                        $this->db->insert('property_faq',$data);
                    }

                //step 3  property banner

                    $count = count($_FILES['banner_img']['name']); 

                    for($i = 0; $i < $count; $i++) 
                    {

                        $_FILES['file']['name']     = $_FILES['banner_img']['name'][$i]; 
                        $_FILES['file']['type']     = $_FILES['banner_img']['type'][$i]; 
                        $_FILES['file']['tmp_name'] = $_FILES['banner_img']['tmp_name'][$i]; 
                        $_FILES['file']['error']    = $_FILES['banner_img']['error'][$i]; 
                        $_FILES['file']['size']     = $_FILES['banner_img']['size'][$i];                             

                        $config1['upload_path'] = './assets/admin/uploads/property_banner';   
                        $config1['allowed_types'] = 'jpg|jpeg|bmp|png';  
                        $config1['max_size'] = '30720';   
                        $config1['encrypt_name'] = TRUE;   

                        $this->load->library('upload', $config1); 
                        $this->upload->initialize($config1);
                        $this->upload->do_upload('file');                               
                        $fileData = $this->upload->data();
                        $uploadData[$i]['file_name'] = $fileData['file_name']; 
                                
                       $data = array(  'property_id'      => $property_id,
                                        'banner_img'      =>  $fileData['file_name'],                                       
                                     );
                        $this->db->insert('property_banner',$data);      
                            
                    }

                //step 4 floor plan
                    $tab_count = $this->input->post('tab-count');

                    $tower_det_array = array();                 
                    for($i = 1; $i <= $tab_count; $i++) 
                    {
                        $temp = array();
                        $temp['floor_name'] = $this->input->post('tower_name'.$i)[0];
                        $temp['floor_title'] = $this->input->post('tower_title'.$i)[0];
                        $temp['property_id']      = $property_id;
                        $img_count = count($_FILES['floor_banner_img'.$i]['tmp_name']);
                        $total_images = array();
                        for ($j=0; $j < $img_count; $j++) 
                        { 
                            $floor_img = $_FILES['file']['name'] = $_FILES['floor_banner_img'.$i]['name'][$j][0]; 
                            $_FILES['file']['type']     = $_FILES['floor_banner_img'.$i]['type'][$j][0]; 
                            $_FILES['file']['tmp_name'] = $_FILES['floor_banner_img'.$i]['tmp_name'][$j][0]; 
                            $_FILES['file']['error']    = $_FILES['floor_banner_img'.$i]['error'][$j][0]; 
                            $_FILES['file']['size']     = $_FILES['floor_banner_img'.$i]['size'][$j][0];                                 # code...
                           
                            $config1['upload_path'] = './assets/admin/uploads/floor_plan';   
                            $config1['allowed_types'] = 'jpg|jpeg|bmp|png';  
                            $config1['max_size'] = '30720';   
                            $config1['encrypt_name'] = TRUE;   

                            $this->load->library('upload', $config1); 
                            $this->upload->initialize($config1);
                            $this->upload->do_upload('file');   
                            $fileData = $this->upload->data();
                            $uploadData[$i]['file_name'] = $fileData['file_name']; 

                            array_push($total_images, array("img"=> $fileData['file_name']));
                        }
                        $temp['floor_img'] = json_encode($total_images);
                        array_push($tower_det_array, $temp);
                    }
                    $this->db->insert_batch('property_floorplan',$tower_det_array);                   
                   
                    return true;

                }           

                else{
                        return false;
                    }   
        
    }
    public function get_property_details()
    {       
        $this->db->select('*');
        $this->db->from('property');   
        $query = $this->db->get();
        return $query->result();
    }

    
    //not use in project but reference
    public function insert_multiple_img_dynamic()
    {   
        $pgm_schedule = array();

                    $no_of_days = $this->input->post('no_of_days');

                    for($Tower=1; $Tower<=$no_of_days; $Tower++)
                    {                   
                        $no_of_events = count ($this->input->post('tower'.$Tower.'_name'));
                        
                        for($i=0; $i<$no_of_events; $i++)
                        {
                           
                            $_FILES['file']['name']     = $_FILES['tower'.$Tower.'_img']['name'][$i]; 
                            $_FILES['file']['type']     = $_FILES['tower'.$Tower.'_img']['type'][$i]; 
                            $_FILES['file']['tmp_name'] = $_FILES['tower'.$Tower.'_img']['tmp_name'][$i]; 
                            $_FILES['file']['error']    = $_FILES['tower'.$Tower.'_img']['error'][$i]; 
                            $_FILES['file']['size']     = $_FILES['tower'.$Tower.'_img']['size'][$i];                             

                            $config1['upload_path'] = './assets/admin/uploads/floor_plan';   
                            $config1['allowed_types'] = 'jpg|jpeg|bmp|png';  
                            $config1['max_size'] = '30720';   
                            $config1['encrypt_name'] = TRUE;   

                            $this->load->library('upload', $config1); 
                            $this->upload->initialize($config1);
                            $this->upload->do_upload('file');                               
                            $fileData = $this->upload->data();
                            $uploadData[$i]['file_name'] = $fileData['file_name']; 

                                array_push($pgm_schedule, array(
                                'img'       =>  $fileData['file_name'], 
                            ));

                            $json_data = json_encode($pgm_schedule); 

                            $data = array(  'property_id'     =>  10,
                                            'floor_name'      =>  $this->input->post('tower'.$Tower.'_name')[$i],
                                            'floor_title'     =>  $this->input->post('tower'.$Tower.'_title')[$i],
                                            'floor_img'       =>  $json_data, 
                                         );
                            
                        } 
                        $this->db->insert('property_floorplan',$data);  
                    }

    }
}