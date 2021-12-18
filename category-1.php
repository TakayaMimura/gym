<?php
/*
Template Name: category1
*/
?>


<?php get_header("2"); ?>
  <section id="feature">
      <h2 class="sec-title">TOPICS</h2>
    <?php
          $args = array(
        // ここにパラメータを定義
        'post_type' => 'post',
        'category_name' => 'report',
        'posts_per_page' => 4
    );
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) :
    ?>
    <!-- ループ前の開始タグ -->
    <ul class="topics-list ml-auto">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <li class="topics-item">
          <a class="topics-title" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
          <a class="image_4" href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail();?></a>
          <div class="item-text"><?php the_content(); ?></div>
        </li>
        <!-- 出力したい処理を記述 -->
        <?php endwhile; ?>
    </ul>
    <!-- ループ後の閉じタグ -->
    <?php endif; wp_reset_postdata(); ?>

  </section>

<?php get_footer(); ?>
