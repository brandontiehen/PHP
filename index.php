<?php
    session_start();
    include("header.php");
?>
<?php
    if(isset($_SESSION['user'])){
        echo "<p><h1>Hello, ".$_SESSION['user']."!</h1></p>
            <p>This is the test website that <a href='../index.html' target='_blank'>Brandon</a> has created for the sake of not only learning, but improving his skills as a web designer and developer.</p>
            <p>Click one of the links above to get started.</p>
            <p>Or, <a href='logout.php'>click here to logout</a>.";
    }
    else{
        echo "<p><h1>Welcome to Brandon's Test Website!</h1></p>
            <p>Here is where he learns and practices more PHP, and even ASP. This page has a test login page as well! <a href='account.php'>Click here</a> to check it out.</p>
            <p>
	           If you have not already logged in, you will have to login using one of these three aliases:
            </p>
            <ol>
                <li><ul><li><b>Username:</b> yahoo</li>
                    <li><b>Pasword:</b> abc123</li></ul></li>
            </ol>";
    }
?>
<?php include("footer.php");?>