<?php

/** Template Name: Cafes

 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<?php
    $args = array(
        'post-type' => 'cafe'
    );
    $the_query = new WP_Query($args);

    ?>
    <?php if ($the_query->have_posts()) : while ($the_query->have_posts() ) :$the_query->the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_post_thumbnail(); ?>
<?php endwhile; ?>
<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();


?>