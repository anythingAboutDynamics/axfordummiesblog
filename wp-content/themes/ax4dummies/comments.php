<div class="Comments">
	<div class="List">
		<!-- Start CommentsList-->
		<?php // Do not delete these lines
if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die ('Please do not load this page directly. Thanks!');

if (!empty($post->post_password)) { // if there's a password
	if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
		?>

		<p class="nocomments">
			<?php _('Este post &eacute; protegido por senha. Informe a senha para ver os coment&aacute;rios.','ax4dummies');?>
		
		
		<p>

			<?php
			return;
	}
}

/* This variable is for alternating comment background */
$oddcomment = 'alt';
?>

			<!-- You can start editing here. -->
			<?php if ($comments) : ?>
		
		
		<h3 id="comments">
			<?php comments_number(__('Sem coment&aacute;rios','ax4dummies'), __('1 coment&aacute;rio','ax4dummies'), __('% Coment&aacute;rios','ax4dummies') );?>
		</h3>

		<ol>

			<?php foreach ($comments as $comment) : ?>
			<li class="<?php echo $oddcomment; ?>"
				id="comment-<?php comment_ID() ?>">

				<p class="ListUser">
					<strong><?php comment_author_link() ?>
					</strong>
				</p>
				<p class="ListDate">
					<a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('d/m/Y') ?>
						as <?php comment_time() ?>
						<?php edit_comment_link(__('&nbsp;&nbsp;<strong>Editar coment&aacute;rio</strong>','ax4dummies'),'',''); ?>
					</a>
				</p> <span class="ListNr"><?php echo get_avatar($comment->comment_author_email ,33); ?>
					<?php //$commentNumber++; echo $commentNumber; ?>
			</span>

				<div class="ListContent">
					<?php comment_text() ?>
					<?php if ($comment->comment_approved == '0') : ?>
					<?php _e('Seu coment&aacute;rio est&aacute; em modera&ccedil;&atilde;o.','ax4dummies');?>
				</div> <?php endif; ?>

			</li>
			<?php endforeach; /* end for each comment */ ?>
		</ol>

		<?php else : // this is displayed if there are no comments so far ?>
		<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->
		<?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">
			<?php _e('Coment&aacute;rios encerrados.','ax4dummies');?>
		</p>
		<?php endif; ?>
		<?php endif; ?>
		<?php if ('open' == $post->comment_status) : ?>
		<br />
		<!-- Ends CommentsList-->
	</div>

	<p class="note">
		<?php comments_rss_link(__('<abbr title="Really Simple Syndication">RSS</abbr> feed para coment&aacute;rios nesse post','ax4dummies')); ?>
		<?php if ( pings_open() ) : ?>
		&#183; <a href="<?php trackback_url() ?>" rel="trackback"><?php _e('TrackBack <abbr title="Uniform Resource Identifier">URI</abbr>','ax4dummies'); ?>
		</a>
		<?php endif; ?>
	</p>

	<!-- Start Comments Form-->
	<div class="Form">
		<h3 id="respond">
			<?php _e('Deixe seu coment&aacute;rio','ax4dummies');?>
		</h3>

		<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
		<p>
			<?php _e('Voc&ecirc; deve estar','ax4dummies');?>
			&nbsp;<a
				href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>"><?php _e('logado');?>
			</a>&nbsp;
			<?php _e('para escrever um coment&aacute;rio.','ax4dummies');?>
		</p>
		<?php else : ?>

		<div class="FormTop"></div>
		<form
			action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php"
			method="post" id="commentform">
			<?php if ( $user_ID ) : ?>
			<p>
				<?php _e('Logado como','ax4dummies');?>
				&nbsp;<a
					href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?>
				</a>. <a
					href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout"
					title="<?php _e('Logout dessa conta','ax4dummies') ?>">Logout
					&rarr;</a>
			</p>
			<?php else : ?>

			<p>
				<label for="author"> <input type="text" name="author" id="author"
					value="<?php echo $comment_author; ?>" tabindex="1"
					class="TextField" style="width: 210px;" />Nome <small><?php if ($req) _e('(requerido)','ax4dummies'); ?>
				</small>
				</label>
			</p>

			<p>
				<label for="email"> <input type="text" name="email" id="email"
					value="<?php echo $comment_author_email; ?>" tabindex="2"
					class="TextField" style="width: 210px;" />E-mail <small>&nbsp;<?php if ($req) _e('(requerido, n&atilde;o exibido)','ax4dummies'); ?>
				</small>
				</label>
			</p>

			<p>
				<label for="url"> <input type="text" name="url" id="url"
					value="<?php echo $comment_author_url; ?>" tabindex="3"
					class="TextField" style="width: 210px;" /><abbr
					title="Uniform Resource Identifier">URI</abbr>
				</label>
			</p>

			<?php endif; ?>
			<p>
				<textarea name="comment" id="comment" rows="10" tabindex="4"
					class="TextArea" style="width: 440px;"></textarea>
			</p>

			<p>
				<input name="SubmitComment" type="image" class="SubmitComment"
					onmouseover="javascript:changeSty('SubmitCommentIE');"
					onmouseout="javascript:changeSty('SubmitComment');"
					title="Post Your Comment"
					src="<?php bloginfo('template_url'); ?>/images/ButtonTransparent.png"
					alt="<?php _e('Envie seu coment&atilde;rio','ax4dummies');?>" /> <input
					type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
			</p>
			<?php do_action('comment_form', $post->ID); ?>
		</form>
		<?php endif; // If registration required and not logged in ?>
		<?php endif; // if you delete this the sky will fall on your head ?>
	</div>

</div>
