<?php
/**
 * Displays footer site info
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro 1.0.0
 * @version 1.0.0
 */

?>
<div class="site-info">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
	<span class="copyright">
		<span>
			<a href="<?php echo esc_url( __( 'https://Gioielleriamazzon.it', 'Gaurosa' ) ); ?>" target="_blank">
				<?php
				/* translators: %s: WordPress trademark */
				printf( esc_html__( '©  Mazzon Gioielli S.n.c. Via Don G. Carrara 19,35010 Villa Del Conte (PD) Italy P.I & C.F. IT05120880280 Numero REAPD - 444614', 'Paolo' ), 'Gioielleria Mazzon' );
				?>
			</a>
		</span>
		<!-- <span>
			<?php esc_html_e( 'Inspiro WordPress Theme by', 'inspiro' ); ?> <a href="<?php echo 'https://www.wpzoom.com/'; ?>" target="_blank" rel="nofollow">WPZOOM</a>
		</span>*/ -->
	</span>
</div><!-- .site-info -->
