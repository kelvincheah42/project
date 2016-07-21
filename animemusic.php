<html>
    
      <?php  //Only member allow to view anime musci video
include("mysqli_connect.php");
 include('header.php');
if(!isset($_SESSION['login_user']))
	{
                   echo "<script>
alert('Please Login Your Account');
window.location.href='login.php';
</script>";
	  
	}
?>
    <title>Anime Music</title>
       
    <div class="container" id="mm">
        <body class="anmu">
            <font>
        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Latest Anime Music Video
                
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Anime Video Row -->
        <body class="anmu">
            <font>
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="#">
                     <a class="video"  title="Button/PENGUIN RESEARCH"  href="https://www.youtube.com/watch?v=6zROtNzjdu8"><img src="img/resong.jpg" width="320" height="180"/></span></a>
                </a>
                <h3>
                    <p>ReLife Opening</p>
                </h3>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <a class="video"  title="One Piece"  href="https://www.youtube.com/watch?v=81y38wvDjfo"><img src="img/onepiece.jpg" width="320" height="180"/></span></a>
                </a>
                <h3>
                    <p>One Piece OP 18</p>
                </h3>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                     <a class="video"  title="Key, bring it on, my destiny"  href="https://www.youtube.com/watch?v=xLoxeyL6C9o"><img src="img/dd.jpg" width="320" height="180"/></span></a>
                </a>
                <h3>
                    <p>D.Gray-Man Hallow</p>
                </h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Anime Video Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="#">
         <a class="video"  title="Tsubasa"  href="https://www.youtube.com/watch?v=hof9SJGTsRo"><img src="img/aa.jpg" width="320" height="180"/></span></a>

                </a>
                <h3>
                    <p>Arslan Senki: Fuujin Ranbu </p>
                </h3>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                            <a class="video"  title="Macross Delta - ED2"  href="https://www.youtube.com/watch?v=Lo4mLVeEz0g"><img src="img/mar.jpg" width="320" height="180"/></span></a>

                </a>
                <h3>
                    <p>Macross Delta - ED2</p>
                </h3>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
              <a class="video"  title="Re: Zero kara Hajimeru Isekai Seikatsu OP 2 “Paradoxum”"  href="https://www.youtube.com/watch?v=Ee0hMlM7ThQ"><img src="img/ree.jpg" width="320" height="180"/></span></a>
                </a>
                <h3>
                   <p>Re: Zero kara Hajimeru Isekai Seikatsu OP 2 “Paradoxum”</p>
                </h3>
            </div>
        </div>

    <!-- Anime Video Row -->
        <div class="row">
              <div class="col-md-4 portfolio-item">
                <a href="#">
                    <a class="video"  title="Tales of Zestiria the X OP / Opening -Kaze no Uta"  href="https://www.youtube.com/watch?v=uDiSwPWfAXc"><img src="img/tales.jpg" width="320" height="180"/></span></a>
                </a>
                <h3>
                   <p>Tales of Zestiria the X OP / Opening -Kaze no Uta</p>
                </h3>
            </div>
              <div class="col-md-4 portfolio-item">
                <a href="#">
              <a class="video"  title="Shokugeki no Soma: Ni no Sara  Opening ROUGH DIAMONDS"  href="https://www.youtube.com/watch?v=FGZqFkmC4W0"><img src="img/som.jpg" width="320" height="180"/></span></a>
                </a>
                <h3>
                   <p>Shokugeki no Soma: Ni no Sara Op ("ROUGH DIAMONDS")</p>
                </h3>
            </div>
              <div class="col-md-4 portfolio-item">
                <a href="#">
              <a class="video"  title="LoveLive! Sunshine!! OP [Aozora Jumping Heart]"  href="https://www.youtube.com/watch?v=X9v9_c1h4MI"><img src="img/love.jpg" width="320" height="180"/></span></a>
                </a>
                <h3>
                   <p>LoveLive! Sunshine!! OP [Aozora Jumping Heart]</p>
                </h3>
            </div>
        </div>
        <!-- /.row -->
        </font>
     

      
       <!-- Footer -->
       <?php
    include('footer.php');
    
?>
    </div>
    <!-- /.container -->
   
   
</body>
</font>
</html>
