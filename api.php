<?php

	$store_id = '5018';
	if(isset($_POST['store_id'])){
		$store_id = $_POST['store_id'];
	}


	$key1 = '939f8473-3970-499d-8af8-3c502cd95584'; //
	$key2 = 'f4028531-854e-459e-be8a-cf133f92cb3e'; //
	$key3 = 'bcd9c9ae-c61c-4311-b742-3f503f662265';	//new

	$url = "https://api.content.market.yandex.ru/v2/shops/$store_id/opinions/chronological";

	$headers = array(
  	  "Host: api.content.market.yandex.ru",
	  "Accept: */*",
	  "Authorization: $key2"
	  
	);

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	$data = curl_exec($ch);
	//curl_close($ch);

	$list = json_decode(curl_exec($ch), TRUE);


	function print_arr($arr){
		echo '<pre>' . print_r($arr, true) . '</pre>';
	}
 	
 	//print_arr($list);

 	if(isset($_POST['search'])){
 		$store_name = ($list['opinions'][0]['shop']['name']);
 		$store_name = ' FOR '. $store_name;

 	}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Find feedback</title>
    <style type="text/css">
    	.br0 {
    		border-radius: 0;
    	}
		
		h2 {
		  letter-spacing: 3px;
		  text-transform: uppercase;
		  font: 25px "Lato", sans-serif;
		
		}

    </style>
  </head>
  <body>
	<div class="container py-5">
		<div class="row">
			<div class="col-md-5">
				<h2>Find feedback</h2><hr>
				<form method="POST" action="api.php">
					<div class="input-group">
					  <select name="store_id" required class="custom-select br0" id="inputGroupSelect04" aria-label="Example select with button addon">
					    <option value="no" selected>Выберите магазин</option>
					    <option value="3678">Эльдорадо</option>
					    <option value="3828">Связной</option>
					    <option value="17436">Ситилинк</option>
					  </select>
					  <div class="input-group-append">
					    <input type="submit" class="btn btn-dark br0" name="search" value="Найти отзыв" type="button">
					  </div>
					</div>
				</form>
			</div>

			<div class="col-md-1">
				<div class="input-group"></div>
			</div>

			<div class="col-md-6">
				<h2>results<?php echo $store_name; ?></h2><hr>
				
				<?php 

					$status = ($list['errors'][0]['message']);
					$status = '<div class="alert alert-danger br0" role="alert">' . $status . '</div>';
					

					$grade = ($list['opinions'][0]['grade']);
					$name = ($list['opinions'][0]['author']['name']);
					$name_anon = ($list['opinions'][0]['author']['visibility']);
					if($name_anon == 'NAME'){
						$name_anon = ' ';
					}
					$date = ($list['opinions'][0]['date']);
					$time = ($list['opinions'][0]['date']);
					$date = substr($date, 0, 10);
					$time = substr($time, 11, 5);
					$text = ($list['opinions'][0]['text']);
					$text_pros = ($list['opinions'][0]['pros']);


					$grade2 = ($list['opinions'][1]['grade']);
					$name2 = ($list['opinions'][1]['author']['name']);
					$name_anon2 = ($list['opinions'][1]['author']['visibility']);
					if($name_anon2 == 'NAME'){
						$name_anon2 = ' ';
					}
					$date2 = ($list['opinions'][1]['date']);
					$time2 = ($list['opinions'][1]['date']);
					$date2 = substr($date2, 0, 10);
					$time2 = substr($time2, 11, 5);
					$text2 = ($list['opinions'][1]['text']);
					$text_pros2 = ($list['opinions'][1]['pros']);
					
					if($grade == 5){
						$grade = '<img src="https://pp.userapi.com/c846016/v846016831/af855/OKyK44zFgX0.jpg">';
					}

					if($grade == 4){
						$grade = '<img src="https://i.gyazo.com/1cce5cb88bdee843ccb313df0a7e3abb.png">';
					}

					if($grade == 3){
						$grade = '<img src="https://i.gyazo.com/80f8487bc5cf0c8d2f34c9453b76f0bc.png">';
					}

					if($grade == 2){
						$grade = '<img src="https://i.gyazo.com/b9b7b7db444266e342942cc4c5ce8a59.png">';
					}

					if($grade == 1){
						$grade = '<img src="https://i.gyazo.com/db5efeb928a906275a36e3fa0f2f737e.png">';
					}

					//second feedback
					if($grade2 == 5){
						$grade2 = '<img src="https://pp.userapi.com/c846016/v846016831/af855/OKyK44zFgX0.jpg">';
					}

					if($grade2 == 4){
						$grade2 = '<img src="https://i.gyazo.com/1cce5cb88bdee843ccb313df0a7e3abb.png">';
					}

					if($grade2 == 3){
						$grade2 = '<img src="https://i.gyazo.com/80f8487bc5cf0c8d2f34c9453b76f0bc.png">';
					}

					if($grade2 == 2){
						$grade2 = '<img src="https://i.gyazo.com/b9b7b7db444266e342942cc4c5ce8a59.png">';
					}

					if($grade2 == 1){
						$grade2 = '<img src="https://i.gyazo.com/db5efeb928a906275a36e3fa0f2f737e.png">';
					}

					if($grade == NULL){
						echo $status ;
					}


	if(isset($_POST['search']) && ($grade != NULL)	) {?>
		
		<div class="card">
		  <div class="card-body">
		  <h2 class="card-title "><?php echo $grade; ?></h2>
		    <h5 class="card-title"><?php echo $name; ?> <?php echo $name_anon; ?></h5>   
		    <p class="card-text"><?php echo $text . ' ' . $text_pros;  ?></p>
		    <p class="text-muted"><?php echo $date . ' ' . $time; ?></p>
		  </div>
		</div>
		<br>
		<div class="card">
		  <div class="card-body">
		  <h2 class="card-title "><?php echo $grade2; ?></h2>
		    <h5 class="card-title"><?php echo $name2; ?> <?php echo $name_anon2; ?></h5>   
		    <p class="card-text"><?php echo $text2 . ' ' . $text_pros2; ?></p>
		    <p class="text-muted"><?php echo $date2. ' ' . $time2; ?></p>
		  </div>
		</div>
<?php } ?>
				</div>


			</div>

		</div>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
