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
        'name' => 'Przedsprzedaż',
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
        'title' => 'Centymetr',
        'unit' => 'cm',
      ),
      'MMET' => 
      array (
        'title' => 'Milimetr',
        'unit' => 'mm',
      ),
      'INCH' => 
      array (
        'title' => 'Cal',
        'unit' => 'w',
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
        'title' => 'Kilogram',
        'unit' => 'kg',
      ),
      'GRAM' => 
      array (
        'title' => 'Gram',
        'unit' => 'g',
      ),
      'PUND' => 
      array (
        'title' => 'Funt',
        'unit' => 'funt',
      ),
      'USOU' => 
      array (
        'title' => 'Uncja',
        'unit' => 'uncja',
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
        'name' => 'Niekompletny',
      ),
      'pending' => 
      array (
        'name' => 'Oczekujące',
      ),
      'processing' => 
      array (
        'name' => 'Przetwarzanie',
      ),
      'shipped' => 
      array (
        'name' => 'Wysłano',
      ),
      'completed' => 
      array (
        'name' => 'Zakończono',
      ),
      'canceled' => 
      array (
        'name' => 'Anulowane',
      ),
      'denied' => 
      array (
        'name' => 'Odrzucono',
      ),
      'canceled_reversal' => 
      array (
        'name' => 'Anulowane odwrócenie',
      ),
      'failed' => 
      array (
        'name' => 'Niepowodzenie',
      ),
      'refunded' => 
      array (
        'name' => 'Zwrócono',
      ),
      'reversed' => 
      array (
        'name' => 'Odwrócony',
      ),
      'chargeback' => 
      array (
        'name' => 'Obciążenie zwrotne',
      ),
      'canceled_by_customer' => 
      array (
        'name' => 'Anulowane przez klienta',
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
        'type_name' => 'Opcja produktu',
      ),
      'download_attribute' => 
      array (
        'type_name' => 'Atrybut pobierania',
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
        'description' => 'Formularz adresu klienta',
      ),
      'ContactUsFrm' => 
      array (
        'description' => 'Formularz kontaktowy',
      ),
      'CustomerFrm' => 
      array (
        'description' => 'Formularz danych klienta',
      ),
      'GuestCheckoutFrm' => 
      array (
        'description' => 'Formularz adresu i danych gościa',
      ),
      'RegisterCustomerFrm' => 
      array (
        'description' => 'Formularz rejestracji klienta',
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
        'name' => 'Imię:',
        'description' => '',
        'error_text' => 'Nazwa musi mieć od 3 do 32 znaków!',
      ),
      'email~ContactUsFrm' => 
      array (
        'name' => 'E-mail:',
        'description' => '',
        'error_text' => 'Adres e-mail nie wydaje się być prawidłowy!',
      ),
      'enquiry~ContactUsFrm' => 
      array (
        'name' => 'Zapytanie:',
        'description' => '',
        'error_text' => 'Zapytanie musi mieć od 10 do 3000 znaków!',
      ),
      'captcha~ContactUsFrm' => 
      array (
        'name' => 'Wprowadź kod w poniższym polu:',
        'description' => '',
        'error_text' => 'Weryfikacja człowieka nie powiodła się! Proszę, spróbuj agan.',
      ),
      'country_id~AddressFrm' => 
      array (
        'name' => 'Kraj',
        'description' => '',
        'error_text' => 'Proszę wybrać kraj!',
      ),
      'zone_id~AddressFrm' => 
      array (
        'name' => 'Strefa',
        'description' => '',
        'error_text' => 'Proszę wybrać region/województwo!',
      ),
      'company~AddressFrm' => 
      array (
        'name' => 'Firma',
        'description' => '',
        'error_text' => 'Nazwa firmy musi zawierać mniej niż 32 znaków!',
      ),
      'address_1~AddressFrm' => 
      array (
        'name' => 'Wiersz adresu 1',
        'description' => '',
        'error_text' => 'Linia adresu 1 musi mieć od 3 do 128 znaków!',
      ),
      'address_2~AddressFrm' => 
      array (
        'name' => 'Linia adresu 2',
        'description' => '',
        'error_text' => 'Linia adresu 2 musi mieć mniej niż 128 znaków!',
      ),
      'city~AddressFrm' => 
      array (
        'name' => 'Miasto',
        'description' => '',
        'error_text' => 'Miasto musi mieć od 3 do 128 znaków!',
      ),
      'postcode~AddressFrm' => 
      array (
        'name' => 'Kod pocztowy',
        'description' => '',
        'error_text' => 'Kod pocztowy/Kod pocztowy musi mieć mniej niż 11 znaków!',
      ),
      'firstname~AddressFrm' => 
      array (
        'name' => 'Imię',
        'description' => '',
        'error_text' => 'Imię musi mieć od 1 do 32 znaków!',
      ),
      'lastname~AddressFrm' => 
      array (
        'name' => 'Nazwisko',
        'description' => '',
        'error_text' => 'Nazwisko musi mieć od 1 do 32 znaków!',
      ),
      'default~AddressFrm' => 
      array (
        'name' => 'Domyślny adres',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~AddressFrm' => 
      array (
        'name' => 'NIP',
        'description' => '',
        'error_text' => 'Kod identyfikacyjny VAT musi mieć od 8 do 14 znaków!',
      ),
      'country_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Kraj',
        'description' => '',
        'error_text' => 'Proszę wybrać kraj!',
      ),
      'zone_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Region/Stan',
        'description' => '',
        'error_text' => 'Proszę wybrać region/stan!',
      ),
      'company~GuestCheckoutFrm' => 
      array (
        'name' => 'Firma',
        'description' => '',
        'error_text' => 'Nazwa firmy musi mieć mniej niż 32 znaki!',
      ),
      'address_1~GuestCheckoutFrm' => 
      array (
        'name' => 'Linia adresu 1',
        'description' => '',
        'error_text' => 'Linia adresu 1 musi zawierać od 3 do 128 znaków!',
      ),
      'address_2~GuestCheckoutFrm' => 
      array (
        'name' => 'Linia adresu 2',
        'description' => '',
        'error_text' => 'Linia adresu 2 musi mieć mniej niż 128 znaków!',
      ),
      'city~GuestCheckoutFrm' => 
      array (
        'name' => 'Miasto',
        'description' => '',
        'error_text' => 'Miasto musi zawierać od 3 do 128 znaków!',
      ),
      'postcode~GuestCheckoutFrm' => 
      array (
        'name' => 'Kod pocztowy/Kod pocztowy',
        'description' => '',
        'error_text' => 'Kod pocztowy/Kod pocztowy musi mieć mniej niż 11 znaków!',
      ),
      'firstname~GuestCheckoutFrm' => 
      array (
        'name' => 'Imię',
        'description' => '',
        'error_text' => 'Imię musi mieć od 1 do 32 znaków!',
      ),
      'lastname~GuestCheckoutFrm' => 
      array (
        'name' => 'Nazwisko',
        'description' => '',
        'error_text' => 'Nazwisko musi mieć od 1 do 32 znaków!',
      ),
      'vat_id~GuestCheckoutFrm' => 
      array (
        'name' => 'NIP',
        'description' => '',
        'error_text' => 'Kod identyfikacyjny VAT musi mieć od 8 do 14 znaków!',
      ),
      'email~GuestCheckoutFrm' => 
      array (
        'name' => 'E-mail',
        'description' => '',
        'error_text' => 'Twój e-mail nie został podany lub jest nieprawidłowy!',
      ),
      'telephone~GuestCheckoutFrm' => 
      array (
        'name' => 'Numer telefonu',
        'description' => '',
        'error_text' => 'Twój numer telefonu kontaktowego nie został podany lub jest nieprawidłowy.',
      ),
      'loginname~CustomerFrm' => 
      array (
        'name' => 'Nazwa logowania',
        'description' => '',
        'error_text' => 'Nazwa logowania musi mieć od 5 do 65 znaków!',
      ),
      'firstname~CustomerFrm' => 
      array (
        'name' => 'Imię',
        'description' => '',
        'error_text' => 'Imię musi mieć od 1 do 32 znaków!',
      ),
      'lastname~CustomerFrm' => 
      array (
        'name' => 'Nazwisko',
        'description' => '',
        'error_text' => 'Nazwisko musi mieć od 1 do 32 znaków!',
      ),
      'email~CustomerFrm' => 
      array (
        'name' => 'E-mail',
        'description' => '',
        'error_text' => 'Twój adres e-mail nie został podany lub jest nieprawidłowy!',
      ),
      'telephone~CustomerFrm' => 
      array (
        'name' => 'Numer telefonu',
        'description' => '',
        'error_text' => 'Twój numer telefonu kontaktowego nie został podany lub jest nieprawidłowy.',
      ),
      'firstname~RegisterCustomerFrm' => 
      array (
        'name' => 'Imię',
        'description' => '',
        'error_text' => 'Imię musi zawierać od 1 do 32 znaków!',
      ),
      'lastname~RegisterCustomerFrm' => 
      array (
        'name' => 'Nazwisko',
        'description' => '',
        'error_text' => 'Nazwisko musi mieć od 1 do 32 znaków!',
      ),
      'email~RegisterCustomerFrm' => 
      array (
        'name' => 'E-mail',
        'description' => '',
        'error_text' => 'Twój adres e-mail nie został podany lub jest nieprawidłowy!',
      ),
      'telephone~RegisterCustomerFrm' => 
      array (
        'name' => 'Numer telefonu',
        'description' => '',
        'error_text' => 'Twój numer telefonu kontaktowego nie został podany lub jest nieprawidłowy.',
      ),
      'country_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Kraj',
        'description' => '',
        'error_text' => 'Proszę wybrać kraj!',
      ),
      'zone_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Region/Stan',
        'description' => '',
        'error_text' => 'Proszę wybrać region/stan!',
      ),
      'address_1~RegisterCustomerFrm' => 
      array (
        'name' => 'Linia adresu 1',
        'description' => '',
        'error_text' => 'Linia adresu 1 musi mieć od 3 do 128 znaków!',
      ),
      'address_2~RegisterCustomerFrm' => 
      array (
        'name' => 'Linia adresu 2',
        'description' => '',
        'error_text' => 'Druga linia adresu musi mieć mniej niż 128 znaków!',
      ),
      'city~RegisterCustomerFrm' => 
      array (
        'name' => 'Miasto',
        'description' => '',
        'error_text' => 'Miasto musi mieć od 3 do 128 znaków!',
      ),
      'postcode~RegisterCustomerFrm' => 
      array (
        'name' => 'Kod pocztowy/Kod pocztowy',
        'description' => '',
        'error_text' => 'Kod pocztowy musi mieć mniej niż 11 znaków!',
      ),
      'company~RegisterCustomerFrm' => 
      array (
        'name' => 'Firma',
        'description' => '',
        'error_text' => 'Nazwa firmy musi mieć mniej niż 32 znaki!',
      ),
      'loginname~RegisterCustomerFrm' => 
      array (
        'name' => 'Nazwa logowania',
        'description' => '',
        'error_text' => 'Nazwa logowania musi być wyłącznie alfanumeryczna i zawierać od 5 do 64 znaków!',
      ),
      'newsletter~RegisterCustomerFrm' => 
      array (
        'name' => 'Subskrybuj',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Numer identyfikacji podatkowej VAT',
        'description' => '',
        'error_text' => 'Kod identyfikacyjny VAT musi mieć od 8 do 14 znaków!',
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
        'name' => 'Twoje dane osobowe',
        'description' => '',
      ),
      'address' => 
      array (
        'name' => 'Twój adres',
        'description' => '',
      ),
      'login' => 
      array (
        'name' => 'Dane logowania',
        'description' => '',
      ),
      'newsletter' => 
      array (
        'name' => 'Biuletyn',
        'description' => '',
      ),
    ),
  ),
);
