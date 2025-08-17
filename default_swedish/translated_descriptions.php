<?php
//translated
$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'Förhandsbeställning')");


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
('6', ".$newLanguageId.", 'uns', 'uns')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'Ofullständig'),
('1', ".$newLanguageId.", 'Väntande'),
('2', ".$newLanguageId.", 'Bearbetning'),
('3', ".$newLanguageId.", 'Skickad'),
('5', ".$newLanguageId.", 'Slutförd'),
('7', ".$newLanguageId.", 'Avbruten'),
('8', ".$newLanguageId.", 'Nekad'),
('9', ".$newLanguageId.", 'Annullerad återföring'),
('10', ".$newLanguageId.", 'Misslyckades'),
('11', ".$newLanguageId.", 'Återbetald'),
('12', ".$newLanguageId.", 'Omvänd'),
('13', ".$newLanguageId.", 'Återkrav'),
('14', ".$newLanguageId.", 'Avbokad av kunden')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'Alla andra sidor', '', '', '', '', ''),
('2', ".$newLanguageId.", 'Startsida', '', '', '', '', ''),
('3', ".$newLanguageId.", 'Inloggningssida', '', '', '', '', ''),
('4', ".$newLanguageId.", 'Kontakta oss-sida', '', '', '', '', ''),
('5', ".$newLanguageId.", 'Standardproduktsida', '', '', '', '', ''),
('7', ".$newLanguageId.", 'Underhållssida', '', '', '', '', ''),
('8', ".$newLanguageId.", 'Kundöversikt', '', '', '', '', ''),
('9', ".$newLanguageId.", 'Kontouppgifter', '', '', '', '', ''),
('10', ".$newLanguageId.", 'Ändra lösenord', '', '', '', '', ''),
('11', ".$newLanguageId.", 'Adresser', '', '', '', '', ''),
('12', ".$newLanguageId.", 'Önskelista', '', '', '', '', ''),
('13', ".$newLanguageId.", 'Orderhistorik', '', '', '', '', ''),
('14', ".$newLanguageId.", 'Transaktionshistorik', '', '', '', '', ''),
('15', ".$newLanguageId.", 'Nedladdningar', '', '', '', '', ''),
('16', ".$newLanguageId.", 'Aviseringar', '', '', '', '', ''),
('17', ".$newLanguageId.", 'Varukorgssida', '', '', '', '', ''),
('18', ".$newLanguageId.", 'Snabb kassasida', '', '', '', '', ''),
('19', ".$newLanguageId.", 'Bekräftelsesida för snabbkassa', '', '', '', '', ''),
('20', ".$newLanguageId.", 'Standardinnehållssida', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'Produktalternativ'),
('2', ".$newLanguageId.", 'Nedladdningsattribut'),
('3', ".$newLanguageId.", 'Kundattribut')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'Kontakta oss-formulär'),
('4', ".$newLanguageId.", 'Kundadressformulär'),
('5', ".$newLanguageId.", 'Formulär för gästadress och detaljer')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'Förnamn:', '', ".$newLanguageId.", 'Namnet måste vara mellan 3 och 32 tecken!'),
('12', 'E-post:', '', ".$newLanguageId.", 'E-postadress verkar inte vara giltig!'),
('13', 'Förfrågan:', '', ".$newLanguageId.", 'Förfrågan måste vara mellan 10 och 3000 tecken!'),
('14', 'Ange koden i rutan nedan:', '', ".$newLanguageId.", 'Mänsklig verifiering har misslyckats! Vänligen försök agan.'),
('15', 'ewqewewew', '', ".$newLanguageId.", ''),
('16', 'länder', '', ".$newLanguageId.", ''),
('17', 'ccccccccc', '', ".$newLanguageId.", ''),
('18', 'Momsregistreringsnummer', '', ".$newLanguageId.", ''),
('19', 'Land', '', ".$newLanguageId.", 'Vänligen välj ett land!'),
('20', 'Zon', '', ".$newLanguageId.", 'Vänligen välj en region/delstat!'),
('21', 'Företag', '', ".$newLanguageId.", 'Företagsnamn måste vara kortare än 32 tecken!'),
('22', 'Adressrad 1', '', ".$newLanguageId.", 'Adressrad 1 måste vara mellan 3 och 128 tecken!'),
('23', 'Adressrad 2', '', ".$newLanguageId.", 'Adressrad 2 måste vara färre än 128 tecken!'),
('24', 'Stad', '', ".$newLanguageId.", 'Staden måste vara mellan 3 och 128 tecken!'),
('25', 'Postnummer/Postnummer', '', ".$newLanguageId.", 'Postnummer/ZIP-kod måste vara färre än 11 tecken!'),
('26', 'Förnamn', '', ".$newLanguageId.", 'Förnamn måste vara mellan 1 och 32 tecken!'),
('27', 'Efternamn', '', ".$newLanguageId.", 'Efternamn måste vara mellan 1 och 32 tecken!'),
('28', 'Standardadress', '', ".$newLanguageId.", ''),
('29', 'Standardadress', 'Moms-ID', ".$newLanguageId.", ''),
('30', 'Momsregistreringsnummer', '', ".$newLanguageId.", 'Moms-ID-koden måste vara mellan 8 och 14 tecken!'),
('31', 'Land', '', ".$newLanguageId.", 'Vänligen välj ett land!'),
('32', 'Region/Stat', '', ".$newLanguageId.", 'Vänligen välj en region/stat!'),
('33', 'Företag', '', ".$newLanguageId.", 'Företagsnamn måste vara färre än 32 tecken!'),
('34', 'Adressrad 1', '', ".$newLanguageId.", 'Adressrad 1 måste vara mellan 3 och 128 tecken!'),
('35', 'Adressrad 2', '', ".$newLanguageId.", 'Adressrad 2 måste vara mindre än 128 tecken!'),
('36', 'Stad', '', ".$newLanguageId.", 'Staden måste vara mellan 3 och 128 tecken!'),
('37', 'Postnummer/Postkod', '', ".$newLanguageId.", 'Zip/Post Code måste vara mindre än 11 tecken!'),
('38', 'Förnamn', '', ".$newLanguageId.", 'Förnamn måste vara mellan 1 och 32 tecken!'),
('39', 'Efternamn', '', ".$newLanguageId.", 'Efternamn måste vara mellan 1 och 32 tecken!'),
('40', 'Momsregistreringsnummer', '', ".$newLanguageId.", 'VAT ID-kod måste vara mellan 8 och 14 tecken!'),
('41', 'E-post', '', ".$newLanguageId.", 'Din e-postadress är inte angiven eller ogiltig!'),
('42', 'Telefonnummer', '', ".$newLanguageId.", 'Ditt kontakttelefonnummer är inte angivet eller ogiltigt.')");


