<?php get_header(); ?>

<div class="dev-block1">
  <div class="dev-block1__content">
    <?php the_title( '<h1>', '</h1>' ) ?>
    <p class="text--medium"><?php echo get_the_excerpt() ?></p>

  </div>
  <div class="dev-block1__image">
    <img src="http://lorempixel.com/1000/1000/business/" alt="">
  </div>
</div>

<div class="dev-block2">
  <?php the_content() ?>
</div>

<?php get_footer(); ?>
