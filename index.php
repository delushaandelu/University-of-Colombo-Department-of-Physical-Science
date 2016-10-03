<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>UOC Department of Physical</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        
        
        <div class="login-container">
        </br></br></br></br></br>
            <div id="name">
                <h2 align="center" style="color:white;">Univeristy of Colombo</h2>
                <h3 align="center" style="color:white;">Department of Physical Education</h3>
            </div>
            <div class="login-box animated fadeInDown">
                <div class="login-body">
                    <div class="login-title"><strong>Log In</strong> to your account</div>
                    <form class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Username" name="uname"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" placeholder="Password" name="pword"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block" type="submit" name="signin">Log In</button>
                        </div>
                    </div>
                    
                    <div class="login-subtitle">
                        Don't have an account yet? <a href="#">Create an account</a>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; University of Colombo School of Computing
                    </div>
                </div>
            </div>
            
        </div>
        
    </body>
<?php
include "config/database.php";
    if(isset($_POST['signin'])){
$username = $_POST['uname'];
$password = $_POST['pword'];

$result = mysqli_query($con, "SELECT * FROM user WHERE user='$username' AND password='$password'");
$num = mysqli_num_rows($con,$result);
if($num == 0){
echo "Bad login, go <a href='index.php'>back</a>.";
}else{
header("Location: home.php");
}
    }
?>
</html>