<?php

	require 'connecti.php';

	require 'core.inc.php';	

	if (loggedin()){

		echo "you're logged in\t". "<a href= \"logout.php\"><button>LOGOUT</button></a><br><br><br>";
		echo getfield('firstname');
	}    
	else{
		include "loginForm.inc.php";	
	}

	
//mini search engine from db

	/** if (isset($_POST['search_name'])) {

		$search_name = $_POST['search_name'];
		if(!empty($search_name)){

			if(strlen($search_name) >= 2){

			$query = "SELECT firstname FROM users WHERE firstname LIKE '%".mysql_escape_string($search_name)."%'";

			$query_run = mysql_query($query);

			$query_num_rows = mysql_num_rows($query_run);

			if ($query_num_rows>=1) {
				echo $query_num_rows. ' results found'. '<br/>';
				while ($query_row = mysql_fetch_assoc($query_run)) {

					

					
					echo $query_row['firstname']. '<br>';
				}
			}else{
				echo "no results found";
			}
		}else{echo "you must put in at least 2 characters";}
		}
	}

?>

<form action="index.php" method="POST">
	<input type="text" name="search_name"> 
	<input type="submit" value="submit">
	
</form>
<?php
 echo md5('pass123');**/

?>