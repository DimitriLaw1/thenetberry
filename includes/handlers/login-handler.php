<?php


if (isset($_POST['loginButton'])) { 
	
	//if loginButton has been pressed do this
	$username = $_POST['loginUsername'];
	$password = $_POST['loginPassword'];

	//login function
	$result = $account->login($username, $password);
	if($result == true){
		$_SESSION['userLoggedIn'] = $username;
header("Location: index.php");
	}
}
?>