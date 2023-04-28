<?php

namespace homeController;


/**
 * Default homeController action, will be fired in no other action was specified in URI
 * Loads data model and passes it to the view
 */
function _default() {
    global $model_data;
    \Load\model('home');
    \Load\view('home', $model_data, true);
}
