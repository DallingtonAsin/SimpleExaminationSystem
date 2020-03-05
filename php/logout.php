<?php

session_start();
unset($_SESSION['username']);
unset($_SESSION['uniquecode']);
$url = "..cstexams/index.php";

if(isset($_GET['session_expired'])){
  $session_selector =$_GET['session_expired'];
  $session_time = $_GET['session_duration'];
  $url .= "?session_expired='".$session_selector."'";
  header("location:$url");
}

?>
