<?php 
	//	public, protected, private
	class Useriii {
		public $name;
		public $bithday;
		public function Useriii() {
			echo "demo";
		}
		protected function getName() {
			echo "My Name";
		}

		private function addUser() {
			echo "Add user";
		}

		public function deleteUser() {
			//$this->addUser();
			echo "Delete user";
		}
	}

	$user = new Useriii();
	// $user->deleteUser();
	// echo "<br>";

	class Student extends Useriii {
		public function __construct() {
			echo "Thu khoi tao xem";
		}
		public function getIdStudent() {
			$this->getName();
			//$this->addUser();
			echo "234234234";
		}
		public function deleteUser() {
			echo "Delete student";
		}
	}

	// $student = new Student();
	// $student->getIdStudent();
	// $student->deleteUser();
	// echo "<br>";
	// $student->addUser();
	// echo "<br>";
	//$student->getName();

	$student = new Student();

?>