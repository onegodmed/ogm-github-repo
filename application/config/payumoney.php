<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['payumoney']['mode'] 	= 'test';

if( 'test' === $config['payumoney']['mode'] ){

	$config['payumoney']['merchent_key'] 	= 'gWX8Dxj9';
	$config['payumoney']['salt'] 			= 'HDSFHVQUOv';
	$config['payumoney']['base_url'] 		= 'https://test.payu.in';
}

if( 'live' === $config['payumoney']['mode'] ){

	$config['payumoney']['merchent_key'] 	= 'gWX8Dxj9';
	$config['payumoney']['salt'] 			= 'HDSFHVQUOv';
	$config['payumoney']['base_url'] 		= 'https://secure.payu.in/_payment';

}
