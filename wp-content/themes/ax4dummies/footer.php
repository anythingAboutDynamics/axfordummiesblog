
</div>
</div>
<!-- container END -->

<div class="ExtraBG">
	<div class="Extra">
		<div class="RecentPosts">
			<h3>
				<?php _e('Posts recentes','ax4dummies');?>
			</h3>
			<ul>
				<?php if (function_exists('mdv_recent_posts')) { 
					mdv_recent_posts();
				} ?>
			</ul>
		</div>
		<div class="LastComments">
			<h3>
				<?php _e('Coment&aacute;rios recentes','ax4dummies');?>
			</h3>
			<ul>
				<?php if (function_exists('mdv_recent_comments')) { 
					mdv_recent_comments(10, 6, '<li>', '</li>', true, 0);
				} ?>
			</ul>
		</div>
		<div class="MostCommented">
			<h3>
				<?php _e('Mais comentados','ax4dummies');?>
			</h3>
			<ul>
				<?php if (function_exists('mdv_most_commented')) {  
					mdv_most_commented();
				} ?>
			</ul>
		</div>
	</div>
</div>

<div class="FooterBG">
	<div class="Footer">
		<p>
			&copy;&nbsp;
			<?php bloginfo('name');?>
			&nbsp;<a class="Feeds" href="<?php bloginfo('rss2_url');?>"><img
				src="<?php bloginfo('template_url');?>/images/feed.png" /> </a>
		</p>
	</div>
</div>

</div>

<?php wp_footer();?>
</body>
</html>
