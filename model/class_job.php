<?php
include("class_config.php");
class Job {

	private $conn;

	public function __construct(){
		$database = new Config();
		$db = $database->dbConnection();
		$this->conn = $db;
	}  //TheEnd function

	// public function Redirect($url){
	// 	header("Location: $url");
	// } //TheEnd function

	public function showDepartment(){
		try{
			$showNews = $this->conn->prepare("SELECT * FROM department");
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

	public function showDepartmentById($deparment_id){
		try{
			$showNewsById = $this->conn->prepare("SELECT * FROM department WHERE department_id = :deparment_id");
			$showNewsById->bindparam(":deparment_id",$deparment_id);
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

	public function addDepartment($deparment_id,$deparmentName){
		try{
			$addNews = $this->conn->prepare("INSERT INTO department (department_id,departmentName) VALUES (:deparment_id,:deparmentName)");
			$addNews->bindparam(":deparment_id",$deparment_id);
			$addNews->bindparam(":deparmentName",$deparmentName);
			$addNews->execute();
		}
		catch(PDOException $error){
			// echo $sql . "<br>" . $error->getMessage();
			$stm = "Error";
			return $stm;
		}
	}  //TheEnd function

	public function editDepartment($deparment_id,$deparmentName){
		try{
			$editNews = $this->conn->prepare("UPDATE department SET departmentName = :deparmentName WHERE department_id = :deparment_id");
			$editNews->bindparam(":deparment_id",$deparment_id);
			$editNews->bindparam(":deparmentName",$deparmentName);
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




  public function showPosition(){
    try{
      $showNews = $this->conn->prepare("SELECT * FROM position");
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

  public function showPositionById($position_id){
    try{
      $showNewsById = $this->conn->prepare("SELECT * FROM position WHERE position_id = :position_id");
      $showNewsById->bindparam(":position_id",$position_id);
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

  public function addPosition($position_id,$positionName){
    try{
      $addNews = $this->conn->prepare("INSERT INTO position (position_id,positionName) VALUES (:position_id,:positionName)");
      $addNews->bindparam(":position_id",$position_id);
      $addNews->bindparam(":positionName",$positionName);
      $addNews->execute();
    }
    catch(PDOException $error){
      // echo $sql . "<br>" . $error->getMessage();
      $stm = "Error";
      return $stm;
    }
  }  //TheEnd function

  public function editPosition($position_id,$positionName){
    try{
      $editNews = $this->conn->prepare("UPDATE position SET positionName = :positionName WHERE position_id = :position_id");
      $editNews->bindparam(":position_id",$position_id);
      $editNews->bindparam(":positionName",$positionName);
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




	public function showJob(){
    try{
      $showNews = $this->conn->prepare("SELECT department.departmentName,position.positionName,department_position.positionSalary FROM department_position JOIN department ON department_position.department_id = department.department_id JOIN position ON department_position.position_id = position.position_id");
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

  public function showJobById($department_id,$position_id){
    try{
      $showNewsById = $this->conn->prepare("SELECT department.departmentName,position.positionName,department_position.positionSalary FROM department_position JOIN department ON department_position.department_id = department.department_id JOIN position ON department_position.position_id = position.position_id WHERE department_position.department_id = :department_id AND department_position.position_id = :position_id");
      $showNewsById->bindparam(":department_id",$department_id);
			$showNewsById->bindparam(":position_id",$position_id);
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

  public function addJob($department_id,$position_id,$positionSalary){
    try{
      $addNews = $this->conn->prepare("INSERT INTO department_position (department_id,position_id,positionSalary) VALUES (:department_id,:position_id,:positionSalary)");
      $addNews->bindparam(":department_id",$department_id);
      $addNews->bindparam(":position_id",$position_id);
			$addNews->bindparam(":positionSalary",$positionSalary);
      $addNews->execute();
    }
    catch(PDOException $error){
      // echo $sql . "<br>" . $error->getMessage();
      $stm = "Error";
      return $stm;
    }
  }  //TheEnd function

  public function editJob($department_id,$position_id,$positionSalary){
    try{
      $editNews = $this->conn->prepare("UPDATE department_position SET positionSalary = :positionSalary WHERE department_position.department_id = :department_id AND department_position.position_id = :position_id");
      $editNews->bindparam(":department_id",$department_id);
      $editNews->bindparam(":position_id",$position_id);
			$editNews->bindparam(":positionSalary",$positionSalary);
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

$n = new Job();

$n->showDepartment();
print_r($n->showDepartment());

// $n->showDepartmentById(11);
// print_r($n->showDepartmentById(11));

// $n->addDepartment(33,"deparmentName11");

// $n->editDepartment(33,"editDepartment");





// $n->showPosition();
// print_r($n->showPosition());

// $n->showPositionById(101);
// print_r($n->showPositionById(101));

// $n->addPosition(33,"deparmentName11");

// $n->editPosition(33,"2345");


// $n->showJob();
// print_r($n->showJob());

// $n->showJobById(12,201);
// print_r($n->showJobById(12,201));

// $n->addJob(11,101,999999);

// $n->editJob(11,101,2345);




?>
