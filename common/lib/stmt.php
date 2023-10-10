<?php
  try {
    $stmt = $connect->prepare($sql);
    $stmt->execute($data);
    $total_data = $stmt->rowCount();
    if($filter_sql){
      $stmt = $connect->prepare($filter_sql);
      $stmt->execute($data);
    }
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $arr = array();
    $cnt = $total_data;
    foreach($row as $data){
      if(count($except)>0){
        for($i=0;$i<count($except);$i++){
          unset($data[$except[$i]]);
        }
      }
      $data['no']=$cnt-($page-1)*10;
      array_push($arr,$data);
      $cnt--;
    };
    $data = $arr;
    if($filter_sql){
      //include $_SERVER['DOCUMENT_ROOT'].'/lib/page.php';
      virtual('/common/lib/page.php');
    } else {
      if($data_view != 'Y'){
        echo json_encode($arr, JSON_UNESCAPED_UNICODE);
      }
    }
  } catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
  }
?>