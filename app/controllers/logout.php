<?php

Class Logout extends Controller{
	function index()
	{
		$user = $this->loadModel("user");
		$user = new User;
		$user->logout();
		
	}
}

?>