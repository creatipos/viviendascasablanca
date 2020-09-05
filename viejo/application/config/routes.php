<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
// Ejemplo para 3 idiomas (ampliable al número de idiomas que utilices). Por ejemplo '/en/about' -> usaria el controlador 'about'
$route['default_controller'] = "home";
//$route['default_controller'] = "home/index";
$route['modelo/(.*).html'] = "modelo/index/$1/";
$route['faq.html'] = "home/pf/";
$route['galeria/(.*).html'] = "galeria/index/$1/";
$route['modelos/pagina_(.*).html'] = "modelos/index/$1/";
$route['modelos.html'] = "modelos/index";


//$route['(en|es)/diario/(.*).html'] = "diario/index/$2/";
//$route['(en|es)/diarios/(.*).html'] = "diarios/index/$2/";



// '/en', '/es', '/fr' URIs -> controlador usado por defecto
//$route['^(en|es)'] = $route['default_controller'];
$route['404_override'] = 'my404';

/* End of file routes.php */
/* Location: ./application/config/routes.php */