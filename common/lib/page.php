<?
  function page_btn ($class, $href, $text, $icon) {
    $src = '#';
    $ico = '';
    if ($href) {$src = "javascript:page_data($href)";}
    if ($icon) {$ico = "<i class='fal fa-chevrons-$icon'></i>";}
    return "
      <li class='page-item $class'>
        <a class='page-link' href='$src'>$text$ico</a>
      </li>
    ";
  }

  $pagination_html = '
  <div align="center">
    <ul class="pagination">
  ';
  $total_links = ceil($total_data / $limit);  //토탈 페이지
  $previous_link = ''; // 이전 페이지
  $next_link = ''; // 다음 페이지
  $page_link = ''; // 페이지 링크
  $view_count = 5; // 페이지 카운트
  if ($total_links > $view_count-1) {
    if ($page < $view_count) {
      for ($count = 1; $count <= $view_count; $count++) {        
        $page_array[] = $count;
      }
      $page_array[] = '...';
      $page_array[] = $total_links;
    } else {
      $end_limit = $total_links - $view_count;
      if ($page > $end_limit) {
        $page_array[] = 1;
        $page_array[] = '...';
        for ($count = $end_limit; $count <= $total_links; $count++) {
          $page_array[] = $count;
        }
      } else {
        $page_array[] = 1;
        $page_array[] = '...';
        for ($count = $page - 1; $count <= $page + 1; $count++) {
          $page_array[] = $count;
        }
        $page_array[] = '...';
        $page_array[] = $total_links;
      }
    }
  } else {
    for ($count = 1; $count <= $total_links; $count++) {
      $page_array[] = $count;
    }
  }
  for ($count = 0; $count < count($page_array); $count++) {
    if ($page == $page_array[$count]) {
      $page_link .= page_btn('active disabled', null, $page_array[$count].'<span class="sr-only">(current)</span>', null);
      $previous_id = $page_array[$count] - 1;
      if ($previous_id > 0) {
        $previous_link = page_btn(null, $previous_id, null, 'left');
      } else {
        $previous_link = page_btn('disabled', null, null, 'left');
      }
      $next_id = $page_array[$count] + 1;
      if ($next_id >= $total_links) {
        $next_link = page_btn('disabled', null, null, 'right');
      } else {
        $next_link = page_btn(null, $next_id, null, 'right');
      }
    } else {
      if ($page_array[$count] == '...') {
        $page_link .= page_btn('disabled', null, '...', null);
      } else {
        $page_link .= page_btn(null, $page_array[$count], $page_array[$count], null);
      }
    }
  }
  $pagination_html .= $previous_link.$page_link.$next_link;
  $pagination_html .= '
    </ul>
  </div>';
  $output = array(
    'data' => $data,
    'pagination' => $pagination_html,
    'total_data' => $page_array
  );  
  echo json_encode($output, JSON_UNESCAPED_UNICODE);
?>