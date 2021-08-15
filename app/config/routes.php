<?php

return [
    'dresses/([0-9]+)' => 'dresses/oneDress/$1',
    'dresses' => 'dresses/list', //actionList in DressesController
    'blouses/([0-9]+)' => 'blouses/oneBlouse/$1',
    'blouses' => 'blouses/list',
    'tops/([0-9]+)' => 'tops/oneTop/$1',
    'tops' => 'tops/list',
    't-shirts/([0-9]+)' => 't-shirts/oneT-shirt/$1',
    't-shirts' => 't-shirts/list',
    'shorts/([0-9]+)' => 'shorts/oneShort/$1',
    'shorts' => 'shorts/list',
    'skirts/([0-9]+)' => 'skirts/oneSkirt/$1',
    'skirts' => 'skirts/list',
    'jeans/([0-9]+)' => 'jeans/oneJeans/$1',
    'jeans' => 'jeans/list'
];
