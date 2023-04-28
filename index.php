<?php

session_start();

// enables error reporting, should be off in production environment
error_reporting(E_ALL | E_STRICT);



// defines application directories paths
define('MAIN_DIR', dirname(__FILE__).'/');
const TEMPLATE_DIR = MAIN_DIR.'template/';
const LIBRARY_DIR = MAIN_DIR.'library/';
const HELPER_DIR = MAIN_DIR.'helper/';
const MODEL_DIR = MAIN_DIR.'model/';
const VIEW_DIR = MAIN_DIR.'view/';
const CONTROLLER_DIR = MAIN_DIR.'controller/';



// loads initial requirements
require_once LIBRARY_DIR.'load.php';
\Load\helper('debug');
require_once LIBRARY_DIR.'router.php';
