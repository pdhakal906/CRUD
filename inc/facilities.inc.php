<?php
	session_start(); 
	include "myautoloader.inc.php";
	$userObj = new UserContr();

 ?>

 <?php 

	
 $house_number = $_SESSION['housenumber'];
 $head_name = $_SESSION['head_name'];

 if (isset($_POST['save'])) {
 	
 		  $water_facility = $_POST['water_facility'];
  		$toilet_facility = $_POST['toilet_facility'];
  		$fuel_facility = $_POST['fuel_facility'];
  		$light_facility = $_POST['light_facility'];

      $userObj->createFacStat($house_number, $head_name, $water_facility, $toilet_facility, $fuel_facility, $light_facility);

  		$userObj->redirect('others.inc.php?success');
 }

 
 ?>



<link href="bootstrap.min.css" rel="stylesheet">
   
<link rel="stylesheet" type="text/css" href="style.css">

<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          
          <p class="navbar-brand">पारिवारीक विवरण</p>
        </div>
        
      </div>
    </nav>


<header id="header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="text-center">घरायसी सुविधा  ‍</h1>
          </div>

     
        </div>
      </div>
    </header>

    <?php 


      if (isset($_GET['success'])) {

        echo '<div class="alert alert-info" id="alert" role="alert"> <strong> घरायसी सम्पतिको विवरण</strong> सुरक्षित भयो। </div>';
        
      }







     ?>



<!DOCTYPE html>
<html>
<head>
	<title>घरायसी सुविधा</title>
</head>
<body>

<div class="col-lg-8 col-lg-offset-2">

	<form class="well" method="POST">
		
		<label>घर नम्बरः </label><input disabled="true" value="<?php echo $house_number; ?>" type="text" class="form-control" name="house_number" required><br>
		<label>घरमूलीको नामः </label><input disabled="true" value="<?php echo $head_name; ?>" type="text" class="form-control" name="head_name" required><br>
		<label>खानेपानीको उपलब्धता </label><input type="text" value="ट्युबेल" class="form-control" name="water_facility" required><br>
		<label>शौचालयः </label><input type="text" class="form-control" name="toilet_facility" required><br>
		<label>खाना पकाउने इन्धनः </label><input type="text" class="form-control" name="fuel_facility" required><br>
		<label>विजुलि श्रोतः </label><input type="text" class="form-control" name="light_facility" required><br>
		
			
		<button class="btn btn-primary btn-block" name="save">सबमिट</button><br>
	</form>

</div>

</body>

<script type="text/javascript" src="main.js"></script>
</html>