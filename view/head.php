<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin</title>

  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">

  <link href="../css/css.css" rel="stylesheet">

</head>

<body class="fixed-nav sticky-footer bg-dark " id="page-top"  >
  <!-- <body class="fixed-nav sticky-footer" id="page-top" style="background-color: #660D87" > -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark  fixed-top" id="mainNav" >
    <!-- <nav class="navbar navbar-expand-lg fixed-top" id="mainNav" style="background-color: #660D87" > -->
    <a class="navbar-brand" href="index.php">ศศนันท์ ทรานสปอร์ต</a>
    <!-- &nbsp;&nbsp;<img src="../img/logo_sasanun_01.png" width="170" height="author"> -->
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion"  >
        <!-- <ul class="navbar-nav navbar-sidenav" id="exampleAccordion" style="background-color: #660D87" > -->
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="news nav-link" href="news.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">หน้าแรก</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="employees nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#staff" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">จัดการข้อมูลพนักงาน</span>
          </a>
          <ul class="sidenav-second-level collapse" id="staff">
            <li>
              <a href="manage_job.php">จัดการแผนกงาน</a>
            </li>
            <li>
              <a href="register_emp.php">ลงทะเบียนพนักงาน</a>
            </li>
            <li>
              <a href="employees.php">รายชื่อพนักงาน</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="permission nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#permission" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-cogs"></i>
            <span class="nav-link-text">สิทธิในการใช้งานระบบ *</span>
          </a>
          <ul class="sidenav-second-level collapse" id="permission">
            <li>
              <a href="permission_index.php">เพิ่มสิทธิ</a>
            </li>
            <li>
              <a href="permission.php">กำหนดสิทธิพนักงาน</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="vacation nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#vacation" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="nav-link-text">การลา *</span>
          </a>
          <ul class="sidenav-second-level collapse" id="vacation">
            <li>
              <a href="vacation_index.php">ประเภทการลา</a>
            </li>
            <li>
              <a href="vacation.php">การขออนุมัติลา</a>
            </li>
          </ul>
        </li>
        <li class="salary nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#salary" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-credit-card"></i>
            <span class="nav-link-text">เงินเดือนพนักงาน *</span>
          </a>
          <ul class="sidenav-second-level collapse" id="salary">
            <li>
              <a href="salary.php">จัดการเงินเดือน</a>
            </li>
            <li>
              <a href="salary_staff.php">จัดการเงินเดือนพนักงาน</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="register_new nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#register" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-address-card"></i>
            <span class="nav-link-text">สมัครงาน</span>
          </a>
          <ul class="sidenav-second-level collapse" id="register">
            <li>
              <a href="job_postings.php">ประกาศสมัครงาน</a>
            </li>
            <li>
              <a href="register.php">ผู้ที่มาสมัครงาน</a>
            </li>
          </ul>
        </li>
      </ul>
      <!-- แทบเมนูซ่าย -->

      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" style="color:#fff";>
            <i class="fa fa-fw fa-user-circle-o"></i>Admin
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout
          </a>
        </li>
      </ul>
    </div>
  </nav>
