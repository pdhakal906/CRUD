<?php 

	include "myautoloader.inc.php";
	$house_number = $_GET['housenum'];
	$head_name = $_GET['head_name'];
	$userObj = new UserContr();
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

		$userObj->createFamMem($house_number, $head_name, $mem_name, $mem_name_eng, $mem_age, $mem_gender, $relation, $mem_citizenship, $mem_occupation, $mem_education);

		echo '<div class="alert alert-info" id="alert" role="alert"> <strong> सदस्य </strong>थपियो। </div>';

		
 	}

  ?>

<!DOCTYPE html>
<html>
<head>
	<title>थप सदस्य</title>
	<link href="bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<header id="header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="text-center">सदस्यको विवरण ‍</h1>
          </div>

     
        </div>
      </div>
    </header>


	<div class="col-lg-8 col-lg-offset-2">	

		<form class="well" method="POST">
			
			<label>घर नम्बरः </label><input readonly type="text" value="<?php echo $house_number; ?>" id="house_number" class="form-control" name="house_number">
			<label>घरमूलीको नामः </label><input readonly value="<?php echo $head_name; ?>" class="form-control" type="text" id="head_name" name="head_name">
			<label>सदस्यको नामः </label><input type="text" class="form-control" name="mem_name" required>
	    	<label>Name in English </label><input type="text" class="form-control" name="mem_name_eng" required>
			<label>लिङ्गः </label><select name="mem_gender" class="form-control" required>
				
									<option value="पुरुष">पुरुष</option>
									<option value="महिला">महिला</option>
									<option value="अन्य">अन्य</option>
			</select>
			<label>उमेरः </label><input type="text" class="form-control" name="mem_age" required>
			<label>घरमूलीसँगको नाताः </label><input type="text" class="form-control" name="relation" required>
			<label>नागरिकताः </label><input type="text" class="form-control" name="mem_citizenship" required>
			<label>पेशाः </label><input type="text" class="form-control" name="mem_occupation" required>
			<label>शैक्षिक योग्यताः </label><input type="text" class="form-control" name="mem_education" required>	
			<button class="btn btn-primary btn-block" name="save">सबमिट</button><br>
		</form>

	</div>

</body>
<script type="text/javascript" src="main.js"></script>
</html>