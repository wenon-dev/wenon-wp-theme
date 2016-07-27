<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/timeline.css">

<section id="cd-timeline" class="cd-container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
				<img src="\wp-content\themes\wenon-WPtheme\assets\images\cd-icon-picture.svg" alt="Picture">
			</div>
			<div class="cd-timeline-content">
				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				<p><?php the_excerpt(); ?></p>
				<a href="<?php the_permalink() ?>" class="cd-read-more" target="_blank">阅读全文</a>
				<span class="cd-date"><?php the_time('Y-m-d')?> by <?php the_author();?></span>
			</div>
		</div>
	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>

</section>

<!-- <div class="index-page container">
	<div class="container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="row vol">
				<div class="container-fluid col-md-7 col-xs-12">
					<div class="img-rounded post-cover">
						<?php
							if ( has_post_thumbnail() ) {
								the_post_thumbnail('thumbnail',array(
								    'alt' => trim(strip_tags( $post->post_title )),
								    'title'=> trim(strip_tags( $post->post_title )),
								    'class' => 'img-rounded post-cover'
								    	)
									);
								}
						?>
					</div>
				</div>
				<div class="container-fluid col-md-5 col-xs-12 text-left">
					<a href="<?php the_permalink() ?>" rel="postlink" title="<?php the_title_attribute(); ?>">
						<h1 class="post-headers"> <?php the_title(); ?></h1>
					</a>
					<div class="div-excerpt">
						<?php the_excerpt(); ?>
					</div>
					<div class="div-meta-data">
						<span><?php the_time('Y-m-d')?> by <?php the_author();?><span>
					</div>
				</div>
			</div>

			<?php endwhile; else: ?>
			<p><?php _e('Sorry, this page does not exist.'); ?></p>
		<?php endif; ?>
	</div>
</div> -->
<?php get_footer(); ?>