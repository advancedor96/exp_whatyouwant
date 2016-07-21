<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Model {
	public function add($name, $ID, $sex, $tel, $cellphone, $address){
		$data = array(
			'name' =>  $name,
			'ID' => $ID,
			'sex' => $sex,
			'tel' => $tel,
			'cellphone' => $cellphone,
			'address' => $address
		);

		if ( $this->db->insert('donors', $data) ){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function get_pid($name, $ID){
		$sql_str = sprintf("SELECT `p_id` FROM `donors` WHERE id = '%s' and name = '%s'", $ID, $name);
		$query = $this->db->query($sql_str);
		//var_dump($query);die;
		if($query->num_rows() == 1){
			//帳號與密碼正確
			return $query->result()[0]->p_id;
		}else{
			return FALSE;
		}
	}
	

}

/* End of file Members.php */
/* Location: ./application/models/Members.php */