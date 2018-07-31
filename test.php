<?php

require_once 'db/connection.php'; 
$link = mysqli_connect($host, $user, $password, $database) ;
$query ="SELECT VideoID FROM video";
$result = mysqli_query($link, $query); 

	if($result)
	{	
		$response = [];
		while ($row = $result->fetch_assoc()) {
				
			$response[] = $row;	
		}
	
		foreach ($response as $key) {
	
		echo $key['VideoLink'];
	
		
		}

    
  }   


