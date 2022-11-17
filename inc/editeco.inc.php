<?php
	include "myautoloader.inc.php";
	$userObj = new UsersView();
	$userObj2 = new UserContr();
	$editid = $_GET['editid'];
 ?>

<?php 
	
	if (isset($_POST['save'])) {
	   $employment_status = $_POST['employment_status'];
	   $income_source = $_POST['income_source'];
	   $monthly_income = $_POST['monthly_income'];
	   $dependent_members = $_POST['dependent_members'];

	   $userObj2->updateEcoStat($employment_status, $income_source, $monthly_income, $dependent_members);
	   echo '<div class="alert alert-info" id="alert" role="alert"> <strong> आर्थिक विवरण</strong> परिवर्तन भयो। </div>';

	}


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>आर्थिक विवरण परिवर्तन</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	<header id="header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="text-center">आर्थिक विवरण परिवर्तन ‍</h1>

          </div>

     
        </div>
      </div>
    </header>

    <div class="col-lg-8 col-lg-offset-2">	

	<form class="well" method="POST">
		
		
		<label>रोजगारीको अवस्थाः </label><input type="text" class="form-control" value="<?php echo $userObj->showEditEcoEs($editid) ?>" name="employment_status" required><br>
		<label>आम्दानीको श्रोतः </label><input type="text" class="form-control" value="<?php echo $userObj->showEditEcoIs($editid) ?>" name="income_source" required><br>
		<label>मासिक आम्दानी </label><input type="text" class="form-control" value="<?php echo $userObj->showEditEcoMi($editid) ?>" name="monthly_income" required><br>
		<label>आश्रीत व्यक्तिको संख्या </label><input type="text" class="form-control" value="<?php echo $userObj->showEditEcoDm($editid) ?>" name="dependent_members" required><br>
			
		<button class="btn btn-primary btn-block" name="save">सबमिट</button>
	</form>

</div>


</body>
<script type="text/javascript" src="main.js"></script>
</html>