<?php
require_once('dbh.inc.php');

class BaseControlClass{

  // method RecordResults()
  public function RecordResults(){
    $errors = array();
    $student_name = $subject = $status = $messageErr = "";
    $db = new Database();

    $data_items = $_REQUEST['student_data'];
    print_r($data_items);

    $student_name = $data_items[0];
    $subject = $data_items[1];
    $results = $data_items[2];
    $status = $data_items[3];
    $reg_number = $data_items[4];

    date_default_timezone_set("Africa/Kampala");
    $datestamp = date("Y-m-d G:i:s", time());


    $std_query = $db->doConnect()->prepare("SELECT RegNo,StudentName From
      students WHERE StudentName='".$student_name."'");
    $std_query_exe = $std_query->execute();
    if($std_query_exe){
      $rowx =$std_query->fetch(PDO::FETCH_ASSOC) ;
      $reg_no = $rowx['RegNo'];
      if($reg_no != null){
        switch ($subject) {
          case 'Mathematics':
          $student_sql = "INSERT INTO MathResults(RegNo,StudentName,
          Marks,Status,TimeofSubmission) VALUES('$reg_no','$student_name',
          '$results','$status','$datestamp')";
          break;
          case 'English':
          $student_sql = "INSERT INTO EnglishResults(RegNo,StudentName,
          Marks,Status,TimeofSubmission) VALUES('$reg_no','$student_name',
          '$results','$status','$datestamp')";
          break;
          case 'Computer':
          $student_sql = "INSERT INTO  ComputerResults(RegNo,StudentName,
          Marks,Status,TimeofSubmission) VALUES('$reg_no','$student_name',
          '$results','$status','$datestamp')";
          break;
          case 'Football':
          $student_sql = "INSERT INTO  FootballResults(RegNo,StudentName,
          Marks,Status,TimeofSubmission) VALUES('$reg_no','$student_name',
          '$results','$status','$datestamp')";
          break;      
        }
        
        $sql_std_exe = $db->doConnect()->prepare($student_sql);
        $std_stmt = $sql_std_exe->execute();
        if(!$std_stmt){
          echo "problems!".$db->errorCode();
        }
        else{
          echo "Results recorded successfully\n";
        }
      }
      else{
        echo "Can't find such student in our school";
      }

    }



      } // end of method RecordResults()

      public function ModifyPassword(){
       
        $data = $_REQUEST['dataArray'];
        $password1 = $data[0];
        $password2 = $data[1];
        $user = $data[2];
        if($password1 == $password2){
          $password = $password1;
        }
        if($password1 != $password2){
          echo "passwords donot match";
        }
        $db = new Database();

        $modify_query = $db->doConnect()->prepare("UPDATE students SET Password='$password' 
          WHERE StudentName='".$user."'");
        $modify_query_exe = $modify_query->execute();
        if(!$modify_query_exe){
          echo "Failed to change your password";
        }
        else{ 
          echo "Your password has been changed successfully";
          
        }

        
      } // end of method ModifyPassword()   

//method for Exam session timeout
/* public function checkIfExamSessionExpired(){
  $current_time = time();
  $loggedin_time = $_REQUEST['timein'];

    if($current_time - $loggedin_time > 30){ // 30 seconds
       echo "session timeout";
    }else{
       echo "not yet";
    }
}*/
    } // end of class BaseControlClass

//calling method RecordResults()
    $class = new BaseControlClass();
    
    if(isset($_POST['changepassword'])){
     echo $class->ModifyPassword();
    }
   if(isset($_POST['RecordData'])){
     echo $class->RecordResults();
   }
   /*if(isset($_POST['setTimeQuery'])){
     echo $class->checkIfExamSessionExpired();
   }*/


   ?>
