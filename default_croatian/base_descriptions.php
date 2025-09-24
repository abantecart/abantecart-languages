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
        'name' => 'Prednarudžba',
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
        'title' => 'Centimetar',
        'unit' => 'cm',
      ),
      'MMET' => 
      array (
        'title' => 'Milimetar',
        'unit' => 'mm',
      ),
      'INCH' => 
      array (
        'title' => 'Palac',
        'unit' => 'u',
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
        'title' => 'Funta',
        'unit' => 'lb',
      ),
      'USOU' => 
      array (
        'title' => 'Unca',
        'unit' => 'oz',
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
        'name' => 'Nepotpun',
      ),
      'pending' => 
      array (
        'name' => 'Na čekanju',
      ),
      'processing' => 
      array (
        'name' => 'Obrada',
      ),
      'shipped' => 
      array (
        'name' => 'Poslano',
      ),
      'completed' => 
      array (
        'name' => 'Dovršeno',
      ),
      'canceled' => 
      array (
        'name' => 'Otkazano',
      ),
      'denied' => 
      array (
        'name' => 'Odbijeno',
      ),
      'canceled_reversal' => 
      array (
        'name' => 'Otkazano poništenje',
      ),
      'failed' => 
      array (
        'name' => 'Neuspjelo',
      ),
      'refunded' => 
      array (
        'name' => 'Povraćeno',
      ),
      'reversed' => 
      array (
        'name' => 'Obrnuto',
      ),
      'chargeback' => 
      array (
        'name' => 'Storno transakcije',
      ),
      'canceled_by_customer' => 
      array (
        'name' => 'Otkazano od kupca',
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
        'type_name' => 'Opcija proizvoda',
      ),
      'download_attribute' => 
      array (
        'type_name' => 'Atribut za preuzimanje',
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
        'description' => 'Obrazac za adresu kupca',
      ),
      'ContactUsFrm' => 
      array (
        'description' => 'Obrazac za kontakt',
      ),
      'CustomerFrm' => 
      array (
        'description' => 'Obrazac s podacima o kupcu',
      ),
      'GuestCheckoutFrm' => 
      array (
        'description' => 'Obrazac adrese i podataka gosta',
      ),
      'RegisterCustomerFrm' => 
      array (
        'description' => 'Obrazac za registraciju kupca',
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
        'error_text' => 'Ime mora biti između 3 i 32 znakova!',
      ),
      'email~ContactUsFrm' => 
      array (
        'name' => 'E-pošta:',
        'description' => '',
        'error_text' => 'Adresa e-pošte se čini nevažećom!',
      ),
      'enquiry~ContactUsFrm' => 
      array (
        'name' => 'Upit:',
        'description' => '',
        'error_text' => 'Upit mora biti između 10 i 3000 znakova!',
      ),
      'captcha~ContactUsFrm' => 
      array (
        'name' => 'Unesite kod u okvir ispod:',
        'description' => '',
        'error_text' => 'Provjera čovjeka nije uspjela! Molimo pokušajte ponovno.',
      ),
      'country_id~AddressFrm' => 
      array (
        'name' => 'Država',
        'description' => '',
        'error_text' => 'Molimo odaberite državu!',
      ),
      'zone_id~AddressFrm' => 
      array (
        'name' => 'Zona',
        'description' => '',
        'error_text' => 'Molimo odaberite regiju/državu!',
      ),
      'company~AddressFrm' => 
      array (
        'name' => 'Tvrtka',
        'description' => '',
        'error_text' => 'Naziv tvrtke mora biti kraći od 32 znaka!',
      ),
      'address_1~AddressFrm' => 
      array (
        'name' => 'Adresa 1',
        'description' => '',
        'error_text' => 'Redak adrese 1 mora imati između 3 i 128 znakova!',
      ),
      'address_2~AddressFrm' => 
      array (
        'name' => 'Redak adrese 2',
        'description' => '',
        'error_text' => 'Redak adrese 2 mora biti kraći od 128 znakova!',
      ),
      'city~AddressFrm' => 
      array (
        'name' => 'Grad',
        'description' => '',
        'error_text' => 'Grad mora biti između 3 i 128 znakova!',
      ),
      'postcode~AddressFrm' => 
      array (
        'name' => 'Poštanski broj/Poštanski broj',
        'description' => '',
        'error_text' => 'ZIP/poštanski broj mora biti manje od 11 znakova!',
      ),
      'firstname~AddressFrm' => 
      array (
        'name' => 'Ime',
        'description' => '',
        'error_text' => 'Ime mora biti između 1 i 32 znakova!',
      ),
      'lastname~AddressFrm' => 
      array (
        'name' => 'Prezime',
        'description' => '',
        'error_text' => 'Prezime mora biti između 1 i 32 znaka!',
      ),
      'default~AddressFrm' => 
      array (
        'name' => 'Zadana adresa',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~AddressFrm' => 
      array (
        'name' => 'PDV ID',
        'description' => '',
        'error_text' => 'PDV ID kod mora biti između 8 i 14 znakova!',
      ),
      'country_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Država',
        'description' => '',
        'error_text' => 'Molimo odaberite državu!',
      ),
      'zone_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Regija/Država',
        'description' => '',
        'error_text' => 'Molimo odaberite regiju/državu!',
      ),
      'company~GuestCheckoutFrm' => 
      array (
        'name' => 'Tvrtka',
        'description' => '',
        'error_text' => 'Naziv tvrtke mora imati manje od 32 znakova!',
      ),
      'address_1~GuestCheckoutFrm' => 
      array (
        'name' => 'Adresa linija 1',
        'description' => '',
        'error_text' => 'Polje Adresa 1 mora sadržavati između 3 i 128 znakova!',
      ),
      'address_2~GuestCheckoutFrm' => 
      array (
        'name' => 'Drugi redak adrese',
        'description' => '',
        'error_text' => 'Adresna linija 2 mora biti kraća od 128 znakova!',
      ),
      'city~GuestCheckoutFrm' => 
      array (
        'name' => 'Grad',
        'description' => '',
        'error_text' => 'Grad mora imati između 3 i 128 znakova!',
      ),
      'postcode~GuestCheckoutFrm' => 
      array (
        'name' => 'Poštanski broj/Poštanski broj',
        'description' => '',
        'error_text' => 'Poštanski/Zip kod mora biti manje od 11 znakova!',
      ),
      'firstname~GuestCheckoutFrm' => 
      array (
        'name' => 'Ime',
        'description' => '',
        'error_text' => 'Ime mora biti između 1 i 32 znakova!',
      ),
      'lastname~GuestCheckoutFrm' => 
      array (
        'name' => 'Prezime',
        'description' => '',
        'error_text' => 'Prezime mora biti između 1 i 32 znakova!',
      ),
      'vat_id~GuestCheckoutFrm' => 
      array (
        'name' => 'ID PDV-a',
        'description' => '',
        'error_text' => 'Kod PDV identifikacijskog broja mora biti između 8 i 14 znakova!',
      ),
      'email~GuestCheckoutFrm' => 
      array (
        'name' => 'E-pošta',
        'description' => '',
        'error_text' => 'Vaša e-pošta nije navedena ili je neispravna!',
      ),
      'telephone~GuestCheckoutFrm' => 
      array (
        'name' => 'Broj telefona',
        'description' => '',
        'error_text' => 'Vaš kontakt broj telefona nije naveden ili je nevažeći.',
      ),
      'loginname~CustomerFrm' => 
      array (
        'name' => 'Korisničko ime',
        'description' => '',
        'error_text' => 'Korisničko ime mora biti između 5 i 65 znakova!',
      ),
      'firstname~CustomerFrm' => 
      array (
        'name' => 'Ime',
        'description' => '',
        'error_text' => 'Ime mora biti između 1 i 32 znakova!',
      ),
      'lastname~CustomerFrm' => 
      array (
        'name' => 'Prezime',
        'description' => '',
        'error_text' => 'Prezime mora biti između 1 i 32 znakova!',
      ),
      'email~CustomerFrm' => 
      array (
        'name' => 'E-pošta',
        'description' => '',
        'error_text' => 'Vaša e-mail adresa nije navedena ili je nevažeća!',
      ),
      'telephone~CustomerFrm' => 
      array (
        'name' => 'Broj telefona',
        'description' => '',
        'error_text' => 'Vaš kontaktni telefonski broj nije naveden ili je neispravan.',
      ),
      'firstname~RegisterCustomerFrm' => 
      array (
        'name' => 'Ime',
        'description' => '',
        'error_text' => 'Ime mora biti između 1 i 32 znakova!',
      ),
      'lastname~RegisterCustomerFrm' => 
      array (
        'name' => 'Prezime',
        'description' => '',
        'error_text' => 'Prezime mora biti između 1 i 32 znakova!',
      ),
      'email~RegisterCustomerFrm' => 
      array (
        'name' => 'E-pošta',
        'description' => '',
        'error_text' => 'Vaša e-pošta nije unesena ili je neispravna!',
      ),
      'telephone~RegisterCustomerFrm' => 
      array (
        'name' => 'Telefonski broj',
        'description' => '',
        'error_text' => 'Vaš kontaktni telefonski broj nije naveden ili nije valjan.',
      ),
      'country_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Država',
        'description' => '',
        'error_text' => 'Molimo odaberite državu!',
      ),
      'zone_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Regija/Država',
        'description' => '',
        'error_text' => 'Molimo odaberite regiju/državu!',
      ),
      'address_1~RegisterCustomerFrm' => 
      array (
        'name' => 'Linija adrese 1',
        'description' => '',
        'error_text' => 'Polje adrese 1 mora imati između 3 i 128 znakova!',
      ),
      'address_2~RegisterCustomerFrm' => 
      array (
        'name' => 'Drugi redak adrese',
        'description' => '',
        'error_text' => 'Drugi redak adrese mora biti kraći od 128 znakova!',
      ),
      'city~RegisterCustomerFrm' => 
      array (
        'name' => 'Grad',
        'description' => '',
        'error_text' => 'Grad mora biti između 3 i 128 znakova!',
      ),
      'postcode~RegisterCustomerFrm' => 
      array (
        'name' => 'Poštanski broj/Poštanski broj',
        'description' => '',
        'error_text' => 'ZIP/poštanski broj mora biti kraći od 11 znakova!',
      ),
      'company~RegisterCustomerFrm' => 
      array (
        'name' => 'Tvrtka',
        'description' => '',
        'error_text' => 'Naziv tvrtke mora biti kraći od 32 znakova!',
      ),
      'loginname~RegisterCustomerFrm' => 
      array (
        'name' => 'Korisničko ime',
        'description' => '',
        'error_text' => 'Korisničko ime mora sadržavati samo alfanumeričke znakove i biti dugačko između 5 i 64 znakova!',
      ),
      'newsletter~RegisterCustomerFrm' => 
      array (
        'name' => 'Pretplatite se',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~RegisterCustomerFrm' => 
      array (
        'name' => 'PDV identifikacijski broj',
        'description' => '',
        'error_text' => 'VAT ID kod mora biti između 8 i 14 znakova!',
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
        'name' => 'Vaši osobni podaci',
        'description' => '',
      ),
      'address' => 
      array (
        'name' => 'Vaša adresa',
        'description' => '',
      ),
      'login' => 
      array (
        'name' => 'Podaci za prijavu',
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
