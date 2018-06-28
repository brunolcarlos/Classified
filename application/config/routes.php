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
  |	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'home';
// $route['videos'] = 'videos';
$route['atualiza'] = 'atualiza/atzMake';
$route['404_override'] = 'home/error';
$route['car/(:any)'] = "car/mostra/$1";
$route['page'] = "home";
$route['about'] = "about";
$route['car_edit/(:any)'] = "car_edit/index/$1";
$route['car'] = "home";
$route['testadata'] = "testadata";
$route['xml'] = "xml";
$route['home'] = "home";
$route['register'] = "register";
$route['publish'] = "publish";
$route['sitemap'] = "sitemap";
$route['contact'] = "contact";
$route['edit'] = "edit";
$route['vin'] = "vin";
$route['emailcontatouser'] = "emailcontatouser";
$route['pedidoscarro'] = "pedidoscarro/index";
$route['email'] = "email";
$route['postcar'] = "postcar";
$route['alteraimagens'] = "Alteraimagens/index";
$route['shop'] = "shop";
$route['state'] = "state";

$route['page/(:num)'] = "home/index/$1";
$route['(:any)'] = "home/usernames/$1";
$route['admin/postbanner'] = "admin/Postbanner/index";
$route['state/(:any)'] = "state/s_car/$1";
$route['state/(:any)/(:any)/(:any)/(:any)/(:any)/(:any)'] = "state/s_car/$1/$2/$3/$4/$5/$6/";
$route['state/(:any)/(:any)/(:any)/(:any)/(:any)/(:any)/(:num)'] = "state/s_car/$1/$2/$3/$4/$5/$6/$7";
$route['state/(:any)/(:any)'] = "state/s_car/$1/$2";
$route['state/(:any)/(:any)/(:num)'] = "state/s_car/$1/$2/$3";
$route['translate_uri_dashes'] = FALSE;

