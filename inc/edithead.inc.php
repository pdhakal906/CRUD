<?php 

	include "myautoloader.inc.php"; 
	$userObj = new UsersView();
	$userObj2 = new UserContr();
	$editid = $_GET['editid'];
	
 ?>

 <?php 

 	if (isset($_POST['save'])) {


 		
		$head_name = $_POST['head_name'];
	    $head_name_eng = $_POST['head_name_eng'];
		$tole = $_POST['tole'];
		$religion = $_POST['religion'];
		$address = $_POST['address'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$head_citizenship = $_POST['head_citizenship'];
		$head_education = $_POST['head_education'];
		$mobile_number = $_POST['mobile_number'];
		$head_occupation = $_POST['head_occupation'];

		$userObj2->updateFamHead($address, $tole, $religion, $head_name, $head_name_eng, $age, $gender, $head_citizenship, $head_occupation, $head_education, $mobile_number);
		
		echo '<div class="alert alert-info" id="alert" role="alert"> <strong> घरमूलीको विवरण</strong> परिवर्तन भयो। </div>';


 	}


  ?>

<!DOCTYPE html>
<html>
<head>
	<title>घरमूलीको विवरण परिवर्तन</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	 <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="text-center">घरमूलीको विवरण परिवर्तन ‍</h1>
          </div>

     
        </div>
      </div>
    </header>



 <div class="col-lg-8 col-lg-offset-2">

	<form  class="well" method="POST">
		
		
		<label>ठ‍ेगानाः </label><input type="text" class="form-control" value="<?php $userObj->showEditFamHeadAddr($editid);?>" name="address" required><br>
		<label>टोलः </label><input type="text" class="form-control" value="<?php $userObj->showEditFamHeadTole($editid);?>" name="tole" required><br>
		<label>धर्म </label><input type="text" class="form-control" value="<?php $userObj->showEditFamHeadRelig($editid);?>" name="religion" required><br>
		<label>मोनंः </label><input type="text" class="form-control" value="<?php $userObj->showEditFamHeadMob($editid);?>" name="mobile_number" required><br>
		<label>घरमूलीको नामः </label><input type="text" class="form-control" value="<?php $userObj->showEditFamHeadName($editid);?>" name="head_name" required><br>
    <label>Name in English </label><input type="text" class="form-control" value="<?php $userObj->showEditFamHeadNameEng($editid);?>" name="head_name_eng" required><br>
		<label>लिङ्गः </label> <select class="form-control" name="gender" required>
								<option value="<?php $userObj->showEditFamHeadGen($editid);?>"><?php echo $userObj->showEditFamHeadGen($editid);?></option>
								<option value="पुरुष">पुरुष</option>
								<option value="पुरुष">महिला</option>
							 </select> 
		<br>
		<label>उमेरः </label><input type="text" class="form-control" value="<?php $userObj->showEditFamHeadAge($editid);?>" name="age" required><br>
		<label>नागरिकता नंः </label><input type="text" class="form-control" value="<?php $userObj->showEditFamHeadCit($editid);?>" name="head_citizenship" required><br>
		<label>पेशाः </label><input type="text" class="form-control" value="<?php $userObj->showEditFamHeadOcc($editid);?>" name="head_occupation" required><br>
		<label>शैक्षिक योग्यता </label><input type="text" class="form-control" value="<?php $userObj->showEditFamHeadEdu($editid);?>" name="head_education" required><br>
		
		
		<button class="btn btn-primary btn-block" name="save">सबमिट</button>
		
	</form>
</div>

</body>
<script type="text/javascript" src="main.js"></script>
</html>