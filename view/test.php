<?php

include("Model/classNews.php");
$news = new news();


  $deleteID  = $_POST['deleteID'];
  $deleteNews  = $_POST['deleteNews'];



$news->deleteNews($deleteID);
    echo  $deleteID,$deleteNews;


?>
