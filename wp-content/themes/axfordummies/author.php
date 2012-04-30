<?php get_header();?>
<?php
if(get_query_var('author_name')) :
$curauth = get_userdatabylogin(get_query_var('author_name'));
else :
$curauth = get_userdata(get_query_var('author'));
endif;
?>
<?php echo get_avatar( $curauth->ID , 70 ); ?>
<h4>
	<?php _e('Autor:','ax4dummies');?>
	&nbsp;<a href="<?php the_author_url(); ?>"><?php echo $curauth->first_name; ?>&nbsp;<?php echo $curauth->last_name; ?>
	</a>
</h4>
<?php echo $curauth->user_description; ?>
<?php if (have_posts()) : ?>
<?php $post = $posts[0];  ?>
<?php $countervariable=1;?>
<?php while (have_posts()) : the_post(); ?>

<h1>
	<a
		title="<?php _e('Link permanente para', 'ax4dummies');?>&nbsp;<?php the_title(); ?>"
		href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?> </a>
</h1>

<p>
	<?php _e('Publicado em','ax4dummies');?>
	&nbsp;
	<?php the_time('d \d\e F \d\e Y');?>
	</strong>
</p>

<?php if (is_home() && (!$paged || $paged == 1) || is_search() || is_single() || is_page()): ?>

<?php the_content(__('Continue lendo &rarr;', 'ax4dummies')); ?>

<?php else: ?>

<?php the_excerpt(__('Continue lendo &rarr;','ax4dummies')); ?>

<?php endif; ?>

<ul class="PostDetails">

	<li class="PostCom"><?php comments_popup_link(__('<span><strong>0</strong> Coment&aacute;rios</span>','ax4dummies'), __('<span><strong>1</strong> Coment&aacute;rio</span>','ax4dummies'), __('<span><strong>%</strong> Coment&aacute;rios</span>','ax4dummies')); ?>
	</li>

</ul>

<?php endwhile;?>
<?php next_posts_link(__('&larr; Posts antigos', 'ax4dummies')) ?>
<?php previous_posts_link(__('Posts recentes &rarr;', 'ax4dummies')) ?>
<?php endif;?>

<?php get_sidebar();?>
<?php get_footer();?>