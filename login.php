<?php
require 'connect.php';
header("Access-Control-Allow-Origin: http://localhost:3000");
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header("Access-Control-Allow-Headers: Content-Type, Authorization");
 
 $islogged = false;
 
 $method = $_SERVER['REQUEST_METHOD'];
 
 switch ($method) {
    case 'POST':
      $postdata = file_get_contents("php://input");
	if(isset($postdata) && !empty($postdata)){
    $request = json_decode($postdata);
     
     
    $name = $request->name;
    $password = $request->password;
    $sql = "SELECT * FROM user WHERE name = '$name' AND password = '$password'";
	$result = mysqli_query($db,$sql);
	
	if (mysqli_num_rows($result) == 0) {
    echo "User not Found";
	echo $islogged;
	}
	else {
		$islogged = true;
	}
	

	echo json_encode(mysqli_fetch_object($result));
	
    break;
		  
}
 

	
    if(mysqli_query($db,$sql)){
        http_response_code(201);
    }
    else{
         http_response_code(422); 
    }
	
         
}
?>