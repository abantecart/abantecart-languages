<?php

$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'Попереднє замовлення')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Сантиметр', 'см'),
('2', ".$newLanguageId.", 'міліметр', 'мм'),
('3', ".$newLanguageId.", 'дюйм', 'в')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'кілограм', 'кг'),
('2', ".$newLanguageId.", 'грам', 'g'),
('5', ".$newLanguageId.", 'Фунт', 'фунт'),
('6', ".$newLanguageId.", 'унція', 'унція')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'Неповний'),
('1', ".$newLanguageId.", 'В очікуванні'),
('2', ".$newLanguageId.", 'Обробка'),
('3', ".$newLanguageId.", 'Відправлено'),
('7', ".$newLanguageId.", 'Скасовано'),
('5', ".$newLanguageId.", 'Виконано'),
('8', ".$newLanguageId.", 'Відмовлено'),
('9', ".$newLanguageId.", 'Скасовано сторнування'),
('10', ".$newLanguageId.", 'Не вдалося'),
('11', ".$newLanguageId.", 'Повернено'),
('12', ".$newLanguageId.", 'Перевернутий'),
('13', ".$newLanguageId.", 'Повернення платежу'),
('14', ".$newLanguageId.", 'Скасовано замовником')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'Усі інші сторінки', '', '', '', '', ''),
('2', ".$newLanguageId.", 'Домашня сторінка', '', '', '', '', ''),
('3', ".$newLanguageId.", 'Сторінка входу', '', '', '', '', ''),
('4', ".$newLanguageId.", 'Сторінка контактів', '', '', '', '', ''),
('5', ".$newLanguageId.", 'Сторінка продукту за умовчанням', '', '', '', '', ''),
('7', ".$newLanguageId.", 'Сторінка технічного обслуговування', '', '', '', '', ''),
('8', ".$newLanguageId.", 'Інформаційна панель клієнта', '', '', '', '', ''),
('9', ".$newLanguageId.", 'Реквізити облікового запису', '', '', '', '', ''),
('10', ".$newLanguageId.", 'Змінити пароль', '', '', '', '', ''),
('11', ".$newLanguageId.", 'Адреси', '', '', '', '', ''),
('12', ".$newLanguageId.", 'Список бажань', '', '', '', '', ''),
('13', ".$newLanguageId.", 'Історія замовлень', '', '', '', '', ''),
('14', ".$newLanguageId.", 'Історія транзакцій', '', '', '', '', ''),
('15', ".$newLanguageId.", 'Завантаження', '', '', '', '', ''),
('16', ".$newLanguageId.", 'Сповіщення', '', '', '', '', ''),
('17', ".$newLanguageId.", 'Сторінка кошика', '', '', '', '', ''),
('18', ".$newLanguageId.", 'Сторінка швидкого оформлення замовлення', '', '', '', '', ''),
('19', ".$newLanguageId.", 'Сторінка швидкого оформлення замовлення', '', '', '', '', ''),
('20', ".$newLanguageId.", 'Сторінка вмісту за умовчанням', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'Варіант продукту'),
('2', ".$newLanguageId.", 'Завантажити атрибут')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'Форма зв&#39;язку з нами')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'Ім&#39;я:', '', ".$newLanguageId.", 'Назва має містити від 3 до 32 символів!'),
('12', 'Електронна пошта:', '', ".$newLanguageId.", 'Адреса електронної пошти недійсна!'),
('13', 'Запит:', '', ".$newLanguageId.", 'Запит має бути від 10 до 3000 символів!'),
('14', 'Введіть код у поле нижче:', '', ".$newLanguageId.", 'Не вдалося перевірити людину! Спробуйте ще раз.')");


