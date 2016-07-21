<html>
     <?php
    include('header.php');
    
?>
      <title>Shokugeki no Souma 2</title>
       
     <!-- Page Content -->
     <body class="relife-bg">
         <font>
    <div class="container">

        <div class="row">

            <div class="col-lg-8">

                <!-- Title -->
                <h1>Shokugeki no Souma 2</h1>
                 <div class=" col-md-6" >
                     <a class="video"  title="PV"  href="https://www.youtube.com/watch?v=ftkShI-StTU"><img src="img/ss.jpg"/></span></a>
                  
         
     
    </div>
                <!-- Preview Image -->
                <div class=" col-xs-6" >
                 <img class="img-responsive" src="img/soma.jpg">
                </div>
                <hr>
                 <font>
                <!-- Anime Content -->
                <p class="lead">Shokugeki no Soma tells the story of a boy named Sōma Yukihira, whose dream is to become a full-time chef in his father's neighborhood restaurant and surpass his father's culinary skills. But just as Sōma graduates from middle school, his father, Jōichirō Yukihira, gets a new job that requires him to travel around the world and closes his shop. However, Sōma's fighting spirit is rekindled by a challenge from Jōichirō which is to survive in an elite culinary school where only 10% of the students manage to graduate, where he meets many amazing students and experiences new events that allow him to grow further towards his goal.</p>
                <hr>
                <h2>Main Character</h2>
              
                 <ul>
                <li>
                  Sōma Yukihira<br>
                  Voiced by: Yoshitsugu Matsuoka <br>
                  He is the son of Jōichirō Saiba and worked at his father's restaurant, Yukihira, until it was closed. Despite strong discrimination of his background at the academy, he aspires to use the school as a stepping stone towards his cooking dreams. He is currently a student at Tōtsuki Culinary Academy and a resident of Polar Star Dormitory. Sōma isn't afraid of any challenge that he either gets himself in or gets involved with. He even challenges his father to cooking matches regularly. Despite losing every time, he maintains a confident attitude in the hopes of using his failures to aid him in the future. He is not afraid to challenge anyone                </li>
                 <li>
                     Erina Nakiri <br>
                     Voiced by: Risa Taneda<br>
                    The main female protagonist and primary antagonistic rival to Sōma Yukihira, until becoming more of a friendly rivalry. Due to her background as one of the prestigious families of high class Japanese food chain industry, the Tōtsuki Corporation, Erina often looks down upon whoever is considered "common" and unjust to her taste due to her family regal pedigree. Having a fearsome reputation for her God's Tongue to taste any food and accurately describe the taste, Erina is able to disqualify anyone whose dish tastes "bad" and her foul critique could break chef and student alike. However, she also gives credit to chefs with skill (other than Souma); for example, in ch.109 she treats Megumi quite well, offering her a ride in her car for part of the journey and praising Megumi's skill, saying that she should have more confidence in herself, adding that she was surprised that someone with her level of skill has gone unnoticed. Also in ch.108 she defends Megumi from an extremely hostile chef so that she can voice out her suggestions which was later proven correct by a staff member. She appears to admire Sōma's father, Jōichirō, but did not know that Sōma is his son. She is extremely competitive as shown in Ch. 29, she lost a game of Uno to Hisako and determines that they must have a match in Othello.
                </li>
                 <li>
                     Megumi Tadokoro<br>
                     Voiced by: Minami Takahashi<br>
                  She is one of the main characters of the manga. Originating from the snowy outstation in Japan, Megumi went to Tōtsuki Culinary Academy to become a chef and dreams of eventually helping her mother run their Ryokan, giving up a table tennis scholarship at a prestigious high school to attend the Academy. Unfortunately, even with her neat skills in cooking, Megumi's poor social skills and her extreme stage fright get the best of her and because of this she does not do well in the early days of her time at the academy. It wasn't until she met Sōma and partnered with him in their first class together that she has shown signs of her confidence growing throughout the series. After witnessing Sōma's incredible cooking skills and creative method of cooking, Megumi would become his assist partner and friend throughout the series. She is also a resident of the Polar Star Dormitory and is great friends with the other female residents, Ryōko Sakaki and Yūki Yoshino. The secret weapon in her cooking is hospitality, which creates a feeling of familial love and nostalgia (once regressing an arrogant chef to his childhood in the Japanese countryside) in those who eat her dishes. She also has a very motherly nature as seen during the cooking class she taught in for small children. In Chapter 61, it is hinted that Megumi has developed feelings for Sōma. 
                 </li>
                 </ul>
                </font>
   <!-- Save User Comment -->
     <?php
     
	   include ('mysqli_connect.php');
	
                if(isset($_POST['submit']))
           {
                    if(isset($_SESSION['login_user']) )
	{
             
             $comment = $MySQLi_CON->real_escape_string(trim($_POST['comment']));
              $uname = $MySQLi_CON->real_escape_string(trim($_SESSION['login_user']));
                $articleid = $_GET['id'];
	$query = "INSERT INTO comments(username,comment,post_id) VALUES( '$uname','$comment',$articleid)";
        if($MySQLi_CON->query($query))
		{
          $msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Thank you for the comment!
					</div>";
            
        }
        else{
            $msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; cannot comment !
				</div>";
        }  
           }
        }
            if(!isset($_SESSION['login_user']) &&(isset($_POST['submit'])))
           {
	{
                   echo "<script>
alert('Please Login Your Account to comments');
window.location.href='login.php';
</script>";
	  
	}
        }
           

        $MySQLi_CON->close();
        
            ?>   
                <!-- Comments Form -->
               <form role="form" id="comment" method="post" onsubmit="return show_alert()"  >  
                  <?php
		if(isset($msg)){
			echo $msg;
		}
		?>
                    <div class="form-group">
    <label for="comment">Comment:</label>
    <textarea class="form-control" rows="5" cols="100%" name="comment" ></textarea>
<input type='hidden' name='id' id='articleid' value='<?php echo $_GET["id"]; ?>' />
                 <script type="text/javascript">
function show_alert() {
  if(confirm("Do you confirm to comments?"))
    document.forms[0].submit();
  else
    return false;
}
</script>
                        <button type="submit"  class="btn btn-primary" name="submit">Submit</button>
                   
                </div></form>
                  

                <hr>

                <!-- Show User Comment -->
              <?php
 include('mysqli_connect.php');
$query ="SELECT ID,username,comment,timestamp,post_id FROM comments ORDER BY ID";
$result = mysqli_query($MySQLi_CON, $query);
while($row=mysqli_fetch_array($result)) {
    ?>
                 <?php
                $postid=$row['post_id'];
                if($postid==3){
                    ?>
                <form role="form" action="arslan.php" method="post" id="reply">
       <div class="media">
                    <div class="media-body">
                         <h4 class="media-heading">
                            <?php echo $row['username']?><small id="tt"> <?php echo $row['timestamp']?></small></h4>
     <?php echo $row['comment']?><a href="arslan.php?delete=<?php echo $row['ID'] ?>" id="de"  onclick="return confirm('Are you sure delete this comment?')">X</a></div>
    </div></form>
    <?php
} 
}
 if(isset($_SESSION['login_user']) )
	{
// Only admin allow to delete comment else alert message
$uname = $MySQLi_CON->real_escape_string(trim($_SESSION['login_user']));
$res ="SELECT * FROM user where username='$uname' ";
$result1=mysqli_query( $MySQLi_CON,$res);
$row=mysqli_fetch_array($result1);
if (!$result1) {
 printf("Error: %s\n", mysqli_error($MySQLi_CON));
    exit();
}
  $type = $row['level'];
    if(isset($_GET['delete'])){
    if($type==1){      
$deleteq="DELETE FROM comments WHERE ID={$_GET['delete']} LIMIT 1";
            $deleter=mysqli_query($MySQLi_CON, $deleteq);
            if($deleter){
      echo "<script>
window.location.href='soma.php?id=3';
</script>";}}
            if($type!=1){
                   echo "<script>
alert('Only Admin allow to delete');
window.location.href='soma.php?id=3';
</script>";
            }
        
    } 
        }
        
$MySQLi_CON->close();
          
?>       
              
            </div>
 
            <div class="col-md-4">

                <div class="well" id="info">
                    <h4>Information</h4>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
                            Type: TV
Episodes: 13
Status: Currently Airing
Aired: Jul 2, 2016 to ?
Premiered: Summer 2016
Broadcast: Saturdays at 22:00 (JST)
Producers: None found, add some
Licensors: Sentai Filmworks
Studios: J.C.Staff
Source: Manga
Genres: Ecchi, School, Shounen
Duration: 24 min. per ep.
Rating: PG-13 - Teens 13 or older
                        </div>
                     
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
              <div class="modal modal-transparent fade">
           
          <div class="ca">
             
          </div>
        </div>

            </div>

        </div>
        <!-- /.row -->

         <?php
    include('footer.php');
    
?>

    </div>
    <!-- /.container -->
    </font>
</body>

</html>
