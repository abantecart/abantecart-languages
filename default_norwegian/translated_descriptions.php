<?php
//translated
$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'Forhåndsbestilling')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'centimeter', 'cm'),
('2', ".$newLanguageId.", 'Millimeter', 'mm'),
('3', ".$newLanguageId.", 'Tomme', 'i')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'kilogram', 'kg'),
('2', ".$newLanguageId.", 'Gram', 'g'),
('5', ".$newLanguageId.", 'Pund', 'pund'),
('6', ".$newLanguageId.", 'Uns', 'oz')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'Ufullstendig'),
('1', ".$newLanguageId.", 'Avventer'),
('2', ".$newLanguageId.", 'Behandler'),
('3', ".$newLanguageId.", 'Sendt'),
('5', ".$newLanguageId.", 'Fullført'),
('7', ".$newLanguageId.", 'Kansellert'),
('8', ".$newLanguageId.", 'Nektet'),
('9', ".$newLanguageId.", 'Kansellert tilbakeføring'),
('10', ".$newLanguageId.", 'Feilet'),
('11', ".$newLanguageId.", 'Tilbakebetalt'),
('12', ".$newLanguageId.", 'Omvendt'),
('13', ".$newLanguageId.", 'Tilbakeføring'),
('14', ".$newLanguageId.", 'Avbestilt av kunden')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'Alle andre sider', '', '', '', '', ''),
('2', ".$newLanguageId.", 'Hjemmeside', '', '', '', '', ''),
('3', ".$newLanguageId.", 'Innloggingsside', '', '', '', '', ''),
('4', ".$newLanguageId.", 'Kontakt oss-side', '', '', '', '', ''),
('5', ".$newLanguageId.", 'Standard produktside', '', '', '', '', ''),
('7', ".$newLanguageId.", 'Vedlikeholdsside', '', '', '', '', ''),
('8', ".$newLanguageId.", 'Kundekontrollpanel', '', '', '', '', ''),
('9', ".$newLanguageId.", 'Kontodetaljer', '', '', '', '', ''),
('10', ".$newLanguageId.", 'Endre passord', '', '', '', '', ''),
('11', ".$newLanguageId.", 'Adresser', '', '', '', '', ''),
('12', ".$newLanguageId.", 'Ønskeliste', '', '', '', '', ''),
('13', ".$newLanguageId.", 'Ordrehistorikk', '', '', '', '', ''),
('14', ".$newLanguageId.", 'Transaksjonshistorikk', '', '', '', '', ''),
('15', ".$newLanguageId.", 'Nedlastinger', '', '', '', '', ''),
('16', ".$newLanguageId.", 'Varsler', '', '', '', '', ''),
('17', ".$newLanguageId.", 'Handlekurvside', '', '', '', '', ''),
('18', ".$newLanguageId.", 'Rask utsjekkingsside', '', '', '', '', ''),
('19', ".$newLanguageId.", 'Suksessside for rask utsjekking', '', '', '', '', ''),
('20', ".$newLanguageId.", 'Standard innholdsside', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'Produktalternativ'),
('2', ".$newLanguageId.", 'Nedlastingsattributt'),
('3', ".$newLanguageId.", 'Kundeattributt')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'Kontakt oss-skjema'),
('4', ".$newLanguageId.", 'Kundeadresse-skjema'),
('5', ".$newLanguageId.", 'Skjema for gjesteadresse og detaljer')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'Fornavn:', '', ".$newLanguageId.", 'Navnet må være mellom 3 og 32 tegn!'),
('12', 'E-post:', '', ".$newLanguageId.", 'E-postadresse ser ikke ut til å være gyldig!'),
('13', 'Forespørsel:', '', ".$newLanguageId.", 'Forespørsel må være mellom 10 og 3000 tegn!'),
('14', 'Skriv inn koden i boksen nedenfor:', '', ".$newLanguageId.", 'Menneskelig verifisering mislyktes! Vennligst prøv igjen.'),
('15', 'ewqewewew', '', ".$newLanguageId.", ''),
('16', 'land', '', ".$newLanguageId.", ''),
('17', 'ccccccccc', '', ".$newLanguageId.", ''),
('18', 'MVA-nummer', '', ".$newLanguageId.", ''),
('19', 'Land', '', ".$newLanguageId.", 'Vennligst velg et land!'),
('20', 'Sone', '', ".$newLanguageId.", 'Vennligst velg en region/delstat!'),
('21', 'Selskap', '', ".$newLanguageId.", 'Firmanavn må være mindre enn 32 tegn!'),
('22', 'Adresselinje 1', '', ".$newLanguageId.", 'Adresse linje 1 må være mellom 3 og 128 tegn!'),
('23', 'Adresselinje 2', '', ".$newLanguageId.", 'Adresse linje 2 må være mindre enn 128 tegn!'),
('24', 'By', '', ".$newLanguageId.", 'By må være mellom 3 og 128 tegn!'),
('25', 'Postnummer/Postkode', '', ".$newLanguageId.", 'Postnummer/Postkode må være mindre enn 11 tegn!'),
('26', 'Fornavn', '', ".$newLanguageId.", 'Fornavn må være mellom 1 og 32 tegn!'),
('27', 'Etternavn', '', ".$newLanguageId.", 'Etternavnet må være mellom 1 og 32 tegn!'),
('29', 'Standardadresse', '', ".$newLanguageId.", ''),
('30', 'MVA-nummer', '', ".$newLanguageId.", 'MVA-ID-koden må være mellom 8 og 14 tegn!'),
('31', 'Land', '', ".$newLanguageId.", 'Vennligst velg et land!'),
('32', 'Region/Stat', '', ".$newLanguageId.", 'Vennligst velg en region/stat!'),
('33', 'Firma', '', ".$newLanguageId.", 'Firmanavn må være mindre enn 32 tegn!'),
('34', 'Adresse linje 1', '', ".$newLanguageId.", 'Adresselinje 1 må være mellom 3 og 128 tegn!'),
('35', 'Adresselinje 2', '', ".$newLanguageId.", 'Adresselinje 2 må være mindre enn 128 tegn!'),
('36', 'By', '', ".$newLanguageId.", 'By må være mellom 3 og 128 tegn!'),
('37', 'Postnummer/Postnummer', '', ".$newLanguageId.", 'Postnummer/Postkode må være mindre enn 11 tegn!'),
('38', 'Fornavn', '', ".$newLanguageId.", 'Fornavn må være mellom 1 og 32 tegn!'),
('39', 'Etternavn', '', ".$newLanguageId.", 'Etternavn må være mellom 1 og 32 tegn!'),
('40', 'MVA-ID', '', ".$newLanguageId.", 'MVA-ID-kode må være mellom 8 og 14 tegn!'),
('41', 'E-post', '', ".$newLanguageId.", 'Din e-post er ikke oppgitt eller ugyldig!'),
('42', 'Telefonnummer', '', ".$newLanguageId.", 'Ditt kontakttelefonnummer er ikke oppgitt eller ugyldig.')");


