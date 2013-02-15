<?php 
/*
Template Name: Recent Reads
*/
get_header(); ?>

<div id="content">

<h1 class="tag-page-title">Recent Reads</h1> 
<?php query_posts('post_type=reads&posts_per_page=10'); while (have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php the_post_thumbnail(); ?>
        <div class="entry-content">
        	<p><em><?php the_title(); ?></em> by <?php the_field('author'); ?>.</p>
            <?php the_content(); ?>
            
            <img class="score" src="<?php bloginfo('template_url'); ?>/images/star_<?php
			$score = get_field('score');
			if ($score == '1') { echo 'one'; }
			elseif ($score == '2') { echo 'two'; } 
			elseif ($score == '3') { echo 'three'; } 
			elseif ($score == '4') { echo 'four'; } 
			elseif ($score == '5') { echo 'five'; } 
			?>.gif" />
        </div><!-- .entry-content -->
    </article><!-- .post --> 

<?php endwhile; wp_reset_query(); ?>         
 
</div><!-- #content -->
 
<?php get_sidebar(); get_footer(); ?>