<?php
if (! defined ( 'DIR_CORE' )) {
 header ( 'Location: static_pages/' );
}

$controllers = [
    'storefront' => [],
    'admin' => []
];

$models = [
    'storefront' => [],
    'admin' => []
];

$templates = [
    'storefront' => [],
    'admin' => []
];

$languages = [
    'storefront' => ['default_finnish/default_finnish'],
    'admin' => [
        'default_finnish/default_finnish'
    ]
];

