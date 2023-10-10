<?php
  $menu = "3";
  virtual('/common/layout/header.php');
?>
<section class="content container">
	<h1>Product</h1>
	<style type="text/css">
		.table-responsive * {
			max-width: 100% !important;
			height: auto !important;
			text-size-adjust: 100% !important;
			-webkit-text-size-adjust: 100% !important; 
			-moz-text-size-adjust: 100% !important;
			-ms-text-size-adjust: 100% !important;
			table-layout: fixed !important;
			word-break: normal;
		}
		.table-responsive table {
			width: 100% !important;
		}
	</style>
	<div class="panel">
		<div class="panel-heading">
			<h4 class="text-white" style="font-weight: normal; font-size: 12pt; font-weight: bold; margin: 0;"></h4>
		</div>
		<div class="panel-footer" style="border-top: none; border-bottom: 1px solid #ddd; border-radius: 0; font-size: 10pt;">
			<ul style="list-style: none; margin-left: -40px; line-height: 30px; margin-bottom: 0;">
				<li><i class="fa fa-user"></i> 글쓴이 : <span class='wr_name'></span></li>
				<li><i class="fa fa-calendar"></i>  등록일 : <span class='wr_date'></span></li>
				<li><i class="fa fa-eye"></i> 조회수 : <span class='wr_count'></span></li>
			</ul>
		</div>
		<div class="panel-body" style="padding: 10px; font-size: 10pt; line-height: 20px;">
			<div class="table-responsive wr_contents" style="border: none; width: 100%;"></div>
		</div>
	</div>
</section>
<script>
	$(function(){
		$.ajax({
			url: '/api/product',
			type: 'post',
			dataType: 'json',
			success: function(data){
				$(".wr_name").html(data[0]['wr_name']);
				$(".wr_date").html(data[0]['insert_date']);
				$(".wr_count").html(data[0]['read_cnt']);
				$(".wr_contents").html(data[0]['wr_contents']);
			}
		})
	});
</script>
<?php
  virtual('/common/layout/footer.php');
?>