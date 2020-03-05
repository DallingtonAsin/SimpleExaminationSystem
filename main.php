<?php
require('php/config.php');
require('php/authenticate.php');
if(empty($_SESSION['username'])){
  header("location:index.php");
}
if(isset($_SESSION['registrationCode'])){
  $regNo = $_SESSION['registrationCode'];
}
if(isset($_SESSION['image'])){
  $image = $_SESSION['image'];
}
if(empty($_SESSION['image'])){
  $image = "no image";
}
//require('php/getImage.php');


/*if(empty($_SESSION['username'])){
  header("location:/quiz/index.php");
}*/

?>
<!DOCTYPE html>
<html lang="en">
<head>

  <script src="js/jquery-2.2.4.min.js"></script>
  <script src="js/bootstrap.inc.min.js"></script>

  <script src="js/JavascriptConfig.js"></script>
  <script src="js/dialog-master/dist/js/bootstrap-dialog.min.js"></script>

  <script src="js/dialogify/dist/dialogify.min.js"></script>
  <script src="js/dialogify/src/js/dialogify.js"></script>
  <script src="js/dialogify/src/js/dialog-polyfill.js"></script>

  <script src="js/jquery-ui.min.js"></script>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="<?php echo icon; ?>">
  


  <title>CST Quiz app</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/jquery-ui.css" >
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css" >
  



</head>

<body>

 <div class="section">
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand companyname" href="#"><?php echo company; ?></a>
      </div>

      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="main.php">Home</a></li>
          <li><a href="maths.php">Math</a></li>
          <li><a href="english.php">English</a></li>
          <li><a href="computer.php">Computer</a></li>
          <li><a href="football.php">Football <span class="sr-only">(current)</span></a></li>
         <!-- <li class="time"></li>-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="logoff">
             <span class="image">
             <!-- <?php
             echo "
             <img src='".base64_encode($_SESSION['image'])."/>
             ";
              ?>-->
            </span>
             <span class="fa fa-user"></span>
             <span class="caret"></span>
           </a>
           <ul class="dropdown-menu list-group" role="menu" >
             <li class="list-group-item">
              <a  class="settings"><span class="fas fa-cog"></span> settings</a>
            </li>
            <li class="list-group-item">
              <a href="main.php?logout='1'" id="logout" class="active"><span class="glyphicon glyphicon-off"></span> logout 
                <span class="student"><?php echo $_SESSION['username'];?></span></a>
              </li>
            </ul>
          </li>

        </ul>
      </div>

    </div>
  </nav>

  <br>
  <div class="container" id="container">

    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron jumbotron-fluid" id="jumb1">

      <h4 class="app text-center">CST Examination</h4>
      <div id="mycarousel" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators">
         <li data-target="#mycarousel" data-slide-to="0"  ></li>
         <li data-target="#mycarousel" data-slide-to="1"  ></li>
         <li data-target="#mycarousel" data-slide-to="2"  ></li>
       </ol>


       <div class="carousel-inner" role="listbox">

        <div class="item active">
          <img src="img/1.jpg"/>
          <div class="carousel-caption">
            <h3><a type="button" class="btn btn-info learn-btn" role="button" 
              id="start">Start</a></h3> 
            </div>
          </div>

          <div class="item">
            <img src="img/8.jpg"/>
            <div class="carousel-caption">
              <a type="button" class="btn btn-info learn-btn" href="maths.php" role="button">Learn math</a>
            </div>
          </div>

          <div class="item">
            <img src="img/3.jpg"/>
            <div class="carousel-caption">
              <a type="button" class="btn btn-info learn-btn" href="maths.php" role="button">Learn English</a>
            </div> 
          </div>


          <div class="item">
            <img src="img/5.jpg"/>
            <div class="carousel-caption">
              <a type="button" class="btn btn-info learn-btn" href="maths.php" role="button">Learn Computer</a>
            </div> 
          </div>

          <div class="item">
            <img src="img/13.jpg"/>
            <div class="carousel-caption">
             <a type="button" class="btn btn-info learn-btn" href="maths.php" role="button">Learn Football</a>
           </div>
         </div>

       </div>

       <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
         <span class="icon-prev" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
       </a>
       <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
         <span class="icon-next" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
       </a>

     </div>

     <p>
      <span class="reducefont">This app allows you to grow through questions and answer them to know your score.
        You as well have a chance to win yourself bitcoins if you answer all questions right

      </span>
    </p>


  </div>

  <div class="container col-lg-12" id="select-exam">
   <div class="panel" >

    <div class="panel-body">


      <div class="col-md-3">
        <a href="maths.php" class="well-anc">
          <div class="well dash-box" class="boxes">
            <h2><span class="glyphicon glyphicon-edit"></span></h2>
            <h4>Maths</h4>
          </div>
        </a>
      </div>

      <div class="col-md-3">
        <a href="english.php"  class="well-anc">
          <div class="well dash-box" class="boxes">
            <h2><span class="fa fa-book"></span></h2>
            <h4>English</h4>
          </div>
        </a> 
      </div>

      <div class="col-md-3">
       <a href="computer.php"  class="well-anc">
        <div class="well dash-box" class="boxes">
          <h2><span class="fa fa-laptop"></span></h2>
          <h4>Computer</h4>
        </div>  
      </a>
    </div>

    <div class="col-md-3">
      <a href="football.php"  class="well-anc">
        <div class="well dash-box" class="boxes">
          <h2><span class="fa fa-futbol"></span></h2>
          <h4>Football</h4>
        </div>
      </a>
    </div>  



  </div>
</div>
<p class="text-center info">
 <p>
  <div class="jumbotron" id="jumb2">
    <div id="carousel" class="carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
       <li data-target="#carousel" data-slide-to="0"  ></li>
       <li data-target="#carousel" data-slide-to="1"  ></li>
       <li data-target="#carousel" data-slide-to="2"  ></li>
     </ol>
     <div class="carousel-inner">
      <div class="item active">
        <img src="img/3.jpg"/>
      </div>
      <div class="item">
        <img src="img/4.jpg"/>
      </div>
      <div class="item">
        <img src="img/5.jpg"/>
      </div>

    </div>
  </div>
</div>
</p>


</div> 

</div> 
</div>

<div class="dialog-class">
  <div id="dialog-container">
    <div id="dialog" title="Change password">
      <div>
        <div class="form-group">
          <label>New Password:</label>
          <input type="password" name="pass1" id="password1" class="form-control dialog-inputs" Required autocomplete="false">
        </div>
        <div class="form-group">
          <label>Confirm Password:</label>
          <input type="password" name="pass2" id="password2" class="form-control dialog-inputs" Required autocomplete="false">
        </div>
        <div class="form-group">
          <input type="submit" name="submit" id="ChangePassword" 
          class="btn btn-success form-control" value="Change" >
        </div>     
      </div>    
    </div>    
  </div>
</div>


<footer id="footer">
  <address>
    <strong>CST, Inc.</strong><br>
    1355 Sir.Apollo Kagwa Road, Suite 900<br>
    Kampala, CA 94103<br>
    <abbr title="Phone">P:</abbr> (+256) 774014727
  </address>
  <p><strong>Copyright&copy; Code Solution Tech 2019. All Rights Reserved.</strong></p>
</footer>


</body>
</html>
