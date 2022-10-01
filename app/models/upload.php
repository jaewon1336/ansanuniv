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
				// $cate1 = $POST['cate1'];
				// $cate2 = $POST['cate2'];
				// $used = $POST['used'];
				// $exchange = $POST['exchange'];
				$price = $POST['price'];
				$content = $POST['content'];
				$discount = $POST['discount'];

				$sql = "insert into product 
			 		(subject,content,price,discount,file_img)
			 		values 
			 		('$subject','$content','$price','$discount','$file_img')";
			 	$data = $DB->read($sql);
				if($data)
				{
					header("Location:".ROOT."home");
					die;
				}
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
}

?>