<?php
function db_connect(){
	//database server information
	
	$dbServer='localhost';
	$dbName='db';
	$dbUser='root';
	$dbPwd='';
	
	$dbCon=mysql_connect($dbServer,$dbUser,$dbPwd) or die('Could not connect to the database'.mysql_error());
	mysql_select_db($dbName,$dbCon);
	
}

function db_close(){
	mysql_close();
}
?>