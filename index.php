<?php get_header(); ?>
<div class="index-page container">
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
</div>
<?php get_footer(); ?>
