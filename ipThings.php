<?php

require 'connect.php';

$user_ip = $_SERVER['REMOTE_ADDR'];


function user_ip(){
	global $user_ip;
}

function update_ip(){
	$query = "SELECT count FROM hits_count  ";

	if(@$query_run = mysql_query($query)){
		 
		 $count = mysql_result($query_run, 1, 'count');
		 $count_inc = $count + 1;


		 $update_count = "UPDATE 'hits_count SET count = '$count_inc'";
		 if($update_query_run =mysql_query($update_count)){
		 	echo "ok";
		 }
	}

}

update_ip();


?>