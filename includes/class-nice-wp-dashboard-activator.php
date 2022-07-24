<?php

class Nice_WP_Dashboard_Activator {
    protected $_instance;

    public function __construct() {}

    public function init() {
        if (!self::$_instance) self::$_instance = new Nice_WP_Dashnoard_activator();
    }

    public static function activate() {}
}
