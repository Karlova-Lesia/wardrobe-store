<?php

return [
    'products/ApiProducts' => 'products/apiProducts',
    'products/Products' => 'products/products',
    'products/OneProduct/([0-9]+)' => 'products/oneProduct/$1',
    'products/list' => 'products/list',
    'products/OneCategory/([a-z]+)' => 'products/oneCategory/$1',
    'home' => 'home/index',
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    'cabinet' => 'cabinet/index',
];
