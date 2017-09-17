<?php get_header(); ?>

<?php get_template_part( 'template-parts/logo-navigation' ) ?>

<div class="header-block1">
  <div class="header-block1__content">
    <div class="header-block1__content__content">
      <?php the_title( '<h1>', '</h1>' ) ?>
      <p class="text--medium"><?php echo get_the_excerpt() ?></p>
    </div>
    <div class="header-block1__content__image">
      <div class="header-block1__content__image__overlay"></div>
      <img src="http://lorempixel.com/1500/1000/business/" alt="" class="img--black-white">
    </div>
  </div>
</div>

<div class="content-block1">
  <div class="content-block1__content">
    <?php the_content() ?>
  </div>
</div>

<?php get_footer(); ?>
