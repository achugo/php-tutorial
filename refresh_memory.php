<?php



//$string1 = "This is an example string which can never be seen here";
//$string2 = 'An example of a <img src="img.jpg"> string can be seen here' ;
//similar_text($string1, $string2, $result);
//echo "The similarity between both is ". $result;
//$string_word_count = str_word_count($string, 2);
//print_r($string_word_count);
//$shuffled = str_shuffle($string);

//$half = substr($shuffled, 0, strlen($shuffled)/2);
//echo $half;
//$stuff = htmlentities(addslashes($string2)) ;
//echo $stuff . "<br>";



function has_space($string){
	if (preg_match("/ /", $string)) {
		echo "Has spaces";
	} else {
		echo "has no spaces";
	}
	
}

has_space("does thisfunctionhaveaspace?");
echo "<br><br><br>";


if (isset($_GET['user_name']) && !empty($_GET['user_name'])) {
	$user_name = $_GET['user_name'];
	$user_name_lc= strtolower($user_name);
	echo $user_name_lc;
}

$offset = 0;
$text = "one of the things i love about you is the way you dymisity your uniqueness  in the way of the hood";
$find = "the";
$len = strlen($find);
while ($string_position = strpos($text, $find, $offset)) {
	echo $string_position . "<br>";
	$offset = $string_position + $len;
}

$string_original = "The only thing i know about myself now is the way i am dedicated to be a fullstack dev";

?>
<form method="GET" action="refresh_memory.php">
	Enter your user name: <input type="text" name="user_name">
	<input type="submit" value="submit">
</form>
