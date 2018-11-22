<?php
include("class_config.php");
class Register {

	private $conn;

	public function __construct(){
		$database = new Config();
		$db = $database->dbConnection();
		$this->conn = $db;
	}  //TheEnd function

	// public function Redirect($url){
	// 	header("Location: $url");
	// } //TheEnd function

		public function showRegister(){
			try{
				$Register = $this->conn->prepare("SELECT register_id,profile.name_lastName,department.departmentName,position.positionName,talent,applicationDate,education.educationName
					FROM register JOIN profile ON register.profile_id = profile.profile_id JOIN department ON register.department_id = department.department_id
					JOIN position ON register.position_id = position.position_id JOIN education ON register.education_id = education.education_id");
					$Register->execute();
					$stm = $Register->fetchAll();
					return $stm;
				}
				catch(PDOException $error){
					// echo $sql . "<br>" . $error->getMessage();
					$stm = "Error";
					return $stm;
				}
		}  //TheEnd function

			public function showRegisterById($register_id){
				try{
					$Register = $this->conn->prepare("SELECT register_id,profile.name_lastName,department.departmentName,position.positionName,talent,applicationDate,education.educationName
						FROM register JOIN profile ON register.profile_id = profile.profile_id JOIN department ON register.department_id = department.department_id
						JOIN position ON register.position_id = position.position_id JOIN education ON register.education_id = education.education_id
						WHERE register_id = :register_id ");
						$Register->bindparam(":register_id",$register_id);
						$Register->execute();
						$stm = $Register->fetchAll();
						return $stm;
					}
					catch(PDOException $error){
						// echo $sql . "<br>" . $error->getMessage();
						$stm = "Error";
						return $stm;
					}
			}  //TheEnd function

			public function addRegister($register_id,$profile_id,$department_id,$position_id,$talent,$applicationDate,$education_id){
				try{
					$Register = $this->conn->prepare("INSERT INTO register (register_id,profile_id,department_id,position_id,talent,applicationDate,education_id) VALUES (:register_id,:profile_id,:department_id,:position_id,:talent,:applicationDate,:education_id)");
					$Register->bindparam(":register_id",$register_id);
					$Register->bindparam(":profile_id",$profile_id);
					$Register->bindparam(":department_id",$department_id);
					$Register->bindparam(":position_id",$position_id);
					$Register->bindparam(":talent",$talent);
					$Register->bindparam(":applicationDate",$applicationDate);
					$Register->bindparam(":education_id",$education_id);
					$Register->execute();
				}
				catch(PDOException $error){
					echo $sql . "<br>" . $error->getMessage();
					$stm = "Error";
					return $stm;
				}
			}  //TheEnd function

			public function addProfile($profile_id,$name_lastName,$profileBirthday,$profileGender,$profileAddress,$education_id,$profileTel,$profileEmail,$profileStatus){
				try{
					$Register = $this->conn->prepare("INSERT INTO profile (profile_id, name_lastName, profileBirthday, profileGender, profileAddress, education_id, profileTel, profileEmail, profileStatus) VALUES (:profile_id,:name_lastName,:profileBirthday,:profileGender,:profileAddress,:education_id,:profileTel,:profileEmail,:profileStatus)");
					$Register->bindparam(":profile_id",$profile_id);
					$Register->bindparam(":name_lastName",$name_lastName);
					$Register->bindparam(":profileBirthday",$profileBirthday);
					$Register->bindparam(":profileGender",$profileGender);
					$Register->bindparam(":profileAddress",$profileAddress);
					$Register->bindparam(":education_id",$education_id);
					$Register->bindparam(":profileTel",$profileTel);
					$Register->bindparam(":profileEmail",$profileEmail);
					$Register->bindparam(":profileStatus",$profileStatus);
					$Register->execute();
				}
				catch(PDOException $error){
					echo $sql . "<br>" . $error->getMessage();
					$stm = "Error";
					return $stm;
				}
			}  //TheEnd function

			public function editRegisterByDepartment($register_id,$department_id){
				try{
					$Register = $this->conn->prepare("UPDATE register SET department_id = :department_id WHERE register.register_id = :register_id");
					$Register->bindparam(":register_id",$register_id);
					$Register->bindparam(":department_id",$department_id);
					$Register->execute();
					// $stm = $editNews->fetchAll();
					// return $stm;
				}
				catch(PDOException $error){
					// echo $sql . "<br>" . $error->getMessage();
					$stm = "Error";
					return $stm;
				}
			}  //TheEnd function

			public function editRegisterByPosition($register_id,$position_id){
				try{
					$Register = $this->conn->prepare("UPDATE register SET position_id = :position_id WHERE register.register_id = :register_id");
					$Register->bindparam(":register_id",$register_id);
					$Register->bindparam(":position_id",$position_id);
					$Register->execute();
					// $stm = $editNews->fetchAll();
					// return $stm;
				}
				catch(PDOException $error){
					// echo $sql . "<br>" . $error->getMessage();
					$stm = "Error";
					return $stm;
				}
			}  //TheEnd function

			public function editRegisterByTalent($register_id,$talent){
				try{
					$Register = $this->conn->prepare("UPDATE register SET talent = :talent WHERE register.register_id = :register_id");
					$Register->bindparam(":register_id",$register_id);
					$Register->bindparam(":talent",$talent);
					$Register->execute();
					// $stm = $editNews->fetchAll();
					// return $stm;
				}
				catch(PDOException $error){
					// echo $sql . "<br>" . $error->getMessage();
					$stm = "Error";
					return $stm;
				}
			}  //TheEnd function

			public function editRegisterByEducation($register_id,$education_id){
				try{
					$Register = $this->conn->prepare("UPDATE register SET education_id = :education_id WHERE register.register_id = :register_id");
					$Register->bindparam(":register_id",$register_id);
					$Register->bindparam(":education_id",$education_id);
					$Register->execute();
					// $stm = $editNews->fetchAll();
					// return $stm;
				}
				catch(PDOException $error){
					// echo $sql . "<br>" . $error->getMessage();
					$stm = "Error";
					return $stm;
				}
			}  //TheEnd function

			public function deleteRegister($register_id){
				try{
					$Register = $this->conn->prepare("DELETE FROM register WHERE register_id = :register_id");
					$Register->bindparam(":register_id",$register_id);
					$Register->execute();
					// $stm = $deleteNews->fetchAll();
					// return $stm;
				}
				catch(PDOException $error){
					// echo $sql . "<br>" . $error->getMessage();
					$stm = "Error";
					return $stm;
				}
			}  //TheEnd function



		}






		// Test function();

		$n = new Register();

		// $n->showRegister();
		// print_r($n->showRegister());

		// $n->showRegisterById("081025610001");
		// print_r($n->showRegisterById("081025610001"));

		// $n->addRegister('081025610003', '1719900409932', '12', '101', '123', '2018-11-01', '102');

		// $n->editRegisterByDepartment("081025610001",12);

		// $n->editRegisterByPosition("081025610001",201);

		// $n->editRegisterByTalent("081025610001",12);
		//
		// $n->editRegisterByEducation("081025610001",102);

		// $n->deleteRegister("081025610001");

		if($_POST){
				echo "id : ".$_POST['id']."id_emp : ".$_POST['id_emp']."dep : ".$_POST['dep']."pos : ".$_POST['pos']."exp : ".$_POST['exp']."datepicker : ".$_POST['datepicker']."grate : ".$_POST['inputState'];
				$bt = $_POST['bt']." ".$_POST['street']." ".$_POST['tt']." ".$_POST['up']." ".$_POST['ds']." ".$_POST['pc'];
				echo "title : ".$_POST['title']."name : ".$_POST['name']."sex : ".$_POST['customRadioInline1']."BD : ".$_POST['dd']."ที่อยู่ : ".$bt."tel : ".$_POST['tel']."mail : ".$_POST['mail'];

				echo $n->addProfile($_POST['id_emp'], $_POST['title']." ".$_POST['name'], $_POST['dd'], $_POST['customRadioInline1'], $bt, $_POST['inputState'], $_POST['tel'], $_POST['mail'], "รอการตรวจสอบ");
				echo $n->addRegister($_POST['id'], $_POST['id_emp'], $_POST['dep'], $_POST['pos'], $_POST['exp'], $_POST['datepicker'], $_POST['inputState']);

	  }else{
			echo "never data!!";
		}







		?>
