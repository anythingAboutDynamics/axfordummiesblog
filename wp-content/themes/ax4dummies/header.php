<?php
/**
 * @package ax4dummies_theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
<?php language_attributes(); ?>>
<!-- XFN -->
<head profile="http://gmpg.org/xfn/11">
<!-- Title -->
<title><?php if ( is_home()   ) { ?> <?php bloginfo('name');?>&nbsp;<?php bloginfo('description');?>
	<?php }?> <?php if ( is_search() ) { ?> <?php bloginfo('name'); ?>&nbsp;&mdash;&nbsp;<?php _e('Resultados de pesquisa','ax4dummies');
	} ?> <?php if ( is_author() ) { ?> <?php bloginfo('name'); ?>&nbsp;&mdash;&nbsp;<?php _e('Arquivos do autor','ax4dummies');
	} ?> <?php if ( is_single() ) { ?> <?php wp_title(''); ?>&nbsp;&mdash;&nbsp;<?php bloginfo('name'); ?>&nbsp;&mdash;&nbsp;<?php bloginfo('description');?>
	<?php } ?> <?php if ( is_page() ) { ?> <?php bloginfo('name'); ?>&nbsp;&mdash;&nbsp;<?php wp_title(''); ?>
	<?php } ?> <?php if ( is_category() ) { ?> <?php bloginfo('name'); ?>&nbsp;&mdash;&nbsp;<?php _e('Arquivos','ax4dummies');?>&nbsp;&mdash;&nbsp;<?php single_cat_title(); ?>
	<?php } ?> <?php if ( is_month() ) { ?> <?php bloginfo('name'); ?>&nbsp;&mdash;&nbsp;<?php _e('Arquivos','ax4dummies');?>&nbsp;&mdash;&nbsp;<?php the_time('F \d\e Y'); ?>
	<?php } ?> <?php if (function_exists('is_tag')) { 
		if ( is_tag() ) { ?>
	<?php bloginfo('name'); ?>&nbsp;&mdash;&nbsp;<?php _e('Arquivos de tag', 'ax4dummies');?>&nbsp;&mdash;&nbsp;<?php  single_tag_title("", true);
		}
	} ?></title>
<!-- Definindo Charset -->
<meta http-equiv="Content-Type"
	content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="verify-v1"
	content="rKX8NQyy9+iT/B+306c1kShq4fkAX1BbGQ7/JHy0YbY=" />
<!-- Web icon -->
<link rel="shorcut icon" type="image/x-ico"
	href="<?php bloginfo('template_url'); ?>/fav.ico" />
<!-- CSS Stylesheet -->
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet"
	type="text/css" />
<!-- Pingback URL -->
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!-- JavaScript theme -->
<script type="text/javascript"
	src="<?php bloginfo('template_url'); ?>/javascript/imghover.js"> </script>
<!-- RSS feeds -->
<link rel="alternate" type="application/rss+xml" title="RSS 2.0"
	href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92"
	href="<?php bloginfo('rss_url'); ?>" />
<!-- WP head -->
<?php wp_head(); ?>
</head>

<body>
	<!-- header -->
	<div id="bgcontain">

		<div class="HeaderBG">
			<div class="Header">
				<h1>
					<a title="<?php bloginfo("name");?>"
						href="<?php echo get_option('home'); ?>/"><span><?php bloginfo('name'); ?>
					</span> </a>
				</h1>
				<div class="Desc">
					<?php bloginfo('description'); ?>
				</div>
				<div class="TopMenu">
					<ul>
						<?php wp_list_pages('depth=1&sort_column=menu_order&title_li=' . __('') . '' ); ?>
					</ul>
				</div>
				<div class="Search">
					<fieldset>
						<legend>
							<?php _e('Pesquisar','ax4dummies');?>
						</legend>
						<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
							<input type="text" name="s" class="keyword" />
							<div id="buttonsearch">
								<input name="submit" type="image" class="search"
									onmouseover="javascript:changeSty('searchIE');"
									onmouseout="javascript:changeSty('search');" title="Search"
									src="<?php bloginfo('template_url'); ?>/images/transparent.gif"
									alt="Search" />
							</div>
						</form>
					</fieldset>
				</div>
				<div class="SearchCorner"></div>
			</div>
		</div>
		<!-- header end -->
		<!-- container start -->
		<div class="ContainerBG">
			<div class="Container">