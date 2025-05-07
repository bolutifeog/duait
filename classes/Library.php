<?php
 function sanitize($evilString){
    $safeString = htmlentities($evilString);
    return $safeString;
 }   
