<?php
require "php/config.php";
require "php/authenticate.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" href="<?php echo icon; ?>">

  <title>CST AccountLogin</title>
  <style type="text/css">
  body{
    background:#25383C !important;
  }
  form{
    margin-top:40px;
  }

  #login{
    background:#ffa62f !important;
    color:#000 !important;
    border: #5E7D7E !important;
    height: 35px;
    font-size:14px;
    font-weight: bold;
    border-radius: 5px;
  }
  h5{
    text-align: center;
  }
  strong{
    color: #f4f4f4;
    margin-left: 50px;
    margin-top: 200px !important;
  }


  </style>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- External CSS -->
  <link href="css/style.css" rel="stylesheet">

  <link href="fontawesome/css/all.css" rel="stylesheet">


</head>

<body>
  <section id="main">
    <div class="container">
      <div class="row">

        <br><br>
        <div class="col-md-4 col-md-offset-4">
          <h3 class="navbar-brand companyname text-center" id="companyname"><?php echo company; ?></h3>
          <form  action="index.php" method="post" id="login_form" class="well" >
            <?php
            if(isset($_GET['session_expired'])){
              $session_code = $_GET['session_expired'];
              $timeout = ((1/60) * 3000); // converting seconds into minutes
            
              array_push($errors,"Session expired,please login again");
              //  array_push($errors,"No activity with in $timeout minutes,please login again");

            }

            require('php/errors.php');
          
            ?>
            <div class="form-group">
              <h5 class="sign-into">sign in to start your exam session</h5>
            </div>
            <div class="form-group">
              <span class="login_span">username</span>
              <input type="text"  class="form-control" name="username" placeholder="" Required>
            </div>

            <div class="form-group">
              <span class="login_span">password</span>
            <input type="password" id="showpassword"  class="form-control" name="password" placeholder="" Required>
          </div>

        <div class="form-group">
          <input type="checkbox"  value="show password"  onclick="FunctionForPassword()"> <span>show password</span>
        </div>


        


        <div>
          <button type="submit" id="login" name="submit" class="btn btn-block">Login</button>
        </div>
        <?php
        if(isset($_GET['newpwd'])){
          if($_GET['newpwd']=="passwordupdated"){
            echo "<p class='success'>Your password has been reset</p>";
          }
        }
        ?>
        <a href="pwd-56-91/ResetPassword-Request.php" id="fpassword">Forgot password?</a>
      </form>
    </div>
  </div>
</div>


</section>


<!--<footer id="footer">
<address>
<strong>CST, Inc.</strong><br>
1355 Sir.Apollo Kagwa Road, Suite 900<br>
Kampala, CA 94103<br>
<abbr title="Phone">P:</abbr> (+256) 774014727
</address>
<p><strong>Copyright Code Solution Tech&copy;2019</strong></p>
</footer>-->






<script>
function FunctionForPassword() {
  var x = document.getElementById("showpassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<script src="js/bootstrap.min.js"></script>

</body>

</html>
<!--
<div class="form-group">
  <span class="login_span">password</span>

  <div class="input-group">
<input type="password" id="showpassword"  class="form-control" name="password" placeholder="" Required>
    <span class="input-group-addon" onclick="FunctionForPassword()" ><span class="fa fa-eye"></span>
  </span>
</div>
</div>
-->
