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
4.Open the fbConfig.php file and specify the $appId, $appSecret, and $redirectURL as per your Facebook App credentials.<br><br>
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
In the Facebook App Dashboard: <br>1. Site Url / Mobile Site Url is the page where fb login button exists and <br/>2. OAuth redirect URIs / Callback URI's is the page you want to get into after successful login(i.e. Website Home Login page => index.php) and this should be same as redirect url in fbconfig.php code

## Preview

![Screenshot of Facebook Login API](https://cloud.githubusercontent.com/assets/15896579/24581274/f7bfc444-1735-11e7-9f06-4144823512d2.png?raw=true "Screenshot of Facebook Login API")
<br/><br/><br/>

![Screenshot of Facebook Login API](https://cloud.githubusercontent.com/assets/15896579/24581272/f7be37be-1735-11e7-984a-79078e8d9120.png?raw=true "Screenshot of Facebook Login API")
<br/><br/><br/>

![Screenshot of Facebook Login API](https://cloud.githubusercontent.com/assets/15896579/24581338/e6266d22-1736-11e7-86e4-d1f00aa679b3.png?raw=true "Screenshot of Facebook Login API")
<br/><br/><br/>

![Screenshot of Facebook Login API](https://cloud.githubusercontent.com/assets/15896579/24581269/f7b96b6c-1735-11e7-833a-015dd36515f6.png?raw=true "Screenshot of Facebook Login API")
<br/><br/><br/>

![Screenshot of Facebook App Dashboard](https://cloud.githubusercontent.com/assets/15896579/24581271/f7bc5f16-1735-11e7-8382-1165cfc9d62d.png?raw=true "Screenshot of Facebook App Dashboard")
<br/><br/><br/>

![Screenshot of Facebook App Dashboard](https://cloud.githubusercontent.com/assets/15896579/24581273/f7be772e-1735-11e7-8c80-89bf645cf934.png?raw=true "Screenshot of Facebook App Dashboard")
<br/><br/><br/>

![Screenshot of Facebook App Dashboard](https://cloud.githubusercontent.com/assets/15896579/24581270/f7baa720-1735-11e7-9d30-fe3b187e5ce3.png?raw=true "Screenshot of Facebook App Dashboard")
<br/><br/><br/>



## License

(The MIT License)

Copyright (c) 2016 Amir Mustafa

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
'Software'), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.





