<?php

if (!defined('ABSPATH')) exit;

class sw_admin {
    public $page_ids;
    public $admin_page_url = 'options-general.php';

    function __construct() {
        add_action('admin_enqueue_scripts', array(&$this, 'admin_enqueue_scripts'));
        add_action('admin_menu', array(&$this, 'admin_menu'));
        add_action('admin_init', array(&$this, 'save_settings'));
    }

    public function admin_enqueue_scripts($hook) {
        if ($hook == 'settings_page_socialize-widget') {
            wp_enqueue_script('jquery-ui-core');
            wp_enqueue_script('jquery-ui-tabs');

            wp_enqueue_style('sw-styler-admin-css', SW_URL.'css/admin.css');
            wp_enqueue_style('sw-styler-jqeruyui-css', SW_URL.'css/ui-lightness/jquery-ui-1.10.3.custom.css');

            do_action('sw_admin_enqueue_scripts');
        }
    }

    public function admin_menu() {
        $this->page_ids[] = add_options_page(__("Socialize Widget: Settings", "socialize-widget"), __("Socialize Widget", "socialize-widget"), 'activate_plugins', 'socialize-widget', array(&$this, 'tools_menu'));
    }

    public function save_settings() {
        if (!empty($_POST)) {
//            var_dump($_POST);
//            exit();
            global $sw_core_loader;

            foreach ($_POST as $k => $v) {
                $sw_core_loader->set($k, $v);
            }
            $sw_core_loader->save();
            wp_redirect($this->admin_page_url.'?page=socialize-widget');
            exit;
        }
    }

    public function tools_menu() {
        global $sw_core_loader;

        include(SW_PATH.'core/index.php');

        do_action('sw_admin_display_panel_after');
    }
}

$sw_core_admin = new sw_admin();

?>