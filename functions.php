<?php
	add_theme_support( "post-thumbnails" );  // 开启文章缩略图
?>

	<?php function wenon_comment($comment, $args, $depth)
	{ $GLOBALS['comment'] = $comment; ?>
	<li class="comment-area" id="li-comment-<?php comment_ID(); ?>">
		<div class="media-body">
			<div class="media-left">
				<a href="#" class="media-object">
				<?php if (function_exists('get_avatar') && get_option('show_avatars')) { echo get_avatar($comment, 48); } ?></a>
			</div>
			<div class="media-body">
				<h3 class="media-heading"><?php echo get_comment_author_link(); ?></h4>
				<small><?php echo get_comment_time('Y-m-d H:i'); ?></small>
				<?php if ($comment->comment_approved == '0') : ?>
				<span>你的评论正在审核，稍后会显示出来！</span>
				<br />
				<?php endif; ?>

				<p><?php comment_text(); ?></p>

				<div class="reply">
					<?php comment_reply_link(array_merge( $args, array('reply_text' => '回复','depth' => $depth, 'max_depth' => $args['max_depth']))) ?> &nbsp;&nbsp;
					<?php edit_comment_link('修改'); ?>
				</div>
			</div>

			<div class="comment_content" id="comment-<?php comment_ID(); ?>">

			</div>
		</div>
	</li>
	<?php } ?>-
