<?php

//new bracnh created

function factoriel($n){
    if($n==1)
        return $n;

    return $n*factoriel($n-1);
}

opcache_get_configuration();

phpinfo();






