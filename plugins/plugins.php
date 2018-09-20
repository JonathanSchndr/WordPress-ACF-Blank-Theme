<?php
    /**
     * Load ACF PRO
     */

    function my_acf_settings_path( $path ) {
        return get_stylesheet_directory() . '/plugins/advanced-custom-fields-pro/';
    }
    add_filter('acf/settings/path', 'my_acf_settings_path');

    function my_acf_settings_dir( $dir ) {
        return get_stylesheet_directory_uri() . '/plugins/advanced-custom-fields-pro/';
    }
    add_filter('acf/settings/dir', 'my_acf_settings_dir');

    /* INCLUDE MAIN FILE */
    require_once(get_theme_file_path('/plugins/advanced-custom-fields-pro/acf.php'));

    // Add Options Page
    # acf_add_options_page();

    /* HIDE ADMIN UI */
    add_filter('acf/settings/show_admin', '__return_false');
