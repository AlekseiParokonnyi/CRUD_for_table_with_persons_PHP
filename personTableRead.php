<?php
	$sdd_db_host='localhost';
	$sdd_db_name='mysql';
	$sdd_db_user='root';
	$sdd_db_pass='';
	
	$ret='';

	$db_handle = @mysql_connect($sdd_db_host,$sdd_db_user,$sdd_db_pass);
	$db_found = @mysql_select_db($sdd_db_name);

	if ($db_found)
	{			
		$result=mysql_query('SELECT * FROM `person`');
		
		echo '<table border="1" id = "t">';
		echo '<tr>
					<td width="100"><b>id</b></td>
					<td width="200"><b>First name</b></td>
					<td width="200"><b>Last name</b></td>
					<td width="100"><b>Age</b></td>
			</tr>';
			
		while ($data=mysql_fetch_array($result))
		{
			echo '<tr>';
			echo '<td>' . $data['id'] . '</td>';
			
			echo '<td>' . $data['fName'] . '</td>';	
				
			echo '<td>' . $data['lName'] . '</td>';
			
			echo '<td>' . $data['age'] . '</td>';
			echo '</tr>';	
		}
		echo '</table>';
		
		mysql_close($db_handle);
	}
	else
	{
		print "Database NOT Found ";
		mysql_close($db_handle);
	}
?>