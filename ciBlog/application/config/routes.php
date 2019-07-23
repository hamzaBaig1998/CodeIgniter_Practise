<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['view']='users/view';
$route['users']='users/view';
$route['users/view']='users/view';
$route['posts/create']='posts/create';
$route['posts/update']='posts/update';
$route['posts/(:any)']='posts/view/$1';
$route['posts']='posts/index';
$route['default_controller'] = 'pages/view';
$route['(:any)']='pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
