<?php

$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'Zamów w przedsprzedaży')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Centymetr', 'cm'),
('2', ".$newLanguageId.", 'Milimetr', 'mm'),
('3', ".$newLanguageId.", 'Cal', 'W')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Kilogram', 'kg'),
('2', ".$newLanguageId.", 'Gram', 'G'),
('5', ".$newLanguageId.", 'Funt', 'funt'),
('6', ".$newLanguageId.", 'Uncja', 'uncja')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'Niekompletny'),
('1', ".$newLanguageId.", 'Aż do'),
('2', ".$newLanguageId.", 'Przetwarzanie'),
('3', ".$newLanguageId.", 'Wysłany'),
('7', ".$newLanguageId.", 'Odwołany'),
('5', ".$newLanguageId.", 'Zakończony'),
('8', ".$newLanguageId.", 'Zaprzeczony'),
('9', ".$newLanguageId.", 'Anulowane odwrócenie'),
('10', ".$newLanguageId.", 'Przegrany'),
('11', ".$newLanguageId.", 'Zwrócono'),
('12', ".$newLanguageId.", 'Wywrócony'),
('13', ".$newLanguageId.", 'Obciążenie zwrotne'),
('14', ".$newLanguageId.", 'Anulowane przez Klienta')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'Wszystkie inne strony', '', '', '', '', ''),
('2', ".$newLanguageId.", 'Strona główna', '', '', '', '', ''),
('3', ".$newLanguageId.", 'Strona logowania', '', '', '', '', ''),
('4', ".$newLanguageId.", 'Strona kontaktowa', '', '', '', '', ''),
('5', ".$newLanguageId.", 'Domyślna strona produktu', '', '', '', '', ''),
('7', ".$newLanguageId.", 'Strona konserwacji', '', '', '', '', ''),
('8', ".$newLanguageId.", 'Panel klienta', '', '', '', '', ''),
('9', ".$newLanguageId.", 'Szczegóły konta', '', '', '', '', ''),
('10', ".$newLanguageId.", 'Zmień hasło', '', '', '', '', ''),
('11', ".$newLanguageId.", 'Adresy', '', '', '', '', ''),
('12', ".$newLanguageId.", 'Lista życzeń', '', '', '', '', ''),
('13', ".$newLanguageId.", 'Historia zamówień', '', '', '', '', ''),
('14', ".$newLanguageId.", 'Historia transakcji', '', '', '', '', ''),
('15', ".$newLanguageId.", 'Pobieranie', '', '', '', '', ''),
('16', ".$newLanguageId.", 'Powiadomienia', '', '', '', '', ''),
('17', ".$newLanguageId.", 'Strona koszyka', '', '', '', '', ''),
('18', ".$newLanguageId.", 'Szybka strona płatności', '', '', '', '', ''),
('19', ".$newLanguageId.", 'Strona z potwierdzeniem szybkiej realizacji transakcji', '', '', '', '', ''),
('20', ".$newLanguageId.", 'Domyślna strona treści', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'Opcja produktu'),
('2', ".$newLanguageId.", 'Pobierz atrybut')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'Formularz kontaktowy')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'Imię:', '', ".$newLanguageId.", 'Nazwa musi zawierać od 3 do 32 znaków!'),
('12', 'E-mail:', '', ".$newLanguageId.", 'Adres e-mail wydaje się być nieprawidłowy!'),
('13', 'Zapytanie:', '', ".$newLanguageId.", 'Zapytanie musi zawierać od 10 do 3000 znaków!'),
('14', 'Wpisz kod w polu poniżej:', '', ".$newLanguageId.", 'Weryfikacja człowieka nie powiodła się! Proszę spróbować ponownie.')");


