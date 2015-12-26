<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Pages extends CI_Controller {
	function __construct(){
		// Call the Controller constructor
		parent::__construct();
		$this->load->library('form_validation');
	}

function index(){
	$value=array();
	if($data=$this->model_user->read_user())
	{
		$value['record']=$data;
	}


}

	function about(){
		
		$dataHeader['title']='about';
		$this->load->view('template/header', $dataHeader); //pourquoi on ne met pas l'adresse complete views/template/header
		$this->load->view('pages/about',$data);
		$this->load->view('template/footer');



		/*
		$data=array('login' => $this->input->post('login'),
			'password'=>$this->input->post('password'));
		if(!empty($data['login']) && !empty($data['password']))
		{
			$this->model_user->add_user($data);
		} else{ echo 'please complete all fields';}
		$this->index();
		*/
	}







	/*var $dataHeader = array();
	 function _construct()
	{ 
		parent::_construct();



	}*/


	public function home()// la 1ere methode tjr s'appelle index!!!
    {

		//$data = array();
		//$data["name"]="aa2017";
		$dataHeader["title"] = "home"; // nom dans url
		$this->load->view('template/header', $dataHeader); //pourquoi on ne met pas l'adresse complete views/template/header
		$this->load->view('pages/home');
		$this->load->view('template/footer');
	}




	/* function about()
	{
		/*$data = array();

		$user_data = array(
			'login' => $this->input->post('username'),
			'password' => $this->m_user->hash_password( $this->input->post('password') )
		);
		$this->load->model('m_user');


		$user_data = array(
			'login' => 'looo',
			'password' => "fdfh"
		);

		$this->m_user->save($user_data);


		$dataHeader["title"]="about";
		$this->load->view('template/header', $dataHeader);
		$this->load->view('pages/about',$data);
		$this->load->view('template/footer');
		}*/






	public function contact(){//$data = array();
		$dataHeader["title"] = "contact";
		$this->load->view('template/header', $dataHeader);
		$this->load->view('pages/contact');
		$this->load->view('template/footer');
	}

	public function map(){//$data = array();//contenu de la bage
		$dataHeader["title"] = "map";//nom de la page url
		$this->load->view('template/header',$dataHeader);
		$this->load->view('pages/map');
		$this->load->view('template/footer');
	}
}


	
