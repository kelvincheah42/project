<html>
      <?php 

   include('header.php');
?>
    <title>User Profile</title>
    <body class="cch">
        <font>
  <div id="wrapper" class="toggled">

        <!-- Sidebar -->
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
              
                      
                    <div class="text-center">
            <h1 class="page-header" style="margin-top: 60px;">
                  
                
            <?php echo  " Welcome,$login_session"?>
               </h1>
              <p>
                    INFO
                </p>
               <?php
               include('mysqli_connect.php');
                if(isset($_SESSION['login_user']) )
	{
   $uname = $MySQLi_CON->real_escape_string(trim($_SESSION['login_user']));
$sql = "SELECT * FROM info WHERE username = '".$uname."'";
$result = $MySQLi_CON->query($sql) ;
while($row=mysqli_fetch_array($result)) {
    ?>

                <table class="table table-striped table-hover " border='1' cellpadding='10'>
                    <h3> <?php echo $row['interest']?></h3>
                </table>
                <?php
}
        }

?>
                </div>
            </div>
             
                </div>
        </div> 
    </div>
    <!-- /.container -->

       
          <footer>
            
              <div class="col-lg-12 text-center" style="margin-top: 250px; " >
                   <hr/>
                  <p>&copy; 2016 AnimeSekai. All Rights Reserved. Proudly created by AnimeSekai.com</a></p>
                </div>
          
            <!-- /.row -->
        </footer>

    <!-- Sidebar Toggle Script -->
    <script>
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
