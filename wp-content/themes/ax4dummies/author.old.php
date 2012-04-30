<?php get_header();?>
<?php
if(get_query_var('author_name')) :
$curauth = get_userdatabylogin(get_query_var('author_name'));
else :
$curauth = get_userdata(get_query_var('author'));
endif;
?>
<div class="SC">
	<div class="PostAuthor">
		<?php echo get_avatar( $curauth->ID , 70 ); ?>
		<h4>
			<?php _e('Autor:','ax4dummies');?>
			&nbsp;<a href="<?php the_author_url(); ?>"><?php echo $curauth->first_name; ?>&nbsp;<?php echo $curauth->last_name; ?>
			</a>
		</h4>
		<?php echo $curauth->user_description; ?>
	</div>
	<?php if (have_posts()) : ?>
	<?php $post = $posts[0];  ?>
	<?php $countervariable=1;?>
	<?php while (have_posts()) : the_post(); ?>
	<div class="Post index">
		<div class="PostHead">
			<h1 class="title">
				<a href="#"></a><a
					title="<?php _e('Link permanente para', 'ax4dummies');?>&nbsp;<?php the_title(); ?>"
					href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?>
				</a>
			</h1>
			<p>
				<?php _e('Publicado em','ax4dummies');?>
				&nbsp;
				<?php the_time('F,Y');?>
				&nbsp;
				<?php _e('por','ax4dummies');?>
				&nbsp;<strong><?php the_author();?> </strong>
			</p>
			<p>
				<strong>Categorias:</strong>&nbsp;
				<?php the_category(', ');?>
			</p>
			<p>
				<strong>Tags:</strong>&nbsp;
				<?php the_tags( '', ', ', '');?>
			</p>
			<p>
				<?php comments_popup_link(__('<span><strong>0</strong> Coment&aacute;rios</span>','ax4dummies'), __('<span><strong>1</strong> Coment&aacute;rio</span>','ax4dummies'), __('<span><strong>%</strong> Coment&aacute;rios</span>','ax4dummies')); ?>
			</p>
		</div>

		<div class="PostContent">
			<?php the_excerpt() ?>
		</div>
	</div>

	<!-- <?php trackback_rdf(); ?> -->
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