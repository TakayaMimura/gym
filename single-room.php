<?php get_header("2"); ?>

<main id="main_s" class="wrapper">

  <?php if(have_posts()):while(have_posts()):the_post(); ?>
    <?php
      $cat=get_the_category();
      $catname=$cat[0]->cat_name;
    ?>
    <article>
      <h2 class="sec-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h2>
      <ul class="meta">
        <li class="item-date">日付:  <?php the_time('Y/m/d'); ?></li>
        <li class="item-cat">カテゴリー:  <?php echo $catname; ?></li>
      </ul>
      <a class="image_s" href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
      <div class="item-text"><?php the_content(); ?></div>
    </article>
  <?php endwhile;endif; ?>

  <ul class="post-link">
    <li><?php previous_post_link('%link','<- 前へ',true) ?></li>
    <li><?php next_post_link('%link','次へ ->',true) ?></li>
  </ul>
  <a class="link-text" href="<?php echo get_template_directory_uri(); ?>/category">Back To Products</a>

</main>



<?php get_footer(); ?>
