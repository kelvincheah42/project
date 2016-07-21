<?php
    include('header.php');
    
include_once 'mysqli_connect.php';

if(isset($_SESSION['login_user'])!="")
{
	header("Location: index.php");
	exit;
}

if(isset($_POST['submit']))
{
                  $uname = $MySQLi_CON->real_escape_string(trim($_POST['username']));
	$upass = $MySQLi_CON->real_escape_string(trim($_POST['password']));
$res ="SELECT * FROM user where username='$uname' and password='$upass'";
$result=mysqli_query( $MySQLi_CON,$res);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
  $user = $row['username'];
  $pass = $row['password'];
  $type = $row['level'];
  if($user==$uname && $pass=$upass){
    if($type==1){
      $_SESSION['login_user']=$user;
      $_SESSION['mytype1']=$type;
      header("location: index.php?level=1");
    } else if($type==0){
      $_SESSION['login_user']=$user;
      $_SESSION['mytype']=$type;
    header("location: index.php?level=0");
  } }
    else{
        
		$msg = "<div class='alert alert-danger'>
	<span class='glyphicon glyphicon-info-sign'></span> &nbsp; username or password does not exists !
				</div>";
    }
  
}
?>



<html>
    <title>Login</title>
      <script src="js/login.js"></script>   
    <script src="js/bootstrap.min.js"></script>
    


    <body class="login-bg">
<div class="container"  >

    <div class="row">
        <div class="col-md-12">
            <div class="pr-wrap">
                <div class="pass-reset">
                    <input type="email" placeholder="Email" />
                    <input type="submit" value="Submit" class="pass-reset-submit btn btn-success btn-sm" />
                </div>
            </div>
            <div class="wrap">
                <p class="form-title">
                    Sign In</p>
                <?php //show message for user wheter is login or not
		if(isset($msg)){
			echo $msg;
		}
		?>
        
                <form class="login"  role="form" method="post" action="login.php" data-toggle="validator" onsubmit="return checkForm(this);">
                   <input type="text"  class="form-control"placeholder="Username" id="username" name="username" />
                   <input type="password" class="form-control" id="password" name="password" placeholder="Passwords">
                <input type="submit" value="Sign In" class="btn btn-success btn-sm" name="submit" />
               
                <div class="remember-forgot">
                    <div class="row">
                        
                             <div class="col-md-6 not-register-content">Not registered? <a href="register.php">Create an account</a></div>
                    </div>
                </div>
                </form>
                <div class="foot text-center">
        <p>&copy; 2016 AnimeSekai. All Rights Reserved. Proudly created by AnimeSekai.com</a></p>
    </div>
            </div>
        </div>
    </div>
    

    

</div>
    
    </body>
</html>
   