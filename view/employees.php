<?php
include("head.php");
include("../model/class_news.php");
?>
<style>
.employees{
	background-color: #fff;
}
</style>
<!------------------------------------------------------Header------------------------------------------------------>

<div class="content-wrapper"> <!-- start1 -->
	<div class="container-fluid"> <!-- start2 -->

		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<h3>รายชื่อพนักงาน</h3>
			</li>
		</ol>
		<hr>

		<div class="card mb-3">
			<div class="card-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<table class="customers_null" >
								<tr>
									<th>รหัสพนักงาน</th>
									<th>ชื่อ-นามสกุล</th>
									<th>แผนกงาน</th>
									<th>ตำแหน่งงาน</th>
								</tr>
								<tr>
									<td>
										<div class="form-group">584259001</div>
									</td>
									<td>
										<div class="form-group">นายก้องเกียรติ์ ภูศรี</div>
									</td>
									<td>
										<div class="form-group">ฝ่ายโดยสาร</div>
									</td>
									<td>
										<div class="form-group">ผู้จัดการ</div>
									</td>
									<td>
										<div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
											<div class="btn-group mr-2" role="group" aria-label="First group">
												<a data-toggle="modal" data-target="#showTab" >
													<div class="form-group">
													<button type="button" class="btn btn-outline-primary">แก้ไข</button>
												</div>
												</a>
											</div>
											<div class="btn-group" role="group" aria-label="Second group">
												<a data-toggle="modal" data-target="#showTabDelete" >
													<div class="form-group">
													<button type="button" class="btn btn-outline-info">เพิ่มเติม</button>
												</div>
												</div>
											</a>
										</div>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div/>  <!--------------------TheEnd Row-------------------->








	</div> <!-- stop2 -->


	<div class="modal fade bd-example-modal-lg" id="showTabDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">การทำงาน (Thanapon) </h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<table class="customers_null" >
						<tr>
							<th>เงินเดือน</th>
							<th>สถานะการทำงาน</th>
							<th>สถานะที่ทำงาน</th>
						</tr>
						<tr>
							<td>20000</td>
							<td>กำลังทำงาน</td>
							<td>85 ถนน มาลัยแมน ตำบล วังตะกู อำเภอเมืองนครปฐม นครปฐม 73000</td>
						</tr>
						<tr>
							<th>วันที่เริ่มต้นทำงาน</th>
							<th>วันที่สิ่นสุดการทำงาน</th>
						</tr>
						<tr>
							<td>2018-11-01</td>
							<td> - </td>
						</tr>
					</table>
				</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
				</div>
			</div>
		</div>
	</div> <!--------------------TheEnd Row-------------------->

	<div class="modal fade bd-example-modal-lg" id="showTab" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">การทำงาน (Thanapon) </h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<h1 class="alert alert-danger" role="alert">
						<i class="fa fa-ban" aria-hidden="true"></i> อยู่ในขึ้นตอนการพัฒนา
					</h1>
				</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
				</div>
			</div>
		</div>
	</div> <!--------------------TheEnd Row-------------------->












	<script type="text/javascript" src="../js/news.js"></script>
	<script type="text/javascript" language="JavaScript">











	</script>




	<?php
	include("footer.php");
	?>
