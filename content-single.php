<?php
/**
 * @package ObMovement
 */
?>
<div class="contentcontainerfull">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header-full">
		<h1 class="entry-title-full"><?php the_title(); ?></h1>

                        <!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content-full">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'ObMovement' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-meta-full">
   <div align="right"><?php ObMovement_posted_on(); ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo'&nbsp;&#9650;&nbsp;</a></div></footer>';?>


	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
</div>
