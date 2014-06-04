<?php

require_once 'src/Autoloader.php';


$user = new User(Database::getInstance());
$user->setUser('ava@ava7.eu');

echo $user->getUser();