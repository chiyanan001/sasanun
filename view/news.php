<?php
include("head.php");
include("../model/class_news.php");
// include("../controller/news.php");
?>
<style>
.news{
	background-color: #fff;
}
</style>
<!------------------------------------------------------Header------------------------------------------------------>

<div class="content-wrapper"> <!-- start1 -->
	<div class="container-fluid"> <!-- start2 -->

		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<h3>ข่าวสาร</h3>
			</li>
		</ol>
		<hr>
		<div class="card mb-3">
			<div class="card-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label>รายละเอียด</label>
							<textarea class="form-control" id="idAddNews" rows="3"></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<table class="customers_null" >
						<tr>
							<td></td>
							<td class="td r">
								<a data-toggle="modal" data-target="#showTabAdd" onclick="showTabNews()">
									<button class="btn btn-outline-success" type="submit">ตกลง</button>
								</a>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div><!--------------------TheEnd Row-------------------->

		<div class="card mb-3">
			<div class="card-header">รายละเอียด</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="customers_null" >
						<?php
						// $news = new ControllerNews();
						$news = new News();
						$result = $news->showNews();
						if($result == "Error"){
							echo "Error";
						}
						else{
							foreach ($result as $row) {
								?>
								<tr>
									<td>
										ประจำวันที่ <?php echo $row['newsDate']; ?>&nbsp;
										<?php echo $row['newsList']; ?>
									</td>
									<td class="td r">
										<a data-toggle="modal" data-target="#123">
											<button type="button" class="btn btn-outline-primary">แก้ไข</button>
										</a>
										<a data-toggle="modal" data-target="#showTabDelete" >
											<button class="btn btn-outline-danger" type="text" id="<?php echo $row['news_id'];?>" name="button" value="<?php echo $row['news_id'];?>" onclick="addDeleteById(<?php echo $row['news_id'];?>)">ลบ</button>
										</a>
									</td>
								</tr>
							<?php    } } ?>
						</table>
					</div>
				</div>
			</div><!--------------------TheEnd Row-------------------->





		</div> <!-- stop2 -->

		<div class="modal fade" id="showTabAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">รายละเอียด</h5>
						<button class="close" type="button" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<!-- <form method="POST" action="../controller/news.php"> -->
					<div class="modal-body">
						<textarea class="form-control" id="idShowAddNews" name="newsList" rows="3"></textarea>
					</div>
					<div class="modal-footer">
						<button class="btn btn-success" type="button" name="button" value="" onclick="addNews()" data-dismiss="modal">ตกลง</button>
						<button class="btn btn-secondary" type="button" data-dismiss="modal" >ยกเลิก</button>
					</div>
					<!-- </form> -->
				</div>
			</div>
		</div>  <!--------------------TheEnd Row-------------------->

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
						<!-- <textarea class="form-control" id="" rows="3"></textarea> -->
						<h1 class="alert alert-danger" role="alert">
							<i class="fa fa-ban" aria-hidden="true"></i> อยู่ในขึ้นตอนการพัฒนา
						</h1>
					</div>
					<div class="modal-footer">
						<button class="btn btn-success" type="button">ตกลง</button>
						<button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
					</div>
				</div>
			</div>
		</div>  <!--------------------TheEnd Row-------------------->

		<div class="modal fade" id="showTabDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">ต้องการลบ</h5>
						<button class="close" type="button" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">คุณต้องการลบข่าวนี้ใช่ไหม</div>
					<div class="modal-footer">
						<form method="POST" action="Controller/news.php">
							<input type="text" id="idNewsId" hidden readonly>
							<button class="btn btn-success" type="button" id="" name="button" onclick="addDelete()" data-dismiss="modal">ตกลง</button>
						</form>
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
