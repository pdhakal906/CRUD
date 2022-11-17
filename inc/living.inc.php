<?php 
	session_start();
	include "myautoloader.inc.php";
	$userObj = new UserContr();

 ?>

<?php 

	
 $house_number = $_SESSION['housenumber'];
 $head_name = $_SESSION['head_name'];

 if (isset($_POST['save'])) {
 		
 		$property_status = $_POST['property_status'];
		$land_area = $_POST['land_area'];
		$house_type = $_POST['house_type'];
		$room_numbers = $_POST['room_numbers'];

		$userObj->createLivStat($house_number, $head_name, $property_status, $land_area, $house_type, $room_numbers);

 		$userObj->redirect('property.inc.php?success');
 }

 
 ?>



 <link href="bootstrap.min.css" rel="stylesheet">
   
<link rel="stylesheet" type="text/css" href="style.css">

<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          
          <p class="navbar-brand" href="../index.php">पारिवारीक विवरण</p>
        </div>
        
          <ul class="nav navbar-nav">
            
                        

          </ul>
          
      </div>
    </nav>


<header id="header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="text-center">बसोबासको भौतिक अवस्था  ‍</h1>
          </div>

     
        </div>
      </div>
    </header>

    <?php 


    	if (isset($_GET['success'])) {

    		echo '<div class="alert alert-info" id="alert" role="alert"> <strong> आर्थिक विवरण</strong> सुरक्षित भयो। </div>';
    		
    	}







     ?>



 <!DOCTYPE html>
<html>
<head>
	<title>बसोबासको भौतिक अवस्था</title>
</head>
<body>

	<div class="col-lg-8 col-lg-offset-2">

	<form class="well" method="POST">
		
		<label>घर नम्बरः </label><input disabled="true" value="<?php echo $house_number; ?>" type="text" class="form-control" name="house_number" required><br>
		<label>घरमूलीको नामः </label><input type="text" disabled="true" value="<?php echo $head_name; ?>" class="form-control" name="head_name" required><br>
		<label>घर जग्गाको स्वामित्व</label><select class="form-control" name="property_status" required>
			<option value="लालपुर्जा भएको">लालपुर्जा भएको</option>
			<option value="सुकुम्बासी">सुकुम्बासी</option>
			<option value="बहालमा बसेको">बहालमा बसेको</option>			
		</select><br>
		<label>क्षेत्रफल </label><input type="text" class="form-control" name="land_area" required><br>
		<label>घरको प्रकार </label><select class="form-control" name="house_type" required>
			<option value="पक्की">पक्की</option>
			<option value="अर्धपक्की">अर्धपक्की</option>
			<option value="काठ">काठ</option>
			<option value="कच्ची">कच्ची</option>
		</select><br>
		<label>कोठा संख्या </label><input type="text" class="form-control" name="room_numbers" required><br>
			
		<button class="btn btn-primary btn-block" name="save">सबमिट</button><br>
	</form>

</div>

</body>

<script type="text/javascript" src="main.js"></script>
</html>