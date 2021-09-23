<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();	
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Authorization");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");	
		$this->load->library('session'); 
		$this->load->helper(array('form','url'));
		$this->load->database();
		
	}
	public function index()
	{
		$this->load->view("admin/login");
	}
	public function login_auth()
	{
		$response = array();

		$user_name = $_POST["user_name"];
	    $password = $_POST["password"];

	    $credential = array('admin_name' => $user_name, 'password' => $password);
	    $query = $this->db->get_where('login_auth', $credential)->result();
	 	
	        if($query == true)
						{		 	
							foreach ($query as $queries) 
							{
								$response['status'] = 'success'; 
								$this->session->set_userdata('admin_id', $queries->admin_id);
								$this->session->set_userdata('user_name', $queries->admin_name);
							}			
						}
						else 
						{	
						 	$response['status'] = 'failed';						 	
						}
		echo json_encode($response);

	}

	public function logout()
    {
        $this->session->sess_destroy();
        redirect('Login/index');
    }






}



