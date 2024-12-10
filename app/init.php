<?php
require_once 'config/config.php';
require_once __DIR__ . '/../vendor/autoload.php';

spl_autoload_register(function($lib){
    require_once 'lib/' . $lib . '.php';
  });
  