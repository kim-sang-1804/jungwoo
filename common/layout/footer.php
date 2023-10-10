</div>
<style type="text/css">
	@media (max-width: 768px){
		footer{
			font-size: 8.5pt;
		}	
	}
</style>
<footer style="border-top: 1px solid #ddd; color: #999; padding: 10px 0; margin-top: 10px; ">
	<div class="container text-center">
		<!-- Copyright ⓒ 2019 <a href="http://all4you.co.kr" style="color: #000; font-weight: bold;">WITH.JUNGWOO</a> Studio. All rights reserved. -->
		<b style="color: #000;">상호명</b> WITH.JUNGWOO　<b style="color: #000;">사업자등록번호</b> 758-24-01007　<b style="color: #000;">대표명</b> 강정우
	</div>
</footer>
<div class="loader">
	<div class="load-title">
		<!-- <img alt="loader" src="../images/logo/logo.png"><div class="load-circle"></div> -->
	</div>
</div>
<script>
	function fn_sticky(){
		if ($(window).width() < 763){
			$("#navbar").addClass("sticky");
			$(".content-wrap").css("margin-top", "40px");
		}else{
			if (window.pageYOffset > 110) {
				if ($(".content-wrap").height() > 1000){
					$("#navbar").addClass("sticky");
				}
			} else {
				$("#navbar").removeClass("sticky");
				$(".content-wrap").css("margin-top", "0");
			}
		}
	}
	function fn_footer() {
		var height = $(window).height() - $("footer").height() - $(".header").height() - $("#navbar").height();
		if ($(window).width() < 768){
			$(".content-wrap").css("min-height",height - 2);
			$(".d-black").css("min-height",height - 60);
		}else{
			$(".content-wrap").css("min-height",height - 32);
			$(".d-black").css("min-height",height - 80);
		}
	}

	$(function(){
		fn_footer();
		fn_sticky();
		$(window).scroll(function(){
			fn_sticky();
		});
	});
	$(window).resize(function(){
		fn_footer();
		fn_sticky();
	});
</script>
</body>
</html>