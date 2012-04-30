<!-- inicio sidebar -->
<aside class="lateral">
	<nav class="menu-principal">
		<h3>Menu</h3>
		<ul>
			<?php

			$orderby  		= 'name';
			$title_li 		= '';
			$hide_empty 	= 0;
			$include		= '1, 4, 110, 35, 144, 6, 24, 25, 151, 97';
			$hierarchical 	= 0;

			$args = array(

					'orderby' 		=> $orderby,
					'title_li'		=> $title_li,
					'hide_empty'	=> $hide_empty,
					'include'		=> $include,
					'hierarchical'	=> $hierarchical
			);
			?>
			<?php wp_list_categories($args); ?>
		</ul>
	</nav>
	<?php if( is_single() ): ?>

	<div class="fb-page">Like Ax for Dummies Blog?</div>
	<?php WPPP_show_popular_posts( "title=Blogs&number=3&days=180&format=<a href='%post_permalink%' title='%post_title_attribute%'>%post_title% (%post_views% views)</a>" );?>

	<?php else: ?>

	<div class="social-media">
		<h3>
			Mantenha-se informado!&nbsp;<a href="<?php bloginfo('rss_url'); ?>"><acronym
				title="Read Syndication blá blá blá">RSS</acronym> </a>
		</h3>
		<ul>
			<li>Siga-nos no Twitter</li>
			<li>Like do Facebook</li>
			<li>Siga-nos no <a href="http://twitter.com/axfordummies"
				title="Siga @axfordummies">Twitter</a> ou <a
				href="http://facebook.com/axfordummies"
				title="Curta Ax for Dummies Blog no Facebook">Facebook</a>
			</li>
		</ul>
	</div>
	<div class="fb-activity">
		<h3>Friend Activity</h3>
	</div>

	<?php endif; ?>
</aside>
<!-- fim sidebar -->
