<?php

require('./model/tweet.php');
require('./model/user.php');
require('./data/user_data.php');
require('./data/tweet_data.php');
require('./utils/id_tweet.php');
require('./utils/id_user.php');

$usuario1 = new User('Gustavo', 'gus.cortezia@gmail.com', 'gustavo_cortezia', '12345');
$usuario2 = new User('Olívia', 'olivia@gmail.com', 'olivia_e', '54321');
$usuario3 = new User('Robson', 'robson@gmail.com', 'robson', '11111');
$usuario4 = new User('Bryan', 'bryan@gmail.com', 'bryansancho', '12211');

$tweet1 = new Tweet("Eu gosto muito de programar!", $usuario1, 0);
$tweet2 = new Tweet("Eu danço muito bem", $usuario2, 0);
$tweet3 = new Tweet("Meu nome é Robson", $usuario3, 0);
$tweet4 = new Tweet("o robson é o meu melhor amigo", $usuario4, 0);

array_push($userData, $usuario1);
array_push($userData, $usuario2);
array_push($userData, $usuario3);
array_push($userData, $usuario4);

array_push($tweetData, $tweet1);
array_push($tweetData, $tweet2);
array_push($tweetData, $tweet3);
array_push($tweetData, $tweet4);

$usuario1->likeTweet($tweet1->getId(), $tweetData);

$usuario1->likeTweet($tweet3->getId(), $tweetData);

// $tweet1->show($tweet1->getId(), $tweetData);

Tweet::list($tweetData);

// User:: verifyUsername($userData);


