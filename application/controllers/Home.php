<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();		
		$this->load->library('session'); 
		$this->load->helper(array('form','url'));
		$this->load->database();
		$this->load->model('');		
	}
	
	public function index()
	{		
		$this->load->view('web/index');
	}
	public function magazine()
	{	
		//SELECT * FROM `blog_post` where updated_date not in(SELECT max(updated_date) FROM `blog_post`); without show last row

		$this->db->select('*');
	  	$this->db->from('blog_post'); 	
	  	$result['details']  = $this->db->get()->result();

	  	$result['last_row'] = $this->db->order_by('blog_id',"desc")
            ->limit(1)
            ->get('blog_post')
            ->row();  
		
		$this->load->view('web/magazine',$result);
	}
	
	public function magazine_details($blog_id)
	{		
		
		$this->db->select('*');
	  	$this->db->from('blog_post');
	  	$this->db->where('blog_id',$blog_id);	
	  	$result['details']  = $this->db->get()->row();	  	  	
		$this->load->view('web/magazine_details',$result);
	}

	/*public function storeAddress(){
        $data['email'] = $this->input->post('email');
        $data['api'] = '8e2363f94883556c7d761f442ab145f5-us5';
        $data['audience_id'] = '995df5ea2f';
        $this->load->library('MailChimp',$data);

        // Validation
        if(!$data['email']){
            $this->session->set_flashdata('invalid_email', 'Email address is invalid');
        }

        if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*$/i", $data['email'])) {
            $this->session->set_flashdata('invalid_email', 'Email address is invalid');
        }

        if($this->mcapi->listSubscribe($data['list_id'], $data['email'], '') === true) {
            // It worked!    
            $this->session->set_flashdata('success', 'Please check your email to confirm signup');
        }else{
            // An error ocurred, return error message    
            // return 'Error: ' . $api->errorMessage;
            $this->session->set_flashdata('error', 'Something went wrong');
        }

    }*/


}