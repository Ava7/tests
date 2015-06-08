<?php

require_once 'src/Autoloader.php';

$user = new User(Database::getInstance());
$user->setUser('user@example.eu');

echo $user->getUser();
