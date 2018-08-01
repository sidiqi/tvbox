<?php

if (isset ($_POST['table_name'])) {
$select = $_POST['select'];
require_once 'db/connection.php'; 
$link = mysqli_connect($host, $user, $password, $database) ;
$query ="SELECT * FROM console INNER JOIN placement ON console.placement=placement.PlacementID ORDER BY ConsoleID DESC";


$result = mysqli_query($link, $query); 

	if($result)
	{	
		$response = [];
		while ($row = $result->fetch_assoc()) {
				
			$response[] = $row;	
		}

		// json_encode($response);

 		
		foreach ($response as $key) { ?>
	<div class="row">
		<div class="col-md-9">
	<ul class="list-unstyled">
		 <li><b>Приставка: </b><?php echo $key['name'] ?> <?php echo $key['model'] ?></li>
		 <li><b>id приставки: </b> <?php echo $key['ConsoleID'] ?> </li> 
		 <li><b>Статус: </b><?php echo $key['status'] ?></li> 
		 <li><b>Расположение: </b><?php echo $key['placement_name'] ?></li>
		 <li><b>Тип: </b><?php echo $key['type'] ?></li>
		 <li><b>Видео: </b><a href="<?php echo $key['video'] ?>"><font color="blue"><?php echo $key['video'] ?></font></a></li>
		 <li><b>Дата добавления приставки: </b><?php echo $key['date'] ?> <?php echo $key['time'] ?></li></ul>
		
	</ul>
	</div>
	<div class="col-md-3">
		<button  onclick="location.href = 'edit.php?id=<?php echo $key['ConsoleID']?>'" type="button" class="btn btn1 btn-sm btn-primary"><a href="edit.php?id=<?php echo $key['ConsoleID']?>">Изменить</a></button>
		<button onclick="location.href = 'index.php?id=<?php echo $key['ConsoleID']?>'" type="button" class="btn btn1 btn-sm btn-danger"><a href="index.php?id=<?php echo $key['ConsoleID']?>">Удалить</a></button>
		
	</div>

	</div>
		<hr>
		<?php
		}

    
  }   
  	else {
  		echo '<h2>Приставка не найдена!</h2>';
  	}	
}


?>
