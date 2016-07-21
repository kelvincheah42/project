<?php 
session_start();
include("mysqli_connect.php"); 
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
$deleteq="DELETE FROM user WHERE ID={$_GET['delete']} LIMIT 1";
            $deleter=mysqli_query($MySQLi_CON, $deleteq);
            if($deleter){
      echo "<script>
alert('The user have been delete');
window.location.href='admin.php';
</script>";}}
            if($type!=1){
                   echo "<script>
alert('Only Admin allow to delete');
window.location.href='index.php';
</script>";
            }
        
    }
        
$MySQLi_CON->close();
          
?>
