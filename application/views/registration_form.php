<!DOCTYPE html>
<html lang="en">
<head>
	<head>
    <meta charset="UTF-8">
    <title>Med Quiz Registration</title>
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
	<h1 style="color:#fff">Your Registration is Here</h1>

 
	 
	
			
	
 
 




<br>
<br>


<form action= "<?php echo site_url('welcome/user_form'); ?>" method ="post">

			
<table align = "center">
	<tr>
		<td style="color:#fff">Your Name </td>
		<td style="color:#fff"><?php echo form_input(array('id'=>'user_name','name' => 'user_name','placeholder' => 'Name','size'=>80));?> </td>
	</tr>
	
	<tr>
		<td style="color:#fff">Email </td>
		<td style="color:#fff"><?php echo form_input(array('id'=>'user_email','name' => 'user_email','placeholder' => 'Email','size'=>25));?> </td>
	</tr>
	
	<tr>
		<td style="color:#fff">Address </td>
		<td style="color:#fff"><?php echo form_input(array('id'=>'Address','name' => 'Address','placeholder' => 'Address','size'=>25));?> </td>
	</tr>
	
	
	
	<tr>
		<td style="color:#fff">Designation </td>
		
		<td><?php echo form_input(array('id'=>'designation','name' => 'designation','placeholder' => 'designation','size'=>25));?>
			
		<form>
		<select name="designation" id="designation" >
				
				
				
					<option value="PROFESSOR">PROFESSOR</option>
					<option value="ASSOCIATE PROFESSOR">ASSOCIATE PROFESSOR</option>
					<option value="ASSISTANT PROFESSOR">ASSISTANT PROFESSOR</option>
					<option value="RESIDENTIAL PHYSICIAN">RESIDENTIAL PHYSICIAN</option>
					<option value="RESIDENT SURGEON">RESIDENT SURGEON</option>
					<option value="REGISTAR">REGISTAR</option>
					<option value="ASSISTANT REGISTAR">ASSISTANT REGISTAR</option>
					<option value="MEDICAL OFFICER">MEDICAL OFFICER</option>
					<option value="GENERAL PRACTITIONER">GENERAL PRACTITIONER</option>
				<br><br>
				
				</select>
			</form>
		
		
		</td>
	</tr>
	
	<tr>
		<td></td>
		<td><button type="submit" id="user-submit"class="btn btn-success" onclick="window.location='<?php echo site_url("Questions/volumeDisplay");?>'">ADD</button></td>
	</tr>
	
</table>

</form>



</div>

		
</div>
</body>
</html>