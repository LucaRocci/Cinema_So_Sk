<?php

    $arr = scandir("../carousel-photos");

    if(!$arr){
        return "null";
    }

    foreach($arr as $element){
        if($element !== "." && $element !== "..")
            echo $element.";";
    }    
?>