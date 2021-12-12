<?php
/**
 * === Equality to
 * !== Not equality to
 * == Equal to
 * != Not equal to
 * > Greater than
 * < Lower than
 * >= Greater or equal than
 * <= Less or equal than
 */

 $number = 10;

 if ($number === '10') {
     echo "$number === '10'";
 }
 
 if ($number !== '10') {
     echo "$number !== '10";
 }

 if ($number == 10) {
     echo "$number = ".$number;
 }

 if ($number != 11) {
     echo "$number !=".$number;
 }

 if ($number > 10) {
     echo "$number greater than ".$number;
 }

 if ($number >= 10) {
     echo "$number greater than or equal to ".$number;
 }

 if ($number < 10) {
     echo "$number less than ".$number;
 }

 if ($number <= 10) {
     echo "$number less than or equal to ".$number;
 }