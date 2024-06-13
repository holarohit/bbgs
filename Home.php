<?php
session_start();
$_SESSION["tab"] = "Home";

if($_SESSION["login"] != 1)
	echo '<h2 txtcolor="red">Authentication Error!!!</h2>';
else{
	include_once('header.php');

		###########contents of div goes here###########
	echo "
	<h2>
	Abstract
	</h2>
	<p>
	The Blood Bank Governance System provides a user-friendly interface for both blood bank administrators and staff, facilitating seamless donor registration, blood collection, testing, storage, and distribution. Through advanced features such as real-time inventory tracking, blood type compatibility checks, and automated notification systems, the BBMS enhances operational efficiency, minimizes wastage, and ensures timely availability of blood products.
	
	</p>
	<h2>
	Our Goal
	</h2>
	<p>";


	$sql = "select count(p_id) from Person";
	$result = mysqli_query($con, $sql);  
	$row = mysqli_fetch_array($result);  
	echo "We have got registrations from ".$row[0] ." people";
	$sql = "select count(p_id) from Donation";
	$result = mysqli_query($con, $sql);  
	$row = mysqli_fetch_array($result);  
	echo "<br>We got donations of about ".$row[0] ." from registered persons";
	$sql = "select count(p_id) from Receive";
	$result = mysqli_query($con, $sql);  
	$row = mysqli_fetch_array($result);  
	echo "<br>We gave blood for around ".$row[0] ." times to the registered people from our stock in case of emergency<br>";
	echo "We are glad to say that we have made a successful service to the society</p>";


		##################################################
	include_once('footer.php');
}
?>
