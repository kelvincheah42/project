<html>
<?php
  include('header.php');
 $host = "localhost";
    $user = "root";
    $password = "";
    $database_name = "userinfo";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
$search=$_POST['search'];
$query = $pdo->prepare("select * from search where title LIKE '%$search%' LIMIT 0 , 10");
$query->bindValue(1, "%$search%", PDO::PARAM_STR);
$query->execute();
// Display search result
         if (!$query->rowCount() == 0) {
             ?> 
    <body class="relife-bg">
            <font>
		 <h2 id="resul">  Result Found: <?php echo $search ?> </h2>		        
             		<?php	
            while ($results = $query->fetch()) {
              ?>
    <div class="container">
        
          <div class="row">
            <div class="text-capitalize">
                <a style="font-size: 40px" href=<?php echo $results['url']; ?> ><b id="ti"> <?php echo $results['title']; ?></b></a><br>
                <h3 class="text-center"> <?php echo $results['decription']; ?></h3><hr>
</div>
          </div>
        </div>
<?php					
        }
        }
        else{
        include ("mysqli_connect.php");
        $uname = $MySQLi_CON->real_escape_string(trim($_SESSION['login_user']));
$res ="SELECT * FROM user where username='$uname' ";
$result=mysqli_query( $MySQLi_CON,$res);
$row=mysqli_fetch_array($result);
 $type = $row['level'];
       
            echo "<script>
alert('Nothing Found');
window.location.href='index.php?level=$type   ';
</script>";
        }
        ?>
                   <?php
    include('footer.php');
    
?>

                 </font>
</body>
</html>