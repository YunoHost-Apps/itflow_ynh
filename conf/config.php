<?php

$dbhost = 'localhost';
$dbusername = '__DB_USER__';
$dbpassword = '__DB_PWD__';
$database = '__DB_NAME__';
$mysqli = mysqli_connect($dbhost, $dbusername, $dbpassword, $database) or die('Database Connection Failed');
$config_app_name = 'ITFlow';
$config_base_url = '__DOMAIN____PATH__';
$config_https_only = false;
$repo_branch = 'master';
$installation_id = 'BmBuGzc3WzV33egS36g0K3miyQGWOfKP';
$config_enable_setup = 0;
