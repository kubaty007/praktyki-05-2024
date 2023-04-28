<?php

namespace Load;


/**
 * Loads a model
 * @param string $name Name of the model not including 'Model' and the extension
 */
function model($name) {
	$args = func_get_args();
	foreach($args as $arg) {
		if (is_array($arg)) {
			foreach ($arg as $arg_key => $arg_val) {		
				${$arg_key} = $arg_val;
			}	
		}
	}
	include MODEL_DIR . $name . 'Model.php';
}


/**
 * Loads a view
 * @param string $name Name of the view not including 'View' and the extension
 * @param array $view Data passed to the view
 * @param bool $include_scaffolding Should function include header and footer
 */
function view(string $name, array $view = array(), bool $include_scaffolding = false) {

	ob_start();
	include VIEW_DIR . $name . 'View.php';
	$html = ob_get_clean();

	if ($include_scaffolding) {
		ob_start();
		include TEMPLATE_DIR . 'scaffolding.php';
		$scaffolding = ob_get_clean();
	}

	if (!empty($scaffolding)) {
		echo str_replace('{view}', $html, $scaffolding);	
	} else {
		echo $html;
	}
}


/**
 * Loads a controller
 * @param string $name Name of the controller not including 'Controller' and the extension
 */
function controller($name) {
	include CONTROLLER_DIR . $name . 'Controller.php';
}


/**
 * Loads a helper
 * @param string $name Name of the helper not including 'Helper' and the extension
 * @param array $data Data passed to the helper
 */
function helper($name, $data = array()) {
	include_once HELPER_DIR . $name . 'Helper.php';
}


/**
 * Loads a config
 * @param string $name Name of the config not including 'Config' and the extension
 */
function config($name, $data = array()) {
	include_once CONFIG_DIR . $name . 'Config.php';
}
