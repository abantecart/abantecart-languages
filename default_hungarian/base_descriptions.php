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
        'name' => 'Előrendelés',
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
        'title' => 'Centiméter',
        'unit' => 'cm',
      ),
      'MMET' => 
      array (
        'title' => 'milliméter',
        'unit' => 'mm',
      ),
      'INCH' => 
      array (
        'title' => 'hüvelyk',
        'unit' => 'ban',
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
        'title' => 'kilogramm',
        'unit' => 'kg',
      ),
      'GRAM' => 
      array (
        'title' => 'gramm',
        'unit' => 'g',
      ),
      'PUND' => 
      array (
        'title' => 'Font',
        'unit' => 'font',
      ),
      'USOU' => 
      array (
        'title' => 'Uncia',
        'unit' => 'uncia',
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
        'name' => 'Hiányos',
      ),
      'pending' => 
      array (
        'name' => 'Függőben',
      ),
      'processing' => 
      array (
        'name' => 'Feldolgozás',
      ),
      'shipped' => 
      array (
        'name' => 'Szállítva',
      ),
      'completed' => 
      array (
        'name' => 'Teljesítve',
      ),
      'canceled' => 
      array (
        'name' => 'Lemondva',
      ),
      'denied' => 
      array (
        'name' => 'Elutasítva',
      ),
      'canceled_reversal' => 
      array (
        'name' => 'Törölt visszafordítás',
      ),
      'failed' => 
      array (
        'name' => 'Sikertelen',
      ),
      'refunded' => 
      array (
        'name' => 'Visszatérítve',
      ),
      'reversed' => 
      array (
        'name' => 'Megfordított',
      ),
      'chargeback' => 
      array (
        'name' => 'Visszakövetelés',
      ),
      'canceled_by_customer' => 
      array (
        'name' => 'Vevő által törölve',
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
        'type_name' => 'Termék opció',
      ),
      'download_attribute' => 
      array (
        'type_name' => 'Letöltési attribútum',
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
        'description' => 'Vevői cím űrlap',
      ),
      'ContactUsFrm' => 
      array (
        'description' => 'Kapcsolatfelvételi űrlap',
      ),
      'CustomerFrm' => 
      array (
        'description' => 'Vevői adatok űrlap',
      ),
      'GuestCheckoutFrm' => 
      array (
        'description' => 'Vendég Cím és Részletek Űrlap',
      ),
      'RegisterCustomerFrm' => 
      array (
        'description' => 'Vásárlói regisztrációs űrlap',
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
        'name' => 'Keresztnév:',
        'description' => '',
        'error_text' => 'A névnek 3 és 32 karakter között kell lennie!',
      ),
      'email~ContactUsFrm' => 
      array (
        'name' => 'E-mail:',
        'description' => '',
        'error_text' => 'Az e-mail cím nem tűnik érvényesnek!',
      ),
      'enquiry~ContactUsFrm' => 
      array (
        'name' => 'Érdeklődés:',
        'description' => '',
        'error_text' => 'Az érdeklődésnek 10 és 3000 karakter között kell lennie!',
      ),
      'captcha~ContactUsFrm' => 
      array (
        'name' => 'Írja be a kódot az alábbi mezőbe:',
        'description' => '',
        'error_text' => 'Az emberi ellenőrzés sikertelen volt! Kérjük, próbálja újra.',
      ),
      'country_id~AddressFrm' => 
      array (
        'name' => 'Ország',
        'description' => '',
        'error_text' => 'Kérjük, válasszon országot!',
      ),
      'zone_id~AddressFrm' => 
      array (
        'name' => 'Zóna',
        'description' => '',
        'error_text' => 'Kérjük, válasszon egy régiót/államot!',
      ),
      'company~AddressFrm' => 
      array (
        'name' => 'Cég',
        'description' => '',
        'error_text' => 'A cégnév kevesebb, mint 32 karakter lehet!',
      ),
      'address_1~AddressFrm' => 
      array (
        'name' => 'Cím 1. sor',
        'description' => '',
        'error_text' => 'A 1. cím sor hosszának 3 és 128 karakter között kell lennie!',
      ),
      'address_2~AddressFrm' => 
      array (
        'name' => 'Cím 2. sor',
        'description' => '',
        'error_text' => 'A Cím 2. sor nem haladhatja meg a 128 karaktert!',
      ),
      'city~AddressFrm' => 
      array (
        'name' => 'Város',
        'description' => '',
        'error_text' => 'A városnak 3 és 128 karakter között kell lennie!',
      ),
      'postcode~AddressFrm' => 
      array (
        'name' => 'Irányítószám/Postai irányítószám',
        'description' => '',
        'error_text' => 'Az irányítószám/ZIP-kód kevesebbnek kell lennie 11 karakternél!',
      ),
      'firstname~AddressFrm' => 
      array (
        'name' => 'Keresztnév',
        'description' => '',
        'error_text' => 'A keresztnévnek 1 és 32 karakter között kell lennie!',
      ),
      'lastname~AddressFrm' => 
      array (
        'name' => 'Vezetéknév',
        'description' => '',
        'error_text' => 'A vezetéknévnek 1 és 32 karakter hosszúnak kell lennie!',
      ),
      'default~AddressFrm' => 
      array (
        'name' => 'Alapértelmezett cím',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~AddressFrm' => 
      array (
        'name' => 'ÁFA-azonosító',
        'description' => '',
        'error_text' => 'Az ÁFA-azonosító kódnak 8 és 14 karakter között kell lennie!',
      ),
      'country_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Ország',
        'description' => '',
        'error_text' => 'Kérjük, válasszon egy országot!',
      ),
      'zone_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Régió/Állam',
        'description' => '',
        'error_text' => 'Kérjük, válasszon egy régiót/államot!',
      ),
      'company~GuestCheckoutFrm' => 
      array (
        'name' => 'Cég',
        'description' => '',
        'error_text' => 'A cégnévnek kevesebbnek kell lennie, mint 32 karakter!',
      ),
      'address_1~GuestCheckoutFrm' => 
      array (
        'name' => 'Cím 1. sor',
        'description' => '',
        'error_text' => 'A Cím 1. sorának 3 és 128 karakter között kell lennie!',
      ),
      'address_2~GuestCheckoutFrm' => 
      array (
        'name' => 'Cím sor 2',
        'description' => '',
        'error_text' => 'A Cím 2. sora kevesebb, mint 128 karakter kell, hogy legyen!',
      ),
      'city~GuestCheckoutFrm' => 
      array (
        'name' => 'Város',
        'description' => '',
        'error_text' => 'A városnak 3 és 128 karakter között kell lennie!',
      ),
      'postcode~GuestCheckoutFrm' => 
      array (
        'name' => 'Irányítószám/Postai irányítószám',
        'description' => '',
        'error_text' => 'Irányítószám/Postai irányítószám hossza legyen kevesebb, mint 11 karakter!',
      ),
      'firstname~GuestCheckoutFrm' => 
      array (
        'name' => 'Keresztnév',
        'description' => '',
        'error_text' => 'A keresztnévnek 1 és 32 karakter hosszúnak kell lennie!',
      ),
      'lastname~GuestCheckoutFrm' => 
      array (
        'name' => 'Vezetéknév',
        'description' => '',
        'error_text' => 'A vezetéknévnek 1 és 32 karakter hosszúnak kell lennie!',
      ),
      'vat_id~GuestCheckoutFrm' => 
      array (
        'name' => 'ÁFA-szám',
        'description' => '',
        'error_text' => 'Az ÁFA-azonosító kódnak 8 és 14 karakter között kell lennie!',
      ),
      'email~GuestCheckoutFrm' => 
      array (
        'name' => 'E-mail',
        'description' => '',
        'error_text' => 'Az e-mail címe nincs megadva vagy érvénytelen!',
      ),
      'telephone~GuestCheckoutFrm' => 
      array (
        'name' => 'Telefonszám',
        'description' => '',
        'error_text' => 'Az Ön kapcsolattartó telefonszáma nincs megadva vagy érvénytelen.',
      ),
      'loginname~CustomerFrm' => 
      array (
        'name' => 'Bejelentkezési név',
        'description' => '',
        'error_text' => 'Bejelentkezési névnek 5 és 65 karakter között kell lennie!',
      ),
      'firstname~CustomerFrm' => 
      array (
        'name' => 'Keresztnév',
        'description' => '',
        'error_text' => 'A keresztnévnek 1 és 32 karakter hosszúnak kell lennie!',
      ),
      'lastname~CustomerFrm' => 
      array (
        'name' => 'Vezetéknév',
        'description' => '',
        'error_text' => 'A vezetéknévnek 1 és 32 karakter között kell lennie!',
      ),
      'email~CustomerFrm' => 
      array (
        'name' => 'E-mail',
        'description' => '',
        'error_text' => 'Az ön e-mail címe nincs megadva vagy érvénytelen!',
      ),
      'telephone~CustomerFrm' => 
      array (
        'name' => 'Telefonszám',
        'description' => '',
        'error_text' => 'Az Ön kapcsolati telefonszáma nincs megadva vagy érvénytelen.',
      ),
      'firstname~RegisterCustomerFrm' => 
      array (
        'name' => 'Keresztnév',
        'description' => '',
        'error_text' => 'A keresztnévnek 1 és 32 karakter hosszúnak kell lennie!',
      ),
      'lastname~RegisterCustomerFrm' => 
      array (
        'name' => 'Vezetéknév',
        'description' => '',
        'error_text' => 'A vezetéknévnek 1 és 32 karakter között kell lennie!',
      ),
      'email~RegisterCustomerFrm' => 
      array (
        'name' => 'E-mail',
        'description' => '',
        'error_text' => 'Az Ön e-mail címe nincs megadva vagy érvénytelen!',
      ),
      'telephone~RegisterCustomerFrm' => 
      array (
        'name' => 'Telefonszám',
        'description' => '',
        'error_text' => 'Az Ön kapcsolattartó telefonszáma nincs megadva vagy érvénytelen.',
      ),
      'country_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Ország',
        'description' => '',
        'error_text' => 'Kérjük, válasszon egy országot!',
      ),
      'zone_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Régió/Állam',
        'description' => '',
        'error_text' => 'Kérjük, válasszon egy régiót/államot!',
      ),
      'address_1~RegisterCustomerFrm' => 
      array (
        'name' => 'Cím 1. sor',
        'description' => '',
        'error_text' => 'A cím 1. sorának hossza 3 és 128 karakter között kell lennie!',
      ),
      'address_2~RegisterCustomerFrm' => 
      array (
        'name' => 'Címvonal 2',
        'description' => '',
        'error_text' => 'A cím 2. sorának kevesebb, mint 128 karakterből kell állnia!',
      ),
      'city~RegisterCustomerFrm' => 
      array (
        'name' => 'Város',
        'description' => '',
        'error_text' => 'A városnak 3 és 128 karakter között kell lennie!',
      ),
      'postcode~RegisterCustomerFrm' => 
      array (
        'name' => 'Irányítószám/postai irányítószám',
        'description' => '',
        'error_text' => 'Irányítószám/Postai irányítószámnak kevesebbnek kell lennie, mint 11 karakter!',
      ),
      'company~RegisterCustomerFrm' => 
      array (
        'name' => 'Cég',
        'description' => '',
        'error_text' => 'A cégnév nem lehet hosszabb 32 karakternél!',
      ),
      'loginname~RegisterCustomerFrm' => 
      array (
        'name' => 'Bejelentkezési név',
        'description' => '',
        'error_text' => 'A bejelentkezési név csak alfanumerikus lehet, és 5 és 64 karakter között kell lennie!',
      ),
      'newsletter~RegisterCustomerFrm' => 
      array (
        'name' => 'Feliratkozás',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~RegisterCustomerFrm' => 
      array (
        'name' => 'ÁFA-azonosító szám',
        'description' => '',
        'error_text' => 'Az ÁFA-azonosító kódnak 8 és 14 karakter között kell lennie!',
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
        'name' => 'Az Ön személyes adatai',
        'description' => '',
      ),
      'address' => 
      array (
        'name' => 'Az Ön címe',
        'description' => '',
      ),
      'login' => 
      array (
        'name' => 'Bejelentkezési adatok',
        'description' => '',
      ),
      'newsletter' => 
      array (
        'name' => 'Hírlevél',
        'description' => '',
      ),
    ),
  ),
);
