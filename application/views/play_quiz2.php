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
 
</head>
<body>



	<div class="form">
      
	  <img src="<?php echo base_url() ?>assets/img/Info-Quize.png" width="100" height="50" align="middle" class="center">
	  
	 <div id="container"> 
	 <form method="post" action="<?php echo base_url();?>index.php/Questions/quizdisplay3">
       
    
    

    
    <?php $ans_array = array($questions[1]->choice1, $questions[1]->choice2, $questions[1]->choice3);
	shuffle($ans_array); ?>
    
  
   

	<div class="form" style="color:#FFFFFF">
	
		
		<table >
			
				<tr>
					
					<td ><h1 style="color:#13232F">.</h1></td>
					<td><h1 style="color:#FFFFFF"><?=$questions[1]->quizID?>.<?=$questions[1]->question?></h1> </td>
					
				</tr>
				<tr>
					
					<td><input  type="radio" name="quizid<?=$questions[1]->quizID?>" value="<?=$ans_array[0]?>" ></td> 
					
					<td> <h4 style="color:#fff;"> <?=$ans_array[0]?></h4> </td> <br>
				</tr>
				<tr>
					
					
					<td><input  type="radio" name="quizid<?=$questions[1]->quizID?>" value="<?=$ans_array[1]?>"></td> 
					<td> <h4 style="color:#fff;"><?=$ans_array[1]?></h4> </td><br>
					
				</tr>
				<tr>
					
					
					<td><input  type="radio" name="quizid<?=$questions[1]->quizID?>" value="<?=$ans_array[2]?>"></td> 
					<td> <h4 style="color:#fff;"><?=$ans_array[2]?></h4> </td><br>
					
				</tr>
		</table>
	
        

    
    
    <br><br>
    <input class="button button-block" type="submit" value="Submit!">
	</div>
    
    </form>
	</form>
	
	 <img src="<?php echo base_url() ?>assets/img/paricel.png"  align="" class="left-img">
     <img src="<?php echo base_url() ?>assets/img/xeldrin.png"   style="left:500px" class = "right-img">
	
	</div>
	  
	  
	 </div>



</body>
</html>