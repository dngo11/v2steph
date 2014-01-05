
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Steph Habif | Portfolio</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Learn about behavior design and why it's an emerging skill to have. This is how I learned at Stanford: info on the experts, events, and resources. ">
<meta name="keywords" content="stephanie habif, steph, habif, stepp habif, habif health, behavior design, behavior change, bj fogg, david ngo, design, behavior, stanford, stanford behavior, stanford university, dschool, rockhealth">
<meta name="author" content="David Ngo">
<meta name="web_author" content="Designova">

<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
<link href="assets/css/extension.css" rel="stylesheet">
<link href="assets/css/typography.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet"> 
<link href="stylesheets/portfolio.css" rel="stylesheet"/>
<link href="stylesheets/isotope.css" rel="stylesheet">
<link href="stylesheets/colorbox.css" rel="stylesheet"/>
<link href="stylesheets/flexslider.css" rel="stylesheet"/>  
<link href="stylesheets/hoverdir.css" rel="stylesheet"/>
<link href="stylesheets/jquery.fancybox-1.3.4.css" media="screen" rel="stylesheet"/>
<link href="stylesheets/price-table.css" rel="stylesheet" />
<link href="stylesheets/intro.css" rel="stylesheet" />
<link href="stylesheets/timeline.css" rel="stylesheet" />
<link href="stylesheets/jquery.tweet.css" rel="stylesheet"/>
<link href="stylesheets/responsive-nav.css" rel="stylesheet">
<link href="stylesheets/style.css" rel="stylesheet">

<script src="javascripts/modernizr.custom.js"></script>

<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <link href="stylesheets/ie8.css" rel="stylesheet">
    <![endif]-->

<link rel="shortcut icon" href="assets/ico/favicon.ico">

<style>
    #ticker ul.tweet_list {
        min-height: 80px;
        height:120px;
        overflow-y:hidden;
    }
    #ticker .tweet_list li {
        min-height: 80px;
        height:120px;
    }
    #colorbox{
        min-height: 1300px !important;
    }
    #cboxTitle{
        height: 30px !important;
        position: absolute !important;
        padding: 0px !important;
    }
    #cboxClose{
        position: absolute !important;
        margin-top: 15px !important;
        right: 0px !important
    }
    #cboxClose:hover{
        background: #777 url(images/close.png) no-repeat center center
    }
    #cboxContent{
        padding-top: 37px !important;
    }
</style>

</head>

<body id="body">


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

	<div class="span12">
		<h2 class="text center">To access Steph Habif's portfolio, please enter the password.</h2>
		</br></br>
		<form class="blue" method="post">
		<input class="center" type="password" name="password" placeholder="password" />
		<input class="center" type='submit' name='submit' />
		</form><?php
	
}
?>
	</div>

	</body>
</html>




