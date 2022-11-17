<?php 
	include "myautoloader.inc.php";
	$userObj = new UsersView();
	$userObj2 = new UserContr();

	$editid = $_GET['editid'];

 ?>

 <?php 
 	if (isset($_POST['save'])) {
 		
 		$property_status = $_POST['property_status'];
		$land_area = $_POST['land_area'];
		$house_type = $_POST['house_type'];
		$room_numbers = $_POST['room_numbers'];

		$userObj2->updateLivStat($property_status, $land_area, $house_type, $room_numbers);

		echo '<div class="alert alert-info" id="alert" role="alert"> <strong> बसोबासको विवरण</strong> परिवर्तन भयो। </div>';
 	}

  ?>


<!DOCTYPE html>
<html>
<head>
	<title>बसोबासको विवरण परिवर्तन</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<header id="header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="text-center">बसोबासको विवरण परिवर्तन ‍</h1>
          </div>

     
        </div>
      </div>
    </header>

	    <div class="col-lg-8 col-lg-offset-2">

			<form class="well" method="POST">
				
				
				<label>घर जग्गाको स्वामित्व</label><select class="form-control" name="property_status" required>
					<option value="<?php echo $userObj->showEditLivPs($editid); ?>"><?php echo  $userObj->showEditLivPs($editid); ?></option>
					<option value="लालपुर्जा भएको">लालपुर्जा भएको</option>
					<option value="सुकुम्बासी">सुकुम्बासी</option>
					<option value="बहालमा बसेको">बहालमा बसेको</option>			
				</select><br>
				<label>क्षेत्रफल </label><input type="text" class="form-control" value="<?php echo $userObj->showEditLivLa($editid); ?>" name="land_area" required><br>
				<label>घरको प्रकार </label><select class="form-control" name="house_type" required>
					<option value="<?php echo $userObj->showEditLivHt($editid); ?>"><?php echo $userObj->showEditLivHt($editid); ?></option>
					<option value="पक्की">पक्की</option>
					<option value="अर्धपक्की">अर्धपक्की</option>
					<option value="काठ">काठ</option>
					<option value="कच्ची">कच्ची</option>
				</select><br>
				<label>कोठा संख्या </label><input type="text" class="form-control" value="<?php echo $userObj->showEditLivRn($editid); ?>" name="room_numbers" required><br>
					
				<button class="btn btn-primary btn-block" name="save">सबमिट</button><br>
			</form>

		</div>

</body>
<script type="text/javascript" src="main.js"></script>
</html>