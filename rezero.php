<html>
        <?php
    include('header.php');
    
?>
      
      <title>Re:Zero kara Hajimeru Isekai Seikatsu</title>
        
     <!-- Page Content -->
     <body class="relife-bg">
         <font>
    <div class="container">

        <div class="row">

        
            <div class="col-lg-8">

           

                <!-- Title -->
                <h1>Re:Zero kara Hajimeru Isekai Seikatsu</h1>
                 <div class=" col-md-6" >
                     <a class="video"  title="PV"  href="https://www.youtube.com/watch?v=IvhgOe9BY5A"><img src="img/rr.jpg"/></span></a>
                  
     
     
    </div>
                <!-- Preview Image -->
                <div class=" col-xs-6" >
                 <img class="img-responsive" src="img/rezero.jpg">
                </div>
                <hr>
                 <font>
                <!-- Anime Content -->
                <p class="lead">When Subaru Natsuki leaves the convenience store, the last thing he expects is to be wrenched from his everyday life and dropped into a fantasy world. Things aren't looking good for the bewildered teenager, however: not long after his arrival, he is attacked by some thugs; armed with only a bag of groceries and a now useless cell phone, he is quickly beaten to a pulp. Fortunately, a mysterious beauty named Satella, in hot pursuit after the one who stole her insignia, happens upon Subaru and saves him. In order to thank the honest and kindhearted girl, Subaru offers to help in her search, and later that night, he even finds the whereabouts of that which she seeks. But unbeknownst to them, a much darker force stalks the pair from the shadows, and just minutes after locating the insignia, Subaru and Satella are brutally murdered.

                   However, Subaru immediately reawakens to a familiar scene—confronted by the same group of thugs, meeting Satella all over again—the enigma deepens as history inexplicably repeats itself.
                    </p>
                <hr>
                <h2>Main Character</h2>
              
                 <ul>
                <li>
                    Subaru Natsuki<br>
                    Voiced by: Yūsuke Kobayashi<br>
                   The male protagonist. On the way home from the convenience store, he is suddenly transported and finds himself in another world. He has the ability that he calls "Return by Death" which allows him to go back in time when he dies, with only himself remembering what happened. He cannot tell anyone about this ability; if he tries he will see a witch's hand coming from the dark which grabs his heart, causing him to feel extreme pain. He also gives off the "scent of the Jealous Witch", which attracts monsters and is unnerving to those who can detect it. Despite being a hikikomori and gamer in his real world, Subaru does work out occasionally and seems to know basic hand-to-hand combat, making him not entirely powerless. In Arc 4 of the web novel, along with entering a contract with Beatrice, Subaru also practices using whips as a weapon for a year, making him stronger.
           </li>
                 <li>
                     Emilia <br>
                     Voiced by: Rie Takahashi<br>
                     The female protagonist. She is a silver-haired half-elf girl who is one of the candidates to become the next ruler in the royal election. Subaru first meets her when her insignia is stolen by Felt as she needs to possess it to be eligible to participate in the election. She is from the Frozen Forest, and is over a hundred years old (although most of time she was frozen in the forest). Her mental state is still that of a teenager. She always regards Subaru as a mischievous child who needs to be taken care of. The name she first used when introducing herself to Subaru, "Satella", is also the name of the "Jealous Witch" whose appearance is said to resemble her own.</li>
<li>Puck <br>
Voiced by: Yumi Uchiyama<Br>
Emilia's familiar and a spirit in the form of a cat. His work time is from 9AM to 5PM, similar to a salaryman's. He has an emphatic ability that allows him to read people's minds through their emotions/intent.<br>
<li>
Rem<br>
Voiced by: Inori Minase<Br>
A demon and the blue-haired younger twin sister of Ram. She still has a full horn, which grants her power. She does work at the mansion, although her ability to cook is better than her sister. She had an inferiority complex towards her sister. She initially accused Subaru for having a witch's scent that resulted in killing him three times. After Subaru saves her, she falls deeply in love with him, becoming one of his most loyal followers. When Rem was attacked by the Bishop of Gluttony, all signs of her existence are erased and only Subaru can remember her. An extra story in Arc 3 of the novel tells a "What If" story about what could've happened if Subaru and Rem decided to run instead; they lived happily after with two children.</li>
<li>
Ram <br>
Voiced by: Rie Murakawa<br>
A demon and the pink-haired older twin sister of Rem. Together, they often make sarcastic remarks towards Subaru. Ram always calls Subaru "Barusu". Despite twins being prohibited in their clan, the two were spared due to Ram being a prodigy at a young age. She lost her powers after her horn was cut off during an attack on their village. She does the cleaning and laundry for the mansion. Ram is attracted to her master, Roswaal, and when she uses too much mana, Roswaal is the one who 'heals' her.</li>
<li>
Beatrice<br>
Voiced by: Satomi Arai
A mysterious mage who was contracted by Roswaal to keep his ancient magical tomes safe in his enormous library. She has the ability to warp any room in the mansion to this library whenever she chooses, but can't completely leave the mansion. Despite her cold behavior and verbal abuse towards Subaru, Beatrice can't stand if people are hurt in front of her and becomes one of people that Subaru can trust. At Arc 4 of the web novel she is revealed to be a Artificial Great Spirit and forms a contract with Subaru at the end, claiming that she wants to become number one in his heart. She is about four hundred years old.</li>
<li>
Roswaal L. Mathers<br>
Voiced by: Takehito Koyasu<br>
A Margrave as well as an Imperial Wizard and Count who is a benefactor and sponsor for Emilia's bid for the throne. He has an appearance and affect that lead to Subaru initially mistaking him for a clown. He is a highly influential individual who is also one of Lugunica's powerful mages. It is revealed that his reason for supporting Emilia is for him to kill the dragon.
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

              

                <!--  Show User Comment -->
             <?php
 include('mysqli_connect.php');
$query ="SELECT ID,username,comment,timestamp,post_id FROM comments ORDER BY ID";
$result = mysqli_query($MySQLi_CON, $query);
while($row=mysqli_fetch_array($result)) {
    ?>
                 <?php
                $postid=$row['post_id'];
                if($postid==4){
                    ?>
                <form role="form" action="arslan.php" method="post" id="reply">
       <div class="media">
                    <div class="media-body">
                         <h4 class="media-heading">
                            <?php echo $row['username']?><small id="tt"> <?php echo $row['timestamp']?></small></h4>
     <?php echo $row['comment']?><a href="rezero.php?delete=<?php echo $row['ID'] ?>" id="de"  onclick="return confirm('Are you sure delete this comment?')">X</a></div>
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
window.location.href='rezero.php?id=4';
</script>";}}
            if($type!=1){
                   echo "<script>
alert('Only Admin allow to delete');
window.location.href='rezero.php?id=4';
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
Episodes: 25
Status: Currently Airing
Aired: Apr 4, 2016 to Sep 19, 2016
Premiered: Spring 2016
Broadcast: Mondays at 01:05 (JST)
Producers: TV Tokyo, Media Factory, Kadokawa Shoten
Licensors: None found, add some
Studios: White Fox
Source: Light novel
Genres: Drama, Fantasy, Thriller
Duration: 24 min. per ep.
Rating: R - 17+ (violence & profanity)
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
