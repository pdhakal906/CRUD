<?php 


	class UserContr extends User {


		public function createFam($housenum, $address, $tole, $religion, $name, $nameeng, $age, $gender, $citizenship, $occupation, $education, $number) {


			$this->setFamHead($housenum, $address, $tole, $religion, $name, $nameeng, $age, $gender, $citizenship, $occupation, $education, $number);
		}

		public function createFamMem($housenum, $headname, $name, $nameeng, $age, $gender, $relation, $citizenship, $occupation, $education) {

			$this->setFamMem($housenum, $headname, $name, $nameeng, $age, $gender, $relation, $citizenship, $occupation, $education);

		}

		public function createEcoStat($housenum, $headname, $employment_status, $income_source, $monthly_income, $dependent_members) {

			$this->setEcoStat($housenum, $headname, $employment_status, $income_source, $monthly_income, $dependent_members);

		}

		public function createLivStat($housenum, $headname, $property_status, $land_area, $house_type, $room_numbers) {

			$this->setLivStat($housenum, $headname, $property_status, $land_area, $house_type, $room_numbers);

		}

		public function createPropStat($housenum, $headname, $vehicle_status, $communication_facility, $fridge, $domestic_animals, $domestic_birds) {

			$this->setPropStat($housenum, $headname, $vehicle_status, $communication_facility, $fridge, $domestic_animals, $domestic_birds);
		}

		public function createFacStat($housenum, $headname, $water_facility, $toilet_facility, $fuel_facility, $light_facility) {

			$this->setFacStat($housenum, $headname, $water_facility, $toilet_facility, $fuel_facility, $light_facility);

		}

		public function creatOthStat($housenum, $headname, $geograpic_status, $health_facility, $land_value, $road_facility, $remarks) {

			$this->setOthStat($housenum, $headname, $geograpic_status, $health_facility, $land_value, $road_facility, $remarks);


		}

		public function updateFamHead($address, $tole, $religion, $name, $nameeng, $age, $gender, $citizenship, $occupation, $education, $number){

			$this->editFamHead($address, $tole, $religion, $name, $nameeng, $age, $gender, $citizenship, $occupation, $education, $number);

		}

		public function updateFamMem($name, $nameeng, $age, $gender, $relation, $citizenship, $occupation, $education){

			$this->editFamMem($name, $nameeng, $age, $gender, $relation, $citizenship, $occupation, $education);
		}

		public function updateEcoStat($employment_status, $income_source, $monthly_income, $dependent_members){
			$this->editEcoStat($employment_status, $income_source, $monthly_income, $dependent_members);
		}

		public function updateLivStat($property_status, $land_area, $house_type, $room_numbers){
			$this->editLivStat($property_status, $land_area, $house_type, $room_numbers);
		}

		public function updatePropStat($vehicle_status, $communication_facility, $fridge, $domestic_animals, $domestic_birds){
			$this->editPropStat($vehicle_status, $communication_facility, $fridge, $domestic_animals, $domestic_birds);
		}

		public function updateFacStat($water_facility, $toilet_facility, $fuel_facility, $light_facility){
			$this->editFacStat($water_facility, $toilet_facility, $fuel_facility, $light_facility);	
		}

		public function updateOthStat($geograpic_status, $health_facility, $land_value, $road_facility){
			$this->editOthStat($geograpic_status, $health_facility, $land_value, $road_facility);
		}

		public function updateRem($rem){
			$this->editRem($rem);
		}



		public function delWholeFam($housenum){

			$this->deleteWholeFam($housenum);
		}

		public function delFamMem($id) {
			$this->deleteFamMem($id);
		}






		
		public function redirect($url) {

			header("Location: $url");
		}


	}	


















