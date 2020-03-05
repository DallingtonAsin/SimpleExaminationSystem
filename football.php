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
  


  <title>CST Football Quiz</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css" >
   <link rel="stylesheet" type="text/css" href="css/jquery-ui.css" >
   
  


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
        <a class="navbar-brand" id="companyname" href="#"><?php echo company; ?></a>
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
              <a  class="settings"><span class="fas fa-cog"></span> settings</a>
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

    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron" id="FootballJumb">
     <div id="jumb">
      <h4 class="app text-center">Welcome to CST Football Quiz challenge</h4>
      <div id="mycarousel" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators">
         <li data-target="#mycarousel" data-slide-to="0"  ></li>
         <li data-target="#mycarousel" data-slide-to="1"  ></li>
         <li data-target="#mycarousel" data-slide-to="2"  ></li>
       </ol>
       <div class="carousel-inner">

         <div class="item active">
          <img src="img/13.jpg"/>
          <div class="carousel-caption">
            <a type="button" class="btn btn-info learn-btn" role="button" id="football-start-btn">
            start football quiz</a>
          </div>
        </div>


      </div>
    </div>

    <p>
      <span class="reducefont text-center">
        Answer football related questions and get yourself promoted to the next class if you get the pass mark.
        
      </span>
    </p>
  </div>
  
</div>

<div class="container col-lg-12" id="football-exam">
  <div>
   <div class="panel" >
    <div class="panel-heading  text-center">
      <h4 class="paper-title text-center">Questions - Football</h4>
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
     <span class="lineit">1.<hr class="line-dotted"> is the world cup winner 2014</span>
     <div class="radio answers">
      <label><input type="radio" name="1" value="Spain">A. Spain</label>
      <label><input type="radio" name="1" value="Germany">B. Germany</label>
      <label><input type="radio" name="1" value="France">C. France</label>
      <label><input type="radio" name="1" value="none">D. None of the above</label>
    </div> 
  </div>

  <div class="form-group">
   <span class="lineit">2. The following players played for Liverpool Fc in England except</span>
   <div class="radio answers">
    <label><input type="radio" name="2" value="Gerard">A. Steven Gerard</label>
    <label><input type="radio" name="2" value="Babel">B. Ryan Babel</label>
    <label><input type="radio" name="2" value="Carlos">C. Roberto Carlos</label>
    <label><input type="radio" name="2" value="Alberto">D. Luis Alberto</label>
  </div> 
</div>


<div class="form-group">
 <span class="lineit">3.<hr class="line-dotted"> is champions league final loser 2005</span>
 <div class="radio answers">
  <label><input type="radio" name="3" value="Liverpool">A. Liverpool</label>
  <label><input type="radio" name="3" value="Arsenal">B. Arsenal</label>
  <label><input type="radio" name="3" value="Milan">C. Ac Milan</label>
  <label><input type="radio" name="3" value="Munich">D. Bayern Munich</label>
</div> 
</div>


<div class="form-group">
 <span class="lineit">4. Who won PFA player of the year in England 2019?</span>
 <div class="radio answers">
  <label><input type="radio" name="4" value="Rooney">A. Wayne Rooney</label>
  <label><input type="radio" name="4" value="Sterling">B. Raheem Sterling</label>
  <label><input type="radio" name="4" value="Virgil">C. Virgil Van Dijk</label>
  <label><input type="radio" name="4" value="Hazard">D. Eden Hazard</label>
</div> 
</div>

<div class="form-group">
 <span class="lineit">5.which of the following sportspersons is/was not a football player?</span>
 <div class="radio answers">
  <label><input type="radio" name="5" value="Totti">A. Fransico Totti</label>
  <label><input type="radio" name="5" value="Drogba">B. Didier Drogba </label>
  <label><input type="radio" name="5" value="Rodger">C. Rodger Federa</label>
  <label><input type="radio" name="5" value="Ndidi">D. Wilfred Ndidi</label>
</div> 
</div>


<div class="form-group">
 <span class="lineit">6.<hr class="line-dotted"> knocked out Uganda cranes in AFCON last 16 stage in Egypt 2019</span>
 <div class="radio answers">
  <label><input type="radio" name="6" value="ivory">A. Ivory coast</label>
  <label><input type="radio" name="6" value="Egypt">B. Egypt</label>
  <label><input type="radio" name="6" value="Senegal">C. Senegal</label>
  <label><input type="radio" name="6" value="Ghana">D. Ghana</label>
</div> 
</div>

<div class="form-group">
 <span class="lineit">7. The following countries qualified for AFCON 2019 in Egypt except</span>
 <div class="radio answers">
  <label><input type="radio" name="7" value="Congo">A. DR Congo</label>
  <label><input type="radio" name="7" value="Benin">B. Benin</label>
  <label><input type="radio" name="7" value="Bfaso">C. Burkina Faso</label>
  <label><input type="radio" name="7" value="Madagascar">D. Madagascar</label>
</div> 
</div>

<div class="form-group">
 <span class="lineit">8.<hr class="line-dotted">knocked out Barcelona in champions league final 2017-2018 campaign?</span>
 <div class="radio answers">
  <label><input type="radio" name="8" value="Liverpool">A. Liverpool</label>
  <label><input type="radio" name="8" value="Real">B. Real Madrid</label>
  <label><input type="radio" name="8" value="Chelsea">C. Chelsea</label>
  <label><input type="radio" name="8" value="Roma">D. As Roma</label>
</div> 
</div>

<div class="form-group">
 <span class="lineit">9.Robin Van Persie won premier league title with?</span>
 <div class="radio answers">
  <label><input type="radio" name="9" value="Arsenal">A. Arsenal</label>
  <label><input type="radio" name="9" value="united">B. Manchester united</label>
  <label><input type="radio" name="9" value="Chelsea">C. Chelsea</label>
  <label><input type="radio" name="9" value="Liverpool">D. Liverpool</label>
</div> 
</div>

<div class="form-group">
 <span class="lineit">10.which of the following liverpool players scored the second goal
 in a 3-3 goal thriller in champions league final in 2005 Instabul against AC Milan</span>
 <div class="radio answers">
  <label><input type="radio" name="10" value="Alonso">A. Xabi Alonso</label>
  <label><input type="radio" name="10" value="Peter">B. Peter Crouch</label>
  <label><input type="radio" name="10" value="Steven">C. Steven Gerard</label>
  <label><input type="radio" name="10" value="Smicer">D. Smicer</label>
</div> 
</div>

<div class="form-group">
  <input type="submit"  class="btn btn-primary" name="ComputerSubmit" id="FootballSubmitBtn" value="submit">
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
         <div class="form-group">
        <span class="error_message"></span>
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
