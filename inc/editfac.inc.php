<?php 
	include "myautoloader.inc.php";
	$userObj = new UsersView();
	$userObj2 = new UserContr();
	$editid = $_GET['editid'];
 ?>


<?php 

	if (isset($_POST['save'])) {

		$water_facility = $_POST['water_facility'];
  		$toilet_facility = $_POST['toilet_facility'];
  		$fuel_facility = $_POST['fuel_facility'];
  		$light_facility = $_POST['light_facility'];

      $userObj2->updateFacStat($water_facility, $toilet_facility, $fuel_facility, $light_facility);
      echo '<div class="alert alert-info" id="alert" role="alert"> <strong> आर्थिक अवस्थाको विवरण</strong> परिवर्तन भयो। </div>';
	}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>घरायसी सुविधाको विवरण परिवर्तन</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<header id="header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="text-center">घरायसी सुविधाको विवरण परिवर्तन  ‍</h1>
          </div>

     
        </div>
      </div>
    </header>

    <div class="col-lg-8 col-lg-offset-2">

	<form class="well" method="POST">
		
		
		<label>खानेपानीको उपलब्धता </label><input type="text" value="<?php echo $userObj->showEditFacWf($editid); ?>" class="form-control" name="water_facility" required><br>
		<label>शौचालयः </label><input type="text" class="form-control" value="<?php echo $userObj->showEditFacTf($editid); ?>" name="toilet_facility" required><br>
		<label>खाना पकाउने इन्धनः </label><input type="text" class="form-control" value="<?php echo $userObj->showEditFacFf($editid); ?>" name="fuel_facility" required><br>
		<label>विजुलि श्रोतः </label><input type="text" class="form-control" value="<?php echo $userObj->showEditFacLf($editid); ?>" name="light_facility" required><br>
		
			
		<button class="btn btn-primary btn-block" name="save">सबमिट</button><br>
	</form>

</div>


</body>
<script type="text/javascript" src="main.js"></script>
</html>