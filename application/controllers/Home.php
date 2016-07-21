<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form'));
		$this->load->model('Messages');
	}

	public function index($status="none")
	{
		$commentsOfLegislator1 = $this->Messages->getMsgsFromPid(1);
		$commentsOfLegislator2 = $this->Messages->getMsgsFromPid(2);
		$commentsOfLegislator3 = $this->Messages->getMsgsFromPid(3);
		$commentsOfLegislator4 = $this->Messages->getMsgsFromPid(4);
		$commentsOfLegislator5 = $this->Messages->getMsgsFromPid(5);
		$commentsOfLegislator6 = $this->Messages->getMsgsFromPid(6);
		$commentsOfLegislator7 = $this->Messages->getMsgsFromPid(7);
		$commentsOfLegislator8 = $this->Messages->getMsgsFromPid(8);
		$commentsOfLegislator9 = $this->Messages->getMsgsFromPid(9);
		$commentsOfLegislator10 = $this->Messages->getMsgsFromPid(10);
		$commentsOfLegislator11 = $this->Messages->getMsgsFromPid(11);
		$commentsOfLegislator12 = $this->Messages->getMsgsFromPid(12);
		$commentsOfLegislator13 = $this->Messages->getMsgsFromPid(13);
		$commentsOfLegislator14 = $this->Messages->getMsgsFromPid(14);
		$commentsOfLegislator15 = $this->Messages->getMsgsFromPid(15);
		//print_r($arr);die;


		// $data = array( "1" => $arr[0][message] ,
		// 					"2" => $arr[1][message] ,
		// 					"1" => $arr[2][message] ,
		// 					"1" => $arr[3][message] ,
		// 					"1" => $arr[4][message] ,
		// 	);
		$data = array(	"legislator1"  => $commentsOfLegislator1 ,
							"legislator2"  => $commentsOfLegislator2 ,
							"legislator3"  => $commentsOfLegislator3 ,
							"legislator4"  => $commentsOfLegislator4 ,
							"legislator5"  => $commentsOfLegislator5 ,
							"legislator6"  => $commentsOfLegislator6 ,
							"legislator7"  => $commentsOfLegislator7 ,
							"legislator8"  => $commentsOfLegislator8 ,
							"legislator9"  => $commentsOfLegislator9 ,
							"legislator10" => $commentsOfLegislator10,
							"legislator11" => $commentsOfLegislator11,
							"legislator12" => $commentsOfLegislator12,
							"legislator13" => $commentsOfLegislator13,
							"legislator14" => $commentsOfLegislator14,
							"legislator15" => $commentsOfLegislator15);
		if($status == "none")
			$this->load->view('home_view', $data);
		else if($status == "success"){

			$data["status"] = "success";
			$this->load->view('home_view', $data);

		}else if($status == "fail"){

			$data["status"] = "fail";
			$this->load->view('home_view', $data);

		}
		//$this->load->view('footer');
	}
	public function addmsg()
	{
		$p_ids = $this->input->post("legislator");
		$msg = $this->input->post("comment");

		for($i=0;$i<count($p_ids);$i++)
		{
			if($this->Messages->addMsg($p_ids[$i], $msg)){
				$this->index("fail");
			}
			else{
				$this->index("fail");
			}
		}
		//看有幾個
		//跑迴圈，一一寫入
		//
		//取得p_id
		//取得訊息
		// $username = $this->input->post("username");
		// $password = $this->input->post("password");

		// if($this->Messages->addMsg())
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */