<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_donation extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form'));
	}

	public function index()
	{
		if(!$this->session->userdata("logged_in")){
			redirect('login','refresh');
		}

		// $this->load->view('header');
		// $this->load->view('menu');
		$this->load->view('add_donation_view');
		// $this->load->view('footer');
	}

}

/* End of file Add_donation.php */
/* Location: ./application/controllers/Add_donation.php */