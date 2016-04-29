<?php get_header();?>
<div class="container">
	<?php while(have_posts()):the_post();?>
		<?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail('large',array(
					'alt' => trim(strip_tags( $post->post_title )),
					'title'=> trim(strip_tags( $post->post_title )),
					'class' => 'head-img'
						)
					);
				}
		?>

		<div class="container">
			<h3 class="head"><?php the_title(); ?></h3>
		</div>

		<div class="container">
			<div class="post-content">
				<?php the_content(); ?>
		    </div>
		</div>

						<ul class="pager">
							<li class="next"><?php previous_post_link('%link'); ?></li>
							<li class="previous"><?php next_post_link('%link'); ?></li>
						</ul>
					</div>
					<div class="post-comment">
						<?php comments_template(); ?>
					</div>
		</div>
	<?php endwhile;?>
</div>
<?php get_footer();?>
