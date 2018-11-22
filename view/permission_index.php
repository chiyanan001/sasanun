<?php
include("head.php");
?>
<style>
.permission{
  background-color: #fff;
}
</style>
<!------------------------------------------------------Header------------------------------------------------------>

<div class="content-wrapper"> <!-- start1 -->
  <div class="container-fluid"> <!-- start2 -->


    <ol class="breadcrumb">
      <h4>สิทธิการใช้งานระบบ</h4>
    </ol>


    <hr>
    <div class="card mb-3">
      <div class="card-header">เพิ่มสิทธิการใช้งานระบบ</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="customers_null" >
            <tr>
              <td>
                <input type="text" class="form-control" id="" placeholder="">
              </td>
              <td class="td r">
                <a data-toggle="modal" data-target="#add">
                  <button type="button" class="btn btn-outline-success">เพิ่ม</button>
                </a>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div> <!--------------------TheEnd Row-------------------->

    <div class="card mb-3">
      <div class="card-header">สิทธิการใช้งานระบบ</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="customers_null" >
            <tr>
              <td>สิทธิที่ 1 </td>
              <td class="td r">
                <a data-toggle="modal" data-target="#edit">
                  <button type="button" class="btn btn-outline-primary">แก้ไข</button>
                </a>
              </td>
            </tr>
            <tr>
              <td>สิทธิที่ 2</td>
              <td class="td r">
                <button type="button" class="btn btn-outline-primary">แก้ไข</button>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div> <!--------------------TheEnd Row-------------------->



  </div> <!-- stop2 -->

  <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ยืนยัน</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          คุณต้องการเพิ่มสิทธิใหม่ใช่ไหม
          <input type="text" class="form-control" id="" placeholder="">
        </div>
        <div class="modal-footer">
          <a class="btn btn-success" href="">ตกลง</a>
          <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
        </div>
      </div>
    </div>
  </div> <!--------------------TheEnd Row-------------------->

  <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ยืนยัน</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          คุณต้องการแก้ไขสิทธิใช่ไหม
          <input type="text" class="form-control" id="" placeholder="">
        </div>
        <div class="modal-footer">
          <a class="btn btn-success" href="">ตกลง</a>
          <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
        </div>
      </div>
    </div>
  </div> <!--------------------TheEnd Row-------------------->
















<?php
include("footer.php");
?>
