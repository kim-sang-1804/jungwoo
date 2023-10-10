<?php
  virtual('/common/lib/conn.php');
  $data=['wr_type'=>'GALLERY', 'use_yn'=>'Y'];
  $sql  = "
    select * from tb_board where 1 = 1
    and wr_type = :wr_type and use_yn = :use_yn
    order by (case when wr_order is null then id else wr_order end) asc
    limit 10 
  ";
  virtual('/common/lib/stmt.php');
?>