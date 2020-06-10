<?php
require_once('dbh.inc.php');


class AuthenticateUsers{
  

public function doAuthentication(){
  global $errors;
  $errors = array();
  $username = $password = $err = "";
  $dbConn = new Database();
  session_start();
   if($_SERVER['REQUEST_METHOD']=="POST"){
  if(isset($_POST['submit'])){
    
    if(empty($_POST['username'])){
      array_push($errors, "username is required");
    }
    if(empty($_POST['password'])){
      array_push($errors, "password is required");
    }

    $username = $_POST['username'];
    $password = $_POST['password'];
    if(count($errors)==0){
        $stmt = $dbConn->doConnect()->prepare("SELECT * FROM students 
        WHERE StudentName=:name AND
        Password=:passcode");
        $stmt->bindParam(':name', $username);
        $stmt->bindParam(':passcode', $password);
        $stmt->execute();
        $rows =$stmt->fetch(PDO::FETCH_ASSOC);
        if($rows == false){
          array_push($errors, "Invalid username or password,please try again!");
        }
        else{   
          $name = $rows['StudentName'];
         
          $_SESSION['registrationCode'] = $rows['RegNo'];
          $_SESSION['uniquecode'] = uniqid();
          $_SESSION['username'] = $name;

          $img_obj = new AuthenticateUsers();
         
          $_SESSION['image'] = $img_obj->getImage($_SESSION['registrationCode'],$_SESSION['username']);
          $_SESSION['loggedin_time'] = time();
          //$image = getImage($name);
        
          header("location:../cstexams/main.php");
        }
       
    } // end of an if block for count(($errors)==0)
    else{
      require('errors.php');
    }

  } // end of if block for action on submit button

} // end of an if block for the POST check method

}

function getImage($regno,$student){
  $dbConn = new Database();
  $img_stmt = $dbConn->doConnect()->prepare("SELECT Image FROM students 
        WHERE RegNo='$regno' AND
        StudentName='$student'");
  $img_stmt_exe = $img_stmt->execute();
  if($img_stmt_exe){
    $img_row = $img_stmt->fetch(PDO::FETCH_BOUND);
    $image = $img_row['Image'];
      header('Content-Type:image');
      echo $image;
  }
}

//function isManagerLoginSessionExpired() checks manager's session timeout
public function isLoginSessionExpired(){
  $current_time = time();
  if(isset($_SESSION['loggedin_time']) && isset($_SESSION['uniquecode'])){
    if($current_time - $_SESSION['loggedin_time'] > 3000){
      return true;
    }else{
      return false;
    }
  }
}


public function doAutomaticLogout(){
  $c= new AuthenticateUsers();
  if (isset($_SESSION['uniquecode'])) {
  if($c->isLoginSessionExpired()){
    header("location:../php/logout.php?session_expired='1'");
  }
}
}



//Action taken if logout button
function doLogout(){
  if(isset($_GET['logout'])){
  session_destroy();
  unset($_SESSION['username']);
  unset($_SESSION['uniquecode']);
  header("location:../index.php");
}
}

} // end of class AuthenticateUsers

$myclass = new AuthenticateUsers();
echo $myclass->doAuthentication();
echo $myclass->doAutomaticLogout();
echo $myclass->doLogout();













?>
