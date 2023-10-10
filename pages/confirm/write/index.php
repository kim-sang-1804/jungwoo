<?php
	$menu = "5";
  virtual('/common/layout/header.php');
?>
<style type="text/css">
	label{
		position: relative;
		top: 4px;
		font-weight: normal;
	}
	label.check-label{
		position: relative;
		top: -1px;				
	}
	input[type='radio']{
		position: relative;
		top: -2px;
	}
	input[type='checkbox']{
		position: relative;
		top: 4px;
	}
	.info-board{
		display: none;
	}
	input[type="radio"]:checked:after, .radio input[type="radio"]:checked:after, .radio-inline input[type="radio"]:checked:after {
		border-color: #000;
	}
	input[type="radio"]:before, .radio input[type="radio"]:before, .radio-inline input[type="radio"]:before {
		background-color: #000;
	}
	input[type="checkbox"]:checked:after, .checkbox input[type="checkbox"]:checked:after, .checkbox-inline input[type="checkbox"]:checked:after {
		background-color: #000;
		border-color: #000;
	}
	input[type="checkbox"]:checked:after,
	.checkbox input[type="checkbox"]:checked:after,
	.checkbox-inline input[type="checkbox"]:checked:after {
	  background-color: #000;
	  border-color: #000;
	}
	input[type="checkbox"]:focus:after,
	.checkbox input[type="checkbox"]:focus:after,
	.checkbox-inline input[type="checkbox"]:focus:after {
	  border-color: #000;
	}
	div.form-control{
		height: auto;
	}
	.snap{
		display: none;
	}
</style>
<script type="text/javascript">
	$(function(){
		$("#datepicker").datepicker({
            prevText: '이전 달',
            nextText: '다음 달',
            monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
            monthNamesShort: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
            dayNames: ['일', '월', '화', '수', '목', '금', '토'],
            dayNamesShort: ['일', '월', '화', '수', '목', '금', '토'],
            dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
            showMonthAfterYear: false,
            yearSuffix: '년',
            dateFormat: "yy-mm-dd",
            defaultDate: "+1w",
            changeYear: true,
            changeMonth: true
		});

		$("[name='agree1']").click(function(){
			if ($("[name='agree1']").eq(0).is(":checked")){
				$(this).parent().parent().parent().parent().find(".info-board").slideDown();
			}else{
				$(this).parent().parent().parent().parent().find(".info-board").slideUp();
			}
		});
		$("[name='agree2']").click(function(){
			if ($("[name='agree2']").eq(0).is(":checked")){
				$(this).parent().parent().parent().parent().find(".info-board").slideDown();
			}else{
				$(this).parent().parent().parent().parent().find(".info-board").slideUp();
			}
		});
		$("[name='agree3']").click(function(){
			if ($("[name='agree3']").eq(0).is(":checked")){
				$(this).parent().parent().parent().parent().find(".info-board").slideDown();
			}else{
				$(this).parent().parent().parent().parent().find(".info-board").slideUp();
			}
		});
		$("[name='product']").click(function(){
			if ($("[name='product']").eq(0).is(":checked")){
				$(this).parent().parent().parent().parent().find(".snap").eq(0).slideDown();
			}else{
				$(this).parent().parent().parent().parent().find(".snap").eq(0).slideUp();
				$("[name='product1_1']").prop("checked",false);
				$("[name='product1_2']").prop("checked",false);
				$("[name='product1_3']").prop("checked",false);
				$("[name='product1_4']").prop("checked",false);
				$("[name='product1_5']").prop("checked",false);
			}
			if ($("[name='product']").eq(1).is(":checked")){
				$(this).parent().parent().parent().parent().find(".snap").eq(1).slideDown();
			}else{
				$(this).parent().parent().parent().parent().find(".snap").eq(1).slideUp();
				$("[name='product2_1']").prop("checked",false);
			}
			if ($("[name='product']").eq(2).is(":checked")){
				$(this).parent().parent().parent().parent().find(".snap").eq(2).slideDown();
			}else{
				$(this).parent().parent().parent().parent().find(".snap").eq(2).slideUp();
				$("[name='product3_1']").prop("checked",false);
			}
		});
	});
</script>
<script type="text/javascript">
	function fn_submit(){
		if (!$("[name='subject']").val()){
			alert("제목을 입력해 주세요.");
			$("[name='subject']").focus();
			return false;
		}
		if (!$("[name='password']").val()){
			alert("비밀번호를 입력해 주세요.");
			$("[name='password']").focus();
			return false;
		}
		if ($("[name='password']").val().length != 4){
			alert('비밀번호를 4자리로 입력해 주세요.');
			$("[name='password']").focus();
			return false;
		}
		if (!$("[name='cf_password']").val()){
			alert("비밀번호를 다시 입력해 주세요.");
			$("[name='cf_password']").focus();
			return false;
		}
		if ($("[name='password']").val() != $("[name='cf_password']").val()){
			alert("비밀번호가 일치하지 않습니다.");
			$("[name='cf_password']").focus();
			return false;
		}
		if (!$("[name='br_name']").val()){
			alert("신부님 성함을 입력해 주세요.");
			$("[name='br_name']").focus();
			return false;
		}
		if (!$("[name='br_tel1']").val()){
			alert("신부님 연락처를 입력해 주세요.");
			$("[name='br_tel1']").focus();
			return false;
		}
		if (!$("[name='br_tel2']").val()){
			alert("신부님 연락처를 입력해 주세요.");
			$("[name='br_tel2']").focus();
			return false;
		}
		if (!$("[name='br_tel3']").val()){
			alert("신부님 연락처를 입력해 주세요.");
			$("[name='br_tel3']").focus();
			return false;
		}
		if (!$("[name='gr_name']").val()){
			alert("신랑님 성함을 입력해 주세요.");
			$("[name='gr_name']").focus();
			return false;
		}
		if (!$("[name='gr_tel1']").val()){
			alert("신랑님 연락처를 입력해 주세요.");
			$("[name='gr_tel1']").focus();
			return false;
		}
		if (!$("[name='gr_tel2']").val()){
			alert("신랑님 연락처를 입력해 주세요.");
			$("[name='gr_tel2']").focus();
			return false;
		}
		if (!$("[name='gr_tel3']").val()){
			alert("신랑님 연락처를 입력해 주세요.");
			$("[name='gr_tel3']").focus();
			return false;
		}
		if (!$("[name='email']").val()){
			alert("대표 이메일을 입력해 주세요.");
			$("[name='email']").focus();
			return false;
		}

		if (!$("[name='shot_venue']").val()){
			alert("촬영장소를 입력해 주세요.");
			$("[name='shot_venue']").focus();
			return false;
		}
		if (!$("[name='dress_shop']").val()){
			alert("드레스샵 이름을 입력해 주세요.");
			$("[name='dress_shop']").focus();
			return false;
		}
		if (!$("[name='makeup_shop']").val()){
			alert("메이크업샵 이름을 입력해 주세요.");
			$("[name='makeup_shop']").focus();
			return false;
		}
		if (!$("[name='pr_name']").val()){
			alert("예약금 입금자명을 입력해 주세요.");
			$("[name='pr_name']").focus();
			return false;
		}
		if (!$("[name='wedding_d']").val()){
			alert("예식날짜를 입력해 주세요.");
			$("[name='wedding_d']").focus();
			return false;
		}
		if (!$("[name='wedding_h']").val()){
			alert("예식시간을 입력해 주세요.");
			$("[name='wedding_h']").focus();
			return false;
		}
		if (!$("[name='wedding_m']").val()){
			alert("예식시간을 입력해 주세요.");
			$("[name='wedding_m']").focus();
			return false;
		}
		if (!$("[name='agree1']").eq(0).is(":checked")){
			alert("환불규정에 동의하여 주세요.");
			$("[name='agree1']").eq(0).focus();
			return false;
		}
		if (!$("[name='agree2']").eq(0).is(":checked")){
			alert("책임한계에 동의하여 주세요.");
			$("[name='agree2']").eq(0).focus();
			return false;
		}
		if (!$("[name='agree3']").eq(0).is(":checked")){
			alert("촬영규정에 동의하여 주세요.");
			$("[name='agree3']").eq(0).focus();
			return false;
		}

		if (!$("[name='att_agree']").is(":checked")){
			alert("상품 구성을 선택하여 주세요.");
			$("[name='att_agree']").eq(0).focus();
			return false;
		}
		if (!$("[name='product']").is(":checked")){
			alert("촬영하실 상품을 하나 이상 선택하여 주세요.");
			$("[name='product']").eq(0).focus();
			return false;
		}
		if ($("[name='product']").eq(0).is(":checked")){
			if (!$("[name='product1_1']").is(":checked")){
				alert("촬영자를 선택해 주세요.");
				$("[name='product1_1']").eq(0).focus();
				return false;
			}
			if (!$("[name='product1_2']").is(":checked")){
				alert("2인촬영 여부를 선택해 주세요.");
				$("[name='product1_2']").eq(0).focus();
				return false;
			}
			if (!$("[name='product1_3']").is(":checked")){
				alert("메이크업샵 촬영 여부를 선택해 주세요.");
				$("[name='product1_3']").eq(0).focus();
				return false;
			}
			if (!$("[name='product1_4']").is(":checked")){
				alert("폐백 촬영 여부를 선택해 주세요.");
				$("[name='product1_4']").eq(0).focus();
				return false;
			}
			if (!$("[name='product1_5']").is(":checked")){
				alert("원판 촬영 여부를 선택해 주세요.");
				$("[name='product1_5']").eq(0).focus();
				return false;
			}
		}
		if ($("[name='product']").eq(1).is(":checked")){
			if (!$("[name='product2_1']").is(":checked")){
				alert("스튜디오 상퓸을 선택해 주세요.");
				$("[name='product2_1']").eq(0).focus();
				return false;
			}
		}
		if ($("[name='product']").eq(2).is(":checked")){
			if (!$("[name='product3_1']").is(":checked")){
				alert("가봉스냅 작가를 선택해 주세요.");
				$("[name='product3_1']").eq(0).focus();
				return false;
			}
		}

		var f = document.write_Frm;
		if (confirm("제출하시겠습니까?")){
			var formData = $("[name='write_Frm']").serialize();
			$.ajax({
				url			: "Confirm_ok.asp",
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
					alert('정상적으로 처리되었습니다.');
					location.href='confirm.asp';
					//alert(data);
				}
			});
		}
	}
</script>
<section class="content container">	
	<form name="write_Frm" action="" method="post">
	<input type="hidden" name="mode" value="insert">
	<div class="panel">
		<div class="panel-heading">
			<h4 class="text-white" style="font-weight: normal; font-size: 12pt; font-weight: bold; margin: 0;">개인 정보</h4>
		</div>
		<div class="panel-body">
			<div class="form-group col-md-6">
				<label class="control-label" for="inputSuccess4">제목</label>
				<div class="input-group input-group-bottom">
					<span class="input-group-addon"><i class="fas fa-user-edit"></i></span>
					<input type="text" name="subject" value="" class="form-control"  >
				</div>
			</div>
			<div class="form-group col-md-3 col-xs-6">
				<label class="control-label" for="inputSuccess4">비밀번호</label>
				<div class="input-group input-group-bottom" style="width: 100%;">
					<span class="input-group-addon"><i class="fa fa-lock"></i></span>
					<input type="password" name="password" value="" maxlength="4" style="IME-MODE:active" class="form-control" >
				</div>
			</div>
			<div class="form-group col-md-3 col-xs-6">
				<label class="control-label" for="inputSuccess4">비밀번호 확인</label>
				<div class="input-group input-group-bottom" style="width: 100%;">
					<span class="input-group-addon"><i class="fa fa-lock"></i></span>
					<input type="password" name="cf_password" value="" maxlength="4" style="IME-MODE:active" class="form-control" >
				</div>
			</div>
			<div class="form-group col-md-6">
				<label class="control-label" for="inputSuccess4">신부님 성함</label>
				<div class="input-group input-group-bottom">
					<span class="input-group-addon"><i class="fas fa-female" style="width: 16px;"></i></span>
					<input type="text" name="br_name" value="" class="form-control"  >
				</div>				
			</div>
			<style type="text/css">
				.form-select option{
					font-size: 10pt;
					padding: 25px;
				}
			</style>
			<div class="form-group col-md-6">
				<label class="control-label" for="inputSuccess4">신부님 연락처</label>
				<div class="input-group input-group-bottom">
					<span class="input-group-addon"><i class="fa fa-phone"></i></span>
					<select class="form-control form-select" name="br_tel1" style="width: 33.3%; display: inline-block;"/>
						<option value="">:: 선택 ::</option>
						<option value="010">010</option>
						<option value="011">011</option>
						<option value="016">016</option>
						<option value="017">017</option>
						<option value="018">018</option>
						<option value="019">019</option>
					</select>
					<input type="text" class="form-control" name="br_tel2" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" maxLength="4" style="width: 33.3%; display: inline-block; border-left: none;" placeholder="" value="" />
					<input type="text" class="form-control" name="br_tel3" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" maxLength="4" style="width: 33.3%; display: inline-block; border-left: none;" placeholder="" value="" />
				</div>
			</div>
			<div class="form-group col-md-6">
				<label class="control-label" for="inputSuccess4">신랑님 성함</label>
				<div class="input-group input-group-bottom">
					<span class="input-group-addon"><i class="fas fa-male" style="width: 16px;"></i></span>
					<input type="text" name="gr_name" value="" class="form-control"  >
				</div>
				
			</div>
			<div class="form-group col-md-6">
				<label class="control-label" for="inputSuccess4">신랑님 연락처</label>
				<div class="input-group input-group-bottom">
					<span class="input-group-addon"><i class="fa fa-phone"></i></span>
					<select class="form-control form-select" name="gr_tel1" style="width: 33.3%; display: inline-block;"/>
						<option value="">:: 선택 ::</option>
						<option value="010">010</option>
						<option value="011">011</option>
						<option value="016">016</option>
						<option value="017">017</option>
						<option value="018">018</option>
						<option value="019">019</option>
					</select>
					<input type="text" class="form-control" name="gr_tel2" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" maxLength="4" style="width: 33.3%; display: inline-block; border-left: none;" placeholder="" value="" />
					<input type="text" class="form-control" name="gr_tel3" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" maxLength="4" style="width: 33.3%; display: inline-block; border-left: none;" placeholder="" value="" />
				</div>
			</div>
			<div class="form-group col-md-12">
				<label class="control-label" for="inputSuccess4">대표 이메일</label>
				<div class="input-group input-group-bottom">
					<span class="input-group-addon"><i class="far fa-envelope" style="width: 16px;"></i></span>
					<input type="text" name="email" value="" class="form-control"  >
				</div>
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-heading">
			<h4 class="text-white" style="font-weight: normal; font-size: 12pt; font-weight: bold; margin: 0;">촬영 필수 정보</h4>
		</div>
		<div class="panel-body">
			<div class="form-group col-md-3 col-xs-6">
				<label class="control-label" for="inputSuccess4">촬영장소</label>
				<div class="input-group input-group-bottom">
					<span class="input-group-addon"><i class="fas fa-camera-retro"></i></span>
					<input type="text" name="shot_venue" value="" class="form-control"  >
				</div>
			</div>
			<div class="form-group col-md-3 col-xs-6">
				<label class="control-label" for="inputSuccess4">드레스샵 이름</label>
				<div class="input-group input-group-bottom" style="width: 100%;">
					<span class="input-group-addon"><i class="fas fa-tshirt"></i></span>
					<input type="text" name="dress_shop" value="" style="IME-MODE:active" class="form-control" >
				</div>
			</div>
			<div class="form-group col-md-3 col-xs-6">
				<label class="control-label" for="inputSuccess4">메이크업샵 이름</label>
				<div class="input-group input-group-bottom" style="width: 100%;">
					<span class="input-group-addon"><i class="fas fa-magic"></i></span>
					<input type="text" name="makeup_shop" value="" style="IME-MODE:active" class="form-control" >
				</div>
			</div>
			<div class="form-group col-md-3 col-xs-6">
				<label class="control-label" for="inputSuccess4">예약금 입금자명</label>
				<div class="input-group input-group-bottom">
					<span class="input-group-addon"><i class="fas fa-money-bill-alt"></i></span>
					<input type="text" name="pr_name" value="" class="form-control"  >
				</div>
			</div>
			<div class="form-group col-sm-6">
				<label class="control-label" for="inputSuccess4">예식날짜</label>
				<div class="input-group input-group-bottom">
					<span class="input-group-addon"><i class="far fa-calendar-alt"></i></span>
					<input type="text" name="wedding_d" value="" readonly style="cursor: pointer; background: #fff;" class="form-control" id="datepicker" >
				</div>
				
			</div>
			<div class="form-group col-sm-6">
				<label class="control-label" for="inputSuccess4">예식 시간</label>
				<div class="input-group input-group-bottom">
					<span class="input-group-addon"><i class="far fa-clock"></i></span>
					<select class="form-control form-select" name="wedding_h" style="width: 50%; display: inline-block;"/>
						<option value="">:: 시간 선택 ::</option>
						<%
							For i = 9 To 19
						%>
						<option value="<%=i%>"><%=i%>시</option>
						<%
							Next 
						%>
					</select>
					<select class="form-control form-select" name="wedding_m" style="width: 50%; display: inline-block; border-left: none;"/>
						<option value="">:: 분 선택 ::</option>
						<%
							For i = 0 To 50 Step 10
						%>
						<option value="<%=i%>"><%=i%>분</option>
						<%
							Next 
						%>
					</select>
				</div>
			</div>

			<div class="form-group col-sm-12">
				<label class="control-label" for="inputSuccess4">환불규정 동의여부</label>
				<div class="input-group input-group-bottom" style="width: 100%;">
					<span class="input-group-addon"><i class="far fa-dot-circle"></i></span>
					<div class="form-control">
						<label class="col-lg-3 col-md-3 col-sm-4 col-xs-6" style="padding: 0; cursor: pointer; font-size: 10pt;"><input type="radio" name="agree1" value="1"> 동의합니다</label>
						<label class="col-lg-3 col-md-3 col-sm-4 col-xs-6" style="padding: 0; cursor: pointer; font-size: 10pt;"><input type="radio" name="agree1" value="2"> 아니오</label>
					</div>
				</div>
				<div class="info-board " style="margin: 5px 0 10px; padding: 5px; background: #f9f9f9; border-color: #c8c8c8; line-height: 25px; font-size: 10pt;">
					<ul class="billiard">
						<li>예약금의 경우 입금 후 3일 안에만 환불가능합니다.</li>
						<li>촬영 확정일로부터 3개월 이내 취소시: 계약금을 제외한 총 상품 금액의 30%</li>
						<li>촬영 확정일로부터 2개월 이내 취소시: 계약금을 제외한 총 상품 금액의 60%</li>
						<li>촬영 확정일로부터 1개월 이내 취소시: 계약금을 제외한 총 상품 금액의 90%</li>
					</ul>
				</div>				
			</div>
			<div class="form-group col-sm-12">
				<label class="control-label" for="inputSuccess4">책임한계 동의여부</label>
				<div class="input-group input-group-bottom" style="width: 100%;">
					<span class="input-group-addon"><i class="far fa-dot-circle"></i></span>
					<div class="form-control">
						<label class="col-lg-3 col-md-3 col-sm-4 col-xs-6" style="padding: 0; cursor: pointer; font-size: 10pt;"><input type="radio" name="agree2" value="1"> 동의합니다</label>
						<label class="col-lg-3 col-md-3 col-sm-4 col-xs-6" style="padding: 0; cursor: pointer; font-size: 10pt;"><input type="radio" name="agree2" value="2"> 아니오</label>
					</div>
				</div>
				<div class="info-board " style="margin: 5px 0 10px; padding: 5px; background: #f9f9f9; border-color: #c8c8c8; line-height: 25px; font-size: 10pt;">
					<ul class="billiard">
						<li>촬영된 데이터는 2중 백업시스템으로 운영합니다.</li>
						<li>WITH.JUNGWOO(스튜디오)는 이용자의 데이터를 배송 후 6개월간 보관합니다.</li>
						<li>서비스 이용자는 상품 수령 후 1달 이내에 데이터의 분실 또는 상품의 문제가 있을 경우 필요한 조치를 받을 수 있습니다.</li>
						<li>WITH.JUNGWOO(스튜디오)는 촬영일로부터 365일이 지나면 서비스 이용자의 데이터삭제됩니다.</li>
						<li>상품 미수령으로 인한 어떠한 책임도 지지 않습니다.</li>
					</ul>
				</div>
			</div>
			<div class="form-group col-sm-12">
				<label class="control-label" for="inputSuccess4">촬영규정 동의여부</label>
				<div class="input-group input-group-bottom" style="width: 100%;">
					<span class="input-group-addon"><i class="far fa-dot-circle"></i></span>
					<div class="form-control">
						<label class="col-lg-3 col-md-3 col-sm-4 col-xs-6" style="padding: 0; cursor: pointer; font-size: 10pt;"><input type="radio" name="agree3" value="1"> 동의합니다</label>
						<label class="col-lg-3 col-md-3 col-sm-4 col-xs-6" style="padding: 0; cursor: pointer; font-size: 10pt;"><input type="radio" name="agree3" value="2"> 아니오</label>
					</div>
				</div>
				<div class="info-board " style="margin: 5px 0 0; padding: 5px; background: #f9f9f9; border-color: #c8c8c8; line-height: 25px; font-size: 10pt;">
					<ul class="billiard">
						<li>예식장에 포함 된 필수 원판 / 스냅 외 타 스냅업체와는 "절대 함께" 촬영하지 않습니다.</li>
					</ul>
				</div>				
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-heading">
			<h4 class="text-white" style="font-weight: normal; font-size: 12pt; font-weight: bold; margin: 0;">상품관련</h4>
		</div>
		<div class="panel-body">
			<div class="form-group col-sm-12">
				<label class="control-label" for="inputSuccess4">상품구성</label>
				<div class="input-group input-group-bottom" style="width: 100%;">
					<span class="input-group-addon"><i class="fas fa-gift"></i></span>
					<div class="form-control">
						<label class="col-lg-3 col-md-3 col-sm-4 col-xs-6" style="padding: 0; cursor: pointer; font-size: 10pt;"><input type="radio" name="att_agree" value="1"> 베이직</label>
						<label class="col-lg-3 col-md-3 col-sm-4 col-xs-6" style="padding: 0; cursor: pointer; font-size: 10pt;"><input type="radio" name="att_agree" value="2"> 프리미엄</label>
					</div>
				</div>
			</div>
			<div class="form-group col-sm-12">
				<label class="control-label" for="inputSuccess4">촬영상품</label>
				<div class="input-group input-group-bottom" style="width: 100%;">
					<span class="input-group-addon"><i class="fas fa-camera"></i></span>
					<div class="form-control">
						<label class="col-lg-3 col-md-3 col-sm-4 col-xs-6 check-label" style="padding: 0; cursor: pointer; font-size: 10pt;"><input type="checkbox" name="product" value="1"> 본식스냅</label>
						<label class="col-lg-3 col-md-3 col-sm-4 col-xs-6 check-label" style="padding: 0; cursor: pointer; font-size: 10pt;"><input type="checkbox" name="product" value="2"> 스튜디오 촬영</label>
						<label class="col-lg-3 col-md-3 col-sm-4 col-xs-6 check-label" style="padding: 0; cursor: pointer; font-size: 10pt;"><input type="checkbox" name="product" value="3"> 가봉스냅</label>
					</div>
				</div>
				<div class="panel" style="margin-top: 5px; margin-bottom: 0; border: 1px solid #ddd;">
					<div class="panel-heading" style="background: #f2f2f2; color: #000;">
						본식스냅 선택시 작성해 주세요.
					</div>
					<div class="panel-body snap">
						<div class="form-group col-md-6">
							<label class="control-label" for="inputSuccess4">촬영자 선택</label>
							<div class="input-group input-group-bottom" style="width: 100%;">
								<span class="input-group-addon"><i class="far fa-dot-circle"></i></span>
								<div class="form-control">
									<label class="col-xs-4" style="padding: 0; cursor: pointer; font-size: 10pt;"><input type="radio" name="product1_1" value="1"> 대표지정</label>
									<label class="col-xs-4" style="padding: 0; cursor: pointer; font-size: 10pt;"><input type="radio" name="product1_1" value="2"> 수석실장</label>
                  <label class="col-xs-4" style="padding: 0; cursor: pointer; font-size: 10pt;"><input type="radio" name="product1_1" value="3"> 실장</label>
								</div>
							</div>
						</div>
						<div class="form-group col-md-6">
							<label class="control-label" for="inputSuccess4">2인 촬영</label>
							<div class="input-group input-group-bottom" style="width: 100%;">
								<span class="input-group-addon"><i class="far fa-dot-circle"></i></span>
								<div class="form-control">
									<label class="col-xs-6" style="padding: 0; cursor: pointer; font-size: 10pt;"><input type="radio" name="product1_2" value="1"> 유</label>
									<label class="col-xs-6" style="padding: 0; cursor: pointer; font-size: 10pt;"><input type="radio" name="product1_2" value="2"> 무</label>
								</div>
							</div>
						</div>
						<div class="form-group col-md-6">
							<label class="control-label" for="inputSuccess4">메이크업샵 촬영</label>
							<div class="input-group input-group-bottom" style="width: 100%;">
								<span class="input-group-addon"><i class="far fa-dot-circle"></i></span>
								<div class="form-control">
									<label class="col-xs-6" style="padding: 0; cursor: pointer; font-size: 10pt;"><input type="radio" name="product1_3" value="1"> 유</label>
									<label class="col-xs-6" style="padding: 0; cursor: pointer; font-size: 10pt;"><input type="radio" name="product1_3" value="2"> 무</label>
								</div>
							</div>
						</div>
						<div class="form-group col-md-6">
							<label class="control-label" for="inputSuccess4">폐백 촬영</label>
							<div class="input-group input-group-bottom" style="width: 100%;">
								<span class="input-group-addon"><i class="far fa-dot-circle"></i></span>
								<div class="form-control">
									<label class="col-xs-6" style="padding: 0; cursor: pointer; font-size: 10pt;"><input type="radio" name="product1_4" value="1"> 유</label>
									<label class="col-xs-6" style="padding: 0; cursor: pointer; font-size: 10pt;"><input type="radio" name="product1_4" value="2"> 무</label>
								</div>
							</div>
						</div>
						<div class="form-group col-md-6">
							<label class="control-label" for="inputSuccess4">원판 촬영</label>
							<div class="input-group input-group-bottom" style="width: 100%;">
								<span class="input-group-addon"><i class="far fa-dot-circle"></i></span>
								<div class="form-control">
									<label class="col-xs-6" style="padding: 0; cursor: pointer; font-size: 10pt;"><input type="radio" name="product1_5" value="1"> 유</label>
									<label class="col-xs-6" style="padding: 0; cursor: pointer; font-size: 10pt;"><input type="radio" name="product1_5" value="2"> 무</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="panel" style="margin-top: 5px; margin-bottom: 0; border: 1px solid #ddd;">
					<div class="panel-heading" style="background: #f2f2f2; color: #000;">
						스튜디오촬영 선택시 작성해주세요.
					</div>
					<div class="panel-body snap">
						<div class="form-group col-md-12">
							<label class="control-label" for="inputSuccess4">스튜디오 상품</label>
							<div class="input-group input-group-bottom" style="width: 100%;">
								<span class="input-group-addon"><i class="far fa-dot-circle"></i></span>
								<div class="form-control">
									<label class="col-xs-6 col-sm-4 col-md-3" style="padding: 0; cursor: pointer; font-size: 10pt;"><input type="radio" name="product2_1" value="1"> 세미촬영</label>
									<label class="col-xs-6 col-sm-4 col-md-3" style="padding: 0; cursor: pointer; font-size: 10pt;"><input type="radio" name="product2_1" value="2"> 모바일청첩장촬영</label>
									<label class="col-xs-6 col-sm-4 col-md-3" style="padding: 0; cursor: pointer; font-size: 10pt;"><input type="radio" name="product2_1" value="3"> 만삭촬영</label>
									<label class="col-xs-6 col-sm-4 col-md-3" style="padding: 0; cursor: pointer; font-size: 10pt;"><input type="radio" name="product2_1" value="4"> 돌촬영</label>
									<label class="col-xs-6 col-sm-4 col-md-3" style="padding: 0; cursor: pointer; font-size: 10pt;"><input type="radio" name="product2_1" value="5"> 가족촬영</label>
									<label class="col-xs-6 col-sm-4 col-md-3" style="padding: 0; cursor: pointer; font-size: 10pt;"><input type="radio" name="product2_1" value="6"> 그외촬영</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="panel" style="margin-top: 5px; margin-bottom: 0; border: 1px solid #ddd;">
					<div class="panel-heading" style="background: #f2f2f2; color: #000;">
						가봉스냅 선택시 작성해주세요.
					</div>
					<div class="panel-body snap">
						<div class="form-group col-md-12">
							<label class="control-label" for="inputSuccess4">가봉스냅 작가지정</label>
							<div class="input-group input-group-bottom" style="width: 100%;">
								<span class="input-group-addon"><i class="far fa-dot-circle"></i></span>
								<div class="form-control">
									<label class="col-xs-6 col-sm-4 col-md-3" style="padding: 0; cursor: pointer; font-size: 10pt;"><input type="radio" name="product3_1" value="1"> 대표지정</label>
									<label class="col-xs-6 col-sm-4 col-md-3" style="padding: 0; cursor: pointer; font-size: 10pt;"><input type="radio" name="product3_1" value="2"> 수석실장</label>
                  <label class="col-xs-6 col-sm-4 col-md-3" style="padding: 0; cursor: pointer; font-size: 10pt;"><input type="radio" name="product3_1" value="3"> 실장</label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</form>
	<div class='text-center'>
		<button onclick="fn_submit();" type="button" class="btn" style="padding: 10px 20px; border-radius: 0; background: <?=$color?>; border-color: <?=$color?>; color: #fff; margin: 10px 0 20px;">
			제출하기
		</button>
	</div>
</section>
<?php
	virtual('/common/layout/footer.php');
?>