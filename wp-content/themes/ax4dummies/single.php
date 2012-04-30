<?php get_header(); ?>
<!-- Side Central START -->
<div class="SC">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="Post">
		<div class="PostHead">
			<?php echo get_avatar(get_the_author_id(), 43);?>
			<h1 class="Title">
				<a title="Link permanente para <?php the_title(); ?>"
					href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?>
				</a>
			</h1>
			<p>
				<?php _e('Publicado em','ax4dummies');?>
				&nbsp;
				<?php the_time('d \d\e\ F \d\e Y');?>
				&nbsp;
				<?php _e('por','ax4dummies');?>
				&nbsp;<a
					href="<?php bloginfo('url'); ?>/?author=<?php the_author_ID(); ?>"><strong><?php the_author();?>
				</strong> </a>
			</p>
		</div>
		<div class="PostContent">
			<?php the_content(__('Continue lendo &rarr;','ax4dummies')); ?>
			<p class="PostInfo Tag">
				<?php the_tags( '', ', ', ''); ?>
			</p>
			<p>--</p>
			<div class="RelatedPosts">
				<h3>
					<?php _e('Leia tamb&eacute;m','ax4dummies');?>
				</h3>
				<ul>
					<?php wp_related_posts(''); ?>
				</ul>
			</div>
		</div>
	</div>
	<div>
		<?php comments_template(); ?>
	</div>
	<?php endwhile; ?>

	<?php else : ?>
	<h2 class="center">N&atilde;o encontrado</h2>
	<p class="center">
		<?php _e("O que voc&ecirc; procura n&atilde;o est&aacute; aqui...",'ax4dummies'); ?>
	</p>

	<?php endif; ?>

	<!--  Side Central END -->
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>