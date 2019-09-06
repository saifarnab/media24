<?php

$user = ($_GET ["user"]);
$pass = ($_GET ["pass"]);
$username = "root";
$password = "";
$server = 'localhost';
$db = 'media24db';

$connect = mysqli_connect( $server, $username, $password, $db )

		or die("Can not connect");

$result = mysqli_query( $connect, "SELECT * FROM admin" )
		or die("Can not execute query");

if ($result->num_rows > 0) {
    //echo "<table><tr><th>username</th><th>Password</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "<tr><td>".$row["username"]."</td><td>".$row["password"]."</td></tr>";
        if($user == $row["username"] && $pass == $row["password"]){
        	header("Location: /media24/insert.php");
       		exit();  // stop any other processing !important!
        	}
        else{
        	header("Location: /media24/wrongadmin.php");
       		exit();  // stop any other processing !important!
        	}	
        }
    }
    //echo "</table>";
 else {
    echo "0 results";
}
$connect->close();

?>