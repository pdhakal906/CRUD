<?php 

	class UsersView extends User {
		public function showAllFamName() {

			$rowUser= $this->getAllFam();
		}

		public function showFamMem($housenum) {
			$rowUser = $this->getFamMem($housenum);
		}

		public function showFamBio($housenum) {
			$rowUser = $this->getFamBio($housenum);
		}

		public function showFamHead($housenum) {
			$rowUser = $this->getFamHead($housenum);
		}

		public function showEcoStat($housenum) {
			$rowUser = $this->getEcoStat($housenum);
		}

		public function showLivStat($housenum) {
			$rowUser = $this->getLivStat($housenum);
		}

		public function showProStat($housenum) {
			$rowUser = $this->getProStat($housenum);
		}

		public function showFacStat($housenum) {
			$rowUser = $this->getFacStat($housenum);
		}

		public function showOthStat($housenum) {
			$rowUser = $this->getOthStat($housenum);
		}

		public function showRem($housenum) {
			$rowUser = $this->getRem($housenum);
		}


		public function showEditFamHeadAddr($housenum){
			$rowUser = $this->getEditFamHead($housenum);
			echo $rowUser[0]['address'];
		}

		public function showEditFamHeadTole($housenum){
			$rowUser = $this->getEditFamHead($housenum);
			echo $rowUser[0]['tole'];
		}

		public function showEditFamHeadRelig($housenum){
			$rowUser = $this->getEditFamHead($housenum);
			echo $rowUser[0]['religion'];
		}

		public function showEditFamHeadMob($housenum){
			$rowUser = $this->getEditFamHead($housenum);
			echo $rowUser[0]['mobile'];
		}

		public function showEditFamHeadName($housenum){
			$rowUser = $this->getEditFamHead($housenum);
			echo $rowUser[0]['head_name'];
		}

		public function showEditFamHeadNameEng($housenum){
			$rowUser = $this->getEditFamHead($housenum);
			echo $rowUser[0]['head_name_eng'];
		}

		public function showEditFamHeadGen($housenum){
			$rowUser = $this->getEditFamHead($housenum);
			echo $rowUser[0]['head_gender'];
		}

		public function showEditFamHeadAge($housenum){
			$rowUser = $this->getEditFamHead($housenum);
			echo $rowUser[0]['head_age'];
		}

		public function showEditFamHeadCit($housenum){
			$rowUser = $this->getEditFamHead($housenum);
			echo $rowUser[0]['head_citizenship'];
		}

		public function showEditFamHeadOcc($housenum){
			$rowUser = $this->getEditFamHead($housenum);
			echo $rowUser[0]['head_occupation'];
		}

		public function showEditFamHeadEdu($housenum){
			$rowUser = $this->getEditFamHead($housenum);
			echo $rowUser[0]['education'];
		}

		public function showEditFamMemName($id){
			$rowUser = $this->getEditFamMem($id);
			echo $rowUser[0]['name'];
		}

		public function showEditFamMemNameEng($id){
			$rowUser = $this->getEditFamMem($id);
			echo $rowUser[0]['mem_name_eng'];
		}

		public function showEditFamMemGen($id){
			$rowUser = $this->getEditFamMem($id);
			echo $rowUser[0]['gender'];
		}

		public function showEditFamMemAge($id){
			$rowUser = $this->getEditFamMem($id);
			echo $rowUser[0]['age'];
		}

		public function showEditFamMemRela($id){
			$rowUser = $this->getEditFamMem($id);
			echo $rowUser[0]['relation'];
		}

		public function showEditFamMemCit($id){
			$rowUser = $this->getEditFamMem($id);
			echo $rowUser[0]['citizenship'];
		}

		public function showEditFamMemOcc($id){
			$rowUser = $this->getEditFamMem($id);
			echo $rowUser[0]['occupation'];
		}

		public function showEditFamMemEdu($id){
			$rowUser = $this->getEditFamMem($id);
			echo $rowUser[0]['education'];
		}

		public function showEditEcoEs($housenum){
			$rowUser = $this->getEditEco($housenum);
			echo $rowUser[0]['employment_status'];
		}

		public function showEditEcoIs($housenum){
			$rowUser = $this->getEditEco($housenum);
			echo $rowUser[0]['income_source'];
		}

		public function showEditEcoMi($housenum){
			$rowUser = $this->getEditEco($housenum);
			echo $rowUser[0]['monthly_income'];
		}

		public function showEditEcoDm($housenum){
			$rowUser = $this->getEditEco($housenum);
			echo $rowUser[0]['dependent_members'];
		}

		public function showEditLivPs($housenum){
			$rowUser = $this->getEditLiv($housenum);
			echo $rowUser[0]['property_status'];
		}


		public function showEditLivLa($housenum){
			$rowUser = $this->getEditLiv($housenum);
			echo $rowUser[0]['land_area'];
		}


		public function showEditLivHt($housenum){
			$rowUser = $this->getEditLiv($housenum);
			echo $rowUser[0]['house_type'];
		}


		public function showEditLivRn($housenum){
			$rowUser = $this->getEditLiv($housenum);
			echo $rowUser[0]['room_number'];
		}

		public function showEditProVeh($housenum){
			$rowUser = $this->getEditPro($housenum);
			echo $rowUser[0]['vehicle'];
		}

		public function showEditProCom($housenum){
			$rowUser = $this->getEditPro($housenum);
			echo $rowUser[0]['communication'];
		}

		public function showEditProFri($housenum){
			$rowUser = $this->getEditPro($housenum);
			echo $rowUser[0]['fridge'];
		}

		public function showEditProDa($housenum){
			$rowUser = $this->getEditPro($housenum);
			echo $rowUser[0]['domestic_animals'];
		}

		public function showEditProDb($housenum){
			$rowUser = $this->getEditPro($housenum);
			echo $rowUser[0]['domestic_birds'];
		}

		public function showEditFacWf($housenum){
			$rowUser = $this->getEditFac($housenum);
			echo $rowUser[0]['water_facility'];
		}

		public function showEditFacTf($housenum){
			$rowUser = $this->getEditFac($housenum);
			echo $rowUser[0]['toilet_facility'];
		}

		public function showEditFacFf($housenum){
			$rowUser = $this->getEditFac($housenum);
			echo $rowUser[0]['fuel_facility'];
		}

		public function showEditFacLf($housenum){
			$rowUser = $this->getEditFac($housenum);
			echo $rowUser[0]['light_facility'];
		}

		public function showEditOthGs($housenum){
			$rowUser = $this->getEditOth($housenum);
			echo $rowUser[0]['geographic_status'];
		}

		public function showEditOthHf($housenum){
			$rowUser = $this->getEditOth($housenum);
			echo $rowUser[0]['health_facility'];
		}

		public function showEditOthLv($housenum){
			$rowUser = $this->getEditOth($housenum);
			echo $rowUser[0]['land_value'];
		}

		public function showEditOthRf($housenum){
			$rowUser = $this->getEditOth($housenum);
			echo $rowUser[0]['road_facility'];
		}

		public function showEditOthRem($housenum){
			$rowUser = $this->getEditOth($housenum);
			echo $rowUser[0]['remarks'];
		}





	} 






 ?>