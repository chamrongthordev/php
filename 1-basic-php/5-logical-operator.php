<?php
/**
 * && logical AND
 * || logical OR
 * ! logical NOT
 */

 $age = 21;
 $name = "Chamrong";

 if($age == 21 && $name == "Chamrong") {
     echo "Chamrong is live in 2021!";
 }

 if($age == 21 || $name == "Chamrong") {
     echo "He is chamrong!";
 }

 if (!$age == 21) {
    echo "Chamrong not live in 2021";
 }