<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['login'] = 'admin_controller/login';
$route['logout'] = 'admin_controller/logout';  
$route['dashboard'] = 'admin_controller/dashboard';
 
 
// $route['front'] = 'welcome/front';
$route['home'] = 'admin_controller/home';
$route['homeview'] = 'admin_controller/homeview';
$route['home/edit/(:any)'] = 'admin_controller/edit/$1';
$route['features/edit/(:any)'] = '/admin_controller/features_edit/$1';
$route['about/edit/(:any)'] = '/admin_controller/about_edit/$1';
$route['screenshort/edit/(:any)'] = '/admin_controller/screenshort_edit/$1';
$route['blog/edit/(:any)'] = '/admin_controller/blog_edit/$1';
$route['pricing/edit/(:any)'] = '/admin_controller/pricing_edit/$1';
$route['header/edit/(:any)'] = '/admin_controller/header_edit/$1';
$route['footer/edit/(:any)'] = '/admin_controller/footer_edit/$1';


$route['features'] = 'admin_controller/features';
$route['about'] = 'admin_controller/about';
$route['screenshot'] = 'admin_controller/screenshot';
$route['pricing'] = 'admin_controller/pricing';
$route['blog'] = 'admin_controller/blog';
$route['contact'] = 'admin_controller/contact';
$route['subscribe'] = 'admin_controller/subscribe';
$route['error'] = 'admin_controller/error';
$route['blank_page'] = 'admin_controller/blank_page';
$route['charts'] = 'admin_controller/charts';
$route['table'] = 'admin_controller/table';

 
$route['forgot'] = 'welcome/forgot';
$route['register'] = 'welcome/register';
$route['featuresview'] = 'admin_controller/featuresiew';
$route['aboutview'] = 'admin_controller/aboutview';

$route['sidebar'] = 'admin_controller/sidebar';
$route['topbar'] = 'admin_controller/topbar';
$route['footer'] = 'admin_controller/footer';
$route['header'] = 'admin_controller/header';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
