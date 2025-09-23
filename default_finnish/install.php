<?php
/** @noinspection SqlNoDataSourceInspection */

if (!defined('DIR_CORE')) {
    header('Location: static_pages/');
}

//before install validate it is unique
$extName = "default_finnish";
$lngCode = "fi";
$lngName = "Suomi";
$lngDir = "finnish";
$lngLocale = "fi_FI.UTF-8,fi_FI,fi-fi,finnish";
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
foreach ($countryList['countries'] as $id => $name) {
    $this->db->query(
        "INSERT INTO " . $this->db->table('country_descriptions') . " 
            (`country_id`, `language_id`, `name`)
        VALUES 
            (" . $id . "," . $newLanguageId . ",'" . $this->db->escape(htmlspecialchars($name)) . "')"
    );
}

foreach ($countryList['zones'] as $id => $name) {
    $this->db->query(
        "INSERT INTO " . $this->db->table('zone_descriptions') . " 
            (`zone_id`,`language_id`, `name`)
        VALUES 
            (" . $id . "," . $newLanguageId . ",'" . $this->db->escape(htmlspecialchars($name)) . "')"
    );
}

include(DIR_EXT . $extName . DS. 'base_descriptions.php');
include(DIR_EXT . $extName . DS. 'insertBaseDescriptions.php');