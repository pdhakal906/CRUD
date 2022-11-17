<?php
	session_start(); 
	include "myautoloader.inc.php";
	$userObj = new UserContr();

 ?>

 <?php 

	
 $house_number = $_SESSION['housenumber'];
 $head_name = $_SESSION['head_name'];

 if (isset($_POST['save'])) {

 		  $geograpic_status = $_POST['geograpic_status'];
  		$health_facility = $_POST['health_facility'];
  		$land_value = $_POST['land_value'];
  		$road_facility = $_POST['road_facility'];
  		$remarks = $_POST['remarks'];

      $userObj->creatOthStat($house_number, $head_name, $geograpic_status, $health_facility, $land_value, $road_facility, $remarks);

  		$userObj->redirect('newfam.inc.php?completed');
  			
 }
 
 ?>

 <link href="bootstrap.min.css" rel="stylesheet">
   
<link rel="stylesheet" type="text/css" href="style.css">

<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          
          <p class="navbar-brand">पारिवारीक विवरण</p>

        </div>
        
          <ul class="nav navbar-nav navbar-right">
            
          </ul>
        
      </div>
    </nav>


<header id="header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="text-center">विविध विवरण  ‍</h1>
          </div>

     
        </div>
      </div>
    </header>


    <?php 


      if (isset($_GET['success'])) {

        echo '<div class="alert alert-info" id="alert" role="alert"> <strong> घरायसी सुविधाको विवरण</strong> सुरक्षित भयो। </div>';
        
      }

    ?>  




<!DOCTYPE html>
<html>
<head>
	<title>विविध</title>
</head>
<body>

<div class="col-lg-8 col-lg-offset-2">
  
	<form class="well" method="POST">
		
		<label>घर नम्बरः </label><input disabled="true" value="<?php echo $house_number; ?>" type="text" class="form-control" name="house_number" required><br>
		<label>घरमूलीको नामः </label><input disabled="true" value="<?php echo $head_name; ?>" type="text" class="form-control" name="head_name" required><br>
		<label>भौगोलिक क्षेत्रगत अवस्थाः </label><input type="text" class="form-control" name="geograpic_status" required><br>
		<label>स्वास्थ्य सेवाको उपलब्धताः </label><input type="text" value="अमरदह स्वास्थ्यचौकी" class="form-control" name="health_facility" required><br>
		<label>जग्गाको मूल्यः </label><input type="text" class="form-control" name="land_value" required><br>
		<label>सडक सुविधा </label><input type="text" class="form-control" name="road_facility" required><br>
		<br>
		<label>कफियत </label><textarea class="form-control" name="remarks"></textarea><br>
			
		<button class="btn btn-primary btn-block" name="save">सबमिट</button><br>
	</form>

  
</div>
</body>

<script type="text/javascript" src="main.js"></script>
</html>