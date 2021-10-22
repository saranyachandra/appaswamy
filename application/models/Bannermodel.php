<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bannermodel extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }

    public function insert_banner()
    {
        $config1['upload_path'] = './assets/admin/uploads/main_banner';   
        $config1['allowed_types'] = 'jpg|jpeg|bmp|png|webp';
        $config1['max_size'] = '30720';   
        $config1['encrypt_name'] = TRUE;   

        $this->load->library('upload', $config1); 
        $this->upload->do_upload('banner_img_1'); 
        $banner_upload1=$this->upload->data();  

        $config2['upload_path'] = './assets/admin/uploads/main_banner';   
        $config2['allowed_types'] = 'jpg|jpeg|bmp|png|webp';
        $config2['max_size'] = '30720';  
        $config2['encrypt_name'] = TRUE;

        $this->upload->initialize($config2); 
        $this->upload->do_upload('banner_img_2');  
        $banner_upload2=$this->upload->data(); 

        $config3['upload_path'] = './assets/admin/uploads/main_banner';   
        $config3['allowed_types'] = 'jpg|jpeg|bmp|png|webp';
        $config3['max_size'] = '30720';  
        $config3['encrypt_name'] = TRUE;

        $this->upload->initialize($config3); 
        $this->upload->do_upload('banner_img_3');  
        $banner_upload3=$this->upload->data(); 

        $config4['upload_path'] = './assets/admin/uploads/main_banner';   
        $config4['allowed_types'] = 'jpg|jpeg|bmp|png|webp';
        $config4['max_size'] = '30720';  
        $config4['encrypt_name'] = TRUE;

        $this->upload->initialize($config4); 
        $this->upload->do_upload('banner_img_4');  
        $banner_upload4=$this->upload->data(); 

        $config5['upload_path'] = './assets/admin/uploads/main_banner';   
        $config5['allowed_types'] = 'jpg|jpeg|bmp|png|webp';
        $config5['max_size'] = '30720';  
        $config5['encrypt_name'] = TRUE;

        $this->upload->initialize($config5); 
        $this->upload->do_upload('banner_img_5');  
        $banner_upload5=$this->upload->data(); 


            $add_banner = array(                                
                                    'banner_img1'       => $banner_upload1['file_name'],                                    
                                    'banner_img2'       => $banner_upload2['file_name'],
                                    'banner_img3'       => $banner_upload3['file_name'],
                                    'banner_img4'       => $banner_upload4['file_name'],
                                    'banner_img5'       => $banner_upload5['file_name'],                          
                                    'create_at'         => date('Y-m-d'),
                                );
            $insert =  $this->db->insert('banner', $add_banner);   
          
            if($insert == true)
                {           
                    return true;           
                }
            else 
                {   
                    return false;
                }          
    }

    public function update_banner()
    {

            if(!empty($_FILES['banner_img_new1']['name'])){
                $config1['upload_path'] = './assets/admin/uploads/main_banner';   
                $config1['allowed_types'] = 'jpg|jpeg|bmp|png|webp';
                $config1['max_size'] = '30720';   
                $config1['encrypt_name'] = TRUE;   

                $this->load->library('upload', $config1); 
                $this->upload->do_upload('banner_img_new1'); 
                $img_upload1 = $this->upload->data();
                $banner_upload1 = $img_upload1['file_name'];

            }
            else{
                $banner_upload1 = $this->input->post('banner_img_1');               
            }

            if(!empty($_FILES['banner_img_new2']['name'])){
                $config1['upload_path'] = './assets/admin/uploads/main_banner';   
                $config1['allowed_types'] = 'jpg|jpeg|bmp|png|webp'; 
                $config1['max_size'] = '30720';   
                $config1['encrypt_name'] = TRUE;   

                $this->load->library('upload', $config1); 
                $this->upload->do_upload('banner_img_new2'); 
                $img_upload2 = $this->upload->data();
                $banner_upload2 = $img_upload2['file_name'];
            }
            else{
                $banner_upload2 = $this->input->post('banner_img_2');               
            }

            if(!empty($_FILES['banner_img_new3']['name'])){
                $config1['upload_path'] = './assets/admin/uploads/main_banner';   
                $config1['allowed_types'] = 'jpg|jpeg|bmp|png|webp';
                $config1['max_size'] = '30720';   
                $config1['encrypt_name'] = TRUE;   

                $this->load->library('upload', $config1); 
                $this->upload->do_upload('banner_img_new3'); 
                $img_upload3 = $this->upload->data();
                $banner_upload3 = $img_upload3['file_name'];
            }
            else{
                $banner_upload3 = $this->input->post('banner_img_3');               
            }
            if(!empty($_FILES['banner_img_new4']['name'])){
                $config1['upload_path'] = './assets/admin/uploads/main_banner';   
                $config1['allowed_types'] = 'jpg|jpeg|bmp|png|webp';
                $config1['max_size'] = '30720';   
                $config1['encrypt_name'] = TRUE;   

                $this->load->library('upload', $config1); 
                $this->upload->do_upload('banner_img_new4'); 
                $img_upload4 = $this->upload->data();
                $banner_upload4 = $img_upload4['file_name'];
            }
            else{
                $banner_upload4 = $this->input->post('banner_img_4');               
            }
            if(!empty($_FILES['banner_img_new5']['name'])){
                $config1['upload_path'] = './assets/admin/uploads/main_banner';   
                $config1['allowed_types'] = 'jpg|jpeg|bmp|png|webp'; 
                $config1['max_size'] = '30720';   
                $config1['encrypt_name'] = TRUE;   

                $this->load->library('upload', $config1); 
                $this->upload->do_upload('banner_img_new5'); 
                $img_upload5 = $this->upload->data();
                $banner_upload5 = $img_upload5['file_name'];
            }
            else{
                $banner_upload5 = $this->input->post('banner_img_5');               
            }

            $id=$this->input->post('banner_id');
            
            $update_banner = array(                                 
                                    'banner_img1'       => $banner_upload1,                                 
                                    'banner_img2'       => $banner_upload2,
                                    'banner_img3'       => $banner_upload3,                                           
                                    'banner_img4'       => $banner_upload4,                                     
                                    'banner_img5'       => $banner_upload5,
                                    'create_at'         => date('Y-m-d'),
                                );
            $update = $this->db->where('banner_id', $id)->update('banner', $update_banner);
            if($update == true)
                {           
                    return true;           
                }
            else 
                {   
                    return false;
                }   
       
    }



}


