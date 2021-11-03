<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bannermodel extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }

    
    public function insert_banner()
    {
        $now = date('Y-m-d H:i:s');  
        $count = count($_FILES['web_img']['name']); 
        for($i = 0; $i < $count; $i++) {
            if (isset($_FILES['web_img']) && !empty($_FILES['web_img']["name"]))
            {
                $_FILES['file']['name']     = $_FILES['web_img']['name'][$i]; 
                $_FILES['file']['type']     = $_FILES['web_img']['type'][$i]; 
                $_FILES['file']['tmp_name'] = $_FILES['web_img']['tmp_name'][$i]; 
                $_FILES['file']['error']    = $_FILES['web_img']['error'][$i]; 
                $_FILES['file']['size']     = $_FILES['web_img']['size'][$i];                             

                $config1['upload_path'] = './assets/admin/uploads/main_banner/web';   
                $config1['allowed_types'] = '*';  
                $config1['max_size'] = '30720';   
                $config1['encrypt_name'] = TRUE;   

                $this->load->library('upload', $config1); 
                $this->upload->initialize($config1);
                $this->upload->do_upload('file');                               
                $fileData = $this->upload->data();
                $uploadData[$i]['file_name'] = $fileData['file_name'];
            }   
            if (isset($_FILES['mobile_img']) && !empty($_FILES['mobile_img']["name"]))
            {
                $_FILES['file']['name']     = $_FILES['mobile_img']['name'][$i]; 
                $_FILES['file']['type']     = $_FILES['mobile_img']['type'][$i]; 
                $_FILES['file']['tmp_name'] = $_FILES['mobile_img']['tmp_name'][$i]; 
                $_FILES['file']['error']    = $_FILES['mobile_img']['error'][$i]; 
                $_FILES['file']['size']     = $_FILES['mobile_img']['size'][$i];                             

                $config2['upload_path'] = './assets/admin/uploads/main_banner/mobile';   
                $config2['allowed_types'] = '*';  
                $config2['max_size'] = '30720';   
                $config2['encrypt_name'] = TRUE;   

                $this->load->library('upload', $config2); 
                $this->upload->initialize($config2);
                $this->upload->do_upload('file');                               
                $mobData = $this->upload->data();
                $uploadData1[$i]['file_name'] = $mobData['file_name'];
            }

            $name = $this->input->post('name')[$i];
            $location = $this->input->post('location')[$i];
            $title = $this->input->post('title')[$i];

            $data = array(  'title'            =>  $title,
                            'desk_banner'      =>  $fileData['file_name'],
                            'property_name'    =>  $name,
                            'location'         =>  $location,
                            'mobile_banner'    =>  $mobData['file_name'],
                            'updated_at'       =>  $now,
                            'create_at'        =>  $now,
                        );
            $this->db->insert('main_banner',$data);
        }
            return true;
    }

    public function update_banner()
    {
             
        $now = date('Y-m-d H:i:s');  
        $count = count($this->input->post('title'));         
       
        for($i = 0; $i < $count; $i++) {

            $banner_id = $this->input->post('banner_id')[$i];
            $web_img = $_FILES['web_img']['name'][$i];
            $mob_img = $_FILES['mobile_img']['name'][$i];
           

                $update_data = array('title'         => $this->input->post('title')[$i],
                        'property_name'              => $this->input->post('name')[$i],
                        'location'                   => $this->input->post('location')[$i],
                );
                $update_webbanner = $this->db->where('banner_id', $banner_id)->update('main_banner', $update_data);  
                
                if(!empty($web_img))  {
                    print_r("web img");
                    $_FILES['file']['name']     = $_FILES['web_img']['name'][$i]; 
                    $_FILES['file']['type']     = $_FILES['web_img']['type'][$i]; 
                    $_FILES['file']['tmp_name'] = $_FILES['web_img']['tmp_name'][$i]; 
                    $_FILES['file']['error']    = $_FILES['web_img']['error'][$i]; 
                    $_FILES['file']['size']     = $_FILES['web_img']['size'][$i];                             

                    $config1['upload_path'] = './assets/admin/uploads/main_banner/web';   
                    $config1['allowed_types'] = '*';  
                    $config1['max_size'] = '30720';   
                    $config1['encrypt_name'] = TRUE;   

                    $this->load->library('upload', $config1); 
                    $this->upload->initialize($config1);
                    $this->upload->do_upload('file');                               
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name']; 
                   
                    $update_data = array('desk_banner'  => $fileData['file_name']);  
                    $update_webbanner = $this->db->where('banner_id', $banner_id)->update('main_banner', $update_data);  
                }
                if(!empty($mob_img))  {

                    $_FILES['file']['name']     = $_FILES['mobile_img']['name'][$i]; 
                    $_FILES['file']['type']     = $_FILES['mobile_img']['type'][$i]; 
                    $_FILES['file']['tmp_name'] = $_FILES['mobile_img']['tmp_name'][$i]; 
                    $_FILES['file']['error']    = $_FILES['mobile_img']['error'][$i]; 
                    $_FILES['file']['size']     = $_FILES['mobile_img']['size'][$i];                             

                    $config['upload_path'] = './assets/admin/uploads/main_banner/mobile';   
                    $config['allowed_types'] = '*';  
                    $config['max_size'] = '30720';   
                    $config['encrypt_name'] = TRUE;   

                    $this->load->library('upload', $config); 
                    $this->upload->initialize($config);
                    $this->upload->do_upload('file');                               
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name']; 
                   
                    $update_data = array('mobile_banner'  => $fileData['file_name']);  
                    $update_webbanner = $this->db->where('banner_id', $banner_id)->update('main_banner', $update_data);  
                    
                }  
         
                return true;
                 
        }
            

    }

   


}


