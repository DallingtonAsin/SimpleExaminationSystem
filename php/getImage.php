<?php
   require_once('dbh.inc.php');
   $user = "Peterson";
   $getimage_sql = "SELECT Image FROM students WHERE StudentName='".$user."'";
   $getimage_sql_exe = mysqli_query($con,$getimage_sql);
   $row_image= mysqli_fetch_assoc($getimage_sql_exe);
   $user_image = $row_image['Image'];
  


?>