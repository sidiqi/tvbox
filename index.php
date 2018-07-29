<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<title>Tv Box: control center</title>
	

	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	
	<script type="text/javascript">

	$(document).on('click', '#ShowAll', function() {

		var table_name = $('#table_name').val();

		$.ajax({
				method: 'POST',
				url: 'functions.php',
				data: { table_name: table_name},
				success: function(response){
					$('#table').html(response);
				}
			}); 
		});
  
	</script> 

<!-- 	 <script type="text/javascript">

	$(document).on('click', '#button2', function() {

		var table_name = $('#table_name').val();

		$.ajax({
				method: 'POST',
				url: 'functions.php',
				data: { table_name: table_name},
				success: function(response){
					$('#table').html(response);
				}
			}); 
		});
  
	</script>  -->
 
	<style type="text/css">
		a {
			text-decoration: none; 
			color: white;
		}

		a:hover {
			text-decoration: none; 
			color: white;
		}
		
		.btn1 {
			width: 100px!important;
			border-radius: 0px;
			margin: 2px!important;
		}

		.btn1 {
			
			border-radius: 0px;
			
		}

		.input-group-text {
			width: 90px!important;
		}



	</style>

	</head>

	<body>

	 <nav style="background-color: black" class="navbar navbar-expand-lg navbar-dark">
			<div class="container">
				<a class="navbar-brand" href="index.php">Tv Box: Control center</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="">LOG OUT</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>



<div class="container">
		<h2><font color="white">Приставка</font></h2>

		<div class="row">
			
			<div class="col-md-4">
				<h5>Найти приставку</h5><hr>
				<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Введите название" aria-label="Recipient's username" aria-describedby="button-addon2">
  <div class="input-group-append">
    <button class="btn btn-primary" type="button" id="button-addon2">Поиск</button>
  </div>
</div>
			

			<div name="table_name" id="table_name"> </div>
				
			<button id="ShowAll" type="button" class="btn btn-outline-primary">Показать все приставки</button>

			
			<br>
			<br>
			<br>
			<h5>Добавить приставку</h5><hr>


	<form method="POST" action="index.php">
 			<div class="input-group input-group-default mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="inputGroup-sizing-default">Марка</span>
			  </div>
			  <input name="name" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
			</div>

			<div class="input-group input-group-default mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="inputGroup-sizing-default">Модель</span>
			  </div>
			  <input name="model" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
			</div>

			<input type="hidden" name="time" value=" <?php echo date('H:i');?> " />
			<input type="hidden" name="date" value=" <?php echo date('Y-m-d');?> " />

			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <label class="input-group-text" for="inputGroupSelect01">Место</label>
			  </div>
			  <select name="placement" class="custom-select" id="inputGroupSelect01">
			    <option selected>Выберите</option>
			    <option value="1">Омега</option>
			    <option value="2">Торговый квартал</option>
			    <option value="3">Сити Молл</option>
			    <option value="4">Sunrise</option>
			    <option value="5">Палитра</option>
			  </select>
			</div>

			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <label class="input-group-text" for="inputGroupSelect01">Статус</label>
			  </div>
			  <select name="status" class="custom-select" id="inputGroupSelect01">
			    <option selected>Выберите</option>
			    <option value="Online">Online</option>
			    <option value="Offline">Offline</option>
			  </select>
			</div>

			<div class="input-group input-group-default mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="inputGroup-sizing-default">Видео</span>
			  </div>
			  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
			</div>
			<input value="Добавить" type="submit" name="add" id="Add" type="button" class="btn btn-primary"/>
 
	</form>





			</div>




			<div class="col-md-1">
					
			</div>

			<div class="col-md-7">
				<h5>Информация</h5><hr>


			<div id="table"></div>
			<?php
require_once 'connection.php';
if(isset($_GET['id']))
{   
    $link = mysqli_connect($host, $user, $password, $database) 
            or die("Ошибка " . mysqli_error($link)); 
    $id = mysqli_real_escape_string($link, $_GET['id']);
     
    $query ="DELETE FROM console WHERE ConsoleID = '$id'";
    echo '<div class="alert alert-success" role="alert">
  Приставка успешно удалена!
</div>';
 
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    mysqli_close($link);
}
?>
				<!-- Сюда приходят данные от ajax -->

<?php
	 
	 if(isset($_POST['add'])){
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

			</div>
	
		</div>  

	




		<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
	</body>
</html>