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

## Trick
In the Facebook App Dashboard, Site Url / Mobile Site Url is the page where fb login button exists and OAuth redirect URIs / Callback URI's is the page you want to get into after successful login(i.e. Website Home Login page => index.php) 

## Installation

1. Clone the Repository.<br>
2. Import dbUsers.sql file through phpMyAdmin<br>
3. Open the User.php file and modify the $dbHost, $dbUsername, $dbPassword, $dbName variables value with your MySQL database credentials.<br>
4.Open the fbConfig.php file and specify the $appId, $appSecret, and $redirectURL as per your Facebook App credentials.<br>
5.Browse the index.php file in the browser and test the Login with Facebook functionality.<br>

## Upgrading to v5.x

Upgrading from v4.x? Facebook PHP SDK v5.x introduced breaking changes. Please [read the upgrade guide](https://www.sammyk.me/upgrading-the-facebook-php-sdk-from-v4-to-v5) before upgrading.


## Usage

> **Note:** This version of the Facebook SDK for PHP requires PHP 5.4 or greater.

Simple GET example of a user's profile.

```php
$fb = new \Facebook\Facebook([
  'app_id' => '{app-id}',
  'app_secret' => '{app-secret}',
  'default_graph_version' => 'v2.8',
  //'default_access_token' => '{access-token}', // optional
]);

// Use one of the helper classes to get a Facebook\Authentication\AccessToken entity.
//   $helper = $fb->getRedirectLoginHelper();
//   $helper = $fb->getJavaScriptHelper();
//   $helper = $fb->getCanvasHelper();
//   $helper = $fb->getPageTabHelper();

try {
  // Get the \Facebook\GraphNodes\GraphUser object for the current user.
  // If you provided a 'default_access_token', the '{access-token}' is optional.
  $response = $fb->get('/me', '{access-token}');
} catch(\Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(\Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$me = $response->getGraphUser();
echo 'Logged in as ' . $me->getName();
```

Complete documentation, installation instructions, and examples are available [here](docs/).


## Tests

1. [Composer](https://getcomposer.org/) is a prerequisite for running the tests. Install composer globally, then run `composer install` to install required files.
2. Create a test app on [Facebook Developers](https://developers.facebook.com), then create `tests/FacebookTestCredentials.php` from `tests/FacebookTestCredentials.php.dist` and edit it to add your credentials.
3. The tests can be executed by running this command from the root directory:

```bash
$ ./vendor/bin/phpunit
```

By default the tests will send live HTTP requests to the Graph API. If you are without an internet connection you can skip these tests by excluding the `integration` group.

```bash
$ ./vendor/bin/phpunit --exclude-group integration
```


## Contributing

For us to accept contributions you will have to first have signed the [Contributor License Agreement](https://developers.facebook.com/opensource/cla). Please see [CONTRIBUTING](https://github.com/facebook/php-graph-sdk/blob/master/CONTRIBUTING.md) for details.


## License

Please see the [license file](https://github.com/facebook/php-graph-sdk/blob/master/LICENSE) for more information.


## Security Vulnerabilities

If you have found a security issue, please contact the maintainers directly at [me@sammyk.me](mailto:me@sammyk.me).
