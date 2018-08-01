<?php
require_once 'db/connection.php';


	//Удаление записей
	if(isset($_GET['id'])){   
		$link = mysqli_connect($host, $user, $password, $database) 
				or die("Ошибка " . mysqli_error($link)); 
		$id = mysqli_real_escape_string($link, $_GET['id']);
		 
		$query ="DELETE FROM console WHERE ConsoleID = '$id'";
	
		echo '<div class="alert alert-success" role="alert">Приставка успешно удалена!</div>';
	 
		$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
		mysqli_close($link);
	}


	//Получаем значения из формы добавления

		$name = strip_tags($_POST['name']);
		$model = strip_tags($_POST['model']);
		$placement = $_POST['placement'];
		$time = $_POST['time'];
		$date = $_POST['date'];
		$video_link = strip_tags($_POST['video']);

	//Добавление записей со статусом "Работает"

	if(isset($_POST['add']) && ($_POST['status'])){
		
		
		$status = '<font color="green">Работает</font>';
		
		$success = $mysqli->query ("INSERT INTO `console` (`name`, `model`, `placement`, `status`, `video`, `time`, `date`) VALUES ('$name', '$model', '$placement', '$status', '$video_link', '$time', '$date')");

		$success2 = $mysqli->query ("INSERT INTO `video` (`VideoLink`) 
									 VALUES ('$video_link')");


		
		echo '<div class="alert alert-success" role="alert">Приставка успешно добавлена!</div>';
	}


	//Добавление записей со статусом "Не работает"
	if(isset($_POST['add']) && (!$_POST['status'])){
		
		$status2 = '<font color="red">Не работает</font>';
		
		$success = $mysqli->query ("INSERT INTO `console` (`name`, `model`, `placement`, `status`, `video`, `time`, `date`) VALUES ('$name', '$model', '$placement', '$status2', '$video_link', '$time', '$date')");

		$success2 = $mysqli->query ("INSERT INTO `video` (`VideoLink`) VALUES ('$video_link')");

		
		echo '<div class="alert alert-success" role="alert">Приставка успешно добавлена!</div>';


}

?>


