<?php get_header();?>
<?php $countervariable=1; ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<h2>
	<a
		title="<?php _e('Link permanente para', 'axfordummies');?>&nbsp;<?php the_title(); ?>"
		href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?> </a>
</h2>
<p class="meta">
	<?php _e('Publicado em','axfordummies');?>
	&nbsp;
	<?php the_time('d/m/Y');?>
	&nbsp;
	<?php _e('por','axfordummies');?>
	&nbsp;
	<?php the_author();?>
</p>
<?php the_excerpt(__('Continue lendo &rarr;','axfordummies')); ?>
<ul>
	<li><?php comments_popup_link(__('0', 'axfordummies'), __('1', 'axfordummies'), __('%', 'axfordummies'), '' ); ?>
	</li>
</ul>
<!-- <?php trackback_rdf(); ?> -->
<?php endwhile; ?>

<?php next_posts_link(__('&larr; Posts antigos', 'axfordummies')) ?>
<?php previous_posts_link(__('Posts recentes &rarr;', 'axfordummies')) ?>

<?php else : ?>
<h2 class="center">N&atilde;o encontrado</h2>
<p class="center">
	<?php _e("Descupe, mas voc&ecirc; est&aacute; procurando por algo que n&atilde;o est&aacute; aqui.",'axfordummies'); ?>
</p>
<?php endif;?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>