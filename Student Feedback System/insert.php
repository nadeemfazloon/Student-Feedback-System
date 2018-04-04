<?php


// 1. Create a database connection
$connection = mysqli_connect("localhost","root","");
if (!$connection) {
    die("Database connection failed: " . mysqli_error());
}

// 2. Select a database to use 
$db_select = mysqli_select_db($connection, "assignmentiit");
if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}  

	$name = $_POST['fname'];
	$sidd = $_POST['sid'];
	$sessio= $_POST['sessio'];
	$slname = $_POST['slname'];
	$dates = $_POST['dates'];
	$sbegin = $_POST['begins'];
	
	$end = $_POST['etime'];
	$note = $_POST['note'];
	$task = $_POST['task'];
	

	$query= "INSERT INTO `endsession`(`id`,`fname`,`sessions`,`lecname`,`date`,`stime`,`etime`,`note`,`task`) VALUES ('$sidd','$name','$sessio','$slname','$dates','$sbegin','$end','$note','$task')";



	if(!mysqli_query($connection,$query))
	{
		echo 'Not Inserted';
	}
	else
	{
		echo 'Inserted';
		mysqli_close($connection);	
	}
	
	header("refresh:0;url=lecfeedback.php");
?>