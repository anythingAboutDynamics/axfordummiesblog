<?php get_header();?>
<div class="SC">
	<?php if (have_posts()) : ?>
	<?php $post = $posts[0];  ?>
	<?php if (is_category()) { ?>
	<h1>
		<?php _e('Arquivos da categoria','ax4dummies');?>
		&nbsp;"
		<?php single_cat_title(); ?>
		"
	</h1>
	<?php } elseif( is_tag() ) { ?>
	<h1>
		<?php _e('Arquivos da tag','ax4dummies');?>
		&nbsp;"
		<?php single_tag_title(); ?>
		"
	</h1>
	<?php } elseif (is_day()) { ?>
	<h1>
		<?php _e('Arquivos do dia','ax4dummies');?>
		&nbsp;
		<?php the_time('j/F/Y'); ?>
	</h1>
	<?php } elseif (is_month()) { ?>
	<h1>
		<?php _e('Arquivos do m&ecirc;s','ax4dummies');?>
		&nbsp;
		<?php the_time('F/Y'); ?>
	</h1>
	<?php } elseif (is_year()) { ?>
	<h1>
		<?php _e('Arquivos do ano de','ax4dummies');?>
		&nbsp;
		<?php the_time('Y'); ?>
	</h1>
	<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
	<h1>
		<?php _e('Arquivos do Blog','ax4dummies');?>
	</h1>
	<?php } ?>
	<?php while (have_posts()) : the_post(); ?>

	<div class="Post Index">

		<div class="PostHead">

			<?php echo get_avatar(get_the_author_id(), 43);?>

			<h1>
				<a
					title="<?php _e('Link permanente para', 'ax4dummies');?>&nbsp;<?php the_title(); ?>"
					href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?>
				</a>
			</h1>

			<p>
				<?php _e('Publicado em','ax4dummies');?>
				&nbsp;
				<?php the_time('d \d\e F \d\e Y');?>
				&nbsp;
				<?php _e('por','ax4dummies');?>
				&nbsp;<strong><?php the_author();?> </strong>
			</p>

		</div>

		<div class="PostContent">

			<?php if (is_home() && (!$paged || $paged == 1) || is_search() || is_single() || is_page()): ?>

			<?php the_content(__('Continue lendo &rarr;', 'ax4dummies')); ?>

			<?php else: ?>

			<?php the_excerpt(__('Continue lendo &rarr;','ax4dummies')); ?>

			<?php endif; ?>

		</div>

		<ul class="PostDetails">

			<li class="PostCom"><?php comments_popup_link(__('<span><strong>0</strong> Coment&aacute;rios</span>','ax4dummies'), __('<span><strong>1</strong> Coment&aacute;rio</span>','ax4dummies'), __('<span><strong>%</strong> Coment&aacute;rios</span>','ax4dummies')); ?>
			</li>

		</ul>

	</div>

	<?php endwhile; ?>

	<div class="Navigation">
		<div class="AlignLeft">
			<?php next_posts_link(__('&larr; Posts antigos', 'ax4dummies')) ?>
		</div>
		<div class="AlignRight">
			<?php previous_posts_link(__('Posts recentes &rarr;', 'ax4dummies')) ?>
		</div>
	</div>

	<?php endif;?>
</div>
<?php get_sidebar();?>
<?php get_footer();?>