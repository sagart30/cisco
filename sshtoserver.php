<?php

error_reporting(0);
$connection = ssh2_connect('http://127.0.0.1', 22);
ssh2_auth_password($connection, 'username', 'password');

$stream = ssh2_exec($connection, '/usr/local/bin/php -i');