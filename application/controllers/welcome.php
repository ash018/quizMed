<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function	__construct()
	{
		parent::__construct();
		$this->load->model('quizmodel');
		$this->load->helper(array('form','url'));
		
	}
	 
	public function index()
	{
		$this->load->view('quiz_game');
		
		//$this->load->view('registration');
	}
	
	public function index2()
	{
		//$this->load->view('quiz_game');
		
		//$data['main_content'] = $this->load->view('quiz_game');
		$this->load->helper(array('form','url'));
		//$this->load->view('registration');
		
		
		
		$this->load->model('quizmodel');
		$this->data['districts'] = $this->quizmodel->getDistrict();
		//var_dump($this->data);
		//$this->load->view('play_quiz', $this->data);
		
		$this->load->view('registration',$this->data);
		
	}
	
	public function user_form()
	{
		//var_dump($this->input->post('designation'));
		
		$save = array(
			'user_name'  => $this->input->post('user_name'),
			'user_email' => $this->input->post('user_email'),
			'Address' => $this->input->post('Address'),
			'designation' => $this->input->post('designation')
		);
		
		//exit();
		
		$this->quizmodel->saveUser($save);
		redirect('Questions/volumeDisplay');
	}
	
	
	
	
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>