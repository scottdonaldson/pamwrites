<?php

register_nav_menu('primary','Primary Menu');

// Custom callback to list comments
function custom_comments($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment;
    $GLOBALS['comment_depth'] = $depth;
  ?>
    <li id="comment-<?php comment_ID() ?>" <?php comment_class() ?>>
        <div class="comment-author vcard"><?php commenter_link() ?></div>
        <div class="comment-meta"><?php printf(__('Posted %1$s at %2$s', 'pamwrites'),
                    get_comment_date(),
                    get_comment_time() );
                     ?></div>
  <?php if ($comment->comment_approved == '0') _e("\t\t\t\t\t<span class='unapproved'>Your comment is awaiting moderation.</span>\n", 'pamwrites') ?>
          <div class="comment-content">
            <?php comment_text() ?>
        </div>
        <?php // echo the comment reply link
            if($args['type'] == 'all' || get_comment_type() == 'comment') :
                comment_reply_link(array_merge($args, array(
                    'reply_text' => __('Reply','pamwrites'),
                    'login_text' => __('Log in to reply.','pamwrites'),
                    'depth' => $depth,
                    'before' => '<div class="comment-reply-link">',
                    'after' => '</div>'
                )));
            endif; } // end custom_comments

// Custom callback to list pings
function custom_pings($comment, $args, $depth) {
       $GLOBALS['comment'] = $comment;
        ?>
            <li id="comment-<?php comment_ID() ?>" <?php comment_class() ?>>
                <div class="comment-author"><?php printf(__('By %1$s on %2$s at %3$s', 'pamwrites'),
                        get_comment_author_link(),
                        get_comment_date(),
                        get_comment_time() );
                        ?></div>
    <?php if ($comment->comment_approved == '0') _e('\t\t\t\t\t<span class="unapproved">Your trackback is awaiting moderation.</span>\n', 'pamwrites') ?>
            <div class="comment-content">
                <?php comment_text() ?>
            </div>
<?php } // end custom_pings

// Produces an avatar image with the hCard-compliant photo class
function commenter_link() {
    $commenter = get_comment_author_link();
    if ( ereg( '<a[^>]* class=[^>]+>', $commenter ) ) {
        $commenter = ereg_replace( '(<a[^>]* class=[\'"]?)', '\\1url ' , $commenter );
    } else {
        $commenter = ereg_replace( '(<a )/', '\\1class="url "' , $commenter );
    }
    $avatar_email = get_comment_author_email();
    $avatar = str_replace( "class='avatar", "class='photo avatar", get_avatar( $avatar_email, 80 ) );
    echo $avatar . ' <span class="fn n">' . $commenter . '</span>';
} // end commenter_link


// For tag lists on tag archives: Returns other tags except the current one (redundant)
function tag_ur_it($glue) {
    $current_tag = single_tag_title( '', '',  false );
    $separator = "\n";
    $tags = explode( $separator, get_the_tag_list( "", "$separator", "" ) );
    foreach ( $tags as $i => $str ) {
        if ( strstr( $str, ">$current_tag<" ) ) {
            unset($tags[$i]);
            break;
        }
    }
    if ( empty($tags) )
        return false;
 
    return trim(join( $glue, $tags ));
} // end tag_ur_it

// Featured images
add_theme_support('post-thumbnails');

// Create Project custom post type
function create_post_type_reads() {
	$template_url = get_bloginfo('template_url');
	register_post_type( 'reads',
		array(
		'labels' => array(
			'name' => __( 'Recent Reads' ),
			'singular name' => __( 'Recent Read' ),
			'add_new_item' => __( 'Add New Recent Read' ),
			'edit_item' => __( 'Edit Recent Read' ),
			'new_item' => __( 'New Recent Read' ),
			'view_item' => __( 'View Recent Reads' ),
			'search_items' => __( 'Search Recent Reads' ),
			'not_found' => __( 'No recent reads found' ),
			'not_found_in_trash' => __( 'No recent reads found in Trash' ),
			),
		'public' => true,
		'menu_icon' => $template_url.'/images/admin-reads.png',
		'menu_position' => 4	
		)
	);
	add_post_type_support( 'reads', 'thumbnail' );
}
add_action( 'init', 'create_post_type_reads' );


// New menu page for only page
function register_custom_menu_pages() {
	$template_url = get_bloginfo('template_url');
	add_menu_page('Prompts', 'Prompts', 'administrator', 'post.php?post=711&action=edit#acf_1540', '', $template_url.'/images/admin-prompts.png', 15);
	add_menu_page('Links', 'Links', 'administrator', 'link-manager.php', '', $template_url.'/images/chain.png', 27);
}
add_action('admin_menu', 'register_custom_menu_pages');


// Remove a few admin pages
function remove_admin() {
	remove_menu_page('upload.php');
	remove_menu_page('tools.php');
}
add_action('admin_menu', 'remove_admin');

// Add admin javascript and CSS
function pw_admin_stuff() {
	$template_url = get_bloginfo('template_url');
	echo '<script src="'.$template_url.'/js/admin.js"></script>';
	echo '<link rel="stylesheet" href="'.$template_url.'/css/admin-style.css" />';
}
add_action('admin_head', 'pw_admin_stuff');

// Admin footer
add_filter('admin_footer_text', 'left_admin_footer_text_output'); //left side
function left_admin_footer_text_output($text) {
    $text = 'Site developed by <a href="http://parsleyandsprouts.com" target="_blank">Parsley &amp Sprouts</a>.';
    return $text;
}
add_filter('update_footer', 'right_admin_footer_text_output', 11); //right side
function right_admin_footer_text_output($text) {
    $text = '&copy '.date('Y').'.';
    return $text;
}

?>