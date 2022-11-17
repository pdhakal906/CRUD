<?php 
	include "myautoloader.inc.php";
	$userObj = new UsersView();
	$userObj2 = new UserContr();
	$editid = $_GET['editid'];
 ?>

 <?php 
 	if (isset($_POST['save'])) {

 		$mem_name = $_POST['mem_name'];
		$mem_name_eng = $_POST['mem_name_eng'];
		$mem_gender = $_POST['mem_gender'];
		$mem_age = $_POST['mem_age'];
		$relation = $_POST['relation'];
		$mem_citizenship = $_POST['mem_citizenship'];
		$mem_occupation = $_POST['mem_occupation'];
		$mem_education = $_POST['mem_education'];

		$userObj2->updateFamMem($mem_name, $mem_name_eng, $mem_age, $mem_gender, $relation, $mem_citizenship, $mem_occupation, $mem_education);
		echo '<div class="alert alert-info" id="alert" role="alert"> <strong> सदस्यको विवरण</strong> परिवर्तन भयो। </div>';
		
 	}

  ?>



<!DOCTYPE html>
<html>
<head>
	<title>सदस्यको विवरण परिवर्तन</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<header id="header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="text-center">सदस्यको विवरण परिवर्तन ‍</h1>
          </div>

     	</div>
      </div>
    </header>

    <div class="col-lg-8 col-lg-offset-2">	

	<form class="well" method="POST">
		
		
		<label>सदस्यको नामः </label><input type="text" class="form-control" value="<?php echo $userObj->showEditFamMemName($editid) ?>" name="mem_name" required>
    <label>Name in English </label><input type="text" class="form-control" value="<?php echo $userObj->showEditFamMemNameEng($editid) ?>" name="mem_name_eng" required>
		<label>लिङ्गः </label><select class="form-control" name="mem_gender" required>
								<option value="<?php $userObj->showEditFamMemGen($editid);?>"><?php echo $userObj->showEditFamMemGen($editid);?></option>
								<option value="पुरुष">पुरुष</option>
								<option value="पुरुष">महिला</option>
							 </select> 
		<label>उमेरः </label><input type="text" class="form-control" value="<?php echo $userObj->showEditFamMemAge($editid) ?>" name="mem_age" required>
		<label>घरमूलीसँगको नाताः </label><input type="text" class="form-control" value="<?php echo $userObj->showEditFamMemRela($editid) ?>" name="relation" required>
		<label>नागरिकताः </label><input type="text" class="form-control" value="<?php echo $userObj->showEditFamMemCit($editid) ?>" name="mem_citizenship" required>
		<label>पेशाः </label><input type="text" class="form-control" value="<?php echo $userObj->showEditFamMemOcc($editid) ?>" name="mem_occupation" required>
		<label>शैक्षिक योग्यताः </label><input type="text" class="form-control" value="<?php echo $userObj->showEditFamMemEdu($editid) ?>" name="mem_education" required><br>	
		<button class="btn btn-primary btn-block" name="save">सबमिट</button>
	</form>

</div>

</body>
<script type="text/javascript" src="main.js"></script>
</html>