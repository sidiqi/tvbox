<?php
	 
	 if(isset($_POST['table_name'])){
	$mysqli = new mysqli ("project.local", "root", "root", "tvbox");
	$mysqli->query ("SET NAMES 'utf-8'");

	$name = $_POST['name'];
	$model = $_POST['model'];
	$placement = $_POST['placement'];
	$time = $_POST['time'];
	$date = $_POST['date'];
	$status = $_POST['status'];
	$video = $_POST['video'];
	// $status = 'Ok';
	// $video = 'URL';

	$success = $mysqli->query ("INSERT INTO `console` (`name`, `model`, `placement`, `status`, `video`, `time`, `date`) VALUES ('$name', '$model', '$placement', '$status', '1', '$time', '$date')");

	$ok = 'Приставка успешно добавлена!';
	
 echo '<div class="alert alert-success" role="alert">' . $ok . '</div>';



}

?>