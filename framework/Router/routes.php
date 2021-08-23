<?php

return [
 //actionList in ProductController
    'products/OneProduct/([0-9]+)' => 'products/oneProduct/$1',
    'products/list' => 'products/list',
    'products/OneCategory/([a-z]+)' => 'products/oneCategory/$1',
    'home' => 'home/index',
    'authorization' => 'authorization/index',
    'registration' => 'registration/index',
];
