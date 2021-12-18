<?php

  $post=$wp_query->post;
  if(in_category(array('shoes'))){
    include(STYLESHEETPATH.'/single-equipment.php');
  }elseif(in_category(array('room'))){
    include(STYLESHEETPATH.'/single-room.php');
  }elseif(in_category(array('report'))){
    include(STYLESHEETPATH.'/single-report.php');
  }else{
    include(STYLESHEETPATH.'/single-default.php');
  }

?>
