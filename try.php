<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form action="try.php" method="GET">
        Choose a food type: <select name="uh">
            <option value="h">healthy</option>
            <option value="u">unhealthy</option>
        </select><br><br>
        <input type="submit" value="submit"><br>
    </form>


</body>
</html>
<?php
 require 'connect.php';
if(isset($_GET['uh']) && !empty($_GET['uh'])){
    $uh = $_GET['uh'];

    echo $uh . '<br>';
}
        
if($uh == 'u' || 'h'){


$query = "SELECT food, calories FROM food WHERE healthy_unhealthy = '$uh' ORDER BY id DESC";

if($query_run = mysql_query($query)){
    if (mysql_num_rows($query_run)==NULL) {
        
        echo "NO RESULTS FOUND";
    
        }else{
        while ($query_row = mysql_fetch_assoc($query_run)) {
           
           $food = $query_row['food'];
           $calories = $query_row['calories'];

           echo $food. " has ". $calories .'<br/>';
        }
    }
}
else{
    echo "Query failed";
}
}else{
    echo "value must be u or h";
}

?>