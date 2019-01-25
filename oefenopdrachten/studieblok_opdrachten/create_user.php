<?php

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.class.php';
});

$user = new User;
$user->setUser('Spongebob', 'Squarepants', '01-01-2001');
echo $user->getUser();

?>
