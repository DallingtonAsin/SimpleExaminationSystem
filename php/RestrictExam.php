<?php
require_once('dbh.inc.php');

class BaseClass{

  public function doRestrictAccess(){
    $data = $_REQUEST['studentDetails'];
 // print_r($data);

    $reg = $data[0];
    $student_name = $data[1];
    $subject = $data[2];

    $obj = new BaseClass();  
    if(($obj->StudentDidExam($reg,$student_name,$subject)) == 1){
      echo "done";
    }
    else{
      echo "do";
    }
  }
  
  public function StudentDidExam($reg,$name,$subject){
    $db = new Database();
    switch ($subject) {
      case 'Mathematics':
      $sql = "SELECT RegNo,StudentName FROM MathResults
      WHERE RegNo='$reg' AND StudentName='$name'";
      break;
      case 'English':
      $sql = "SELECT RegNo,StudentName FROM EnglishResults 
      WHERE RegNo='$reg' AND StudentName='$name'";
      break;
      case 'Computer':
      $sql = "SELECT RegNo,StudentName FROM ComputerResults
      WHERE RegNo='$reg' AND StudentName='$name'";
      break;
      case 'Football':
      $sql = "SELECT RegNo,StudentName FROM FootballResults 
      WHERE RegNo='$reg' AND StudentName='$name'";
      break;
    }

    $sql_exe = $db->doConnect()->prepare($sql);
    $g = $sql_exe->execute();
    $result = $sql_exe->fetch(PDO::FETCH_ASSOC);
    if($result){
      return true;
    }
    return false;
  }

    } // end of class BaseClass

    $k = new BaseClass();  
    echo $k->doRestrictAccess();



    ?>
