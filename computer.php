<?php
require('php/config.php');
require('php/authenticate.php');
if(empty($_SESSION['username'])){
  header("location:index.php");
}
if(isset($_SESSION['registrationCode'])){
  $regNo = $_SESSION['registrationCode'];
}
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

  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="<?php echo icon; ?>">
  


  <title>CST Computer Quiz</title>

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
        <a class="navbar-brand" href="#"><?php echo company; ?></a>
      </div>

      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="main.php">Home</a></li>
          <li><a href="maths.php">Math</a></li>
          <li><a href="english.php">English</a></li>
          <li><a href="computer.php">Computer</a></li>
          <li><a href="football.php">Football <span class="sr-only">(current)</span></a></li>
          <li class="dropdown">
            <a data-toggle="dropdown" class="logoff">
             <span class="fa fa-user"></span>
             <span class="caret"></span>
           </a>
           <ul class="dropdown-menu list-group" role="menu" >
             <li class="list-group-item">
              <a class="settings"><span class="fas fa-cog"></span> settings</a>
            </li>
            <li class="list-group-item">
              <a href="main.php?logout='1'" id="logout" class="active"><span class="glyphicon glyphicon-off"></span> logout 
                <span class="student"><?php echo $_SESSION['username'];?></span>
                <span class="registration"><?php echo $regNo ?></span>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>

  </div>
</nav>

<br>
<div class="container" id="container">
  <div class="jumbotron" id="ComputerJumb">
   <div>
    <h4 class="app text-center">Welcome to CST Computer Quiz challenge</h4>
    <div id="mycarousel" class="carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
       <li data-target="#mycarousel" data-slide-to="0"  ></li>
       <li data-target="#mycarousel" data-slide-to="1"  ></li>
       <li data-target="#mycarousel" data-slide-to="2"  ></li>
     </ol>
     <div class="carousel-inner">


      <div class="item active">
        <img src="img/5.jpg"/>
        <div class="carousel-caption">
          <a type="button" class="btn btn-info learn-btn" role="button" id="computer-start-btn">
          start computer quiz</a>
        </div>
      </div>


    </div>
  </div>

  <p>
    <span class="reducefont">
      Answer computer related questions and get yourself promoted to the next class if you get the pass mark.
    </span>
  </p>
</div>

</div>

<div class="container col-lg-12" id="computer-exam">
  <div>
   <div class="panel" >
    <div class="panel-heading  text-center">
      <h4 class="paper-title text-center">Questions - Computer</h4>
      <h4 class="date">
      </h4>
      <div class="circle text-center">
        <h3 id="scores"></h3>
      </div>
      <div>
       <span class="comment"></span> 

     </div>
     <hr class="hr"> 
   </div>
   <div class="panel-body">
    <div>

      <div class="form-group">
       <span class="lineit">1.<hr class="line-dotted"> refers to software which is used to do particular task</span>
       <div class="radio answers">
        <label><input type="radio" name="1" value="OS">A. Operating system</label>
        <label><input type="radio" name="1" value="Program">B. Program</label>
        <label><input type="radio" name="1" value="Data">C. Data</label>
        <label><input type="radio" name="1" value="Software">D. Software</label>
      </div> 
    </div>

    <div class="form-group">
     <span class="lineit">2. The following are hardware computer components except</span>
     <div class="radio answers">
      <label><input type="radio" name="2" value="Mouse">A. Mouse</label>
      <label><input type="radio" name="2" value="Keyboard">B. Keyboard</label>
      <label><input type="radio" name="2" value="Control">C. Control panel</label>
      <label><input type="radio" name="2" value="Monitor">D. Monitor</label>
    </div> 
  </div>


  <div class="form-group">
   <span class="lineit">3.<hr class="line-dotted"> is the command to clear content on windows command prompt</span>
   <div class="radio answers">
    <label><input type="radio" name="3" value="clear">A. clear</label>
    <label><input type="radio" name="3" value="remove">B. remove</label>
    <label><input type="radio" name="3" value="trash">C. trash</label>
    <label><input type="radio" name="3" value="cls">D. cls</label>
  </div> 
</div>


<div class="form-group">
 <span class="lineit">4. How many computer generations do we have as of today?</span>
 <div class="radio answers">
  <label><input type="radio" name="4" value="2">A. 2</label>
  <label><input type="radio" name="4" value="5">B. 5</label>
  <label><input type="radio" name="4" value="6">C. 6</label>
  <label><input type="radio" name="4" value="3">D. 3</label>
</div> 
</div>

<div class="form-group">
 <span class="lineit">5.which of the following is a scripting language?</span>
 <div class="radio answers">
  <label><input type="radio" name="5" value="java">A. java</label>
  <label><input type="radio" name="5" value="C#">B. C#</label>
  <label><input type="radio" name="5" value="R">C. R</label>
  <label><input type="radio" name="5" value="php">D. php</label>
</div> 
</div>


<div class="form-group">
 <span class="lineit">6.<hr class="line-dotted"> invented the linux kernel</span>
 <div class="radio answers">
  <label><input type="radio" name="6" value="Bill">A. Bill Gates</label>
  <label><input type="radio" name="6" value="Steve">B. Steve Jobs</label>
  <label><input type="radio" name="6" value="Tovalds">C. Linus Tovalds</label>
  <label><input type="radio" name="6" value="Larry">D. Larry Page</label>
</div> 
</div>

<div class="form-group">
 <span class="lineit">7. The following are email applications except</span>
 <div class="radio answers">
  <label><input type="radio" name="7" value="Outlook">A. Microsoft Outlook</label>
  <label><input type="radio" name="7" value="Squirrelmail">B. Squirrelmail</label>
  <label><input type="radio" name="7" value="IntelliJ">C. IntelliJ</label>
  <label><input type="radio" name="7" value="none">D. None of the above</label>
</div> 
</div>

<div class="form-group">
 <span class="lineit">8.which of the following ports is used to connect mouse/keyboard?</span>
 <div class="radio answers">
  <label><input type="radio" name="8" value="VGA">A. VGA port</label>
  <label><input type="radio" name="8" value="Ethernet">B. Ethernet port</label>
  <label><input type="radio" name="8" value="HDMI">C. HDMI port</label>
  <label><input type="radio" name="8" value="PS2">D. PS2 port</label>
</div> 
</div>

<div class="form-group">
 <span class="lineit">9.which of the following Windows 10 editions is used by most business organisations?</span>
 <div class="radio answers">
  <label><input type="radio" name="9" value="Home">A. Windows 10 Home</label>
  <label><input type="radio" name="9" value="Education">B. Windows 10 Education</label>
  <label><input type="radio" name="9" value="Enterprise">C. Windows 10 Enterprise</label>
  <label><input type="radio" name="9" value="Pro">D. Windows 10 Pro</label>
</div> 
</div>

<div class="form-group">
 <span class="lineit">10.which of the following software products was developed by Jet Brians?</span>
 <div class="radio answers">
  <label><input type="radio" name="10" value="Netbeans">A. Netbeans</label>
  <label><input type="radio" name="10" value="Sublime">B. Sublime Text</label>
  <label><input type="radio" name="10" value="Twitter">C. Twitter</label>
  <label><input type="radio" name="10" value="Pycharm">D. Pycharm</label>
</div> 
</div>

<div class="form-group">
  <input type="submit"  class="btn btn-primary" id="ComputerSubmitBtn" value="submit">
</div>

</div>
</div>
</div>
</div>

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

<br><br>
<br><br>
<br><br>

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
