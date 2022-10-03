<?php

Class Board_form extends Controller{
	
	function index()
	{
		

		if (isset($_POST['subject']))
		{
			
			
			$uploader = $this->loadModel("upload");
			$uploader = new Upload_post;
			$uploader->board($_POST);
			
		} else {
			// $uploader = $this->loadModel("upload");
			// $uploader = new Upload_post;
			// $uploader->upload($_POST,$_FILES);
		}
		
		$this->view("asu/board_form");
	}

	
}


?> 