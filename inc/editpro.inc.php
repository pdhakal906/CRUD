<?php 
	include "myautoloader.inc.php";
	$userObj = new UsersView();
	$userObj2 = new UserContr();
	$editid = $_GET['editid'];
 ?>

 <?php 

 	if (isset($_POST['save'])) {
 		$vehicle_status = $_POST['vehicle_status'];
		$communication_facility = $_POST['communication_facility'];
		$domestic_animals = $_POST['domestic_animals'];
		$domestic_birds = $_POST['domestic_birds'];
		$fridge = $_POST['fridge'];

		

	$userObj2->updatePropStat($vehicle_status, $communication_facility, $fridge, $domestic_animals, $domestic_birds);
	echo '<div class="alert alert-info" id="alert" role="alert"> <strong> घरायसी सम्पतिको विवरण</strong> परिवर्तन भयो। </div>';
 	}





  ?>

<!DOCTYPE html>
<html>
<head>
	<title>घरायसी सम्पतिको विवरण परिवर्तन</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header id="header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="text-center">घरायसी सम्पतिको विवरण परिवर्तन  ‍</h1>
          </div>

     
        </div>
      </div>
    </header>

    <div class="col-lg-8 col-lg-offset-2">	

	<form class="well" method="POST">
		
		
		<label>सवारी साधन </label><input type="text" class="form-control" value="<?php echo $userObj->showEditProVeh($editid); ?>" name="vehicle_status" required><br>
		<label>संचार सुविधा </label><input type="text" value="<?php echo $userObj->showEditProCom($editid); ?>" class="form-control" name="communication_facility" required><br>
		<label>रेफ्रीजेरेटर </label><select class="form-control" name="fridge" required>
			<option value="<?php echo $userObj->showEditProFri($editid); ?>"><?php echo $userObj->showEditProFri($editid); ?></option>
			<option value="छ">छ</option>
			<option value="छैन">छैन</option>
		</select><br>
		<label>पशु चौपायाको संख्या </label><input type="text" class="form-control" value="<?php echo $userObj->showEditProDa($editid); ?>" name="domestic_animals" required><br>
		<label>पशुपंशीको संख्या </label><input type="text" class="form-control" value="<?php echo $userObj->showEditProDb($editid); ?>" name="domestic_birds" required><br>
			
		<button class="btn btn-primary btn-block" name="save">सबमिट</button><br>
	</form>

</div>


</body>
<script type="text/javascript" src="main.js"></script>
</html>