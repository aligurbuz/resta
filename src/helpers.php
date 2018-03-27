<?php

if (!function_exists('dd')) {
    function dd()
    {
        $args = func_get_args();
        call_user_func_array('dump', $args);
        die();
    }
}

if (!function_exists('environment')) {
    function environment()
    {
        return \Resta\Environment\EnvironmentConfiguration::environment(
            func_get_args(),app()->singleton()->var
        );
    }
}

if (!function_exists('app')) {

    /**
     * @return \Resta\ApplicationProvider
     */
    function app()
    {
        return \application::getAppInstance();
    }
}

if (!function_exists('request')) {

    /**
     * @return \Store\Services\RequestService|\Symfony\Component\HttpFoundation\Request
     */
    function request()
    {
        return app()->request();
    }
}


if (!function_exists('post')) {

    /**
     * @param null $param
     * @return mixed
     */
    function post($param=null)
    {
        return app()->post($param);
    }
}



if (!function_exists('get')) {

    /**
     * @param null $param
     * @return mixed
     */
    function get($param=null)
    {
        return app()->get($param);
    }
}

if (!function_exists('applicationKey')) {

    /**
     * @return string
     */
    function applicationKey()
    {
        if(property_exists($kernel=app()->app->kernel(),'applicationKey')){
            return $kernel->applicationKey;
        }
        return null;

    }
}

if (!function_exists('config')) {

    /**
     * @param $config null
     * @return string
     */
    function config($config=null)
    {
        return app()->singleton()->appClass->configLoaders($config);
    }
}

if (!function_exists('resolve')) {

    /**
     * @param $class
     * @param array $bind
     * @return mixed
     */
    function resolve($class,$bind=array())
    {
        return app()->makeBind($class,$bind);
    }
}

if (!function_exists('container')) {

    /**
     * @param $class
     * @param array $bind
     * @return mixed
     */
    function container($class,$bind=array())
    {
        return app()->singleton()->appClass->container(app(),$class,$bind);
    }
}