<?php
	
	$DB = new Database();
	$result = $DB->read("select * from members");

?>
<?= require "header.php" ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
	foreach  ($result as $row) {
		echo rawurlencode($row['name']);
		echo rawurlencode($row['email']);
	?>
	<li><?=$row['name']?></li>
	<li><?=$row['email']?></li>
	<?php
	}
	?>
</body>
</html>