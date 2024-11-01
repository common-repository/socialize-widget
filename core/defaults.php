<?php

if (!defined('ABSPATH')) exit;

final class sw_defaults {
    public $settings = array(
        '__version__'=>'1.0.0',
        '__date__'=>'2013.11.1.',
        '__build__'=>'1005',
        '__status__'=>'stable',

        'LikeUrl'=>'http://www.facebook.com/facebook',
        'FacebookAppId'=>'235180196570561',
        'EnableFacebook'=>'1',
        'FacebookWidth'=>'130',
        'EnableGoogle'=>'1',
        'GoogleWidth'=>'110',
        'EnableTwitter'=>'1',
        'TwitterWidth'=>'100',
        'EnablePinterest'=>'1',
        'PinterestWidth'=>'60',
        'EnableStumbleUpon'=>'1',
        'StumbleUponWidth'=>'100',
        'EnableLinkedIn'=>'1',
        'LinkedInWidth'=>'100',
    );

    function __construct() { }

    public function upgrade($old, $scope = 'settings') {
        $work = $this->settings;

        foreach ($work as $key => $value) {
            if (!isset($old[$key])) {
                $old[$key] = $value;
            }
        }

        $unset = array();
        foreach ($old as $key => $value) {
            if (!isset($work[$key])) {
                $unset[] = $key;
            }
        }

        if (!empty($unset)) {
            foreach ($unset as $key) {
                unset($old[$key]);
            }
        }

        foreach ($work as $key => $value) {
            if (substr($key, 0, 2) == '__') {
                $old[$key] = $value;
            }
        }

        return $old;
    }
}

?>