  <?php
  include("head.php");
  ?>
  <style>
  .register{
    background-color: #fff;
  }
  </style>
  <!------------------------------------------------------Header------------------------------------------------------>

  <div class="content-wrapper"> <!-- start1 -->
    <div class="container-fluid"> <!-- start2 -->

      <ol class="breadcrumb">
        <h4> สมัครงาน </h4>
      </ol>

      <hr>
      <div class="card mb-3">
        <div class="card-header">
          <a href="register.php">
            <button type="button" class="btn btn-outline-primary">รายชื่อผู้มาสมัครงาน</button>
          </a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="customers_null" >
              <tr>
                <th>ชื่อ-นามสกุล</th>
                <th>ตำแหน่งงาน</th>
                <th>แผนก</th>
                <th>เงินเดือน</th>
                <th>ความสามาพิเพศ</th>
                <th>การศึกษา</th>
              </tr>
              <tr>
                <td>Thanapon</td>
                <td>ผู้จัดการ</td>
                <td>การเงิน</td>
                <td>20,000</td>
                <td>คิดเลขเร็ว</td>
                <td>ป.ตรี</td>
              </tr>
              <tr>
                <th>เขลบัตรประชาชน</th>
                <th colspan="3">ที่อยู่</th>
                <th>วันเดือนปีเกิด</th>
                <th>เพศ</th>
              </tr>
              <tr>
                <td>1709800</td>
                <td colspan="3">22 หมู่ 14 ต.หนองตากยา อ.ท่าม่วง จ.กาญจนบุรี 71110</td>
                <td>26/08/2539</td>
                <td>ชาย</td>
              </tr>
              <tr>
                <th>เบอร์โทรศัพท์</th>
                <th>E-mail</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
              </tr>
              <tr>
                <td>0882881375</td>
                <td>584259012@webmail.npru.ac.th</td>
                <td></td>
                <td></td>
                <td class="td r">
                  <a data-toggle="modal" data-target="#123">
                    <button type="button" class="btn btn-outline-success">รับเข้าทำงาน</button>
                  </a>
                </td>
                <td>
                  <a data-toggle="modal" data-target="#123">
                    <button type="button" class="btn btn-outline-danger">ไม่รับเข้าทำงาน</button>
                  </a>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div> <!--------------------TheEnd Row-------------------->





    </div> <!-- stop2 -->


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
