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
      <h4>จัดการ แผนก/ตำแหน่ง พนักงาน</h4>
    </ol>
    <hr>
    <div class="card mb-3">
      <div class="card-body">
        <div class="table-responsive">
          <div class="tab-content">
            <button class="btn btn-primary" type="button"> เพิ่มข้อมูล แผนก / ตำแหน่ง พนักงานงาน </button>
            <hr>
            <div class="form-group col-md-12">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>แผนก</label>
                  <input class="form-control" type="text" id="idDepartment" name="">
                </div>
              </div>  <!-- form-group -->
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>ตำแหน่ง</label>
                  <input class="form-control" type="text" id="idPosition" name="">
                </div>
                <div class="form-group col-md-6">
                  <label>&nbsp;</label>
                  <div class="form-group">
                    <div class="float-right">
                      <a data-toggle="modal" data-target="#showTabAddMangeJob" onclick="showTabRegisterEMP()">
                      <button class="btn btn-outline-primary" type="button"> เพิ่ม </button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>  <!-- form-group -->
              <hr>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <button class="btn btn-primary" type="button"> กำหนด แผนก กับ ตำแหน่ง พนักงาน </button>
                </div>
              </div>  <!-- form-group -->
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>ตำแหน่ง</label>
                  <select class="custom-select">
                    <option value="">กรุณาเลือก</option>
                    <option value=" ">1</option>
                    <option value=" ">2</option>
                    <option value=" ">3</option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label>ตำแหน่ง</label>
                  <select class="custom-select">
                    <option value="">กรุณาเลือก</option>
                    <option value=" ">1</option>
                    <option value=" ">2</option>
                    <option value=" ">3</option>
                  </select>
                </div>
                <div class="form-group col-md-2">
                  <label>เงินเดือน</label>
                  <input class="form-control" type="text" id="" name="">
                </div>
                <div class="form-group col-md-12">
                  <div class="float-right">
                    <a data-toggle="modal" data-target="#showTabAddDepAndPos" onclick="showTabNews()">
                    <button class="btn btn-outline-primary " type="submit" > เพิ่ม </button>
                    </a>
                  </div>
                </div>
              </div>  <!-- form-group -->
              <hr>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>แผนก</th>
                    <th>ตำแหน่ง</th>
                    <th>เงินเดือน</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>แผนก</th>
                    <th>ตำแหน่ง</th>
                    <th>เงินเดือน</th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                  </tr>
                  <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                  </tr>
                  <tr>
                    <td>Ashton Cox</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                  </tr>
                  <tr>
                    <td>Cedric Kelly</td>
                    <td>Senior Javascript Developer</td>
                    <td>Edinburgh</td>
                  </tr>
                </tbody>
              </table>

            </div>
          </div>
        </div>
      </div>
    </div>







  </div>  <!-- stop2 -->



  <div class="modal fade" id="showTabAddMangeJob" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ตรวจสอบการบันทึกข้อมูล</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>แผนก</label>
            <input class="form-control" type="text" id="Show_department" name="" readonly>
          </div>
          <div class="form-group">
            <label>ตำแหน่ง</label>
            <input class="form-control" type="text" id="Show_position" name="" readonly>
          </div>
        </div>
        <div class="modal-footer">
          <form method="POST" action="Controller/news.php">
            <input type="text" id="idNewsId" hidden readonly>
            <button class="btn btn-success" type="button" id="" name="button" onclick="showTabRegisterEMP2()" data-dismiss="modal">ตกลง</button>
          </form>
          <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
        </div>
      </div>
    </div>
  </div> <!--------------------TheEnd Row-------------------->

  <div class="modal fade" id="showTabAddDepAndPos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">แก้ไข รายละเอียด ( 01/01/61 )</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>แผนก</label>
            <input class="form-control" type="text" id="" name="">
          </div>
          <div class="form-group">
            <label>ตำแหน่ง</label>
            <input class="form-control" type="text" id="" name="">
          </div>
          <div class="form-group">
            <label>เงินเดือน</label>
            <input class="form-control" type="text" id="" name="">
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-success" type="button">ตกลง</button>
          <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
        </div>
      </div>
    </div>
  </div>  <!--------------------TheEnd Row-------------------->








  <!-- <script type="text/javascript" src="../js/register.js"></script> -->
  <script type="text/javascript" language="JavaScript">

  function showTabRegisterEMP(){
    var department = document.getElementById("idDepartment").value;
    var position = document.getElementById("idPosition").value;
    // alert("234234" );  //return แสดง
    document.getElementById("Show_department").value = department ;
    document.getElementById("Show_position").value = position ;

  }  //TheEnd function

   function showTabRegisterEMP2(){

    var department2 = document.getElementById("Show_department").value;
    var position2 = document.getElementById("Show_position").value;
    // alert( department2+"|"+position2);  //return แสดง

  }  //TheEnd function





</script>













<?php
include("footer.php");
?>
