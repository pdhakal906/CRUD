<?php 


	spl_autoload_register('myAutoLoader'); 

	function myAutoLoader($className) {

		$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];


		if (strpos($url, 'inc') !== false) {
			$path = '../class/';
		}

		else { 

			$path = 'class/';
		}

		
		$extension = ".class.php";
		$fullPath = $path . $className . $extension;

		//Error Handler

		if (!file_exists($fullPath)) {
		 	return false;


		 } 

		 

       require_once "$fullPath"; 



	}





 ?>









