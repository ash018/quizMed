<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();


class Questions extends CI_Controller {
	
		public
			$globalArr,
			$foo;

	function __construct() {
		parent::__construct();
		$this->load->database();
		
		$this->load->library('form_validation');
		
		$this->load->library('session');
		
		$this->load->model('login_database');
		
		
		//public  $globalArr [100];

	}

	public function   quizdisplay()
	{
		
		
		$this->load->model('quizmodel');
		$this->data['questions'] = $this->quizmodel->getQuestions();
		//var_dump();
		$this->load->view('play_quiz', $this->data);
		
		
		
	}
	
	public function volumeDisplay()
	{
		
		
		
		$this->load->view('vol_display');
		
		
		
	}
	
	
	public function quizdisplay2()
	{
		
		$this->data['quiz1ans'] = array(
		     'ques1' => $this->input->post('quizid1'),
		     
		);
		
		
		$this->load->library('session');
        $Id = array($this->input->post('quizid1'));
		//array_push($Id,$this->input->post('quizid1'));
		//$Id =  $this->input->post('quizid1')
        $this->session->set_flashdata('item', $Id);

		//print_r($this->input->post('quizid1'));
		
		$this->load->model('quizmodel');
		$this->data['questions'] = $this->quizmodel->getQuestions();
		$this->load->view('play_quiz2', $this->data);
		
		      $this->foo = 'bar';

		
		
	}
	
	public function quizdisplay3()
	{
		
		$this->data['quiz2ans'] = array(

		     'ques2' => $this->input->post('quizid2'),
			 
		);
	
		
		$myVar = $this->session->flashdata('item');

		//var_dump($myVar);
		
		$globalArr2 = $this->data;
		//var_dump($globalArr2);



		$this->load->library('session');
       // $Id2 = $this->data;
	    $Id2 = array();
		array_push($Id2,$this->input->post('quizid2'));
		array_push($Id2,$myVar[0]);
		//var_dump($Id2);
        $this->session->set_flashdata('item2', $Id2);
		
		
		
		$this->load->model('quizmodel');
		$this->data['questions'] = $this->quizmodel->getQuestions();
		$this->load->view('play_quiz3', $this->data);
	}
		
	public function index() {
		$this->load->view('login_form');
	}
	
	public function medquizRegistration() {
		
		
		
		$this->load->model('quizmodel');
		$this->data['districts'] = $this->quizmodel->getDistrict();
		//var_dump();
		//$this->load->view('play_quiz', $this->data);
		
		$this->load->view('registration_form',$this->data);
	}
	
	
	
	public function resultdisplay()
	{
		
		$myVar = $this->session->flashdata('item');
		$myVar2 = $this->session->flashdata('item2');
		
		//var_dump($myVar);
		//var_dump($myVar2[1]);
		
		
		
		$this->data['checks'] = array(
//'ques1' => $this->input->post('quizid1'),
			 'ques1' => $myVar2[1], 
		     'ques2' => $myVar2[0],
			 'ques3' => $this->input->post('quizid3'),
			 'ques4' => $this->input->post('quizid4'),
		     'ques5' => $this->input->post('quizid5'),
			 'ques6' => $this->input->post('quizid6'),
			 'ques7' => $this->input->post('quizid7'),
			 'ques8' => $this->input->post('quizid8'),
		     'ques9' => $this->input->post('quizid9'),
			 'ques10' => $this->input->post('quizid10'),
		);
		
		//var_dump($this->data);

        $this->load->model('quizmodel');
		$this->data['results'] = $this->quizmodel->getQuestions();
		$this->load->view('result_display', $this->data);
	}
	
	
	
	
	
	
	
	public function user_login_process() {

			$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

			if ($this->form_validation->run() == FALSE) {
			if(isset($this->session->userdata['logged_in'])){
			$this->load->view('admin_page');
			}else{
			$this->load->view('login_form');
			}
			} else {
			$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
			);
			$result = $this->login_database->login($data);
			if ($result == TRUE) {

			$username = $this->input->post('username');
			$result = $this->login_database->read_user_information($username);
			if ($result != false) {
			$session_data = array(
			'username' => $result[0]->user_name,
			'email' => $result[0]->user_email,
			);
			// Add user data in session
			//$this->session->set_userdata('logged_in', $session_data);
			//var_dump($session_data);
			
			$data['id'] = $session_data;
			$data2['id2'] = $session_data;
			
			echo "<pre>";
			//print_r($session_data[1]);
			
			echo "<h1>Hello ";
			print $session_data['username'];
			echo "</pre>";
			$this->load->view('hello',$data);
			//$this->load->view('result_display',$data2);
			}
			} else {
			$data = array(
			'error_message' => 'Invalid Username or Password'
			);
			$this->load->view('login_form', $data);
			}
			}
	}
	
	
	
	
	public function new_user_registration() {

			// Check validation for user input in SignUp form
			$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
			$this->form_validation->set_rules('email_value', 'Email', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
			if ($this->form_validation->run() == FALSE) {
			$this->load->view('registration_form');
			} else {
			$data = array(
			'user_name' => $this->input->post('username'),
			'user_email' => $this->input->post('email_value'),
			'user_password' => $this->input->post('password')
			);
			$result = $this->login_database->registration_insert($data);
			if ($result == TRUE) {
			$data['message_display'] = 'Registration Successfully !';
			$this->load->view('login_form', $data);
			} else {
			$data['message_display'] = 'Username already exist!';
			$this->load->view('registration_form', $data);
			}
			}
	}
	
	
	
	
	
}

