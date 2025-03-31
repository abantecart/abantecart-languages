<?php

$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'Predobjednávka')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Centimetre', 'cm'),
('2', ".$newLanguageId.", 'Milimeter', 'mm'),
('3', ".$newLanguageId.", 'Inch', 'v')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Kilogram', 'kg'),
('2', ".$newLanguageId.", 'Gram', 'g'),
('5', ".$newLanguageId.", 'Pound', 'lb'),
('6', ".$newLanguageId.", 'unca', 'oz')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'Neúplné'),
('1', ".$newLanguageId.", 'Čaká na spracovanie'),
('2', ".$newLanguageId.", 'Spracovanie'),
('3', ".$newLanguageId.", 'Odoslané'),
('7', ".$newLanguageId.", 'Zrušené'),
('5', ".$newLanguageId.", 'Dokončené'),
('8', ".$newLanguageId.", 'Odmietnuté'),
('9', ".$newLanguageId.", 'Zrušený obrat'),
('10', ".$newLanguageId.", 'Nepodarilo sa'),
('11', ".$newLanguageId.", 'Vrátené'),
('12', ".$newLanguageId.", 'Obrátené'),
('13', ".$newLanguageId.", 'Vrátenie platby'),
('14', ".$newLanguageId.", 'Zrušené zákazníkom')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'Všetky ostatné stránky', '', '', '', '', ''),
('2', ".$newLanguageId.", 'Domovská stránka', '', '', '', '', ''),
('3', ".$newLanguageId.", 'Prihlasovacia stránka', '', '', '', '', ''),
('4', ".$newLanguageId.", 'Kontaktujte nás', '', '', '', '', ''),
('5', ".$newLanguageId.", 'Predvolená stránka produktu', '', '', '', '', ''),
('7', ".$newLanguageId.", 'Stránka údržby', '', '', '', '', ''),
('8', ".$newLanguageId.", 'Zákaznícky panel', '', '', '', '', ''),
('9', ".$newLanguageId.", 'Podrobnosti o účte', '', '', '', '', ''),
('10', ".$newLanguageId.", 'Zmeniť heslo', '', '', '', '', ''),
('11', ".$newLanguageId.", 'adresy', '', '', '', '', ''),
('12', ".$newLanguageId.", 'Zoznam želaní', '', '', '', '', ''),
('13', ".$newLanguageId.", 'História objednávok', '', '', '', '', ''),
('14', ".$newLanguageId.", 'História transakcií', '', '', '', '', ''),
('15', ".$newLanguageId.", 'sťahovanie', '', '', '', '', ''),
('16', ".$newLanguageId.", 'Upozornenia', '', '', '', '', ''),
('17', ".$newLanguageId.", 'Stránka košíka', '', '', '', '', ''),
('18', ".$newLanguageId.", 'Stránka rýchlej pokladne', '', '', '', '', ''),
('19', ".$newLanguageId.", 'Úspešná stránka rýchlej platby', '', '', '', '', ''),
('20', ".$newLanguageId.", 'Predvolená stránka s obsahom', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'Možnosť produktu'),
('2', ".$newLanguageId.", 'Stiahnuť atribút')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'Kontaktný formulár')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'Krstné meno:', '', ".$newLanguageId.", 'Názov musí mať 3 až 32 znakov!'),
('12', 'Email:', '', ".$newLanguageId.", 'Zdá sa, že e-mailová adresa nie je platná!'),
('13', 'Dopyt:', '', ".$newLanguageId.", 'Dopyt musí mať 10 až 3000 znakov!'),
('14', 'Zadajte kód do poľa nižšie:', '', ".$newLanguageId.", 'Ľudské overenie zlyhalo! Skúste to znova.')");


