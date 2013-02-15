<div id="sidebar">

	<img class="line" src="<?php echo bloginfo('template_url'); ?>/images/footer-line.png" />

    <aside class="about palatino">
        Pam Parker is an award-winning fiction author with a novel-in-progress. <a href="http://www.pamwrites.net/about">Read&nbsp;more&nbsp;&raquo;</a>
    </aside>
                
    <?php get_search_form(); ?>
    
    <aside class="social clearfix">
    	<a class="twitter" href="http://www.twitter.com/pamwrites" target="_blank"></a>
        <a class="facebook" href="http://www.facebook.com/pamwrites" target="_blank"></a>
        <a class="rss" href="http://feeds.feedburner.com/PamWrites" target="_blank"></a>
    </aside> 
    
    <aside class="prompts">  
        <h3><a href="<?php echo home_url(); ?>/tag/prompts">Pam Prompts</a></h3>
        <p>
        <?php
            $num = rand(1,5);
            the_field('prompt_'.$num, 711);
		?>
        </p>    
        <p><a href="http://www.pamwrites.net/tag/prompts">Read more &raquo;</a></p>
    </aside>
    
    <aside class="reads clearfix">
        <h3><a href="http://www.pamwrites.net/recent-reads">Pam Reads</a></h3>
        
		<?php query_posts('post_type=reads&posts_per_page=1'); while (have_posts()) : the_post(); 
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' ); 
		if ($image) : ?>
            <a href="http://www.pamwrites.net/recent-reads">
            	<img src="<?php echo $image[0]; ?>" />
            </a>
        <?php endif; ?>
        	<a href="http://www.pamwrites.net/recent-reads">
                <img class="score" src="<?php bloginfo('template_url'); ?>/images/star_<?php
                        $score = get_field('score');
                        if ($score == '1') { echo 'one'; }
                        elseif ($score == '2') { echo 'two'; } 
                        elseif ($score == '3') { echo 'three'; } 
                        elseif ($score == '4') { echo 'four'; } 
                        elseif ($score == '5') { echo 'five'; } 
                        ?>.gif" />
        	</a>
        <?php endwhile; wp_reset_query(); ?>
    </aside>
    
    <aside class="links">
        <?php 
		$args = array(
			'title_li' => __('Pam Recommends'),
			'title_before' => '<h3>',
    		'title_after' => '</h3>'
		);
		wp_list_bookmarks($args); ?>
    </aside>

</div><!-- #sidebar -->