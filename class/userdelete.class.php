<?php 


	class UserDelete extends User {
		public function delUser($id) {
			$this->deleteUser($id);
		}

		public function redirect($url) {
			header("Location: $url");
			
		}

	}






 ?>