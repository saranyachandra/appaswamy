<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pressmodel extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }

    public function insert_blog_details()
    {   
        
        $config['upload_path'] = './assets/admin/uploads/banner';   // Directory 
        $config['allowed_types'] = 'jpg|jpeg|bmp|png';  //type of images allowed
        $config['max_size'] = '30720';   //Max Size
        $config['encrypt_name'] = TRUE;   // For unique image name at a time

        $this->load->library('upload', $config);  //File Uploading library
        $this->upload->do_upload('banner_img');  // input name which have to upload 
        $banner_upload=$this->upload->data();   //variable which store the path

        $config2['upload_path'] = './assets/admin/uploads/thumb';   // Directory 
        $config2['allowed_types'] = 'jpg|jpeg|bmp|png'; //type of images allowed
        $config2['max_size'] = '30720';   //Max Size
        $config2['encrypt_name'] = TRUE;   // For unique image name at a time

        $this->upload->initialize($config2); 
        $this->upload->do_upload('thumb_img');  // File Name
        $thumb_upload=$this->upload->data(); // 

            $add_blog = array(                                  
                                    'title'             => $this->input->post('blog_title'),                                    
                                    'author'            => $this->input->post('blog_author'),
                                    'updated_date'      => $this->input->post('blog_date'),
                                    'banner_img'        => $banner_upload['file_name'],
                                    'thumb_img'         => $thumb_upload['file_name'],                                    
                                    'description'       => $this->input->post('editor'),                                        
                                    'updated_date'      => $this->input->post('facebook'),
                                    'create_at'         => date('Y-m-d'),

                                );
            $insert =  $this->db->insert('blog_post', $add_blog);
            if($insert == true)
                {           
                   return true;           
                }
            else 
                {   
                     return false;
                }
        
    }
    
    public function update_blog_det()
    {
            
        $id=$this->input->post('blog_id'); 

        if(!empty($_FILES['banner_img_new']['name']))
        {

            $config['upload_path'] = './assets/admin/uploads/banner';    
            $config['allowed_types'] = '*';  
            $config['max_size'] = '30720';  
            $config['encrypt_name'] = TRUE;   

            $this->load->library('upload', $config);  
            $this->upload->do_upload('banner_img_new');  
            $banner_upload=$this->upload->data(); 
            $banner = $banner_upload['file_name']; 
        } else{
            $banner = $this->input->post('banner_img');
        }

        if(!empty($_FILES['thumb_img_new']['name']))
        {
            $config2['upload_path'] = './assets/admin/uploads/thumb';   
            $config2['allowed_types'] = '*'; 
            $config2['max_size'] = '30720';  
            $config2['encrypt_name'] = TRUE;   

            $this->load->library('upload', $config2);
            $this->upload->do_upload('thumb_img_new');  
            $thumb_upload=$this->upload->data(); 
            $thumb = $thumb_upload['file_name'];
        }else{
            $thumb = $this->input->post('thumb_img');
        }

        $update_blog = array(                                   
                            'title'             => $this->input->post('blog_title'),                                    
                            'author'            => $this->input->post('blog_author'),
                            'updated_date'      => $this->input->post('blog_date'),
                            'banner_img'        => $banner,
                            'thumb_img'         => $thumb,                                           
                            'description'       => $this->input->post('editor'),                                        
                            'updated_date'      => $this->input->post('blog_date'),
                            'create_at'         => date('Y-m-d'),

                            );
        $update = $this->db->where('blog_id', $id)->update('blog_post', $update_blog);
        if($update == true)
        {           
           return true;           
        }
        else 
        {   
            return false;
        }
        
    }
    public function get_blog_details()
    {       
        $this->db->select('*');
        $this->db->from('blog_post');   
        $this->db->where('Active',1);
        $this->db->order_by('blog_id', 'desc');
        return $this->db->get()->result();
       
    }
    public function edit_blog_by_id($blog_id)
    {     
        $this->db->select('*');
        $this->db->from('blog_post');
        $this->db->where('blog_id',$blog_id);   
        return $this->db->get()->row();
    }
    public function delete_blog_by_id($id)
    {
       
        $active_update = array( 'Active' => 0 );    
        $update = $this->db->where('blog_id', $id)->update('blog_post', $active_update);       
        return true;       
    }

    public function add_press()
    {   
      
        $config['upload_path'] = './assets/admin/uploads/press/thumb_img';   // Directory 
        $config['allowed_types'] = '*';  //type of images allowed
        $config['max_size'] = '30720';   //Max Size
        $config['encrypt_name'] = TRUE;   // For unique image name at a time

        $this->load->library('upload', $config);  //File Uploading library
        $this->upload->do_upload('thumb_img');  // input name which have to upload 
        $thumb_upload = $this->upload->data();   //variable which store the path

       
        $config2['upload_path'] = './assets/admin/uploads/press/pdf';   
        $config2['allowed_types'] = 'pdf';              
        $config2['max_size'] = 0;   
        $config2['remove_spaces'] = TRUE;
        $config2['encrypt_name'] = TRUE;              

        $this->load->library('upload', $config2);
        $this->upload->initialize($config2); 
        $this->upload->do_upload('pdf_upload'); 
        $upload_pdf = $this->upload->data();
       
       

        $add_press = array(                                  
                            'title'             => $this->input->post('press_title'),
                            'news_url'          => $this->input->post('news_url'),                          
                            'description'       => $this->input->post('press_description'),                                   
                            'thumb_img'         => $thumb_upload['file_name'],                                    
                            'pdf_file'          => $upload_pdf['file_name'],                                        
                            'press_date'        => $this->input->post('press_date'),
                            'create_at'         => date('Y-m-d'),

                            );
        $insert =  $this->db->insert('press', $add_press);
        if($insert == true)
            {           
                return true;           
            }
        else 
            {   
                return false;
            }            
        
    }
    
    public function get_press_details()
    {       
        $result['activeTab'] = "press";     
        $this->db->select('*');
        $this->db->from('press'); 
        $this->db->where('Active',1);
        $this->db->order_by('press_id', 'desc');
        $query = $this->db->get();  
        return $query->result();
    }
    public function delete_press_by_id($id)
    {       
        $active_update = array( 'Active' => 0 );    
        $update = $this->db->where('press_id', $id)->update('press', $active_update);       
        return true;       
    }
    public function edit_press_by_id($id)
    {     
        $this->db->select('*');
        $this->db->from('press');
        $this->db->where('press_id',$id);   
        return $this->db->get()->row();
    }
    public function update_press_det()
    {
            
        $id=$this->input->post('press_id');  

        if(!empty($_FILES['thumb_img_new']['name']))
            {
                $config1['upload_path'] = './assets/admin/uploads/press/thumb_img';   
                $config1['allowed_types'] = '*';  
                $config1['max_size'] = '30720';   
                $config1['encrypt_name'] = TRUE;   

                $this->load->library('upload', $config1); 
                $this->upload->do_upload('thumb_img_new'); 
                $img_upload1 = $this->upload->data();
                $thumb = $img_upload1['file_name'];

            }
        else{
                $thumb = $this->input->post('thumb_img');               
            } 
        if(!empty($_FILES['pdf_upload_new']['name']))
        {
            $config2['upload_path'] = './assets/admin/uploads/press/pdf';   
            $config2['allowed_types'] = 'pdf';              
            $config2['max_size'] = 0;   
            $config2['remove_spaces'] = TRUE;
            $config2['encrypt_name'] = TRUE;              

            $this->load->library('upload', $config2);
            $this->upload->initialize($config2); 
            $this->upload->do_upload('pdf_upload_new'); 
            $upload_pdf = $this->upload->data();    
         }
        else{
                $upload_pdf = $this->input->post('pdf_upload');               
            } 

        $update_press = array(                                   
                            'title'             => $this->input->post('press_title'),                                    
                            'press_date'        => $this->input->post('press_date'),
                            'news_url'          => $this->input->post('news_url'),                                           
                            'description'       => $this->input->post('press_desc'),  
                            'thumb_img'         => $thumb, 
                            'pdf_file'          => $upload_pdf,                                  
                            'create_at'         => date('Y-m-d'),

                            );
        $update = $this->db->where('press_id', $id)->update('press', $update_press);
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