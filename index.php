<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<title>Tv Box: control center</title>
		<link rel="stylesheet" href="css/main.css">
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="search.js"></script>
	
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
	


	<div class="container" style="padding-top: 3%">
		<div class="row">	
			<div class="col-md-4">
				<h2>Найти приставку</h2><hr>
				<div class="input-group mb-3">
				<input type="text" name="referal" placeholder="Начните вводить, например, Sony ..." value="" class="who form-control"  autocomplete="off"/>
				</div>
				<div style="margin-top: "><small class="text-muted"><i> Если Вы не нашли приставку, воспользуйтесь кнопкой "Показать все приставки"</i></small></div><br>
				<button class="btn btn-outline-primary" type="button" id="ShowAll">Показать все приставки</button>

				<div name="table_name" id="table_name"></div>
				
				
			
			<br>
			<h2>Добавить приставку</h2><hr>


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
			<input type="hidden" name="date" value=" <?php echo date('m-d-Y');?> " />

			<div class="input-group mb-3">
			  <div class="input-group-prepend">
				<label class="input-group-text" for="inputGroupSelect01">Место</label>
			  </div>
			  <select required name="placement" class="custom-select" id="inputGroupSelect01">
				<option selected disabled value="">Выберите</option>
				<option value="1">Омега</option>
				<option value="2">Торговый квартал</option>
				<option value="3">Сити Молл</option>
				<option value="4">Sunrise</option>
				<option value="5">Палитра</option>
			  </select>
			</div>

			<div class="input-group input-group-default mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text" id="inputGroup-sizing-default">Видео url</span>
			  </div>
			  <input required value="https://youtu.be/dQw4w9WgXcQ" name="video" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
			</div>				
				 
				 
			<div class="row"> <div class="col-md-8" style="padding-top: 5px!important">
			<span  class="switch switch-sm">
				<input name="status" type="checkbox" class="switch" id="switch-id">
				<label for="switch-id">Включить приставку</label>
			</span></div>
				   <br>
				   <br>
<div class="col-md-4">
			<input value="Добавить" type="submit" name="add" id="Add" type="button" class="btn btn-primary"/>

				</div>
				</div>
				
		</form>

	</div>


		<div class="col-md-1"></div>

		<div class="col-md-7">
			<h2>Информация</h2><hr>
			<div id="table"></div> <!-- Ajax show all -->
			<div class="search_result"></div><!-- Ajax search -->
			


	


			
			<?php require_once 'functions2.php';?>

		</div>
	</div>  




		<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
	</body>
</html>
