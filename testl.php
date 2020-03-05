<?php
echo time();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap.inc.min.js"></script>
	<script>
		$(document).ready(function(){
			var i;
			var radioValue_array= $('body').find('label').find("input[name='2']").map(function(){
				return this.value;
			}).get();

		    alert(radioValue_array);
		    alert($.inArray("Babe",radioValue_array));	
			
        });
 	</script>
</head>
<body>
 <div class="form-group">
   <span class="lineit">2. The following players played for Liverpool Fc in England except</span>
   <div class="radio answers">
    <label><input type="radio" name="2" value="Gerard">A. Steven Gerard</label>
    <label><input type="radio" name="2" value="Babel">B. Ryan Babel</label>
    <label><input type="radio" name="2" value="Carlos">C. Roberto Carlos</label>
    <label><input type="radio" name="2" value="Alberto">D. Luis Alberto</label>
  </div> 
</div>

</body>
</html>