<!-- 애지중지 대박나세요 -->
<?php
	$menu = "1";
  virtual('/common/layout/header.php');
?>
<link href="/common/css/index.css" rel="stylesheet">
<script type="text/javascript">
	$(function(){
		fn_main();
	});
	$(window).resize(function(){
		fn_main();
	});
	function fn_main(){
		if ($(window).width() > 768){
			$(".d-block").attr("src","http://placehold.it/320x180");
		}else{
			$(".d-block").attr("src","http://placehold.it/320x300");
		}	
	}
	setTimeout(function(){
		$(".carousel-indicators li").eq(1).click();
	},3000);
 //쿠키생성
 function setCookie(cName, cValue, cDay){
		var expire = new Date();
		expire.setDate(expire.getDate() + cDay);
		cookies = cName + '=' + escape(cValue) + '; path=/ '; // 한글 깨짐을 막기위해 escape(cValue)를 합니다.
		if(typeof cDay != 'undefined') cookies += ';expires=' + expire.toGMTString() + ';';
		document.cookie = cookies;
	}
	//쿠키값가져오기
	function getCookie(cName) {
		cName = cName + '=';
		var cookieData = document.cookie;
		var start = cookieData.indexOf(cName);
		var cValue = '';
		if(start != -1){
			start += cName.length;
			var end = cookieData.indexOf(';', start);
			if(end == -1)end = cookieData.length;
			cValue = cookieData.substring(start, end);
		}
		return unescape(cValue);
	}
	function fn_openSel(n){
		var layer = $(".pop-layer").eq(0).clone();
		$(".layer").append(layer);
		layer.attr("id","popup-" + n);
		layer.find(".inner_frm").attr("src", "popup.asp?idx=" + n);
		layer.attr("id","layer-" + n);
		layer.find(".inner_frm").attr("id","frame-" + n);
		layer.fadeIn();
	}	
</script>
<style type="text/css">
	.d-block{
		width: 100%;
		visibility: hidden;
	}
	.d-black{
		width: 100%; height: 100%; top: 0; left: 0; 
		/*position: absolute; */
		background-size: cover;
		background-position: bottom center;
	}
	.pop-layer {display: none; z-index: 4; position: absolute; background-color:#fff; border: 5px solid #c8c8c8; z-index: 10; padding: 0; overflow: auto; max-height: auto; }
	@media (max-width: 768px) {
		.content{
			margin-top: 5%;
		}
	}
	.row.row-eq-height {
		display: -webkit-box;
		display: -webkit-flex;
		display: -ms-flexbox;
		display: flex;
	}	
	.loader{
		/*display: block;*/
		display: none;
	}	
</style>
<div class="layer" id="">
	<div id="" class="pop-layer" style="overflow: auto; -webkit-overflow-scrolling:touch; ">
		<iframe src="" class="inner_frm" style="width: 100%;" frameborder="0"></iframe>
	</div> 
</div>
<section class="content container">
</section>
<?php
  virtual('/common/layout/footer.php');
?>