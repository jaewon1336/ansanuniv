<?php

Class SignUp extends Controller {
	function index()
	{
		$user = $this->loadModel("user");
		$user = new User;
		$user->signup($_POST);
		$this->view("asu/signup");
	}
	
}

?>

