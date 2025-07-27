<?php
//translated
$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'Предзаказ')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Сантиметр', 'см'),
('2', ".$newLanguageId.", 'миллиметр', 'мм'),
('3', ".$newLanguageId.", 'Дюйм', 'в')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Килограмм', 'кг'),
('2', ".$newLanguageId.", 'Грамм', 'g'),
('5', ".$newLanguageId.", 'Фунт', 'фунт'),
('6', ".$newLanguageId.", 'Унция', 'унция')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'Неполный'),
('1', ".$newLanguageId.", 'В ожидании'),
('2', ".$newLanguageId.", 'В обработке'),
('3', ".$newLanguageId.", 'Отправлено'),
('5', ".$newLanguageId.", 'Завершено'),
('7', ".$newLanguageId.", 'Отменено'),
('8', ".$newLanguageId.", 'Отклонено'),
('9', ".$newLanguageId.", 'Отмененный возврат'),
('10', ".$newLanguageId.", 'Не удалось'),
('11', ".$newLanguageId.", 'Возвращено'),
('12', ".$newLanguageId.", 'Обратный'),
('13', ".$newLanguageId.", 'Возврат платежа'),
('14', ".$newLanguageId.", 'Отменено клиентом')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'Все остальные страницы', '', '', '', '', ''),
('2', ".$newLanguageId.", 'Главная страница', '', '', '', '', ''),
('3', ".$newLanguageId.", 'Страница входа', '', '', '', '', ''),
('4', ".$newLanguageId.", 'Страница «Свяжитесь с нами»', '', '', '', '', ''),
('5', ".$newLanguageId.", 'Страница товара по умолчанию', '', '', '', '', ''),
('7', ".$newLanguageId.", 'Страница обслуживания', '', '', '', '', ''),
('8', ".$newLanguageId.", 'Панель клиента', '', '', '', '', ''),
('9', ".$newLanguageId.", 'Данные учетной записи', '', '', '', '', ''),
('10', ".$newLanguageId.", 'Изменить пароль', '', '', '', '', ''),
('11', ".$newLanguageId.", 'Адреса', '', '', '', '', ''),
('12', ".$newLanguageId.", 'Список желаний', '', '', '', '', ''),
('13', ".$newLanguageId.", 'История заказов', '', '', '', '', ''),
('14', ".$newLanguageId.", 'История транзакций', '', '', '', '', ''),
('15', ".$newLanguageId.", 'Загрузки', '', '', '', '', ''),
('16', ".$newLanguageId.", 'Уведомления', '', '', '', '', ''),
('17', ".$newLanguageId.", 'Страница корзины', '', '', '', '', ''),
('18', ".$newLanguageId.", 'Страница быстрого оформления заказа', '', '', '', '', ''),
('19', ".$newLanguageId.", 'Страница успешного быстрого оформления заказа', '', '', '', '', ''),
('20', ".$newLanguageId.", 'Страница контента по умолчанию', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'Опция товара'),
('2', ".$newLanguageId.", 'Скачиваемый атрибут')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'Форма обратной связи'),
('3', ".$newLanguageId.", 'аасасас')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'Имя:', '', ".$newLanguageId.", 'Имя должно быть от 3 до 32 символов!'),
('12', 'Электронная почта:', '', ".$newLanguageId.", 'Адрес электронной почты не является действительным!'),
('13', 'Запрос:', '', ".$newLanguageId.", 'Запрос должен содержать от 10 до 3000 символов!'),
('14', 'Введите код в поле ниже:', '', ".$newLanguageId.", 'Проверка человека не удалась! Пожалуйста, попробуйте ещё раз.'),
('15', 'ссс', 'кью', ".$newLanguageId.", '')");


