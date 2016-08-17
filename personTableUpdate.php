<?php

	$p1  = $_POST['id'];
	$p2  = $_POST['fName'];
	$p3 = $_POST['lName'];
	$p4 = $_POST['age'];

	$sdd_db_host='localhost';
	$sdd_db_name='mysql';
	$sdd_db_user='root';
	$sdd_db_pass='';

	$connect = mysql_pconnect($sdd_db_host,$sdd_db_user,$sdd_db_pass);
	
	$db_found = @mysql_select_db($sdd_db_name);
	
	if ($db_found)
	{	
		$query = "UPDATE person SET id = '".$p1."', fName = '".$p2."', lName = '".$p3."', age = '".$p4."' WHERE id = '".$p1."'";
		$result = mysql_query ( $query );
		mysql_close ( $connect);
	}
	else
	{
		print "Database NOT Found ";
		mysql_close($db_handle);
	}
?>