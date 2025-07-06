<?php
if (! defined ( 'DIR_CORE' )) {
 header ( 'Location: static_pages/' );
}

$language_code = "uk";
$language_directory = "ukrainian";
$lngCode = "uk";
$lngDir = "ukrainian";

$query = $this->db->query(
    "SELECT language_id 
    FROM " . $this->db->table("languages") . " 
	WHERE code='" . $lngCode . "' AND directory='" . $lngDir . "'");
$language_id = (int)$query->row["language_id"];
//delete menu
$storefront_menu = new AMenu_Storefront();
$storefront_menu->deleteLanguage($language_id);

//delete all other language related tables
$lm = new ALanguageManager($this->registry, $lngCode);
$lm->deleteAllLanguageEntries($language_id);

//delete language
$this->db->query("DELETE FROM " . $this->db->table("languages") . " WHERE `code`='" . $lngCode . "'");

$this->cache->remove("localization");