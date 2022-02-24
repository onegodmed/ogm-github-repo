<?php
/** set your paypal credential **/

$config['client_id'] = 'AdZ6txyyx5gM04I8bY1KKOQcWX0P-VK8afjMXXcXZEAyJaDS8o8oK5apAo8Tbb6tPFvWaT_D7p_fH9q6';
$config['secret'] = 'EB4916dVujnYG6Nv380Q0hToH-h1Nt14UccxBsmk3scYTIKPqI0dvI41UC2cqoZPSf4tdGzXNKjjlKro';

/**
 * SDK configuration
 */
/**
 * Available option 'sandbox' or 'live'
 */
$config['settings'] = array(

    'mode' => 'sandbox',
    /**
     * Specify the max request time in seconds
     */
    'http.ConnectionTimeOut' => 1000,
    /**
     * Whether want to log to a file
     */
    'log.LogEnabled' => true,
    /**
     * Specify the file that want to write on
     */
    'log.FileName' => 'application/logs/paypal.log',
    /**
     * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
     *
     * Logging is most verbose in the 'FINE' level and decreases as you
     * proceed towards ERROR
     */
    'log.LogLevel' => 'FINE'
);
