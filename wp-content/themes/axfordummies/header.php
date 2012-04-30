<?php
/**
 * @package axfordummies_theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<!-- XFN -->
<head profile="http://gmpg.org/xfn/11">

<!-- inicio titulo -->
<title><?php if ( is_home()   ) { ?> <?php bloginfo('name');?>&nbsp;&mdash;&nbsp;<?php bloginfo('description');?>
	<?php }?> <?php if ( is_search() ) { ?> <?php _e('Resultados de pesquisa','axfordummies');?>
	&nbsp;&mdash;&nbsp;<?php bloginfo('name'); ?> <?php } ?> <?php if ( is_author() ) { ?>
	<?php
	if(get_query_var('author_name')) :
	$curauth = get_userdatabylogin(get_query_var('author_name'));
	else :
	$curauth = get_userdata(get_query_var('author'));
	endif;
	?> <?php echo $curauth->first_name; ?>&nbsp;<?php echo $curauth->last_name; ?>&nbsp;&mdash;&nbsp;<?php bloginfo('name'); ?>
	<?php } ?> <?php if ( is_single() ) { ?> <?php wp_title(''); ?>&nbsp;&mdash;&nbsp;<?php bloginfo('name'); ?>
	<?php } ?> <?php if ( is_page() ) { ?> <?php wp_title(''); ?>&nbsp;&mdash;&nbsp;<?php bloginfo('name'); ?>
	<?php } ?> <?php if ( is_category() ) { ?> <?php echo str_replace("</p>","",str_replace("<p>", "", term_description())); ?>&nbsp;&mdash;&nbsp;<?php bloginfo('name'); ?>
	<?php } ?> <?php if ( is_tag() ) { ?> <?php echo single_term_title(); ?>&nbsp;&mdash;&nbsp;<?php bloginfo('name'); ?>
	<?php } ?>
</title>
<!-- fim titulo -->

<!-- charset -->
<meta charset="<?php bloginfo('charset'); ?>" />

<!-- windows search verification site -->
<meta name="verify-v1"
	content="rKX8NQyy9+iT/B+306c1kShq4fkAX1BbGQ7/JHy0YbY=" />

<!-- favico -->
<link rel="shorcut icon" type="image/x-ico"
	href="<?php bloginfo('template_url'); ?>/fav.ico" />

<!-- stylesheets -->
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet"
	type="text/css" />

<!-- pingback URL -->
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!-- tema javascript -->
<script type="text/javascript"
	src="<?php bloginfo('template_url'); ?>/javascript/imghover.js"> </script>

<!-- rss feeds -->
<link rel="alternate" type="application/rss+xml" title="RSS 2.0"
	href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92"
	href="<?php bloginfo('rss_url'); ?>" />

<!-- wordpress head -->
<?php wp_head(); ?>
</head>
<body>
	<!-- inicio header -->
	<header>
		<div class="limite">
			<h1 class="logo">
				<a href="<?php bloginfo('url');?>">AX for dummies Blog</a>
			</h1>
			<div class="searchForm">
				<form role="search" method="get" id="searchform"
					action="<?php bloginfo('url'); ?>">
					<fieldset>
						<label for="q"><input type="search" value="" name="q" id="q"
							placeholder="Procurando alguma coisa?" /> </label> <input
							type="submit" id="searchsubmit" value="Buscar" />
					</fieldset>
				</form>
			</div>
		</div>
	</header>
	<!-- fim header -->
	<!-- inicio container -->
	<div class="geral">
		<div class="limite">