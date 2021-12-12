<?php

$users = array(
    'Chamrong',
    'Pisey',
    'Boeuk',
    'Hengmean',
);

$i = 1;
foreach ($users as $user) {
    echo $i++.'-'.$user."<br/>";
}