<?php 

function sanitizeFormPassword($inputText){



$inputText = strip_tags($inputText); // doesnt allow people to insert html in fields
	return $inputText;
}


function sanitizeFormUsername($inputText){

$inputText = strip_tags($inputText); // doesnt allow people to insert html in fields
	$inputText = str_replace(" ", "", $inputText); // takes very space in the user name and replaces with an empty string, no spaces in username field
	return $inputText;
}

function sanitizeFormString($inputText){
	$inputText = strip_tags($inputText); // doesnt allow people to insert html in fields
	$inputText = str_replace(" ", "", $inputText); // takes very space in the user name and replaces with an empty string, no spaces in field
	$inputText = ucfirst(strtolower($inputText)); //uppercase first character, other characters lowercase
	return $inputText;

}



if (isset($_POST['registerButton'])) { 
	//if registerButton has been pressed do this
	$username = sanitizeFormUsername($_POST['username']);
	$firstName = sanitizeFormString($_POST['firstName']);
	$lastName = sanitizeFormString($_POST['lastName']);
	$email = sanitizeFormString($_POST['email']);
	$email2 = sanitizeFormString($_POST['email2']);
	$password = sanitizeFormPassword($_POST['password']);
	echo "Password: $password"; // *** ADD THIS LINE ***
	$password2 = sanitizeFormPassword($_POST['password2']);


$wasSuccessful = $account->register($username, $firstName, $lastName, $email, $email2, $password, $password2);
if($wasSuccessful == true){
	$_SESSION['userLoggedIn'] = $username;
	header("Location: index.php");
}
}

?>
