<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>未浓|不仅仅是电子杂志</title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>" >
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.css" >
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/custom.css">
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.min.js"></scrip>
	<?php wp_head();?>


</head>

	<body>
		<div class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo home_url(); ?>">未浓</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<?php wp_list_pages(array('title_li' => '')); ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="main">
