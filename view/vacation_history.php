<?php
include("head.php");
?>
<style>
.vacation{
  background-color: #fff;
}
</style>
<!------------------------------------------------------Header------------------------------------------------------>

<div class="content-wrapper"> <!-- start -->
  <div class="container-fluid"> <!-- start2 -->

    <ol class="breadcrumb">
      <h4>จัดการการลา</h4>
    </ol>

    <hr>
    <div class="card mb-3">
      <div class="card-header">
        <a  href="vacation.php">
          <button type="button" class="btn btn-outline-primary">รายชื่อการขออนุมัติการลา</button>
        </a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="customers_null" >
            <tr>
              <th>รหัสพนักงาน / ชื่อพนักงาน</th>
              <th>ตำแหน่งงาน / แผนก</th>
              <th>ประเภท / ครั้งที่</th>
              <th>วันที่ เริ่ม-สิ้นสุด / จำนวน </th>
            </tr>
            <tr>
              <td>584259012 / Thanapon</td>
              <td>ผู้จัดการ / ทรัพยากรบุคคล</td>
              <td>ลากิจ ( 2 )</td>
              <td>01/01/61 -  05/01/61 ( 5 วัน )</td>
            </tr>
            <tr>
              <th>รายละเอียด</th>
              <td colspan="2">123456789 / Th'sow Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon</td>
              <td>
                <a data-toggle="modal" data-target="#allowed">
                  <button type="button" class="btn btn-outline-success">อนุมัติ</button>
                </a>
                <a data-toggle="modal" data-target="#not_allowed">
                  <button type="button" class="btn btn-outline-danger">ไม่อนุมัติ</button>
                </a>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div> <!--------------------TheEnd Row-------------------->

    <div class="card mb-3">
      <div class="card-header">ประวัติการลา ( 584259012 / Thanapon / ผู้จัดการ / ทรัพยากรบุคคล )</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="customers_null" >
            <tr>
              <th>ประเภท / ครั้งที่</th>
              <th>วันที่ เริ่ม-สิ้นสุด / จำนวน </th>
              <th>รายละเอียด</th>
              <th>การอนุมัติ</th>
            </tr>
            <tr>
              <td>ลากิจ ( 1 )</td>
              <td>01/01/61 -  05/01/61 ( 5 วัน )</td>
              <td>123456789 / Th'sow Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon</td>
              <td>
                <div class="alert alert-success " role="alert">
                  อนุมัติ
                </div>
              </td>
            </tr>
            <tr>
              <td>ลาป่วย ( 1 )</td>
              <td>01/01/61 -  05/01/61 ( 5 วัน )</td>
              <td>123456789 / Th'sow Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon</td>
              <td>
                <div class="alert alert-danger" role="alert">
                  ไม่อนุมัติ
                </div>
              </td>
            </tr>
            <tr>
              <td>ลากิจ ( 2 )</td>
              <td>01/01/61 -  05/01/61 ( 5 วัน )</td>
              <td>123456789 / Th'sow Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon</td>
              <td>
                <div class="alert alert-success " role="alert">
                  อนุมัติ
                </div>
              </td>
            </tr>
            <tr>
              <td>ลาป่วย</td>
              <td>01/01/61 -  05/01/61 ( 5 วัน )</td>
              <td>123456789 / Th'sow Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon Thanapon</td>
              <td>
                <div class="alert alert-warning" role="alert">
                  ยกเลิกการลา
                </div>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div> <!--------------------TheEnd Row-------------------->



  </div> <!-- stop2 -->

  <div class="modal fade" id="allowed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ยืนยัน</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          คุณต้องการอนุมัติการลาใช่ไหม
        </div>
        <div class="modal-footer">
          <a class="btn btn-success" href="">ตกลง</a>
          <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
        </div>
      </div>
    </div>
  </div> <!--------------------TheEnd Row-------------------->

  <div class="modal fade" id="not_allowed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ยืนยัน</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          คุณต้องการไม่อนุมัติการลาใช่ไหม
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
