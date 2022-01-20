<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package msi-property
 */

get_header();

$slider = get_field('shortcode_du_slider');
?>

<main>
  <section class="content">
    <div class="bandes">
      <div class="left beige"></div>
      <div class="center darkgrey"></div>
      <div class="right beige"></div>
    </div>
    <div class="content-bien">
      <div class="slider-bien">
        <?= do_shortcode($slider); ?>
      </div>
      <div class="description-bien">
				<div class="description-bien-grid">
					<img class="picto picto-bien" src="<?= get_template_directory_uri() ?>/img/picto_04.svg" style="height:25px">
					<p class="underscore"><?php the_field('type_de_bien') ?></p>

					<img class="picto picto-pieces" src="<?= get_template_directory_uri() ?>/img/picto_06.svg" style="height:25px">	
        	<p class="underscore"><?php the_field('nombre_de_pieces') ?> Pièce(s)</p>
			
					<img class="picto picto-surface" src="<?= get_template_directory_uri() ?>/img/picto_08.svg" style="height:25px">	
        	<p class="underscore"><?php the_field('surface') ?> M<sup>2</sup></p>
			
					<img class="picto picto-prix" src="<?= get_template_directory_uri() ?>/img/picto_05.svg" style="height:25px">	
        	<p class="underscore"><?php the_field('prix') ?> € FAI</p>
			
					<img class="picto picto-description" src="<?= get_template_directory_uri() ?>/img/picto_01.svg" style="height:25px">	
        	<p class="underscore"><?php the_field('description') ?></p>
      </div>
    </div>
  </section>
</main>

<?php
get_sidebar();
get_footer();