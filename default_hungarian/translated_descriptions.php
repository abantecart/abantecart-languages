<?php
//translated
$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'Előrendelés')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Centiméter', 'cm'),
('2', ".$newLanguageId.", 'milliméter', 'mm'),
('3', ".$newLanguageId.", 'Hüvelyk', 'ban')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Kilogramm', 'kg'),
('2', ".$newLanguageId.", 'gramm', 'g'),
('5', ".$newLanguageId.", 'Font', 'font'),
('6', ".$newLanguageId.", 'uncia', 'uncia')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'Befejezetlen'),
('1', ".$newLanguageId.", 'Függőben'),
('2', ".$newLanguageId.", 'Feldolgozás'),
('3', ".$newLanguageId.", 'Szállítva'),
('5', ".$newLanguageId.", 'Teljesítve'),
('7', ".$newLanguageId.", 'Törölve'),
('8', ".$newLanguageId.", 'Megtagadva'),
('9', ".$newLanguageId.", 'Visszafordítás törölve'),
('10', ".$newLanguageId.", 'Sikertelen'),
('11', ".$newLanguageId.", 'Visszatérítve'),
('12', ".$newLanguageId.", 'Megfordítva'),
('13', ".$newLanguageId.", 'Visszatérítés'),
('14', ".$newLanguageId.", 'Vásárló által törölve')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'Minden egyéb oldal', '', '', '', '', ''),
('2', ".$newLanguageId.", 'Főoldal', '', '', '', '', ''),
('3', ".$newLanguageId.", 'Bejelentkezési oldal', '', '', '', '', ''),
('4', ".$newLanguageId.", 'Kapcsolatfelvételi oldal', '', '', '', '', ''),
('5', ".$newLanguageId.", 'Alapértelmezett termékoldal', '', '', '', '', ''),
('7', ".$newLanguageId.", 'Karbantartási oldal', '', '', '', '', ''),
('8', ".$newLanguageId.", 'Vásárlói irányítópult', '', '', '', '', ''),
('9', ".$newLanguageId.", 'Fiók adatai', '', '', '', '', ''),
('10', ".$newLanguageId.", 'Jelszó módosítása', '', '', '', '', ''),
('11', ".$newLanguageId.", 'Címek', '', '', '', '', ''),
('12', ".$newLanguageId.", 'Kívánságlista', '', '', '', '', ''),
('13', ".$newLanguageId.", 'Rendeléstörténet', '', '', '', '', ''),
('14', ".$newLanguageId.", 'Tranzakciók előzményei', '', '', '', '', ''),
('15', ".$newLanguageId.", 'Letöltések', '', '', '', '', ''),
('16', ".$newLanguageId.", 'Értesítések', '', '', '', '', ''),
('17', ".$newLanguageId.", 'Kosár oldal', '', '', '', '', ''),
('18', ".$newLanguageId.", 'Gyors Pénztár Oldal', '', '', '', '', ''),
('19', ".$newLanguageId.", 'Gyors pénztár Sikeroldal', '', '', '', '', ''),
('20', ".$newLanguageId.", 'Alapértelmezett tartalmi oldal', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'Termék opció'),
('2', ".$newLanguageId.", 'Letölthető attribútum')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'Kapcsolatfelvételi űrlap'),
('3', ".$newLanguageId.", 'aasasas')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'Keresztnév:', '', ".$newLanguageId.", 'A névnek 3 és 32 karakter hosszúnak kell lennie!'),
('12', 'E-mail:', '', ".$newLanguageId.", 'Az e-mail cím nem tűnik érvényesnek!'),
('13', 'Érdeklődés:', '', ".$newLanguageId.", 'Az érdeklődésnek 10 és 3000 karakter között kell lennie!'),
('14', 'Írja be a kódot az alábbi mezőbe:', '', ".$newLanguageId.", 'Az emberi ellenőrzés sikertelen! Kérjük, próbálja újra.'),
('15', 'sss', 'q', ".$newLanguageId.", '')");


