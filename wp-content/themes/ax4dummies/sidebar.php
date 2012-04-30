<!-- side right - start -->
<div id="rss">
	<div class='feedcountdiv'>
		<p>
			<a href='<?php bloginfo('url');?>/index.php/feed'> <!-- span class='feedcount'><span class='subscribers'><?php //fb_count();?></span><span class='after'>subscribers</span></span-->
				<img
				src="http://feeds.feedburner.com/~fc/axfordummies?bg=ee7d00&fg=ffffff&anim=0" />
			</a>
		</p>
	</div>
</div>
<div class="SR" id="sidebar">
	<div class="SRL">
		<div class="Categories">
			<h2>
				<?php _e('Categorias','ax4dummies');?>
			</h2>
			<ul>
				<?php list_cats(0, '', 'name', 'asc', '', 1, 0, 0, 1, 1, 1, 0,'','','','','') ?>
			</ul>
		</div>
		<div class="Archives">
			<h2>
				<?php _e('Arquivos', 'ax4dummies');?>
			</h2>
			<ul>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>
		</div>
		<div class="Links">
			<h2>
				<strong><?php _e('Refer&ecirc;ncias','ax4dummies');?> </strong>
			</h2>
			<ul>
				<?php get_links('-1', '<li>', '</li>', '', FALSE, 'id', FALSE, 
                FALSE, -1, FALSE); ?>
			</ul>
		</div>
		<div class="Meta">
			<h2>
				<?php _e('Meta','ax4dummies'); ?>
			</h2>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<li><a href="http://validator.w3.org/check/referer"
					title="This page validates as XHTML 1.0 Transitional">Valid <abbr
						title="eXtensible HyperText Markup Language">XHTML</abbr>
				</a></li>
				<li><a href="http://gmpg.org/xfn/"><abbr
						title="XHTML Friends Network">XFN</abbr> </a></li>
				<?php wp_meta(); ?>
			</ul>
		</div>
	</div>
	<div class="SRR">
		<div class="Calendar">
			<h2>
				<?php _e('Calend&aacute;rio','ax4dummies');?>
			</h2>
			<?php get_calendar(daylength); ?>
		</div>
		<?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
		<?php endif; ?>
	</div>
</div>
<!-- side right - end -->
