<?php get_header() ?>

	<div id="container">
		<div id="content">

<?php the_post() ?>

			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<h1 class="entry-title"><?php the_title() ?></h1>
				<div class="entry-content">
<?php the_content() ?>

<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>

<?php edit_post_link( __( 'Edit', 'sandbox' ), '<span class="edit-link">', '</span>' ) ?>

				</div>
				<div class="entry-meta">
					<p><?php echo get_the_date();?></p>
					<div class="likely likely-small">
					  <div class="twitter">t</div>
					  <div class="facebook">f</div>
					  <div class="vkontakte">vk</div>
					  <div class="telegram">t</div>
					  <div class="linkedin">l</div>
					</div>
				</div>
			</div><!-- .post -->
<?php comments_template() ?>
<?php if ( get_post_custom_values('comments') ) comments_template() // Add a key+value of "comments" to enable comments on this page ?>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>