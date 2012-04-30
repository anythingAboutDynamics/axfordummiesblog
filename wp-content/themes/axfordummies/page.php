<?php get_header();?>
<!-- Side Central START -->

<?php $countervariable=1; if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

<?php echo get_avatar(get_the_author_id(), 43);?>

<h1>
	<a
		title="<?php _e('Link permanente para', 'axfordummies');?>&nbsp;<?php the_title(); ?>"
		href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?> </a>
</h1>

<p>
	<?php _e('Publicado em','axfordummies');?>
	&nbsp;
	<?php the_time('d/m/Y');?>
	&nbsp;
	<?php _e('por','axfordummies');?>
	&nbsp;<strong><?php the_author();?> </strong>
</p>


<?php if (is_home() && (!$paged || $paged == 1) || is_search() || is_single() || is_page()): ?>

<?php the_content(__('Continue lendo &rarr;', 'axfordummies')); ?>

<?php else: ?>

<?php the_excerpt(__('Continue lendo &rarr;','axfordummies')); ?>

<?php endif; ?>

<ul class="PostDetails">

	<li class="PostCom"><?php comments_popup_link(__('<span><strong>0</strong> Coment&aacute;rios</span>','axfordummies'), __('<span><strong>1</strong> Coment&aacute;rio</span>','axfordummies'), __('<span><strong>%</strong> Coment&aacute;rios</span>','axfordummies')); ?>
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
<!--  Side Central END -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>