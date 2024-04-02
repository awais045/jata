<?php

function pr($data , $exit=0){

    echo "<pre>";
    print_r($data);
    echo "</pre>";

    if($exit)   
        exit();
}