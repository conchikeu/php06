<?php 
	class LoginController {
		public function handleRequest(){
			$controller = isset($_GET['controller'])?$_GET['controller']:'Login';
			$action = isset($_GET['action'])?$_GET['action']:'LoginSucces';
			if ($controller == 'Login'){
				include '#';
			} else if ($controller == 'userLogin'){
				$this->handleUser($action)
			}
		public function handleUser($action){
			switch ($action) {
				case 'LoginSucces':
				$login = new Login();
				if ($login->login($username, $password) === TRUE){
					header ("Location: admin.php")
				}
				break;
				
				default:
				}
		}
		}
	}
?>