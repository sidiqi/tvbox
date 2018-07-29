<?php
	
if (isset ($_POST['table_name'])) {
require_once 'connection.php'; 
$link = mysqli_connect($host, $user, $password, $database) ;
$query ="SELECT * FROM console INNER JOIN placement ON console.placement=placement.PlacementID INNER JOIN video ON console.video=video.VideoID";



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
		 '<li><b> Приставка: </b>' . $key['name'] . ' ' . $key['model'] . '</li>' . 
		 '<li><b>Статус: </b>' . '<font color="green">' . $key['status']. '</font></li>' .  
		 '<li><b>Расположение: </b>' . $key['placement_name'] . '</li>' .
		 '<li><b>Тип: </b>' . $key['type'] . '</li>' .
		 '<li><b>Видео: </b>' . $key['VideoName'] . ' <a href="#">link</a>' .'</li><hr>' 

		 ;
		
		}

		$html .= '</ul>';

		
		echo $html;
    
  }   
  	else {
  		echo '<h2>Приставка не найдена!</h2>';
  	}	
}


?>