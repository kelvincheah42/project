<html>
      <?php
    include('header.php');
    
?>
    <title>Fantasy Anime</title>
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
                            <img src="img/menu.png" width="20px" height="30px"><p id="cat">Categories</p>			
            </button>
                     
                        <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Fantasy Anime
                  
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Anime Row -->
        <div class="row">
              <div class="col-md-4 portfolio-item">
                <a href="rezero.php">
                    <img class="img-responsive" src="img/rezero.jpg" alt="">
                </a>
                <h3>
                    <a href="rezero.php">Re:Zero kara Hajimeru Isekai Seikatsu</a>
                </h3>
            </div>
             <div class="col-md-4 portfolio-item">
                 <a href="arslan.php">
                    <img class="img-responsive"src="img/arslan.jpg"alt="">
                </a>
                <h3>
                    <a href="arslan.php">Arslan Senki (TV): Fuujin Ranbu</a>
                </h3>
            </div>
        </div>
        <!-- /.row -->
        
       

       

        <hr>

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
