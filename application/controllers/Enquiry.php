<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();		
		
		$this->load->helper(array('form','url'));
		$this->load->database();
		$this->load->model('Propertymodel');
		
		
	}
	
}