
<?php
/*
Template Name: category
*/
?>

<?php get_header("2"); ?>
  <section id="feature">
      <h2 class="sec-title">パーソナルトレーナー</h2>
    <?php
          $args = array(
        // ここにパラメータを定義
        'post_type' => 'post',
        'category_name' => 'room',
        'posts_per_page' => 4
    );
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) :
    ?>
    <!-- ループ前の開始タグ -->
    <ul class="product-list3">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <li>
          <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
          <a class="image_3" href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail();?></a>
        </li>
        <!-- 出力したい処理を記述 -->
        <?php endwhile; ?>
    </ul>
    <!-- ループ後の閉じタグ -->
    <?php endif; wp_reset_postdata(); ?>

  </section>

<?php get_footer(); ?>






















      <!-- <?php if(have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>
          <?php
            $cat=get_the_category();
            $catname=$cat[0]->cat_name;
          ?>
          <div class="grid">
            <div class="item">
              <a class="fadein image" href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
              <div class="item-content">
                <p class="item-cat"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></p>
                <p class="item-text">
                  <?php
                    if(mb_strlen(strip_tags(get_the_content()),'UTF-8')>80){
                      $content=mb_substr(strip_tags(get_the_content()),0,80,'UTF-8');
                      echo $content . '...';
                    }else{
                      echo strip_tags(get_the_content());
                    }
                  ?>
                </p>
                <p class="item-date"><?php the_time('Y/m/d');?></p>
              </div>
            </div>


          </div>
        <?php endwhile; ?>
      <?php endif; ?> -->
