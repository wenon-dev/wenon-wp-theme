<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<style type="text/css">

h1 {
    font-family:"Microsoft Yahei";
    color: #FFFFFF;
    text-shadow:2px;
    font-size:23pt;
}
}
section {
    display: block;
    height: 100vh;
}
h2 {
    color: #000000;
    font-family:"Microsoft Yahei";
}
.preface-text {
    text-shadow: 1px 1px 10px #000000;
    color: #FFFFFF;
    left: 29vmax;
    margin-left: 16px;
    margin-top: 10px;
    padding-bottom: 10px;
    line-height:150%;
}
.background_wrap {
	z-index: -1;
    position: fixed;
    height: 100vh;
    margin-top:0;
    bottom: 0;
    width: 100%;
    background-image: url("<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?>");
    background-size: cover;
    background-position: center top;
    -webkit-filter: brightness(0.7);
}
</style>
<div class="background_wrap"></div>
	<section id="primary" class="content-area container" style="padding-bottom:0px;padding-left: 0px;padding-right: 0px;">
	<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

		

<section id="cover" class="section">
    <div class="container" style="padding-top: 75vh">
        <div>
			<?php
				wenon_category_title( '<h1 class="preface-text">', '</h1>' );
				//the_archive_description( '<div class="preface-text" style="font-size:15px">', '</div>' );
				wenon_archive_description( 'description','<div class="preface-text" style="font-size:15px">', '</div>' );
			?>
        </div>
  </div>
  </section>
		
		<div class="container-fulid" style="background-color:white;">
		<div class="container catalog text-center" >
		  
        <div class="container col-md-6 col-xs-12">
		<h2>目录</h2>
            <ul class="list-group" style="padding-top: 10px;font-size:16px">
                <li class="list-group-item disabled">卷首语</li>
				<?php
					while ( have_posts() ) : the_post();
						get_template_part( 'content-series', get_post_format() );
					endwhile;
				?>
            </ul>
        </div>
        <div class="container col-md-6 col-xs-12">
		<h2>本期未浓</h2>
            <ul class="list-group" style="padding-top: 10px;text-align:left;">
				<?php 
					wenon_archive_description( 'info','<li class="list-group-item">', '</li>' );
				?>
            </ul>
        </div>
        <div style="margin-top:10px"><a href="<?php echo site_url();?>">返回首页</a></div>
		
		</div>
		</div>

			<?php
			
			

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

</body>
<?php get_sidebar(); ?>
</html>
