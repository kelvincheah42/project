<html>
      <?php
    include('header.php');
    
?>
<head>  
<title>Admin</title>
<body class="utable">
  
    <div class="container" >
<h1>User Account Information</h1>


<?php

// connect to the database
include('mysqli_connect.php');

// get the records from the database
if ($result = $MySQLi_CON->query("SELECT * FROM user ORDER BY ID"))
{
// display records if there are records to display
if ($result->num_rows > 0)
{
    ?>

<table class="table table-striped table-hover " border='1' cellpadding='10'>
   <form role="form" action="delete.php" method="post" id="reply">
  <thead>
<tr class="info">
      <td>ID</td>
      <td>Username</td>
      <td>Email</td>
      <td>  </td>
      
    </thead>
<?php
while ($row = $result->fetch_object())
{ 
      $level=$row->level;
                if($level==0){
// set up a row for each record
echo "<tr>";
echo "<td>" . $row->ID . "</td>";
echo "<td>" . $row->username . "</td>";
echo "<td>" . $row->email . "</td>";
echo "<td><a href='delete.php?delete=" . $row->ID . "' >Delete</a></td>";

echo "</tr>";
}
}
echo "</table>";
}
// if there are no records in the database, display an alert message
else
{
echo "No results to display!";
}
}
// show an error if there is an issue with the database query
else
{
echo "Error: " . $MySQLi_CON->error;
}
echo '</form>';

// close database connection
$MySQLi_CON->close();

?>
</table>
</form>
    </div>
     <footer>
            
              <div class="col-lg-12 text-center" style="margin-top: 200px; " >
                   <hr/>
                  <p>&copy; 2016 AnimeSekai. All Rights Reserved. Proudly created by AnimeSekai.com</a></p>
                </div>
          
            <!-- /.row -->
        </footer>

</body>
</html>