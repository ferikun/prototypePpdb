<?php

function test($fn){
$fn("sdfghjk");
}

test(function($query){
    echo $query;
});