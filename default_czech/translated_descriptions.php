<?php
//translated
$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'Předobjednávka')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Centimetr', 'cm'),
('2', ".$newLanguageId.", 'Milimetr', 'mm'),
('3', ".$newLanguageId.", 'palec', 'v')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Kilogram', 'kg'),
('2', ".$newLanguageId.", 'gram', 'g'),
('5', ".$newLanguageId.", 'Libra', 'libra'),
('6', ".$newLanguageId.", 'Unce', 'oz')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'Neúplné'),
('1', ".$newLanguageId.", 'Čekající'),
('2', ".$newLanguageId.", 'Zpracovává se'),
('3', ".$newLanguageId.", 'Odesláno'),
('5', ".$newLanguageId.", 'Dokončeno'),
('7', ".$newLanguageId.", 'Zrušeno'),
('8', ".$newLanguageId.", 'Odmítnuto'),
('9', ".$newLanguageId.", 'Zrušené storno'),
('10', ".$newLanguageId.", 'Selhalo'),
('11', ".$newLanguageId.", 'Vráceno'),
('12', ".$newLanguageId.", 'Obráceno'),
('13', ".$newLanguageId.", 'Vrácení platby'),
('14', ".$newLanguageId.", 'Zrušeno zákazníkem')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'Všechny ostatní stránky', '', '', '', '', ''),
('2', ".$newLanguageId.", 'Úvodní stránka', '', '', '', '', ''),
('3', ".$newLanguageId.", 'Přihlašovací stránka', '', '', '', '', ''),
('4', ".$newLanguageId.", 'Stránka Kontaktujte nás', '', '', '', '', ''),
('5', ".$newLanguageId.", 'Výchozí stránka produktu', '', '', '', '', ''),
('7', ".$newLanguageId.", 'Stránka údržby', '', '', '', '', ''),
('8', ".$newLanguageId.", 'Zákaznický panel', '', '', '', '', ''),
('9', ".$newLanguageId.", 'Detaily účtu', '', '', '', '', ''),
('10', ".$newLanguageId.", 'Změnit heslo', '', '', '', '', ''),
('11', ".$newLanguageId.", 'Adresy', '', '', '', '', ''),
('12', ".$newLanguageId.", 'Seznam přání', '', '', '', '', ''),
('13', ".$newLanguageId.", 'Historie objednávek', '', '', '', '', ''),
('14', ".$newLanguageId.", 'Historie transakcí', '', '', '', '', ''),
('15', ".$newLanguageId.", 'Stahování', '', '', '', '', ''),
('16', ".$newLanguageId.", 'Oznámení', '', '', '', '', ''),
('17', ".$newLanguageId.", 'Stránka košíku', '', '', '', '', ''),
('18', ".$newLanguageId.", 'Stránka rychlého dokončení nákupu', '', '', '', '', ''),
('19', ".$newLanguageId.", 'Stránka potvrzení úspěšného rychlého nákupu', '', '', '', '', ''),
('20', ".$newLanguageId.", 'Výchozí stránka obsahu', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'Volba produktu'),
('2', ".$newLanguageId.", 'Stáhnout atribut'),
('3', ".$newLanguageId.", 'Zákaznický atribut')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'Kontaktní formulář'),
('4', ".$newLanguageId.", 'Formulář adresy zákazníka'),
('5', ".$newLanguageId.", 'Formulář adresy a údajů hosta'),
('6', ".$newLanguageId.", 'Formulář údajů zákazníka'),
('7', ".$newLanguageId.", 'Registrační formulář zákazníka')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'Jméno:', '', ".$newLanguageId.", 'Jméno musí mít mezi 3 a 32 znaky!'),
('12', 'E-mail:', '', ".$newLanguageId.", 'Zdá se, že e-mailová adresa není platná!'),
('13', 'Dotaz:', '', ".$newLanguageId.", 'Dotaz musí mít 10 až 3000 znaků!'),
('14', 'Zadejte kód do pole níže:', '', ".$newLanguageId.", 'Ověření člověka selhalo! Zkuste to prosím znovu.'),
('16', 'země', '', ".$newLanguageId.", ''),
('18', 'DIČ', '', ".$newLanguageId.", ''),
('19', 'Země', '', ".$newLanguageId.", 'Prosím, vyberte zemi!'),
('20', 'Zóna', '', ".$newLanguageId.", 'Prosím vyberte region/stát!'),
('21', 'Společnost', '', ".$newLanguageId.", 'Název společnosti musí mít méně než 32 znaků!'),
('22', 'Řádek adresy 1', '', ".$newLanguageId.", 'Adresní řádek 1 musí mít mezi 3 a 128 znaky!'),
('23', 'Adresní řádek 2', '', ".$newLanguageId.", 'Řádek adresy 2 musí být kratší než 128 znaků!'),
('24', 'Město', '', ".$newLanguageId.", 'Město musí mít od 3 do 128 znaků!'),
('25', 'PSČ/PSČ', '', ".$newLanguageId.", 'PSČ / poštovní směrovací číslo musí mít méně než 11 znaků!'),
('26', 'Křestní jméno', '', ".$newLanguageId.", 'Křestní jméno musí mít mezi 1 a 32 znaky!'),
('27', 'Příjmení', '', ".$newLanguageId.", 'Příjmení musí mít od 1 do 32 znaků!'),
('29', 'Výchozí adresa', '', ".$newLanguageId.", ''),
('30', 'DIČ', '', ".$newLanguageId.", 'Kód DIČ musí mít mezi 8 a 14 znaky!'),
('31', 'Země', '', ".$newLanguageId.", 'Prosím, vyberte zemi!'),
('32', 'Region/Stát', '', ".$newLanguageId.", 'Vyberte prosím region/stát!'),
('33', 'Společnost', '', ".$newLanguageId.", 'Název společnosti musí mít méně než 32 znaků!'),
('34', 'Řádek 1 adresy', '', ".$newLanguageId.", 'Řádek adresy 1 musí obsahovat 3 až 128 znaků!'),
('35', 'Řádek adresy 2', '', ".$newLanguageId.", 'Řádek adresy 2 musí mít méně než 128 znaků!'),
('36', 'Město', '', ".$newLanguageId.", 'Město musí mít od 3 do 128 znaků!'),
('37', 'PSČ', '', ".$newLanguageId.", 'PSČ/Poštovní směrovací číslo musí mít méně než 11 znaků!'),
('38', 'Křestní jméno', '', ".$newLanguageId.", 'Jméno musí být mezi 1 a 32 znaky!'),
('39', 'Příjmení', '', ".$newLanguageId.", 'Příjmení musí být dlouhé 1 až 32 znaků!'),
('40', 'DIČ', '', ".$newLanguageId.", 'Kód DIČ musí obsahovat 8 až 14 znaků!'),
('41', 'E-mail', '', ".$newLanguageId.", 'Váš e-mail nebyl zadán nebo je neplatný!'),
('42', 'Telefonní číslo', '', ".$newLanguageId.", 'Vaše kontaktní telefonní číslo není uvedeno nebo je neplatné.'),
('43', 'Přihlašovací jméno', '', ".$newLanguageId.", 'Přihlašovací jméno musí mít mezi 5 a 65 znaky!'),
('44', 'Jméno', '', ".$newLanguageId.", 'Jméno musí mít mezi 1 a 32 znaky!'),
('45', 'Příjmení', '', ".$newLanguageId.", 'Příjmení musí mít 1 až 32 znaků!'),
('46', 'E-mail', '', ".$newLanguageId.", 'Váš e-mail nebyl zadán nebo je neplatný!'),
('47', 'Telefonní číslo', '', ".$newLanguageId.", 'Vaše kontaktní telefonní číslo není zadáno nebo je neplatné.'),
('49', 'Jméno', '', ".$newLanguageId.", 'Jméno musí mít délku od 1 do 32 znaků!'),
('50', 'Příjmení', '', ".$newLanguageId.", 'Příjmení musí být mezi 1 a 32 znaky!'),
('51', 'E-mail', '', ".$newLanguageId.", 'Váš e-mail nebyl zadán nebo je neplatný!'),
('52', 'Telefonní číslo', '', ".$newLanguageId.", 'Vaše kontaktní telefonní číslo není uvedeno nebo je neplatné.'),
('53', 'Země', '', ".$newLanguageId.", 'Prosím, vyberte zemi!'),
('54', 'Region/Stát', '', ".$newLanguageId.", 'Prosím, vyberte region/stát!'),
('55', 'Řádek adresy 1', '', ".$newLanguageId.", 'První řádek adresy musí mít 3 až 128 znaků!'),
('56', 'Řádek adresy 2', '', ".$newLanguageId.", 'Řádek adresy 2 musí být kratší než 128 znaků!'),
('57', 'Město', '', ".$newLanguageId.", 'Město musí mít mezi 3 a 128 znaky!'),
('58', 'PSČ/poštovní směrovací číslo', '', ".$newLanguageId.", 'PSČ/poštovní směrovací číslo musí mít méně než 11 znaků!'),
('59', 'Společnost', '', ".$newLanguageId.", 'Název společnosti musí mít méně než 32 znaků!'),
('60', 'Přihlašovací jméno', '', ".$newLanguageId.", 'Uživatelské jméno musí být pouze alfanumerické a mít délku 5 až 64 znaků!'),
('61', 'Přihlásit se', '', ".$newLanguageId.", ''),
('62', 'DIČ', '', ".$newLanguageId.", 'Kód DIČ musí mít mezi 8 a 14 znaky!')");


