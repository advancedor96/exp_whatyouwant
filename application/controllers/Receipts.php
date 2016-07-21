<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Receipts extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('donation_record');
	}

	public function index()
	{
		$receipt_no = $this->input->get("i");
		$query = $this->db->get_where('donation_record', array('o_id' => $receipt_no));

		$data = $query->result_array()[0];

		$this->load->view('example_038', $data, FALSE);
	}

}

/* End of file Receipts.php */
/* Location: ./application/controllers/Receipts.php */