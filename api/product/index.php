<?php
  virtual('/common/lib/conn.php');
  $data=['wr_type'=>'PRODUCT'];
  $sql =  "
    select * from tb_board where 1 = 1 
    and wr_type = :wr_type 
  ";
  virtual('/common/lib/stmt.php');
?>