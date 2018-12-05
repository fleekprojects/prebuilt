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

$route['default_controller'] = 'Home';
$route['select-domain'] = 'Domain';
$route['select-theme'] = 'Theme';
$route['other-info'] = 'Info';
$route['select-package'] = 'Package';
$route['checkout'] = 'Checkout';
$route['payment-confirm'] = 'Confirm';
$route['save-user-info'] = 'Home/save_user_info';
$route['domain'] = 'Domain/index';
$route['select-theme'] = 'Theme/index';




$route['admin/users'] = 'admin/Users';
$route['admin/usersadd'] = 'admin/Users/adduser';
$route['admin/usersedit'] = 'admin/Users/edituser';
$route['admin/userupdate'] = 'admin/Users/updateuser';
$route['admin/userdelete'] = 'admin/Users/userdelete';
$route['admin/industry'] = 'admin/Industry';
$route['admin/industryadd'] = 'admin/Industry/addindustry';
$route['admin/industryedit'] = 'admin/Industry/editindustry';
$route['admin/industryupdate'] = 'admin/Industry/updateindustry';
$route['admin/industrydelete'] = 'admin/Industry/industrydelete';
$route['admin/packages'] = 'admin/Packages';
$route['admin/packageadd'] = 'admin/Packages/addpackage';
$route['admin/packageedit'] = 'admin/Packages/editpackage';
$route['admin/packageupdate'] = 'admin/Packages/updatepackage';
$route['admin/packagedelete'] = 'admin/Packages/packagedelete';
$route['admin/category'] = 'admin/Themescategory';
$route['admin/categoryadd'] = 'admin/Themescategory/addcategory';
$route['admin/categoryedit'] = 'admin/Themescategory/editcategory';
$route['admin/categoryupdate'] = 'admin/Themescategory/updatecategory';
$route['admin/categorydelete'] = 'admin/Themescategory/categorydelete';
$route['admin/themes'] = 'admin/Themes';
$route['admin/themeadd'] = 'admin/Themes/addtheme';
$route['admin/themeedit'] = 'admin/Themes/edittheme';
$route['admin/themeupdate'] = 'admin/Themes/updatetheme';
$route['admin/themedelete'] = 'admin/Themes/themedelete';


$route['admin'] = 'admin/Admin';
$route['admin/(:any)'] = 'admin/Admin/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
