<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>    
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css" />   
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/normalize.css"/>
	<!--link rel="stylesheet" href="assets/css/normalize.css"-->   
    <!--link rel="stylesheet" href="assets/css/style.css"-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!--link rel="stylesheet" href="/resources/demos/style.css"-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
	
 
  <script>
  $(document).ready(function(){
    $("#datepicker").datepicker();
	
	$("#DesId").css("align","left");
  });
  
  </script>
 

    
    
  </head>

  <body>
  
	<?php  //echo $main_content; ?>
	
    <div class="form">
      <img src="<?php echo base_url() ?>assets/img/Info-Quize.png" width="100" height="50" align="middle" class="center">
      <!--ul class="tab-group">
        <!--li class="tab active"><a href="#signup">Registration</a></li-->
        <!--li class="tab"><a href="#login">Log In</a></li-->
      <!--/ul-->
      
      <div class="tab-content">
        <div id="signup">   
         <h1 style="color:#FFFFFF;"> Your Registration is here </h1>
		 <br>
          
         <form action= "<?php echo site_url('welcome/user_form'); ?>" method ="post">
          
          <div class="top-row" style="font-style:italic">
            <div class="field-wrap" >
              <h3 style="color:#fff"> Your Name </h3>
              <input id="nam" type="text" required autocomplete="off" style="color: #fff;"/>
			  <?php echo form_input(array('id'=>'user_name','name' => 'user_name','placeholder' => 'Name','size'=>25));?> 
            </div>
        
            
          </div>
		  
		   
		 
		  <div class="field-wrap" style="font-style:italic">
           
			
		
			<form name="myform" action="http://www.mydomain.com/myformhandler.cgi" method="POST">
		 
			<!--div align="left"-->
			
			
			<table class="ques">
			
				<tr>
					<td><h3 style = "color:#fff; right:800px;">Sex: </h3> </td>
				</tr>
				<tr>
					<td ><input class="gender" type="radio" name="group1" value="male" style="color:#fff;"></td>  <td> <h4 style="color:#fff;">Male</h4> </td> <br>
				</tr>
				<tr>
					<td><input class="gender" type="radio" name="group1" value="female" style="color:#fff;"></td>  <td> <h4 style="color:#fff;">Female</h4> </td><br>
				</tr>
			</table>	
			</div>
						
			
			
			
			</form>
			
			</div>
			
		  <div class="dropdown" >
				<div class = "hello">
					<h3 style = "color:#fff; font-style:italic;" >Date of Birth:</h3>
				</div>
			
			<input  type="date" id="datepicker" style="color:#fff"/>
			</div>
			
			
			
			
			
		 <div class = "field-wrap"  >
		 <h3 id="desId" style="color:#fff;text-align:left; left:0px;  font-style:italic;"  >Your Designation: </h3>
			<!--div class="dropdown" >
			
				
				<button class="dropbtn" type="button" data-toggle="dropdown" >Select Here
				<span class="caret"></span></button>
				<ul class="dropdown-menu" >
					<li><a href="#con">PROFESSOR</a></li>
					<li><a href="#">ASSOCIATE PROFESSOR</a></li>
					<li><a href="#">ASSISTANT PROFESSOR</a></li>
					<li><a href="#">RESIDENTIAL PHYSICIAN</a></li>
					<li><a href="#">RESIDENT SURGEON</a></li>
					<li><a href="#">REGISTAR</a></li>
					<li><a href="#">ASSISTANT REGISTAR</a></li>
					<li><a href="#">MEDICAL OFFICER</a></li>
					<li><a href="#">GENERAL PRACTITIONER</a></li>
				</ul>
				</div-->
				
				
				<select name="designation" >
				
				
				
					<option value="dis">PROFESSOR</option>
					<option value="dis">ASSOCIATE PROFESSOR</option>
					<option value="dis">ASSISTANT PROFESSOR</option>
					<option value="dis">RESIDENTIAL PHYSICIAN</option>
					<option value="dis">RESIDENT SURGEON</option>
					<option value="dis">REGISTAR</option>
					<option value="dis">ASSISTANT REGISTAR</option>
					<option value="dis">MEDICAL OFFICER</option>
					<option value="dis">GENERAL PRACTITIONER</option>
				<br><br>
				
				</select>
				
			
				
				
			</div>
			
			<div id="con" class="field-wrap" style="font-style:italic">
				
				<h3 style="color:#fff"> Contact No.</h3>
				
			
            <input type="number"required autocomplete="off" style="color:#fff"/>
			</div>
			
			
			<div class="field-wrap" style="font-style:oblique">
				<h3 style="color:#fff"> Address</h3>
				
				<input type="text"required autocomplete="off" style="color:#fff"/>
			</div>
			
			<?php  //var_dump($districts);?>
			 <div class = "field-wrap" " >
				
				<h3 id="desId" style="color:#fff;text-align:left; left:0px;  "  >District : </h3>
				
				<select name="cars" >
				<?php  foreach($districts as $row) { ?> 
				
				
					<option value="dis"><?php echo ($row->districtName); ?></option>
					
				
				<br><br>
				<?php }  ?>
				</select>
				
			</div>
			
          
          <button type="submit" class="button button-block"onclick="window.location='<?php echo site_url("Questions/volumeDisplay");?>'">Get Started</button>
		  <br>
		  <img src="<?php echo base_url() ?>assets/img/paricel.png"  align="" style="height:80px;" class="left-img">
		  <img src="<?php echo base_url() ?>assets/img/xeldrin.png"  align="right" style="left:1000px; height:80px;" class = "right-img">

          
          </form>

        </div>
        
        <!--div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="/" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
		  
		  
          </form>
		
        </div-->
        
      </div><!-- tab-content -->
      

<table>
<?php 
/*
for($j=0; $j<2; $j++){

	echo '<tr>';
	$k=0;
	for($i=$k;$i<7;$i++){
		//if($i%2==0)
		
		echo '<td>'.$i.'</td>';
		
	    if($i%2==0){
			break;
		}
		//echo('<br>');
		$k = $i;
	}
	echo '</tr>';
}
it is unnecessary code

*/
?>
</table>
 <!-- /form -->
    <!--script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script-->

        <script src="js/index.js"></script>
		<script>
		
		function myFunction() {
		document.getElementById("myDropdown").classList.toggle("show");
		}

// Close the dropdown menu if the user clicks outside of it
		window.onclick = function(event) {
		if (!event.target.matches('.dropbtn')) {

		var dropdowns = document.getElementsByClassName("dropdown-content");
		var i;
		for (i = 0; i < dropdowns.length; i++) {
		var openDropdown = dropdowns[i];
		if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
		
		
	</script>
		 
  </body>
</html>
