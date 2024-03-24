<?php

class Tweet {
    private $id;
    private $content;
    private $likes;
    private $user;

    function __construct($content, $user, $likes = 0){
        $this->id = createTweetId();
        $this->content = $content;
        $this->likes = $likes;
        $this->user = $user;
    }

    function getLikes(){
        return $this->likes;
    }

    function setLikes($likes){
        return $this->likes = $likes;
    }

    function getId(){
        return $this->id;
    }

    function show($tweetId, $tweetData){
        for ($key=0; $key < count($tweetData); $key++) { 
            if($tweetId == $tweetData[$key]->id){
                echo "@" . $tweetData[$key]->user->getUsername() . ":"
                . $tweetData[$key]->content . " <br><br> likes:" . $tweetData[$key]->likes . " <br><br> <hr> <br><br> ";
                 return;
            }
        }
        echo "Tweet " . $tweetId . " não encontrado.";
    }
    
    static function list($tweetData){
        for ($key=0; $key < count($tweetData); $key++) { 
            echo "@" . $tweetData[$key]->user->getUsername() . ": "
            . $tweetData[$key]->content . " <br><br> likes:" . $tweetData[$key]->likes . " <br><br> <hr> <br><br> ";
        }
    }

}