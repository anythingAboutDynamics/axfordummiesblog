
</div>
</div>
<!-- fim container -->
<!-- footer -->
<footer>
	<div class="limite">
		<h3>Sobre</h3>
		<ul>
			<li><?php $page_id = 2;
			$page_data = get_page($page_id);
			echo apply_filters('the_content', $page_data->post_content); ?></li>
		</ul>
		<h3>
			<?php _e('Posts recentes','axfordummies');?>
		</h3>
		<ul>
			<?php if (function_exists('mdv_recent_posts')) { 
				mdv_recent_posts();
			} ?>
		</ul>
		<h3>
			<?php _e('Tag Cloud','axfordummies');?>
		</h3>
		<ul>
			<?php $args = array(
					'number'                    => 12,
					'format'                    => 'list',
					'orderby'                   => 'name',
					'order'                     => 'ASC',
					'exclude'                   => null,
					'include'                   => null,
					'topic_count_text_callback' => default_topic_count_text,
					'taxonomy'                  => 'post_tag',
					'echo'                      => true );

			wp_tag_cloud($args);?></ul>
		<?php wp_footer();?>
	</div>
</footer>
<!-- end footer -->
</body>
</html>
