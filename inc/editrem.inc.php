<?php 
	include "myautoloader.inc.php";
	$userObj = new UsersView();
	$userObj2 = new UserContr;

	$editid = $_GET['editid'];
 ?>

 <?php 
 	if (isset($_POST['save'])) {
 		$remarks = $_POST['remarks'];
 		$userObj2->updateRem($remarks);

 		echo '<div class="alert alert-info" id="alert" role="alert"> <strong> कैफियत</strong> परिवर्तन भयो। </div>';
 	}


  ?>

<!DOCTYPE html>
<html>
<head>
	<title>कैफियत परिवर्तन</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header id="header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="text-center">कैफियत परिवर्तन ‍</h1>
          </div>

     
        </div>
      </div>
    </header>

    <div class="col-lg-8 col-lg-offset-2">
  
		<form class="well" method="POST">
			
			<label>कफियत </label><textarea class="form-control" name="remarks"><?php echo $userObj->showEditOthRem($editid); ?></textarea><br>
	
			<button class="btn btn-primary btn-block" name="save">सबमिट</button><br>
		</form>
	</div>

</body>
<script type="text/javascript" src="main.js"></script>
</html>