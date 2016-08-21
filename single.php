<?php get_header();?>

<?php while (have_posts()):the_post();?>

		<nav id="top" class="navbar navbar-inverse navbar-fixed-top">
        <div class="container"  style="color:#1d242a;">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">展开导航栏</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo(site_url());?>"><img alt="未浓" src="//wenon.org/images/ui/brand.png" style="width:20;height:20;"></a>
            <a class="navbar-brand" href="#menu"><?php wenon_get_archive_category() ?></a>
			<?php //wenon_category_title('<a class="navbar-brand" href="#menu">','</a>') ?>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">卷首语</a></li>
			  <li><a href="<?php echo site_url();?>">返回首页</a></li>
              <li><a href="//wenon.org/aboutus.html">关于我们</a></li>
            </ul>
          </div>
        </div>
      </nav>

<div class="container page">

	
	<div class="post-area">
		<div class="thumbnail-area">
			<?php
				if (has_post_thumbnail()) {
					the_post_thumbnail('large', array(
						'alt' => trim(strip_tags($post->post_title)),
						'title' => trim(strip_tags($post->post_title)),
						'class' => '',
						)
					);
				}
			?>
		</div>
	</div>
	<div class="post-area">
		<div class="container-fulid post-title-area">
			<h3 class="post-title"><?php the_title(); ?></h3>
			<h5><?php get_the_category?></h5>
		</div>

		<div class="post-content">
			<?php the_content(); ?>
		</div>
		
		<!--<ul class="pager">
			<li class="next">
				<?php previous_post_link('%link'); ?>
			</li>
			<li class="previous">
				<?php next_post_link('%link'); ?>
			</li>
		</ul>-->
	</div>
	
	<div class="container" style="width:90%;">
		<?php comments_template(); ?>
	</div>
	
<?php endwhile;?>
</div>

<?php get_sidebar(); ?>
<?php get_footer();?>
