<?php
//translated
$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'Ennakkotilaus')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Senttimetri', 'cm'),
('2', ".$newLanguageId.", 'Millimetri', 'mm'),
('3', ".$newLanguageId.", 'tuuma', 'sisään')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Kilogramma', 'kg'),
('2', ".$newLanguageId.", 'Gramma', 'g'),
('5', ".$newLanguageId.", 'Punta', 'lb'),
('6', ".$newLanguageId.", 'Unssi', 'oz')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'Epätäydellinen'),
('1', ".$newLanguageId.", 'Odottaa'),
('2', ".$newLanguageId.", 'Käsittely'),
('3', ".$newLanguageId.", 'Lähetetty'),
('7', ".$newLanguageId.", 'Peruutettu'),
('5', ".$newLanguageId.", 'Valmis'),
('8', ".$newLanguageId.", 'Kielletty'),
('9', ".$newLanguageId.", 'Peruutettu peruutus'),
('10', ".$newLanguageId.", 'Epäonnistui'),
('11', ".$newLanguageId.", 'Hyvitetty'),
('12', ".$newLanguageId.", 'Käänteinen'),
('13', ".$newLanguageId.", 'Takaisinveloitus'),
('14', ".$newLanguageId.", 'Asiakas peruutti')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'Kaikki muut sivut', '', '', '', '', ''),
('2', ".$newLanguageId.", 'Kotisivu', '', '', '', '', ''),
('3', ".$newLanguageId.", 'Kirjautumissivu', '', '', '', '', ''),
('4', ".$newLanguageId.", 'Ota yhteyttä -sivu', '', '', '', '', ''),
('5', ".$newLanguageId.", 'Oletustuotesivu', '', '', '', '', ''),
('7', ".$newLanguageId.", 'Huolto-sivu', '', '', '', '', ''),
('8', ".$newLanguageId.", 'Asiakashallintapaneeli', '', '', '', '', ''),
('9', ".$newLanguageId.", 'Tilin tiedot', '', '', '', '', ''),
('10', ".$newLanguageId.", 'Vaihda salasana', '', '', '', '', ''),
('11', ".$newLanguageId.", 'Osoitteet', '', '', '', '', ''),
('12', ".$newLanguageId.", 'Toivelista', '', '', '', '', ''),
('13', ".$newLanguageId.", 'Tilaushistoria', '', '', '', '', ''),
('14', ".$newLanguageId.", 'Tapahtumahistoria', '', '', '', '', ''),
('15', ".$newLanguageId.", 'Lataukset', '', '', '', '', ''),
('16', ".$newLanguageId.", 'Ilmoitukset', '', '', '', '', ''),
('17', ".$newLanguageId.", 'Ostoskori sivu', '', '', '', '', ''),
('18', ".$newLanguageId.", 'Nopea kassasivu', '', '', '', '', ''),
('19', ".$newLanguageId.", 'Nopea kassa onnistumisen sivu', '', '', '', '', ''),
('20', ".$newLanguageId.", 'Oletussisältösivu', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'Tuotevaihtoehto'),
('2', ".$newLanguageId.", 'Lataa attribuutti')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'Ota yhteyttä -lomake')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'Etunimi:', '', ".$newLanguageId.", 'Nimen tulee olla 3–32 merkkiä pitkä!'),
('12', 'Sähköposti:', '', ".$newLanguageId.", 'Sähköpostiosoite ei näytä olevan kelvollinen!'),
('13', 'Tiedustelu:', '', ".$newLanguageId.", 'Kyselyn tulee olla 10-3000 merkkiä pitkä!'),
('14', 'Syötä koodi alla olevaan kenttään:', '', ".$newLanguageId.", 'Ihmistodentaminen epäonnistui! Yritä uudelleen.')");


