<?php
/**
* 
*/
class Pages extends CI_Controller
{
	public function _construct()
	{ 
		parent::_construct();
		$dataHeader = array();

	}


	public function index()
	{

		$data = array();
		$data["name"]="aa2017";
		$dataHeader["title"] = "home";
		$this->load->view('template/header', $dataHeader);
		$this->load->view('pages/home',$data);
		$this->load->view('template/footer');
	}


	public function about()
	{
		$data = array();
		$dataHeader["title"]="about";
		$this->load->view('template/header', $dataHeader);
		$this->load->view('pages/about',$data);
		$this->load->view('template/footer');
		}

		public function contact()
	{$data = array();
		$dataHeader["title"] = "contact";
		$this->load->view('template/header', $dataHeader);
		$this->load->view('pages/contact',$data);
		$this->load->view('template/footer');
	}

	public function map()
	{$data = array();//contenu de la bage
		$dataHeader["title"] = "map";//nom de la page url
		$this->load->view('template/header',$dataHeader);
		$this->load->view('pages/map',$data);
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
