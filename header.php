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
	<script type="text.javascript">
		var existAdminBar = document.getElementById("wpadminbar");
		if(existAdminBar) { 
		   document.getElementById("nav").className = "navbar navbar-default navbar-fixed-top2 navbar-fixed-top";
		} 
	</script>
	<?php wp_head();?>


</head>

	<body>
		<div id="nav" class="navbar navbar-default navbar-fixed-bottom">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-logo" href="<?php echo home_url(); ?>">
						<img class="wenon-logo" alt="Brand" src="http://7xt9rf.com1.z0.glb.clouddn.com/WPtheme/wenon-no.png" style="display: inline;margin-top: 8px;">
					</a>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="glyphicon glyphicon-glyphicon glyphicon-menu-up" aria-hidden="true"></span>
					</button>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<?php 
							if ( is_user_logged_in() ) { 
							echo '<li><a href="wp-admin">你好，'.wp_get_current_user()->display_name.'~</a></li>'; 
							} else { 
							echo '<li><a href="wp-login.php">登入</a></li>'; 
							} 
						?> 
					</ul>
					<ul class="nav navbar-nav">
						<?php wp_list_pages(array('title_li' => '')); ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="main">
