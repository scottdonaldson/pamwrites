<?php get_header(); the_post(); ?>

<div id="content">
    
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    	
        <?php if (!is_page('about')) { // Don't show 'About' on About page ?>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php } ?>
 
        <div class="entry-content">
        	<?php the_content(); ?>
        </div><!-- .entry-content -->
 
	</article><!-- .post -->          
 
</div><!-- #content -->

 
<?php 
if (is_page('about')) { get_sidebar('about'); 
} else { get_sidebar(); }
 
get_footer(); ?>