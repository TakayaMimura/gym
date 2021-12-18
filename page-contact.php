
<?php
/*
Template Name: contact
*/
?>

<?php get_header("2"); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>

<main>
    <div class="page-title-wrapper">
      <h1 class="page-title">Contact</h1>
      <div class="page-title-bottom">Contact us</div>
    </div>
    <form action="" class="form-wrapper">
      <ul class="form-list">
        <li class="form-item">
          <label for="" class="form-label">お問い合わせ内容</label>
            <ul class="checkbox-list">
              <li class="checkbox-item">
                <input type="checkbox" class="checkbox" id="document">
                <label for="document">資料請求</label>
              </li>
              <li class="checkbox-item">
                <input type="checkbox" class="checkbox" id="phone">
                <label for="phone">お電話でのご相談</label>
              </li>
              <li class="checkbox-item">
                <input type="checkbox" class="checkbox" id="application">
                <label for="application">申し込み</label>
              </li>
            </ul>
        </li>
        <li class="form-item">
          <label for="" class="form-label">担当者名</label>
          <input type="text" class="input-text">
        </li>
        <li class="form-item">
          <label for="" class="form-label">電話番号</label>
          <input type="text" class="input-text">
        </li>
        <li class="form-item">
          <label for="" class="form-label">メールアドレス</label>
          <input type="text" class="input-text">
        </li>
        <li class="form-item">
          <label for="" class="form-label">その他</label>
          <textarea name="" id="" cols="30" rows="10"></textarea>
        </li>
      </ul>
      <input type="submit" value="Submit" class="submit-btn">
    </form>

</main>



<?php get_footer(); ?>
