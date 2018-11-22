<?php
include("head.php");
?>
<style>
.salary{
  background-color: #fff;
}
</style>
<!------------------------------------------------------Header------------------------------------------------------>

<div class="content-wrapper"> <!-- start1 -->
  <div class="container-fluid"> <!-- start2 -->

    <ol class="breadcrumb">
      <h4> จัดการเงินเดือน </h4>
    </ol>

    <hr>
    <div class="card mb-3">
      <div class="card-header">จัจัดการเงินเดือน</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="customers_null" >
            <tr>
              <th>รหัสพนักงาน/ชื่อพนักงาน</th>
              <th>ตำแหน่ง / แผนก</th>
              <th>เงินเดือนปัจจุบัน</th>
              <th>เงินเดือนใหม่</th>
            </tr>
            <tr>
              <td>584259012 / Thanapon</td>
              <td>ผู้จัดการ / ทรัพยากรบุคคล</td>
              <td>20,000</td>
              <td>
                <input type="text" class="form-control" id="" placeholder="">
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group"></div>
              </td>
              <td>
                <div class="form-group"></div>
              </td>
              <td>
                <div class="form-group"></div>
              </td>
              <td class="td r">
                <div class="form-group">
                    <a data-toggle="modal" data-target="#123">
                      <button type="button" class="btn btn-outline-success">ตกลง</button>
                    </a>
                </div>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>

    <div class="card mb-12">
      <div class="card-header">รายละเอียด เงินเดือน</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="customers_null" >
            <tr>
              <th>ตำแหน่ง / แผนก</th>
              <th>รหัสพนักงาน/ชื่อพนักงาน</th>
              <th>เงินเดือนเริ่มต้น</th>
              <th>เงินเดือนปัจจุบัน</th>
              <th>****</th>
            </tr>
            <tr>
              <td>ผู้จักการ / การเงิน</td>
              <td>584259012 / Thanapon</td>
              <td>20,000</td>
              <td>20,000</td>
              <td class="td r">
                <button type="button" class="btn btn-outline-success">ตกลง</button>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>



  </div> <!--  stop2 -->

  <div class="modal fade" id="123" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ยืนยัน</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          คุณต้องการลบใช่ไหม
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
