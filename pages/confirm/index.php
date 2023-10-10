<?php
	$menu = "5";
  virtual('/common/layout/header.php');
?>
<style type="text/css">
.card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
	/*border: 1px solid #ddd;*/
    border-radius: 5px;
	margin-bottom: 20px;
}
.card-header {
    padding: 1rem 1.25rem;
    margin-bottom: 0;
    /*background-color: rgba(0,0,0,.03);*/
	background-color: <?=$color?>;
	color: #fff;
    border-bottom: 1px solid rgba(0,0,0,.125);
	border: 1px solid <?=$color?>;
	border-radius: 3px 3px 0 0;
}
.card-body {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 10px 5px 5px;
	border-left: 1px solid #ddd;
	border-right: 1px solid #ddd;
}
.card-footer {
    padding: .75rem 1.25rem;
    background-color: rgba(0,0,0,.03);
    border-top: 1px solid rgba(0,0,0,.125);
	border: 1px solid #ddd;
	border-radius: 0 0 3px 3px;
}

</style>
<script type="text/javascript">
	$(function(){
		fn_scroll();
	});
	$(window).resize(function(){
		fn_scroll();
	});
	function fn_scroll(){
		if ($(window).width() < 991){
			$(".confirm_info").css("max-height", 200);
		}else{
			$(".confirm_info").css("max-height", $(".card_img").height() + 130);
			setTimeout(function(){
				$(".confirm_info").css("max-height", $(".card_img").height() + 130);
			},100);
		}
	}
	function fn_submit(){
		if ($("[name='all_agree']").is(":checked") == false){
			alert("약관에 동의하여 주시기 바랍니다.");
			$("[name='all_agree']").focus();
			return false;
		}
		location.href="write";
		//alert('준비중입니다.');
	}
</script>
<section class="content container">
	<h1>Confirm</h1>
	<div class="row">	
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<i class="fa fa-edit"></i> WITH.JUNGWOO 예약신청
				</div>
				<div class="card-body" style="padding: 15px;">
					<div class="confirm_info" style="border: 1px solid #ddd; padding: 10px; font-size: 10pt; background: #f9f9f9; overflow-x: hidden; overflow-y: scroll;">
<br>* WITH.JUNGWOO 계약 약관동의서 *<br><br>
제 1조. 【계약 신청서】<br><br>
계약 신청서는 서비스 이용자가 서비스를 이용을 원하는 날짜, 시간, 장소 등을 확약하는 약정서입니다. 서비스 이용자는 WITH.JUNGWOO가 제공하는 서비스에 대하여 충분한 상담을 받고 정확히 숙지하여 최종 결정하였으며, 제공되는 서비스가 상담내용에 반하지 않는 한 본 계약 신청서의 내용에 따릅니다.<br><br><br>
제 2조. 【정보 제공 동의】<br><br>
1. WITH.JUNGWOO는 서비스를 원활히 제공하기 위한 정보를 서비스 이용자에게 요구할 수 있으며, 서비스 이용자는 필요한 정보를 제공하는데 동의합니다.<br>
2. WITH.JUNGWOO는 제공 받은 서비스 이용자의 정보를 서비스 제공 목적 외에 이용하지 아니하며, WITH.JUNGWOO가 서비스 제공 목적 외의 활동에 해당 정보를 활용하였을 경우 서비스 이용자는 WITH.JUNGWOO에 이의를 제기 할 수 있습니다.<br><br><br>
제 3조. 【계약금】<br><br>
1. 계약금은 200,000원(이십만 원) 입금을 원칙으로 하며, 계약금 입금은 계약 신청서 제출 이후 24시간 이내로 합니다.<br>
2. 서비스 이용자는 계약금 입금 후 3일 내에 환불(계약의 무효)을 요청할 수 있으며, 계약금 입금 3일 이후에는 환불되지 않습니다.<br><br><br>
제 4조. 【계약의 무효】<br><br>
계다음 각호의 경우 WITH.JUNGWOO는 계약 신청서를 파기할 수 있으며, 그 경우 WITH.JUNGWOO와 서비스 이용자의 계약은 무효가 됩니다.<br><br>
1. 계약 신청서가 허위로 작성된 경우<br>
2. 서비스 이용자로부터 제2조에 따른 서비스 제공을 위한 충분한 정보가 제공되지 아니한 경우<br>
3. 서비스 이용자가 제3조에 따른 계약금 입금 기간 내에 계약금을 입금하지 아니한 경우.<br><br><br>
제 5조. 【스케줄 확인】<br><br>
WITH.JUNGWOO는 서비스 이용자의 계약 신청서 제출과 계약금 입금 여부를 확인하고 서비스 이용자가 서비스를 받기 원하는 날짜, 시간, 장소 등을 확정하여 서비스 이용자에게 확정된 내용을 고지 합니다.<br><br><br>
제 6조. 【계약의 성립】<br><br>
서비스 이용자가 서비스 제공을 위한 서비스 이용자의 정보를 제공하고 제3조에 따른 계약금을 입금한 후, WITH.JUNGWOO가 제5조에 따라 확정된 내용을 서비스 이용자에게 고지함으로써 WITH.JUNGWOO와 서비스 이용자 간에 서비스 제공 계약 관계가 성립합니다.<br><br><br>
제 7조. 【잔금 입금】<br><br>
1. 서비스 이용자는 WITH.JUNGWOO과의 상담 과정에서 별도로 명확하게 논의되지 아니하는 한, 최소 서비스 제공일 7일 이전에 잔금을 입금하여야 합니다.<br>
2. 서비스 이용자의 잔금 입금이 과도하게 지연될 경우에는 계약이 파기될 수 있으며, 위약금이 발생합니다.<br><br><br>
제 8조. 【촬영 규정】<br><br>
WITH.JUNGWOO는 예식장에 포함된 필수 원판 또는 스냅 외의 타스냅업체와는 절대 함께 촬영하지 않습니다.<br><br><br><br>
제 9조. 【계약의 파기】<br><br>
WITH.JUNGWOO는 다음 각호를 포함한 서비스 이용자의 귀책사유가 발생하는 경우 계약을 파기할 수 있으며, 위약금이 발생합니다.<br><br>
1. 서비스 이용자가 잔금 입금 날짜를 과도하게 지연하는 경우<br>
2. 서비스 이용자가 계약된 상품을 타인에게 양도하는 경우<br>
3. 계약 확정 이후 서비스 이용자의 개인적 사유로 인하여 스케줄을 취소하는 경우<br>
4. 서비스 이용자가 WITH.JUNGWOO의 촬영규정에 위배되는 행위를 한 경우<br><br><br>
제 10조. 【위약금】<br><br>
제10조에 따라 서비스 이용자의 귀책사유에 의하여 계약이 파기되는 경우 다음 각호와 같은 위약금이 발생합니다.<br><br>
1. 촬영 확정일로부터 6개월 이내 취소시: 계약금을 제외한 총 상품 금액의 30%<br>
2. 촬영 확정일로부터 4개월 이내 취소시: 계약금을 제외한 총 상품 금액의 60%<br>
3. 촬영 확정일로부터 2개월 이내 취소시: 계약금을 제외한 총 상품 금액의 100%<br><br><br>
제 11조. 【원본 보존】<br><br>
1. WITH.JUNGWOO는 서비스 이용자의 데이터를 배송 후 1개월간 보관합니다.<br>
2. 서비스 이용자는 상품 수령 후 반드시 데이터를 백업하여야 하며, 수령 후 14일 이내 데이터의 분실 또는 상품에 문제가 있는 경우 필요한 조치를 받을 수 있습니다. 다만, 경우에 따라 추가적인 비용이 발생할 수 있습니다.<br>
3. WITH.JUNGWOO는 앨범 출고로부터 14일이 초과하면 서비스 이용자의 원본 데이터를 삭제할 수 있으며, 그 경우 WITH.JUNGWOO는 서비스 이용자에 대하여 원본 데이터 삭제로 인하여 어떠한 책임도 지지 않습니다.<br><br><br>
제 12조. 【수정 작업】<br><br>
1. 납품된 앨범 및 사진의 수정 작업은 제3자가 보아도 앨범 및 사진의 불량상태가 명확한 경우에만 진행이 가능합니다.<br>
2. 수정 작업은 서비스 이용자가 상품을 수령한 때로부터 1주일 이내에 수정을 요청한 경우에만 가능합니다.<br><br><br>
제 13조. 【보상 구정】<br><br>
소비자피해보상규정에 의거하여 촬영원본의 멸실 및 재해로 인한 사고 발생 시 WITH.JUNGWOO의 피해보상은 결과물에 대한 손실 정도에 따라 상호 합의하에 총 상품 금액의 2배까지 배상합니다. 다만, 서비스 이용자의 단순변심 또는 사진 스타일에 대한 불만족 및 촬영현장(예식장, 모든 촬영대상인물 등)의 문제로 발생한 사고는 환불 및 기타보상 대상에서 제외합니다.<br><br><br>
제 14조. 【저작권 및 초상권】<br><br>
1. WITH.JUNGWOO에 상품제작을 위탁한 서비스 이용자와 WITH.JUNGWOO는 상품에 대한 저작권을 공동소유하며, 해당 상품에 포함된 모든 인물의 초상권은 서비스 이용자에게 있습니다. <br>
2. WITH.JUNGWOO는 해당 상품의 사진을 해당 홈페이지(http://with-jungwoo.com/) 및 해당 블로그 / 인스타그램에 게시 할 수 있으며, 서비스 이용자가 사진의 게시를 불허한 경우 조속히 해당 게시내용을 삭제합니다.<br><br><br>
WITH.JUNGWOO의 모든 상품계약은 본 촬영약관에 대한 동의 여부를 확인 후 진행되며, 진행이 확정된 모든 상품은 촬영약관에 동의한 것으로 간주됩니다.
					</div>
					<div class="text-right" style="margin-top: 5px;">
						<label style="font-size: 10pt; font-weight: normal; cursor: pointer;"><input type="checkbox" name="all_agree" value="1" style="position: relative; top: 4px;"> 위 내용을 확인하였습니다.</label>
					</div>
				</div>
				<div class="card-footer text-center">
					<button onclick="fn_submit();" type="button" class="btn" style="background: <?=$color?>; border-color: <?=$color?>; color: #fff; margin: 3px 0;">
						<i class="fa fa-edit"></i> 신청하기
					</button>
				</div>
			</div>
		</div>
		<style type="text/css">
			input[type="checkbox"]:checked:after, .checkbox input[type="checkbox"]:checked:after, .checkbox-inline input[type="checkbox"]:checked:after {
				background-color: <?=$color?>;
				border-color: <?=$color?>;
			}
			input[type="checkbox"]:focus:after, .checkbox input[type="checkbox"]:focus:after, .checkbox-inline input[type="checkbox"]:focus:after {
				border-color: <?=$color?>;
			}
		</style>
		<script type="text/javascript">
			$(document).on("keyup",".password",function(){
				$(this).val($(this).val().replace(/[^0-9A-Z,]/gi,""));			
			});	
			function fn_login(){
				if (!$("[name='confirm_id']").val()){
					alert("신랑 혹은 신부 성함을 입력해 주세요.");
					$("[name='confirm_id']").focus();
					return false;
				}
				if (!$("[name='confirm_pw']").val()){
					alert("비밀번호를 입력해 주세요.");
					$("[name='confirm_pw']").focus();
					return false;
				}
				var formData = $("[name='thisform']").serialize();
				$.ajax({
					url			: "login",
					type		: "post",
					data		: formData,
					contentType	: "application/x-www-form-urlencoded; charset=utf-8",
					timeout		: 100000,
					beforeSend	: function(){
						$('.wrap-loading').removeClass('display-none');
					},
					complete:function(){
						$('.wrap-loading').addClass('display-none');
					},
					error:function(request,status,error){
						alert("code:" +  request.status + "\n" + "message:" + request.responseText + "\n" + "error:" + error);
					},
					success		: function(data) {
						var num = data.split("|");
						if (num[0] == "1"){
							alert("입력하신 성함이 조회되지 않습니다.");
							$("[name='confirm_id']").focus();
							return false;
						} else if (num[0] == "2"){
							alert("비밀번호가 일치하지 않습니다.");
							$("[name='confirm_pw']").focus();
							return false;
						} else if (num[0] == "3"){
							alert('정상적으로 로그인되었습니다.');
							location.href='modify/?idx=' + num[1];
						} else if (num[0] == "4"){
							alert('정상적으로 로그인되었습니다.');
							location.href='list';
						}
					}
				});
			}
		</script>
		<form name="thisform" method="post" action="">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<i class="fa fa-search"></i> 내 예약신청서 확인
				</div>
				<div class="card-body">
					<img src="/common/images/all_ring.jpg" style="width: calc(100% - 20px); margin: 10px;" class="card_img">
					<div class="form-group col-md-12">
						<label class="control-label" for="inputSuccess4">성함</label>
						<div class="input-group input-group-bottom">
							<span class="input-group-addon"><i class="fas fa-user"></i></span>
							<input type="text" name="confirm_id" maxlength="20" value="" class="form-control"  >
						</div>
					</div>
					<div class="form-group col-md-12">
						<label class="control-label" for="inputSuccess4">비밀번호</label>
						<div class="input-group input-group-bottom">
							<span class="input-group-addon"><i class="fas fa-lock"></i></span>
							<input type="password" name="confirm_pw" maxlength="20" value="" class="form-control password"  >
						</div>
					</div>
				</div>
				<div class="card-footer text-center">
					<button onclick="fn_login();" type="button" class="btn" style="background: <?=$color?>; border-color: <?=$color?>; color: #fff; margin: 3px 0;">
						<i class="fa fa-search"></i> 확인하기
					</button>
				</div>
			</div>
		</div>
		</form>
	</div>
</section>
<?php
  virtual('/common/layout/footer.php');
?>