<?php

$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'Forhåndsbestilling')");


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
('0', ".$newLanguageId.", 'Ufullstendig'),
('1', ".$newLanguageId.", 'I påvente av'),
('2', ".$newLanguageId.", 'Behandling'),
('3', ".$newLanguageId.", 'Sendes'),
('7', ".$newLanguageId.", 'Kansellert'),
('5', ".$newLanguageId.", 'Fullført'),
('8', ".$newLanguageId.", 'Nektet'),
('9', ".$newLanguageId.", 'Kansellert reversering'),
('10', ".$newLanguageId.", 'Mislyktes'),
('11', ".$newLanguageId.", 'Refundert'),
('12', ".$newLanguageId.", 'Omvendt'),
('13', ".$newLanguageId.", 'Tilbakeføring'),
('14', ".$newLanguageId.", 'Kansellert av kunden')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'Alle andre sider', '', '', '', '', ''),
('2', ".$newLanguageId.", 'Hjemmeside', '', '', '', '', ''),
('3', ".$newLanguageId.", 'Påloggingsside', '', '', '', '', ''),
('4', ".$newLanguageId.", 'Kontakt oss side', '', '', '', '', ''),
('5', ".$newLanguageId.", 'Standard produktside', '', '', '', '', ''),
('7', ".$newLanguageId.", 'Vedlikeholdsside', '', '', '', '', ''),
('8', ".$newLanguageId.", 'Kunde Dashboard', '', '', '', '', ''),
('9', ".$newLanguageId.", 'Kontodetaljer', '', '', '', '', ''),
('10', ".$newLanguageId.", 'Endre passord', '', '', '', '', ''),
('11', ".$newLanguageId.", 'Adresser', '', '', '', '', ''),
('12', ".$newLanguageId.", 'Ønskeliste', '', '', '', '', ''),
('13', ".$newLanguageId.", 'Bestillingshistorikk', '', '', '', '', ''),
('14', ".$newLanguageId.", 'Transaksjonshistorikk', '', '', '', '', ''),
('15', ".$newLanguageId.", 'Nedlastinger', '', '', '', '', ''),
('16', ".$newLanguageId.", 'Varsler', '', '', '', '', ''),
('17', ".$newLanguageId.", 'Handlevognside', '', '', '', '', ''),
('18', ".$newLanguageId.", 'Rask utsjekkingsside', '', '', '', '', ''),
('19', ".$newLanguageId.", 'Hurtig utsjekkingsside', '', '', '', '', ''),
('20', ".$newLanguageId.", 'Standard innholdsside', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'Produktalternativ'),
('2', ".$newLanguageId.", 'Last ned attributt')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'Kontakt oss-skjema')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'Fornavn:', '', ".$newLanguageId.", 'Navnet må være mellom 3 og 32 tegn!'),
('12', 'E-post:', '', ".$newLanguageId.", 'E-postadressen ser ikke ut til å være gyldig!'),
('13', 'Forespørsel:', '', ".$newLanguageId.", 'Forespørselen må inneholde mellom 10 og 3000 tegn!'),
('14', 'Skriv inn koden i boksen nedenfor:', '', ".$newLanguageId.", 'Menneskelig verifisering har mislyktes! Vennligst prøv igjen.')");


