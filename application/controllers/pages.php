<?php
/**
* 
*/
class Pages extends CI_Controller
{
	public function _construct()
	{ 
		parent::_construct();
	}


	public function index()
	{
		$data = array();
		$data["name"]="aa2017";
		$this->load->view('template/header');
		$this->load->view('pages/home',$data);
		$this->load->view('template/footer');
	}


	public function about()
	{
		$data = array();
		$data["name"]="aa2015";
		$this->load->view('template/header');
		$this->load->view('pages/about',$data);
		$this->load->view('template/footer');
	}


	
	public function one($p1,$p2)
	{
		//
		echo "this is the one <br>" ;
		echo "the are params: $p1, $p2";

	}
	public function two()
	{
		//
		echo "this is the two";
	}

	
}
