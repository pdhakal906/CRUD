<?php 

	include "dbhforsearch.php";
	
 ?>

<?php 

$search = $_GET['search'];

?>



<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	 <link href="bootstrap.min.css" rel="stylesheet">
 	<link rel="stylesheet" type="text/css" href="style.css">
   
 	
</head>
 <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          
          <a class="navbar-brand" href="../index.php">पारिवारीक विवरण</a>
        </div>
        
         
          <ul class="nav navbar-nav navbar-right">
            <form class="form form-inline" action="search.php" method="GET">
              <input type="text" class="form-control" name="search" placeholder="नामले सर्च" required>
              <button class="btn btn-default">Search</button>
            </form>
          </ul>
          
           
      </div>
    </nav>

<body>

	<br>
	<h2 class="text-center">खोजिको परिणाम</h2>
	<hr>
<?php 

	echo "तपाईले खोज्नु भएको ".$search;

 ?>

 <br>

<table class = "table table-striped table-bordered table-hover table-condensed">
	
	<tr class="thead">
		<th>घर नंबर</th>
		<th>नाम</th>
		
	</tr>


 <?php 

 
 $query = "SELECT * FROM fam_head WHERE head_name_eng LIKE '%$search%'";


 $result = mysqli_query($conn, $query);
 $resultCheck = mysqli_num_rows($result);

 			if ($resultCheck > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						

						echo "<tr><td>".$row['house_number']."</td><td><a href ='viewreport.inc.php?housenum={$row['house_number']}&headname={$row['head_name']}'>".$row['head_name']."</a></td></tr>";

						 

					}

					
 		$squery = "SELECT * FROM fam_mem WHERE mem_name_eng LIKE '%$search%'";

 			$result = mysqli_query($conn, $squery);
 			$resultCheck = mysqli_num_rows($result);

 			if ($resultCheck > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<tr><td>".$row['house_number']."</td><td><a href ='viewreport.inc.php?housenum={$row['house_number']}&headname={$row['head_name']}'>".$row['name']."</a></td></tr>"; 

 			}

 			

 			

 		}

			


 	} else {

 		$squery = "SELECT * FROM fam_mem WHERE mem_name_eng LIKE '%$search%'";

 			$result = mysqli_query($conn, $squery);
 			$resultCheck = mysqli_num_rows($result);

 			if ($resultCheck > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<tr><td>".$row['house_number']."</td><td><a href ='viewreport.inc.php?housenum={$row['house_number']}&headname={$row['head_name']}'>".$row['name']."</a></td></tr>"; 

 			}

 			

 			

 		}

 		
 	}

 	


 		
 ?>

 

 </body>
</html>