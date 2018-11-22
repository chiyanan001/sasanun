<?php
include("class_config.php");
class Employees {

	private $conn;

	public function __construct(){
		$database = new Config();
		$db = $database->dbConnection();
		$this->conn = $db;
	}  //TheEnd function

	public function Redirect($url){
		header("Location: $url");
	} //TheEnd function

	public function showEmployees(){
		try{
			$showEmployees = $this->conn->prepare("SELECT employees.employees_id , profile.name_lastName  ,department.departmentName , position.positionName  , employees.salary_id , employees.jobStatus , employees.officeAddress , employees.startWorkingDay , employees.endWorkingDay , employees.staffStaus FROM employees JOIN profile ON employees.profile_id = profile.profile_id JOIN department ON employees.department_id = department.department_id JOIN position ON employees.position_id = position.position_id WHERE profile.profile_id LIKE 'emp%' ");
			$showEmployees->execute();
			$stm = $showEmployees->fetchAll();
			return $stm;
		}
		catch(PDOException $error){
			echo $sql . "<br>" . $error->getMessage();
		}
	}  //TheEnd function

	// public function showEmployeesById($employees_id){
	// 	try{
	// 		$showNewsById = $this->conn->prepare("SELECT * FROM news WHERE news_id = :news_id");
	// 		$showNewsById->bindparam(":employees_id",$employees_id);
	// 		$showNewsById->execute();
	// 		$stm = $showNewsById->fetchAll();
	// 		return $stm;
	// 	}
	// 	catch(PDOException $error){
	// 		echo $sql . "<br>" . $error->getMessage();
	// 	}
	// }  //TheEnd function

	// public function addNews($news_id,$newsList,$date){
	// 	try{
	// 		$addNews = $this->conn->prepare("INSERT INTO news(news_id,news_list,news_date) VALUES (:news_id,:newsList,:newsDate)");
	// 		$addNews->bindparam(":news_id",$news_id);
	// 		$addNews->bindparam(":newsList",$newsList);
	// 		$addNews->bindparam(":newsDate",$date);
	// 		$addNews->execute();
	// 	}
	// 	catch(PDOException $error){
	// 		echo $sql . "<br>" . $error->getMessage();
	// 	}
	// }  //TheEnd function

	public function upDateWork($employees_id,$department_id,$position_id){
		try{
			$editWork = $this->conn->prepare("UPDATE employees SET department_id = :department_id, position_id = :position_id WHERE employees.employees_id = :employees_id ");
			$editWork->bindparam(":employees_id",$employees_id);
			$editWork->bindparam(":department_id",$department_id);
			$editWork->bindparam(":position_id",$position_id);
			$editWork->execute();
			// $stm = $editNews->fetchAll();
			// return $stm;
		}
		catch(PDOException $error){
			echo $sql . "<br>" . $error->getMessage();
		}
	}  //TheEnd function

	// public function upDateSalary($employees_id,$department_id){
	// 	try{
	// 		$editWork = $this->conn->prepare("");
	// 		$editWork->bindparam(":employees_id",$employees_id);
	// 		$editWork->bindparam(":",);
	// 		$editWork->execute();
	// 		// $stm = $editNews->fetchAll();
	// 		// return $stm;
	// 	}
	// 	catch(PDOException $error){
	// 		echo $sql . "<br>" . $error->getMessage();
	// 	}
	// }  //TheEnd function

	public function upDateJobStatus($employees_id,$jobStatus){
		try{
			$editWork = $this->conn->prepare("UPDATE employees SET jobStatus = :jobStatus WHERE employees_id = :employees_id ;");
			$editWork->bindparam(":employees_id",$employees_id);
			$editWork->bindparam(":jobStatus",$jobStatus);
			$editWork->execute();
			// $stm = $editNews->fetchAll();
			// return $stm;
		}
		catch(PDOException $error){
			echo $sql . "<br>" . $error->getMessage();
		}
	}  //TheEnd function

	public function upDateOffice($employees_id,$officeAddress){
		try{
			$editWork = $this->conn->prepare("UPDATE employees SET officeAddress = :officeAddress WHERE employees_id = :employees_id");
			$editWork->bindparam(":employees_id",$employees_id);
			$editWork->bindparam(":officeAddress",$officeAddress);
			$editWork->execute();
			// $stm = $editNews->fetchAll();
			// return $stm;
		}
		catch(PDOException $error){
			echo $sql . "<br>" . $error->getMessage();
		}
	}  //TheEnd function

	public function upDateStartWorkingDay($employees_id,$startWorkingDay){
		try{
			$editWork = $this->conn->prepare("UPDATE employees SET startWorkingDay = :startWorkingDay WHERE employees_id = :employees_id ");
			$editWork->bindparam(":employees_id",$employees_id);
			$editWork->bindparam(":startWorkingDay",$startWorkingDay);
			$editWork->execute();
			// $stm = $editNews->fetchAll();
			// return $stm;
		}
		catch(PDOException $error){
			echo $sql . "<br>" . $error->getMessage();
		}
	}  //TheEnd function

	public function upDateEndWorkingDay($employees_id,$endWorkingDay){
		try{
			$editWork = $this->conn->prepare("UPDATE employees SET endWorkingDay = :endWorkingDay WHERE employees_id = :employees_id ");
			$editWork->bindparam(":employees_id",$employees_id);
			$editWork->bindparam(":endWorkingDay",$endWorkingDay);
			$editWork->execute();
			// $stm = $editNews->fetchAll();
			// return $stm;
		}
		catch(PDOException $error){
			echo $sql . "<br>" . $error->getMessage();
		}
	}  //TheEnd function

	public function upDateStaffStaus($employees_id,$staffStaus){
		try{
			$editWork = $this->conn->prepare("UPDATE employees SET staffStaus = :staffStaus WHERE employees_id = :employees_id ");
			$editWork->bindparam(":employees_id",$employees_id);
			$editWork->bindparam(":staffStaus",$staffStaus);
			$editWork->execute();
			// $stm = $editNews->fetchAll();
			// return $stm;
		}
		catch(PDOException $error){
			echo $sql . "<br>" . $error->getMessage();
		}
	}  //TheEnd function






}






// Test function();

$n = new Employees();
$n->showEmployees();
print_r($n->showEmployees());

 // $n->upDateWork(584259010,103,201);
 // $n->upDateJobStatus(584259010,'ถูกพักงาน');
 // $n->upDateOffice(584259010,'$officeAddress');
 // $n->upDateStartWorkingDay(584259010,'2018-12-12');
 // $n->upDateEndWorkingDay(584259010,'2018-12-12');
  // $n->upDateStaffStaus(584259010,'รายเดือน');





?>
