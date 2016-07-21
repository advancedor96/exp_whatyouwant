<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_donor extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form'));
	}
	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('add_donor_view.html');
		$this->load->view('footer');
	}

}

/* End of file Add_donor.php */
/* Location: ./application/controllers/Add_donor.php */