<?php get_header(); ?>

<div id="content" class="clearfix">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
    
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
            <span class="comments-link">Comments: <?php comments_popup_link( __( 'Add a comment', 'pamwrites' ), __( '1 Comment', 'pamwrites' ), __( '% Comments', 'pamwrites' ) ) ?></span>
        </div><!-- .entry-utility -->
    </article><!-- .post -->
 
<?php endwhile; endif; ?>
                
    <div id="nav-below" class="navigation palatino">
        <div class="nav-previous">
            <?php next_posts_link('Older'); ?>		
        </div>
        <div class="nav-next">
            <?php previous_posts_link('Newer'); ?>
        </div>
    </div><!-- #nav-below -->

</div><!-- #content -->

<?php get_sidebar(); get_footer(); ?>