<?php

$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'Predbilježba')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Centimetar', 'cm'),
('2', ".$newLanguageId.", 'Milimetar', 'mm'),
('3', ".$newLanguageId.", 'inča', 'u')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Kilogram', 'kg'),
('2', ".$newLanguageId.", 'Gram', 'g'),
('5', ".$newLanguageId.", 'Funta', 'lb'),
('6', ".$newLanguageId.", 'Unca', 'oz')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'Nepotpun'),
('1', ".$newLanguageId.", 'Na čekanju'),
('2', ".$newLanguageId.", 'Obrada'),
('3', ".$newLanguageId.", 'Otpremljeno'),
('7', ".$newLanguageId.", 'Otkazano'),
('5', ".$newLanguageId.", 'Završeno'),
('8', ".$newLanguageId.", 'odbijeno'),
('9', ".$newLanguageId.", 'Otkazano storniranje'),
('10', ".$newLanguageId.", 'neuspješno'),
('11', ".$newLanguageId.", 'Vraćeno'),
('12', ".$newLanguageId.", 'Obrnuto'),
('13', ".$newLanguageId.", 'Povrat'),
('14', ".$newLanguageId.", 'Otkazao kupac')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'Sve ostale stranice', '', '', '', '', ''),
('2', ".$newLanguageId.", 'Početna stranica', '', '', '', '', ''),
('3', ".$newLanguageId.", 'Stranica za prijavu', '', '', '', '', ''),
('4', ".$newLanguageId.", 'Kontaktirajte nas stranica', '', '', '', '', ''),
('5', ".$newLanguageId.", 'Zadana stranica proizvoda', '', '', '', '', ''),
('7', ".$newLanguageId.", 'Stranica održavanja', '', '', '', '', ''),
('8', ".$newLanguageId.", 'Korisnička nadzorna ploča', '', '', '', '', ''),
('9', ".$newLanguageId.", 'Podaci o računu', '', '', '', '', ''),
('10', ".$newLanguageId.", 'Promjena lozinke', '', '', '', '', ''),
('11', ".$newLanguageId.", 'Adrese', '', '', '', '', ''),
('12', ".$newLanguageId.", 'Lista želja', '', '', '', '', ''),
('13', ".$newLanguageId.", 'Povijest narudžbi', '', '', '', '', ''),
('14', ".$newLanguageId.", 'Povijest transakcija', '', '', '', '', ''),
('15', ".$newLanguageId.", 'Preuzimanja', '', '', '', '', ''),
('16', ".$newLanguageId.", 'Obavijesti', '', '', '', '', ''),
('17', ".$newLanguageId.", 'Stranica košarice', '', '', '', '', ''),
('18', ".$newLanguageId.", 'Stranica za brzu naplatu', '', '', '', '', ''),
('19', ".$newLanguageId.", 'Stranica za uspješnu brzu naplatu', '', '', '', '', ''),
('20', ".$newLanguageId.", 'Zadana stranica sa sadržajem', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'Opcija proizvoda'),
('2', ".$newLanguageId.", 'Preuzmi atribut')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'Obrazac za kontakt')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'Ime:', '', ".$newLanguageId.", 'Ime mora imati između 3 i 32 znaka!'),
('12', 'Email:', '', ".$newLanguageId.", 'Čini se da adresa e-pošte nije važeća!'),
('13', 'Upit:', '', ".$newLanguageId.", 'Upit mora imati između 10 i 3000 znakova!'),
('14', 'Unesite kôd u polje ispod:', '', ".$newLanguageId.", 'Ljudska provjera nije uspjela! Pokušajte ponovo.')");


