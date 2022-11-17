<?php 
	include "myautoloader.inc.php";

	

 ?>

 <?php 


	$userObj = new UserContr();


 ?>

 <?php 

 	if (isset($_POST['save'])) {
 		
 		session_start();

	 	$house_number = $_POST['house_number'];
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

		$_SESSION['housenumber'] = $house_number;
		$_SESSION['head_name'] = $head_name;

		$userObj->createFam($house_number, $address, $tole, $religion, $head_name, $head_name_eng, $age, $gender, $head_citizenship, $head_occupation, $head_education, $mobile_number);
		
		$userObj->redirect('addmem.inc.php?success');



	} 
 	



  ?>



<!DOCTYPE html>
<html>
<head>
	<title>नयाँ परिवार</title>
	<link href="bootstrap.min.css" rel="stylesheet">
	
   
 	<link rel="stylesheet" type="text/css" href="style.css">
   
</head>
 	<nav class="navbar navbar-default">
    	<div class="container">
        	<div class="navbar-header">
          
            <p class="navbar-brand non-clickable">पारिवारीक विवरण</p>

        	</div>
        
          	<ul class="nav navbar-nav">
            
            

          	</ul>

          	<ul class="nav navbar-nav navbar-right">
          		
          		<li><a href="../index.php">पछाडी</a><br></li>

          	</ul>
        
      	</div>
    </nav>

 <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="text-center">नयाँ परिवार ‍</h1>
          </div>

     
        </div>
      </div>
    </header>

    <?php 


    	if (isset($_GET['completed'])) {

    		echo '<div class="alert alert-info" id="alert" role="alert"> <strong> नयाँ परिवार थपियो।</strong> </div>';
    	}






     ?>



<body>

 <div class="col-lg-8 col-lg-offset-2">

	<form  class="well" method="POST">
		
		<label>घर नंः </label><input type="text" class="form-control" name="house_number" required><br>
		<label>ठ‍ेगानाः </label><input type="text" class="form-control" value="सुनवर्षी, ३" name="address" required><br>
		<label>टोलः </label><input type="text" class="form-control" name="tole" required><br>
		<label>धर्म </label><input type="text" class="form-control" name="religion" required><br>
		<label>मोनंः </label><input type="text" class="form-control" name="mobile_number" required><br>
		<label>घरमूलीको नामः </label><input type="text" class="form-control" name="head_name" required><br>
    <label>Name in English </label><input type="text" class="form-control" name="head_name_eng" required><br>
		<label>लिङ्गः </label> <select class="form-control" name="gender" required>
			
								<option value="पुरुष">पुरुष</option>
								<option value="महिला">महिला</option>
								<option value="अन्य">अन्य</option>
		</select>
		<br>
		<label>उमेरः </label><input type="text" class="form-control" name="age" required><br>
		<label>नागरिकता नंः </label><input type="text" class="form-control" name="head_citizenship" required><br>
		<label>पेशाः </label><input type="text" class="form-control" name="head_occupation" required><br>
		<label>शैक्षिक योग्यता </label><input type="text" class="form-control" name="head_education" required><br>
		
		
		<button class="btn btn-primary btn-block" name="save">सबमिट</button>
		
	</form>
</div>
	
</body>

<script type="text/javascript" src="main.js"></script>

</html>