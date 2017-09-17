<?php get_header(); ?>

<?php get_template_part( 'template-parts/development-mode' ) ?>

<?php get_template_part( 'template-parts/logo-navigation' ) ?>

<div class="page--front">
  <div class="page--front__wrap">
    <div class="page--front__wrap__content">
      <p>Icon</p>
      <h1>
        Lorem ipsum dolor sit amet, <a href="">consectetur adipisicing</a> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <h2>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </h2>
    </div>
    <div class="page--front__wrap__bg-image">
      <img src="http://lorempixel.com/1000/1000/business/" alt="">
    </div>
  </div>
</div>

<div class="block">
  <div class="trusted-advisor">
    <h4>I've been a trusted advisor of many WordPress companies &amp; plugins</h4>
    <ul class="trusted-advisor__list">
      <li class="trusted-advisor__list__item">
        <img src="http://chrislema.com/wp-content/themes/chrislema-rm/images/logos1@2x.png" alt="">
      </li>
      <li class="trusted-advisor__list__item">
        <img src="http://chrislema.com/wp-content/themes/chrislema-rm/images/logos2@2x.png" alt="">
      </li>
    </ul>
  </div>
</div>

<?php get_template_part( 'template-parts/expertises' ) ?>

<div class="journal--archive">
  <div class="journal--archive__content">
    <p class="journal--archive__content__icon">
      <img src="https://png.icons8.com/typewriter-with-tablet/ios7/75" title="Typewriter With Tablet">
    </p>
    <h1>I Journal.</h1>
    <p class="text--medium introduction">Every now and then I sit down and write something that will challenge or encourage my and hopefully your WordPress experience.</p>
    <ul class="journal--archive__content__list">
      <li class="journal--archive__content__list__item">
        <div class="journal--archive__content__list__item__date">
          <?php echo the_time('F d, Y') ?>
        </div>
        <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
        <p>Lorem ipsum dolor sit amet, <a href="">consectetur adipisicing</a> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </li>
      <li class="journal--archive__content__list__item journal--archive__content__list__item--spotlight">
        <div class="journal--archive__content__list__item__date">
          <?php echo the_time('F d, Y') ?>
        </div>
        <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
        <p>Lorem ipsum dolor sit amet, <a href="">consectetur adipisicing</a> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </li>
      <li class="journal--archive__content__list__item">
        <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </li>
      <li class="journal--archive__content__list__item">
        <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </li>
      <li class="journal--archive__content__list__item">
        <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </li>
      <li class="journal--archive__content__list__item journal--archive__content__list__item--more-newsletter">
        <img src="https://png.icons8.com/keyboard/ios7/50" title="Keyboard" width="50" height="50">
        <h3>I hope you enjoy the <a href="#">456 articles</a> that I've written so far.</h3>
        <p>If so you can follow me through social media, subscribe to my newsletter or just reach out for a passion-to-heart talk.</p>
      </li>
    </ul>
  </div>
  <div class="journal--archive__video">
    <video src="<?php echo get_stylesheet_directory_uri() ?>/videos/485001612-typewriter.mp4" autoplay loop poster="posterimage.jpg">

    </video>
  </div>
</div>

<div class="menus">
  <ul class="menus__list">
    <li class="menus__list__item">
      <h4>My Communities</h4>
      <ul class="menus__list__item__list">
        <li class="menus__list__item__list__item">
          <a href="#">Veerle Verbert</a>
        </li>
      </ul>
    </li>
    <li class="menus__list__item">
      <h4>Learn WordPress</h4>
      <ul class="menus__list__item__list">
        <li class="menus__list__item__list__item">
          <a href="#">WP101</a>
        </li>
        <li class="menus__list__item__list__item">
          <a href="#">WPBeginner</a>
        </li>
        <li class="menus__list__item__list__item">
          <a href="#">WP Sessions</a>
        </li>
      </ul>
    </li>
    <li class="menus__list__item">
      <h4>WordPress Courses</h4>
      <ul class="menus__list__item__list">
        <li class="menus__list__item__list__item">
          <a href="#">Veerle Verbert</a>
        </li>
      </ul>
    </li>
    <li class="menus__list__item">
      <h4>Additional Info</h4>
      <ul class="menus__list__item__list">
        <li class="menus__list__item__list__item">
          <a href="#">About Filip Van Reeth</a>
        </li>
        <li class="menus__list__item__list__item">
          <a href="#">Contact Me</a>
        </li>
        <li class="menus__list__item__list__item">
          <a href="#">Disclosure</a>
        </li>
        <li class="menus__list__item__list__item">
          <a href="#">Terms &amp; Conditions</a>
        </li>
      </ul>
    </li>
  </ul>
</div>

<div class="copyright-social-media">
  <div class="copyright-social-media__content">
    <div class="copyright-social-media__content__social-media">
      <ul class="copyright-social-media__content__social-media__list">
        <li class="copyright-social-media__content__social-media__list__item">
          <a href="#" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        </li>
        <li class="copyright-social-media__content__social-media__list__item">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </li>
        <li class="copyright-social-media__content__social-media__list__item">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </li>
        <li class="copyright-social-media__content__social-media__list__item">
          <i class="fa fa-github" aria-hidden="true"></i>
        </li>
      </ul>
    </div>
    <div class="copyright-social-media__content__copyright">
      <p class="copyright-social-media__content__copyright__copyright">
        <?php _e( 'Copyright', 'fvr' ) ?> © <?php _e( 'Filip Van Reeth', 'fvr' ) ?><br/>
      </p>
      <p class="copyright-social-media__content__copyright__development">
        Designed by me ;-) Curious about my development skills? Grab the code on <a href="https://github.com/filipvanreeth" target="_blank">GitHub</a>.
      </p>
    </div>
  </div>
</div>

<?php
// if ( have_posts() ) {
//   while ( have_posts() ) : the_post();
//     the_title( '<h1>', '</h1>' );
//     the_content();
//     if ( comments_open() || get_comments_number() ) {
//       comments_template();
//     }
//   endwhile;
// }
?>

<?php get_footer(); ?>
