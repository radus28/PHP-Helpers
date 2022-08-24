<?php
/**
* @author Sutharsan Jeganathan
* @descriptoin quick script to log errors
**/
if (file_exists('error.log')) {
    $error = file_get_contents('error.log');
}

$logTime = date('m-d-Y H:i:s', time());

$error .= PHP_EOL . $logTime . ' - POSSIBLE ERROR MESSAGE HERE';

$error .= PHP_EOL . $logTime . ' - ANOTHER POSSIBLE ERROR MESSAGE HERE';


file_put_contents('error.log', $error);
