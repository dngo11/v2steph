<?php
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
		<h2 class="text">To access Steph Habif's portfolio, please enter the password.</h2>
		<form class="blue" method="post">
		<input type="password" name="password" placeholder="password" /></br>
		<input type='submit' name='submit' />
		</form><?php
	
}

?>

</body>
</html>





