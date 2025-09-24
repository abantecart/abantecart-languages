<?php 
//translated 
return 
array (
  'stock_statuses' => 
  array (
    'parent_table' => 'stock_statuses',
    'descriptions_table' => 'stock_statuses',
    'descriptions' => 
    array (
      'Pre-Order' => 
      array (
        'name' => 'Предзаказ',
      ),
    ),
  ),
  'length_class_descriptions' => 
  array (
    'parent_table' => 'length_classes',
    'descriptions_table' => 'length_class_descriptions',
    'descriptions' => 
    array (
      'CMET' => 
      array (
        'title' => 'Сантиметр',
        'unit' => 'см',
      ),
      'MMET' => 
      array (
        'title' => 'миллиметр',
        'unit' => 'мм',
      ),
      'INCH' => 
      array (
        'title' => 'Дюйм',
        'unit' => '″',
      ),
    ),
  ),
  'weight_class_descriptions' => 
  array (
    'parent_table' => 'weight_classes',
    'descriptions_table' => 'weight_class_descriptions',
    'descriptions' => 
    array (
      'KILO' => 
      array (
        'title' => 'Килограмм',
        'unit' => 'кг',
      ),
      'GRAM' => 
      array (
        'title' => 'грамм',
        'unit' => 'г',
      ),
      'PUND' => 
      array (
        'title' => 'Фунт',
        'unit' => 'фунт',
      ),
      'USOU' => 
      array (
        'title' => 'Унция',
        'unit' => 'унция',
      ),
    ),
  ),
  'order_statuses' => 
  array (
    'parent_table' => 'order_status_ids',
    'descriptions_table' => 'order_statuses',
    'descriptions' => 
    array (
      'incomplete' => 
      array (
        'name' => 'Неполный',
      ),
      'pending' => 
      array (
        'name' => 'В ожидании',
      ),
      'processing' => 
      array (
        'name' => 'В обработке',
      ),
      'shipped' => 
      array (
        'name' => 'Отправлено',
      ),
      'completed' => 
      array (
        'name' => 'Завершено',
      ),
      'canceled' => 
      array (
        'name' => 'Отменено',
      ),
      'denied' => 
      array (
        'name' => 'Отклонено',
      ),
      'canceled_reversal' => 
      array (
        'name' => 'Отмененный возврат',
      ),
      'failed' => 
      array (
        'name' => 'Не удалось',
      ),
      'refunded' => 
      array (
        'name' => 'Возвращено',
      ),
      'reversed' => 
      array (
        'name' => 'Обратный',
      ),
      'chargeback' => 
      array (
        'name' => 'Возврат платежа',
      ),
      'canceled_by_customer' => 
      array (
        'name' => 'Отменено покупателем',
      ),
    ),
  ),
  'global_attributes_type_descriptions' => 
  array (
    'parent_table' => 'global_attributes_types',
    'descriptions_table' => 'global_attributes_type_descriptions',
    'descriptions' => 
    array (
      'product_option' => 
      array (
        'type_name' => 'Опция товара',
      ),
      'download_attribute' => 
      array (
        'type_name' => 'Атрибут загрузки',
      ),
    ),
  ),
  'form_descriptions' => 
  array (
    'parent_table' => 'forms',
    'descriptions_table' => 'form_descriptions',
    'descriptions' => 
    array (
      'AddressFrm' => 
      array (
        'description' => 'Форма адреса клиента',
      ),
      'ContactUsFrm' => 
      array (
        'description' => 'Форма обратной связи',
      ),
      'CustomerFrm' => 
      array (
        'description' => 'Форма сведений о клиенте',
      ),
      'GuestCheckoutFrm' => 
      array (
        'description' => 'Форма адреса и данных гостя',
      ),
      'RegisterCustomerFrm' => 
      array (
        'description' => 'Форма регистрации клиента',
      ),
    ),
  ),
  'field_descriptions' => 
  array (
    'parent_table' => 'fields',
    'descriptions_table' => 'field_descriptions',
    'descriptions' => 
    array (
      'first_name~ContactUsFrm' => 
      array (
        'name' => 'Имя:',
        'description' => '',
        'error_text' => 'Имя должно быть от 3 до 32 символов!',
      ),
      'email~ContactUsFrm' => 
      array (
        'name' => 'Электронная почта:',
        'description' => '',
        'error_text' => 'Похоже, адрес электронной почты недействителен!',
      ),
      'enquiry~ContactUsFrm' => 
      array (
        'name' => 'Запрос:',
        'description' => '',
        'error_text' => 'Запрос должен содержать от 10 до 3000 символов!',
      ),
      'captcha~ContactUsFrm' => 
      array (
        'name' => 'Введите код в поле ниже:',
        'description' => '',
        'error_text' => 'Проверка на человека не пройдена! Пожалуйста, попробуйте снова.',
      ),
      'country_id~AddressFrm' => 
      array (
        'name' => 'Страна',
        'description' => '',
        'error_text' => 'Пожалуйста, выберите страну!',
      ),
      'zone_id~AddressFrm' => 
      array (
        'name' => 'Зона',
        'description' => '',
        'error_text' => 'Пожалуйста, выберите регион/штат!',
      ),
      'company~AddressFrm' => 
      array (
        'name' => 'Компания',
        'description' => '',
        'error_text' => 'Название компании должно быть меньше 32 символов!',
      ),
      'address_1~AddressFrm' => 
      array (
        'name' => 'Адресная строка 1',
        'description' => '',
        'error_text' => 'Строка адреса 1 должна содержать от 3 до 128 символов!',
      ),
      'address_2~AddressFrm' => 
      array (
        'name' => 'Строка адреса 2',
        'description' => '',
        'error_text' => 'Строка адреса 2 должна содержать менее 128 символов!',
      ),
      'city~AddressFrm' => 
      array (
        'name' => 'Город',
        'description' => '',
        'error_text' => 'Город должен быть от 3 до 128 символов!',
      ),
      'postcode~AddressFrm' => 
      array (
        'name' => 'ZIP/почтовый индекс',
        'description' => '',
        'error_text' => 'ZIP-код/почтовый индекс должен быть меньше 11 символов!',
      ),
      'firstname~AddressFrm' => 
      array (
        'name' => 'Имя',
        'description' => '',
        'error_text' => 'Имя должно содержать от 1 до 32 символов!',
      ),
      'lastname~AddressFrm' => 
      array (
        'name' => 'Фамилия',
        'description' => '',
        'error_text' => 'Фамилия должна содержать от 1 до 32 символов!',
      ),
      'default~AddressFrm' => 
      array (
        'name' => 'Адрес по умолчанию',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~AddressFrm' => 
      array (
        'name' => 'Номер плательщика НДС',
        'description' => '',
        'error_text' => 'Код идентификатора НДС должен содержать от 8 до 14 символов!',
      ),
      'country_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Страна',
        'description' => '',
        'error_text' => 'Пожалуйста, выберите страну!',
      ),
      'zone_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Регион/Штат',
        'description' => '',
        'error_text' => 'Пожалуйста, выберите регион/штат!',
      ),
      'company~GuestCheckoutFrm' => 
      array (
        'name' => 'Компания',
        'description' => '',
        'error_text' => 'Название компании должно быть меньше 32 символов!',
      ),
      'address_1~GuestCheckoutFrm' => 
      array (
        'name' => 'Адресная строка 1',
        'description' => '',
        'error_text' => 'Адресная строка 1 должна быть длиной от 3 до 128 символов!',
      ),
      'address_2~GuestCheckoutFrm' => 
      array (
        'name' => 'Строка адреса 2',
        'description' => '',
        'error_text' => 'Адресная строка 2 должна содержать менее 128 символов!',
      ),
      'city~GuestCheckoutFrm' => 
      array (
        'name' => 'Город',
        'description' => '',
        'error_text' => 'Город должен содержать от 3 до 128 символов!',
      ),
      'postcode~GuestCheckoutFrm' => 
      array (
        'name' => 'ZIP/Почтовый индекс',
        'description' => '',
        'error_text' => 'ZIP/почтовый индекс должен быть меньше 11 символов!',
      ),
      'firstname~GuestCheckoutFrm' => 
      array (
        'name' => 'Имя',
        'description' => '',
        'error_text' => 'Имя должно содержать от 1 до 32 символов!',
      ),
      'lastname~GuestCheckoutFrm' => 
      array (
        'name' => 'Фамилия',
        'description' => '',
        'error_text' => 'Фамилия должна быть от 1 до 32 символов!',
      ),
      'vat_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Номер плательщика НДС',
        'description' => '',
        'error_text' => 'Код VAT ID должен быть от 8 до 14 символов!',
      ),
      'email~GuestCheckoutFrm' => 
      array (
        'name' => 'Электронная почта',
        'description' => '',
        'error_text' => 'Ваш адрес электронной почты не указан или недействителен!',
      ),
      'telephone~GuestCheckoutFrm' => 
      array (
        'name' => 'Номер телефона',
        'description' => '',
        'error_text' => 'Ваш контактный номер телефона не указан или недействителен.',
      ),
      'loginname~CustomerFrm' => 
      array (
        'name' => 'Имя пользователя',
        'description' => '',
        'error_text' => 'Имя пользователя должно быть от 5 до 65 символов!',
      ),
      'firstname~CustomerFrm' => 
      array (
        'name' => 'Имя',
        'description' => '',
        'error_text' => 'Имя должно быть от 1 до 32 символов!',
      ),
      'lastname~CustomerFrm' => 
      array (
        'name' => 'Фамилия',
        'description' => '',
        'error_text' => 'Фамилия должна быть длиной от 1 до 32 символов!',
      ),
      'email~CustomerFrm' => 
      array (
        'name' => 'Электронная почта',
        'description' => '',
        'error_text' => 'Ваш адрес электронной почты не указан или недействителен!',
      ),
      'telephone~CustomerFrm' => 
      array (
        'name' => 'Номер телефона',
        'description' => '',
        'error_text' => 'Ваш контактный номер телефона не указан или недействителен.',
      ),
      'firstname~RegisterCustomerFrm' => 
      array (
        'name' => 'Имя',
        'description' => '',
        'error_text' => 'Имя должно содержать от 1 до 32 символов!',
      ),
      'lastname~RegisterCustomerFrm' => 
      array (
        'name' => 'Фамилия',
        'description' => '',
        'error_text' => 'Фамилия должна содержать от 1 до 32 символов!',
      ),
      'email~RegisterCustomerFrm' => 
      array (
        'name' => 'Электронная почта',
        'description' => '',
        'error_text' => 'Ваш адрес электронной почты не указан или недействителен!',
      ),
      'telephone~RegisterCustomerFrm' => 
      array (
        'name' => 'Номер телефона',
        'description' => '',
        'error_text' => 'Ваш контактный номер телефона не указан или недействителен.',
      ),
      'country_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Страна',
        'description' => '',
        'error_text' => 'Пожалуйста, выберите страну!',
      ),
      'zone_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Регион/Штат',
        'description' => '',
        'error_text' => 'Пожалуйста, выберите регион/штат!',
      ),
      'address_1~RegisterCustomerFrm' => 
      array (
        'name' => 'Строка адреса 1',
        'description' => '',
        'error_text' => 'Строка адреса 1 должна содержать от 3 до 128 символов!',
      ),
      'address_2~RegisterCustomerFrm' => 
      array (
        'name' => 'Адресная строка 2',
        'description' => '',
        'error_text' => 'Адресная строка 2 должна содержать менее 128 символов!',
      ),
      'city~RegisterCustomerFrm' => 
      array (
        'name' => 'Город',
        'description' => '',
        'error_text' => 'Название города должно содержать от 3 до 128 символов!',
      ),
      'postcode~RegisterCustomerFrm' => 
      array (
        'name' => 'Индекс/Почтовый индекс',
        'description' => '',
        'error_text' => 'Индекс/Почтовый код должен быть меньше 11 символов!',
      ),
      'company~RegisterCustomerFrm' => 
      array (
        'name' => 'Компания',
        'description' => '',
        'error_text' => 'Название компании должно быть меньше 32 символов!',
      ),
      'loginname~RegisterCustomerFrm' => 
      array (
        'name' => 'Имя пользователя',
        'description' => '',
        'error_text' => 'Имя входа должно быть буквенно-цифровым и иметь длину от 5 до 64 символов!',
      ),
      'newsletter~RegisterCustomerFrm' => 
      array (
        'name' => 'Подписаться',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Идентификатор НДС',
        'description' => '',
        'error_text' => 'Код VAT ID должен быть длиной от 8 до 14 символов!',
      ),
    ),
  ),
  'field_group_descriptions' => 
  array (
    'parent_table' => 'field_groups',
    'descriptions_table' => 'field_group_descriptions',
    'descriptions' => 
    array (
      'details' => 
      array (
        'name' => 'Ваши личные данные',
        'description' => '',
      ),
      'address' => 
      array (
        'name' => 'Ваш адрес',
        'description' => '',
      ),
      'login' => 
      array (
        'name' => 'Данные для входа',
        'description' => '',
      ),
      'newsletter' => 
      array (
        'name' => 'Новостная рассылка',
        'description' => '',
      ),
    ),
  ),
);
