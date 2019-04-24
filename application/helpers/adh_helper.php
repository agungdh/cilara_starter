<?php

use Jenssegers\Blade\Blade;

if (!function_exists('blade')) {
    function blade($view, $data = [])
    {
    	$data['adh'] = new agungdh\Pustaka();
        $path = APPPATH.'blades';
        $blade = new Blade($path, APPPATH.'cache/blade');

    	echo $blade->make($view, $data);
    }
 }
