<?php if (!defined ('BASEPATH')) exit('No direct script access allowed ');

class Questions extends CI_controler
{
	function __construct ()
	{
		parent::__construct();
		$this->load->database();
		
	}
	public function quizdisplay()
	{
		$this ->load->model('quizmodel');
		$this->data['questions']=$this->quizmodel->getQuestions();
		this->load->view('play_quiz',this->data);
		
	}
}
?>