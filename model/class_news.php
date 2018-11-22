<?php
include("class_config.php");
class News {

	private $conn;

	public function __construct(){
		$database = new Config();
		$db = $database->dbConnection();
		$this->conn = $db;
	}  //TheEnd function

	// public function Redirect($url){
	// 	header("Location: $url");
	// } //TheEnd function

	public function showNews(){
		try{
			$showNews = $this->conn->prepare("SELECT * FROM news");
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

	public function showNewsById($news_id){
		try{
			$showNewsById = $this->conn->prepare("SELECT * FROM news WHERE news_id = :news_id");
			$showNewsById->bindparam(":news_id",$news_id);
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

	public function addNews($news_id,$newsList,$newsDate){
		try{
			$addNews = $this->conn->prepare("INSERT INTO news(news_id,newsList,newsDate) VALUES (:news_id,:newsList,:newsDate)");
			$addNews->bindparam(":news_id",$news_id);
			$addNews->bindparam(":newsList",$newsList);
			$addNews->bindparam(":newsDate",$newsDate);
			$addNews->execute();
		}
		catch(PDOException $error){
			// echo $sql . "<br>" . $error->getMessage();
			$stm = "Error";
			return $stm;
		}
	}  //TheEnd function

	public function editNews($news_id,$newsList,$newsDate){
		try{
			$editNews = $this->conn->prepare("UPDATE news SET news_id=:news_id,newsList=:newsList,newsDate=:newsDate WHERE news_id=:news_id");
			$editNews->bindparam(":news_id",$news_id);
			$editNews->bindparam(":newsList",$newsList);
			$editNews->bindparam(":newsDate",$newsDate);
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

	public function deleteNews($news_id){
		try{
			$deleteNews = $this->conn->prepare("DELETE FROM news WHERE news_id = :news_id");
			$deleteNews->bindparam(":news_id",$news_id);
			$deleteNews->execute();
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

// $n = new News();
// $n->showNews();
// print_r($n->showNews());





?>
