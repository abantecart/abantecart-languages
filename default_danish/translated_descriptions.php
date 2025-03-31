<?php

$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'Forudbestil')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Centimeter', 'cm'),
('2', ".$newLanguageId.", 'Millimeter', 'mm'),
('3', ".$newLanguageId.", 'tomme', 'i')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Kilogram', 'kg'),
('2', ".$newLanguageId.", 'Gram', 'g'),
('5', ".$newLanguageId.", 'Pund', 'lb'),
('6', ".$newLanguageId.", 'Unse', 'oz')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'Ufuldstændig'),
('1', ".$newLanguageId.", 'Indtil'),
('2', ".$newLanguageId.", 'Forarbejdning'),
('3', ".$newLanguageId.", 'Sendes'),
('7', ".$newLanguageId.", 'Annulleret'),
('5', ".$newLanguageId.", 'Afsluttet'),
('8', ".$newLanguageId.", 'Afvist'),
('9', ".$newLanguageId.", 'Annulleret tilbageførsel'),
('10', ".$newLanguageId.", 'Mislykkedes'),
('11', ".$newLanguageId.", 'Refunderet'),
('12', ".$newLanguageId.", 'Omvendt'),
('13', ".$newLanguageId.", 'Tilbageførsel'),
('14', ".$newLanguageId.", 'Annulleret af Kunden')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'Alle andre sider', '', '', '', '', ''),
('2', ".$newLanguageId.", 'Hjemmeside', '', '', '', '', ''),
('3', ".$newLanguageId.", 'Login side', '', '', '', '', ''),
('4', ".$newLanguageId.", 'Kontakt os side', '', '', '', '', ''),
('5', ".$newLanguageId.", 'Standard produktside', '', '', '', '', ''),
('7', ".$newLanguageId.", 'Vedligeholdelsesside', '', '', '', '', ''),
('8', ".$newLanguageId.", 'Kunde Dashboard', '', '', '', '', ''),
('9', ".$newLanguageId.", 'Kontooplysninger', '', '', '', '', ''),
('10', ".$newLanguageId.", 'Skift adgangskode', '', '', '', '', ''),
('11', ".$newLanguageId.", 'adresser', '', '', '', '', ''),
('12', ".$newLanguageId.", 'Ønskeliste', '', '', '', '', ''),
('13', ".$newLanguageId.", 'Ordrehistorik', '', '', '', '', ''),
('14', ".$newLanguageId.", 'Transaktionshistorik', '', '', '', '', ''),
('15', ".$newLanguageId.", 'Downloads', '', '', '', '', ''),
('16', ".$newLanguageId.", 'Meddelelser', '', '', '', '', ''),
('17', ".$newLanguageId.", 'Indkøbsvognsside', '', '', '', '', ''),
('18', ".$newLanguageId.", 'Hurtig udtjekningsside', '', '', '', '', ''),
('19', ".$newLanguageId.", 'Hurtig udbetalingsside', '', '', '', '', ''),
('20', ".$newLanguageId.", 'Standard indholdsside', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'Produktmulighed'),
('2', ".$newLanguageId.", 'Download attribut')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'Kontakt os formular')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'Fornavn:', '', ".$newLanguageId.", 'Navnet skal være mellem 3 og 32 tegn!'),
('12', 'E-mail:', '', ".$newLanguageId.", 'E-mail-adressen ser ikke ud til at være gyldig!'),
('13', 'Forespørgsel:', '', ".$newLanguageId.", 'Forespørgsel skal være mellem 10 og 3000 tegn!'),
('14', 'Indtast koden i boksen nedenfor:', '', ".$newLanguageId.", 'Menneskelig verifikation er mislykket! Prøv venligst igen.')");


