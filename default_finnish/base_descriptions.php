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
        'name' => 'Esitilaus',
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
        'title' => 'Senttimetri',
        'unit' => 'cm',
      ),
      'MMET' => 
      array (
        'title' => 'millimetri',
        'unit' => 'mm',
      ),
      'INCH' => 
      array (
        'title' => 'Tuuma',
        'unit' => 'sisällä',
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
        'title' => 'Kilogramma',
        'unit' => 'kg',
      ),
      'GRAM' => 
      array (
        'title' => 'gramma',
        'unit' => 'g',
      ),
      'PUND' => 
      array (
        'title' => 'punta',
        'unit' => 'lb',
      ),
      'USOU' => 
      array (
        'title' => 'Unssi',
        'unit' => 'unssi',
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
        'name' => 'Epätäydellinen',
      ),
      'pending' => 
      array (
        'name' => 'Odottaa',
      ),
      'processing' => 
      array (
        'name' => 'Käsittelyssä',
      ),
      'shipped' => 
      array (
        'name' => 'Lähetetty',
      ),
      'completed' => 
      array (
        'name' => 'Suoritettu',
      ),
      'canceled' => 
      array (
        'name' => 'Peruutettu',
      ),
      'denied' => 
      array (
        'name' => 'Evätty',
      ),
      'canceled_reversal' => 
      array (
        'name' => 'Peruutettu hyvitys',
      ),
      'failed' => 
      array (
        'name' => 'Epäonnistui',
      ),
      'refunded' => 
      array (
        'name' => 'Hyvitetty',
      ),
      'reversed' => 
      array (
        'name' => 'Käänteinen',
      ),
      'chargeback' => 
      array (
        'name' => 'Takaisinperintä',
      ),
      'canceled_by_customer' => 
      array (
        'name' => 'Peruutettu asiakkaan toimesta',
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
        'type_name' => 'Tuotteen vaihtoehto',
      ),
      'download_attribute' => 
      array (
        'type_name' => 'Latausattribuutti',
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
        'description' => 'Asiakkaan osoitelomake',
      ),
      'ContactUsFrm' => 
      array (
        'description' => 'Yhteydenottolomake',
      ),
      'CustomerFrm' => 
      array (
        'description' => 'Asiakastietolomake',
      ),
      'GuestCheckoutFrm' => 
      array (
        'description' => 'Vieraan osoite- ja tietolomake',
      ),
      'RegisterCustomerFrm' => 
      array (
        'description' => 'Asiakkaan rekisteröintilomake',
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
        'name' => 'Etunimi:',
        'description' => '',
        'error_text' => 'Nimen pituuden on oltava 3–32 merkkiä!',
      ),
      'email~ContactUsFrm' => 
      array (
        'name' => 'Sähköposti:',
        'description' => '',
        'error_text' => 'Sähköpostiosoite ei näytä kelvolliselta!',
      ),
      'enquiry~ContactUsFrm' => 
      array (
        'name' => 'Kysely:',
        'description' => '',
        'error_text' => 'Kyselyn pituuden on oltava 10–3000 merkkiä!',
      ),
      'captcha~ContactUsFrm' => 
      array (
        'name' => 'Syötä koodi alla olevaan kenttään:',
        'description' => '',
        'error_text' => 'Ihmistarkistus epäonnistui! Yritä uudelleen.',
      ),
      'country_id~AddressFrm' => 
      array (
        'name' => 'Maa',
        'description' => '',
        'error_text' => 'Valitse maa!',
      ),
      'zone_id~AddressFrm' => 
      array (
        'name' => 'Vyöhyke',
        'description' => '',
        'error_text' => 'Valitse alue/valtio!',
      ),
      'company~AddressFrm' => 
      array (
        'name' => 'Yritys',
        'description' => '',
        'error_text' => 'Yrityksen nimi täytyy olla alle 32 merkkiä!',
      ),
      'address_1~AddressFrm' => 
      array (
        'name' => 'Osoiterivi 1',
        'description' => '',
        'error_text' => 'Osoiterivin 1 on oltava 3–128 merkin pituinen!',
      ),
      'address_2~AddressFrm' => 
      array (
        'name' => 'Osoiterivi 2',
        'description' => '',
        'error_text' => 'Osoiterivi 2 on oltava alle 128 merkkiä!',
      ),
      'city~AddressFrm' => 
      array (
        'name' => 'Kaupunki',
        'description' => '',
        'error_text' => 'Kaupungin nimen on oltava 3–128 merkkiä!',
      ),
      'postcode~AddressFrm' => 
      array (
        'name' => 'Postinumero/Postinumero',
        'description' => '',
        'error_text' => 'Postinumero/ZIP-koodi on oltava alle 11 merkkiä!',
      ),
      'firstname~AddressFrm' => 
      array (
        'name' => 'Etunimi',
        'description' => '',
        'error_text' => 'Etunimen on oltava 1–32 merkkiä!',
      ),
      'lastname~AddressFrm' => 
      array (
        'name' => 'Sukunimi',
        'description' => '',
        'error_text' => 'Sukunimen on oltava 1–32 merkin pituinen!',
      ),
      'default~AddressFrm' => 
      array (
        'name' => 'Oletusosoite',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~AddressFrm' => 
      array (
        'name' => 'ALV-tunnus',
        'description' => '',
        'error_text' => 'ALV-tunnuskoodin pituuden on oltava 8–14 merkkiä!',
      ),
      'country_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Maa',
        'description' => '',
        'error_text' => 'Valitse maa!',
      ),
      'zone_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Alue/osavaltio',
        'description' => '',
        'error_text' => 'Valitse alue/valtio!',
      ),
      'company~GuestCheckoutFrm' => 
      array (
        'name' => 'Yritys',
        'description' => '',
        'error_text' => 'Yrityksen nimen on oltava alle 32 merkkiä!',
      ),
      'address_1~GuestCheckoutFrm' => 
      array (
        'name' => 'Osoiterivi 1',
        'description' => '',
        'error_text' => 'Osoiterivi 1:n pituuden tulee olla 3–128 merkkiä!',
      ),
      'address_2~GuestCheckoutFrm' => 
      array (
        'name' => 'Osoiterivi 2',
        'description' => '',
        'error_text' => 'Osoiterivi 2:n pituuden on oltava alle 128 merkkiä!',
      ),
      'city~GuestCheckoutFrm' => 
      array (
        'name' => 'Kaupunki',
        'description' => '',
        'error_text' => 'Kaupungin nimen pituuden tulee olla 3–128 merkkiä!',
      ),
      'postcode~GuestCheckoutFrm' => 
      array (
        'name' => 'Postinumero/Postinumero',
        'description' => '',
        'error_text' => 'ZIP-koodi/postinumero saa olla alle 11 merkkiä!',
      ),
      'firstname~GuestCheckoutFrm' => 
      array (
        'name' => 'Etunimi',
        'description' => '',
        'error_text' => 'Etunimen pituuden tulee olla 1 ja 32 merkin välillä!',
      ),
      'lastname~GuestCheckoutFrm' => 
      array (
        'name' => 'Sukunimi',
        'description' => '',
        'error_text' => 'Sukunimen on oltava 1–32 merkin pituinen!',
      ),
      'vat_id~GuestCheckoutFrm' => 
      array (
        'name' => 'ALV-tunnus',
        'description' => '',
        'error_text' => 'ALV-tunnuskoodin on oltava 8–14 merkin pituinen!',
      ),
      'email~GuestCheckoutFrm' => 
      array (
        'name' => 'Sähköposti',
        'description' => '',
        'error_text' => 'Sähköpostiosoitettasi ei ole annettu tai se on virheellinen!',
      ),
      'telephone~GuestCheckoutFrm' => 
      array (
        'name' => 'Puhelinnumero',
        'description' => '',
        'error_text' => 'Yhteydenottopuhelinnumeroasi ei ole annettu tai se on virheellinen.',
      ),
      'loginname~CustomerFrm' => 
      array (
        'name' => 'Käyttäjätunnus',
        'description' => '',
        'error_text' => 'Kirjautumisnimi on oltava 5 ja 65 merkin välillä!',
      ),
      'firstname~CustomerFrm' => 
      array (
        'name' => 'Etunimi',
        'description' => '',
        'error_text' => 'Etunimen on oltava 1–32 merkin pituinen!',
      ),
      'lastname~CustomerFrm' => 
      array (
        'name' => 'Sukunimi',
        'description' => '',
        'error_text' => 'Sukunimen on oltava 1 ja 32 merkin välillä!',
      ),
      'email~CustomerFrm' => 
      array (
        'name' => 'Sähköposti',
        'description' => '',
        'error_text' => 'Sähköpostiosoitettasi ei ole annettu tai se on virheellinen!',
      ),
      'telephone~CustomerFrm' => 
      array (
        'name' => 'Puhelinnumero',
        'description' => '',
        'error_text' => 'Sinun yhteyden puhelinnumerosi ei ole annettu tai se on virheellinen.',
      ),
      'firstname~RegisterCustomerFrm' => 
      array (
        'name' => 'Etunimi',
        'description' => '',
        'error_text' => 'Etunimen on oltava 1–32 merkin pituinen!',
      ),
      'lastname~RegisterCustomerFrm' => 
      array (
        'name' => 'Sukunimi',
        'description' => '',
        'error_text' => 'Sukunimen pituuden on oltava 1–32 merkkiä!',
      ),
      'email~RegisterCustomerFrm' => 
      array (
        'name' => 'Sähköposti',
        'description' => '',
        'error_text' => 'Sähköpostiosoitettasi ei ole annettu tai se on virheellinen!',
      ),
      'telephone~RegisterCustomerFrm' => 
      array (
        'name' => 'Puhelinnumero',
        'description' => '',
        'error_text' => 'Sinun yhteydenottopuhelinnumerosi ei ole annettu tai se on virheellinen.',
      ),
      'country_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Maa',
        'description' => '',
        'error_text' => 'Ole hyvä ja valitse maa!',
      ),
      'zone_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Alue/Osavaltio',
        'description' => '',
        'error_text' => 'Valitse alue/valtio!',
      ),
      'address_1~RegisterCustomerFrm' => 
      array (
        'name' => 'Osoiterivi 1',
        'description' => '',
        'error_text' => 'Osoiterivin 1 pituuden tulee olla 3–128 merkkiä!',
      ),
      'address_2~RegisterCustomerFrm' => 
      array (
        'name' => 'Osoiterivi 2',
        'description' => '',
        'error_text' => 'Osoiterivi 2 on oltava alle 128 merkkiä!',
      ),
      'city~RegisterCustomerFrm' => 
      array (
        'name' => 'Kaupunki',
        'description' => '',
        'error_text' => 'Kaupungin nimen pituuden tulee olla 3–128 merkkiä!',
      ),
      'postcode~RegisterCustomerFrm' => 
      array (
        'name' => 'Postinumero',
        'description' => '',
        'error_text' => 'Zip/Post Code:n on oltava alle 11 merkkiä!',
      ),
      'company~RegisterCustomerFrm' => 
      array (
        'name' => 'Yritys',
        'description' => '',
        'error_text' => 'Yrityksen nimen tulee olla alle 32 merkkiä!',
      ),
      'loginname~RegisterCustomerFrm' => 
      array (
        'name' => 'Kirjautumistunnus',
        'description' => '',
        'error_text' => 'Kirjautumisnimen on oltava pelkästään alfanumeerinen ja sen pituuden on oltava 5–64 merkkiä!',
      ),
      'newsletter~RegisterCustomerFrm' => 
      array (
        'name' => 'Tilaa',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~RegisterCustomerFrm' => 
      array (
        'name' => 'ALV-tunnus',
        'description' => '',
        'error_text' => 'ALV-tunnuksen pituuden on oltava 8–14 merkkiä!',
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
        'name' => 'Sinun henkilötietosi',
        'description' => '',
      ),
      'address' => 
      array (
        'name' => 'Osoitteesi',
        'description' => '',
      ),
      'login' => 
      array (
        'name' => 'Kirjautumistiedot',
        'description' => '',
      ),
      'newsletter' => 
      array (
        'name' => 'Uutiskirje',
        'description' => '',
      ),
    ),
  ),
);
