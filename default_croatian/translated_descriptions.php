<?php
//translated
$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'Prednarudžba')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Centimetar', 'cm'),
('2', ".$newLanguageId.", 'Milimetar', 'mm'),
('3', ".$newLanguageId.", 'Inč', 'u')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Kilogram', 'kg'),
('2', ".$newLanguageId.", 'gram', 'g'),
('5', ".$newLanguageId.", 'Funta', 'lb'),
('6', ".$newLanguageId.", 'Unca', 'oz')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'Nepotpun'),
('1', ".$newLanguageId.", 'Na čekanju'),
('2', ".$newLanguageId.", 'Obrada'),
('3', ".$newLanguageId.", 'Poslano'),
('5', ".$newLanguageId.", 'Završeno'),
('7', ".$newLanguageId.", 'Otkazano'),
('8', ".$newLanguageId.", 'Odbijeno'),
('9', ".$newLanguageId.", 'Otkazan povrat'),
('10', ".$newLanguageId.", 'Neuspješno'),
('11', ".$newLanguageId.", 'Refundirano'),
('12', ".$newLanguageId.", 'Obrnuto'),
('13', ".$newLanguageId.", 'Povrat sredstava'),
('14', ".$newLanguageId.", 'Otkazano od kupca')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'Sve ostale stranice', '', '', '', '', ''),
('2', ".$newLanguageId.", 'Početna stranica', '', '', '', '', ''),
('3', ".$newLanguageId.", 'Prijavna stranica', '', '', '', '', ''),
('4', ".$newLanguageId.", 'Stranica Kontaktirajte nas', '', '', '', '', ''),
('5', ".$newLanguageId.", 'Zadana stranica proizvoda', '', '', '', '', ''),
('7', ".$newLanguageId.", 'Stranica održavanja', '', '', '', '', ''),
('8', ".$newLanguageId.", 'Nadzorna ploča kupca', '', '', '', '', ''),
('9', ".$newLanguageId.", 'Podaci o računu', '', '', '', '', ''),
('10', ".$newLanguageId.", 'Promijeni lozinku', '', '', '', '', ''),
('11', ".$newLanguageId.", 'Adrese', '', '', '', '', ''),
('12', ".$newLanguageId.", 'Lista želja', '', '', '', '', ''),
('13', ".$newLanguageId.", 'Povijest narudžbi', '', '', '', '', ''),
('14', ".$newLanguageId.", 'Povijest transakcija', '', '', '', '', ''),
('15', ".$newLanguageId.", 'Preuzimanja', '', '', '', '', ''),
('16', ".$newLanguageId.", 'Obavijesti', '', '', '', '', ''),
('17', ".$newLanguageId.", 'Stranica košarice', '', '', '', '', ''),
('18', ".$newLanguageId.", 'Stranica brze naplate', '', '', '', '', ''),
('19', ".$newLanguageId.", 'Stranica uspjeha brze naplate', '', '', '', '', ''),
('20', ".$newLanguageId.", 'Zadana stranica sadržaja', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'Opcija proizvoda'),
('2', ".$newLanguageId.", 'Atribut preuzimanja'),
('3', ".$newLanguageId.", 'Atribut kupca')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'Kontakt obrazac'),
('4', ".$newLanguageId.", 'Obrazac adrese kupca'),
('5', ".$newLanguageId.", 'Obrazac za adresu i detalje gosta'),
('6', ".$newLanguageId.", 'Obrazac podataka o kupcu'),
('7', ".$newLanguageId.", 'Obrazac za registraciju kupca')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'Ime:', '', ".$newLanguageId.", 'Ime mora biti između 3 i 32 znakova!'),
('12', 'E-pošta:', '', ".$newLanguageId.", 'E-mail adresa ne izgleda valjano!'),
('13', 'Upit:', '', ".$newLanguageId.", 'Upit mora biti između 10 i 3000 znakova!'),
('14', 'Unesite kod u okvir ispod:', '', ".$newLanguageId.", 'Provjera čovjeka nije uspjela! Molimo pokušajte ponovno.'),
('16', 'zemlje', '', ".$newLanguageId.", ''),
('18', 'ID PDV-a', '', ".$newLanguageId.", ''),
('19', 'Država', '', ".$newLanguageId.", 'Molimo odaberite državu!'),
('20', 'Zona', '', ".$newLanguageId.", 'Molimo odaberite regiju/državu!'),
('21', 'Tvrtka', '', ".$newLanguageId.", 'Naziv tvrtke mora biti kraći od 32 znakova!'),
('22', 'Linija adrese 1', '', ".$newLanguageId.", 'Linija adrese 1 mora imati između 3 i 128 znakova!'),
('23', 'Drugi redak adrese', '', ".$newLanguageId.", 'Drugi redak adrese mora imati manje od 128 znakova!'),
('24', 'Grad', '', ".$newLanguageId.", 'Grad mora biti između 3 i 128 znakova!'),
('25', 'Poštanski broj/Poštanski broj', '', ".$newLanguageId.", 'ZIP/Poštanski broj mora imati manje od 11 znakova!'),
('26', 'Ime', '', ".$newLanguageId.", 'Ime mora biti između 1 i 32 znakova!'),
('27', 'Prezime', '', ".$newLanguageId.", 'Prezime mora biti između 1 i 32 znakova!'),
('29', 'Zadana adresa', '', ".$newLanguageId.", ''),
('30', 'ID PDV-a', '', ".$newLanguageId.", 'VAT ID kod mora imati između 8 i 14 znakova!'),
('31', 'Država', '', ".$newLanguageId.", 'Molimo odaberite državu!'),
('32', 'Regija/Država', '', ".$newLanguageId.", 'Molimo odaberite regiju/državu!'),
('33', 'Tvrtka', '', ".$newLanguageId.", 'Naziv tvrtke mora biti kraći od 32 znakova!'),
('34', 'Linija adrese 1', '', ".$newLanguageId.", 'Adresni redak 1 mora imati između 3 i 128 znakova!'),
('35', 'Drugi redak adrese', '', ".$newLanguageId.", 'Redak adrese 2 mora biti kraći od 128 znakova!'),
('36', 'Grad', '', ".$newLanguageId.", 'Grad mora biti između 3 i 128 znakova!'),
('37', 'Poštanski broj', '', ".$newLanguageId.", 'ZIP/Poštanski broj mora imati manje od 11 znakova!'),
('38', 'Ime', '', ".$newLanguageId.", 'Ime mora biti između 1 i 32 znakova!'),
('39', 'Prezime', '', ".$newLanguageId.", 'Prezime mora biti između 1 i 32 znakova!'),
('40', 'ID PDV-a', '', ".$newLanguageId.", 'PDV ID kod mora biti između 8 i 14 znakova!'),
('41', 'E-pošta', '', ".$newLanguageId.", 'Vaš e-mail nije naveden ili je nevažeći!'),
('42', 'Broj telefona', '', ".$newLanguageId.", 'Vaš kontakt broj telefona nije naveden ili je nevažeći.'),
('43', 'Korisničko ime', '', ".$newLanguageId.", 'Korisničko ime mora biti između 5 i 65 znakova!'),
('44', 'Ime', '', ".$newLanguageId.", 'Ime mora imati između 1 i 32 znakova!'),
('45', 'Prezime', '', ".$newLanguageId.", 'Prezime mora biti između 1 i 32 znakova!'),
('46', 'E-pošta', '', ".$newLanguageId.", 'Vaša e-pošta nije navedena ili je nevažeća!'),
('47', 'Telefonski broj', '', ".$newLanguageId.", 'Vaš kontaktni telefonski broj nije naveden ili je neispravan.'),
('49', 'Ime', '', ".$newLanguageId.", 'Ime mora biti između 1 i 32 znakova!'),
('50', 'Prezime', '', ".$newLanguageId.", 'Prezime mora imati između 1 i 32 znakova!'),
('51', 'E-pošta', '', ".$newLanguageId.", 'Vaša e-pošta nije unesena ili je nevažeća!'),
('52', 'Broj telefona', '', ".$newLanguageId.", 'Vaš kontaktni telefonski broj nije naveden ili je neispravan.'),
('53', 'Država', '', ".$newLanguageId.", 'Molimo odaberite državu!'),
('54', 'Regija/Država', '', ".$newLanguageId.", 'Molimo odaberite regiju/državu!'),
('55', 'Adresa linija 1', '', ".$newLanguageId.", 'Linija adrese 1 mora biti između 3 i 128 znakova!'),
('56', 'Drugi red adrese', '', ".$newLanguageId.", 'Redak adrese 2 mora imati manje od 128 znakova!'),
('57', 'Grad', '', ".$newLanguageId.", 'Grad mora imati između 3 i 128 znakova!'),
('58', 'Poštanski broj/Poštanski broj', '', ".$newLanguageId.", 'Zip/Poštanski broj mora biti manje od 11 znakova!'),
('59', 'Tvrtka', '', ".$newLanguageId.", 'Naziv tvrtke mora imati manje od 32 znakova!'),
('60', 'Korisničko ime', '', ".$newLanguageId.", 'Korisničko ime mora biti isključivo alfanumeričko i imati između 5 i 64 znakova!'),
('61', 'Pretplatite se', '', ".$newLanguageId.", ''),
('62', 'PDV ID', '', ".$newLanguageId.", 'PDV ID kod mora biti između 8 i 14 znakova!')");


