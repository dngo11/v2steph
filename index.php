<style type="text/css">
.blue {
  	top: 50%;
  	left: 50%;
  	background: #0088cc;
  	text-align: center;
}

.text {
	text-align: center;
	color: white;
}

.box {
	top: 50%;
	left: 50%;
	background: #0088cc;
}

</style>

<?php
include_once("login.html");

$password = "david"; //Change to whatever you want your password to be

if(isset($_POST['submit'])){
	if($_POST['password'] == $password){
        include_once("home.html");
        } else {
        echo "sorry the password were incorrect";
        }
} else { //IF THE FORM WAS NOT SUBMITTED
//SHOW FORM
	?>
	<div class="box">
		<h2 class="text">To access Steph Habif's portfolio, please enter the password.</h2>
		<form class="blue" method="post">
		<input type="password" name="password" placeholder="password" /></br>
		<input type='submit' name='submit' />
	</div>
		</form><?php
	
}

?>


