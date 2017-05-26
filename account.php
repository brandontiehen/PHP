<?php
    session_start();
    include("header.php");
?>
<?php
    if(isset($_SESSION['user'])){
        echo "<h1>".$_SESSION['user']."'s Account Information</h1>";
    }
    else{
        echo"<form action='try.php' method='post' onSubmit='return clicked()' autocomplete='off'>
            <input type='text' id='nameCheck' name='username' placeholder='Username'/>
            <br/><br/>
            <input type='text' id='passCheck' name='password' placeholder='Password'/>
            <br/><br/>
            <input type='submit' value='Sign In'/>
        </form>";
    }
?>
<?php
    if(isset($_SESSION['user'])){
        echo" <div class='row'>
            <div class='col-10'>
                <style>
                    td{max-width:50%; widht:50%;}
                    table{max-width:75%; width:75%; margin:auto;}
                    td.full{max-width:100%; width:100%;}
                    #ad{background:#242424; padding:2%; margin:0 auto; clear:both; text-align:center; color:gold;}
                </style>
                <table border='1' cellpadding='15' cellspacing='5' align='center'>
                    <tr>
                        <td class='full' colspan='2'><h2>Login Credentials</h2>
                    </tr>
                    <tr>
                        <td><b>Username</b></td>
                        <td><b>Password</b></td>
                    </tr>
                    <tr>
                        <td>".$_SESSION['user']."</td>
                        <td>".$_SESSION['pass']."</td>
                    </tr>
                </table><br/><br/>
                <center><input type='button' value='Logout' onclick='logout()'/></center>
                <script>function logout(){window.location='logout.php';}</script>
                <br/><br/>
            </div>
            <div id='ad' class='row'>
                <div class='col-10'>
                    <a href='../buy.html' target='_blank'>
                        <div>
                            <h3>To Order Custom Web Design Services, Click Here!</h3>
                        </div>
                    </a>
                </div>
                <div style='clear:both;'></div>
            </div>
        </div>";
    }
?>
<div style="clear:both;"></div>
<?php include("footer.php");?>