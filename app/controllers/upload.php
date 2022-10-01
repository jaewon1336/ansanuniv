<?php

Class Upload extends Controller
{
	function index()
	{
		

		if (isset($_POST['subject']) && isset($_FILES['upfile']))
		{
			
			
			$uploader = $this->loadModel("upload");
			$uploader = new Upload_post;
			$uploader->upload($_POST,$_FILES);
			
		} else {
			// $uploader = $this->loadModel("upload");
			// $uploader = new Upload_post;
			// $uploader->upload($_POST,$_FILES);
		}
		
		$this->view("asu/upload");
	}

	

}

?>