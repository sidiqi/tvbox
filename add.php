<?php
	 
	 if(isset($_POST['add'])){
	$mysqli = new mysqli ("project.local", "root", "root", "tvbox");
	$mysqli->query ("SET NAMES 'utf-8'");

	$name = $_POST['name'];
	$model = $_POST['model'];
	$placement = $_POST['placement'];
	// $status = 'Ok';
	// $video = 'URL';

	$success = $mysqli->query ("INSERT INTO `console` (`name`, `model`, `placement`, `status`, `video`) VALUES ('$name', '$model', '$placement', 'status', '1')");

	echo 'Приставка успешно добавлена!';


}

?>


	<form method="POST" action="add.php">
			
			Марка<br><input type="text" name="name"/><br>
			Модель<br><input type="text" name="model"/><br><br>
			
			<select name="placement">
  				<option value="1">Омега</option>
 				<option value="2">Торговый квартал</option>
 				<option value="3">Сити Молл</option>
 				<option value="4">Sunrise</option>
 				<option value="5">Палитра</option>
			</select>

			<input type="submit" name="add" value="добавить" />

	</form>
