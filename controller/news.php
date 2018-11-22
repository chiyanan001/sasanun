<?php
include("../model/class_news.php");
$news = new news();
if(isset($_POST['button'])){

  $button = $_POST['button'];

  if($button == "addNews"){
    $news_id = "";
    $newsDate = date("Y/m/d");
    $newsList = $_POST['newsList'];
    $news->addNews($news_id,$newsList,$newsDate);
    // echo $news_id,' | ',$newsList,' | ',$newsDate,' | ',$button;

  }  //TheEnd function if

  else if($button == "deleteNews"){
    $news_id = $_POST['deleteID'];
    $news->deleteNews($news_id);
    echo $button ," | ",$delete_id;
  }  //TheEnd function else if


}  //TheEnd function if(isset)


else { echo "No" ; }


// class ControllerNews
// {
//   public function showNews(){
//       $n = new News();
//       $showNews = $n->showNews();
//       if($showNews == "Error"){
//         $showNews = "Error";
//       }
//   return  $showNews;
//   }





// }




// $n = new ControllerNews();
// $n->showNews();
// print_r($n->showNews());




// $newsDate = date("Y");
//  echo $newsDate ;






?>
