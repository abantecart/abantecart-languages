<?php
//translated
$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'Попереднє замовлення')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Сантиметр', 'см'),
('2', ".$newLanguageId.", 'Міліметр', 'мм'),
('3', ".$newLanguageId.", 'Дюйм', 'у')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Кілограм', 'kg'),
('2', ".$newLanguageId.", 'Грам', 'g'),
('5', ".$newLanguageId.", 'Фунт', 'lb'),
('6', ".$newLanguageId.", 'Унція', 'oz')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'Незавершено'),
('1', ".$newLanguageId.", 'В очікуванні'),
('2', ".$newLanguageId.", 'Обробка'),
('3', ".$newLanguageId.", 'Відправлено'),
('5', ".$newLanguageId.", 'Виконано'),
('7', ".$newLanguageId.", 'Скасовано'),
('8', ".$newLanguageId.", 'Відмовлено'),
('9', ".$newLanguageId.", 'Скасоване Відкликання'),
('10', ".$newLanguageId.", 'Не вдалося'),
('11', ".$newLanguageId.", 'Відшкодовано'),
('12', ".$newLanguageId.", 'Зворотній'),
('13', ".$newLanguageId.", 'Відкликання платежу'),
('14', ".$newLanguageId.", 'Скасовано Клієнтом')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'Всі Інші Сторінки', '', '', '', '', ''),
('2', ".$newLanguageId.", 'Домашня сторінка', '', '', '', '', ''),
('3', ".$newLanguageId.", 'Сторінка входу', '', '', '', '', ''),
('4', ".$newLanguageId.", 'Сторінка \"Зв\'язатися з нами', '', '', '', '', ''),
('5', ".$newLanguageId.", 'Сторінка товару за замовчуванням', '', '', '', '', ''),
('7', ".$newLanguageId.", 'Сторінка обслуговування', '', '', '', '', ''),
('8', ".$newLanguageId.", 'Панель користувача', '', '', '', '', ''),
('9', ".$newLanguageId.", 'Деталі облікового запису', '', '', '', '', ''),
('10', ".$newLanguageId.", 'Змінити пароль', '', '', '', '', ''),
('11', ".$newLanguageId.", 'Адреси', '', '', '', '', ''),
('12', ".$newLanguageId.", 'Список бажань', '', '', '', '', ''),
('13', ".$newLanguageId.", 'Історія замовлень', '', '', '', '', ''),
('14', ".$newLanguageId.", 'Історія транзакцій', '', '', '', '', ''),
('15', ".$newLanguageId.", 'Завантаження', '', '', '', '', ''),
('16', ".$newLanguageId.", 'Повідомлення', '', '', '', '', ''),
('17', ".$newLanguageId.", 'Сторінка кошика', '', '', '', '', ''),
('18', ".$newLanguageId.", 'Сторінка Оформлення Замовлення', '', '', '', '', ''),
('19', ".$newLanguageId.", 'Сторінка Успішного Оформлення Замовлення', '', '', '', '', ''),
('20', ".$newLanguageId.", 'Сторінка зі стандартним вмістом', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'Опція Продукту'),
('2', ".$newLanguageId.", 'Завантажити Атрибут')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'Форма \"Зв\'яжіться з нами')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'Ім\'я:', '', ".$newLanguageId.", 'Ім\'я повинно бути від 3 до 32 символів!'),
('12', 'Електронна пошта:', '', ".$newLanguageId.", 'Адреса електронної пошти, схоже, не є дійсною!'),
('13', 'Запит:', '', ".$newLanguageId.", 'Запит має бути від 10 до 3000 символів!'),
('14', 'Введіть код у поле нижче:', '', ".$newLanguageId.", 'Перевірка на людськість не вдалася! Будь ласка, спробуйте ще раз.')");
