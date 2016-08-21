<div class="wenon-sidebar" id="wenon-sidebar">
    <script>
    //侧边栏划出时其他内容的鼠标事件失效
    /*    $("#wenon-sidebar").hover(function(){
            jQuery(document).on('mousedown',function(Event){
            Event.preventDefault();
            $("#wenon-sidebar").unbind("mouseenter").unbind("mouseleave");
        });
    });*/
    //试了一个晚上也没有成功，生气!!!!!!
    </script>
    <div class="pullsign-bg">
		<div class="pullsign">
			<span class="glyphicon glyphicon-option-vertical"></span>
		</div>
	</div>
	<div class="container wenon-sidebar-content" style="width: 95%">
		<h3>操作中心</h3>
		<br>
        <!--用户登陆-->
		<div class="btn-group btn-group-justified" role="group" aria-label="...">
			<div class="btn-group" role="group">
				<button type="button" class="btn btn-default">
					<?php
						if ( is_user_logged_in() ) {
							echo '<a href="'.admin_url().'">Allahu Akbar，'.wp_get_current_user()->display_name.'~</a>';
						} else {
							echo '<a href="'.home_url().'/wp-login.php">登入</a>';
						}
					?>
				</button>
			</div>
			<?php if ( !is_user_logged_in() ) { ?>
			<div class="btn-group" role="group">
				<button type="button" class="btn btn-default"><a href="<?php echo home_url().'/wp-login.php'?>">注册</a></button>
			</div>
			<?php } ?>
		</div>
		<br>
        <!--搜索框-->
		<div class="input-group">
			<input type="text" class="form-control" placeholder="文章……">
			<span class="input-group-btn">
				<button class="btn btn-default" type="button">搜索</button>
			</span>
		</div>
		<br>
        <!--目录-->
		<ul class="list-group">
			<?php wp_list_pages(array('title_li' => '','class' => 'list-group-item')); ?>
		</ul>
		<?php if(is_single()) {
		global $post;
		$categories = get_the_category(); //函数获取分类ID号
		foreach ($categories as $category){
		?>
		<ul class="hi">
		<?php
		$posts = get_posts('numberposts=80&orderby=rand&category='. $category->term_id);
		//通过get_posts函数，根据分类ID来获取这个ID下的文章内容。
		foreach($posts as $post){
		?>
			<li>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</li>
		<?php }//foreach 结束?>
		</ul>
		<?php } //foreach 结束?>
		<?php } //if 结束?>
	</div>
</div>
