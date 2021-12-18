
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
  <header id="header">
    <nav id="navi">
      <ul class="nav-menu">
        <li><h1 class="site-title"><a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_theme_file_uri('img/logo.svg')); ?>" alt=""></a></h1></li>
        <li><a href="<?php echo esc_url(home_url()); ?>">TOP</a></li>
        <li><a href="#pickup">PICK UP</a></li>
        <li><a href="#feature">FEATURE</a></li>
        <li><a href="#topics">TOPICS</a></li>
        <li><a href="#location">LOCATION</a></li>
        <li><a href="#contact2">CONTACT</a></li>
      </ul>
      <ul class="nav-sns">
        <li class="twitter icon"><a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
        <li class="facebook icon"><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a></li>
        <li class="instagram icon"><a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
      </ul>
    </nav>
    <div class="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div id="mask"></div>
  </header>
