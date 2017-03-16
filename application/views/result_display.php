<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Play Geography Quiz</title>
	
	
	<meta charset="UTF-8">
    <title>Result Display</title>
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
			
			<div class="form"> 
			 
				<h1 style="color:#FFFFFF">Your Result</h1>


					<?php $score =0; ?>

					<?php $array1= array(); ?>
					<?php $array2= array(); ?>    
					<?php $array3= array(); ?>
					<?php $array4= array(); ?>
					<?php $array5= array(); ?>
					<?php $array6= array(); ?>
					<?php $array7= array(); ?>
					<?php $array8= array(); ?>

					<?php   foreach($checks as $checkans) { ?>
					<?php array_push($array1, $checkans); } ?>


					<?php   foreach($results as $res) { ?>
					<?php array_push($array2, $res->answer); 
					array_push($array3, $res->quizID); 
					array_push($array4, $res->question); 
					array_push($array5, $res->choice1); 
					array_push($array6, $res->choice2); 
					array_push($array7, $res->choice3); 
					array_push($array8, $res->answer); 
					}
					//var_dump($array2);
					?>


					<?php 
					for ($x=0; $x <3; $x++) { ?>
			 
			 
			 <form method="post" action="<?php echo site_url("Questions/quizdisplay");?>">
			 
					<p style="color:#FFFFFF"><?=$array3[$x]?>.<?=$array4[$x]?></p>


					<?php if ($array2[$x]!=$array1[$x]) { ?>

					<p><span style="background-color: #FF9C9E"><?=$array1[$x]?></span></p>
					<p><span style="background-color: #ADFFB4"><?=$array2[$x]?></span></p>

					<?php } if( $array1[$x] == $array2[$x]) { ?>

					<p><span style="background-color: #ADFFB4"><?=$array1[$x]?></span></p>

					<?php $score = $score + 1; ?>

					<?php } } ?>

					<br><br>



					<h2 style="color:#FFFFFF">Your Score: </h2>
					<h1 style="color:#FFFFFF"><?=$score?>/3</h1>

					<input style="color:#FFFFFF" type="submit" value="Thank you for your participation, Play Again!">
				
			  </form>
			
			</div>
		 
		 </div>
	  
	 </div>












</body>
</html>