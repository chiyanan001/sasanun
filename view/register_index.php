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
    <div class="card-header">ประกาศการรับสมัครงาน</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="customers_null" >
          <tr>
            <th class="td c">ตำแหน่งงาน</th>
            <th class="td c">แผนก</th>
            <th class="td c">เงินเดือน</th>
            <th class="td c">ความสามาพิเพศ</th>
            <th class="td c">การศึกษา</th>
            <th class="td c">ลงประกาศ</th>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <select id="" class="form-control">
                  <option selected>...</option>
                  <option>...</option>
                  <option>...</option>
                </select>
              </div>
            </td>
            <td>
              <div class="form-group">
                <select id="" class="form-control">
                  <option selected>...</option>
                  <option>...</option>
                  <option>...</option>
                </select>
              </div>
            </td>
            <td>
              <div class="form-group">
                <input type="text" class="form-control" id="" placeholder="">
              </div>
            </td>
            <td>
              <div class="form-group">
                <input type="text" class="form-control" id="" placeholder="">
              </div>
            </td>
            <td>
              <div class="form-group">
                <select id="" class="form-control">
                  <option selected>...</option>
                  <option>...</option>
                  <option>...</option>
                </select>
              </div>
            </td>
            <td class="td r">
              <div class="form-group">
                <a data-toggle="modal" data-target="#123">
                  <button type="button" class="btn btn-outline-success">ตกลง</button>
                </a>
              </div>
            </td>
          </tr>
          <tr>
            <td>ผู้จัดการ</td>
            <td>การเงิน</td>
            <td>20,000</td>
            <td>คิดเลขเร็ว</td>
            <td>ป.ตรี</td>
            <td class="td r">
              01/01/61
              <a data-toggle="modal" data-target="#1234">
                <button type="button" class="btn btn-outline-danger">ลบ</button> 
              </a>
            </td>
          </tr>
          <tr>
            <td>ผู้จัดการ</td>
            <td>ทรัยพยากรบุคคล</td>
            <td>20,000</td>
            <td> คิดเลขเร็ว</td>
            <td> ป.ตรี</td>
            <td class="td r">
              01/02/61
              <button type="button" class="btn btn-outline-danger">ลบ</button> 
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
        <h5 class="modal-title" id="exampleModalLabel">แก้ไข รายละเอียด ( 01/01/61 )</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="customers_null" >
          <tr>
            <th class="td c">ตำแหน่งงาน</th>
            <th class="td c">แผนก</th>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <input type="text" class="form-control" id="" placeholder="">
              </div>
            </td>
            <td>
              <div class="form-group">
                <input type="text" class="form-control" id="" placeholder="">
              </div>
            </td>
          </tr>
          <tr>
            <th class="td c" colspan="2">เงินเดือน</th>
          </tr>
          <tr>
            <td colspan="2">
              <div class="form-group">
                <input type="text" class="form-control" id="" placeholder="">
              </div>
            </td>
          </tr>
          <tr>
            <th class="td c">ความสามารถพิเศษ</th>
            <th class="td c">การศึกษา</th>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <input type="text" class="form-control" id="" placeholder="">
              </div>
            </td>
            <td>
              <div class="form-group">
                <input type="text" class="form-control" id="" placeholder="">
              </div>
            </td>
          </tr>
        </table>
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
        คุณต้องการลบใช่ไหม
      </div>
      <div class="modal-footer">
        <a class="btn btn-success" href="">ตกลง</a>
        <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
      </div>
    </div>
  </div>
</div><!--------------------TheEnd Row-------------------->



























<?php
include("footer.php");
?>
