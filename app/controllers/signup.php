<?php

Class SignUp extends Controller {
	function index()
	{
		$user = $this->loadModel("user");
		$user->signup($_POST);
		$this->view("asu/signup");
	}
	
}

?>

