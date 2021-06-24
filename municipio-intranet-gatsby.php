<?php

/**
 * Plugin Name:       Municipio Intranet Gatsby
 * Description:       Adapts Municipio intranet for Gatsby
 * Version:           0.1.0
 * Author:            Whitespace Dev
 */

define("MUNICIPIO_INTRANET_GATSBY_PATH", dirname(__FILE__));
define("MUNICIPIO_INTRANET_GATSBY_AUTOLOAD_PATH", MUNICIPIO_INTRANET_GATSBY_PATH . "/autoload");

array_map(static function () {
  include_once func_get_args()[0];
}, glob(MUNICIPIO_INTRANET_GATSBY_AUTOLOAD_PATH . "/*.php"));
