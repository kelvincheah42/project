<html>
     <?php
    include('header.php');
    
?>
    <title>School Anime</title>
    <body class="an">
        <font>
   <div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="active">
                    <a href="action.php" >Action</a>
                </li>
                <li>
                    <a href="school.php">School</a>
                </li>
                <li>
                    <a href="fantasy.php">Fantasy</a>
                </li>
                <li>
                 
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
                <div class="row">
                    <div class="col-md--8" id="menu">
                        <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                            <img src="img/menu.png" width="20px" height="20px"><p id="cat">Categories</p>		
            </button>
                     
                        <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">School Anime
                  
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Anime Row -->
        <div class="row">
           <div class="col-md-4 portfolio-item">
                <a href="relife.php">
                    <img class="img-responsive" src="img/re.jpg" alt="">
                </a>
                <h3>
                    <a href="relife.php">ReLife</a>
                </h3>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="soma.php">
                    <img class="img-responsive" src="img/soma.jpg" alt="">
                </a>
                <h3>
                    <a href="soma.php">Shokugeki no Souma 2</a>
                </h3>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="handa.php">
                    <img class="img-responsive" src="img/handa.jpg" alt="">
                </a>
                <h3>
                    <a href="handa.php">Handa-Kun</a>
                </h3>
            </div>
        </div>
        <!-- /.row -->
        
        <div class="row">
             <div class="col-md-4 portfolio-item">
                <a href="orange.php">
                    <img class="img-responsive" src="img/orange.jpg" alt="">
                </a>
                <h3>
                    <a href="orange">Orange</a>
                </h3>
            </div>
        </div>

       



        <!-- Pagination -->
       <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li>
                        <a href="#">1</a>
                    </li>
                    
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

 

        <!-- Footer -->
           <?php
    include('footer.php');
    
?>

    </div>
    <!-- /.container -->

                    </div>
                </div>
            </div>
        </div>
      
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
