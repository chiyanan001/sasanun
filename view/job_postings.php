<?php
include("head.php");
?>
<style>
.register_new{
  background-color: #fff;
}
</style>
<!------------------------------------------------------Header------------------------------------------------------>

<div class="content-wrapper"> <!-- start1 -->
  <div class="container-fluid"> <!-- start2 -->

    <ol class="breadcrumb">
      <h4> ประการ การรับสมัครงาน </h4>
    </ol>

    <hr>
    <div class="card mb-3">
      <div class="card-body">
        <form class="was-validated">
          <div class="form-group col-md-12">
            <div class="form-row">
              <div class="form-group col-md-3">
                <label>แผนก</label>
                <!-- <input class="form-control" type="text" id="department" name="" onclick="showTabJob()" > -->
                <select class="custom-select" id="department" onclick="showTabJob()" required>
                  <option value="">-</option>
                  <option value=""></option>
                  <option value=""></option>
                </select>
              </div>  <!-- 1/1 -->
              <div class="form-group col-md-3">
                <label>ตำแหน่ง</label>
                <!-- <input class="form-control" type="text" id="position" name="" onclick="showTabJob()" > -->
                <select class="custom-select" id="position" onclick="showTabJob()" required>
                  <option value="">-</option>
                  <option value=""></option>
                  <option value=""></option>
                </select>
              </div>  <!-- 1/2 -->
              <div class="form-group col-md-2">
                <label>เงินเดือน</label>
                <input class="form-control" type="text" id="positionSalary" name="" value="" onclick="showTabJob()" required>
              </div>  <!-- 1/3 -->
            </div>
          </div>  <!-- -->
          <hr>
          <div class="form-group col-md-12">
            <div class="form-row">
              <div class="form-group col-md-3">
                <label>ความสามารถพิเศษ</label>
                <input class="form-control" type="text" id="talent" name="" onclick="showTabJob()" required>
              </div>  <!-- 2/1 -->
              <div class="form-group col-md-3">
                <label>การศึกษา</label>
                <input class="form-control" type="text" id="education" name="" onclick="showTabJob()" required>
              </div>  <!-- 2/2 -->
              <div class="form-group col-md-6">
                <label>&nbsp;</label>
                <div class="form-group">
                  <div class="float-right">
                    <button class="btn btn-outline-warning" type="button">ล้างข้อมูล</button>
                    <a data-toggle="modal" data-target="#showJob">
                      <button class="btn btn-success" type="button" > เพิ่มข้อมูล </button>
                    </a>
                  </div>
                </div>
              </div>  <!-- 2/3 -->
            </div>
          </div>  <!-- -->
          <div class="form-group col-md-12">
            <hr>
            <div class="form-row">
              <div class="form-group col-md-2 col-6">
                <label>แผนก</label>
              </div>  <!-- 3/1 -->
              <div class="form-group col-md-2 col-6">
                <label>ตำแหน่ง</label>
              </div>  <!-- 3/2 -->
              <div class="form-group col-md-2 col-6">
                <label>เงินเดือน</label>
              </div>  <!-- 3/3 -->
              <div class="form-group col-md-2 col-6">
                <label>ความสามารถพิเศษ</label>
              </div>  <!-- 3/4 -->
              <div class="form-group col-md-2 col-12">
                <label>การศึกษา</label>
              </div>  <!-- 3/5 -->
              <div class="form-group col-md-2 col-12">
                01/02/61
                <a data-toggle="modal" data-target="#1234">
                  <button class="btn btn-outline-danger float-right" type="button">ลบ</button>
                </a>
              </div>  <!-- 3/6 -->
            </div>
          </div>  <!-- -->


        </form>
      </div>
    </div> <!--------------------TheEnd Row-------------------->





  </div> <!-- stop2 -->

  <div class="modal fade" id="showJob" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ตรวจสอบการบันทึกข้อมูล</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- <div class="form-group col-md-12">
            <hr>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>แผนก</label>
                <input type="text" class="form-control" id="Show_department" placeholder="">
              </div>
              <div class="form-group col-md-6">
                <label>ตำแหน่ง</label>
                <input type="text" class="form-control" id="Show_position" placeholder="">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>เงินเดือน</label>
                <input type="text" class="form-control" id="Show_positionSalary" placeholder="">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>ความสามารถพิเศษ</label>
                <input type="text" class="form-control" id="Show_talent" placeholder="">
              </div>
              <div class="form-group col-md-6">
                <label>การศึกษา</label>
                <input type="text" class="form-control" id="Show_education" placeholder="">
              </div>
            </div>
          </div>   -->
          <h1 class="alert alert-danger" role="alert">
            <i class="fa fa-ban" aria-hidden="true"></i> อยู่ในขึ้นตอนการพัฒนา
          </h1>
        </div>
        <div class="modal-footer">
          <a class="btn btn-success" href="">ตกลง</a>
          <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
        </div>
      </div>
    </div>
  </div><!--------------------TheEnd Row-------------------->

  <div class="modal fade" id="1234" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ยืนยัน</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <h1 class="alert alert-danger" role="alert">
            <i class="fa fa-ban" aria-hidden="true"></i> อยู่ในขึ้นตอนการพัฒนา
          </h1>
        </div>
        <div class="modal-footer">
          <a class="btn btn-success" href="">ตกลง</a>
          <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
        </div>
      </div>
    </div>
  </div><!--------------------TheEnd Row-------------------->







  <script type="text/javascript" src="../js/job_postings.js"></script>
  <script type="text/javascript" language="JavaScript">

  function showTabJob() {
    var department =     document.getElementById("department").value;
    var position =       document.getElementById("position").value;
    var positionSalary = document.getElementById("positionSalary").value;
    var talent =         document.getElementById("talent").value;
    var education =      document.getElementById("education").value;
    document.getElementById("Show_department").value = department ;
    document.getElementById("Show_position").value = position ;
    document.getElementById("Show_positionSalary").value = positionSalary ;
    document.getElementById("Show_talent").value = talent ;
    document.getElementById("Show_education").value = education ;

  }  //TheEnd function

  function addNews() {

  var department =  document.getElementById("Show_department").value ;
  var position =  document.getElementById("Show_position").value ;
  var positionSalary =  document.getElementById("Show_positionSalary").value  ;
  var talent =  document.getElementById("Show_talent").value ;
  var education =  document.getElementById("Show_education").value  ;

  var button = "addProfile";



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










  </script>




















  <?php
  include("footer.php");
  ?>
