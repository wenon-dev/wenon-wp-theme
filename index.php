<?php get_header(); ?>
<div class="index-page container" id="index-page">
	<?php
		foreach (get_categories() as $cat) :
			if ( get_category_link($cat->term_id) == "uncategorized" ) { //过滤”未分类“目录
				continue;
			}
	?>
		<div id="vol" class="row vol" onclick="location.href='<?php echo get_category_link($cat->term_id); ?>'" >
			<div class="container-fluid col-md-7 col-xs-12">
				<img class="img-rounded post-cover" src="<?php
					$image_url = z_taxonomy_image_url($cat->term_id);
					$none_image_url = "http://testing.wenon.org/wp-content/uploads/2016/08/default_cat_cover.png";
					if ( $image_url != "" ) {
						echo $image_url;
					} else {
						echo $none_image_url;
					}
				?>"></img>
			</div>
			<div class="container-fluid col-md-5 col-xs-12 text-left">
				<a href="<?php echo get_category_link($cat->term_id); ?>" style="color:black">
					<h1 class="post-headers"><?php echo $cat->cat_name; ?></h1>
				</a>
				<div class="div-excerpt">
					<?php
					$raw_cat_description = category_description($cat->term_id); //获取当前分类描述
					if ( $raw_cat_description ) {
						$des_cat_array = explode( '|' , $raw_cat_description );
						$cat_description = $des_cat_array[0];
						echo $cat_description;
					}
					?>
				</div>
				<p class="moresign" onclick="location.href='<?php echo get_category_link($cat->term_id); ?>'">Read More</p>
			</div>
        </div>
		<hr>
 <?php endforeach; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
