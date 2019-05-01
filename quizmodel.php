<?php if (!defined ('BASEPATH')) exit('No direct script access allowed ');

class Questions extends CI_model
{
	function getQuestions ()
	{
		$this->db->select("	quizID,question,choice1,choice2,choice3,answer")();
		$this->db->from("quiz-app");
		$query =$this->db->get();
		 return $query->result();
		 $num_data_returned =$query->num_rows;
		 
		 if($num_data_returned<1)
		 {
			 echo "THERE IS NO DATA IN THE DATA BASE";
			 exit();
		 }
	}
	
}

?>