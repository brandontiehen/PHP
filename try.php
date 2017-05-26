<?php
    session_start();
    include("header.php");
?>
<?php
	$nameCheck = $_POST['username'];
	$passCheck = $_POST['password'];
	$user1 = "yahoo";
	$pass1 = "abc123";
	if((($nameCheck == $user1))||(($nameCheck == $user2)&&($passCheck == $pass2))||(($nameCheck == $user3)&&($passCheck == $pass3))){
        echo "<script>window.location='index.php';</script>";
        $_SESSION['user'] = $_POST['username'];
        $_SESSION['pass'] = $_POST['password'];
    }else{
        echo "<h2>Sorry, Incorrect ID<br/><a href='account.php'>Click here</a> to return to the login.</a></h2>";
    }
?>
<div style="clear:both;"></div>
<?php include("footer.php");?>