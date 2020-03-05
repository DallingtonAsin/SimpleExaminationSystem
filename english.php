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
  <script src="js/jquery-ui.min.js"></script>

  <script src="js/dialogify/dist/dialogify.min.js"></script>
  <script src="js/dialogify/src/js/dialogify.js"></script>
  <script src="js/dialogify/src/js/dialog-polyfill.js"></script>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="<?php echo icon; ?>">
  


  <title>CST English Quiz</title>

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
                <span class="student"><?php echo "".$_SESSION['username']."";?></span></a>
                <span class="registration"><?php echo $regNo ?></span>
              </li>
            </ul>
          </li>
        </ul>
      </div>

    </div>
  </nav>

  <br>
  <div class="container" id="container">
    <div class="jumbotron" id="EnglishJumb">
     <div id="jumb">
      <h4 class="app text-center">Welcome to CST English Quiz challenge</h4>
      <div id="mycarousel" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators">
         <li data-target="#mycarousel" data-slide-to="0"  ></li>
         <li data-target="#mycarousel" data-slide-to="1"  ></li>
         <li data-target="#mycarousel" data-slide-to="2"  ></li>
       </ol>
       <div class="carousel-inner">

         <div class="item active">
          <img src="img/3.jpg"/>
          <div class="carousel-caption">
            <a type="button" class="btn btn-info learn-btn" role="button" id="english-start-btn">
            start english quiz</a>
          </div>
        </div>
        

      </div>
    </div>

    <p>
      <span class="reducefont">
        Answer english grammar questions and get yourself promoted to the next class if you get the pass mark.
        
      </span>
    </p>
  </div>
  
</div>

<div class="container col-lg-12" id="english-exam">
  <div>
   <div class="panel" >
    <div class="panel-heading  text-center">
     <h4 class="paper-title text-center">Questions - English Grammar</h4>

   <div class="form-inline">  
      <h4 class="date"></h4>
      Time:<span class="minutes"></span>:<span class="seconds"> 
     </span></div>

     
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
     <span class="lineit">1.Jenny <hr class="line-dotted">tired</span>
     <div class="radio answers">
      <label><input type="radio" name="1" value="be">A. be</label>
      <label><input type="radio" name="1" value="is">B. is</label>
      <label><input type="radio" name="1" value="has">C. has</label>
      <label><input type="radio" name="1" value="have">D. have</label>
    </div> 
  </div>

  <div class="form-group">
    <span class="lineit">2."<hr class="line-dotted">is she?"She's my friend from London"</span>
    <div class="radio answers">
      <label><input type="radio" name="2" value="who">A. who</label>
      <label><input type="radio" name="2" value="why">B. why</label>
      <label><input type="radio" name="2" value="which">C. which</label>
      <label><input type="radio" name="2" value="what">D. what</label>
    </div> 
  </div>


  <div class="form-group">
   <span class="lineit">3.Today is Wednesday.Yesterday it<hr class="line-dotted">Tuesday</span>
   <div class="radio answers">
    <label><input type="radio" name="3" value="were">A. were</label>
    <label><input type="radio" name="3" value="is">B. is</label>
    <label><input type="radio" name="3" value="be">C. be</label>
    <label><input type="radio" name="3" value="was">D. was</label>
  </div> 
</div>


<div class="form-group">
 <span class="lineit">4. It's Thursday today. Tomorrow it<hr class="line-dotted">Friday</span>
 <div class="radio answers">
  <label><input type="radio" name="4" value="be">A. be</label>
  <label><input type="radio" name="4" value="was">B. was</label>
  <label><input type="radio" name="4" value="will-be">C. will be</label>
  <label><input type="radio" name="4" value="will">D. will</label>
</div> 
</div>

<div class="form-group">
 <span class="lineit">5.<hr class="line-dotted">lots of animals in the zoo.</span>
 <div class="radio answers">
  <label><input type="radio" name="5" value="there">A. There</label>
  <label><input type="radio" name="5" value="there-is">B. There is</label>
  <label><input type="radio" name="5" value="there-are">C. There are</label>
  <label><input type="radio" name="5" value="therearent">D. There aren't</label>
</div> 
</div>


<div class="form-group">
 <span class="lineit">6. How many people<hr class="line-dotted">in your family?</span>
 <div class="radio answers">
  <label><input type="radio" name="6" value="are-there">A. are there</label>
  <label><input type="radio" name="6" value="is-there">B. is there</label>
  <label><input type="radio" name="6" value="there-are">C. there are</label>
  <label><input type="radio" name="6" value="there">D. there</label>
</div> 
</div>

<div class="form-group">
 <span class="lineit">7. Where <hr class="line-dotted">Sarah live?</span>
 <div class="radio answers">
  <label><input type="radio" name="7" value="are">A. are</label>
  <label><input type="radio" name="7" value="is">B. is</label>
  <label><input type="radio" name="7" value="do">C. do</label>
  <label><input type="radio" name="7" value="does">D. does</label>
</div> 
</div>

<div class="form-group">
 <span class="lineit">8."Has Steve got a sister?""No,he<hr class="line-dotted">
 ,but he's got 2 brothers."</span>
 <div class="radio answers">
  <label><input type="radio" name="8" value="has">A. has</label>
  <label><input type="radio" name="8" value="hasnt">B. hasn't</label>
  <label><input type="radio" name="8" value="havent">C. haven't</label>
  <label><input type="radio" name="8" value="not">D. not</label>
</div> 
</div>

<div class="form-group">
 <span class="lineit">9.<hr class="line-dotted">to London on the train yesterday?</span>
 <div class="radio answers">
   <label><input type="radio" name="9" value="went">A. Did Mary Went</label>
   <label><input type="radio" name="9" value="didgo">B. Did Mary go</label>
   <label><input type="radio" name="9" value="go">C. Mary go</label>
   <label><input type="radio" name="9" value="goes">D. Mary goes</label>
 </div> 
</div>

<div class="form-group">
 <span class="lineit">10.Jack<hr class="line-dotted">English,Spanish and abit of French</span>
 <div class="radio answers">
  <label><input type="radio" name="10" value="speaks">A. speaks</label>
  <label><input type="radio" name="10" value="speak">B. speak</label>
  <label><input type="radio" name="10" value="speaking">C. speaking</label>
  <label><input type="radio" name="10" value="is">D. is speaking</label>
</div> 
</div>



<div class="form-group">
  <input type="submit"  class="btn btn-primary" name="ComputerSubmit" id="EnglishSubmitBtn" value="submit">
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
<br>

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
