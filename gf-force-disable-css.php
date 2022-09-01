<?php
/**
 * Plugin Name:     GF Force Disable CSS
 * Plugin URI:      https://github.com/ItinerisLtd/gf-force-disable-css/
 * Description:     Force Gravity Forms to disable CSS.
 * Version:         0.1.2
 * Author:          Itineris Limited
 * Author URI:      https://www.itineris.co.uk/
 * Text Domain:     gf-force-disable-css
 */

declare(strict_types=1);

namespace Itineris\GFForceDisableCSS;

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}

add_filter(
    'pre_option_rg_gforms_disable_css', function (): string {
        return '1';
    }
);
