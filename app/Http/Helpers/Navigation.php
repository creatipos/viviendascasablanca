<?php


    function isActiveRoute($route, $output = 'active')
    {

    	foreach ($route as $value) {
    	
    	if (Route::currentRouteName() == $value) {
            return $output;
        }

    	}

    }
