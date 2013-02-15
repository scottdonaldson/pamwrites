<?php get_header(); the_post(); ?>

<div id="content">
    
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    	<h1 class="entry-title"><?php the_title(); ?></h1>
        	
        <div class="entry-meta">
            <p class="visuallyhidden">By <?php the_author(); ?></p>
            <abbr class="entry-date published" title="Published on <?php echo get_the_date('F j, Y'); ?>"><?php echo get_the_date('F j, Y'); ?></abbr>
            <?php edit_post_link('| Edit'); ?>
        </div><!-- .entry-meta -->
 
        <div class="entry-content">
        	<?php the_content(); ?>
        </div><!-- .entry-content -->
 
		<div class="entry-utility">
           	<?php the_tags( '<span class="tag-links"><span class="entry-utility-prep entry-utility-prep-tag-links">' . __('TAGS: ', 'pamwrites' ) . '</span>', ", ", "</span>\n\t\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
       	</div><!-- .entry-utility -->
	</article><!-- .post -->          

	<?php comments_template('', true); ?>
 
</div><!-- #content -->

 
<?php get_sidebar(); get_footer(); ?>