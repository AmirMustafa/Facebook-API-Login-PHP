# Facebook Login API for PHP (v5)

[![Build Status](https://img.shields.io/travis/facebook/php-graph-sdk/5.4.svg)](https://travis-ci.org/facebook/php-graph-sdk)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/facebook/facebook-php-sdk-v4/badges/quality-score.png?b=5.4)](https://scrutinizer-ci.com/g/facebook/facebook-php-sdk-v4/?branch=5.4)
[![Latest Stable Version](http://img.shields.io/badge/Latest%20Stable-5.4.4-blue.svg)](https://packagist.org/packages/facebook/graph-sdk)


This repository contains the open source PHP Login API that allows you to access the Facebook Platform from your PHP Website / App.<br><br>
This small project helps web developers to implement the user registration with Facebook using PHP at their website. Also the user information would be stored at the MySQL database.

## Facebook Apps Creation

To access Facebook API you need to create Facebook App and specify App ID & App Secret at the time of call Facebook API. Follow the step-by-step guide to creating and configure a Facebook App from the App Dashboard.

Go to the Facebook App Dashboard and log in with your Facebook account.
Create a new Facebook apps with your desired name (like WebLogin).
If you want to test Facebook login at the localhost server, then your App Domains should be localhost. Also, localhost domain will only work, once you add platform. For add a platform click on Settings link from the left side menu panel » Click on the Add Platform button » Choose Website category » Enter site URL.
Once you completed the above steps, your apps settings page would something like the below.



## Installation

1. Clone the Repository.<br>
2. Import dbUsers.sql file through phpMyAdmin<br>
3. Open the User.php file and modify the $dbHost, $dbUsername, $dbPassword, $dbName variables value with your MySQL database credentials.<br>
4.Open the fbConfig.php file and specify the $appId, $appSecret, and $redirectURL as per your Facebook App credentials.<br>
5.Browse the index.php file in the browser and test the Login with Facebook functionality.<br>



## Usage

> **Note:** This version of the Facebook SDK for PHP requires PHP 5.4 or greater.

Simple GET example of a user's profile.

```<?php
session_start();

//Include Facebook SDK
require_once 'inc/facebook.php';

/*
 * Configuration and setup FB API
 */
$appId = '43........3187'; 								//Facebook App ID(create this from 																				developer.facebook.com)
$appSecret = 'ca55..............5add9a95f'; 			// Facebook App Secret
$redirectURL = 'http://fb.chasingpapers.com/'; // OAuth Uri  i.e. page where you want to redirect after 														                                                       login, this should be same as oauth login in dashboard

$fbPermissions = 'email';  //Required facebook permissions

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret
));
$fbUser = $facebook->getUser();
?>
```

## Tricks
In the Facebook App Dashboard, Site Url / Mobile Site Url is the page where fb login button exists and OAuth redirect URIs / Callback URI's is the page you want to get into after successful login(i.e. Website Home Login page => index.php) 


