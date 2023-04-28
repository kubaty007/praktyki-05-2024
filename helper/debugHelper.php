<?php

namespace Helper;

/**
 * Helper debugging function, shows debugged element in a cleaner way
 * and adds some useful data
 */
function debug($input, $title = '', $backtrace_limit = 3) {
    echo '<pre style="background:lightpink;padding:15px;">';
        if (!empty($title)) {
            echo '<b>'.$title.'</b>:<br/><br/>';
        }

        if (isset($input)) {
            if (is_array($input)) {
                print_r($input);
            } else {
                var_dump($input);
            }            
        } else {
            echo 'UNDEFINED';
        }
        
       
        echo '<div style="font-size: 80%;"><br/>Backtrace:<br/>';
            foreach (debug_backtrace($backtrace_limit) as $backtrace) {
                if (!empty($backtrace['file'])) {
                    echo $backtrace['file'].(isset($backtrace['line']) ? '&nbsp;-&nbsp;line '.$backtrace['line'] : '').'<br/>';
                }
            }
        echo '</div>';
    echo '</pre>';
}
