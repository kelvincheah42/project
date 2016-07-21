<?php   // Save user register information to database
include_once 'mysqli_connect.php';
 include('header.php');
if(isset($_POST['submit']))
{
	$uname = $MySQLi_CON->real_escape_string(trim($_POST['username']));
	$email = $MySQLi_CON->real_escape_string(trim($_POST['email']));
	$upass = $MySQLi_CON->real_escape_string(trim($_POST['pwd1']));
	

	
	$check_username = $MySQLi_CON->query("SELECT username FROM user WHERE username='$uname'");
                  $check_email = $MySQLi_CON->query("SELECT email FROM user WHERE email='$email'");
	$count=$check_username->num_rows;
                 $count1=$check_email->num_rows;
	
	if($count==0 && $count1==0){
		
		
		$query = "INSERT INTO user(username,email,password) VALUES('$uname','$email','$upass')";

		
		if($MySQLi_CON->query($query))
		{
			$msg = "<div class='alert alert-success'>
		<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
					</div>";
		}
		else
		{
			$msg = "<div class='alert alert-danger'>
		<span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !
					</div>";
		}
	}
	else{
		
		
		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry username or email already taken !
				</div>";
			
	}
	
	$MySQLi_CON->close();
}
?>
<html>
 <script src="js/register.js"></script>   
    <script src="js/bootstrap.min.js"></script>
   
    <body class="register-bg">
       
<div class="container">
    <div class="row">
        <div class="col-md-12">
           
            <div class="wrap">
                <p class="form-title">
                    Sign Up</p>
                  <?php
		if(isset($msg)){
			echo $msg;
		}
		?>
               <form class="login" method="post" role="form" data-toggle="validator" onsubmit="return checkForm(this);">
                <input type="text" placeholder="Username" name="username"  />
                 <input type="text" placeholder="Email" name="email" />
                 <input type="password" placeholder="Password" name="pwd1"/>
                  <input type="password" placeholder="ConfirmPassword" name="pwd2"/>
                   <input type='hidden' name='level' id='user_level' value='<?php echo $_GET["level"]; ?>' />
                <input type="submit" value="Sign Up" class="btn btn-success btn-sm"  name="submit"  />
                 
                <div class="remember-forgot">
                    <div class="row">
                      
                        <div class="col-md-6 not-register-content">Already registered? <a href="login.php"><p class="signin">Click here to Sign In</a></p></div>
                    </div>
                </div>
                </form>
                <div class="foott text-center">
        <p>&copy; 2016 AnimeSekai. All Rights Reserved. Proudly created by AnimeSekai.com</a></p>
    </div>
            </div>
        </div>
    </div>
</div>

</html>
