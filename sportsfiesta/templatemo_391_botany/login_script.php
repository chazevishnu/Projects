<?php

require('dbconf.inc');

db_connect();
//create a query	
$username=mysql_real_escape_string($_POST['username']);
$password=mysql_real_escape_string($_POST['password']);
$occ = $_POST['radios'];

	$qryIns="SELECT * FROM login WHERE email='$username' AND password='$password'";
	$resInt=mysql_query($qryIns);

	$num = mysql_num_rows($resInt);
	$checkfaculty="faculty";
	$checkstudent="student";
	if($num == 1)
	{
		
			header('location: full_events.php');
	}
	else
	{
		$m = "<span style='color:red'><strong>Incorrect Username OR Password OR Select Proper Button</strong></span>";
		header('location: login.php?m1='.$m);
	}

?>