<?php

    $id_number=1;

function createUserId(){
    global $id_number;
    return $id_number++;
};