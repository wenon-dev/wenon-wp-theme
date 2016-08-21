<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#333">
	<title>
		<?php wp_title("--",true,"right"); ?>
		<?php bloginfo("name"); ?>
	</title>
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
