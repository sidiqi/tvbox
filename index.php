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

	<!-- <script type="text/javascript">

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
  
	</script> 
 -->
	</head>

	<body>

	 <nav style="background-color: black" class="navbar navbar-expand-lg navbar-dark">
			<div class="container">
				<a class="navbar-brand" href="#">Tv Box: Control center</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">LOG OUT</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>



<div class="container">
		<h2><font color="white">Приставка</font></h2>

		<div class="row">
			
			<div class="col-md-4">
				<h5>Проверить приставку</h5><hr>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<label class="input-group-text" for="inputGroupSelect01">ТВ Приставка</label>
					</div>
				
					<select name="select" class="custom-select" id="inputGroupSelect01">
						<option selected>Выберите...</option>
						<option id="1" value="1">Sony B130</option>
						<option value="2">XIAOMI MI TV BOX 3</option>
						<option value="3">Rombica Cinema 4k v02</option>
						<option value="4">iconBIT PC-0035W</option>
						<option value="5">Supra	SDT-67</option>	
					</select>
				</div>
			

			<div name="table_name" id="table_name"> </div>
			
			<button id="button2" type="button" class="btn btn-primary">Выбрать</button> ИЛИ

			<button id="ShowAll" type="button" class="btn btn-outline-primary">Проверить все приставки</button>

			<Br>
			<Br>
			<Br>
			<Br>
			<Br>
			<h5>Добавить приставку</h5><hr>

<!-- 			<div class="input-group input-group-default mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="inputGroup-sizing-default">Марка</span>
			  </div>
			  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
			</div>
			<div class="input-group input-group-default mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="inputGroup-sizing-default">Модель</span>
			  </div>
			  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
			</div>
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <label class="input-group-text" for="inputGroupSelect01">Расположение</label>
			  </div>
			  <select class="custom-select" id="inputGroupSelect01">
			    <option selected>Выберите</option>
			    <option value="1">Омега</option>
			    <option value="2">Торговый квартал</option>
			    <option value="3">Сити Молл</option>
			    <option value="4">Sunrise</option>
			    <option value="5">Палитра</option>
			  </select>
			</div>
			<div class="input-group input-group-default mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="inputGroup-sizing-default">Видео (URL)</span>
			  </div>
			  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
			</div>
			<button id="Add" type="button" class="btn btn-primary">Добавить</button>
 -->


			<form method="POST" action="add.php">
			
			Марка<br><input type="text" name="name"/><br>
			Модель<br><input type="text" name="model"/><br><br>
			<input type="submit" name="add" value="добавить" />

			</form>


			</div>




			<div class="col-md-1">
					
			</div>

			<div class="col-md-7">
				<h5>Информация</h5><hr>


			<div id="table"></div>
			
				<!-- Сюда приходят данные от ajax -->

			</div>
	
		</div>  

	




		<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
	</body>
</html>