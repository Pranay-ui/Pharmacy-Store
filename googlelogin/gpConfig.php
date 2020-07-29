<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '1006252910715-slktm76nhvffnjfmtj34cgp3mmbov2h3.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'ENkjFvIB-6-KBKD2u_6U2O5B'; //Google client secret
$redirectURL = 'http://localhost/googlelogin'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>