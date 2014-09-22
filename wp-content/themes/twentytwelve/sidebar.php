<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<!-- Side Nav -->
	<ins class="adsbygoogle"
	     style="display:inline-block;width:300px;height:600px"
	     data-ad-client="ca-pub-9914565001386816"
	     data-ad-slot="2704530888"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>