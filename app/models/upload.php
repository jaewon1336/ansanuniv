<?php

Class Upload_post
{

	
	function upload($POST,$FILES)
	{
		
		
		$DB = new Database();
		// $allowed[] = "image/png";
		$allowed = array("image/png", "image/jpg", "image/jpeg");
		
		if(isset($POST['subject']) && isset($FILES['upfile']))
		{

			$countfiles = count($FILES['upfile']['name']);
			for($i=0; $i<$countfiles; $i++)
			{
				$filename = $FILES['upfile']['name'][$i];
				$target_file = 'uploads/'.$filename;
				move_uploaded_file($FILES['upfile']['tmp_name'][$i], $target_file);
				$file_img = $filename;
				$subject = $POST['subject'];
				$cate1 = $POST['cate1'];
				$cate2 = $POST['cate2'];
				$used = $POST['used'];
				$exchange = $POST['exchange'];
				$price = $POST['price'];
				$content = $POST['content'];
				$discount = $POST['discount'];
				$product_id = 1;

				$sql = "insert into product 
			 		(product_id,subject,content,price,discount,cate,cate2,used,exchange,file_img)
			 		values 
			 		('$product_id','$subject','$content','$price','$discount','$cate1','$cate2','$used','$exchange','$file_img')";
			 	$data = $DB->read($sql);
			 			 				
			}
			$product_id += 1;
			
			if(is_array($data))
			{
				header("Location:".ROOT."department?cate1=$cate1&cate2=$cate2");
				die;
			}


			
			

			// if($FILES['upfile']['name'] != "" && $FILES['upfile']['error'] == 0 && in_array($FILES['upfile']['type'], $allowed))
			// {

				// for ($i=0; $i<$countFiles; $i++)
				// {
				// 	$filename = $FILES['upfile']['name'][$i];
				// 	$destination = 'uploads/'.$filename;
				// 	move_uploaded_file($FILES['upfile']['tmp_name'][$i], $destination);

				// }

				// $folder = "uploads/";
				// if(!file_exists($folder))
				// {
				// 	mkdir($folder,0777,true);
				// }
				// $destination = $folder . $FILES['upfile']['name'];
				// move_uploaded_file($FILES['upfile']['tmp_name'], $destination);
			// } else{
			// 	echo "error";
			// }

			// $file_img = $destination;
			// $subject = $POST['subject'];
			// // $cate1 = $POST['cate1'];
			// // $cate2 = $POST['cate2'];
			// // $used = $POST['used'];
			// // $exchange = $POST['exchange'];
			// $price = $POST['price'];
			// $content = $POST['content'];
			// $discount = $POST['discount'];
			
			

			// $sql = "insert into product 
			// 	(subject, content, price, discount, file_img) 
			// 	values 
			// 	('$subject','$content', '$price' ,'$discount' ,'$file_img')";
			// $data = $DB->read($sql);
			// if($data)
			// {
			// 	header("Location:".ROOT."home");
			// 	die;
			// }
		}


			
	}

	function board($POST) 
	{
				
		if (isset($_SESSION['name']))
		    $name = $_SESSION['name'];
		else
		    $name = "";

		$DB = new Database();

		$subject = $POST['subject'];
		$regist_day = date("Y-m-d");
		$content = $POST['content'];
		$anony = $POST['anony'];

		$subject = htmlspecialchars($subject, ENT_QUOTES); 
		$content = htmlspecialchars($content, ENT_QUOTES);

		$sql = "insert into freeboard 
		(name,subject,regist_day,content)";

		if($anony)
		{
			$sql .= "values('익명','$subject','$regist_day','$content')";
			$result = $DB->read($sql);

			if (is_array($result))
			{
				header("Location:".ROOT."board");
				die;
			}
		} else {
			$sql .= "values('$name','$subject','$regist_day','$content')";
			$result = $DB->read($sql);

			if (is_array($result))
			{
				header("Location:".ROOT."board");
				die;
			}
		}

	}

	
	
}

?>