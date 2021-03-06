<?php

return [
    '' => 'home/index',
    'products/ApiProducts' => 'products/apiProducts',
    'products/search' => 'products/search',
    'products/OneProduct/([0-9]+)' => 'products/oneProduct/$1',
    'products/list' => 'products/list',
    'products/OneCategory/([a-z]+)' => 'products/oneCategory/$1',
    'cart' => 'cart/index',
    'cart/add/([0-9]+)' => 'cart/add/$1',
    'cart/delete/([0-9]+)' => 'cart/delete/$1',
    'user/login' => 'user/login',
    'user/register' => 'user/register',
    'user/logout' => 'user/logout',
    'cabinet' => 'cabinet/index',
    'cabinet/edit' => 'cabinet/edit',
    'cabinet/history' => 'cabinet/history',
];
