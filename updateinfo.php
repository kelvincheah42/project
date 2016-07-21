<html> 
    <?php
   include('header.php');
    include('mysqli_connect.php');
          if(isset($_POST['submit']))
           {
                    if(isset($_SESSION['login_user']) )
	{  
                        $uname = $MySQLi_CON->real_escape_string(trim($_SESSION['login_user']));
                         $intro = $MySQLi_CON->real_escape_string(trim($_POST['intro']));
                          
                          $update = "UPDATE info SET username='$uname', interest='$intro'";
                            $result = mysqli_query($MySQLi_CON, $update);
                            if($update)
   {
       echo 'Data Updated';
       header("Location:user.php");
   }else{
       echo 'Data Not Updated';
   }
   mysqli_close($MySQLi_CON);
}
                    }
           
    ?>
 <body class="cch">
     <font> 
     
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
                
      <form class="form-horizontal" style="margin-top: 100px; margin-left: 250px;" method="post" action="updateinfo.php" onsubmit="return checkForm(this);">
      <h3>Update Information</h3>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Intro</label>
      <div class="col-lg-10">
          <textarea  rows="3" id="textArea" name="intro" cols="100"></textarea>
      </div>
    </div>
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </div>
                </div>
        </div>
</form>
                    </font>
                    
                </body>
</html>
<script type="text/javascript">
     function checkForm(form)
  {
    if(form.intro.value == "") {
      alert("Error: Intro cannot be blank!");
      form.intro.focus();
      return false;
    }
    else{
        return true;
    }
    }
</script>
