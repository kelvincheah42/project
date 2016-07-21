<html>
   <?php
 include('header.php');
include("mysqli_connect.php");
if (isSet($_POST['changePass']) && isSet($_POST['newPass']) && isSet($_POST['curPass']) && $_POST['curPass'] != '' && $_POST['newPass'] != '') {
	$new = $_POST['newPass'];
	$new = $new;
	$cur = $_POST['curPass'];
	$cur = $cur;
	$user = $_SESSION['login_user'];
	$res ="SELECT * FROM user where username='$user' ";
                  $result=mysqli_query( $MySQLi_CON,$res);
	if (mysqli_num_rows($result) > 0) {
		$info = mysqli_fetch_array($result);
		if ($info['password'] == $cur) {
			$qq = mysqli_query($MySQLi_CON, "UPDATE `user` SET `password`='$new' WHERE `username`='$user'");
                                                       $level=$info['level'];
			if ($qq) {
				   echo "<script>
alert('Change Password Sucessful');
window.location.href='user.php';
</script>";
			}else
				echo "<script>
alert('Failed change password!')";
		}else
			   echo "<script>
alert('You entered current password was not correct.Please try again!');
</script>";
	}else
		   echo "<script>
alert('Your username was not in the database');
</script>";
}
?>

    <body class="cch">
        <font>
        <div id="wrapper" class="toggled">
           <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                  <li>
                         <a href="user.php">Profile</a>
                </li>
                <li>
                    <a href="updateinfo.php">Update Info</a>
                </li>
                <li>
                    <a href="changepass.php">Change Password</a>
                </li>
                
                
                 
            </ul>
        </div>
       

        <!-- Page Content -->
        <div id="page-content-wrapper">
                <div class="row">
                    <div class="col-md--8" id="menu">
                        <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                             <img src="img/menu.png" width="20px" height="30px"><p id="cat">Setting</p>			
            </button>
                          </div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
           
            <div class="wrap">
                <p class="form-title">
                   Change Password</p>
                   <?php
		if(isset($msg)){
			echo $msg;
		}
		?>
               <form class="login" method="post" role="form" data-toggle="validator" onsubmit="return checkForm(this);">
                Current Password:<input type='password' name='curPass' />
                 New Password:<input type='password' name='newPass' />
                <input type="submit" value="Change Password" class="btn btn-success btn-sm"  name="changePass"  />
                </form>
              <footer>
            
              <div class="col-lg-12 text-center" style="margin-top: 200px; " >
                   <hr/>
                  <p>&copy; 2016 AnimeSekai. All Rights Reserved. Proudly created by AnimeSekai.com</a></p>
                </div>
          
            <!-- /.row -->
        </footer>
    </div>
            </div>
        </div>
    </div>
</div>
                </div>
            <script>
                 function checkForm(form)
  {
    if(form.curPass.value == "") {
      alert("Error: Password cannot be blank!");
      form.curPass.focus();
      return false;
    }
    else{
        return true;
    }
    }
      $(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});
 
    </script>
    </font>
</body>
</html>

