<?php
	$menu = "2";
  virtual('/common/layout/header.php');
?>
<link href="http://sachinchoolur.github.io/lightGallery/static/css/justifiedGallery.min.css" rel="stylesheet">
<link href="http://sachinchoolur.github.io/lightGallery/lightgallery/css/lightgallery.css" rel="stylesheet">
<style type="text/css">
  body .lg-backdrop, .custom-lightbox.lg-outer {
      background-color: rgba(255,255,255,.9);
  }
  .lg-toolbar {
      background: #fff;
  }
  .lg-actions .lg-next, .lg-actions .lg-prev {
      background-color: rgba(255, 255, 255, 0.45);
  }
  .lg-outer .lg-toogle-thumb {
      background-color: #fff;
      color: #999;
  }
  .lg-toolbar .lg-icon:hover {
      background-color: #fff;
      color: #999;
  }
  .lg-outer .lg-thumb-outer {
      background-color: #fff;
      bottom: 0;
  }

  .lg-actions .lg-prev:after {
      content: "<";
  }

  .lg-actions .lg-next:before {
      content: ">";
  }
  .lg-actions .lg-next:hover, .lg-actions .lg-prev:hover {
    color: #c8c8c8;
  }
  .grid:after {
    content: '';
    display: block;
    clear: both;
  }

  .grid-sizer, .grid-item {
    width: 33.333%;
  }
  @media (max-width: 575px) {
    .grid-sizer,
    .grid-item {
      width: 50%;
    }
  }
  @media (min-width: 576px) and (max-width: 767px) {
    .grid-sizer, .grid-item {
      width: 50%;
    }
  }

  .grid-item {
    float: left;
  }

  .grid-item img {
    display: block;
    max-width: 100%;
  }
</style>
<section class="content container">
	<h1>Gallery</h1>
	<div class="col-xs-12" style="padding: 0; margin-top: -10px;">
		<div class="row">
			<div class="grid">
				<div class="grid-sizer"></div>
				<!-- <%
					SQL = "SELECT * FROM TB_SETTING"
					Set BRS = CONN.EXECUTE (SQL)

					If BRS.eof Or BRS.bof Then
						view_cnt  = 10
						view_type = ""
					Else
						view_cnt  = BRS(1)
						view_type = BRS(2)
					End If

					SQL = "SELECT TOP " & view_cnt & " * FROM TB_BOARD WHERE 1 = 1 AND WR_TYPE = 'GALLERY' AND USE_YN = 'Y' ORDER BY (CASE WHEN WR_ORDER IS NULL THEN WR_IDX ELSE WR_ORDER END) ASC"
					'Response.WRITE SQL
					Set RS = CONN.EXECUTE (SQL)
					
					i = 1
					If Not RS.BOF Then
						Do Until RS.EOF
				%> -->
				<!-- <% If BRS(2) = "n" Then %> -->
        <?php
          $view_type = 'n';
          
          $query  = "select * from tb_board where 1 = 1 ";
          $query .= "and wr_type = 'GALLERY' and use_yn = 'Y' ";
          $query .= "order by (case when wr_order is null then id else wr_order end) asc ";
          $query .= "limit 10 ";
          $result = mysqli_query($conn, $query);
          if(mysqli_num_rows($result) > 0) {
            while($board = mysqli_fetch_array($result)){
              if($view_type == 'n') {
        ?>
				<div class="grid-item" style="padding: 10px; text-align: center; position: relative;">
					<a href="detail/?id=<?=$board['id']?>">
						<div class="embed-responsive embed-responsive-16by9" style="background: url('http://with-jungwoo.com/admin/upload/attachment/temp/<?=$board['wr_picture']?>'); background-size: cover;  padding-bottom: 66.666%; background-position: center top 50%;"></div>
					</a>
					<div style="width: 100%; text-align: center; padding: 10px 0; color: #000; ">
            <?=$board['wr_subject']?>
          </div>
				</div>
				<?php
              } else {
        ?>
				<div class="grid-item">
        <a href="detail/?id=<?=$board['id']?>">
						<img src="http://with-jungwoo.com/admin/upload/attachment/temp/<?=$board['wr_picture']?>" style="width: 100%; padding: 5px;">
					</a>
					<div style="width: 100%; text-align: center; padding: 10px 0; color: #000; "></div>
				</div>
        <?php
              }
            }
          }        
        ?>
				<!-- <% End If %> -->
				<!-- <%
						RS.MOVENEXT
						i = i + 1
						Loop
					End If
				%> -->				
			</div>
		</div>
	</div>
	<!-- <script src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/compiled-4.7.5.min.js"></script> -->
	<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
	<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>


	<link rel="stylesheet" href="http://miromannino.github.io/Justified-Gallery/bower_components/justified-gallery/dist/css/justifiedGallery.css" type="text/css" media="all" />
	<script src="http://miromannino.github.io/Justified-Gallery/bower_components/justified-gallery/dist/js/jquery.justifiedGallery.min.js"></script>
	<!-- <% If view_type = "m" Then %> -->
	<script type="text/javascript">
		var $grid = $('.grid').masonry({
			itemSelector: '.grid-item',
			percentPosition: true,
			columnWidth: '.grid-sizer'
		});
		$grid.imagesLoaded().progress( function() {
			$grid.masonry();
		});
	</script>
	<!-- <% ElseIf view_type = "j" Then %> -->
	<script type="text/javascript">
		$('.grid').justifiedGallery({
			/*'usedSuffix':'lt240', 
			'rowHeight':400, 
			'fixedHeight':true, 
			'lightbox':true, 
			'captions':false, 
			'margins':1,*/
			rowHeight: 400,
			fixedHeight:true,
			//lastRow: 'hide',
			margins: 1
		});
	</script>
	<!-- <% End If %> -->
	<style type="text/css">
		.justified-gallery > a > .caption, .justified-gallery > div > .caption, .justified-gallery > figure > .caption {
			bottom: 4px;
			left: 5px;
			width: calc(100% - 10px);
			text-align: center;
			padding: 10px 0;
			font-size: 12pt;
		}	
	</style>
</section>
<?php
  virtual('/common/layout/footer.php');
?>