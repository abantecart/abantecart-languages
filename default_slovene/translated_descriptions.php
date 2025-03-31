<?php

$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'Prednaročilo')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Centimeter', 'cm'),
('2', ".$newLanguageId.", 'Milimeter', 'mm'),
('3', ".$newLanguageId.", 'Palec', 'v')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Kilogram', 'kg'),
('2', ".$newLanguageId.", 'gram', 'g'),
('5', ".$newLanguageId.", 'Funt', 'lb'),
('6', ".$newLanguageId.", 'Unča', 'oz')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'Nepopolna'),
('1', ".$newLanguageId.", 'V teku'),
('2', ".$newLanguageId.", 'Obdelava'),
('3', ".$newLanguageId.", 'Poslano'),
('7', ".$newLanguageId.", 'Preklicano'),
('5', ".$newLanguageId.", 'Dokončano'),
('8', ".$newLanguageId.", 'Zavrnjeno'),
('9', ".$newLanguageId.", 'Preklican razveljavitev'),
('10', ".$newLanguageId.", 'Ni uspelo'),
('11', ".$newLanguageId.", 'Povrnjeno'),
('12', ".$newLanguageId.", 'Obrnjeno'),
('13', ".$newLanguageId.", 'Povratna bremenitev'),
('14', ".$newLanguageId.", 'Preklicala stranka')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'Vse druge strani', '', '', '', '', ''),
('2', ".$newLanguageId.", 'Domača stran', '', '', '', '', ''),
('3', ".$newLanguageId.", 'Stran za prijavo', '', '', '', '', ''),
('4', ".$newLanguageId.", 'Stran za stik z nami', '', '', '', '', ''),
('5', ".$newLanguageId.", 'Privzeta stran izdelka', '', '', '', '', ''),
('7', ".$newLanguageId.", 'Stran za vzdrževanje', '', '', '', '', ''),
('8', ".$newLanguageId.", 'Nadzorna plošča stranke', '', '', '', '', ''),
('9', ".$newLanguageId.", 'Podrobnosti računa', '', '', '', '', ''),
('10', ".$newLanguageId.", 'Spremeni geslo', '', '', '', '', ''),
('11', ".$newLanguageId.", 'Naslovi', '', '', '', '', ''),
('12', ".$newLanguageId.", 'Seznam želja', '', '', '', '', ''),
('13', ".$newLanguageId.", 'Zgodovina naročil', '', '', '', '', ''),
('14', ".$newLanguageId.", 'Zgodovina transakcij', '', '', '', '', ''),
('15', ".$newLanguageId.", 'Prenosi', '', '', '', '', ''),
('16', ".$newLanguageId.", 'Obvestila', '', '', '', '', ''),
('17', ".$newLanguageId.", 'Stran vozička', '', '', '', '', ''),
('18', ".$newLanguageId.", 'Stran za hitro odjavo', '', '', '', '', ''),
('19', ".$newLanguageId.", 'Stran s hitrim zaključkom nakupa', '', '', '', '', ''),
('20', ".$newLanguageId.", 'Privzeta stran z vsebino', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'Možnost izdelka'),
('2', ".$newLanguageId.", 'Prenos atributa')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'Kontaktni obrazec')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'Ime:', '', ".$newLanguageId.", 'Ime mora vsebovati med 3 in 32 znaki!'),
('12', 'E-pošta:', '', ".$newLanguageId.", 'Zdi se, da e-poštni naslov ni veljaven!'),
('13', 'Povpraševanje:', '', ".$newLanguageId.", 'Povpraševanje mora biti dolgo od 10 do 3000 znakov!'),
('14', 'Vnesite kodo v spodnje polje:', '', ".$newLanguageId.", 'Človeško preverjanje ni uspelo! Prosim poskusite znova.')");


