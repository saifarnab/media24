<?php

$username = "root";
$password = "";
$server = 'localhost';
$db = 'media24db';

$area = ($_POST["area"]);
$location = ($_POST["location"]);
$price = ($_POST["price"]);
$avail = ($_POST["optradio"]);
$size = ($_POST["size"]);
if($avail == 0)
	$avail = "No";
else
	$avail = "Yes";
$areaID;
$count = 0;
$connect = mysqli_connect( $server, $username, $password, $db )

		or die("Can not connect");

$result = mysqli_query( $connect, "SELECT * FROM billarea")
		or die("Can not execute query");


if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		if($row["areaName"] == $area){
			$count = 1;
			$areaID = $row["areaID"];	
			break;
		}		
	}
	
	if($count == 1){
		$query 	= "INSERT INTO billboard (areaID, location, pricePerDay, availability, size) VALUES ('$areaID','$location','$price','$avail','$size')" or die("Can not execute query");
		mysqli_query( $connect, $query )
			or die("Can not execute query");
	}
	else{
		$query1 = "INSERT INTO billarea (areaName) VALUES ('$area')" 
			or die("Can not execute query");
		mysqli_query( $connect, $query1 )
			or die("Can not execute query");
		$result1 = mysqli_query( $connect, "SELECT * FROM billarea")
			or die("Can not execute query");
		if ($result1->num_rows > 0) {
    		while($row = $result1->fetch_assoc()) {
		        if($row["areaName"] == $area){
					$areaID = $row["areaID"];
					break;	
				}
		    }
    	}				
		$query2 = "INSERT INTO billboard (areaID, location, pricePerDay, availability,size) VALUES ('$areaID','$location','$price','$avail','$size')" or die("Can not execute query");
		mysqli_query( $connect, $query2 )
			or die("Can not execute query");
	}
}
//echo "</table>";
	else {
	echo "0 results";
}

$connect->close();
header("Location: /media24/billinsert.php");
?>