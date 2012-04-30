<?php get_header(); ?>
<!-- Side Central START -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php echo get_avatar(get_the_author_id(), 43);?>
<h1 class="Title">
	<a title="Link permanente para <?php the_title(); ?>"
		href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?> </a>
</h1>
<p>
	<?php _e('Publicado em','axfordummies');?>
	&nbsp;
	<?php the_time('d/m/Y');?>
	&nbsp;
	<?php _e('por','axfordummies');?>
	&nbsp;<a
		href="<?php bloginfo('url'); ?>/?author=<?php the_author_ID(); ?>"><strong><?php the_author();?>
	</strong> </a>
</p>
<?php the_content(__('Continue lendo &rarr;','axfordummies')); ?>
<p class="PostInfo Tag">
	<?php the_tags( '', ', ', ''); ?>
</p>
<p>--</p>
<h3>
	<?php _e('Leia tamb&eacute;m','axfordummies');?>
</h3>
<ul>
	<?php wp_related_posts(''); ?>
</ul>
<?php comments_template(); ?>
<?php endwhile; ?>

<?php else : ?>
<h2 class="center">N&atilde;o encontrado</h2>
<p class="center">
	<?php _e("O que voc&ecirc; procura n&atilde;o est&aacute; aqui...",'axfordummies'); ?>
</p>

<?php endif; ?>
<!--  Side Central END -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>