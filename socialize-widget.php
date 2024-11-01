<?php
/**
 * @package  Socialize Widget
 * @version 1.0.0
 */
/*
Plugin Name: Socialize Widget
Plugin URI: http://wordpress.org/plugins/socialize-widget/
Description: a better way to display facebook, google, twitter and other social networks
Author: hiddeng
Version: 1.0.0
Author URI: http://wordpress.org/plugins/socialize-widget/
License: GPLv2 or later
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

class sw_loader {

    public $defaults = array();
    public $settings = array();

    function __construct() {
        global $wp_version;

        define('SW_WP_VERSION', intval(substr(str_replace('.', '', $wp_version), 0, 2)));

        $_dirname = trailingslashit(dirname(__FILE__));
        $_urlname = plugin_dir_url(__FILE__);

        define('SW_PATH', $_dirname);
        define('SW_URL', $_urlname);

        require_once(SW_PATH.'core/defaults.php');

        if (is_admin()) {
            require_once(SW_PATH.'core/admin.php');
        }

        add_action('plugins_loaded', array(&$this, 'init_plugin_settings'), 9);
        add_action('wp', array(&$this, 'control_load'));
    }

    public function control_load() {
        if (!is_admin()) {
            add_action('wp_print_footer_scripts', array(&$this, 'embed_content'), 1000);
            add_action('wp_head', array(&$this, 'embed_styles'));
        }
    }


    public function init_plugin_settings() {
        $_d = new sw_defaults();

        $this->settings = get_option('socialize-widget');

        if (!is_array($this->settings)) {
            $this->settings = $_d->settings;
            update_option('socialize-widget', $this->settings);
        } else if ($this->settings['__build__'] != $_d->settings['__build__']) {
            $this->settings = $_d->upgrade($this->settings);
            update_option('socialize-widget', $this->settings);
        }

        define('Socialize_Widget', $this->settings['__version__']);

        do_action('sw_init_plugin_settings');
    }

    public function get($name) {
        return $this->settings[$name];
    }

    public function set($name, $value) {
        $this->settings[$name] = $value;
    }

    public function save() {
        update_option('socialize-widget', $this->settings);
    }
    public function embed_styles() {
        $_load_css = apply_filters('sw_embed_styles', true);

        if ($_load_css) {
            wp_enqueue_style('sw-styles', SW_URL.'css/style-front.css');
            do_action('sw_embed_styles_css');
        }
    }

    public function embed_content() {
        do_action('sw_embed_contact_slider_before');
        do_action('sw_embed_contact_slider_before_js');

        require_once(SW_PATH.'front/build.php');

        do_action('sw_embed_contact_slider_after_js');
        do_action('sw_embed_contact_slider_after');
    }
}

global $sw_core_loader;
$sw_core_loader = new sw_loader();

?>