<?php
//translated
$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'Forudbestilling')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Centimeter', 'cm'),
('2', ".$newLanguageId.", 'Millimeter', 'mm'),
('3', ".$newLanguageId.", 'Tommer', 'i')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'kilogram', 'kg'),
('2', ".$newLanguageId.", 'Gram', 'g'),
('5', ".$newLanguageId.", 'Pund', 'pund'),
('6', ".$newLanguageId.", 'Unse', 'uns')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'Ufuldstændig'),
('1', ".$newLanguageId.", 'Afventer'),
('2', ".$newLanguageId.", 'Under behandling'),
('3', ".$newLanguageId.", 'Afsendt'),
('5', ".$newLanguageId.", 'Fuldført'),
('7', ".$newLanguageId.", 'Annulleret'),
('8', ".$newLanguageId.", 'Afvist'),
('9', ".$newLanguageId.", 'Annulleret tilbageførsel'),
('10', ".$newLanguageId.", 'Fejlet'),
('11', ".$newLanguageId.", 'Refunderet'),
('12', ".$newLanguageId.", 'Omvendt'),
('13', ".$newLanguageId.", 'Tilbageførsel'),
('14', ".$newLanguageId.", 'Annulleret af kunden')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'Alle Andre Sider', '', '', '', '', ''),
('2', ".$newLanguageId.", 'Forside', '', '', '', '', ''),
('3', ".$newLanguageId.", 'Login-side', '', '', '', '', ''),
('4', ".$newLanguageId.", 'Kontakt os side', '', '', '', '', ''),
('5', ".$newLanguageId.", 'Standard produktside', '', '', '', '', ''),
('7', ".$newLanguageId.", 'Vedligeholdelsesside', '', '', '', '', ''),
('8', ".$newLanguageId.", 'Kundepanel', '', '', '', '', ''),
('9', ".$newLanguageId.", 'Kontooplysninger', '', '', '', '', ''),
('10', ".$newLanguageId.", 'Skift adgangskode', '', '', '', '', ''),
('11', ".$newLanguageId.", 'Adresser', '', '', '', '', ''),
('12', ".$newLanguageId.", 'Ønskeliste', '', '', '', '', ''),
('13', ".$newLanguageId.", 'Ordrehistorik', '', '', '', '', ''),
('14', ".$newLanguageId.", 'Transaktionshistorik', '', '', '', '', ''),
('15', ".$newLanguageId.", 'Downloads', '', '', '', '', ''),
('16', ".$newLanguageId.", 'Underretninger', '', '', '', '', ''),
('17', ".$newLanguageId.", 'Indkøbskurvside', '', '', '', '', ''),
('18', ".$newLanguageId.", 'Hurtig kasseside', '', '', '', '', ''),
('19', ".$newLanguageId.", 'Hurtig Betaling Succes Side', '', '', '', '', ''),
('20', ".$newLanguageId.", 'Standard indholdsside', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'Produktmulighed'),
('2', ".$newLanguageId.", 'Downloadattribut'),
('3', ".$newLanguageId.", 'Kundeattribut')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'Kontakt os formular'),
('4', ".$newLanguageId.", 'Kundeadresseformular'),
('5', ".$newLanguageId.", 'Gæsteadresse- og detaljerformular'),
('6', ".$newLanguageId.", 'Kunde Detaljer formorm'),
('7', ".$newLanguageId.", 'Kunderegistreringsformular')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'Fornavn:', '', ".$newLanguageId.", 'Navn skal være mellem 3 og 32 tegn!'),
('12', 'E-mail:', '', ".$newLanguageId.", 'E-mail-adressen ser ikke ud til at være gyldig!'),
('13', 'Forespørgsel:', '', ".$newLanguageId.", 'Forespørgsel skal være mellem 10 og 3000 tegn!'),
('14', 'Indtast koden i feltet nedenfor:', '', ".$newLanguageId.", 'Menneskelig verifikation mislykkedes! Prøv igen.'),
('16', 'lande', '', ".$newLanguageId.", ''),
('18', 'Momsregistreringsnummer', '', ".$newLanguageId.", ''),
('19', 'Land', '', ".$newLanguageId.", 'Vælg venligst et land!'),
('20', 'Zone', '', ".$newLanguageId.", 'Vælg venligst en region/stat!'),
('21', 'Firma', '', ".$newLanguageId.", 'Firmanavn skal være mindre end 32 tegn!'),
('22', 'Adresse Linje 1', '', ".$newLanguageId.", 'Adresselinje 1 skal være mellem 3 og 128 tegn!'),
('23', 'Adresse Linje 2', '', ".$newLanguageId.", 'Adresselinje 2 skal være mindre end 128 tegn!'),
('24', 'By', '', ".$newLanguageId.", 'By skal være mellem 3 og 128 tegn!'),
('25', 'ZIP/Postnummer', '', ".$newLanguageId.", 'Postnummer/Postnummer skal være mindre end 11 tegn!'),
('26', 'Fornavn', '', ".$newLanguageId.", 'Fornavn skal være mellem 1 og 32 tegn!'),
('27', 'Efternavn', '', ".$newLanguageId.", 'Efternavn skal være mellem 1 og 32 tegn!'),
('29', 'Standardadresse', '', ".$newLanguageId.", ''),
('30', 'Momsregistreringsnummer', '', ".$newLanguageId.", 'Moms-ID-kode skal være mellem 8 og 14 tegn!'),
('31', 'Land', '', ".$newLanguageId.", 'Vælg venligst et land!'),
('32', 'Region/Stat', '', ".$newLanguageId.", 'Vælg venligst en region/stat!'),
('33', 'Virksomhed', '', ".$newLanguageId.", 'Firmanavn skal være mindre end 32 tegn!'),
('34', 'Adresse linje 1', '', ".$newLanguageId.", 'Adresselinje 1 skal være mellem 3 og 128 tegn!'),
('35', 'Adresselinje 2', '', ".$newLanguageId.", 'Adresselinje 2 skal være mindre end 128 tegn!'),
('36', 'By', '', ".$newLanguageId.", 'Byen skal være mellem 3 og 128 tegn!'),
('37', 'Postnummer/Postnummer', '', ".$newLanguageId.", 'Postnummer/Postkode skal være mindre end 11 tegn!'),
('38', 'Fornavn', '', ".$newLanguageId.", 'Fornavn skal være mellem 1 og 32 tegn!'),
('39', 'Efternavn', '', ".$newLanguageId.", 'Efternavn skal være mellem 1 og 32 tegn!'),
('40', 'Momsregistreringsnummer', '', ".$newLanguageId.", 'Moms-ID-koden skal være mellem 8 og 14 tegn!'),
('41', 'E-mail', '', ".$newLanguageId.", 'Din e-mailadresse er ikke angivet eller ugyldig!'),
('42', 'Telefonnummer', '', ".$newLanguageId.", 'Dit kontakttelefonnummer er ikke angivet eller ugyldigt.'),
('43', 'Brugernavn', '', ".$newLanguageId.", 'Loginnavn skal være mellem 5 og 65 tegn!'),
('44', 'Fornavn', '', ".$newLanguageId.", 'Fornavn skal være mellem 1 og 32 tegn!'),
('45', 'Efternavn', '', ".$newLanguageId.", 'Efternavn skal være mellem 1 og 32 tegn!'),
('46', 'E-mail', '', ".$newLanguageId.", 'Din e-mail er ikke angivet eller ugyldig!'),
('47', 'Telefonnummer', '', ".$newLanguageId.", 'Dit kontakttelefonnummer er ikke angivet eller ugyldigt.'),
('49', 'Fornavn', '', ".$newLanguageId.", 'Fornavn skal være mellem 1 og 32 tegn!'),
('50', 'Efternavn', '', ".$newLanguageId.", 'Efternavn skal være mellem 1 og 32 tegn!'),
('51', 'E-mail', '', ".$newLanguageId.", 'Din e-mail er ikke angivet eller ugyldig!'),
('52', 'Telefonnummer', '', ".$newLanguageId.", 'Dit kontakttelefonnummer er ikke angivet eller ugyldigt.'),
('53', 'Land', '', ".$newLanguageId.", 'Vælg venligst et land!'),
('54', 'Region/Stat', '', ".$newLanguageId.", 'Vælg venligst en region/delstat!'),
('55', 'Adresse linje 1', '', ".$newLanguageId.", 'Adresselinje 1 skal være mellem 3 og 128 tegn!'),
('56', 'Adresselinje 2', '', ".$newLanguageId.", 'Adresselinje 2 skal være mindre end 128 tegn!'),
('57', 'By', '', ".$newLanguageId.", 'Byen skal være mellem 3 og 128 tegn!'),
('58', 'Postnummer/Postnummer', '', ".$newLanguageId.", 'Postnummer/Postnummer skal være mindre end 11 tegn!'),
('59', 'Virksomhed', '', ".$newLanguageId.", 'Firmanavn skal være mindre end 32 tegn!'),
('60', 'Brugernavn', '', ".$newLanguageId.", 'Loginnavn skal være mellem 5 og 65 tegn!'),
('61', 'Abonner', '', ".$newLanguageId.", '')");


