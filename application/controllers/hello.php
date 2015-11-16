<?php
/**
* 
*/
class Hello extends CI_Controller
{
	public function _construct()
	{ 
		parent::_construct();

		echo "this is the inialization<br>";
	}


	public function index()
	{
		$data = array();
		$data["name"]="aa2015";
		$this->load->view('hello',$data);
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
