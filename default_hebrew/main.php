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
    'storefront' => ['default_hebrew/default_hebrew'],
    'admin' => [
        'default_hebrew/default_hebrew'
    ]
];
