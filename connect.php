<?php

 $localhost = 'localhost';
 $user = 'root';   
 $password = '';    
$connect = mysql_connect($localhost, $user, $password);

if ($connect) {
    echo "connection all good" .'<br/>';
}
else{
    echo "nothing bro, just chilling";
}

$db_name = "a_database";

$handle = mysql_select_db($db_name);

if ($handle) {
    echo "db all set" . '<br/>';
}
else{
    echo "you have not selected a databse yet";


}
?>