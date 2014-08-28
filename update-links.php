<?php
/*
Template Name: Update all links
*/

$allposts = new WP_Query(array(
	'posts_per_page' => -1
));

$i = 0;
$j = 0;

while ($allposts->have_posts()) : $allposts->the_post();

	$old_content = get_the_content();

	if ( substr_count($old_content, 'pamwrites.scottdonaldson.net') > 0 ) {

		$new_content = str_replace('pamwrites.scottdonaldson.net', 'pamwrites.net', $old_content);

		$j++;

		wp_update_post(array(
			'ID' => get_the_ID(),
			'post_content' => $new_content
		));
	}

	$i++;
endwhile;
wp_reset_postdata();

?>

Updated <?= $j; ?> posts out of <?= $i; ?> total.