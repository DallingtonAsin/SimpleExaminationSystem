
$(document).ready(function(){
  var name,subject,results,status;
  $('.info').hide();
  $('#jumb2').hide();
  $('#select-exam').hide();
  $("#computer-exam").hide();
  $("#maths-exam").hide();
  $("#football-exam").hide();
  $("#english-exam").hide();
  $('.circle').hide();
  $('.comment').hide();
  $('.registration').hide();


  $('#dialog').dialog({
   autoOpen:false,
   modal:true,
 });

  

  function timenow(){
    var timestamp = Math.floor(new Date().getTime() / 1000);
    return timestamp;
  }

  var date = new Date();
  $('.date').text(date);

  $('#start').click(function(){
    $('.jumbotron').hide();
    $('.info').show();
    $('#jumb2').show();
    $('#select-exam').show();
    $('#footer').css("margin-top","100px");
  });

  var reg_num,std_name,Subject;
  reg_num = $('.registration').text();
  std_name = $('.student').text();

//method when user clicks on start computer quiz button
$('#computer-start-btn').click(function(){
 var who = [];
 Subject = "Computer";
 who.push(reg_num);
 who.push(std_name);
 who.push(Subject);
 $.ajax({
   url:"php/RestrictExam.php",
   method:'POST',
   data:{
    studentDetails:who,
  },
  success:function(data){
    if(data=='done'){
      $("#computer-start-btn").removeAttr('href');
      errorMessage(std_name,Subject);
    }
    else if(data=='do'){
     $('#computer-start-btn').unbind('click');
     $('#ComputerJumb').hide();
     $('#computer-exam').show();
   }
 },
 error:function(){
  console.log("Data can't be seen");
}
});
});


//method when user clicks on start math quiz button
$('#maths-start-btn').click(function(){
 var who = [];
 Subject = "Mathematics";
 who.push(reg_num);
 who.push(std_name);
 who.push(Subject);
 $.ajax({
   url:"php/RestrictExam.php",
   method:'POST',
   data:{
    studentDetails:who,
  },
  success:function(data){
    if(data=='done'){
      $("#maths-start-btn").removeAttr('href');
      errorMessage(std_name,Subject);
    }
    else if(data=='do'){
     $('#maths-start-btn').unbind('click');
     $('#MathsJumb').hide();
     $('#maths-exam').show();
   }
 },
 error:function(){
  console.log("Data can't be seen");
}
});
});


//method when user clicks on start football quiz button
$('#football-start-btn').click(function(){
 var who = [];
 Subject = "Football";
 who.push(reg_num);
 who.push(std_name);
 who.push(Subject);
 $.ajax({
   url:"php/RestrictExam.php",
   method:'POST',
   data:{
    studentDetails:who,
  },
  success:function(data){
    if(data=='done'){
      $("#football-start-btn").removeAttr('href');
      errorMessage(std_name,Subject);

    }
    else if(data=='do'){
     $('#football-start-btn').unbind('click');
     $('#FootballJumb').hide();
     $('#football-exam').show();
   }
 },
 error:function(){
  console.log("Data can't be seen");
}
});
});


/*var sec = 1;
var min = 0;
$(".seconds").html("00");
$(".minutes").html("00");
setInterval(function(){
  $(".seconds").html(sec);
  sec++;
  if(sec == 60){
    sec = 0;
    sec++
    min++;
    
      $(".minutes").html("0"+min+"");
    
    
  }
},1000);*/
  
//method when user clicks on start english quiz button
$('#english-start-btn').click(function(){
 var who = [];
 Subject = "English";
 who.push(reg_num);
 who.push(std_name);
 who.push(Subject);
 $.ajax({
   url:"php/RestrictExam.php",
   method:'POST',
   data:{
    studentDetails:who,
  },
  success:function(data){
    if(data=='done'){
      $("#english-start-btn").removeAttr('href');
      errorMessage(std_name,Subject);

    }
    else if(data=='do'){
     $('#english-start-btn').unbind('click');
     $('#EnglishJumb').hide();
     $('#english-exam').show();
   }
 },
 error:function(){
  console.log("Data can't be seen");
}
});
});

//method that popsup error message when a user wants to re-do quiz
function errorMessage(student,subject){
  BootstrapDialog.show({
    size:BootstrapDialog.SIZE_SMALL,
    title:"<b class='err-title'>CST Examination says</b>",
    message: "<span class='fa fa-exclamation-triangle err-icon'></span> Hi "+student+",you have already done "+subject+" quiz & policy is that quiz is done only & only once!",
    buttons:[{
      id:'btn-ok',
      label:'ok',
      cssClass:'btn-success',
      autospin:false,
      action:function(id){
        id.close();
      }
    }]
  });
}

$('#start').click(function(){
 $("#jumb1").hide();
 $("#computer-exam").show();
 $('#footer').css("margin-top","100px");
});

var bitcoins = 0;
name = $('.student').text();

 //function for Football related questions
 function FootballSolutions(){
  var fb_one,fb_two,fb_three,fb_four,fb_five;
  var fb_six,fb_seven,fb_eight,fb_nine,fb_ten;
  subject = "Football";
  fb_one = $("input[name='1']:checked").val();
  fb_two = $("input[name='2']:checked").val();
  fb_three = $("input[name='3']:checked").val();
  fb_four = $("input[name='4']:checked").val();
  fb_five = $("input[name='5']:checked").val();
  fb_six = $("input[name='6']:checked").val();
  fb_seven = $("input[name='7']:checked").val();
  fb_eight = $("input[name='8']:checked").val();
  fb_nine = $("input[name='9']:checked").val();
  fb_ten = $("input[name='10']:checked").val();
  var FootballDict = {
   "1":"Germany","2":"Carlos",
   "3":"Milan","4":"Virgil",
   "5":"Rodger","6":"Senegal",
   "7":"Bfaso","8":"Roma",
   "9":"united","10":"Smicer"
 };
 if(!fb_one || !fb_two || !fb_three || !fb_four || !fb_five ||
   !fb_six || !fb_seven || !fb_eight || !fb_nine || !fb_ten  ){
   alert('please answer all questions');
}
else{
 checkSubmittedAnswers(FootballDict);
 recordStudentResults(name,subject,percent,status);
}
}


//function for Computer related questions
function ComputerSolutions(){
	var one,two,three,four,five;
	var six,seven,eight,nine,ten;
  subject = "Computer";
  one = $("input[name='1']:checked").val();
  two = $("input[name='2']:checked").val();
  three = $("input[name='3']:checked").val();
  four = $("input[name='4']:checked").val();
  five = $("input[name='5']:checked").val();
  six = $("input[name='6']:checked").val();
  seven = $("input[name='7']:checked").val();
  eight = $("input[name='8']:checked").val();
  nine = $("input[name='9']:checked").val();
  ten = $("input[name='10']:checked").val();
  var ComputerDict = {
    "1":"Program","2":"Control",
    "3":"cls","4":"6",
    "5":"php","6":"Tovalds",
    "7":"IntelliJ","8":"PS2",
    "9":"Enterprise","10":"Pycharm"
  };
  if(!one || !two || !three || !four || !five ||
    !six || !seven || !eight || !nine || !ten  ){
    alert('please answer all questions');
}
else{
 checkSubmittedAnswers(ComputerDict);
 recordStudentResults(name,subject,percent,status);
}
    } // end of function ComputerSolutions()

 //function for Computer related questions
 function EnglishSolutions(){
   var eng_one,eng_two,eng_three,eng_four,eng_five;
   var eng_six,eng_seven,eng_eight,eng_nine,eng_ten;
   subject = "English";
   eng_one = $("input[name='1']:checked").val();
   eng_two = $("input[name='2']:checked").val();
   eng_three = $("input[name='3']:checked").val();
   eng_four = $("input[name='4']:checked").val();
   eng_five = $("input[name='5']:checked").val();
   eng_six = $("input[name='6']:checked").val();
   eng_seven = $("input[name='7']:checked").val();
   eng_eight = $("input[name='8']:checked").val();
   eng_nine = $("input[name='9']:checked").val();
   eng_ten = $("input[name='10']:checked").val();
   var EnglishDict = {
    "1":"is","2":"who",
    "3":"was","4":"will-be",
    "5":"there-are","6":"are-there",
    "7":"does","8":"hasnt",
    "9":"didgo","10":"speaks"
  };
  if(!eng_one || !eng_two || !eng_three || !eng_four || !eng_five ||
    !eng_six || !eng_seven || !eng_eight || !eng_nine || !eng_ten  ){
    alert('please answer all questions');
}
else{
  checkSubmittedAnswers(EnglishDict);
  recordStudentResults(name,subject,percent,status);

}
    } // end of function EnglishSolutions()



 //function for mathematics questions
 function  MathSolutions(){
   var mtc_one,mtc_two,mtc_three,mtc_four,mtc_five;
   var mtc_six,mtc_seven,mtc_eight,mtc_nine,mtc_ten;
   subject = "Mathematics";
   mtc_one = $("input[name='1']:checked").val();
   mtc_two = $("input[name='2']:checked").val();
   mtc_three = $("input[name='3']:checked").val();
   mtc_four = $("input[name='4']:checked").val();
   mtc_five = $("input[name='5']:checked").val();
   mtc_six = $("input[name='6']:checked").val();
   mtc_seven = $("input[name='7']:checked").val();
   mtc_eight = $("input[name='8']:checked").val();
   mtc_nine = $("input[name='9']:checked").val();
   mtc_ten = $("input[name='10']:checked").val();
 var MathDict = {
  "1":"2.6","2":"113.10",
  "3":"3","4":"2",
  "5":"2010","6":"1229.87",
  "7":"516","8":"31",
  "9":"192","10":"27.5"
};
  if(!mtc_one || !mtc_two || !mtc_three || !mtc_four || !mtc_five ||
    !mtc_six || !mtc_seven || !mtc_eight || !mtc_nine || !mtc_ten  ){
    alert('please answer all questions');
}
else{
  checkSubmittedAnswers(MathDict);
  recordStudentResults(name,subject,percent,status);

}
    } // end of function MathDictSolutions()

//get the length of the submitted dictionary of solutions
var getDictSize = function(obj){
  var length=0,key;
  for(key in obj){
    if(obj.hasOwnProperty(key)) length++;
  }
  return length;
}

    function checkSubmittedAnswers(Dict){
     var y,submitted_value;
     for(y=1;y<=getDictSize(Dict);y++){
      submitted_value = $("input[name="+y+"]:checked").val(); 
      checked_radio = $("input[name="+y+"]:checked");

      var radioValue_array= $('.form-group').find('label').find("input[type='radio'][name='"+y+"']").map(function(){
        return this.value;
      }).get();

      if(submitted_value==Dict[y]){
        bitcoins += 5;
     }
     else if(submitted_value != Dict[y]){
      WrongAnswer(checked_radio);
     // if($.inArray(Dict[y],radioValue_array)){
       rightRadiobtn = $('.form-group').find('label').find("input[type='radio'][name='"+y+"'][value='"+Dict[y]+"']")
      // rightRadiobtn = $("input[name="+y+"][value="+Dict[y]+"]");
       rightRadiobtn.prop("checked",true);
       RightAnswer(rightRadiobtn);

    // }

   }
 }
  doCommentonSolution();

}

function setExamTimeout(){
  alert("hello");
}




//Method that feeds comment on the score obtained by the student
function doCommentonSolution(){
 if(bitcoins==50){
  percent = 100;
  comment = "Excellent";
  status = "A+";
}
else{
  percent = ((bitcoins)/50)*100;
  switch(true){
   case (percent > 89 && percent < 100):
   status = "A+";
   comment = "Excellent";
   break;
   case (percent > 79 && percent<=89):
   status = "A-";
   comment = "Very Good";
   break;
   case (percent > 74 && percent <=79):
   status = "B+";
   comment = "Good work";
   break;
   case (percent > 64 && percent<=74):
   status = "C+";
   comment = "Fairly done";
   break;
   case (percent > 60 && percent<=64):
   status = "C-";
   comment = "Fairly done";
   break;
   case (percent > 60 && percent<=64):
   status = "C-";
   comment = "Fairly done";
   break;
   case (percent > 49 && percent<=60):
   status = "C+";
   comment = "Average";
   break;
   case (percent < 49):
   status = "pass";
   comment = "More efforts";
   break;

      }// end of switch case statement

    }

    $('#scores').html(""+percent+"%");
    $('#scores').css('color','red');
    $('.circle').show();
    $('.comment').show();
    $('.comment').text(comment);
    $(window).scrollTop(0);
  }

/*  method recordStudentResults() :: triggers method that keeps students'
records(name and results) in the database  */

function recordStudentResults(name,subject,results,status){
  var regNumber;
  var student_details = [];
  regNumber = $('.registration').text();
  student_details.push(name);
  student_details.push(subject);
  student_details.push(results);
  student_details.push(status);
  student_details.push(regNumber);

  $.ajax({
   url:"php/recordResults.php",
   method:'POST',
   data:{
    RecordData:1,
    student_data:student_details
  },
  success:function(data){
    console.log("Connection established: "+data);
    console.log(student_details);
  },
  error:function(){
    console.log("Data can't be kept");
  }
});
}


$('#FootballSubmitBtn').click(function(){
  var text_on_comment = $('.comment').text();
  if(!text_on_comment){
    FootballSolutions();
  }
  else{
    EchothisOnReSubmit();
  }
});
$('#ComputerSubmitBtn').click(function(){
  var text_on_comment = $('.comment').text();
  if(!text_on_comment){
    ComputerSolutions();
  }
  else{
    EchothisOnReSubmit();
  }

});
$('#MathSubmitBtn').click(function(){
  var text_on_comment = $('.comment').text();
  if(!text_on_comment){
    try{
       MathSolutions();
    }catch(err){
       alert(err);
    }
   
 }
 else{
  EchothisOnReSubmit();
}
});
$('#EnglishSubmitBtn').click(function(){
  var text_on_comment = $('.comment').text();
  if(!text_on_comment){
    EnglishSolutions();
  }
  else{
    EchothisOnReSubmit();
  }

});


// method for displaying message on re-submitting quiz form
function EchothisOnReSubmit(){
 BootstrapDialog.show({
  size:BootstrapDialog.SIZE_SMALL,
  title:"<b class='err-title'>CST Examination says</b>",
  message: "Can't re-submit quiz,check your score up",
  buttons:[{
    id:'btn-ok',
    label:'ok',
    cssClass:'btn-success',
    autospin:false,
    action:function(id){
      id.close();
    }
  }]
});
}

//Open change password dialog when settings click is liked
$('.settings').click(function(){
  $('#dialog').dialog("open");
  var close_btn = $(".ui-dialog-titlebar-close");
  close_btn.html("<span class='fa fa-times'></span>");

});

$('#ChangePassword').click(function(){
 var password1,password2;
 password1 = $('#password1').val();
 password2 = $('#password2').val();
 if(!password1 || !password2){
   alert("Please fill in both passwords");
 }
 if(password1 && password2){
  switch(true){
    case (password1!=password2):
    alert("Your passwords don't match");
    break;
    case (password1==password2):
    ChangePassword(password1,password2);
    break;
  }
}


});

//method ChangePassword that triggers a php method that changes password
function ChangePassword(pass1,pass2){
  var userDetails = [];
  var changer = $('.student').text();
  userDetails.push(pass1);
  userDetails.push(pass2);
  userDetails.push(changer);
  $.ajax({
   url:'php/recordResults.php',
   method:'POST',
   data:{
    changepassword:1,
    dataArray:userDetails,
  },
  success:function(data){

    BootstrapDialog.show({
      size:BootstrapDialog.SIZE_SMALL,
      title:"<b class='err-title'>CST Examination message</b>",
      message: data,
      buttons:[{
        id:'btn-ok',
        label:'ok',
        cssClass:'btn-success',
        autospin:false,
        action:function(id){
          id.close();
        }
      }]
    });
    $("#dialog").dialog("close");
    console.log(data);
  },
  error:function(data){
    alert(data);

  },
});
} // end of method ChangePassword()


function WrongAnswer(selected){
  $(selected).css({
   'background':'#fff',
   'border': '2px solid #ff2400',
 });
}

function RightAnswer(solution){
  $(solution).css({
   'background':'#fff',
   'border': '2px solid green',
 });
}

/*function shouldIkillSession(time){
  $.ajax({
     url:'php/recordResults.php',
     method:'POST',
     data:{
      setTimeQuery:1,
      timein:time,
     },
     success:function(data){
      alert(data);
     },
     error:function(data){
      alert(data);
     },
  });
}*/


});
