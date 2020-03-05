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
  


  <title>CST Maths Quiz</title>

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
    </ul>
  </div>

</div>
</nav>

<br>
<div class="container" id="container">

  <!-- Main component for a primary marketing message or call to action -->
  <div class="jumbotron" id="MathsJumb">
   <div>
    <h4 class="app text-center">Welcome to CST Mathematics Quiz challenge</h4>
    <div id="mycarousel" class="carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
       <li data-target="#mycarousel" data-slide-to="0"  ></li>
       <li data-target="#mycarousel" data-slide-to="1"  ></li>
       <li data-target="#mycarousel" data-slide-to="2"  ></li>
     </ol>
     <div class="carousel-inner">

       <div class="item active">
        <img src="img/8.jpg"/>
        <div class="carousel-caption">
          <a type="button" class="btn btn-info learn-btn" role="button" id="maths-start-btn">
          start maths quiz</a>
        </div>
      </div>
      
      

    </div>
  </div>

  <p>
    <span class="reducefont">
      Answer mathematics questions and get yourself promoted to the next class if you get the pass mark.
      
    </span>
  </p>
</div>

</div>

<div class="container col-lg-12" id="maths-exam">
  <div>
   <div class="panel" >
    <div class="panel-heading  text-center">
      <h4 class="paper-title text-center">Questions - Mathematics</h4>
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
       <span class="lineit">1.what is the value of x when you have simultaneous equations
       x+y=9 and 2y-3x=5</span>
       <div class="radio answers">
        <label><input type="radio" name='1' value="3.4">A. 3.4</label>
        <label><input type="radio" name='1' value="5.5">B. 5.5</label>
        <label><input type="radio" name='1' value="2.6">C. 2.6</label>
        <label><input type="radio" name='1' value="6.4">D. 6.4</label>
      </div> 
    </div>

    <div class="form-group">
     <span class="lineit">2. what is the volume of the sphere whose radius is 3 units?
       <span> (Answer corrected to 2 decimal points)</span></span>
       <div class="radio answers">
        <label><input type="radio" name='2' value="114.08">A. 114.08</label>
        <label><input type="radio" name='2' value="113.10">B. 113.10</label>
        <label><input type="radio" name='2' value="210.90">C. 210.90</label>
        <label><input type="radio" name='2' value="189.45">D. 189.45</label>
      </div> 

    </div>


    <div class="form-group">
     <span class="lineit">3.what is the value of the computation 7*5/7-2</span>
     <div class="radio answers">
      <label><input type="radio" name='3' value="3">A. 3</label>
      <label><input type="radio" name='3' value="7">B. 7</label>
      <label><input type="radio" name='3' value="6">C. 6</label>
      <label><input type="radio" name='3' value="7.8">D. 7.8</label>
    </div> 
  </div>


  <div class="form-group">
   <span class="lineit">4.what is value when f(x)=2x-9 is differentiated at x=3?</span>
   <div class="radio answers">
    <label><input type="radio" name='4' value="2">A. 2</label>
    <label><input type="radio" name='4' value="-9">B. -9</label>
    <label><input type="radio" name='4' value="3">C. 3</label>
    <label><input type="radio" name='4' value="none">D. None of the above</label>
  </div> 
</div>

<div class="form-group">
 <span class="lineit">5.John is 4 times older than Joel. if John was born in 1983 and the current year is 2019,when was Joel born?</span>
 <div class="radio answers">
  <label><input type="radio" name='5' value="1994">A. 1994</label>
  <label><input type="radio" name='5' value="2000">B. 2000</label>
  <label><input type="radio" name='5' value="1998">C. 1998</label>
  <label><input type="radio" name='5' value="2010">D. 2010</label>
</div> 
</div>


<div class="form-group">
 <span class="lineit">6.Peter deposited an initial amount of $1000 in Barclays Bank in 2015 and Barclays gives a compound interest of 3% per annum.How much will Peter get if he decides to have his money in 2022?</span>
 <div class="radio answers">
  <label><input type="radio" name='6' value="1154.22">A. $1154.22</label>
  <label><input type="radio" name='6' value="1229.87">B. $1229.87</label>
  <label><input type="radio" name='6' value="1301.54">C. $1301.54</label>
  <label><input type="radio" name='6' value="null">D. None of the above</label>
</div> 
</div>

<div class="form-group">
 <span class="lineit">7.if 1 dollar($) is equal to 3750 shillings and 1 euro is equal to 4300 shillings.How many dollars are in 450 euros?</span>
 <div class="radio answers">
  <label><input type="radio" name='7' value="615">A. $615</label>
  <label><input type="radio" name='7' value="165">B. $165</label>
  <label><input type="radio" name='7' value="285">C. $285</label>
  <label><input type="radio" name='7' value="516">D. $516</label>
</div> 
</div>

<div class="form-group">
 <span class="lineit">8.what is the missing number in the following sequence
  1,3,7,15,<hr class="line-dotted">,63,127</span>
  <div class="radio answers">
    <label><input type="radio" name='8' value="28">A. 28</label>
    <label><input type="radio" name='8' value="48">B. 48</label>
    <label><input type="radio" name='8' value="31">C. 31</label>
    <label><input type="radio" name='8' value="128">D. 128</label>
  </div> 
</div>

<div class="form-group">
 <span class="lineit">9.Paul shared his land amongst his 3 children(Susan,King and Fred) in the ratio of 2:6:4 respectively.How much land did King get if Paul's total land was 384 acres?</span>
 <div class="radio answers">
  <label><input type="radio" name='9' value="128">A. 128</label>
  <label><input type="radio" name='9' value="64">B. 64</label>
  <label><input type="radio" name='9' value="192">C. 192</label>
  <label><input type="radio" name='9' value="nothing">D. None of the above</label>
</div> 
</div>

<div class="form-group">
 <span class="lineit">10.what is the result of integrating x with respect to x from 3 to 8?</span>
 <div class="radio answers">
  <label><input type="radio" name='10' value="28">A. 28</label>
  <label><input type="radio" name='10' value="32">B. 32</label>
  <label><input type="radio" name='10' value="27.5">C. 27.5</label>
  <label><input type="radio" name='10' value="non">D. None of the above</label>
</div> 
</div>

<div class="form-group">
  <input type="submit"  class="btn btn-primary"  id="MathSubmitBtn" value="submit">
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
