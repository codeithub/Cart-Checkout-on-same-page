/**
 * @snippet       Display Cart on Checkout Page Only - WooCommerce
 * @author        Codeithub
 */
 
add_action( 'woocommerce_before_checkout_form', 'codeithub_cart_on_checkout_page_only', 5 );
 
function codeithub_cart_on_checkout_page_only() {
 
if ( is_wc_endpoint_url( 'order-received' ) ) return;
 
echo do_shortcode('[woocommerce_cart]');
 
}
