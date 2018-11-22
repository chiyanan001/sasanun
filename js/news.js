function showTabNews() {
    var addNews = document.getElementById("idAddNews").value;  //เก็บค่าจาก Input ใส่ตัวแปล addNews
    document.getElementById("idShowAddNews").value = addNews ;  //เก็บค่าจากตัวแปล addNews ใส่ Input
    // alert(addNews);
  }  //TheEnd function

  function addNews() {
    var newsList = document.getElementById("idShowAddNews").value;  //เก็บค่าจาก Input ใส่ตัวแปล listNews
    var showAddNewsLen = $("#idShowAddNews").val().length;   //เก็บค่าจาก Input ใส่ตัวแปล showAddNewsLen เก็บเป็นความยาว
    if(showAddNewsLen <= 0 ){
      alert("กรุณาใส่ค่า");
      return false;
    }
    else{
      var button = "addNews";
      // alert (button+" | "+ listNews);
      $.ajax({
        method: "POST",      //ส่งแบบ
        url: "../controller/news.php",     //ส่งไปที่
        data: { newsList:newsList , button:button } //ค่าที่ส่ง
      })
      .done(function( msg ){
        // alert( "Data Saved: " + msg );  //return แสดง
        location.reload();
        // window.location.reload(false);
      });
    }

  }//TheEnd function


  function addDeleteById(newsId) {
    document.getElementById("idNewsId").value = newsId;  //เก็บค่าจาก Input ใส่ตัวแปล newsId แล้วส่งต่อให้ InputByID"newsId"
    // alert (newsId);
  }  //TheEnd function

  function addDelete() {
    var deleteID  = document.getElementById("idNewsId").value;  //เก็บค่าจาก Input ใส่ตัวแปล deleteID
    var button = "deleteNews";
    // alert (deleteNews+" | "+ is);
    $.ajax({
      method: "POST",      //ส่งแบบ
      url: "../controller/news.php",     //ส่งไปที่
      data: { deleteID:deleteID , button:button }  //ค่าที่ส่ง
    })
    .done(function( msg ) {
      // alert( "Data Saved: " + msg );  //return แสดง
      location.reload();
      // window.location.reload(false);
    });

  }  //TheEnd function
