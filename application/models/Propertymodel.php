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
                        $config1['allowed_types'] = '*';  
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
                            $_FILES['file']['size']     = $_FILES['floor_banner_img'.$i]['size'][$j][0];                                 

                            $config1['upload_path'] = './assets/admin/uploads/floor_plan';   
                            $config1['allowed_types'] = '*';  
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
        $this->db->where('status', 1);   
        $query = $this->db->get();
        return $query->result();
    }
    public function get_property_details_dashboard()
    {       
        $this->db->select('*');
        $this->db->from('property'); 
        $this->db->where('status', 1);  
        $this->db->order_by('property_id', 'desc');    
        $this->db->limit(5);  
        $query = $this->db->get();
        return $query->result();
        
    }

    public function property_banner_update_by()
    {
        
        $id = $this->input->post('banner_id[]');       

       if( (!empty($_FILES['banner_img_new']['name'])) && (($this->input->post('banner_img')) != null) && ($_FILES['banner_img_new']['size'] == 0 ))
            {
                $count = count($_FILES['banner_img_new']['name']); 
                for($i = 0; $i < $count; $i++) 
                {
                    $banner_id = $id[$i];
                    $_FILES['file']['name']     = $_FILES['banner_img_new']['name'][$i]; 
                    $_FILES['file']['type']     = $_FILES['banner_img_new']['type'][$i]; 
                    $_FILES['file']['tmp_name'] = $_FILES['banner_img_new']['tmp_name'][$i]; 
                    $_FILES['file']['error']    = $_FILES['banner_img_new']['error'][$i];
                    $_FILES['file']['size']     = $_FILES['banner_img_new']['size'][$i];

                    $config['upload_path'] = './assets/admin/uploads/property_banner';   
                    $config['allowed_types'] = 'jpg|jpeg|bmp|png|webp';  
                    $config['max_size'] = '30720';   
                    $config['remove_spaces']=TRUE;
                    $config['encrypt_name'] = TRUE;   

                    $this->load->library('upload', $config); 
                           
                    $this->upload->do_upload('file');                               
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name']; 
                                    
                    $data = array( 'banner_img'      =>  $fileData['file_name'] );                                                   
                            
                    $update = $this->db->where('banner_id', $banner_id)->update('property_banner', $data);
                   
                } 
            }else if(($this->input->post('banner_img')) != null ){ 
             
           
                    $count = count($this->input->post('banner_img')); 

                    for($i = 0; $i < $count; $i++) 
                    {
                        $img    = $this->input->post('banner_img')[$i]; 
                        $banner_id = $id[$i];               
                        $data = array( 'banner_img'      =>  $img );   
                                    
                        $update = $this->db->where('banner_id', $banner_id)->update('property_banner', $data);
                        //return true;
                    } 

            }
            if((!$_FILES['banner_img_new1']['size'][0] == 0) && (!empty($_FILES['banner_img_new1']['name']))){

                $count = count($_FILES['banner_img_new1']['name']); 
                $property_id=$this->input->post('property_id');

                    for($i = 0; $i < $count; $i++) 
                    {
                        $_FILES['file']['name']     = $_FILES['banner_img_new1']['name'][$i]; 
                        $_FILES['file']['type']     = $_FILES['banner_img_new1']['type'][$i]; 
                        $_FILES['file']['tmp_name'] = $_FILES['banner_img_new1']['tmp_name'][$i]; 
                        $_FILES['file']['error']    = $_FILES['banner_img_new1']['error'][$i]; 
                        $_FILES['file']['size']     = $_FILES['banner_img_new1']['size'][$i];                             

                        $config1['upload_path'] = './assets/admin/uploads/property_banner';   
                        $config1['allowed_types'] = 'jpg|jpeg|bmp|png|webp';  
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
            }
           
         return true;   
           
    }

    //Edit property overview details
    public function edit_property()
    {
        $id = $this->input->post('id');
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
            $thumb = $thumb_upload['file_name'];
        }else
        {
            $thumb = $this->input->post('thumb_img_old');
        }
       
        $update_data = array('type'         => $this->input->post('project_type'),
                        'name'              => $this->input->post('property_name'),
                        'title'             => $this->input->post('property_title'),
                        'possession'        => $this->input->post('possession'),
                        'location'          => $this->input->post('location'),
                        'location_address'  => $this->input->post('location_address'),
                        'description'       => $this->input->post('description'), 
                        'thumb_img'         => $thumb, 
                        'apartment_type'    => implode(', ', $_POST['apartment_type']),
                        'price'             => $this->input->post('price'),
                        'property_status'   => $this->input->post('project_status'),                    
                        'google_map'        => $this->input->post('google_map')
                    );

                    
        $update = $this->db->where('property_id', $id)->update('property', $update_data);
            if($update == true)
                {   
                    return true;            
                }
            else 
                {   
                    return false;
                }
    }
   
    public function edit_property_floor_plan(){
       
        $tab_count = $this->input->post('tab-count');
        $property_id = $this->input->post('property_id');
        $tower_det_array = array();                 
        for($i = 0; $i < $tab_count; $i++) 
        {
            $temp = array();
            $temp['floor_name'] = $this->input->post('tower_name'.$i)[0];
            $temp['floor_title'] = $this->input->post('tower_title'.$i)[0];
            $temp['property_id']      = $property_id;
            $floor_id = $this->input->post('floor_id'.$i)[0];
            $img_count = count($_FILES['floor_banner_img'.$i]['tmp_name']);
            //echo 'floor_banner_img'.$i."<----->".$img_count; 
            $total_images = array();
            if($img_count >= 1){
                for ($j=0; $j < $img_count; $j++) 
                { 
                    if(!empty($_FILES['floor_banner_img'.$i]['name'][$j][0])){
                        $floor_img = $_FILES['file']['name'] = $_FILES['floor_banner_img'.$i]['name'][$j][0]; 
                        $_FILES['file']['type']     = $_FILES['floor_banner_img'.$i]['type'][$j][0]; 
                        $_FILES['file']['tmp_name'] = $_FILES['floor_banner_img'.$i]['tmp_name'][$j][0]; 
                        $_FILES['file']['error']    = $_FILES['floor_banner_img'.$i]['error'][$j][0]; 
                        $_FILES['file']['size']     = $_FILES['floor_banner_img'.$i]['size'][$j][0];                                 
                    
                        $config1['upload_path'] = './assets/admin/uploads/floor_plan';   
                        $config1['allowed_types'] = '*';  
                        $config1['max_size'] = '30720';   
                        $config1['encrypt_name'] = TRUE;   

                        $this->load->library('upload', $config1); 
                        $this->upload->initialize($config1);
                        $this->upload->do_upload('file');   
                        $fileData = $this->upload->data();
                        $uploadData[$i]['file_name'] = $fileData['file_name']; 

                        array_push($total_images, array("img"=> $fileData['file_name']));
                    }
                    
                }
            }
            if(!empty($total_images)){
                $temp['floor_img'] = json_encode($total_images);
            }
            array_push($tower_det_array, $temp);
            $update = $this->db->where('floor_id', $floor_id)->update('property_floorplan', $temp);
            if($update){
               
            }else{
                return false;
            }
        }
      
        return true;
       
    }
    
    public function edit_property_faq(){
      
        $faq_question_arr = $this->input->post('faq_question[]');
        $faq_id_arr = $this->input->post('faq_id[]');
        $faq_answer_arr = $this->input->post('faq_answer[]');
        $faq_property_id_arr =  $this->input->post('property_id[]');
        $update_faq_update_arr = array();
        $update_faq_insert_arr = array(); 
        foreach($faq_question_arr as $ke=>$val){
           
            if(isset($faq_id_arr[$ke])){ 
                $temp = array();
                $temp['faq_id']  = $faq_id_arr[$ke];
                $temp['faq_question']  = $faq_question_arr[$ke];
                $temp['faq_answer']  = $faq_answer_arr[$ke];
                $temp['property_id']  = $faq_property_id_arr[$ke];
                array_push($update_faq_update_arr, $temp);
                $update = $this->db->where('faq_id', $temp['faq_id'])->update('property_faq', $temp);
                if($update == true){
                    
                }
                else{
                    return false;
                }
            }else{
                $temp = array();
                $temp['faq_question']  = $faq_question_arr[$ke];
                $temp['faq_answer']  = $faq_answer_arr[$ke];
                $temp['property_id']  = $faq_property_id_arr[0];
                array_push($update_faq_insert_arr, $temp);
            }
        }
        
        $result = true;
        if(!empty($update_faq_insert_arr)){
            $result = $this->db->insert_batch('property_faq',$update_faq_insert_arr);
        }
        
        if($result == true){
            return true;
        }
        else{
            return false;
        }
       
    }
    public function edit_property_feature()
    {
        $faq_property_id =  $this->input->post('id');
        $update_data = array( 'feature'   => implode(',', $_POST['features']));
        $update = $this->db->where('property_id', $faq_property_id)->update('property', $update_data);

        if($update == true){
           return true;         
        }
        else{
                return false;
            } 
    }
    public function edit_property_specification(){
        $id = $this->input->post('id');
        $specifications = $_POST['specification'];
        $specArr = array();
        foreach ($specifications as $key => $value) {
            array_push($specArr, array("spec".$key=> htmlspecialchars($value)) );
        } 
        $update_data = array('specification' => json_encode($specArr));
        $update = $this->db->where('property_id', $id)->update('property', $update_data);
       
        if($update == true)
        {   
            return true;            
        }
        else 
        {   
            return false;
        }
    }
    public function delete_property_by_id($id)
    {       
        $active_update = array( 'status' => 0 );    
        $update = $this->db->where('property_id', $id)->update('property', $active_update);       
        return true;       
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