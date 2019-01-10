<?php
/**
 * Created by PhpStorm.
 * User: shanmaseen
 * Date: 10/01/19
 * Time: 09:58 ص
 */
return [
    'app_path' => realpath(__DIR__.'/../app/'),
    'route_path' => realpath(__DIR__.'/../routes/'),
    'resources_path' => realpath(__DIR__.'/../resources/'),

    //relative to app path
    'interfaces_path' => 'Interfaces/',
    'models_path' => 'Entities/',
    'controllers_path' => 'Http/Controllers/',
    'repositories_path' => 'Repositories/',
    'requests_path' => 'Http/Requests/',

];