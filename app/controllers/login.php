<?php

Class Login extends Controller{
	function index()
	{
		$user = $this->loadModel("user");
		$user = new User;
		$user->login($_POST);
		$this->view("asu/login");
	}
}

?>