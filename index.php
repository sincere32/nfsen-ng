<?php
spl_autoload_extensions(".php");
spl_autoload_register();

ini_set('display_errors', true);
ini_set('error_reporting', E_ALL);

Config::initialize();
$i = new Import();
