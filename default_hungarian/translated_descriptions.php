<?php

$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'Előrendelés')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Centiméter', 'cm'),
('2', ".$newLanguageId.", 'Milliméter', 'mm'),
('3', ".$newLanguageId.", 'Hüvelyk', 'be')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Kilogramm', 'kg'),
('2', ".$newLanguageId.", 'Gramm', 'g'),
('5', ".$newLanguageId.", 'Font', 'lb'),
('6', ".$newLanguageId.", 'Uncia', 'oz')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'Befejezetlen'),
('1', ".$newLanguageId.", 'Függőben levő'),
('2', ".$newLanguageId.", 'Feldolgozás'),
('3', ".$newLanguageId.", 'Szállítva'),
('7', ".$newLanguageId.", 'Törölve'),
('5', ".$newLanguageId.", 'Befejezve'),
('8', ".$newLanguageId.", 'Megtagadva'),
('9', ".$newLanguageId.", 'Visszavonás törölve'),
('10', ".$newLanguageId.", 'Sikertelen'),
('11', ".$newLanguageId.", 'Visszatérítve'),
('12', ".$newLanguageId.", 'Fordítva'),
('13', ".$newLanguageId.", 'Visszaterhelés'),
('14', ".$newLanguageId.", 'Az Ügyfél lemondta')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'Minden egyéb oldal', '', '', '', '', ''),
('2', ".$newLanguageId.", 'Kezdőlap', '', '', '', '', ''),
('3', ".$newLanguageId.", 'Bejelentkezési oldal', '', '', '', '', ''),
('4', ".$newLanguageId.", 'Kapcsolatfelvétel oldal', '', '', '', '', ''),
('5', ".$newLanguageId.", 'Alapértelmezett termékoldal', '', '', '', '', ''),
('7', ".$newLanguageId.", 'Karbantartási oldal', '', '', '', '', ''),
('8', ".$newLanguageId.", 'Ügyfél-irányítópult', '', '', '', '', ''),
('9', ".$newLanguageId.", 'Számla részletei', '', '', '', '', ''),
('10', ".$newLanguageId.", 'Jelszó módosítása', '', '', '', '', ''),
('11', ".$newLanguageId.", 'Címek', '', '', '', '', ''),
('12', ".$newLanguageId.", 'Kívánságlista', '', '', '', '', ''),
('13', ".$newLanguageId.", 'Rendeléstörténet', '', '', '', '', ''),
('14', ".$newLanguageId.", 'Tranzakciós előzmények', '', '', '', '', ''),
('15', ".$newLanguageId.", 'Letöltések', '', '', '', '', ''),
('16', ".$newLanguageId.", 'Értesítések', '', '', '', '', ''),
('17', ".$newLanguageId.", 'Kosár oldal', '', '', '', '', ''),
('18', ".$newLanguageId.", 'Gyors fizetési oldal', '', '', '', '', ''),
('19', ".$newLanguageId.", 'Gyors fizetési siker oldal', '', '', '', '', ''),
('20', ".$newLanguageId.", 'Alapértelmezett tartalomoldal', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'Termék opció'),
('2', ".$newLanguageId.", 'Attribútum letöltése')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'Kapcsolatfelvételi űrlap')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'Keresztnév:', '', ".$newLanguageId.", 'A névnek 3 és 32 karakter között kell lennie!'),
('12', 'Email:', '', ".$newLanguageId.", 'Úgy tűnik, hogy az e-mail cím nem érvényes!'),
('13', 'Vizsgálat:', '', ".$newLanguageId.", 'A lekérdezésnek 10 és 3000 karakter között kell lennie!'),
('14', 'Írja be a kódot az alábbi mezőbe:', '', ".$newLanguageId.", 'Az emberi ellenőrzés nem sikerült! Kérjük, próbálja újra.')");


