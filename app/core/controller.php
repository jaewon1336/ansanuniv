<?php

Class Controller
{
	protected function view($view)
	{
		if (file_exists("../app/views/".$view.".php"))
		{
			include "../app/views/".$view.".php";
		} else {
			echo "404 error";
		}
	}


	protected function loadModel($model) 
	{
		if (file_exists("../app/models/".$model.".php")) 
		{
			include "../app/models/".$model.".php";
			
		}
		return false; 
	}




}

?>