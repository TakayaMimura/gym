
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <link rel="shortcut icon" href="<?php echo esc_url(get_theme_file_uri('img/favicon.ico')); ?>">

  <?php wp_head(); ?>
</head>
<body>
  <header id="header2">
    <nav id="navi2">
      <ul class="nav-menu2">
        <li><a href="<?php echo esc_url(home_url()); ?>">TOP</a></li>
        <li><a href="<?php echo esc_url(home_url('#pickup')); ?>">PICK UP</a></li>
        <li><a href="<?php echo esc_url(home_url('#feature')); ?>">FEATURE</a></li>
        <li><a href="<?php echo esc_url(home_url('#topics')); ?>">TOPICS</a></li>
        <li><a href="<?php echo esc_url(home_url('#location')); ?>">LOCATION</a></li>
        <li><a href="<?php echo esc_url(home_url('#contact2')); ?>">CONTACT</a></li>
      </ul>
      <ul class="nav-sns2">
        <li class="twitter icon"><a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
        <li class="facebook icon"><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a></li>
        <li class="instagram icon"><a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
      </ul>
    </nav>
    <div class="toggle_btn2">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div id="mask2"></div>
  </header>
