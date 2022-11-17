 <?php



 	class User extends Dbh {


 		//Read

 			
 		protected function getAllFam() {
 			$sql = "SELECT * FROM fam_head";
 			$stmt = $this->connect()->query($sql);
 			$stmt->execute();
 		
 	

 				if ($stmt->rowCount() > 0) {
 					while ($rowUser = $stmt->fetch()) {
 			 			echo "<tr><td>".$rowUser['house_number']."</td><td><a href ='viewreport.inc.php?housenum={$rowUser['house_number']}&headname={$rowUser['head_name']}'>".$rowUser['head_name']."</a></td><td>".$rowUser['address']."</td><td>".$rowUser['tole']."</td><td>".$rowUser['mobile']."</td><td><a href='viewfam.inc.php?delid={$rowUser['house_number']}&headname={$rowUser['head_name']}' class='btn btn-danger btn-sm delete'>X</a></td></tr>";
 			 		}

 				}

 		}

 		protected function getFamMem($housenum){
 			$sql = "SELECT * FROM fam_mem WHERE house_number = ?";
 			$stmt = $this->connect()->prepare($sql);
 			$stmt->execute([$housenum]);

 			if ($stmt->rowCount() > 0) {
 				while ($rowUser = $stmt->fetch()) {
 					echo "<tr><td>".$rowUser['name']."</td><td>".$rowUser['gender']."</td><td>".$rowUser['age']."</td><td>".$rowUser['occupation']."</td><td>".$rowUser['citizenship']."</td><td>".$rowUser['education']."</td><td>".$rowUser['relation']."</td><td><a href='editmem.inc.php?editid={$rowUser['id']}' target='_blank' class='btn btn-primary btn-sm'>Edit</a><a href='viewreport.inc.php?delid={$rowUser['id']}&housenum={$rowUser['house_number']}&headname={$rowUser['head_name']}' class='btn btn-danger btn-sm delete'>X</a></td></tr>";
 				}
 			}


 		}


		protected function getFamBio($housenum) {

			$sql = "SELECT * FROM fam_head WHERE house_number = ?"; 
			$stmt = $this->connect()->prepare($sql);
			$stmt->execute([$housenum]);

			if ($stmt->rowCount() > 0) {
				while ($rowUser = $stmt->fetch()) {
					echo "<div class='container'>
        				<div class='row'>
          					<div class='col-sm-12'>
           						<h4 class='text-center'> घर नंः ".$rowUser['house_number']."</h4>
           						<h4 class='text-center'> ठेगानाः ".$rowUser['address']."</h4>
           						<h4 class='text-center'> टोलः ".$rowUser['tole']."</h4>
           						<h4 class='text-center'> धर्मः ".$rowUser['religion']."</h4>
          					</div>

     
        				</div>
     				 </div>";
				}
			}

			 
		}


		protected function getFamHead($housenum) {
			$sql = "SELECT * FROM fam_head WHERE house_number = ?";
			$stmt = $this->connect()->prepare($sql);
			$stmt->execute([$housenum]);

			if ($stmt->rowCount() > 0) {
				while ($rowUser = $stmt->fetch()) {
					echo "<tr><td>".$rowUser['head_name']."</td><td>".$rowUser['head_gender']."</td><td>".$rowUser['head_age']."</td><td>".$rowUser['head_occupation']."</td><td>".$rowUser['head_citizenship']."</td><td>".$rowUser['education']."</td><td>".$rowUser['mobile']."</td><td><a href='edithead.inc.php?editid={$rowUser['house_number']}&housenum={$rowUser['house_number']}' class='btn btn-primary btn-sm' target = '_blank'>Edit</a></tr>";
				}
			}

		}


		protected function getEcoStat($housenum) {
			$sql = "SELECT * FROM eco_status WHERE house_number = ?";
			$stmt = $this->connect()->prepare($sql);
			$stmt->execute([$housenum]);

			if ($stmt->rowCount() > 0) {
				while ($rowUser = $stmt->fetch()) {
					echo "<tr><td>".$rowUser['employment_status']."</td><td>".$rowUser['income_source']."</td><td>".$rowUser['monthly_income']."</td><td>".$rowUser['dependent_members']."</td><td><a href='editeco.inc.php?editid={$rowUser['house_number']}' class='btn btn-primary btn-sm' target = '_blank'>Edit</a></td></tr>";
				}
			}
 		}

 		protected function getLivStat($housenum) {
 			$sql = "SELECT * FROM living_status WHERE house_number = ?";
 			$stmt = $this->connect()->prepare($sql);
 			$stmt->execute([$housenum]);

 			if ($stmt->rowCount() > 0) {
 				while ($rowUser = $stmt->fetch()) {
 					echo "<tr><td>".$rowUser['property_status']."</td><td>".$rowUser['land_area']."</td><td>".$rowUser['house_type']."</td><td>".$rowUser['room_number']."</td><td><a href='editliv.inc.php?editid={$rowUser['house_number']}' class='btn btn-primary btn-sm' target = '_blank'>Edit</a></td></tr>";
 				}
 			}
 		}

 		protected function getProStat($housenum){

 			$sql = "SELECT * FROM property WHERE house_number = ?";
 			$stmt = $this->connect()->prepare($sql);
 			$stmt->execute([$housenum]);

 			if ($stmt->rowCount() > 0) {
 				while ($rowUser = $stmt->fetch()) {
 					echo "<tr><td>".$rowUser['vehicle']."</td><td>".$rowUser['communication']."</td><td>".$rowUser['fridge']."</td><td>".$rowUser['domestic_animals']."</td><td>".$rowUser['domestic_birds']."</td><td><a href='editpro.inc.php?editid={$rowUser['house_number']}' class='btn btn-primary btn-sm' target = '_blank'>Edit</a></td></tr>";
 				}
 			}
 		}


 		protected function getFacStat($housenum){

 			$sql = "SELECT * FROM facilities WHERE house_number = ?";
 			$stmt = $this->connect()->prepare($sql);
 			$stmt->execute([$housenum]);

 			if ($stmt->rowCount() > 0) {
 				while ($rowUser = $stmt->fetch()) {
 					echo "<tr><td>".$rowUser['water_facility']."</td><td>".$rowUser['toilet_facility']."</td><td>".$rowUser['fuel_facility']."</td><td>".$rowUser['light_facility']."</td><td><a href='editfac.inc.php?editid={$rowUser['house_number']}' class='btn btn-primary btn-sm' target = '_blank'>Edit</a></td></tr>";	
 				}
 			}
 		}



 		protected function getOthStat($housenum){

 			$sql = "SELECT * FROM others WHERE house_number = ?";
 			$stmt = $this->connect()->prepare($sql);
 			$stmt->execute([$housenum]);

 			if ($stmt->rowCount() > 0) {
 				while ($rowUser = $stmt->fetch()) {
 					echo "<tr><td>".$rowUser['geographic_status']."</td><td>".$rowUser['health_facility']."</td><td>".$rowUser['land_value']."</td><td>".$rowUser['road_facility']."</td><td><a href='editoth.inc.php?editid={$rowUser['house_number']}' class='btn btn-primary btn-sm' target = '_blank'>Edit</a></td></tr>";
 				}
 			}
 		}

		protected function getRem($housenum){

 			$sql = "SELECT * FROM others WHERE house_number = ?";
 			$stmt = $this->connect()->prepare($sql);
 			$stmt->execute([$housenum]);

 			if ($stmt->rowCount() > 0) {
 				while ($rowUser = $stmt->fetch()) {
 					echo "<tr><td>".$rowUser['remarks']."</td><td><a href='editrem.inc.php?editid={$rowUser['house_number']}' class='btn btn-primary btn-sm' target = '_blank'>Edit</a></td></tr>";
 				}
 			}
 		}


 		protected function getEditFamHead($housenum){
 			$sql = "SELECT * FROM fam_head WHERE house_number = ?";
 			$stmt = $this->connect()->prepare($sql);
 			$stmt->execute([$housenum]);
 			$rowUser= $stmt->fetchAll();
			return $rowUser;

 		}

 		protected function getEditFamMem($id) {
 			$sql = "SELECT * FROM fam_mem WHERE id = ?";
 			$stmt = $this->connect()->prepare($sql); 
 			$stmt->execute([$id]);
 			$rowUser = $stmt->fetchAll();
 			return $rowUser;
 		}

 		protected function getEditEco($housenum) {
 			$sql = "SELECT * FROM eco_status WHERE house_number = ?";
 			$stmt = $this->connect()->prepare($sql); 
 			$stmt->execute([$housenum]);
 			$rowUser = $stmt->fetchAll();
 			return $rowUser;
 		}

 		protected function getEditLiv($housenum) {
 			$sql = "SELECT * FROM living_status WHERE house_number = ?";
 			$stmt = $this->connect()->prepare($sql);
 			$stmt->execute([$housenum]);
 			$rowUser = $stmt->fetchAll();
 			return $rowUser;

 		} 

 		protected function getEditPro($housenum){
			$sql = "SELECT * FROM property WHERE house_number = ?";
 			$stmt = $this->connect()->prepare($sql);
 			$stmt->execute([$housenum]);
 			$rowUser = $stmt->fetchAll();
 			return $rowUser; 			
 		}

		
 		protected function getEditFac($housenum){
			$sql = "SELECT * FROM facilities WHERE house_number = ?";
 			$stmt = $this->connect()->prepare($sql);
 			$stmt->execute([$housenum]);
 			$rowUser = $stmt->fetchAll();
 			return $rowUser; 			
 		}

 		protected function getEditOth($housenum){
			$sql = "SELECT * FROM others WHERE house_number = ?";
 			$stmt = $this->connect()->prepare($sql);
 			$stmt->execute([$housenum]);
 			$rowUser = $stmt->fetchAll();
 			return $rowUser; 			
 		}





 		// Create

 		protected function setFamHead($housenum, $address, $tole, $religion, $name, $nameeng, $age, $gender, $citizenship, $occupation, $education, $number) {

 				$sql = "INSERT INTO fam_head(house_number, address, tole, religion, head_name, head_name_eng, head_age, head_gender, head_citizenship, head_occupation, education, mobile) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ";
 				$stmt = $this->connect()->prepare($sql);

 				$stmt->execute([$housenum, $address, $tole, $religion, $name, $nameeng, $age, $gender, $citizenship, $occupation, $education, $number]);
     
		}

		protected function setFamMem($housenum, $headname, $name, $nameeng, $age, $gender, $relation, $citizenship, $occupation, $education) {

			$sql = "INSERT INTO fam_mem(house_number, head_name, name, mem_name_eng, age, gender, relation, citizenship, occupation, education) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
			$stmt = $this->connect()->prepare($sql);

			$stmt->execute([$housenum, $headname, $name, $nameeng, $age, $gender, $relation, $citizenship, $occupation, $education]);



		}

		protected function setEcoStat($housenum, $headname, $employment_status, $income_source, $monthly_income, $dependent_members) {

			$sql = "INSERT INTO eco_status(house_number, head_name, employment_status, income_source, monthly_income, dependent_members) VALUES(?, ?, ?, ?, ?, ?)";
			$stmt = $this->connect()->prepare($sql);

			$stmt->execute([$housenum, $headname, $employment_status, $income_source, $monthly_income, $dependent_members]);

		}

		protected function setLivStat($housenum, $headname, $property_status, $land_area, $house_type, $room_numbers) {

			 $sql = "INSERT INTO living_status(house_number, head_name, property_status, land_area, house_type, room_number) VALUES(?, ?, ?, ?, ?, ?)";

			 $stmt = $this->connect()->prepare($sql);
			 $stmt->execute([$housenum, $headname, $property_status, $land_area, $house_type, $room_numbers]);

		}

		protected function setPropStat($housenum, $headname, $vehicle_status, $communication_facility, $fridge, $domestic_animals, $domestic_birds) {

			$sql = "INSERT INTO property(house_number, head_name, vehicle, communication, fridge, domestic_animals, domestic_birds) VALUES(?, ?, ?, ?, ?, ?, ?)";
			$stmt = $this->connect()->prepare($sql);
			$stmt->execute([$housenum, $headname, $vehicle_status, $communication_facility, $fridge, $domestic_animals, $domestic_birds]);

		}

		protected function setFacStat($housenum, $headname, $water_facility, $toilet_facility, $fuel_facility, $light_facility) {

			$sql = "INSERT INTO facilities(house_number, head_name, water_facility, toilet_facility, fuel_facility, light_facility) VALUES(?, ?, ?, ?, ?, ?)";
			$stmt = $this->connect()->prepare($sql);
			$stmt->execute([$housenum, $headname, $water_facility, $toilet_facility, $fuel_facility, $light_facility]);		
		}

		protected function setOthStat($housenum, $headname, $geograpic_status, $health_facility, $land_value, $road_facility, $remarks) {

			$sql = "INSERT INTO others(house_number, head_name, geographic_status, health_facility, land_value, road_facility, remarks) VALUES(?, ?, ?, ?, ?, ?, ?)";
			$stmt = $this->connect()->prepare($sql);
			$stmt->execute([$housenum, $headname, $geograpic_status, $health_facility, $land_value, $road_facility, $remarks]);
		}

		// Update

		protected function editFamHead($address, $tole, $religion, $name, $nameeng, $age, $gender, $citizenship, $occupation, $education, $number){

			$editid = $_GET['editid'];

			$sql = "UPDATE fam_head SET address = ?, tole = ?, religion = ?, head_name = ?, head_name_eng = ?, head_age = ?, head_gender = ?, head_citizenship = ?, head_occupation = ?, education = ?, mobile = ? WHERE house_number = $editid";
			$stmt = $this->connect()->prepare($sql);
			$stmt->execute([$address, $tole, $religion, $name, $nameeng, $age, $gender, $citizenship, $occupation, $education, $number]);
		}


		protected function editFamMem($name, $nameeng, $age, $gender, $relation, $citizenship, $occupation, $education){

			$editid = $_GET['editid'];

			$sql = "UPDATE fam_mem SET name = ?, mem_name_eng = ?, age = ?, gender = ?, relation = ?, citizenship = ?, occupation = ?, education = ? WHERE id = $editid";
			$stmt = $this->connect()->prepare($sql);
			$stmt->execute([$name, $nameeng, $age, $gender, $relation, $citizenship, $occupation, $education]);
		}

		protected function editEcoStat($employment_status, $income_source, $monthly_income, $dependent_members){

			$editid = $_GET['editid'];

			$sql = "UPDATE eco_status SET employment_status = ?, income_source = ?, monthly_income = ?, dependent_members = ? WHERE house_number = $editid";
			$stmt = $this->connect()->prepare($sql);
			$stmt->execute([$employment_status, $income_source, $monthly_income, $dependent_members]);
		}

		protected function editLivStat($property_status, $land_area, $house_type, $room_numbers){
			$editid = $_GET['editid'];
			$sql = "UPDATE living_status SET property_status = ?, land_area = ?, house_type = ?, room_number = ? WHERE house_number =$editid";
			$stmt = $this->connect()->prepare($sql);
			$stmt->execute([$property_status, $land_area, $house_type, $room_numbers]);
		}

		protected function editPropStat($vehicle_status, $communication_facility, $fridge, $domestic_animals, $domestic_birds){
			try {
				
				$editid = $_GET['editid'];
				$sql = "UPDATE property SET vehicle = ?, communication = ?, fridge = ?, domestic_animals = ?, domestic_birds = ? WHERE house_number = $editid";
				$stmt = $this->connect()->prepare($sql);
				$stmt->execute([$vehicle_status, $communication_facility, $fridge, $domestic_animals, $domestic_birds]);

			} catch (PDOException $e) {

				echo $e->getMessage();
			}
		}

		protected function editFacStat($water_facility, $toilet_facility, $fuel_facility, $light_facility) {
			$editid = $_GET['editid'];
			$sql = "UPDATE facilities SET water_facility = ?, toilet_facility = ?, fuel_facility = ?, light_facility = ? WHERE house_number = $editid";
			$stmt = $this->connect()->prepare($sql);
			$stmt->execute([$water_facility, $toilet_facility, $fuel_facility, $light_facility]);		
		}


		protected function editOthStat($geograpic_status, $health_facility, $land_value, $road_facility) {

			$editid = $_GET['editid'];

			$sql = "UPDATE others SET geographic_status = ? , health_facility = ? , land_value = ? , road_facility = ? WHERE house_number = $editid";
			$stmt = $this->connect()->prepare($sql);
			$stmt->execute([$geograpic_status, $health_facility, $land_value, $road_facility]);
		}

		protected function editRem($rem){
			$editid = $_GET['editid'];
			$sql = "UPDATE others SET remarks = ? WHERE house_number = $editid";
			$stmt = $this->connect()->prepare($sql);
			$stmt->execute([$rem]);
		}




		//Delete

		protected function deleteWholeFam($housenum) {

			$sql = "DELETE FROM fam_head WHERE house_number = ?";
			$stmt = $this->connect()->prepare($sql);
			$stmt->execute([$housenum]);

		}

		protected function deleteFamMem($id) {

		    $sql = "DELETE FROM fam_mem WHERE id = ?";
			$stmt = $this->connect()->prepare($sql);
			$stmt->execute([$id]);

		}


		
} 

 	

  ?>