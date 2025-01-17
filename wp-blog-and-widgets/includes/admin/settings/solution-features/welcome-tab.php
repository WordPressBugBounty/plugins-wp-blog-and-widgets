<?php
/**
 * Admin Class
 *
 * Handles the Admin side functionality of plugin
 *
 * @package WP News and Scrolling Widgets
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
} ?>

<div id="wpbaw_welcome_tabs" class="wpbaw-vtab-cnt wpbaw_welcome_tabs wpbaw-clearfix">

	<!-- <div class="wpbaw-deal-offer-wrap">
		<h3 style="font-weight: bold; font-size: 30px; color:#ffef00; text-align:center; margin: 15px 0 5px 0;">Why Invest Time On Free Version?</h3>

		<h3 style="font-size: 18px; text-align:center; margin:0; color:#fff;">Explore WP Blog and Widgets Pro with Essential Bundle Free for 5 Days.</h3>			

		<div class="wpbaw-deal-free-offer">
			<a href="<?php //echo esc_url( WPBAW_PLUGIN_BUNDLE_LINK ); ?>" target="_blank" class="wpbaw-sf-free-btn"><span class="dashicons dashicons-cart"></span> Try Pro For 5 Days Free</a>
		</div>
	</div> -->

	<!-- <div class="wpbaw-black-friday-banner-wrp">
		<a href="<?php // echo esc_url( WPBAW_PLUGIN_BUNDLE_LINK ); ?>" target="_blank"><img style="width: 100%;" src="<?php // echo esc_url( WPBAW_URL ); ?>assets/images/black-friday-banner.png" alt="black-friday-banner" /></a>
	</div> -->

	<div class="wpbaw-black-friday-banner-wrp" style="background:#e1ecc8;padding: 20px 20px 40px; border-radius:5px; text-align:center;margin-bottom: 40px;">
		<h2 style="font-size:30px; margin-bottom:10px;"><span style="color:#0055fb;">WP Blog and Widgets</span> is included in <span style="color:#0055fb;">Essential Plugin Bundle</span> </h2> 
		<h4 style="font-size: 18px;margin-top: 0px;color: #ff5d52;margin-bottom: 24px;">Now get Designs, Optimization, Security, Backup, Migration Solutions @ one stop. </h4>

		<div class="wpbaw-black-friday-feature">

			<div class="wpbaw-inner-deal-class" style="width:40%;">
				<div class="wpbaw-inner-Bonus-class">Bonus</div>
				<div class="wpbaw-image-logo" style="font-weight: bold;font-size: 26px;color: #222;"><img style="width: 34px; height:34px;vertical-align: middle;margin-right: 5px;" class="wpbaw-img-logo" src="<?php echo esc_url( WPBAW_URL ); ?>assets/images/essential-logo-small.png" alt="essential-logo" /><span class="wpbaw-esstial-name" style="color:#0055fb;">Essential </span>Plugin</div>
				<div class="wpbaw-sub-heading" style="font-size: 16px;text-align: left;font-weight: bold;color: #222;margin-bottom: 10px;">Includes All premium plugins at no extra cost.</div>
				<a class="wpbaw-sf-btn" href="<?php echo esc_url( WPBAW_PLUGIN_BUNDLE_LINK ); ?>" target="_blank">Grab The Deal</a>
			</div>

			<div class="wpbaw-main-list-class" style="width:60%;">
				<div class="wpbaw-inner-list-class">
					<div class="wpbaw-list-img-class"><img src="<?php echo esc_url( WPBAW_URL ); ?>assets/images/logo-image/img-slider.png" alt="essential-logo" /> Image Slider</li></div>

					<div class="wpbaw-list-img-class"><img src="<?php echo esc_url( WPBAW_URL ); ?>assets/images/logo-image/advertising.png" alt="essential-logo" /> Publication</li></div>

					<div class="wpbaw-list-img-class"><img src="<?php echo esc_url( WPBAW_URL ); ?>assets/images/logo-image/marketing.png" alt="essential-logo" /> Marketing</li></div>

					<div class="wpbaw-list-img-class"><img src="<?php echo esc_url( WPBAW_URL ); ?>assets/images/logo-image/photo-album.png" alt="essential-logo" /> Photo album</li></div>

					<div class="wpbaw-list-img-class"><img src="<?php echo esc_url( WPBAW_URL ); ?>assets/images/logo-image/showcase.png" alt="essential-logo" /> Showcase</li></div>

					<div class="wpbaw-list-img-class"><img src="<?php echo esc_url( WPBAW_URL ); ?>assets/images/logo-image/shopping-bag.png" alt="essential-logo" /> WooCommerce</li></div>

					<div class="wpbaw-list-img-class"><img src="<?php echo esc_url( WPBAW_URL ); ?>assets/images/logo-image/performance.png" alt="essential-logo" /> Performance</li></div>

					<div class="wpbaw-list-img-class"><img src="<?php echo esc_url( WPBAW_URL ); ?>assets/images/logo-image/security.png" alt="essential-logo" /> Security</li></div>

					<div class="wpbaw-list-img-class"><img src="<?php echo esc_url( WPBAW_URL ); ?>assets/images/logo-image/forms.png" alt="essential-logo" /> Pro Forms</li></div>

					<div class="wpbaw-list-img-class"><img src="<?php echo esc_url( WPBAW_URL ); ?>assets/images/logo-image/seo.png" alt="essential-logo" /> SEO</li></div>

					<div class="wpbaw-list-img-class"><img src="<?php echo esc_url( WPBAW_URL ); ?>assets/images/logo-image/backup.png" alt="essential-logo" /> Backups</li></div>

					<div class="wpbaw-list-img-class"><img src="<?php echo esc_url( WPBAW_URL ); ?>assets/images/logo-image/White-labeling.png" alt="essential-logo" /> Migration</li></div>
				</div>
			</div>
		</div>
		<div class="wpbaw-main-feature-item">
			<div class="wpbaw-inner-feature-item">
				<div class="wpbaw-list-feature-item">
					<img src="<?php echo esc_url( WPBAW_URL ); ?>assets/images/logo-image/layers.png" alt="layer" />
					<h5>Site management</h5>
					<p>Manage, update, secure & optimize unlimited sites.</p>
				</div>
				<div class="wpbaw-list-feature-item">
					<img src="<?php echo esc_url( WPBAW_URL ); ?>assets/images/logo-image/risk.png" alt="backup" />
					<h5>Backup storage</h5>
					<p>Secure sites with auto backups and easy restore.</p>
				</div>
				<div class="wpbaw-list-feature-item">
					<img src="<?php echo esc_url( WPBAW_URL ); ?>assets/images/logo-image/support.png" alt="support" />
					<h5>Support</h5>
					<p>Get answers on everything WordPress at anytime.</p>
				</div>
			</div>
		</div>
		<a class="wpbaw-sf-btn" href="<?php echo esc_url( WPBAW_PLUGIN_BUNDLE_LINK ); ?>" target="_blank">Grab The Deal</a>
	</div>

	<div style="padding: 30px;border-radius: 10px;border: 1px solid #e5ecf6; text-align: center;">
		<div>
			<div style="font-size: 22px; font-weight:700; margin-bottom: 15px;">Display customizable <span class="wpbaw-sf-blue">blog layouts, vertical scrolling blog widgets </span> in the most engaging and customized way.</div>
			<h5 class="wpbaw-sf-content" style="font-size: 20px; font-weight:700; margin-bottom: 18px;">Experience <span class="wpbaw-sf-blue">8 Layouts</span>, <span class="wpbaw-sf-blue">70+ stunning designs</span>. </h5>
			<h5 class="wpbaw-sf-content" style="font-size: 18px; font-weight:700; margin-bottom: 18px;"><span class="wpbaw-sf-blue">10,000+ </span>websites are using <span class="wpbaw-sf-blue">Blog Builder</span>.</h5>
		</div>
		<div style="margin: 30px 0; text-transform: uppercase; text-align:center;">
			<a href="<?php echo esc_url( $wpbaw_add_link ); ?>" class="wpbaw-sf-btn">Launch Blog With Free Features</a>
		</div>
	</div>	
</div>