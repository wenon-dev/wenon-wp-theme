<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>未浓|不仅仅是电子杂志</title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>" >
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.css" >
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/custom.css">
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.min.js"></script>

	<link href="//wenon.org/css/main.css" rel="stylesheet" type="text/css">
	<?php wp_head();?>


</head>
<?php if (is_home() || is_front_page()) { ?>
	<body style="font-family: 'Microsoft Yahei'; background-image: url(//wenon.org/images/ui/background-x-g.png);">
<?php }else{ ?>
	<body style="font-family: 'Microsoft Yahei'; background-color: #F7F7F7;">
<?php }?>
		<nav id="menu">

		</nav>


<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="margin-top:50px">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="myModalLabel">菜单</h4>
					</div>
					<div class="modal-body">

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
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-default"><a href="<?php echo home_url().'/wp-login.php'?>">注册</a></button>
							</div>
						</div>

						<br>
						
						<div class="input-group">
							<input type="text" class="form-control" placeholder="文章……">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">搜索</button>
							</span>
						</div>

						<br>
						
						<ul class="list-group">
							<?php wp_list_pages(array('title_li' => '','class' => 'list-group-item')); ?>
						</ul>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<?php if (is_home() || is_front_page()) { ?>
		<div id="nav" class="navbar-alpha">
			<div class="container" style="padding-top: 5px">
				<a data-toggle="modal" data-target="#myModal"><img class="brand" alt="未浓" src="//wenon.org/images/ui/brandlogo.png" width="60" height="60"></a>
			</div>
		</div>
		<?php }else if(!is_category()){ ?>

	  
		<?php }?>
		<div id="page">
		<div class="main">
