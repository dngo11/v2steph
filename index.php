<?php
$username = "steph"; //Change to whatever you want your username to be
$password = "david"; //Change to whatever you want your password to be

if(isset($_POST['submit'])){
	if($_POST['username'] == $username && $_POST['password'] == $password){
        include_once("home.html");
        echo "Welcome to Steph Habif's portfolio.";
        } else {
        echo "sorry the username and password were incorrect";
        }
} else { //IF THE FORM WAS NOT SUBMITTED
//SHOW FORM
	?><form method="post">
		Username: <input type="text" name="username" /><br />
		Password: <input type="password" name="password" />
		<input type='submit' name='submit' />
	</form><?php
}


?>
