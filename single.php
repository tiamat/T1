<?php get_header() ?>

	<div id="container">
		<div id="content">

<?php the_post() ?>

			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<h1 class="entry-title"><?php the_title() ?></h1>
				<div class="entry-content">
<?php the_content() ?>

<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>
				</div>
				<div class="entry-meta">
					<p>Categories: <?php the_category(', ') ?></p>
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

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>
