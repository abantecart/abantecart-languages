<?php
//translated
$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'Vorbestellung')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Zentimeter', 'cm'),
('2', ".$newLanguageId.", 'Millimeter', 'mm'),
('3', ".$newLanguageId.", 'Zoll', 'In')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Kilogramm', 'kg'),
('2', ".$newLanguageId.", 'Gramm', 'G'),
('5', ".$newLanguageId.", 'Pfund', 'Pfund'),
('6', ".$newLanguageId.", 'Unze', 'Unzen')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'Unvollständig'),
('1', ".$newLanguageId.", 'Ausstehend'),
('2', ".$newLanguageId.", 'Verarbeitung'),
('3', ".$newLanguageId.", 'Versendet'),
('7', ".$newLanguageId.", 'Abgesagt'),
('5', ".$newLanguageId.", 'Vollendet'),
('8', ".$newLanguageId.", 'Bestritten'),
('9', ".$newLanguageId.", 'Stornierte Stornierung'),
('10', ".$newLanguageId.", 'Fehlgeschlagen'),
('11', ".$newLanguageId.", 'Rückerstattung'),
('12', ".$newLanguageId.", 'Umgedreht'),
('13', ".$newLanguageId.", 'Rückbuchung'),
('14', ".$newLanguageId.", 'Vom Kunden storniert')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'Alle anderen Seiten', '', '', '', '', ''),
('2', ".$newLanguageId.", 'Startseite', '', '', '', '', ''),
('3', ".$newLanguageId.", 'Anmeldeseite', '', '', '', '', ''),
('4', ".$newLanguageId.", 'Kontaktseite', '', '', '', '', ''),
('5', ".$newLanguageId.", 'Standard-Produktseite', '', '', '', '', ''),
('7', ".$newLanguageId.", 'Wartungsseite', '', '', '', '', ''),
('8', ".$newLanguageId.", 'Kunden-Dashboard', '', '', '', '', ''),
('9', ".$newLanguageId.", 'Kontodetails', '', '', '', '', ''),
('10', ".$newLanguageId.", 'Kennwort ändern', '', '', '', '', ''),
('11', ".$newLanguageId.", 'Adressen', '', '', '', '', ''),
('12', ".$newLanguageId.", 'Wunschliste', '', '', '', '', ''),
('13', ".$newLanguageId.", 'Bestellverlauf', '', '', '', '', ''),
('14', ".$newLanguageId.", 'Transaktionsverlauf', '', '', '', '', ''),
('15', ".$newLanguageId.", 'Downloads', '', '', '', '', ''),
('16', ".$newLanguageId.", 'Benachrichtigungen', '', '', '', '', ''),
('17', ".$newLanguageId.", 'Warenkorbseite', '', '', '', '', ''),
('18', ".$newLanguageId.", 'Schnelle Checkout-Seite', '', '', '', '', ''),
('19', ".$newLanguageId.", 'Schnelle Checkout-Erfolgsseite', '', '', '', '', ''),
('20', ".$newLanguageId.", 'Standard-Inhaltsseite', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'Produktoption'),
('2', ".$newLanguageId.", 'Download-Attribut')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'Kontaktformular')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'Vorname:', '', ".$newLanguageId.", 'Der Name muss zwischen 3 und 32 Zeichen lang sein!'),
('12', 'E-Mail:', '', ".$newLanguageId.", 'Die E-Mail-Adresse scheint ungültig zu sein!'),
('13', 'Anfrage:', '', ".$newLanguageId.", 'Die Anfrage muss zwischen 10 und 3000 Zeichen lang sein!'),
('14', 'Geben Sie den Code in das Feld unten ein:', '', ".$newLanguageId.", 'Die menschliche Verifizierung ist fehlgeschlagen! Bitte versuchen Sie es erneut.')");


