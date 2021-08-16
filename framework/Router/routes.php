<?php

return [
    '/products/list/([a-z]+)' => 'products/list/$1', //actionList in ProductsController
    '/products/([a-z]+)' => 'products/oneCategoryList/$1',
    '/products/([a-z]+)/([0-9]+)' => 'products/oneProduct/$1/$2',
    '/authorization' => 'authorization/index',
    '/registration' => 'registration/index',
];
