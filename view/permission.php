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
      <div class="card-header">สิทธิการใช้งานระบบ (ตำแหน่งงาน)</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="customers_null" >
            <tr>
              <th>ตำแหน่ง/แผนก</th>
              <th>สิทธิทั้วไป</th>
            </tr>
            <tr>
              <td>ผู้จัดการ/ทรัยากรบุคคล</td>
              <td>สิทธิที่1,สิทธิที่2,สิทธิที่3,สิทธิที่,4</td>
            </tr>
            <tr>
              <td>พนักงาน/ทรัยากรบุคคล</td>
              <td>สิทธิที่1,สิทธิที่2,สิทธิที่3</td>
            </tr>
          </table>
        </div>
      </div>
    </div> <!--------------------TheEnd Row-------------------->

    <div class="card mb-3">
      <div class="card-header">สิทธิการใช้งานระบบ ( บุคคล )</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="customers_null" >
            <tr>
              <th>รหัสพนักงาน/ชื่อพนักงาน</th>
              <th>ตำแหน่ง/แผนก</th>
              <th>สิทธิทั้วไป</th>
              <th>สิทธิพิเศษ</th>
              <th></th>
            </tr>
            <tr>
              <td>584259012/ Thanapon </td>
              <td>พนักงาน/ทรัยากรบุคคล</td>
              <td>สิทธิที่1,สิทธิที่2,สิทธิที่3</td>
              <td>สิทธิที่11,สิทธิที่12,สิทธิที่13</td>
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

















<?php
include("footer.php");
?>
