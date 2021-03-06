<?php
/**
 * Template part for displaying posts results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mestore
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="meta">
	            <span class="meta-item"><i class="la la-clock"></i><?php esc_html_e('Posted on','mestore'); ?>: <?php the_time(get_option('date_format')) ?></span>
	            <span class="meta-item"><i class="la la-user"></i><?php esc_html_e('Posted by','mestore'); ?>: <a class="author-post-url" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>"><?php the_author() ?></a></span>
	            <span class="meta-item"><i class="la la-comments"></i><?php esc_html_e('Comments','mestore'); ?>: <a class="post-comments-url" href="<?php the_permalink() ?>#comments"><?php comments_number('0','1','%'); ?></a></span>
	        </div>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php mestore_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
