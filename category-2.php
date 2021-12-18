
<?php
/*
Template Name: category2
*/
?>


<?php get_header("2"); ?>
  <section id="feature">
      <h2 class="sec-title">FEATURE</h2>
    <?php
          $args = array(
        // ここにパラメータを定義
        'post_type' => 'post',
        'category_name' => 'shoes',
        'posts_per_page' => 4
    );
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) :
    ?>
    <!-- ループ前の開始タグ -->
    <ul class="product-list4">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <li>
          <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
          <a class="image_4" href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail();?></a>
        </li>
        <!-- 出力したい処理を記述 -->
        <?php endwhile; ?>
    </ul>
    <!-- ループ後の閉じタグ -->
    <?php endif; wp_reset_postdata(); ?>

  </section>

<?php get_footer(); ?>
