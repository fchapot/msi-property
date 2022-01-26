<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package msi-property
 */

get_header();
?>
  <main>

    <section class="content">
      <div class="bandes">
        <div class="left beige"></div>
        <div class="center darkgrey"></div>
        <div class="right beige"></div>
      </div>
      <div class="content-carrousel">
        <?php echo do_shortcode('[metaslider id="80"]'); ?>
      </div>
    </section>

    


  </main>
  <?php
get_sidebar();
get_footer();

