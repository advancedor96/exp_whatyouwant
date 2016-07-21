<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verify extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Members');
		$this->load->model('Donation_record');
	}

	public function verifyMember()
	{
		$this->Members->add(
				$this->input->post("name"),
				$this->input->post("ID"),
				$this->input->post("sex"),
				$this->input->post("tel"),
				$this->input->post("cellphone"),
				$this->input->post("address")
		);
		echo "成功";
	}

	public function verifyRecord()
	{
		/////////////////////////////
		// 檢查使用者輸入的資料是否合法 //
		/////////////////////////////


		///////////////////////////////////////////
		///
		//以下這一段是因為PHP 5.5以前的版本不支援empty(trim($x)) //
		//找到PHP版本在5.5以上的網頁空間後，改寫成：empty(trim($x))
		//
		///////////////////////////////////////////
		$name = trim($this->input->post("name"));
		$pay_by = trim($this->input->post("pay_by"));

		$amount = trim($this->input->post("amount"));
		$date = trim($this->input->post("date"));
		$receipt_address = trim($this->input->post("receipt_address"));

		if(empty($name) ){
			echo "<script>alert('新增失敗! 姓名沒填'); location.href='../Add_donation';</script>";
			return false;
		}
		if(empty($pay_by) ){
			echo "<script>alert('新增失敗! 捐款方式沒填'); location.href='../Add_donation';</script>";
			return false;
		}
		if(empty($amount) ){
			echo "<script>alert('新增失敗! 捐款金額沒填'); location.href='../Add_donation';</script>";
			return false;
		}
		if(empty($date) ){
			echo "<script>alert('新增失敗! 日期沒填'); location.href='../Add_donation';</script>";
			return false;
		}
		if(empty($receipt_address) ){
			echo "<script>alert('新增失敗! 收據寄送地址沒填'); location.href='../Add_donation';</script>";
			return false;
		}


		////////////
		//插入資料 //
		////////////

		if( $this->Donation_record->add(
			$this->input->post("name"),
			$this->input->post("id_no"),
			$this->input->post("EIN"),
			$this->input->post("amount"),
			$this->input->post("pay_by"),
			$this->input->post("date"),
			$this->input->post("receipt_address"),
			$this->input->post("remark")
			)){
			echo "<script>alert('新增成功!'); location.href='../Home';</script>";
		}else{
			echo "<script>alert('新增失敗...拒絕寫入資料庫'); location.href='../Add_donation';</script>";
		}


	}

}

/* End of file Verify.php */
/* Location: ./application/controllers/Verify.php */