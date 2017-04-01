<?php
//Include FB config file && User class
require_once 'fbConfig.php';		//page where fb config is donei.e. app id and secret id
require_once 'User.php';			// page where your database configuration is done

if(!$fbUser){
	$fbUser = NULL;
	$loginURL = $facebook->getLoginUrl(array('redirect_uri'=>$redirectURL,'scope'=>$fbPermissions));
	$output = '<a href="'.$loginURL.'"><img style="margin-left:4%; margin-top: 4%;" src="images/fblogin-btn.png"></a>'; 	
}else{
	//Get user profile data from facebook
	$fbUserProfile = $facebook->api('/me?fields=id,first_name,last_name,email,link,gender,locale,picture');
	
	//Initialize User class
	$user = new User();
	
	//Insert or update user data to the database
	$fbUserData = array(
		'oauth_provider'=> 'facebook',
		'oauth_uid' 	=> $fbUserProfile['id'],
		'first_name' 	=> $fbUserProfile['first_name'],
		'last_name' 	=> $fbUserProfile['last_name'],
		'email' 		=> $fbUserProfile['email'],
		'gender' 		=> $fbUserProfile['gender'],
		'locale' 		=> $fbUserProfile['locale'],
		'picture' 		=> $fbUserProfile['picture']['data']['url'],
		'link' 			=> $fbUserProfile['link']
	);
	$userData = $user->checkUser($fbUserData);
	
	//Put user data into session
	$_SESSION['userData'] = $userData;
	
	//Render facebook profile data
	if(!empty($userData)){
		$output = '<h1>Facebook Profile Details </h1>';
		$output .= '<img src="'.$userData['picture'].'">';
        $output .= '<br/>Facebook ID : ' . $userData['oauth_uid'];
        $output .= '<br/>Name : ' . $userData['first_name'].' '.$userData['last_name'];
        $output .= '<br/>Email : ' . $userData['email'];
        $output .= '<br/>Gender : ' . $userData['gender'];
        $output .= '<br/>Locale : ' . $userData['locale'];
        $output .= '<br/>Logged in with : Facebook';
		$output .= '<br/><a href="'.$userData['link'].'" target="_blank">Click to Visit Facebook Page</a>';
        $output .= '<br/>Logout from <a href="logout.php">Facebook</a>'; 
        
        //header('location: http://cp4.chasingpapers.com/');
	}else{
		$output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
	}
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login with Facebook using PHP by CodexWorld</title>
<style type="text/css">
h1{font-family:Arial, Helvetica, sans-serif;color:#999999;}
</style>
</head>
<body>
<div><?php echo $output; ?></div>
</body>
</html>