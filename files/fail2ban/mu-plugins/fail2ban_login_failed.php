<?php
# this file goes under <site_root>/wp-content/mu-plugins

function fail2ban_login_failed_403() {
    status_header( 403 );
}
add_action( 'wp_login_failed', 'fail2ban_login_failed_403' );

