<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pressmodel extends CI_Model
{
	function __construct()
    {
        parent::__construct();
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
    


}