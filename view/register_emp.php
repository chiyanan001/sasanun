<?php
include("head.php");
?>
<style>
.employees{
  background-color: #fff;
}
</style>
<!------------------------------------------------------Header------------------------------------------------------>

<div class="content-wrapper"> <!-- start1 -->
  <div class="container-fluid"> <!-- start2 -->

    <ol class="breadcrumb">
      <h4>ลงทะเบียนพนักงาน</h4>
    </ol>
    <hr>
    <div class="card mb-3">
      <div class="card-body">
        <div class="table-responsive">
          <div class="tab-content">
            <div class="tab-pane active" role="tabpanel" id="menu1">
              <ul class="nav nav-pills nav-fill navtop">
                <li class="nav-item">
                  <button class="btn btn-primary btn-lg" type="button"> ข้อมูลส่วนตัว </button>
                </li>
                <li class="nav-item">
                  <button class="btn  btn-outline-primary btn-lg" type="button"> ข้อมูลพนักงาน </button>
                </li>
              </ul>
              <hr>
              <div class="form-group col-md-12">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>เลขบัตรประชาชน</label>
                    <input class="form-control" type="text" id="" name="" onclick="showTabRegisterEMP()">
                  </div>
                  <div class="form-group col-md-2">
                    <label>คำนำหน้านาม</label>
                    <select class="custom-select" id="" name="">
                      <option value="">กรุณาเลือก</option>
                      <option value=" ">นาย</option>
                      <option value=" ">นาง</option>
                      <option value=" ">นางสาว</option>
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label>ชื่อ-นามสกุล</label>
                    <input class="form-control" type="text" id="" name="" value="" onclick="showTabRegisterEMP()">
                  </div>
                </div>  <!-- /form-row -->
                <div class="form-row">
                  <div class="form-group col-md-2">
                    <label>เพศ</label>
                    <div class="">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" type="radio" id="customRadioInline1" name="customRadioInline1" onclick="showTabRegisterEMP()">
                        <label class="custom-control-label" for="customRadioInline1">ชาย</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input"  type="radio" id="customRadioInline2" name="customRadioInline1" onclick="showTabRegisterEMP()">
                        <label class="custom-control-label" for="customRadioInline2">หญิง</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group col-md-4">
                    <label>วันเกิด</label>
                    <input class="form-control" type="date" id="" name="" onclick="showTabRegisterEMP()">
                  </div>
                  <div class="form-group col-md-2">
                    <label>อายุ</label>
                    <div class="input-group mb-2">
                      <input class="form-control" type="text" id="" name="" value="" onclick="showTabRegisterEMP()">
                    </div>
                  </div>
                  <div class="form-group col-md-4">
                    <label>ระดับการศึกษา</label>
                    <div class="input-group mb-2">
                      <select class="custom-select" id="" name="" onclick="showTabRegisterEMP()" >
                      <option value="">กรุณาเลือก</option>
                        <option value="">มัธยมศึกษาปีที่ 3</option>
                        <option value="">มัธยมศึกษาปีที่ 6</option>
                        <option value="">ปริญญาตรี</option>
                        <option value="">ปริญญาโท</option>
                        <option value="">ปริญญาเอก</option>
                      </select>
                    </div>
                  </div>
                </div>  <!-- /form-row -->
                <div class="form-row">
                  <div class="form-group col-md-2">
                    <label>บ้านเลขที่</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">บ.</div>
                      </div>
                      <input class="form-control" type="text" id="" name="" value="" onclick="showTabRegisterEMP()">
                    </div>
                  </div>
                  <div class="form-group col-md-4">
                    <label>หมู่/ถนน</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">ม.</div>
                      </div>
                      <input class="form-control" type="text" id="" name="" value="" onclick="showTabRegisterEMP()">
                    </div>
                  </div>
                  <div class="form-group col-md-3">
                    <label>แขวง/ตำบล</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">ต.</div>
                      </div>
                      <input class="form-control" type="text" id="" name="" value="" onclick="showTabRegisterEMP()">
                    </div>
                  </div>
                  <div class="form-group col-md-3">
                    <label>แขวง/อำเภอ</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">อ.</div>
                      </div>
                      <input class="form-control" type="text" id="" name="" value="" onclick="showTabRegisterEMP()">
                    </div>
                  </div>
                </div>  <!-- /form-row -->
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label>จังหวัด</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">บ.</div>
                      </div>
                      <input class="form-control" type="text" id="" name="" value="" onclick="showTabRegisterEMP()">
                    </div>
                  </div>
                  <div class="form-group col-md-2">
                    <label>รหัสไปรษณีย์</label>
                    <div class="input-group mb-2">
                      <input class="form-control" type="text" id="" name="" value="" onclick="showTabRegisterEMP()">
                    </div>
                  </div>
                </div>  <!-- /form-row -->
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>เบอร์โทร</label>
                    <input class="form-control" type="text" id="" name="" value="" onclick="showTabRegisterEMP()">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Email</label>
                    <input class="form-control" type="text" id="" name="" value="" onclick="showTabRegisterEMP()">
                  </div>
                </div>  <!-- /form-row -->
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <div class="form-group">
                      <div class="float-right">
                        <button class="btn btn-outline-warning" type="button">ล้างข้อมูล</button>
                      </div>
                    </div>
                  </div>
                </div>  <!-- /form-row -->
              </div>
            </div> <!-- stop menu1 -->

            <div class="tab-pane" role="tabpanel" id="menu2">
              <ul class="nav nav-pills nav-fill navtop">
                <li class="nav-item">
                  <button class="btn btn-outline-primary btn-lg" type="button"> ข้อมูลส่วนตัว </button>
                </li>
                <li class="nav-item">
                  <button class="btn  btn-primary btn-lg" type="button"> ข้อมูลพนักงาน </button>
                </li>
              </ul>
              <hr>
              <div class="form-group col-md-12">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>ชื่อ - นามสกุล</label>
                    <input class="form-control" type="text" id="" readonly>
                  </div>
                </div>  <!-- /form-row -->
              </div>
              <hr>
              <div class="form-group col-md-12">
                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label>สถานะพนักงาน</label>
                    <select class="custom-select" onclick="showTabRegisterEMP()">
                      <option value="">กรุณาเลือก</option>
                      <option value=" ">รายวัน</option>
                      <option value=" ">รายเดือน</option>
                    </select>
                  </div>
                  <div class="form-group col-md-3">
                    <label>แผนก</label>
                    <select class="custom-select" onclick="showTabRegisterEMP()">
                      <option value="">กรุณาเลือก</option>
                      <option value=" ">1</option>
                      <option value=" ">2</option>
                      <option value=" ">3</option>
                    </select>
                  </div>
                  <div class="form-group col-md-3">
                    <label>ตำแหน่ง</label>
                    <select class="custom-select" onclick="showTabRegisterEMP()">
                      <option value="">กรุณาเลือก</option>
                      <option value=" ">1</option>
                      <option value=" ">2</option>
                      <option value=" ">3</option>
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label>เงินเดือน</label>
                    <div class="input-group mb-2">
                      <input class="form-control" type="text" id="" name="" value="" onclick="showTabRegisterEMP()">
                      <div class="input-group-prepend">
                        <div class="input-group-text">บาท.</div>
                      </div>
                    </div>
                  </div>
                </div>  <!-- /form-row -->
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>วันทีเริ่มงาน</label>
                    <input class="form-control" type="date" id="" name="" onclick="showTabRegisterEMP()">
                  </div>
                </div>  <!-- /form-row -->
              </div>
              <hr>
              <div class="form-group col-md-12">
                <div class="form-row">
                  <div class="form-group col-md-2">
                    <button class="btn btn-primary " type="button" > ตำแหน่งที่ทำงาน </button>
                  </div>
                </div>  <!-- /form-row -->
                <div class="form-row">
                  <div class="form-group col-md-2">
                    <label>บ้านเลขที่</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">บ.</div>
                      </div>
                      <input class="form-control" type="text" id="" name="" value="" onclick="showTabRegisterEMP()">
                    </div>
                  </div>
                  <div class="form-group col-md-4">
                    <label>หมู่/ถนน</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">ห.</div>
                      </div>
                      <input class="form-control" type="text" id="" name="" value="" onclick="showTabRegisterEMP()">
                    </div>
                  </div>
                  <div class="form-group col-md-3">
                    <label>แขวง/ตำบล</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">ต.</div>
                      </div>
                      <input class="form-control" type="text" id="" name="" value="" onclick="showTabRegisterEMP()">
                    </div>
                  </div>
                  <div class="form-group col-md-3">
                    <label>เขต/อำเภอ</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">ต.</div>
                      </div>
                      <input class="form-control" type="text" id="" name="" value="" onclick="showTabRegisterEMP()">
                    </div>
                  </div>
                </div>  <!-- /form-row -->
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label>จังหวัด</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">จ.</div>
                      </div>
                      <input class="form-control" type="text" id="" name="" value="" onclick="showTabRegisterEMP()">
                    </div>
                  </div>
                  <div class="form-group col-md-2">
                    <label>รหัสไปรษณีย์</label>
                    <input class="form-control" type="text" id="" name="" value="" onclick="showTabRegisterEMP()">
                  </div>
                </div>  <!-- /form-row -->
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <div class="form-group">
                      <div class="float-right">
                        <button class="btn btn-outline-warning" type="button">ล้างข้อมูล</button>
                        <a data-toggle="modal" data-target="#addRegisterEMP">
                          <button class="btn btn-success" type="button" > เพิ่มข้อมูล </button>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>  <!-- /form-row -->
              </div>

            </div>  <!-- stop menu2 -->
          </div>
        </div>
      </div>
      <div class="card-footer">  <!--  -->
        <ul class="nav nav-pills nav-fill navtop">
          <li class="nav-item">
            <button class="btn btn-outline-primary " type="button"href="#menu1"data-toggle="tab"> << กลับหน้าแรก </button>
            <button class="btn btn-outline-primary " type="button"href="#menu2"data-toggle="tab"> หน้าต่อไป >> </button>
          </li>
        </ul>
      </div>  <!--  -->

    </div>




  </div>  <!-- stop2 -->



  <div class="modal fade" id="addRegisterEMP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ตรวจสอบการบันทึกข้อมูล</h5>
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
          <form method="POST" action="Controller/news.php">
            <input type="text" id="idNewsId" hidden readonly>
            <button class="btn btn-success" type="button" id="" name="button" onclick="" data-dismiss="modal">ตกลง</button>
          </form>
          <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
        </div>
      </div>
    </div>
  </div> <!--------------------TheEnd Row-------------------->








  <script type="text/javascript" src="../js/register.js"></script>
  <script type="text/javascript" language="JavaScript">

  function showTabRegisterEMP() {
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
