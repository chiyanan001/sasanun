<?php
include("class_config.php");
class Profile {

	private $conn;

	public function __construct(){
		$database = new Config();
		$db = $database->dbConnection();
		$this->conn = $db;
	}  //TheEnd function

	public function addProfile($profile_id,$name_lastName,$profileBirthday,$profileGender,$profileAddress,$education_id,$profileTel,$profileEmail,$profileStatus){
		try{
			$addNews = $this->conn->prepare("INSERT INTO profile (profile_id,name_lastName,profileBirthday,profileGender,profileAddress,education_id,profileTel,profileEmail,profileStatus) VALUES
			(:profile_id,:name_lastName,:profileBirthday,:profileGender,:profileAddress,:education_id,:profileTel,:profileEmail,:profileStatus);");
			$addNews->bindparam(":profile_id",$profile_id);
			$addNews->bindparam(":name_lastName",$name_lastName);
			$addNews->bindparam(":profileBirthday",$profileBirthday);
			$addNews->bindparam(":profileGender",$profileGender);
			$addNews->bindparam(":profileAddress",$profileAddress);
			$addNews->bindparam(":education_id",$education_id);
			$addNews->bindparam(":profileTel",$profileTel);
			$addNews->bindparam(":profileEmail",$profileEmail);
			$addNews->bindparam(":profileStatus",$profileStatus);
			$addNews->execute();
		}
		catch(PDOException $error){
			// echo $sql . "<br>" . $error->getMessage();
			$stm = "Error";
			return $stm;
		}
	}  //TheEnd function

	public function showProfileById($profile_id){
		try{
			$showNewsById = $this->conn->prepare("SELECT profile_id,name_lastName,profileBirthday,profileGender,profileAddress,education.educationName,profileTel,profileEmail,profileStatus FROM profile JOIN education ON profile.education_id = education.education_id WHERE profile_id = :profile_id");
			$showNewsById->bindparam(":profile_id",$profile_id);
			$showNewsById->execute();
			$stm = $showNewsById->fetchAll();
			return $stm;
		}
		catch(PDOException $error){
			echo $sql . "<br>" . $error->getMessage();
			// $stm = "Error";
			// return $stm;
		}
	}  //TheEnd function

	public function showProfileByRegister(){
		try{
			$showNewsById = $this->conn->prepare("SELECT profile_id,name_lastName,profileBirthday,profileGender,profileAddress,education.educationName,profileTel,profileEmail,profileStatus FROM profile JOIN education ON profile.education_id = education.education_id WHERE profileStatus = 'รอการตรวจสอบ' ;");
			$showNewsById->execute();
			$stm = $showNewsById->fetchAll();
			return $stm;
		}
		catch(PDOException $error){
			echo $sql . "<br>" . $error->getMessage();
			// $stm = "Error";
			// return $stm;
		}
	}  //TheEnd function

	public function editName($profile_id,$name_lastName){
		try{
			$editNews = $this->conn->prepare("UPDATE profile SET name_lastName = :name_lastName WHERE profile_id = :profile_id");
			$editNews->bindparam(":profile_id",$profile_id);
			$editNews->bindparam(":name_lastName",$name_lastName);
			$editNews->execute();
			// $stm = $editNews->fetchAll();
			// return $stm;
		}
		catch(PDOException $error){
			// echo $sql . "<br>" . $error->getMessage();
			$stm = "Error";
			return $stm;
		}
	}  //TheEnd function

	public function editAddress($profile_id,$profileAddress){
		try{
			$editNews = $this->conn->prepare("UPDATE profile SET profileAddress = :profileAddress WHERE profile_id = :profile_id");
			$editNews->bindparam(":profile_id",$profile_id);
			$editNews->bindparam(":profileAddress",$profileAddress);
			$editNews->execute();
			// $stm = $editNews->fetchAll();
			// return $stm;
		}
		catch(PDOException $error){
			echo $sql . "<br>" . $error->getMessage();
			// $stm = "Error";
			// return $stm;
		}
	}  //TheEnd function

	public function editEducation_id($profile_id,$education_id){
		try{
			$editNews = $this->conn->prepare("UPDATE profile SET education_id = :education_id WHERE profile_id = :profile_id");
			$editNews->bindparam(":profile_id",$profile_id);
			$editNews->bindparam(":education_id",$education_id);
			$editNews->execute();
			// $stm = $editNews->fetchAll();
			// return $stm;
		}
		catch(PDOException $error){
			echo $sql . "<br>" . $error->getMessage();
			// $stm = "Error";
			// return $stm;
		}
	}  //TheEnd function

	public function editTel($profile_id,$profileTel){
		try{
			$editNews = $this->conn->prepare("UPDATE profile SET profileTel = :profileTel WHERE profile_id = :profile_id");
			$editNews->bindparam(":profile_id",$profile_id);
			$editNews->bindparam(":profileTel",$profileTel);
			$editNews->execute();
			// $stm = $editNews->fetchAll();
			// return $stm;
		}
		catch(PDOException $error){
			echo $sql . "<br>" . $error->getMessage();
			// $stm = "Error";
			// return $stm;
		}
	}  //TheEnd function

	public function editEmail($profile_id,$profileEmail){
		try{
			$editNews = $this->conn->prepare("UPDATE profile SET profileEmail = :profileEmail WHERE profile_id = :profile_id");
			$editNews->bindparam(":profile_id",$profile_id);
			$editNews->bindparam(":profileEmail",$profileEmail);
			$editNews->execute();
			// $stm = $editNews->fetchAll();
			// return $stm;
		}
		catch(PDOException $error){
			echo $sql . "<br>" . $error->getMessage();
			// $stm = "Error";
			// return $stm;
		}
	}  //TheEnd function

	public function editStatus($profile_id,$profileStatus){
		try{
			$editNews = $this->conn->prepare("UPDATE profile SET profileStatus = :profileStatus WHERE profile_id = :profile_id");
			$editNews->bindparam(":profile_id",$profile_id);
			$editNews->bindparam(":profileStatus",$profileStatus);
			$editNews->execute();
			// $stm = $editNews->fetchAll();
			// return $stm;
		}
		catch(PDOException $error){
			echo $sql . "<br>" . $error->getMessage();
			// $stm = "Error";
			// return $stm;
		}
	}  //TheEnd function

	// public function deleteById($profile_id){
	// 	try{
	// 		$editNews = $this->conn->prepare("DELETE FROM profile WHERE profile_id = :profile_id");
	// 		$editNews->bindparam(":profile_id",$profile_id);
	// 		$editNews->execute();
	// 		// $stm = $editNews->fetchAll();
	// 		// return $stm;
	// 	}
	// 	catch(PDOException $error){
	// 		echo $sql . "<br>" . $error->getMessage();
	// 		// $stm = "Error";
	// 		// return $stm;
	// 	}
	// }  //TheEnd function






	public function showEducation(){
		try{
			$showNews = $this->conn->prepare("SELECT * FROM education");
			$showNews->execute();
			$stm = $showNews->fetchAll();
			return $stm;
		}
		catch(PDOException $error){
			// echo $sql . "<br>" . $error->getMessage();
			$stm = "Error";
			return $stm;
		}
	}  //TheEnd function

	public function showEducationById($education_id){
		try{
			$showNewsById = $this->conn->prepare("SELECT * FROM education WHERE education_id = :education_id");
			$showNewsById->bindparam(":education_id",$education_id);
			$showNewsById->execute();
			$stm = $showNewsById->fetchAll();
			return $stm;
		}
		catch(PDOException $error){
			// echo $sql . "<br>" . $error->getMessage();
			$stm = "Error";
			return $stm;
		}
	}  //TheEnd function

	public function addEducation($education_id,$educationName){
		try{
			$addNews = $this->conn->prepare("INSERT INTO education (education_id,educationName) VALUES (:education_id,:educationName)");
			$addNews->bindparam(":education_id",$education_id);
			$addNews->bindparam(":educationName",$educationName);
			$addNews->execute();
		}
		catch(PDOException $error){
			// echo $sql . "<br>" . $error->getMessage();
			$stm = "Error";
			return $stm;
		}
	}  //TheEnd function

	public function editEducation($education_id,$educationName){
		try{
			$editNews = $this->conn->prepare("UPDATE education SET educationName = :educationName WHERE education_id = :education_id");
			$editNews->bindparam(":education_id",$education_id);
			$editNews->bindparam(":educationName",$educationName);
			$editNews->execute();
			// $stm = $editNews->fetchAll();
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

// $n = new Profile();

// $n->addProfile("17599002999","นายฤทธิเกียรติ ไตรวิชชาวงศ์","2018-11-01","ชาย","2111","101","0822444074","584259012@webmail.npru.ac.th","รอการตรวจสอบ");

// $n->showProfileById(1709800262859);
// print_r($n->showProfileById(1709800262859));
//
// $n->showProfileByRegister();
// print_r($n->showProfileByRegister());

// $n->editName(1759900292222,"thanapon");

// $n->editAddress(1759900292222,"thanapon");

// $n->editEducation_id(1759900292222,301);

// $n->editTel(1759900292222,301);

// $n->editEmail(1759900292222,301);

// $n->editStatus(1759900292222,"พนักงาน");

// $n->deleteById(11);



// $n->showEducation();
// print_r($n->showEducation());

// $n->showEducationById(101);
// print_r($n->showEducationById(101));

// $n->addEducation(33,"deparmentName11");

// $n->editEducation(33,"2345");











?>
