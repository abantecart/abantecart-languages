<?php

$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'Voorafbestelling')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Sentimeter', 'cm'),
('2', ".$newLanguageId.", 'Millimeter', 'mm'),
('3', ".$newLanguageId.", 'Duim', 'in')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Kilogram', 'kg'),
('2', ".$newLanguageId.", 'Gram', 'g'),
('5', ".$newLanguageId.", 'Pond', 'lb'),
('6', ".$newLanguageId.", 'Ons', 'ons')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'Onvolledig'),
('1', ".$newLanguageId.", 'Hangende'),
('2', ".$newLanguageId.", 'Verwerking'),
('3', ".$newLanguageId.", 'Gestuur'),
('7', ".$newLanguageId.", 'Gekanselleer'),
('5', ".$newLanguageId.", 'Voltooi'),
('8', ".$newLanguageId.", 'Geweier'),
('9', ".$newLanguageId.", 'Gekanselleerde Terugskrywing'),
('10', ".$newLanguageId.", 'Misluk'),
('11', ".$newLanguageId.", 'Terugbetaal'),
('12', ".$newLanguageId.", 'Omgekeerd'),
('13', ".$newLanguageId.", 'Terugskrywing'),
('14', ".$newLanguageId.", 'Gekanselleer deur kliënt')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'Alle ander bladsye', '', '', '', '', ''),
('2', ".$newLanguageId.", 'Tuisblad', '', '', '', '', ''),
('3', ".$newLanguageId.", 'Aanteken bladsy', '', '', '', '', ''),
('4', ".$newLanguageId.", 'Kontak Ons Bladsy', '', '', '', '', ''),
('5', ".$newLanguageId.", 'Verstek produkbladsy', '', '', '', '', ''),
('7', ".$newLanguageId.", 'Onderhoudsbladsy', '', '', '', '', ''),
('8', ".$newLanguageId.", 'Kliënt Dashboard', '', '', '', '', ''),
('9', ".$newLanguageId.", 'Rekeningbesonderhede', '', '', '', '', ''),
('10', ".$newLanguageId.", 'Verander wagwoord', '', '', '', '', ''),
('11', ".$newLanguageId.", 'Adresse', '', '', '', '', ''),
('12', ".$newLanguageId.", 'Wenslys', '', '', '', '', ''),
('13', ".$newLanguageId.", 'Bestelgeskiedenis', '', '', '', '', ''),
('14', ".$newLanguageId.", 'Transaksiegeskiedenis', '', '', '', '', ''),
('15', ".$newLanguageId.", 'Aflaaie', '', '', '', '', ''),
('16', ".$newLanguageId.", 'Kennisgewings', '', '', '', '', ''),
('17', ".$newLanguageId.", 'Cart Bladsy', '', '', '', '', ''),
('18', ".$newLanguageId.", 'Vinnige afrekenbladsy', '', '', '', '', ''),
('19', ".$newLanguageId.", 'Vinnige afhandeling-suksesbladsy', '', '', '', '', ''),
('20', ".$newLanguageId.", 'Verstek inhoud bladsy', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'Produk Opsie'),
('2', ".$newLanguageId.", 'Laai kenmerk af')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'Kontak Ons Vorm')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'Voornaam:', '', ".$newLanguageId.", 'Naam moet tussen 3 en 32 karakters wees!'),
('12', 'E-pos:', '', ".$newLanguageId.", 'E-posadres blyk nie geldig te wees nie!'),
('13', 'Navrae:', '', ".$newLanguageId.", 'Navraag moet tussen 10 en 3000 karakters wees!'),
('14', 'Voer die kode in die blokkie hieronder in:', '', ".$newLanguageId.", 'Menslike verifikasie het misluk! Probeer asseblief agan.')");


