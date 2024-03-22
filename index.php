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

$tweet1 = new Tweet("Eu gosto muito de programar!", 0 ,$usuario1);
$tweet2 = new Tweet("Eu danço muito bem", 0 ,$usuario2);
$tweet3 = new Tweet("Meu nome é Robson", 0 ,$usuario3);

$usuario1->likeTweet($tweet1->getId(), $tweetData);

$tweet1->show(4, $tweetData);

Tweet::list($tweetData);

