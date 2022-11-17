<?php
	session_start(); 
	include "myautoloader.inc.php";
	$userObj = new UserContr();

 ?>

 <?php 

	
 $house_number = $_SESSION['housenumber'];
 $head_name = $_SESSION['head_name'];

 if (isset($_POST['save'])) {

 	$vehicle_status = $_POST['vehichle_status'];
	$communication_facility = $_POST['communication_facility'];
	$domestic_animals = $_POST['domestic_animals'];
	$domestic_birds = $_POST['domestic_birds'];
	$fridge = $_POST['fridge'];

	$userObj->createPropStat($house_number, $head_name, $vehicle_status, $communication_facility, $fridge, $domestic_animals, $domestic_birds);

	$userObj->redirect('facilities.inc.php?success');
 }

 ?>

 <link href="bootstrap.min.css" rel="stylesheet">
   
<link rel="stylesheet" type="text/css" href="style.css">

<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          
          <p class="navbar-brand" href="../index.php">पारिवारीक विवरण</p>
        </div>
        
          <ul class="nav navbar-nav">
            
           

          </ul>

          <ul class="nav navbar-nav navbar-right">
            

          </ul>
        
      </div>
    </nav>


<header id="header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="text-center">घरायसी सम्पति  ‍</h1>
          </div>

     
        </div>
      </div>
    </header>

    <?php

    if (isset($_GET['success'])) {

    		echo '<div class="alert alert-info" id="alert" role="alert"> <strong> बसोबासको विवरण</strong> सुरक्षित भयो। </div>';
    		
    	}

    ?>
	

 

 
<!DOCTYPE html>
<html>
<head>
	<title>घरायसी सम्पति</title>
</head>
<body>

<div class="col-lg-8 col-lg-offset-2">	

	<form class="well" method="POST">
		
		<label>घर नम्बरः </label><input disabled="true" value="<?php echo $house_number; ?>" type="text" class="form-control" name="house_number" required><br>
		<label>घरमूलीको नामः </label><input disabled="true" value="<?php echo $head_name; ?>" type="text" class="form-control" name="head_name" required><br>
		<label>सवारी साधन </label><input type="text" class="form-control" name="vehichle_status" required><br>
		<label>संचार सुविधा </label><input type="text" value="ईन्टरनेट, केबुल, टेलिभिजन" class="form-control" name="communication_facility" required><br>
		<label>रेफ्रीजेरेटर </label><select class="form-control" name="fridge" required>
			<option value="छ">छ</option>
			<option value="छैन">छैन</option>
		</select><br>
		<label>पशु चौपायाको संख्या </label><input type="text" class="form-control" name="domestic_animals" required><br>
		<label>पशुपंशीको संख्या </label><input type="text" class="form-control" name="domestic_birds" required><br>
			
		<button class="btn btn-primary btn-block" name="save">सबमिट</button><br>
	</form>

</div>

</body>

<script type="text/javascript" src="main.js"></script>
</html>