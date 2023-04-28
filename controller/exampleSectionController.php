<?php

namespace exampleSectionController;


/**
 * Default exampleSectionController action, will be fired in no other action was specified in URI
 * Loads data model and passes it to the view
 */
function _default() {
    global $model_data;
    \Load\model('exampleSection');
    \Load\view('exampleSection', $model_data);
}