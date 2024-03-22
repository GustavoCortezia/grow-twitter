<?php

    $id_number=1;

function createTweetId(){
    global $id_number;
    return $id_number++;
};