<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messages extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}


	public function getMsgsFromPid($p_id){
		$str = "SELECT message FROM `messages` where p_id={$p_id} limit 5";
		$arr = $this->db->query($str)->result_array();;

		return $arr;
	}

	public function addMsg($p_id, $msg){
		$data = array(
			'p_id' => $p_id,
			'message' => $msg
		);


		if ( $this->db->insert('messages', $data) ){
			return TRUE;
		}else{
			return FALSE;
		}
	}
}

/* End of file Messages.php */
/* Location: ./application/models/Messages.php */