<?php

$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'Нарачајте однапред')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Сантиметар', 'см'),
('2', ".$newLanguageId.", 'Милиметар', 'мм'),
('3', ".$newLanguageId.", 'Инч', 'во')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Килограм', 'кг'),
('2', ".$newLanguageId.", 'Грам', 'е'),
('5', ".$newLanguageId.", 'фунти', 'lb'),
('6', ".$newLanguageId.", 'Унца', 'унца')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'Нецелосни'),
('1', ".$newLanguageId.", 'Во очекување'),
('2', ".$newLanguageId.", 'Обработка'),
('3', ".$newLanguageId.", 'Испратено'),
('7', ".$newLanguageId.", 'Откажано'),
('5', ".$newLanguageId.", 'Завршено'),
('8', ".$newLanguageId.", 'Демантирано'),
('9', ".$newLanguageId.", 'Откажан пресврт'),
('10', ".$newLanguageId.", 'Неуспешно'),
('11', ".$newLanguageId.", 'Рефундирани'),
('12', ".$newLanguageId.", 'Обратно'),
('13', ".$newLanguageId.", 'Поврат на наплата'),
('14', ".$newLanguageId.", 'Откажано од клиентот')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'Сите други страници', '', '', '', '', ''),
('2', ".$newLanguageId.", 'Почетна страница', '', '', '', '', ''),
('3', ".$newLanguageId.", 'Страница за најавување', '', '', '', '', ''),
('4', ".$newLanguageId.", 'Страница за контакт со нас', '', '', '', '', ''),
('5', ".$newLanguageId.", 'Стандардна страница на производот', '', '', '', '', ''),
('7', ".$newLanguageId.", 'Страница за одржување', '', '', '', '', ''),
('8', ".$newLanguageId.", 'Контролна табла за клиенти', '', '', '', '', ''),
('9', ".$newLanguageId.", 'Детали за сметката', '', '', '', '', ''),
('10', ".$newLanguageId.", 'Променете ја лозинката', '', '', '', '', ''),
('11', ".$newLanguageId.", 'Адреси', '', '', '', '', ''),
('12', ".$newLanguageId.", 'Листа на желби', '', '', '', '', ''),
('13', ".$newLanguageId.", 'Историја на нарачки', '', '', '', '', ''),
('14', ".$newLanguageId.", 'Историја на трансакции', '', '', '', '', ''),
('15', ".$newLanguageId.", 'Преземања', '', '', '', '', ''),
('16', ".$newLanguageId.", 'Известувања', '', '', '', '', ''),
('17', ".$newLanguageId.", 'Страница за кошничка', '', '', '', '', ''),
('18', ".$newLanguageId.", 'Страница за брза наплата', '', '', '', '', ''),
('19', ".$newLanguageId.", 'Успешна страница за брзо плаќање', '', '', '', '', ''),
('20', ".$newLanguageId.", 'Стандардна страница со содржина', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'Опција за производ'),
('2', ".$newLanguageId.", 'Преземи атрибут')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'Формулар за контакт со нас')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'Име:', '', ".$newLanguageId.", 'Името мора да биде помеѓу 3 и 32 знаци!'),
('12', 'Е-пошта:', '', ".$newLanguageId.", 'Се чини дека адресата на е-пошта не е валидна!'),
('13', 'Прашање:', '', ".$newLanguageId.", 'Прашањето мора да биде помеѓу 10 и 3000 знаци!'),
('14', 'Внесете го кодот во полето подолу:', '', ".$newLanguageId.", 'Човечката верификација не успеа! Ве молиме обидете се повторно.')");


