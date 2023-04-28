<?php

namespace Helper;


/**
 * Default route name, will be used if no other route was specified
 */
const DEFAULT_ROUTE = 'home';


/**
 * Route/script mapping
 *   key -> URI segment
 *   value -> PHP script name, which should be loaded for specified URI
 */
const ROUTE_MAP = [
    'home' => 'home',
    //'kategoria' => 'productList'
];


##########################################################################################################################


/**
 * URI parser - extracts URI segments devided by slash (/) separator
 * @return array Parsed segments and total segment count
 */
function uriParse() {   
  
    $uri = trim($_SERVER['REQUEST_URI'], '/');
    $uri_segments = array_filter(explode('/', $uri));

    return [
        'segments' => $uri_segments,
        'segment_count' => count($uri_segments)
    ];
}


/**
 * Route mapping getter
 * @return array Route map as specified above in ROUTE_MAP
 */
function getRouteMap() {
   return ROUTE_MAP ?: [];
}


/**
 * Default route getter
 * @return string|boolean Default route name as specified above in DEFAULT_ROUTE, otherwise false
 */
function getDefaultRoute() {
    if (isset(ROUTE_MAP[DEFAULT_ROUTE])) {
        return ROUTE_MAP[DEFAULT_ROUTE];
    } else {
        return false;
    }
 }
