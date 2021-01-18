<?php

require 'User.php';

$utente1 = new User('usual_poster','gatto,jpg','anonimo@gmail.com','40');

echo "<p>Blog user : </p>";


echo "<p>Nickname : " . $utente1->getAlias() . "</p>";

echo "<p>File usato come avatar : " . $utente1->getAvatar() . "</p>";

echo "<p>email : " . $utente1->getMail() . "</p>";

echo "<p>Numero post nel blog : " . $utente1->getPosts() . "</p>";

?>
