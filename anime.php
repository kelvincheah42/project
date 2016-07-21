<html>
      <?php 
  include('header.php');

?>
    <title>Anime</title>  
   
    <body class="an">
        <font>
  <div id="wrapper" class="toggled">

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
                <a href="relife.php?id=2">
                    <img class="img-responsive" src="img/re.jpg" alt="">
                </a>
                <h3>
                    <a href="relife.php?id=2">ReLife</a>
                </h3>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="soma.php?id=3">
                    <img class="img-responsive" src="img/soma.jpg" alt="">
                </a>
                <h3>
                    <a href="soma.php?id=3">Shokugeki no Souma 2</a>
                </h3>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="rezero.php?id=4">
                    <img class="img-responsive" src="img/rezero.jpg" alt="">
                </a>
                <h3>
                    <a href="rezero.php?id=4">Re:Zero kara Hajimeru Isekai Seikatsu</a>
                </h3>
            </div>
        </div>


 
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="dgray.php?id=5">
                    <img class="img-responsive"src="img/dgray.jpg" alt="">
                </a>
                <h3>
                    <a href="dgray.php?id=5">D.Gray-man Hallow</a>
                </h3>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="handa.php?id=6">
                    <img class="img-responsive" src="img/handa.jpg" alt="">
                </a>
                <h3>
                    <a href="handa.php?id=6">Handa-Kun</a>
                </h3>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="arslan.php?id=1">
                    <img class="img-responsive"src="img/arslan.jpg"alt="">
                </a>
                <h3>
                    <a href="arslan.php?id=1">Arslan Senki (TV): Fuujin Ranbu</a>
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
                    <li class="active">
                        <a href="anime.php">1</a>
                    </li>
                    <li>
                        <a href="anime2.php">2</a>
                    </li>
                    <li>
                        <a href="anime2.php">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
 

        <!-- Footer -->
       <?php
    include('footer.php');
    
?>
    </div>

                    </div>
                </div>
            </div>
        </div>
      
    <!--Sidebar Toggle Script -->
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
