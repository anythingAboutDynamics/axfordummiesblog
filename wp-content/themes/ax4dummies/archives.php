<?php 
/*
 Template Name: Archives Page
*/
?>
<?php get_header();?>
<div class="SCS">
	<h1>
		<?php the_title();?>
	</h1>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="Entry">
		<?php the_content();?>
	</div>
	<?php endwhile; ?>
	<?php endif; ?>
	<ul class="archives">
		<li><h3 class="archives-category">
				<?php _e('Arquivos por categoria', 'ax4dummies');?>
			</h3></li>
		<ul>
			<?php wp_list_categories('optioncount=1&title_li=&show_count=1');?>
		</ul>
		<li><h3 class="archives-month">
				<?php _e('Arquivos por m&ecirc;s','ax4dummies');?>
			</h3></li>
		<ul>
			<?php wp_get_archives('type=monthly&show_post_count=1');?>
		</ul>
	</ul>
</div>
<?php get_sidebar();?>
<?php get_footer();?>