<?php
//translated
$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'Prednaročilo')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'centimeter', 'cm'),
('2', ".$newLanguageId.", 'milimeter', 'mm'),
('3', ".$newLanguageId.", 'Palec', 'v')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Kilogram', 'kg'),
('2', ".$newLanguageId.", 'gram', 'g'),
('5', ".$newLanguageId.", 'funt', 'lb'),
('6', ".$newLanguageId.", 'unca', 'oz')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'Nedokončano'),
('1', ".$newLanguageId.", 'Na čakanju'),
('2', ".$newLanguageId.", 'V obdelavi'),
('3', ".$newLanguageId.", 'Odposlano'),
('5', ".$newLanguageId.", 'Zaključeno'),
('7', ".$newLanguageId.", 'Preklicano'),
('8', ".$newLanguageId.", 'Zavrnjeno'),
('9', ".$newLanguageId.", 'Preklicano povračilo'),
('10', ".$newLanguageId.", 'Neuspešno'),
('11', ".$newLanguageId.", 'Povrnjeno'),
('12', ".$newLanguageId.", 'Razveljavljeno'),
('13', ".$newLanguageId.", 'vračilo bremenitve'),
('14', ".$newLanguageId.", 'Preklicano s strani kupca')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'Vse ostale strani', '', '', '', '', ''),
('2', ".$newLanguageId.", 'Domača stran', '', '', '', '', ''),
('3', ".$newLanguageId.", 'Prijavna stran', '', '', '', '', ''),
('4', ".$newLanguageId.", 'Kontaktna stran', '', '', '', '', ''),
('5', ".$newLanguageId.", 'Privzeta stran izdelka', '', '', '', '', ''),
('7', ".$newLanguageId.", 'Vzdrževalna stran', '', '', '', '', ''),
('8', ".$newLanguageId.", 'Nadzorna plošča kupca', '', '', '', '', ''),
('9', ".$newLanguageId.", 'Podrobnosti računa', '', '', '', '', ''),
('10', ".$newLanguageId.", 'Spremeni geslo', '', '', '', '', ''),
('11', ".$newLanguageId.", 'Naslovi', '', '', '', '', ''),
('12', ".$newLanguageId.", 'Seznam želja', '', '', '', '', ''),
('13', ".$newLanguageId.", 'Zgodovina naročil', '', '', '', '', ''),
('14', ".$newLanguageId.", 'Zgodovina transakcij', '', '', '', '', ''),
('15', ".$newLanguageId.", 'Prenosi', '', '', '', '', ''),
('16', ".$newLanguageId.", 'Obvestila', '', '', '', '', ''),
('17', ".$newLanguageId.", 'Stran košarice', '', '', '', '', ''),
('18', ".$newLanguageId.", 'Stran hitrega zaključka nakupa', '', '', '', '', ''),
('19', ".$newLanguageId.", 'Stran uspeha hitre blagajne', '', '', '', '', ''),
('20', ".$newLanguageId.", 'Privzeta vsebina strani', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'Možnost izdelka'),
('2', ".$newLanguageId.", 'Atribut prenosa')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'Kontaktni obrazec'),
('4', ".$newLanguageId.", 'Obrazec za naslov stranke'),
('5', ".$newLanguageId.", 'Obrazec za naslov in podrobnosti gosta'),
('6', ".$newLanguageId.", 'Obrazec podatkov o stranki'),
('7', ".$newLanguageId.", 'Obrazec za registracijo kupca')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'Ime:', '', ".$newLanguageId.", 'Ime mora imeti med 3 in 32 znaki!'),
('12', 'E-pošta:', '', ".$newLanguageId.", 'E-poštni naslov se ne zdi veljaven!'),
('13', 'Povpraševanje:', '', ".$newLanguageId.", 'Poizvedba mora imeti med 10 in 3000 znakov!'),
('14', 'Vnesite kodo v spodnje polje:', '', ".$newLanguageId.", 'Človeško preverjanje ni uspelo! Prosimo, poskusite znova.'),
('16', 'države', '', ".$newLanguageId.", ''),
('18', 'Davčna številka za DDV', '', ".$newLanguageId.", ''),
('19', 'Država', '', ".$newLanguageId.", 'Prosimo, izberite državo!'),
('20', 'Cona', '', ".$newLanguageId.", 'Prosimo, izberite regijo/državo!'),
('21', 'Podjetje', '', ".$newLanguageId.", 'Ime podjetja mora biti krajše od 32 znakov!'),
('22', 'Naslovna vrstica 1', '', ".$newLanguageId.", 'Naslovna vrstica 1 mora biti med 3 in 128 znaki!'),
('23', 'Naslovna vrstica 2', '', ".$newLanguageId.", 'Druga vrstica naslova mora biti krajša od 128 znakov!'),
('24', 'Mesto', '', ".$newLanguageId.", 'Mesto mora biti med 3 in 128 znaki!'),
('25', 'Poštna številka/Poštna številka', '', ".$newLanguageId.", 'ZIP/poštna številka mora biti manj kot 11 znakov!'),
('26', 'Ime', '', ".$newLanguageId.", 'Ime mora biti med 1 in 32 znaki!'),
('27', 'Priimek', '', ".$newLanguageId.", 'Priimek mora imeti od 1 do 32 znakov!'),
('29', 'Privzeti naslov', '', ".$newLanguageId.", ''),
('30', 'ID za DDV', '', ".$newLanguageId.", 'Koda ID DDV mora biti med 8 in 14 znaki!'),
('31', 'Država', '', ".$newLanguageId.", 'Prosimo, izberite državo!'),
('32', 'Regija/Država', '', ".$newLanguageId.", 'Prosimo, izberite regijo/državo!'),
('33', 'Podjetje', '', ".$newLanguageId.", 'Ime podjetja mora biti krajše od 32 znakov!'),
('34', 'Vrstica naslova 1', '', ".$newLanguageId.", 'Vrstica naslova 1 mora biti dolga med 3 in 128 znaki!'),
('35', 'Naslovna vrstica 2', '', ".$newLanguageId.", 'Druga vrstica naslova mora biti krajša od 128 znakov!'),
('36', 'Mesto', '', ".$newLanguageId.", 'Mesto mora biti dolgo med 3 in 128 znaki!'),
('37', 'Poštna številka', '', ".$newLanguageId.", 'Poštna koda/poštna številka mora imeti manj kot 11 znakov!'),
('38', 'Ime', '', ".$newLanguageId.", 'Ime mora biti dolgo med 1 in 32 znaki!'),
('39', 'Priimek', '', ".$newLanguageId.", 'Priimek mora biti med 1 in 32 znaki!'),
('40', 'ID za DDV', '', ".$newLanguageId.", 'Koda DDV mora imeti med 8 in 14 znaki!'),
('41', 'E-pošta', '', ".$newLanguageId.", 'Vaš e-poštni naslov ni podan ali je neveljaven!'),
('42', 'Telefonska številka', '', ".$newLanguageId.", 'Vaša kontaktna telefonska številka ni podana ali je neveljavna.'),
('43', 'Uporabniško ime', '', ".$newLanguageId.", 'Uporabniško ime mora biti med 5 in 65 znaki!'),
('44', 'Ime', '', ".$newLanguageId.", 'Ime mora biti med 1 in 32 znaki!'),
('45', 'Priimek', '', ".$newLanguageId.", 'Priimek mora biti med 1 in 32 znaki!'),
('46', 'E-pošta', '', ".$newLanguageId.", 'Vaš e-poštni naslov ni naveden ali je neveljaven!'),
('47', 'Telefonska številka', '', ".$newLanguageId.", 'Vaša kontaktna telefonska številka ni podana ali je neveljavna.'),
('49', 'Ime', '', ".$newLanguageId.", 'Ime mora biti med 1 in 32 znaki!'),
('50', 'Priimek', '', ".$newLanguageId.", 'Priimek mora biti med 1 in 32 znaki!'),
('51', 'E-pošta', '', ".$newLanguageId.", 'Vaš e-poštni naslov ni podan ali je neveljaven!'),
('52', 'Telefonska številka', '', ".$newLanguageId.", 'Vaša kontaktna telefonska številka ni navedena ali ni veljavna.'),
('53', 'Država', '', ".$newLanguageId.", 'Prosimo, izberite državo!'),
('54', 'Regija/Država', '', ".$newLanguageId.", 'Prosimo izberite regijo/državo!'),
('55', 'Naslovna vrstica 1', '', ".$newLanguageId.", 'Vrstica naslova 1 mora biti med 3 in 128 znaki!'),
('56', 'Naslovna vrstica 2', '', ".$newLanguageId.", 'Druga vrstica naslova mora biti krajša od 128 znakov!'),
('57', 'Mesto', '', ".$newLanguageId.", 'Mesto mora imeti od 3 do 128 znakov!'),
('58', 'ZIP/Poštna številka', '', ".$newLanguageId.", 'ZIP/poštna številka mora biti manj kot 11 znakov!'),
('59', 'Podjetje', '', ".$newLanguageId.", 'Ime podjetja mora biti manj kot 32 znakov!'),
('60', 'Uporabniško ime', '', ".$newLanguageId.", 'Uporabniško ime sme vsebovati le alfanumerične znake in mora biti dolgo od 5 do 64 znakov!'),
('61', 'Naroči se', '', ".$newLanguageId.", ''),
('62', 'Davčna številka za DDV', '', ".$newLanguageId.", 'Koda DDV-ja mora biti dolga med 8 in 14 znaki!')");


