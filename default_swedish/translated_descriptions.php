<?php

$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'Förbeställ')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Centimeter', 'cm'),
('2', ".$newLanguageId.", 'Millimeter', 'mm'),
('3', ".$newLanguageId.", 'Tum', 'i')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Kilogram', 'kg'),
('2', ".$newLanguageId.", 'Gram', 'g'),
('5', ".$newLanguageId.", 'Pund', 'lb'),
('6', ".$newLanguageId.", 'Uns', 'uns')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'Ofullständig'),
('1', ".$newLanguageId.", 'I avvaktan på'),
('2', ".$newLanguageId.", 'Bearbetning'),
('3', ".$newLanguageId.", 'Skickas'),
('7', ".$newLanguageId.", 'Avbruten'),
('5', ".$newLanguageId.", 'Avslutad'),
('8', ".$newLanguageId.", 'Nekad'),
('9', ".$newLanguageId.", 'Avbruten återföring'),
('10', ".$newLanguageId.", 'Misslyckades'),
('11', ".$newLanguageId.", 'Återbetalas'),
('12', ".$newLanguageId.", 'Omvänt'),
('13', ".$newLanguageId.", 'Återbetalning'),
('14', ".$newLanguageId.", 'Avbeställt av kunden')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'Alla andra sidor', '', '', '', '', ''),
('2', ".$newLanguageId.", 'Hemsida', '', '', '', '', ''),
('3', ".$newLanguageId.", 'Inloggningssida', '', '', '', '', ''),
('4', ".$newLanguageId.", 'Kontakta oss sida', '', '', '', '', ''),
('5', ".$newLanguageId.", 'Standardproduktsida', '', '', '', '', ''),
('7', ".$newLanguageId.", 'Underhållssida', '', '', '', '', ''),
('8', ".$newLanguageId.", 'Kundinstrumentpanel', '', '', '', '', ''),
('9', ".$newLanguageId.", 'Kontouppgifter', '', '', '', '', ''),
('10', ".$newLanguageId.", 'Ändra lösenord', '', '', '', '', ''),
('11', ".$newLanguageId.", 'Adresser', '', '', '', '', ''),
('12', ".$newLanguageId.", 'önskelista', '', '', '', '', ''),
('13', ".$newLanguageId.", 'Beställningshistorik', '', '', '', '', ''),
('14', ".$newLanguageId.", 'Transaktionshistorik', '', '', '', '', ''),
('15', ".$newLanguageId.", 'Nedladdningar', '', '', '', '', ''),
('16', ".$newLanguageId.", 'Aviseringar', '', '', '', '', ''),
('17', ".$newLanguageId.", 'Varukorgssida', '', '', '', '', ''),
('18', ".$newLanguageId.", 'Snabb utcheckningssida', '', '', '', '', ''),
('19', ".$newLanguageId.", 'Framgångssida för snabb utcheckning', '', '', '', '', ''),
('20', ".$newLanguageId.", 'Standardinnehållssida', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'Produktalternativ'),
('2', ".$newLanguageId.", 'Ladda ner attribut')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'Kontakta oss Form')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'Förnamn:', '', ".$newLanguageId.", 'Namnet måste vara mellan 3 och 32 tecken!'),
('12', 'E-post:', '', ".$newLanguageId.", 'E-postadressen verkar inte vara giltig!'),
('13', 'Förfrågan:', '', ".$newLanguageId.", 'Förfrågan måste vara mellan 10 och 3000 tecken!'),
('14', 'Ange koden i rutan nedan:', '', ".$newLanguageId.", 'Mänsklig verifiering har misslyckats! Vänligen försök igen.')");


