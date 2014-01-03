<?php
include_once("login.html");

$password = "david"; //Change to whatever you want your password to be

if(isset($_POST['submit'])){
	if($_POST['password'] == $password){
        include_once("home.html");
        echo "Welcome to Steph Habif's portfolio.";
        } else {
        echo "sorry the password were incorrect";
        }
} else { //IF THE FORM WAS NOT SUBMITTED
//SHOW FORM
	?><form class="blue" method="post">
		Password: <input type="password" name="password" />
		<input type='submit' name='submit' />
	</form><?php
}

?>


