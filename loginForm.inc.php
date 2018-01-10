<?php



if(isset($_POST['username']) && isset($_POST['Password'])){
	$username = $_POST['username'];
	$Password = $_POST['Password'];

	$password_hash = md5($Password);

	if(!empty($username) && !empty($Password)){

			$query = "SELECT id FROM users WHERE username='$username' AND password='$password_hash'";

			if($query_run = mysql_query($query)){

				$query_num_rows = mysql_num_rows($query_run);

				if ($query_num_rows==0) {

					echo "invalid username and password combination";
				}
				else if($query_num_rows==1){
					$user_id = mysql_result($query_run, 0, 'id');
					$_SESSION['user_id'] = $user_id;
					header('Location: index.php'); 
				}
				
			}  
	} 
}

?>

<form action="<?php echo $current_file;?>" method="POST">
	
	Username: <input type="text" name="username"> Password: <input type="password" name="Password">
	<input type="submit" value="login">
</form> 