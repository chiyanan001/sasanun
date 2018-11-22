<?php
include("head.php");
?>
<style>
.index{
	background-color: #fff;
}
</style>
<!------------------------------------------------------Header------------------------------------------------------>

<div class="content-wrapper"> <!-- start1 -->
	<div class="container-fluid"> <!-- start2 -->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<h3>Note</h3>
			</li>
		</ol>
		<hr>
		<div class="card mb-3">
			<div class="card-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						</div>
					</div>
				</div>
				<div class="row">

					<!-- เรียงตาม -->
					<div class=" ">
						<form method=" " name=" " action=" ">
							<input class=" " type=" " id=" " name=" " placeholder=" ">
							<textarea class=" " id=" " name=" " rows=" "></textarea>
							<select class=" " id=" " name=" ">
								<option selected>#</option>
								<option value=" ">#</option>
								<option value=" ">#</option>
								<option value=" ">#</option>
								<option value=" ">#</option>
							</select>
							<button class=" " type=" "  id=" " name=" " value=" ">#</button>
						</form>
					</div>


				</div>
				&nbsp;


				 <div class="row"><!-- กำหนดปุมต่างๆ -->

					<button type="button" class="btn btn-outline-primary"> แก้ไข </button>
					<button type="button" class="btn btn-outline-success"> ตกลง </button>
					<button type="button" class="btn btn-outline-danger">  ลบ </button>
					<button type="button" class="btn btn-outline-dark"> ยกเลิก </button>
					<button type="button" class="btn btn-outline-info">เพิ่มเติม</button>

				  <button type="button" class="btn btn-outline-secondary">Secondary</button>
					<button type="button" class="btn btn-outline-warning">Warning</button>
					<button type="button" class="btn btn-outline-light">Light</button>


					<?php // การตั้งชื่อ

					$id="idAddNews";
					$name="nameAddNews";

					?>






				</div>
			</div>
		</div><!--------------------TheEnd Row-------------------->



		<div class="card mb-3">
			<div class="card-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						</div>
					</div>
				</div>
				<table class="customers_null" >
						<tr>
							<th> News -> News	 </th>
							<th> Profile -> Profile </th>
							<th> Education -> Education </th>
							<th> Application -> Application </th>
						</tr>
						<tr>
							<th> Staff -> Staff	 </th>
							<th> Job -> position </th>
							<th> Job -> department </th>
							<th> User -> User </th>
						</tr>
						<tr>
							<th> Role -> Role	 </th>
							<th> Permission -> Permission </th>
							<th> Vacation -> Vacation </th>
							<th> Vacation -> VacationType </th>
						</tr>
						<tr>
							<th> Salary -> Salary	 </th>
							<th> Salary -> SalaryHistory </th>
							<th> 1111 -> 1111 </th>
							<th> 1111 -> 1111 </th>
						</tr>
				</table>



			</div>
		</div><!--------------------TheEnd Row-------------------->





	</div> <!-- stop2 -->

















	<?php
	include("footer.php");
	?>
