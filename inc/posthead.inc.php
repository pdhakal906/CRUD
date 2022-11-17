<?php 
	include "myautoloader.inc.php";

	session_start();

 ?>

 <?php 


	$userObj = new UserContr();


 ?>

 <?php 

 	

 		
 		
		$housenum = $_POST['house_number'];
		$name = $_POST['head_name'];
    	$nameeng = $_POST['head_name_eng'];
		$tole = $_POST['tole'];
		$religion = $_POST['religion'];
		$address = $_POST['address'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$citizenship = $_POST['head_citizenship'];
		$education = $_POST['head_education'];
		$number = $_POST['mobile_number'];
		$occupation = $_POST['head_occupation'];

		$_SESSION['housenumber'] = $house_number;
		$_SESSION['head_name'] = $head_name;

		$userObj->createFam($housenum, $address, $tole, $religion, $name, $nameeng, $age, $gender, $citizenship, $occupation, $education, $number);
		





	 	

	 






  ?>


<!DOCTYPE html>
<html>
<head>
	<title>नयाँ परिविार</title>
	 <link href="bootstrap.min.css" rel="stylesheet">
   
 <link rel="stylesheet" type="text/css" href="style.css">
   
</head>
 
 <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          
            
          <p class="navbar-brand">पारिवारीक विवरण</p>
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
    	 if (isset($_GET['inserted'])) {

		 			echo '<div class="alert alert-info" id="alert" role="alert"> 
    				<strong> नयाँ परिवार थपियो। </strong> 
   					 <button type="button" class="close" data-dismiss="alert" aria-label ="Close"><span aria-hidden = "true"> &times;</span></button>
				   	</div>';

				   	echo $_SESSION['head_name'];
				   	echo "Hello";  
    
		
			}
 
 ?>	

<body>

	
</body>

<script type="text/javascript" src="main.js"></script>

</html>