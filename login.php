<?php
    //session_start();
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	//$con = false;
	$host = getenv('IP');
    $username = getenv('C9_USER');
//   $host = "localhost";
// 	$username = "tajecarter";
	$password = '';
	$database = 'cheapomail';
	
	try {
    $con = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " ;
    }
	
   
    $sql = "SELECT * FROM user WHERE username = '$username' and password = '$password';";
    $results= mysqli_query($con,$sql);
    if (sizeof(mysqli_fetch_array($results))==0){
    	// sends something to javascript if it fails
    	echo "fail";
    }else{
    	// ends something to javascript if it succeeds
    	setcookie('username',$username,time()+2000);
    	echo "pass";
    }
?>