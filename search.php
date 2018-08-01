<?php

$mysqli = new mysqli('project.local', 'root', 'root', 'tvbox');
$mysqli -> query("SET NAMES 'utf8'") or die ("Ошибка соединения с базой!");

if(!empty($_POST["referal"])){ //Принимаем данные

    $referal = trim(strip_tags(stripcslashes(htmlspecialchars($_POST["referal"]))));

    $db_referal = $mysqli -> query("SELECT * FROM console INNER JOIN placement ON console.placement=placement.PlacementID WHERE name LIKE '%$referal%' OR model LIKE '%$referal%'")
    or die('Ошибка подключения к БД');

    while ($row = $db_referal -> fetch_assoc()) {

        ?>
			
			<div class="row">
		<div class="col-md-9">
	<ul class="list-unstyled">
		 <li><b>Приставка: </b><?php echo $row['name'] ?> <?php echo $row['model'] ?></li>
		 <li><b>id приставки: </b> <?php echo $row['ConsoleID'] ?> </li> 
		 <li><b>Статус: </b><?php echo $row['status'] ?></li> 
		 <li><b>Расположение: </b><?php echo $row['placement_name'] ?></li>
		 <li><b>Тип: </b><?php echo $row['type'] ?></li>
		 <li><b>Видео: </b><a href="<?php echo $row['video'] ?>"><font color="blue"><?php echo $row['video'] ?></font></a></li>
		 <li><b>Дата добавления приставки: </b><?php echo $row['date'] ?> <?php echo $row['time'] ?></li></ul>
		
	</ul>
	</div>
	<div class="col-md-3">
		<button  onclick="location.href = 'edit.php?id=<?php echo $row['ConsoleID']?>'" type="button" class="btn btn1 btn-sm btn-primary"><a href="edit.php?id=<?php echo $key['ConsoleID']?>">Изменить</a></button>
		<button onclick="location.href = 'index.php?id=<?php echo $row['ConsoleID']?>'" type="button" class="btn btn1 btn-sm btn-danger"><a href="index.php?id=<?php echo $key['ConsoleID']?>">Удалить</a></button>
		
	</div>

	</div>
		<hr>

        <?php
    	
    } 
}
?>