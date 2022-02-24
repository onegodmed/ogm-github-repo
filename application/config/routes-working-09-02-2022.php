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
$route['default_controller'] = 'Front';
$route['404_override'] = 'front/page_not_found';
$route['translate_uri_dashes'] = FALSE;
$route['become-a-partner'] = 'front/member';
$route['vedic-astrology'] = 'front/solutions';
$route['vedic-astrology/business-astrology'] = 'front/service/business-astrology';
$route['vedic-astrology/career-&-education'] = 'front/service/career-&-education';
$route['vedic-astrology/marriage-prediction'] = 'front/service/marriage-prediction';
$route['vedic-astrology/relationship-&-compatibility'] = 'front/service/relationship-&-compatibility';
$route['vedic-astrology/wealth-&-property'] = 'front/service/wealth-&-property';
$route['vedic-astrology/family-consultation'] = 'front/service/family-consultation';
$route['vedic-astrology/medical-astrology'] = 'front/service/medical-astrology';
$route['vedic-astrology/numerology'] = 'front/service/numerology';
$route['vedic-astrology/palmistry'] = 'front/service/palmistry';
$route['vedic-astrology/vastu-shastra'] = 'front/service/vastu-shastra';
$route['vedic-astrology/tarot-cards'] = 'front/service/tarot-cards';
$route['horoscope-report'] = 'front/kundali';
$route['horoscope-report/all-remedies-report'] = 'front/get_kundali/all-remedies-report';
$route['horoscope-report/in-depth-horoscope'] = 'front/get_kundali/in-depth-horoscope';
$route['horoscope-report/career-report'] = 'front/get_kundali/career-report';
$route['horoscope-report/education-report'] = 'front/get_kundali/education-report';
$route['horoscope-report/finance-report'] = 'front/get_kundali/finance-report';
$route['horoscope-report/health-report'] = 'front/get_kundali/health-report ';
$route['horoscope-report/numerology-report'] = 'front/get_kundali/numerology-report';
$route['horoscope-report/pitra-dosh-report'] = 'front/get_kundali/pitra-dosh-report';
$route['horoscope-report/lal-kitab-report'] = 'front/get_kundali/lal-kitab-report';
$route['horoscope-report/prashna-kundli'] = 'front/get_kundali/prashna-kundli';
$route['blog/(:any)'] = 'blog/index/$1';
$route['talk-to-astrologers'] = 'front/consult_now';
$route['chat-with-astrologer'] = 'front/chat_consult_now';
$route['terms-and-condition'] = 'front/terms_and_condition';
$route['faq'] = 'front/faq';
$route['send'] = 'front/send'; // to do - chat start notification - FCM integration
$route['credit'] = 'front/credit'; // to do - chat end notification - FCM integration
$route['privacy-policy'] = 'front/privacy_policy';
$route['horoscopes/(:any)/daily/(:any)'] = 'horoscopes/dailyhoroscope';
$route['horoscopes/(:any)/weekly/(:any)'] = 'horoscopes/weeklyhoroscope';
$route['horoscopes/(:any)/monthly/(:any)'] = 'horoscopes/monthlyhoroscope';
$route['horoscopes/(:any)/yearly/(:any)'] = 'horoscopes/yearlyhoroscope';
$route['horoscopes/(:any)/(:any)/(:any)/(:any)'] = 'horoscopes/catdatahoroscope';
$route['package'] = 'front/package';
$route['wallet'] = 'front/wallet';
$route['pay'] = 'front/pay';
$route['book-call'] = 'front/book_call';
$route['book-call-in-queue'] = 'front/book_call_in_queue';
$route['astrologer/(:any)'] = 'front/astrologer/$1';
$route['horoscope-report/(:any)/(:any)'] = 'front/kundali_information/$1';
 $route['login-signup'] = 'login';
$route['partner-login'] = 'login/vendorlogin';
$route['partner-chat/(:any)'] = 'login/vendor_login_chat/$1';
 $route['partner'] = 'user/index';
 $route['user'] = 'user/index';
 $route['admin'] = 'user/index';
 $route['partner/account'] = 'user/account';
 $route['user/account'] = 'user/account';
 $route['admin/account'] = 'user/account';
 $route['kundali-match-making'] = 'match/matchform';
 $route['free-kundali'] = 'kundali/kundaliform';
 $route['partner/vendor_service_list'] = 'admin/vendor_service_list';
 $route['user/vendor_service_list'] = 'admin/vendor_service_list';
 $route['admin/vendor_service_list'] = 'admin/vendor_service_list';
 $route['partner/my_booking'] = 'admin/my_booking';
 $route['partner/chat_booking'] = 'admin/chat_booking';
 $route['user/my_booking'] = 'admin/my_booking';
 $route['admin/my_booking'] = 'admin/my_booking';
 $route['partner/my_earning'] = 'admin/my_earning';
 $route['user/my_earning'] = 'admin/my_earning';
 $route['admin/my_earning'] = 'admin/my_earning';
 $route['user/wallet_history'] = 'user/wallet_history';
 $route['admin/wallet_history'] = 'user/wallet_history';
 $route['user/add-weeklytime'] = 'user/weeklyavailability';
 $route['my-astrologers']    = 'front/myfollower';
 $route['user/my-astrologers']    = 'user/myfollower';

//Ajax for wallet update by ritesh
 $route['ajax/packageRecharge'] = 'front/packageRecharge';
 
