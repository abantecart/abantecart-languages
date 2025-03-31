<?php

$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'Předobjednávka')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Centimetr', 'cm'),
('2', ".$newLanguageId.", 'Milimetr', 'mm'),
('3', ".$newLanguageId.", 'Palec', 'v')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Kilogram', 'kg'),
('2', ".$newLanguageId.", 'Gram', 'G'),
('5', ".$newLanguageId.", 'Libra', 'lb'),
('6', ".$newLanguageId.", 'Unce', 'oz')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'Neúplný'),
('1', ".$newLanguageId.", 'Čeká na vyřízení'),
('2', ".$newLanguageId.", 'Zpracování'),
('3', ".$newLanguageId.", 'Odesláno'),
('7', ".$newLanguageId.", 'Zrušeno'),
('5', ".$newLanguageId.", 'Dokončeno'),
('8', ".$newLanguageId.", 'Zamítnuto'),
('9', ".$newLanguageId.", 'Zrušený obrat'),
('10', ".$newLanguageId.", 'Nepodařilo se'),
('11', ".$newLanguageId.", 'Vráceno'),
('12', ".$newLanguageId.", 'Obrácené'),
('13', ".$newLanguageId.", 'Zpětné zúčtování'),
('14', ".$newLanguageId.", 'Zrušeno zákazníkem')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'Všechny ostatní stránky', '', '', '', '', ''),
('2', ".$newLanguageId.", 'Domovská stránka', '', '', '', '', ''),
('3', ".$newLanguageId.", 'Přihlašovací stránka', '', '', '', '', ''),
('4', ".$newLanguageId.", 'Kontaktujte nás', '', '', '', '', ''),
('5', ".$newLanguageId.", 'Výchozí stránka produktu', '', '', '', '', ''),
('7', ".$newLanguageId.", 'Stránka údržby', '', '', '', '', ''),
('8', ".$newLanguageId.", 'Zákaznický panel', '', '', '', '', ''),
('9', ".$newLanguageId.", 'Podrobnosti o účtu', '', '', '', '', ''),
('10', ".$newLanguageId.", 'Změnit heslo', '', '', '', '', ''),
('11', ".$newLanguageId.", 'Adresy', '', '', '', '', ''),
('12', ".$newLanguageId.", 'Seznam přání', '', '', '', '', ''),
('13', ".$newLanguageId.", 'Historie objednávek', '', '', '', '', ''),
('14', ".$newLanguageId.", 'Historie transakcí', '', '', '', '', ''),
('15', ".$newLanguageId.", 'Stahování', '', '', '', '', ''),
('16', ".$newLanguageId.", 'Oznámení', '', '', '', '', ''),
('17', ".$newLanguageId.", 'Stránka košíku', '', '', '', '', ''),
('18', ".$newLanguageId.", 'Stránka rychlé pokladny', '', '', '', '', ''),
('19', ".$newLanguageId.", 'Stránka úspěchu rychlé pokladny', '', '', '', '', ''),
('20', ".$newLanguageId.", 'Výchozí stránka obsahu', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'Možnost produktu'),
('2', ".$newLanguageId.", 'Stáhnout atribut')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'Kontaktujte nás prostřednictvím formuláře')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'Křestní jméno:', '', ".$newLanguageId.", 'Název musí mít 3 až 32 znaků!'),
('12', 'E-mail:', '', ".$newLanguageId.", 'E-mailová adresa se nezdá být platná!'),
('13', 'Dotaz:', '', ".$newLanguageId.", 'Dotaz musí mít 10 až 3000 znaků!'),
('14', 'Zadejte kód do pole níže:', '', ".$newLanguageId.", 'Lidské ověření se nezdařilo! Zkuste to prosím znovu.')");


