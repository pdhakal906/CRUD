<?php 
	include "myautoloader.inc.php";
 ?>

 <?php 
    $userObj = new UsersView();
    $userObj2 = new UserContr();
  ?>


  
  <?php 

    if (isset($_GET['delid'])) {
      $delid = $_GET['delid'];
      $userObj2->delWholeFam($delid);
      $userObj2->redirect('viewfam.inc.php?deleted'); 
      

      
    }


   ?>

 <link href="bootstrap.min.css" rel="stylesheet">
   
<link rel="stylesheet" type="text/css" href="style.css">

<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          
          <a class="navbar-brand" href="../index.php">पारिवारीक विवरण</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="newfam.inc.php">नयाँ परिवार</a></li>
            <li class="active"><a href="viewfam.inc.php">परिवारको विवरण</a>
            
            

          </ul>
         <ul class="nav navbar-nav navbar-right">
            <form class="form form-inline" action="search.php" method="GET">
              <input type="text" class="form-control" name="search" placeholder="नामले सर्च" required>
              <button class="btn btn-default">Search</button>
            </form>
          </ul>
          
        
      </div>
    </nav>



<header id="header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="text-center"> घरमूलीहरु  ‍</h1>
          </div>

     
        </div>
      </div>
    </header>

    <?php 

    if (isset($_GET['deleted'])) {

      echo '<div class="alert alert-info" id="alert" role="alert"> 
    <strong> परिवार</strong> हट्यो।
    <button type="button" class="close" data-dismiss="alert" aria-label ="Close">
    <span aria-hidden = "true"> &times;</span>
    </button>
    </div>';
      
    }

   ?>





<br>

<body>



<table class = "table table-striped table-bordered table-hover table-condensed">
	
	<tr class="thead">
		<th>घर नंबर</th>
		<th>घरमूलीको नाम</th>
		<th>ठेगाना</th>
		<th>टोल</th>
		<th>मोबाइल नंम्बर</th>
    <th></th>

	</tr>

    <?php 

      $userObj->showAllFamName();

    ?>



</body>

<script type="text/javascript" src="main.js"></script>  