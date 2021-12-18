


<?php
  if (is_category('room')) { // カテゴリA
    include(TEMPLATEPATH . '/category-1.php');
  } else if (in_category('shoes')) { // カテゴリB
    include(TEMPLATEPATH .'/category-2.php');
  } else {
    include(TEMPLATEPATH . '/category-default.php');
  }

?>
