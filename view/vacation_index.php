<?php
include("head.php");
?>
<style>
.vacation{
  background-color: #fff;
}
</style>
<!------------------------------------------------------Header------------------------------------------------------>

<div class="content-wrapper"> <!-- start1 -->
  <div class="container-fluid"> <!-- start2 -->

    <ol class="breadcrumb">
      <h4> จัดการการลา </h4>
    </ol>

    <hr>
    <div class="card mb-3">
      <div class="card-header">เพิ่มข้อมูลประเภทการลา</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="customers_null" >
            <tr>
              <th>ประเภทการลา</th>
              <th></th>
            </tr>
            <tr>
              <td>
                <input type="text" class="form-control" id="" placeholder="">
              </td>
              <td class="td r">
                <a data-toggle="modal" data-target="#add">
                  <button type="button" class="btn btn-outline-success">เพิ่ม</button>
                </a>
              </td>
            </table>
          </div>
        </div>
      </div> <!--------------------TheEnd Row-------------------->


      <div class="card mb-3">
        <div class="card-header">ประเภทการลา</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="customers_null" >
              <tr>
                <th>ประเภทการลา</th>
                <th></th>
              </tr>
              <tr>
                <td>ลาป่วย</td>
                <td class="td r">

                <a data-toggle="modal" data-target="#view">
                    <button type="button"class="btn btn-outline-warning">ดูข้อมูล</button>
                  </a>
                  <a data-toggle="modal" data-target="#edit">
                    <button type="button" class="btn btn-outline-primary">แก้ไข</button>
                  </a>
                  <a data-toggle="modal" data-target="#delete">
                    <button type="button" class="btn btn-outline-danger">ลบ</button>
                  </a>


                </td>
              </tr>
              <tr>
                <td>ลาคลอดบุตร</td>
                <td class="td r">
                <a data-toggle="modal" data-target="#view">
                    <button type="button"class="btn btn-outline-warning">ดูข้อมูล</button>
                  </a>
                  <a data-toggle="modal" data-target="#edit">
                    <button type="button" class="btn btn-outline-primary">แก้ไข</button>
                  </a>
                  <a data-toggle="modal" data-target="#delete">
                    <button type="button" class="btn btn-outline-danger">ลบ</button>
                  </a>
                </td>
              </tr>
              <tr>
                <td>ลาไปช่วยเหลือภริยาหลังคลอด</td>
                <td class="td r">
                <a data-toggle="modal" data-target="#view">
                    <button type="button"class="btn btn-outline-warning">ดูข้อมูล</button>
                  </a>
                  <a data-toggle="modal" data-target="#edit">
                    <button type="button" class="btn btn-outline-primary">แก้ไข</button>
                  </a>
                  <a data-toggle="modal" data-target="#delete">
                    <button type="button" class="btn btn-outline-danger">ลบ</button>
                  </a>
                </td>
              </tr>
              <tr>
                <td>ลากิจส่วนตัว</td>
                <td class="td r">
                <a data-toggle="modal" data-target="#view">
                    <button type="button"class="btn btn-outline-warning">ดูข้อมูล</button>
                  </a>
                  <a data-toggle="modal" data-target="#edit">
                    <button type="button" class="btn btn-outline-primary">แก้ไข</button>
                  </a>
                  <a data-toggle="modal" data-target="#delete">
                    <button type="button" class="btn btn-outline-danger">ลบ</button>
                  </a>
                </td>
              </tr>
              <tr>
                <td>ลาพักผ่อน</td>
                <td class="td r">
                <a data-toggle="modal" data-target="#view">
                    <button type="button"class="btn btn-outline-warning">ดูข้อมูล</button>
                  </a>
                  <a data-toggle="modal" data-target="#edit">
                    <button type="button" class="btn btn-outline-primary">แก้ไข</button>
                  </a>
                  <a data-toggle="modal" data-target="#delete">
                    <button type="button" class="btn btn-outline-danger">ลบ</button>
                  </a>
                </td>
              </tr>
              <tr>
                <td>ลาอุปสมบท</td>
                <td class="td r">
                <a data-toggle="modal" data-target="#view">
                    <button type="button"class="btn btn-outline-warning">ดูข้อมูล</button>
                  </a>
                  <a data-toggle="modal" data-target="#edit">
                    <button type="button" class="btn btn-outline-primary">แก้ไข</button>
                  </a>
                  <a data-toggle="modal" data-target="#delete">
                    <button type="button" class="btn btn-outline-danger">ลบ</button>
                  </a>
              <tr>
                <td>ลาไปประกอบพิธีฮัจย์</td>
                <td class="td r">
                <a data-toggle="modal" data-target="#view">
                    <button type="button"class="btn btn-outline-warning">ดูข้อมูล</button>
                  </a>
                  <a data-toggle="modal" data-target="#edit">
                    <button type="button" class="btn btn-outline-primary">แก้ไข</button>
                  </a>
                  <a data-toggle="modal" data-target="#delete">
                    <button type="button" class="btn btn-outline-danger">ลบ</button>
                  </a>
                </td>
              </tr>
              <tr>
                <td> ลาเกี่ยวกับราชการทหาร</td>
                <td class="td r">
                <a data-toggle="modal" data-target="#view">
                    <button type="button"class="btn btn-outline-warning">ดูข้อมูล</button>
                  </a>
                  <a data-toggle="modal" data-target="#edit">
                    <button type="button" class="btn btn-outline-primary">แก้ไข</button>
                  </a>
                  <a data-toggle="modal" data-target="#delete">
                    <button type="button" class="btn btn-outline-danger">ลบ</button>
                  </a>
                </td>
              </tr>
              <tr>
                <td>ลาไปประกอบพิธีฮัจย์</td>
                <td class="td r">
                <a data-toggle="modal" data-target="#view">
                    <button type="button"class="btn btn-outline-warning">ดูข้อมูล</button>
                  </a>
                  <a data-toggle="modal" data-target="#edit">
                    <button type="button" class="btn btn-outline-primary">แก้ไข</button>
                  </a>
                  <a data-toggle="modal" data-target="#delete">
                    <button type="button" class="btn btn-outline-danger">ลบ</button>
                  </a>
                </td>
              </tr>
              <tr>
                <td>ลาติดตามคู่สมรส</td>
                <td class="td r">
                <a data-toggle="modal" data-target="#view">
                    <button type="button"class="btn btn-outline-warning">ดูข้อมูล</button>
                  </a>
                  <a data-toggle="modal" data-target="#edit">
                    <button type="button" class="btn btn-outline-primary">แก้ไข</button>
                  </a>
                  <a data-toggle="modal" data-target="#delete">
                    <button type="button" class="btn btn-outline-danger">ลบ</button>
                  </a>
                </td>
              </tr>
              <tr>
                <td>การไปถือศิลปฏิบัติธรรม</td>
                <td class="td r">
                <a data-toggle="modal" data-target="#view">
                    <button type="button"class="btn btn-outline-warning">ดูข้อมูล</button>
                  </a>
                  <a data-toggle="modal" data-target="#edit">
                    <button type="button" class="btn btn-outline-primary">แก้ไข</button>
                  </a>
                  <a data-toggle="modal" data-target="#delete">
                    <button type="button" class="btn btn-outline-danger">ลบ</button>
                  </a>
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
            คุณต้องการเพิ่มประเภทการลาใหม่ใช่ไหม
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
            คุณต้องการแก้ไขประเภทการลาใหม่ใช่ไหม
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="modal-footer">
            <a class="btn btn-success" href="">ตกลง</a>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
          </div>
        </div>
      </div>
    </div> <!--------------------TheEnd Row-------------------->

    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ยืนยัน</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            คุณต้องการลบประเภทการลานี้ใช่ไหม
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
