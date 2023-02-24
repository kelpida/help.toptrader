<?php
/**
* the closing of the main content elements and the footer element
*
* @package iknowledgebase
*/
?>

</main>
<footer class="footer">


<div class="container">
	<div class="row">
		<div class="col">
			<img src="<?php bloginfo('template_url'); ?>/images/logo.svg" alt="Help TopTraderEu">
	
			<div class="copyright">
				<?php
				$iknowledgebase_option = get_option( 'iknowledgebase_settings', '' );
				if ( ! empty( $iknowledgebase_option['footer_text'] ) ) {
					echo esc_attr( $iknowledgebase_option['footer_text'] );
				} else {
					echo '&copy; ' . esc_attr( date_i18n( esc_attr__( 'Y', 'iknowledgebase' ) ) ) . ' ' . esc_attr( get_bloginfo( 'name' ) );
				}
				?>
			</div>
		</div>
		<div class="social col">
			<p>Social</p>
			<div class="social-icons">
				<img src="<?php bloginfo('template_url'); ?>/images/facebook.svg">
				<img src="<?php bloginfo('template_url'); ?>/images/instagram.svg">
				<img src="<?php bloginfo('template_url'); ?>/images/twitter.svg">
				<img src="<?php bloginfo('template_url'); ?>/images/linkedin.svg">
			</div>
		</div>
		<div class="col justify-content-end">
			<img src="<?php bloginfo('template_url'); ?>/images/appstore.svg">
			<img src="<?php bloginfo('template_url'); ?>/images/googleplay.svg">
			<img src="<?php bloginfo('template_url'); ?>/images/Vector-1.svg">
		</div>


		
	</div>
</div>
<div class="footer-text container">
	<div class="row justify-content-md-center">
		
		<div class="col-7">
			<div class="navbar is-transparent">
				<div id="main-menu" class="navbar-menu is-active">
					<div class="navbar">
						<?php
						wp_nav_menu( array(
							'theme_location'  => 'footer-menu',
							'depth'           => '1',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => '',
							'menu_id'         => '',
							'items_wrap'      => '%3$s',
							'walker'          => new IKnowledgebaseBase_Walker_Nav_Menu(),
							'fallback_cb'     => '',
							) );
							?>
  
						</div>
					</div>
				</div>
				<p>T.T. TOPTRADER TRADING is a registered brand name of Goldenburg Group Limited, a Cyprus Investment Firm (CIF) supervised and regulated by the Cyprus Securities and Exchange Commission (CySEC) with CIF Licence No 242/14 with a registered address at 46 Ayiou Athanasiou, Ayios Athanasios, Interlink Hermes Plaza, 4102 Limassol, Cyprus.</p>

				<p>Risk Warning: CFDs are complex instruments and come with a high risk of losing money rapidly due to leverage. 89.08% of retail investor accounts lose money when trading CFDs with this provider. You should consider whether you understand how CFDs work and whether you can afford to take the high risk of losing your money.</p>

				<p>Restricted regions: toptrader.eu provides its services to residents of the European Economic Area (EEA) excluding Belgium, Switzerland and Slovenia. toptrader.eu does not provide its services in UK and in the territories of third countries except of South Africa and Labuan.</p>
			</div>
		
		</div>
	</div>

</div>
<div class="footer-bottom-note">
	<div class="container">
		<div class="row">
			<div class="col">
					<p>CFDs are complex instruments and come with a high risk of losing money rapidly due to leverage. <strong>89.08% of retail investor accounts lose money when trading CFDs with this provider</strong>. You should consider whether you understand how CFDs work and whether you can afford to take the high risk of losing your money.</p>
			</div>
		</div>
	</div>

</div>
</footer>

<?php wp_footer(); ?>
</body></html>
