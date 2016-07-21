<html>
    <?php 
 include('header.php');
?>
    <title>Anime Page 2</title>
   
    <div id="wrapper" class="toggled">
        <body class="an">
            <font>
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li>
                    <a href="action.php">Action</a>
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
                <h1 class="page-header">Latest Anime
                  
                </h1>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="orange.php?id=7">
                    <img class="img-responsive" src="img/orange.jpg" alt="">
                </a>
                <h3>
                    <a href="orange.php?id=7">Orange</a>
                </h3>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="mob.php?id=8">
                    <img class="img-responsive" src="img/100.jpg" alt="">
                </a>
                <h3>
                    <a href="mob.php?id=8">Mob Psycho 100</a>
                </h3>
            </div>
            
        </div>
     
        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="anime.php">&laquo;</a>
                    </li>
                    <li>
                        <a href="anime.php">1</a>
                    </li>
                    <li class="active">
                        <a href="anime2.php">2</a>
                    </li>
                    <li>
                        <a href="anime2.php">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->
   <hr>
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
