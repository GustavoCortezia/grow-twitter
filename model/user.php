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

    public function createTweet($tweetData){
        var_dump($tweetData);
        array_push($tweetData, $this);
        return $tweetData;
    }

    function likeTweet($tweetId, $tweetData){
        foreach ($tweetData as $key => $tweetId) {
            if($tweetId == $tweetData[$key]->getId()){
                $tweetData[$key]->setLikes($tweetData[$key]->getLikes() + 1);
            }
        }
    }

    function deleteTweet($tweetId, $tweetData){}

    function listTweets($tweetData){}
}