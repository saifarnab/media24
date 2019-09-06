<?php

$username = "root";
$password = "";
$server = 'localhost';
$db = 'media24db';
$count = 0;
$billID = ($_POST["billID"]);
$price = ($_POST["price"]);
$connect = mysqli_connect( $server, $username, $password, $db )

		or die("Can not connect");

$result = mysqli_query( $connect, "SELECT * FROM billboard")
		or die("Can not execute query");


if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		if($row["billID"] == $billID){
			$count = 1;	
			break;
		}		
	}
	
	if($count == 1){
		mysqli_query( $connect, "UPDATE billboard SET pricePerDay='$price' WHERE billID = $billID")
			or die("Can not execute query");
	}
	else{
		header("Location: /media24/billupdatewrong.php");
		$connect->close();
		exit();
	}
}
//echo "</table>";
	else {
	echo "0 results";
}

$connect->close();
header("Location: /media24/billinsert.php");
?>