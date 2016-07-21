<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analysis extends CI_Controller {

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
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('analysis_view');
		$this->load->view('footer');
	}

}

/* End of file Analysis.php */
/* Location: ./application/controllers/Analysis.php */