<?php

$request_args = explode('/', $_SERVER['REQUEST_URI']);

if ( boolval(array_filter($request_args)) ) {

    $controller_class  = ucwords($request_args[1]);

    include_once (APPPATH. '/controller/' .$controller_class .'.php');

    if ( $controller_class && class_exists($controller_class) ) {

        $controller_obj = new $controller_class;

        $controller_method = $request_args[2] ?? '';

        if ( method_exists($controller_obj, $controller_method ) ) {

            $controller_obj->$controller_method();

        }
    }

}


