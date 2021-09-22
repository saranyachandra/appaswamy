<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Propertymodel extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }

    public function property()
    {
        
        $now = date('Y-m-d H:i:s');  

        if($_FILES['walkthrough-video']['size'] != 0 )
        {
                         
            $configVideo['upload_path'] = './assets/admin/uploads/walkthrough_video'; # check path is correct
            $configVideo['max_size'] = '102400';
            $configVideo['allowed_types'] = 'mp4'; # add video extenstion on here
            $configVideo['overwrite'] = FALSE;
            $configVideo['remove_spaces'] = TRUE;
            $configVideo['encrypt_name'] = TRUE; // For unique image name at a time
          //  $video_name = random_string('numeric', 5);
           // $configVideo['file_name'] = $videoname;

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

        $a=$this->input->post('apartment_type');
        $apartment_type = implode(',', $_POST['apartment_type']);
           
        $insert_data = array('type'         => $this->input->post('project_type'),
                        'name'              => $this->input->post('property_name'),
                        'title'             => $this->input->post('property_title'),
                        'possession'        => $this->input->post('possession'),
                        'location'          => $this->input->post('location'),
                        'location_address'  => $this->input->post('location_address'),
                        'description'       => $this->input->post('description'),                       
                        'walkthrough_video' => $videoname['file_name'],
                        'E-Brochure'        => $EBrochure_upload['file_name'],
                        'apartment_type'    => implode(', ', $_POST['apartment_type']),
                        'price'             => $this->input->post('price'),
                        'property_status'   => $this->input->post('project_status'),                      
                        'feature'           => implode(',', $_POST['features']),                       
                        'created_at'        => $now
                    );

                $insert_property = $this->db->insert('property',$insert_data);

                //step 2
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
                //step 3   
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
                //step 4 
                    $pgm_schedule = array();
                    $count = count($_FILES['banner_img1']['name']); 

                    for($i = 0; $i < $count; $i++) 
                    {

                        $_FILES['file']['name']     = $_FILES['banner_img1']['name'][$i]; 
                        $_FILES['file']['type']     = $_FILES['banner_img1']['type'][$i]; 
                        $_FILES['file']['tmp_name'] = $_FILES['banner_img1']['tmp_name'][$i]; 
                        $_FILES['file']['error']    = $_FILES['banner_img1']['error'][$i]; 
                        $_FILES['file']['size']     = $_FILES['banner_img1']['size'][$i];                             

                        $config1['upload_path'] = './assets/admin/uploads/property_banner';   
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
                        $json_data1 = json_encode($pgm_schedule);
                         
                    }
                    $data = array(  'property_id'      => 10,
                                    'floor_name1'      => $this->input->post('tower_name1'),
                                    'floor_title1'      => $this->input->post('tower_title1'),
                                    'floor_img1'       =>  $json_data1                                      
                                     );
                    $this->db->insert('property_floorplan',$data); 

                    return true;

                }           

                else{
                        return false;
                    }   
        
    }


}