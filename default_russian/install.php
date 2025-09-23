<?php
/*
 *   $Id$
 *
 *   AbanteCart, Ideal OpenSource Ecommerce Solution
 *   http://www.AbanteCart.com
 *
 *   Copyright © 2011-2025 Belavier Commerce LLC
 *
 *   This source file is subject to Open Software License (OSL 3.0)
 *   License details is bundled with this package in the file LICENSE.txt.
 *   It is also available at this URL:
 *   <http://www.opensource.org/licenses/OSL-3.0>
 *
 *  UPGRADE NOTE:
 *    Do not edit or add to this file if you wish to upgrade AbanteCart to newer
 *    versions in the future. If you wish to customize AbanteCart for your
 *    needs please refer to http://www.AbanteCart.com for more information.
 */

if (!defined('DIR_CORE')) {
    header('Location: static_pages/');
}

//before install validate it is unique
$extName = "default_russian";
$lngCode = 'ru';
$lngName = 'Русский';
$lngDir = 'russian';
$lngLocale = 'ru_RU.UTF-8,ru_RU,russian';
$lngFlagPath = "extensions/" . $extName . "/storefront/language/" . $lngDir . "/flag.png";
$lngSortOrder = 2; // sorting order with other languages
$lngStatus = 0; // Status on installation of extension

$query = $this->db->query(
    "SELECT language_id 
    FROM " . $this->db->table('languages') . " 
    WHERE code='" . $lngCode . "'"
);

if ($query->row['language_id']) {
    $this->session->data['error'] = "Error: Language with " . $lngCode . " code is already installed! "
        . "Can not install duplicate languages! Uninstall this extension before attempting again.";
    $error = new AError ($this->session->data['error']);
    $error->toLog()->toDebug();
    return false;
}

$this->db->query(
    "INSERT INTO " . $this->db->table('languages') . " 
        (`name`,`code`,`locale`,`image`,`directory`,`filename`, `sort_order`, `status`)
	 VALUES ('" . $lngName . "', '" . $lngCode . "', '" . $lngLocale . "', '" . $lngFlagPath . "','" . $lngDir . "',
	 '" . $lngDir . "','" . $lngSortOrder . "'," . $lngStatus . ");");

$newLanguageId = (int)$this->db->getLastId();

$xml = simplexml_load_file(DIR_EXT . $extName . DS. 'menu.xml');

$routes = [
    'text_index_home_menu'        => 'index/home',
    'text_product_special_menu'   => 'product/special',
    'text_account_login_menu'     => 'account/login',
    'text_account_logout_menu'    => 'account/logout',
    'text_account_account_menu'   => 'account/account',
    'text_account_history_menu'   => 'account/history',
    'text_checkout_cart_menu'     => 'checkout/cart',
    'text_checkout_shipping_menu' => 'checkout/fast_checkout',
];

if ($xml) {
    foreach ($xml->definition as $item) {
        $translates[$routes[(string)$item->key]] = (string)$item->value;
    }

    $storefront_menu = new AMenu_Storefront();
    $storefront_menu->addLanguage($newLanguageId, $translates);
}

$countryList = (array)include(DIR_EXT . $extName . DS . 'countries_zones.php');
foreach ($countryList['countries'] as $cid => $cName) {
    $this->db->query(
        "INSERT INTO " . $this->db->table('country_descriptions') . " 
            (`country_id`, `language_id`, `name`)
        VALUES 
            (" . $cid . "," . $newLanguageId . ",'" . $this->db->escape(htmlspecialchars($cName)) . "')"
    );
}

foreach ($countryList['zones'] as $zid => $zoneName) {
    $this->db->query(
        "INSERT INTO " . $this->db->table('zone_descriptions') . " 
            (`zone_id`,`language_id`, `name`)
        VALUES 
            (" . $zid . "," . $newLanguageId . ",'" . $this->db->escape(htmlspecialchars($zoneName)) . "')"
    );
}

include(DIR_EXT . $extName . DS. 'base_descriptions.php');
include(DIR_EXT . $extName . DS. 'insertBaseDescriptions.php');
