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
    <form class="was-validated">
    <form>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">เลขที่ใบสมัคร</label>
      <input type="" class="form-control" id="" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">เลขบัตรประชาชน</label>
      <input type="" class="form-control" id="" placeholder="">
    </div>
  </div>

 <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">รหัสแผนก</label>
      <input type="" class="form-control" id="" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">รหัสตำแหน่ง</label>
      <input type="" class="form-control" id="" placeholder="">
    </div>
  </div>

    <div class="form-group">
    <label for="exampleFormControlTextarea1">ความสามารถ</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

 <div class="form-group col-md-12">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label>วันที่สมัคร</label>
   <input id="datepicker" width="276" />
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
                    </div>

    <div class="form-group col-md-4">
      <label for="inputState">การศึกษา</label>
      <select id="inputState" class="form-control">
        <option selected></option>
        <option>ชั้นมัธยมศึกษาชั้นปีที่3</option>
        <option>ชั้นมัธยมศึกษาชั้นปีที่6</option>
        <option>ปริญญาตรี</option> 
        <option>ปริญญาโท</option>
        <option>ปริญญาเอก</option>
      </select>
    </div>
    <div class="form-group col-md-4">
  <button type="submit" class="btn btn-primary">ส่งใบสมัคร</button>
</form>

                
                
                
    
      </div>
    </div>
  </div> <!--------------------TheEnd Row-------------------->































<?php
include("footer.php");
?>
