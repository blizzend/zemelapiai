<?php

require_once 'vendor/autoload.php';

$google_client = new Google_Client();

$google_client->setClientId('725369424908-mbdj96bcj101jd7n3on48nvpi8gnps5v.apps.googleusercontent.com');

$google_client->setClientSecret('tr1ms_Rks7QNJwAfuATMpEuN');

$google_client->setRedirectUri('http://localhost:8000/profile');

$google_client->addScope('email');

$google_client->addScope('profile');

session_start();

?>