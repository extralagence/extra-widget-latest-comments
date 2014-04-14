<!-- This file is used to markup the public-facing widget. -->
<?php
extract( $args );
// these are the widget options
$title = apply_filters('widget_title', $instance['title']);
$number_of_comments = $instance['number_of_comments'];

$comments = get_comments(array(
	'status' => 'approve',
	'number' => $number_of_comments
));

// Display the widget
// Check if title is set
if ( $title ) {
	echo $before_title . $title . $after_title;
}
?>
<?php if (count($comments)) : ?>
<ul>
	<?php foreach($comments as $comment) : ?>
		<li>
			<div class="date">
				<?php
					$the_date = mysql2date('d F Y', $comment->comment_date);
					$the_date = apply_filters('get_the_date', $the_date, 'd F Y');
					$author_link = '<a href="'.$comment->comment_author_url.'">'.$comment->comment_author.'</a>';
					echo sprintf(__("Le %s %s a dit :", "extra-widget-latest-comments"), $the_date, $author_link);
				?>
			</div>
			<div class="content">
				<?php echo wp_trim_words(apply_filters('the_content', $comment->comment_content), 15); ?>
			</div>
			<a class="post-link" href="<?php echo get_permalink($comment->comment_post_ID); ?>">
				<?php _e("Lire l'article", "extra-widget-latest-comments"); ?>
			</a>
		</li>
	<?php endforeach; ?>
</ul>
<?php endif; ?>
