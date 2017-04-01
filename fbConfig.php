<?php
session_start();

//Include Facebook SDK
require_once 'inc/facebook.php';

/*
 * Configuration and setup FB API
 */
$appId = '434412236903187'; 								//Facebook App ID(create this from 																				developer.facebook.com)
$appSecret = 'ca559e2eb696ec48a4abba85add9a95f'; 			// Facebook App Secret
$redirectURL = 'http://fb.chasingpapers.com/'; // Callback URL i.e. page where you want to redirect after 														login, this should be same as oauth login in dashboard
//$redirectURL = 'http://cp.chasingpapers.com/'; // Callback URL
//$redirectURL = 'http://cp4.chasingpapers.com/';
$fbPermissions = 'email';  //Required facebook permissions

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret
));
$fbUser = $facebook->getUser();
?>