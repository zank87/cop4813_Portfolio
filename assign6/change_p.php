<?php
	$studID = $_POST['studID'];
	$fName = $_POST['fName'];
	$lName = $_POST['lName'];
	$email = $_POST['email'];
	$grade = $_POST['grade'];
	$status = $_POST['status'];
	$major = $_POST['major'];
	$GPA = $_POST['GPA'];

	$mysql_access = mysql_connect('localhost', 'n00449176', 'copn00449176');

	if(!$mysql_access)
	{
		die("Could not connect" . mysql_error());
	}

	mysql_select_db('n00449176');

	$query = "UPDATE Student SET studFname = '$fName', studLname = '$lName', studEmail = '$email', studGrade = '$grade', studStatus = '$status' , studMajor = '$major', studGPA = $GPA ";
	$query = $query . "WHERE studID = $studID";

	$result = mysql_query($query, $mysql_access);
	if(! $result)
	{
		die("Could not update database " . mysql_error());
	}

	header('Location: index.php');
?>
