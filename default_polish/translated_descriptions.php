<?php
//translated
$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'Przedsprzedaż')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Centymetr', 'cm'),
('2', ".$newLanguageId.", 'Milimetr', 'mm'),
('3', ".$newLanguageId.", 'Cal', 'w')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'kilogram', 'kg'),
('2', ".$newLanguageId.", 'Gram', 'g'),
('5', ".$newLanguageId.", 'Funt', 'funt'),
('6', ".$newLanguageId.", 'Uncja', 'uncja')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'Niekompletny'),
('1', ".$newLanguageId.", 'Oczekujące'),
('2', ".$newLanguageId.", 'Przetwarzanie'),
('3', ".$newLanguageId.", 'Wysłane'),
('5', ".$newLanguageId.", 'Zakończono'),
('7', ".$newLanguageId.", 'Anulowany'),
('8', ".$newLanguageId.", 'Odmowa'),
('9', ".$newLanguageId.", 'Anulowany zwrot'),
('10', ".$newLanguageId.", 'Nie powiodło się'),
('11', ".$newLanguageId.", 'Zwrócono'),
('12', ".$newLanguageId.", 'Odwrócony'),
('13', ".$newLanguageId.", 'Obciążenie zwrotne'),
('14', ".$newLanguageId.", 'Anulowane przez klienta')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'Wszystkie pozostałe strony', '', '', '', '', ''),
('2', ".$newLanguageId.", 'Strona główna', '', '', '', '', ''),
('3', ".$newLanguageId.", 'Strona logowania', '', '', '', '', ''),
('4', ".$newLanguageId.", 'Strona kontaktowa', '', '', '', '', ''),
('5', ".$newLanguageId.", 'Domyślna strona produktu', '', '', '', '', ''),
('7', ".$newLanguageId.", 'Strona konserwacyjna', '', '', '', '', ''),
('8', ".$newLanguageId.", 'Panel klienta', '', '', '', '', ''),
('9', ".$newLanguageId.", 'Szczegóły konta', '', '', '', '', ''),
('10', ".$newLanguageId.", 'Zmień hasło', '', '', '', '', ''),
('11', ".$newLanguageId.", 'Adresy', '', '', '', '', ''),
('12', ".$newLanguageId.", 'Lista życzeń', '', '', '', '', ''),
('13', ".$newLanguageId.", 'Historia zamówień', '', '', '', '', ''),
('14', ".$newLanguageId.", 'Historia transakcji', '', '', '', '', ''),
('15', ".$newLanguageId.", 'Pobrania', '', '', '', '', ''),
('16', ".$newLanguageId.", 'Powiadomienia', '', '', '', '', ''),
('17', ".$newLanguageId.", 'Strona koszyka', '', '', '', '', ''),
('18', ".$newLanguageId.", 'Szybka strona realizacji zamówienia', '', '', '', '', ''),
('19', ".$newLanguageId.", 'Strona potwierdzenia szybkiej finalizacji zamówienia', '', '', '', '', ''),
('20', ".$newLanguageId.", 'Domyślna strona zawartości', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'Opcja produktu'),
('2', ".$newLanguageId.", 'Atrybut do pobrania'),
('3', ".$newLanguageId.", 'Atrybut klienta')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'Formularz kontaktowy'),
('4', ".$newLanguageId.", 'Formularz adresowy klienta'),
('5', ".$newLanguageId.", 'Formularz adresu i danych gościa'),
('6', ".$newLanguageId.", 'Dane klienta formorm'),
('7', ".$newLanguageId.", 'Formularz rejestracji klienta')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'Imię:', '', ".$newLanguageId.", 'Nazwa musi mieć od 3 do 32 znaków!'),
('12', 'E-mail:', '', ".$newLanguageId.", 'Adres e-mail nie wygląda na prawidłowy!'),
('13', 'Zapytanie:', '', ".$newLanguageId.", 'Zapytanie musi zawierać od 10 do 3000 znaków!'),
('14', 'Wpisz kod w poniższe pole:', '', ".$newLanguageId.", 'Weryfikacja człowieka nie powiodła się! Proszę spróbować ponownie.'),
('16', 'kraje', '', ".$newLanguageId.", ''),
('18', 'NIP', '', ".$newLanguageId.", ''),
('19', 'Kraj', '', ".$newLanguageId.", 'Proszę wybrać kraj!'),
('20', 'Strefa', '', ".$newLanguageId.", 'Proszę wybrać region/stan!'),
('21', 'Firma', '', ".$newLanguageId.", 'Nazwa firmy musi mieć mniej niż 32 znaki!'),
('22', 'Linia adresu 1', '', ".$newLanguageId.", 'Linia adresu 1 musi zawierać od 3 do 128 znaków!'),
('23', 'Druga linia adresu', '', ".$newLanguageId.", 'Druga linia adresu musi mieć mniej niż 128 znaków!'),
('24', 'Miasto', '', ".$newLanguageId.", 'Miasto musi mieć od 3 do 128 znaków!'),
('25', 'Kod pocztowy/Kod pocztowy', '', ".$newLanguageId.", 'Kod pocztowy/ZIP musi mieć mniej niż 11 znaków!'),
('26', 'Imię', '', ".$newLanguageId.", 'Imię musi zawierać od 1 do 32 znaków!'),
('27', 'Nazwisko', '', ".$newLanguageId.", 'Nazwisko musi mieć od 1 do 32 znaków!'),
('29', 'Adres domyślny', '', ".$newLanguageId.", ''),
('30', 'Identyfikator VAT', '', ".$newLanguageId.", 'Kod identyfikacyjny VAT musi mieć od 8 do 14 znaków!'),
('31', 'Kraj', '', ".$newLanguageId.", 'Proszę wybrać kraj!'),
('32', 'Region/Stan', '', ".$newLanguageId.", 'Proszę wybrać region/województwo!'),
('33', 'Firma', '', ".$newLanguageId.", 'Nazwa firmy musi mieć mniej niż 32 znaków!'),
('34', 'Adres, linia 1', '', ".$newLanguageId.", 'Linia adresu 1 musi zawierać od 3 do 128 znaków!'),
('35', 'Adres Linia 2', '', ".$newLanguageId.", 'Linia adresu 2 musi mieć mniej niż 128 znaków!'),
('36', 'Miasto', '', ".$newLanguageId.", 'Miasto musi mieć od 3 do 128 znaków!'),
('37', 'Kod pocztowy/Kod pocztowy', '', ".$newLanguageId.", 'Kod ZIP/Kod pocztowy musi mieć mniej niż 11 znaków!'),
('38', 'Imię', '', ".$newLanguageId.", 'Imię musi mieć od 1 do 32 znaków!'),
('39', 'Nazwisko', '', ".$newLanguageId.", 'Nazwisko musi mieć od 1 do 32 znaków!'),
('40', 'NIP', '', ".$newLanguageId.", 'Kod identyfikacyjny VAT musi mieć od 8 do 14 znaków!'),
('41', 'E-mail', '', ".$newLanguageId.", 'Twój adres e-mail nie został podany lub jest nieprawidłowy!'),
('42', 'Numer telefonu', '', ".$newLanguageId.", 'Twój numer telefonu kontaktowego nie został podany lub jest nieprawidłowy.'),
('43', 'Nazwa użytkownika', '', ".$newLanguageId.", 'Nazwa logowania musi mieć od 5 do 65 znaków!'),
('44', 'Imię', '', ".$newLanguageId.", 'Imię musi mieć od 1 do 32 znaków!'),
('45', 'Nazwisko', '', ".$newLanguageId.", 'Nazwisko musi mieć od 1 do 32 znaków!'),
('46', 'E-mail', '', ".$newLanguageId.", 'Twój e-mail nie został podany lub jest nieprawidłowy!'),
('47', 'Numer telefonu', '', ".$newLanguageId.", 'Twój numer telefonu kontaktowego nie został podany lub jest nieprawidłowy.'),
('49', 'Imię', '', ".$newLanguageId.", 'Imię musi mieć od 1 do 32 znaków!'),
('50', 'Nazwisko', '', ".$newLanguageId.", 'Nazwisko musi mieć od 1 do 32 znaków!'),
('51', 'E-mail', '', ".$newLanguageId.", 'Twój adres email nie został podany lub jest nieprawidłowy!'),
('52', 'Numer telefonu', '', ".$newLanguageId.", 'Twój numer telefonu kontaktowego nie został podany lub jest nieprawidłowy.'),
('53', 'Kraj', '', ".$newLanguageId.", 'Proszę wybrać kraj!'),
('54', 'Region/Stan', '', ".$newLanguageId.", 'Proszę wybrać region/stan!'),
('55', 'Wiersz adresu 1', '', ".$newLanguageId.", 'Linia adresu 1 musi mieć od 3 do 128 znaków!'),
('56', 'Linia adresu 2', '', ".$newLanguageId.", 'Linia adresu 2 musi mieć mniej niż 128 znaków!'),
('57', 'Miasto', '', ".$newLanguageId.", 'Miasto musi mieć od 3 do 128 znaków!'),
('58', 'Kod pocztowy', '', ".$newLanguageId.", 'Kod pocztowy/Kod pocztowy musi być krótszy niż 11 znaków!'),
('59', 'Firma', '', ".$newLanguageId.", 'Nazwa firmy musi mieć mniej niż 32 znaki!'),
('60', 'Nazwa logowania', '', ".$newLanguageId.", 'Nazwa logowania musi składać się wyłącznie ze znaków alfanumerycznych i mieć od 5 do 64 znaków!'),
('61', 'Subskrybuj', '', ".$newLanguageId.", '')");


