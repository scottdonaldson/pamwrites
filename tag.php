<?php get_header(); ?>

<div id="content">       

	<?php if (is_tag('prompts')) { // Are we on the Prompts page? ?>
    
    <h1 class="tag-page-title"><strong>Writing Prompts</strong></h1>
    <p class="tag-page-title palatino">Writing prompts are a great way to stay motivated, find new ideas and just plain have fun with your writing. Check out the posts on this page for some inspiring ideas to jumpstart your writing.</p>
    
	<?php } else { // If not, display normal tag title?>
    
    <h1 class="tag-page-title">Posts tagged '<?php single_tag_title() ?>'</h1>
    
    <?php } 
	
	if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    	<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
 
        <div class="entry-meta">
            <p class="visuallyhidden">By <?php the_author(); ?></p>
            <abbr class="entry-date published" title="Published on <?php echo get_the_date('F j, Y'); ?>"><?php echo get_the_date('F j, Y'); ?></abbr>
            <?php edit_post_link('| Edit'); ?>
        </div><!-- .entry-meta -->
 
        <div class="entry-summary">
			<?php the_excerpt(); ?><a href="<?php the_permalink(); ?>">Read more &raquo;</a>
        </div><!-- .entry-summary -->
 
        <div class="entry-utility">
			<?php if ( $tag_ur_it = tag_ur_it(', ') ) : // Returns tags other than the one queried ?>
            <span class="tag-links"><?php printf( __( 'OTHER TAGS: %s', 'pamwrites' ), $tag_ur_it ) ?></span>
			<?php endif; ?>
			<span class="meta-sep"> | </span>
            <span class="comments-link">Comments: <?php comments_popup_link( __( 'Add a comment', 'pamwrites' ), __( '1 Comment', 'pamwrites' ), __( '% Comments', 'pamwrites' ) ) ?></span>
        </div><!-- #entry-utility -->
	</article><!-- .post -->
 
<?php endwhile; endif; ?>           
 
    <div id="nav-below" class="navigation">
        <div class="nav-previous">
            <?php next_posts_link(__( '<img src="http://www.pamwrites.net/wp-content/themes/pamwrites-1.0/images/previous.png" /><p>Older</p>', 'pamwrites' )) ?>		
        </div>
        <div class="nav-next">
            <?php previous_posts_link(__( '<p>Newer</p><img src="http://www.pamwrites.net/wp-content/themes/pamwrites-1.0/images/next.png" />', 'pamwrites' )) ?>
        </div>
    </div><!-- #nav-below -->              
 
</div><!-- #content -->

<?php get_sidebar(); get_footer(); ?>