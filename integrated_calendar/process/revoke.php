<?php
require_once dirname(__FILE__) . './setup.php';
$client = get_client();
$client->setAccessToken(($_SESSION['access_token']));
$client->revokeToken();
session_destroy();

header('location: ../index.php');
