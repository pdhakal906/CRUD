<?php 
	include "myautoloader.inc.php";
	$userObj = new UsersView();
	$userObj2 = new UserContr();

 ?>

<link href="bootstrap.min.css" rel="stylesheet">
   
<link rel="stylesheet" type="text/css" href="style.css">



<?php 

$house_number = $_GET['housenum'];
$head_name = $_GET['headname'];


if (isset($_GET['delid'])) {

	$deleteid = $_GET['delid']; 
	$userObj2->delFamMem($deleteid);
	
}

?>







<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.php">पारिवारीक विवरण</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          
          <ul class="nav navbar-nav navbar-right">
            
            <li><a href="viewfam.inc.php">पछाडी</a><br></li>
          </ul>
       
      </div>
    </nav>
    <header id='header'>

    			<?php 
    					$userObj->showFamBio($house_number);

    			 ?>
      				
    			</header>





 		
 <table class = "table table-striped table-bordered table-hover table-condensed">
	<tr class="thead">
		
		<th>घरमूलीको नाम</th>
		<th>लिङ्ग</th>
		<th>उमेर</th>
		<th>पेशा</th>
		<th>नागरिकता नम्बर</th>
		<th>शैक्षिक योग्यता</th>
		<th>फोन नम्बर</th>
		<th></th>
	</tr>
	<?php
		$userObj->showFamHead($house_number);

	  ?>
</table>
		
<h3>सदस्यको विवरण</h3>

<table class = "table table-striped table-bordered table-hover table-condensed">
	<tr class="thead">
		
		<th>नाम</th>
		<th>लिङ्ग</th>
		<th>उमेर</th>
		<th>पेशा</th>
		<th>नागरिकता</th>
		<th>शैक्षिक योग्यता</th>
		<th>घरमूलीसँगको नाता</th>
		<th></th>
	</tr>

<?php

	$userObj->showFamMem($house_number);


?>
<tr>
	<td><a href="moremem.inc.php?housenum=<?php echo $house_number; ?>&head_name=<?php echo $head_name; ?>" target="_blank">सदस्य थप्ने</a></td>
</tr>
</table>

<h3>आर्थिक विवरण</h3>

<table class = "table table-striped table-bordered table-hover table-condensed">
	<tr class="thead">
		
		<th>रोजगारीको अवस्था</th>
		<th>आम्दानिको श्रोत</th>
		<th>अनुमानित मासिक आम्दानि</th>
		<th>परिवारमा आश्रीत व्यक्तिको संख्या</th>
		<th></th>
	</tr>
	<?php 

		$userObj->showEcoStat($house_number);
	 ?>
</table>
<h3>बसोबासको भौतिक अवस्था</h3>

<table class = "table table-striped table-bordered table-hover table-condensed">
	<tr class="thead">
		
		<th>घर, जग्गाको स्वामित्व</th>
		<th>जग्गाको क्षेत्रफल</th>
		<th>घरको प्रकार</th>
		<th>कोठा संख्या</th>
		<th></th>
		
	</tr>

	<?php 
    					$userObj->showLivStat($house_number);

    			 ?>

</table>
<h3>घरायसी सम्पति</h3>

<table class = "table table-striped table-bordered table-hover table-condensed">
	<tr class="thead">
		
		<th>गाडी,मोटरसाईकल</th>
		<th>ईन्टरनेट,केबुल,टेलिभिजन</th>
		<th>रेफ्रीजेरेटर</th>
		<th>पशु चौपायाको संख्या</th>
		<th>घरपालुवा पंक्षीको संख्या</th>
		<th></th>
		
	</tr>

	<?php 
    					$userObj->showProStat($house_number);

    			 ?>

</table>
<h3>घरायसी सुविधा</h3>
	
<table class = "table table-striped table-bordered table-hover table-condensed">
	<tr class="thead">
		
		<th>खानेपानीको श्रोत</th>
		<th>शौचालय</th>
		<th>खाना पकाउने इन्धन</th>
		<th>वत्ति श्रोत</th>
		<th></th>
		
	</tr>

	<?php 
    					$userObj->showFacStat($house_number);

    			 ?>
</table>

<h3>विविध</h3>

<table class = "table table-striped table-bordered table-hover table-condensed">
	<tr class="thead">
		
		<th>भौगोलिक क्षेत्रगत अवस्था</th>
		<th>स्वास्थ सेवाको उपलब्धता</th>
		<th>जग्गाको अनुमानित मूल्य</th>
		<th>सडक सुविधा</th>
		<th></th>
		
	</tr>
	<?php 
    					$userObj->showOthStat($house_number);

    			 ?>

</table>
<table class="table table-striped table-bordered table-hover table-condensed">
	<tr class="thead">
	<th>कैफियत</th>
	<th></th>
	</tr>
	<tr>
		<?php 
					$userObj->showRem($house_number);

		 ?>
	</tr>
</table>



