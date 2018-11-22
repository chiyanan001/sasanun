<?php
include("head.php");
?>
<style>
.register{
  background-color: #fff;
}
</style>
</style>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<!------------------------------------------------------Header------------------------------------------------------>

<div class="content-wrapper"> <!-- start1 -->
  <div class="container-fluid"> <!-- start2 -->

    <ol class="breadcrumb">
      <h4> สมัครงาน </h4>
    </ol>

    <hr>

    <div class="card mb-3">
      <div class="card-header">รับสมัครงาน</div>
      <div class="card-body">
        <form class="was-validated" action="../model/class_register.php" method="post">

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">เลขที่ใบสมัคร</label>
                <input type="text" class="form-control" id="id" name="id"placeholder="" value="">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">เลขบัตรประชาชน</label>
                <input type="text" class="form-control" id="id_emp" name="id_emp" placeholder="">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">รหัสแผนก</label>
                <input type="text" class="form-control" id="dep" name="dep" placeholder="">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">รหัสตำแหน่ง</label>
                <input type="text" class="form-control" id="pos" name="pos" placeholder="">
              </div>
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">ความสามารถ</label>
              <textarea class="form-control" id="exp" name="exp" rows="3"></textarea>
            </div>


            <div class=" col-md-12">

              <div class="form-row">
                <div class=" col-md-6">
                  <label>วันที่สมัคร</label>
                  <input id="datepicker" name="datepicker" width="276" value="--/--/----">
                  <script>
                  $('#datepicker').datepicker({
                    uiLibrary: 'bootstrap4'
                  });
                  </script>
                </div>
                <div class="col-md-4">
                  <label for="inputState">การศึกษา</label>
                  <select id="inputState" name="inputState" class="form-control">
                    <option selected></option>
                    <option>ชั้นมัธยมศึกษาชั้นปีที่3</option>
                    <option>ชั้นมัธยมศึกษาชั้นปีที่6</option>
                    <option>ปริญญาตรี</option>
                    <option>ปริญญาโท</option>
                    <option>ปริญญาเอก</option>
                  </select>
              </div>

            </div>
          </div>
          <div class="col-md-2">
            <br>
            <button type="submit" class="btn btn-primary" name="submit" value="submit">ส่งใบสมัคร</button>
          </div>
        </form>
        <!--------------------TheEnd form-------------------->
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Page level plugin JavaScript-->
  <script src="../vendor/chart.js/Chart.min.js"></script>
  <script src="../vendor/datatables/jquery.dataTables.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin.min.js"></script>
  <!-- Custom scripts for this page-->
  <script src="../js/sb-admin-datatables.min.js"></script>
  <script src="../js/sb-admin-charts.min.js"></script>

  <script type="text/javascript">
  $( document ).ready(function() {
    // setInterval(function () {
    //   console.log($('#datepicker').val());
    // }, 1000);

  });

  </script>




</body>
</html>





























<?php
// include("footer.php");
?>
