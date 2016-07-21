
<html class="index-bg">
    <?php
    include('header.php');
    
?>
        <title>Anime Sekai</title>
    <!-- Slide gallery -->
    <body class="mainn">
    <div class="jumbotron">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="img/carousel1.jpg" alt="">
            <div class="carousel-caption">
            </div>
          </div>
          <div class="item">
            <img src="img/carousel2.jpg" alt="">
            <div class="carousel-caption">
            </div>
          </div>
          <div class="item">
            <img src="img/carousel3.jpg" alt="">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
       
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div><!-- End Slide gallery -->
   
    <!-- Thumbnails -->
    <div class="container thumbs">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="img/pic1.jpg" alt="" class="img-circle">
          <div class="caption">
            <h3 class="text-center">Anime</h3>
            <p>Anime is Japanese hand-drawn or computer animation. The word is the abbreviated pronunciation of "animation" in Japanese, where this term references all animation.Outside Japan, anime is used to refer specifically to animation from Japan or as a Japanese-disseminated animation style often characterized by colorful graphics, vibrant characters and fantastical themes. Arguably, the stylization approach to the meaning may open up the possibility of anime produced in countries other than Japan</p>
            <div class="btn-toolbar text-center">
              <a href="anime.php" role="button" class="btn btn-success">Details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="modal modal-transparent fade">
           
          <div class="ca">
             
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="img/pic3.jpg" alt="" class="img-circle">
          <div class="caption">
            <h3 class="text-center">Anime Music</h3>
            <p>The opening and credits sequences of most anime television episodes are accompanied by Japanese pop or rock songs, often by reputed bands. They may be written with the series in mind. Pop and rock songs are also sometimes used as incidental music often to highlight particularly important scenes. Background music is employed as an added flavor to series either to drive story plot lines or to simply to decorate particular scenes and animated sequences. Furthermore, some series offer all applied music available in the form of OST.</p>
            <div class="btn-toolbar text-center">
                
                <a href="animemusic.php" role="button" class="btn btn-success">Details</a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Thumbnails -->
    <!-- Content -->
    <div class="container">
      <h3 class="text-center">Welcome to Anime Sekai</h3>
      <p>AnimeSekai is a website that introduce latest anime, anime music and gunpla. Everyone can come to comment and share the things that they want to friends.</p>
    </div><!-- End Content -->
    <!-- Footer -->
    <div class="footer text-center">
     
           <?php
    include('footer.php');
    
?>
    </div><!-- End Footer -->

 
   
  </body>
</html>