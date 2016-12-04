<table id="people" border=1>
    <tr>
        <h2> Cheapomail Users </h2>
    </tr>
    <tr>
        <th><h3> First Name </h3></th>
        <th><h3> Last Name </h3></th>
        <th><h3> Username </h3></th>
    </tr>
<?php 
    $host = getenv('IP');
    $username = getenv('C9_USER');
//   	$host = "localhost";
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
	
// 	$con=mysqli_connect($host,$username, $password);
//     if (!$con) {
// 	    echo "Connection failed";
// 	    return false;
//     }
    if(isset($_COOKIE['username'])){
	
		$userlistq =  "SELECT * FROM user;";
		$userlistres = mysqli_query($con,$userlistq);
		while($row=mysqli_fetch_array($userlistres)){
			$firstname= $row['first_name'];
			$lastname= $row['last_name'];
			$username= $row['username'];
			
			echo "<tr>";
            echo "<td>".$firstname."</td>";
            echo "<td>".$lastname."</td>";
            echo "<td>".$username."</td>";
            echo "</tr>";
		
		}
		
		
	}else{
	    echo"Not logged in";
	}
?>
</table>