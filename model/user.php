<?php

class User {
    private $id;
    private $name;
    private $email;
    private $username;
    private $password;

    function __construct($name, $email, $username, $password) {
        $this->id = createUserId();
        $this->name = $name;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
    }

    function getUsername(){
        return $this->username;
    }

    static function verifyUsername($userData){ 
        for ($key=0; $key < count($userData); $key++) {
            for ($key1=0; $key1 < count($userData); $key1++) {
                if($userData[$key]->username == $userData[$key1]->username){
                    echo "username  invalido!";
                }
            }
        }
    }

    function createTweet($tweetData){
        var_dump($tweetData);
        array_push($tweetData, $this);
        return $tweetData;
    }

    function likeTweet($tweetId, $tweetData){
        for ($key=0; $key < count($tweetData); $key++) {
            if($tweetId == $tweetData[$key]->getId()){
                $tweetData[$key]->setLikes($tweetData[$key]->getLikes() + 1);
            }
        }
    }

}