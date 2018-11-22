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
      <h4>จัดการการลา</h4>
    </ol>


    <hr>


    <div class="card mb-3">
      <div class="card-header">การขออนุมัติ</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="customers_null" >
            <tr>
              <th>รหัสพนักงาน</th>
              <th>ประเภท</th>
              <th>วันที่</th>
              <th>รายละเอีด</th>
            </tr>
            <tr>
              <td>123456789 / Thanapon</td>
              <td>ลากิจ</td>
              <td>01/01/61 -  05/01/61</td>
              <td>
                <a href="vacation_history.php">
                  <button type="button" class="btn btn-outline-primary">รายละเอีด</button>
                </a>
              </td>
            </tr>
             <tr>
              <td>123456789 / Th'sow thanapon</td>
              <td>ลากิจ</td>
              <td>01/01/61 -  05/01/61</td>
              <td>
                <button type="button" class="btn btn-outline-primary">รายละเอีด</button>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>


  </div> <!-- stop2 -->




























<?php 
include("footer.php");
?>