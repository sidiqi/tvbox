<?php

if (isset ($_POST['table_name'])) {
$table_name = $_POST['table_name'];
require_once 'connection.php'; 
$link = mysqli_connect($host, $user, $password, $database) ;
$query ='SELECT * FROM ' . 'console';
$result = mysqli_query($link, $query); 

	if($result)
	{	
		$response = [];
		while ($row = $result->fetch_assoc()) {
				
			$response[] = $row;	
		}

		// json_encode($response);

 		$html .= '<ul class="list-unstyled">';

		foreach ($response as $key) {

		 $html .= 
		 '<li><b>Статус: </b>' . $key['']. '</li>' . 
		 '<li><b> Приставка: </b>' . $key['name'] . ' ' . $key['model'] . '</li>' . 
		 '<li><b>Расположение: </b>' . $key['placement'] . '</li>' .
		 '<li><b>Тип: </b>' . $key['placement'] . '</li>' .
		 '<li><b>Видео: </b>' . $key['placement'] . '</li><hr>'  
		 ;
		}

		echo $html;
    
  }   
  	else {
  		echo '<h2>Приставка не найдена!</h2>';
  	}	
}


?>