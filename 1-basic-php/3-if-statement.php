<?php

    $isKhmer = false;
    $isEnglish = false;
    if($isKhmer) {
        echo "`You're Khmer!`";
    } else if ($isEnglish) {
        echo "You're English";
    } else {
        echo "I don't know your nationality. Could you tell me please";
    }