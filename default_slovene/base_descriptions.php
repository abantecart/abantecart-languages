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
        'name' => 'Prednaročilo',
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
        'title' => 'centimeter',
        'unit' => 'cm',
      ),
      'MMET' => 
      array (
        'title' => 'milimeter',
        'unit' => 'mm',
      ),
      'INCH' => 
      array (
        'title' => 'palec',
        'unit' => 'v',
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
        'unit' => 'lb',
      ),
      'USOU' => 
      array (
        'title' => 'Unca',
        'unit' => 'unca',
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
        'name' => 'Nepopolno',
      ),
      'pending' => 
      array (
        'name' => 'Čakajoče',
      ),
      'processing' => 
      array (
        'name' => 'Obdelava',
      ),
      'shipped' => 
      array (
        'name' => 'Poslano',
      ),
      'completed' => 
      array (
        'name' => 'Dokončena',
      ),
      'canceled' => 
      array (
        'name' => 'Preklicano',
      ),
      'denied' => 
      array (
        'name' => 'Zavrnjeno',
      ),
      'canceled_reversal' => 
      array (
        'name' => 'Preklicana razveljavitev',
      ),
      'failed' => 
      array (
        'name' => 'Neuspešno',
      ),
      'refunded' => 
      array (
        'name' => 'Povrnjeno',
      ),
      'reversed' => 
      array (
        'name' => 'Stornirano',
      ),
      'chargeback' => 
      array (
        'name' => 'Povračilo plačila',
      ),
      'canceled_by_customer' => 
      array (
        'name' => 'Preklicano s strani kupca',
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
        'type_name' => 'Izbira izdelka',
      ),
      'download_attribute' => 
      array (
        'type_name' => 'Atribut za prenos',
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
        'description' => 'Obrazec za naslov kupca',
      ),
      'ContactUsFrm' => 
      array (
        'description' => 'Obrazec za stik z nami',
      ),
      'CustomerFrm' => 
      array (
        'description' => 'Obrazec s podatki stranke',
      ),
      'GuestCheckoutFrm' => 
      array (
        'description' => 'Obrazec za naslov in podatke gosta',
      ),
      'RegisterCustomerFrm' => 
      array (
        'description' => 'Obrazec za registracijo kupca',
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
        'name' => 'Ime:',
        'description' => '',
        'error_text' => 'Ime mora biti med 3 in 32 znaki!',
      ),
      'email~ContactUsFrm' => 
      array (
        'name' => 'E-pošta:',
        'description' => '',
        'error_text' => 'E-poštni naslov se ne zdi veljaven!',
      ),
      'enquiry~ContactUsFrm' => 
      array (
        'name' => 'Povpraševanje:',
        'description' => '',
        'error_text' => 'Povpraševanje mora vsebovati od 10 do 3000 znakov!',
      ),
      'captcha~ContactUsFrm' => 
      array (
        'name' => 'Vnesite kodo v spodnje polje:',
        'description' => '',
        'error_text' => 'Človeško preverjanje ni uspelo! Prosimo, poskusite znova.',
      ),
      'country_id~AddressFrm' => 
      array (
        'name' => 'Država',
        'description' => '',
        'error_text' => 'Prosimo, izberite državo!',
      ),
      'zone_id~AddressFrm' => 
      array (
        'name' => 'Cona',
        'description' => '',
        'error_text' => 'Prosimo, izberite regijo/državo!',
      ),
      'company~AddressFrm' => 
      array (
        'name' => 'Podjetje',
        'description' => '',
        'error_text' => 'Ime podjetja mora biti krajše od 32 znakov!',
      ),
      'address_1~AddressFrm' => 
      array (
        'name' => 'Naslovna vrstica 1',
        'description' => '',
        'error_text' => 'Vrstica naslova 1 mora biti dolga med 3 in 128 znaki!',
      ),
      'address_2~AddressFrm' => 
      array (
        'name' => 'Naslovna vrstica 2',
        'description' => '',
        'error_text' => 'Vrstica naslova 2 mora imeti manj kot 128 znakov!',
      ),
      'city~AddressFrm' => 
      array (
        'name' => 'Mesto',
        'description' => '',
        'error_text' => 'Mesto mora biti med 3 in 128 znaki!',
      ),
      'postcode~AddressFrm' => 
      array (
        'name' => 'Poštna številka/Poštna koda',
        'description' => '',
        'error_text' => 'Poštna številka/koda mora imeti manj kot 11 znakov!',
      ),
      'firstname~AddressFrm' => 
      array (
        'name' => 'Ime',
        'description' => '',
        'error_text' => 'Ime mora imeti med 1 in 32 znakov!',
      ),
      'lastname~AddressFrm' => 
      array (
        'name' => 'Priimek',
        'description' => '',
        'error_text' => 'Priimek mora biti med 1 in 32 znaki!',
      ),
      'default~AddressFrm' => 
      array (
        'name' => 'Privzeti naslov',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~AddressFrm' => 
      array (
        'name' => 'ID za DDV',
        'description' => '',
        'error_text' => 'Koda ID za DDV mora biti dolga med 8 in 14 znaki!',
      ),
      'country_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Država',
        'description' => '',
        'error_text' => 'Prosimo, izberite državo!',
      ),
      'zone_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Regija/Država',
        'description' => '',
        'error_text' => 'Prosimo, izberite regijo/državo!',
      ),
      'company~GuestCheckoutFrm' => 
      array (
        'name' => 'Podjetje',
        'description' => '',
        'error_text' => 'Ime podjetja mora biti manj kot 32 znakov!',
      ),
      'address_1~GuestCheckoutFrm' => 
      array (
        'name' => 'Naslovna vrstica 1',
        'description' => '',
        'error_text' => 'Vrstica naslova 1 mora biti dolga med 3 in 128 znaki!',
      ),
      'address_2~GuestCheckoutFrm' => 
      array (
        'name' => 'Naslovna vrstica 2',
        'description' => '',
        'error_text' => 'Druga vrstica naslova mora biti krajša od 128 znakov!',
      ),
      'city~GuestCheckoutFrm' => 
      array (
        'name' => 'Mesto',
        'description' => '',
        'error_text' => 'Mesto mora imeti med 3 in 128 znakov!',
      ),
      'postcode~GuestCheckoutFrm' => 
      array (
        'name' => 'ZIP/Poštna številka',
        'description' => '',
        'error_text' => 'PSČ/poštna številka mora imeti manj kot 11 znakov!',
      ),
      'firstname~GuestCheckoutFrm' => 
      array (
        'name' => 'Ime',
        'description' => '',
        'error_text' => 'Ime mora imeti med 1 in 32 znakov!',
      ),
      'lastname~GuestCheckoutFrm' => 
      array (
        'name' => 'Priimek',
        'description' => '',
        'error_text' => 'Priimek mora biti med 1 in 32 znaki!',
      ),
      'vat_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Davčna številka za DDV',
        'description' => '',
        'error_text' => 'Identifikacijska številka za DDV mora imeti od 8 do 14 znakov!',
      ),
      'email~GuestCheckoutFrm' => 
      array (
        'name' => 'E-pošta',
        'description' => '',
        'error_text' => 'Vaš e-poštni naslov ni podan ali je neveljaven!',
      ),
      'telephone~GuestCheckoutFrm' => 
      array (
        'name' => 'Telefonska številka',
        'description' => '',
        'error_text' => 'Vaša kontaktna telefonska številka ni podana ali je neveljavna.',
      ),
      'loginname~CustomerFrm' => 
      array (
        'name' => 'Uporabniško ime',
        'description' => '',
        'error_text' => 'Uporabniško ime mora biti med 5 in 65 znaki!',
      ),
      'firstname~CustomerFrm' => 
      array (
        'name' => 'Ime',
        'description' => '',
        'error_text' => 'Ime mora biti dolgo med 1 in 32 znaki!',
      ),
      'lastname~CustomerFrm' => 
      array (
        'name' => 'Priimek',
        'description' => '',
        'error_text' => 'Priimek mora biti med 1 in 32 znaki!',
      ),
      'email~CustomerFrm' => 
      array (
        'name' => 'E-pošta',
        'description' => '',
        'error_text' => 'Vaš e-poštni naslov ni naveden ali je neveljaven!',
      ),
      'telephone~CustomerFrm' => 
      array (
        'name' => 'Telefonska številka',
        'description' => '',
        'error_text' => 'Vaša kontaktna telefonska številka ni podana ali je neveljavna.',
      ),
      'firstname~RegisterCustomerFrm' => 
      array (
        'name' => 'Ime',
        'description' => '',
        'error_text' => 'Ime mora imeti med 1 in 32 znakov!',
      ),
      'lastname~RegisterCustomerFrm' => 
      array (
        'name' => 'Priimek',
        'description' => '',
        'error_text' => 'Priimek mora biti med 1 in 32 znaki!',
      ),
      'email~RegisterCustomerFrm' => 
      array (
        'name' => 'E-pošta',
        'description' => '',
        'error_text' => 'Vaš e-poštni naslov ni naveden ali je neveljaven!',
      ),
      'telephone~RegisterCustomerFrm' => 
      array (
        'name' => 'Telefonska številka',
        'description' => '',
        'error_text' => 'Vaša kontaktna telefonska številka ni podana ali je neveljavna.',
      ),
      'country_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Država',
        'description' => '',
        'error_text' => 'Prosimo, izberite državo!',
      ),
      'zone_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Regija/Država',
        'description' => '',
        'error_text' => 'Prosimo, izberite regijo/državo!',
      ),
      'address_1~RegisterCustomerFrm' => 
      array (
        'name' => 'Naslovna vrstica 1',
        'description' => '',
        'error_text' => 'Vrstica naslova 1 mora biti dolga med 3 in 128 znaki!',
      ),
      'address_2~RegisterCustomerFrm' => 
      array (
        'name' => 'Naslovna vrstica 2',
        'description' => '',
        'error_text' => 'Naslovna vrstica 2 mora biti manj kot 128 znakov!',
      ),
      'city~RegisterCustomerFrm' => 
      array (
        'name' => 'Mesto',
        'description' => '',
        'error_text' => 'Mesto mora imeti med 3 in 128 znakov!',
      ),
      'postcode~RegisterCustomerFrm' => 
      array (
        'name' => 'Poštna številka/Poštna številka',
        'description' => '',
        'error_text' => 'Poštna številka/koda mora biti manjša od 11 znakov!',
      ),
      'company~RegisterCustomerFrm' => 
      array (
        'name' => 'Podjetje',
        'description' => '',
        'error_text' => 'Ime podjetja mora biti manj kot 32 znakov!',
      ),
      'loginname~RegisterCustomerFrm' => 
      array (
        'name' => 'Uporabniško ime',
        'description' => '',
        'error_text' => 'Uporabniško ime mora vsebovati le alfanumerične znake in biti dolgo od 5 do 64 znakov!',
      ),
      'newsletter~RegisterCustomerFrm' => 
      array (
        'name' => 'Naročite se',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Davčna številka za DDV',
        'description' => '',
        'error_text' => 'Koda ID DDV mora biti med 8 in 14 znaki!',
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
        'name' => 'Vaši osebni podatki',
        'description' => '',
      ),
      'address' => 
      array (
        'name' => 'Vaš naslov',
        'description' => '',
      ),
      'login' => 
      array (
        'name' => 'Podatki za prijavo',
        'description' => '',
      ),
      'newsletter' => 
      array (
        'name' => 'Bilten',
        'description' => '',
      ),
    ),
  ),
);
