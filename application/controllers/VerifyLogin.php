<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form'));
	}

	public function index()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");

		if($username =="admin" && $password=="4321"){
			$session_array = array('id' => "admin");
			$this->session->set_userdata("logged_in", $session_array);
			redirect('Home','refresh');
		}else{

			echo "<script>alert('登入失敗!'); location.href='../';</script>";
		}
	}

}

/* End of file VerifyLogin.php */
/* Location: ./application/controllers/VerifyLogin.php */