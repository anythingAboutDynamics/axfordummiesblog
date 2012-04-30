<?php get_header(); ?>

<!-- Side Central START -->
<div class="SCS">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="post" id="post-<?php the_ID(); ?>">
		<h1>
			<?php the_title(); ?>
		</h1>
		<div class="Entry">
			<?php the_content(); ?>
			<?php wp_link_pages(array('before' => '<p><strong>P&aacute;ginas:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		</div>
		<?php endwhile; ?>
		<?php else : ?>
		<h2 class="center">
			<?php _e('N&atilde;o encontrado.','ax4dummies');?>
		</h2>
		<p class="center">
			<?php _e("Desculpe, mas voc&ecirc; est&aacute; procurando por algo que n&atilde;o est&aacute; aqui.",'ax4dummies'); ?>
		</p>

		<?php endif; ?>
	</div>
	<!--  Side Central END -->
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>