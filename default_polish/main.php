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
    'storefront' => ['default_polish/default_polish'],
    'admin' => [
        'default_polish/default_polish'
    ]
];