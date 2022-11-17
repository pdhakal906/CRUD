<?php 
	include "myautoloader.inc.php";
	$userObj = new UsersView();
	$userObj2 = new UserContr();
	$editid = $_GET['editid'];


 ?>

<?php 

	if (isset($_POST['save'])) {
		
		$geograpic_status = $_POST['geograpic_status'];
  		$health_facility = $_POST['health_facility'];
  		$land_value = $_POST['land_value'];
  		$road_facility = $_POST['road_facility'];
  		


      	$userObj2->updateOthStat($geograpic_status, $health_facility, $land_value, $road_facility);
      	echo '<div class="alert alert-info" id="alert" role="alert"> <strong> विविध विवरण</strong> परिवर्तन भयो। </div>';
	}




 ?>



<!DOCTYPE html>
<html>
<head>
	<title>विविध विवरण परिवर्तन</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header id="header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="text-center">विविध विवरण परिवर्तन ‍</h1>
          </div>

     
        </div>
      </div>
    </header>

    <div class="col-lg-8 col-lg-offset-2">
  
		<form class="well" method="POST">
			
			
			<label>भौगोलिक क्षेत्रगत अवस्थाः </label><input type="text" class="form-control" value="<?php echo $userObj->showEditOthGs($editid); ?>" name="geograpic_status" required><br>
			<label>स्वास्थ्य सेवाको उपलब्धताः </label><input type="text" value="<?php echo $userObj->showEditOthHf($editid); ?>" class="form-control" name="health_facility" required><br>
			<label>जग्गाको मूल्यः </label><input type="text" class="form-control" value="<?php echo $userObj->showEditOthLv($editid); ?>" name="land_value" required><br>
			<label>सडक सुविधा </label><input type="text" class="form-control" value="<?php echo $userObj->showEditOthRf($editid); ?>" name="road_facility" required><br>
			
			
				
			<button class="btn btn-primary btn-block" name="save">सबमिट</button><br>
		</form>
	</div>

</body>
<script type="text/javascript" src="main.js"></script>
</html>