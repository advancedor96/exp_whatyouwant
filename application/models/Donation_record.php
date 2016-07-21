<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donation_record extends CI_Model {

	public function __construct()
	{
		// Call the CI_Model constructor
		parent::__construct();
	}
	public function get_last_ten_entries()
	{
	       $query = $this->db->get('donation_record', 10);
	       return $query->result();
	}

	public function get_all_entries()
	{
	       $query = $this->db->get('donation_record');
	       return $query->result();
	}

	public function add($my_name, $id_no, $EIN, $my_amount, $pay_by, $date, $receipt_address, $remark){
		// echo "in model, ".$my_amount;die;
		$data = array(
			'name' => $my_name,
			'id_no' => $id_no,
			'EIN' => $EIN,
			'amount' => $my_amount,
			'pay_by' => $pay_by,
			'datetime' => $date,
			'receipt_address' => $receipt_address,
			'remark' => $remark
		);


		if ( $this->db->insert('donation_record', $data) ){
			return TRUE;
		}else{
			return FALSE;
		}
	}



}

/* End of file Donation_record.php */
/* Location: ./application/models/Donation_record.php */