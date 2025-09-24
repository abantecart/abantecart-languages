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
        'name' => 'Попереднє замовлення',
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
        'title' => 'Міліметр',
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
        'title' => 'кілограм',
        'unit' => 'кг',
      ),
      'GRAM' => 
      array (
        'title' => 'Грам',
        'unit' => 'g',
      ),
      'PUND' => 
      array (
        'title' => 'Фунт',
        'unit' => 'фунт',
      ),
      'USOU' => 
      array (
        'title' => 'Унція',
        'unit' => 'унція',
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
        'name' => 'Незавершений',
      ),
      'pending' => 
      array (
        'name' => 'В очікуванні',
      ),
      'processing' => 
      array (
        'name' => 'Обробка',
      ),
      'shipped' => 
      array (
        'name' => 'Відправлено',
      ),
      'completed' => 
      array (
        'name' => 'Завершено',
      ),
      'canceled' => 
      array (
        'name' => 'Скасовано',
      ),
      'denied' => 
      array (
        'name' => 'Відхилено',
      ),
      'canceled_reversal' => 
      array (
        'name' => 'Скасоване повернення',
      ),
      'failed' => 
      array (
        'name' => 'Не вдалося',
      ),
      'refunded' => 
      array (
        'name' => 'Повернено',
      ),
      'reversed' => 
      array (
        'name' => 'Скасовано',
      ),
      'chargeback' => 
      array (
        'name' => 'Повернення коштів',
      ),
      'canceled_by_customer' => 
      array (
        'name' => 'Скасовано клієнтом',
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
        'type_name' => 'Опція товару',
      ),
      'download_attribute' => 
      array (
        'type_name' => 'Завантажити атрибут',
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
        'description' => 'Форма адреси покупця',
      ),
      'ContactUsFrm' => 
      array (
        'description' => 'Форма зв’язку з нами',
      ),
      'CustomerFrm' => 
      array (
        'description' => 'Форма даних клієнта',
      ),
      'GuestCheckoutFrm' => 
      array (
        'description' => 'Форма адреси та даних гостя',
      ),
      'RegisterCustomerFrm' => 
      array (
        'description' => 'Форма реєстрації клієнта',
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
        'name' => 'Ім\'я:',
        'description' => '',
        'error_text' => 'Ім’я має бути від 3 до 32 символів!',
      ),
      'email~ContactUsFrm' => 
      array (
        'name' => 'Електронна пошта:',
        'description' => '',
        'error_text' => 'Адреса електронної пошти, здається, недійсна!',
      ),
      'enquiry~ContactUsFrm' => 
      array (
        'name' => 'Запит:',
        'description' => '',
        'error_text' => 'Запит повинен містити від 10 до 3000 символів!',
      ),
      'captcha~ContactUsFrm' => 
      array (
        'name' => 'Введіть код у поле нижче:',
        'description' => '',
        'error_text' => 'Перевірка людини не пройшла! Будь ласка, спробуйте ще раз.',
      ),
      'country_id~AddressFrm' => 
      array (
        'name' => 'Країна',
        'description' => '',
        'error_text' => 'Будь ласка, оберіть країну!',
      ),
      'zone_id~AddressFrm' => 
      array (
        'name' => 'Зона',
        'description' => '',
        'error_text' => 'Будь ласка, виберіть регіон/штат!',
      ),
      'company~AddressFrm' => 
      array (
        'name' => 'Компанія',
        'description' => '',
        'error_text' => 'Назва компанії повинна бути менше 32 символів!',
      ),
      'address_1~AddressFrm' => 
      array (
        'name' => 'Адресний рядок 1',
        'description' => '',
        'error_text' => 'Адресна лінія 1 повинна містити від 3 до 128 символів!',
      ),
      'address_2~AddressFrm' => 
      array (
        'name' => 'Адреса, рядок 2',
        'description' => '',
        'error_text' => 'Рядок адреси 2 має містити менше ніж 128 символів!',
      ),
      'city~AddressFrm' => 
      array (
        'name' => 'Місто',
        'description' => '',
        'error_text' => 'Місто має містити від 3 до 128 символів!',
      ),
      'postcode~AddressFrm' => 
      array (
        'name' => 'Поштовий індекс/Поштовий код',
        'description' => '',
        'error_text' => 'Індекс/Поштовий код повинен містити менше ніж 11 символів!',
      ),
      'firstname~AddressFrm' => 
      array (
        'name' => 'Ім\'я',
        'description' => '',
        'error_text' => 'Ім’я повинно містити від 1 до 32 символів!',
      ),
      'lastname~AddressFrm' => 
      array (
        'name' => 'Прізвище',
        'description' => '',
        'error_text' => 'Прізвище повинно бути від 1 до 32 символів!',
      ),
      'default~AddressFrm' => 
      array (
        'name' => 'Адреса за замовчуванням',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~AddressFrm' => 
      array (
        'name' => 'Ідентифікаційний номер платника ПДВ',
        'description' => '',
        'error_text' => 'Ідентифікаційний код ПДВ повинен містити від 8 до 14 символів!',
      ),
      'country_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Країна',
        'description' => '',
        'error_text' => 'Будь ласка, виберіть країну!',
      ),
      'zone_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Регіон/Штат',
        'description' => '',
        'error_text' => 'Будь ласка, виберіть регіон/штат!',
      ),
      'company~GuestCheckoutFrm' => 
      array (
        'name' => 'Компанія',
        'description' => '',
        'error_text' => 'Назва компанії повинна бути менше ніж 32 символів!',
      ),
      'address_1~GuestCheckoutFrm' => 
      array (
        'name' => 'Адресний рядок 1',
        'description' => '',
        'error_text' => 'Адресний рядок 1 повинен містити від 3 до 128 символів!',
      ),
      'address_2~GuestCheckoutFrm' => 
      array (
        'name' => 'Рядок адреси 2',
        'description' => '',
        'error_text' => 'Address Line 2 має бути менше ніж 128 символів!',
      ),
      'city~GuestCheckoutFrm' => 
      array (
        'name' => 'Місто',
        'description' => '',
        'error_text' => 'Місто повинно містити від 3 до 128 символів!',
      ),
      'postcode~GuestCheckoutFrm' => 
      array (
        'name' => 'Поштовий індекс/Поштовий індекс',
        'description' => '',
        'error_text' => 'Поштовий індекс/Поштовий код повинен бути меншим за 11 символів!',
      ),
      'firstname~GuestCheckoutFrm' => 
      array (
        'name' => 'Ім\'я',
        'description' => '',
        'error_text' => 'Ім\'я має містити від 1 до 32 символів!',
      ),
      'lastname~GuestCheckoutFrm' => 
      array (
        'name' => 'Прізвище',
        'description' => '',
        'error_text' => 'Прізвище повинно бути довжиною від 1 до 32 символів!',
      ),
      'vat_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Ідентифікаційний номер платника ПДВ',
        'description' => '',
        'error_text' => 'Код ПДВ повинен містити від 8 до 14 символів!',
      ),
      'email~GuestCheckoutFrm' => 
      array (
        'name' => 'Електронна пошта',
        'description' => '',
        'error_text' => 'Ваша електронна адреса не вказана або недійсна!',
      ),
      'telephone~GuestCheckoutFrm' => 
      array (
        'name' => 'Телефонний номер',
        'description' => '',
        'error_text' => 'Ваш контактний номер телефону не вказано або недійсний.',
      ),
      'loginname~CustomerFrm' => 
      array (
        'name' => 'Ім\'я входу',
        'description' => '',
        'error_text' => 'Ім\'я користувача повинно містити від 5 до 65 символів!',
      ),
      'firstname~CustomerFrm' => 
      array (
        'name' => 'Ім’я',
        'description' => '',
        'error_text' => 'Ім’я має бути від 1 до 32 символів!',
      ),
      'lastname~CustomerFrm' => 
      array (
        'name' => 'Прізвище',
        'description' => '',
        'error_text' => 'Прізвище повинно містити від 1 до 32 символів!',
      ),
      'email~CustomerFrm' => 
      array (
        'name' => 'Електронна пошта',
        'description' => '',
        'error_text' => 'Ваша електронна пошта не вказана або недійсна!',
      ),
      'telephone~CustomerFrm' => 
      array (
        'name' => 'Номер телефону',
        'description' => '',
        'error_text' => 'Ваш контактний номер телефону не вказано або він недійсний.',
      ),
      'firstname~RegisterCustomerFrm' => 
      array (
        'name' => 'Ім’я',
        'description' => '',
        'error_text' => 'Ім’я повинно містити від 1 до 32 символів!',
      ),
      'lastname~RegisterCustomerFrm' => 
      array (
        'name' => 'Прізвище',
        'description' => '',
        'error_text' => 'Прізвище має містити від 1 до 32 символів!',
      ),
      'email~RegisterCustomerFrm' => 
      array (
        'name' => 'Електронна пошта',
        'description' => '',
        'error_text' => 'Ваша електронна пошта не вказана або недійсна!',
      ),
      'telephone~RegisterCustomerFrm' => 
      array (
        'name' => 'Номер телефону',
        'description' => '',
        'error_text' => 'Ваш контактний номер телефону не вказано або він недійсний.',
      ),
      'country_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Країна',
        'description' => '',
        'error_text' => 'Будь ласка, виберіть країну!',
      ),
      'zone_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Регіон/Штат',
        'description' => '',
        'error_text' => 'Будь ласка, виберіть регіон/штат!',
      ),
      'address_1~RegisterCustomerFrm' => 
      array (
        'name' => 'Адресний рядок 1',
        'description' => '',
        'error_text' => 'Рядок адреси 1 повинен бути довжиною від 3 до 128 символів!',
      ),
      'address_2~RegisterCustomerFrm' => 
      array (
        'name' => 'Адресний рядок 2',
        'description' => '',
        'error_text' => 'Рядок адреси 2 має бути менше ніж 128 символів!',
      ),
      'city~RegisterCustomerFrm' => 
      array (
        'name' => 'місто',
        'description' => '',
        'error_text' => 'Назва міста повинна містити від 3 до 128 символів!',
      ),
      'postcode~RegisterCustomerFrm' => 
      array (
        'name' => 'Поштовий індекс/Поштовий індекс',
        'description' => '',
        'error_text' => 'ZIP-код/поштовий індекс повинен бути менше ніж 11 символів!',
      ),
      'company~RegisterCustomerFrm' => 
      array (
        'name' => 'Компанія',
        'description' => '',
        'error_text' => 'Назва компанії повинна містити менше ніж 32 символи!',
      ),
      'loginname~RegisterCustomerFrm' => 
      array (
        'name' => 'Ім\'я користувача',
        'description' => '',
        'error_text' => 'Ім’я входу повинно складатися лише з букв і цифр та бути довжиною від 5 до 64 символів!',
      ),
      'newsletter~RegisterCustomerFrm' => 
      array (
        'name' => 'Підписатися',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Номер платника ПДВ',
        'description' => '',
        'error_text' => 'Код платника ПДВ повинен містити від 8 до 14 символів!',
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
        'name' => 'Ваші особисті дані',
        'description' => '',
      ),
      'address' => 
      array (
        'name' => 'Ваша адреса',
        'description' => '',
      ),
      'login' => 
      array (
        'name' => 'Деталі входу',
        'description' => '',
      ),
      'newsletter' => 
      array (
        'name' => 'Розсилка',
        'description' => '',
      ),
    ),
  ),
);
