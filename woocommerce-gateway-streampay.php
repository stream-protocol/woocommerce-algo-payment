<?php
/**
 *
 * @link              https://streampay.io/about/
 * @since             1.0.0
 * @package           WooCommerce Gateway
 *
 * @wordpress-plugin
 * Plugin Name:       StreamPay - Web3 Payments
 * Plugin URI:        https://streampay.io/product-integrations/
 * Description:       The gateway for supporting Web3 Payments within your store, using StreamPay and Algorand Blockchain. Algo, USDt, USDc, EURe, STR, YLDY, Planets, Smile Coin.
 * Version:           1.0.3
 * Author:            Stream Protocol / StreamPay
 * Author URI:        https://streampay.io/about/
 * Text Domain:       streampay
 * Domain Path:       /languages
 * License: 		  GPL-3.0
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

function activate_streampay() {
  require_once plugin_dir_path(__FILE__) . 'includes/class-streampay-activator.php';
  StreamPay_Activator::activate();
}

register_activation_hook(__FILE__, 'activate_streampay');

function deactive_streampay() {
  require_once plugin_dir_path(__FILE__) . 'includes/class-streampay-deactivator.php';
  StreamPay_Deactivator::deactivate();
}

register_deactivation_hook(__FILE__, 'deactive_streampay');

require plugin_dir_path(__FILE__) . 'includes/class-streampay.php';

$autoloader = __DIR__ . '/vendor/autoload.php';
$streampaySdkAutoload = __DIR__ . '/vendor/streampay/streampay-api-php/vendor/autoload.php';
if (file_exists($autoloader)) {
	require $autoloader;
}

if (file_exists($streampaySdkAutoload)) {
	require $streampaySdkAutoload;
}

function run_streampay() {
	if ( class_exists( 'woocommerce' ) ) {
		$streampay = new StreamPay();
		$streampay->run();
	} else {
		add_action( 'admin_notices', 'ap_wc_not_active' );
	}
}

add_action( 'plugins_loaded', 'run_streampay' );

function ap_wc_not_active() {
    ?>
    <div class="error notice">
        <p><?php _e( 'StreamPay - Algo Payments: WooCommerce is not activated/installed. Please activate or deactivate StreamPay.', 'streampay' ); ?></p>
    </div>
    <?php
}
