<?php

Class User 
{

	function signup($POST, $charset='UTF-8')
	{
		$DB = new Database();
		if(isset($POST['name']) AND isset($POST['pass'])) 
		{

			$name = $POST['name'];
			$pass = $POST['pass'];
			$email = $POST['email'];
			htmlentities($POST['name']);
			htmlentities($POST['pass']);
			$sql = "insert into members (email,pass,name) ";
			$sql .= "values ('$email','$name','$pass')";
			$data = $DB->read($sql);

			header("Location:".ROOT."login");
			die;

		}
	}

	function login($POST)
	{
		$DB = new Database();
		if(isset($POST['name']) AND isset($POST['pass']))
		{
			$name = $POST['name'];
			$pass = $POST['pass'];
			$sql = "select * from members where name='$name' && pass='$pass' limit 1";
			$data = $DB->read($sql);
			if(is_array($data))
			{
				
				$_SESSION['name'] = $data[0]['name'];
				$_SESSION['email'] = $data[0]['email'];
				header("Location:".ROOT."home");
				die;

			}  else {
				echo "아이디와 비번이 일치하지 않습니다.";
			}
		}
	}


	function logout()
	{
		unset($_SESSION['email']);
		unset($_SESSION['name']);

		header("Location:".ROOT."home");
		die;
	}

}

?>