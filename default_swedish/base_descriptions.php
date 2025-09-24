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
        'name' => 'Förbeställ',
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
        'title' => 'Centimeter',
        'unit' => 'cm',
      ),
      'MMET' => 
      array (
        'title' => 'Millimeter',
        'unit' => 'mm',
      ),
      'INCH' => 
      array (
        'title' => 'tum',
        'unit' => 'i',
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
        'title' => 'Pund',
        'unit' => 'lb',
      ),
      'USOU' => 
      array (
        'title' => 'Uns',
        'unit' => 'uns',
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
        'name' => 'Ofullständig',
      ),
      'pending' => 
      array (
        'name' => 'Väntande',
      ),
      'processing' => 
      array (
        'name' => 'Bearbetning',
      ),
      'shipped' => 
      array (
        'name' => 'Skickad',
      ),
      'completed' => 
      array (
        'name' => 'Slutförd',
      ),
      'canceled' => 
      array (
        'name' => 'Avbokad',
      ),
      'denied' => 
      array (
        'name' => 'Nekad',
      ),
      'canceled_reversal' => 
      array (
        'name' => 'Annullerad återföring',
      ),
      'failed' => 
      array (
        'name' => 'Misslyckades',
      ),
      'refunded' => 
      array (
        'name' => 'Återbetald',
      ),
      'reversed' => 
      array (
        'name' => 'Omvänd',
      ),
      'chargeback' => 
      array (
        'name' => 'Återkrav',
      ),
      'canceled_by_customer' => 
      array (
        'name' => 'Avbokad av kunden',
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
        'type_name' => 'Produktalternativ',
      ),
      'download_attribute' => 
      array (
        'type_name' => 'Nedladdningsattribut',
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
        'description' => 'Kundadressformulär',
      ),
      'ContactUsFrm' => 
      array (
        'description' => 'Formulär för att kontakta oss',
      ),
      'CustomerFrm' => 
      array (
        'description' => 'Formulär för kunduppgifter',
      ),
      'GuestCheckoutFrm' => 
      array (
        'description' => 'Formulär för gästadress och detaljer',
      ),
      'RegisterCustomerFrm' => 
      array (
        'description' => 'Kundregistreringsformulär',
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
        'name' => 'Förnamn:',
        'description' => '',
        'error_text' => 'Namnet måste vara mellan 3 och 32 tecken!',
      ),
      'email~ContactUsFrm' => 
      array (
        'name' => 'E-post:',
        'description' => '',
        'error_text' => 'E-postadressen verkar inte vara giltig!',
      ),
      'enquiry~ContactUsFrm' => 
      array (
        'name' => 'Förfrågan:',
        'description' => '',
        'error_text' => 'Förfrågan måste vara mellan 10 och 3000 tecken!',
      ),
      'captcha~ContactUsFrm' => 
      array (
        'name' => 'Ange koden i rutan nedan:',
        'description' => '',
        'error_text' => 'Mänsklig verifiering har misslyckats! Vänligen försök igen.',
      ),
      'country_id~AddressFrm' => 
      array (
        'name' => 'Land',
        'description' => '',
        'error_text' => 'Vänligen välj ett land!',
      ),
      'zone_id~AddressFrm' => 
      array (
        'name' => 'Zon',
        'description' => '',
        'error_text' => 'Vänligen välj en region/delstat!',
      ),
      'company~AddressFrm' => 
      array (
        'name' => 'Företag',
        'description' => '',
        'error_text' => 'Företagsnamnet måste vara färre än 32 tecken!',
      ),
      'address_1~AddressFrm' => 
      array (
        'name' => 'Adressrad 1',
        'description' => '',
        'error_text' => 'Adressrad 1 måste vara mellan 3 och 128 tecken!',
      ),
      'address_2~AddressFrm' => 
      array (
        'name' => 'Adressrad 2',
        'description' => '',
        'error_text' => 'Adressrad 2 måste vara mindre än 128 tecken!',
      ),
      'city~AddressFrm' => 
      array (
        'name' => 'Stad',
        'description' => '',
        'error_text' => 'Staden måste vara mellan 3 och 128 tecken lång!',
      ),
      'postcode~AddressFrm' => 
      array (
        'name' => 'Postnummer/Postnummer',
        'description' => '',
        'error_text' => 'ZIP-kod/postnummer måste vara färre än 11 tecken!',
      ),
      'firstname~AddressFrm' => 
      array (
        'name' => 'Förnamn',
        'description' => '',
        'error_text' => 'Förnamn måste vara mellan 1 och 32 tecken!',
      ),
      'lastname~AddressFrm' => 
      array (
        'name' => 'Efternamn',
        'description' => '',
        'error_text' => 'Efternamn måste vara mellan 1 och 32 tecken!',
      ),
      'default~AddressFrm' => 
      array (
        'name' => 'Standardadress',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~AddressFrm' => 
      array (
        'name' => 'Moms-ID',
        'description' => '',
        'error_text' => 'Momsregistreringsnumret måste vara mellan 8 och 14 tecken!',
      ),
      'country_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Land',
        'description' => '',
        'error_text' => 'Vänligen välj ett land!',
      ),
      'zone_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Region/Stat',
        'description' => '',
        'error_text' => 'Vänligen välj region/stat!',
      ),
      'company~GuestCheckoutFrm' => 
      array (
        'name' => 'Företag',
        'description' => '',
        'error_text' => 'Företagsnamnet måste vara färre än 32 tecken!',
      ),
      'address_1~GuestCheckoutFrm' => 
      array (
        'name' => 'Adressrad 1',
        'description' => '',
        'error_text' => 'Adressrad 1 måste vara mellan 3 och 128 tecken!',
      ),
      'address_2~GuestCheckoutFrm' => 
      array (
        'name' => 'Adressrad 2',
        'description' => '',
        'error_text' => 'Adressrad 2 måste vara kortare än 128 tecken!',
      ),
      'city~GuestCheckoutFrm' => 
      array (
        'name' => 'Stad',
        'description' => '',
        'error_text' => 'Stad måste vara mellan 3 och 128 tecken!',
      ),
      'postcode~GuestCheckoutFrm' => 
      array (
        'name' => 'Postnummer/Postnummer',
        'description' => '',
        'error_text' => 'Postnummer/Postkod måste vara mindre än 11 tecken!',
      ),
      'firstname~GuestCheckoutFrm' => 
      array (
        'name' => 'Förnamn',
        'description' => '',
        'error_text' => 'Förnamn måste vara mellan 1 och 32 tecken!',
      ),
      'lastname~GuestCheckoutFrm' => 
      array (
        'name' => 'Efternamn',
        'description' => '',
        'error_text' => 'Efternamn måste vara mellan 1 och 32 tecken!',
      ),
      'vat_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Momsregistreringsnummer',
        'description' => '',
        'error_text' => 'Moms-ID-koden måste vara mellan 8 och 14 tecken!',
      ),
      'email~GuestCheckoutFrm' => 
      array (
        'name' => 'E-post',
        'description' => '',
        'error_text' => 'Din e-postadress har inte angetts eller är ogiltig!',
      ),
      'telephone~GuestCheckoutFrm' => 
      array (
        'name' => 'Telefonnummer',
        'description' => '',
        'error_text' => 'Ditt kontakttelefonnummer är inte angivet eller ogiltigt.',
      ),
      'loginname~CustomerFrm' => 
      array (
        'name' => 'Inloggningsnamn',
        'description' => '',
        'error_text' => 'Inloggningsnamnet måste vara mellan 5 och 65 tecken!',
      ),
      'firstname~CustomerFrm' => 
      array (
        'name' => 'Förnamn',
        'description' => '',
        'error_text' => 'Förnamn måste vara mellan 1 och 32 tecken!',
      ),
      'lastname~CustomerFrm' => 
      array (
        'name' => 'Efternamn',
        'description' => '',
        'error_text' => 'Efternamn måste vara mellan 1 och 32 tecken!',
      ),
      'email~CustomerFrm' => 
      array (
        'name' => 'E-post',
        'description' => '',
        'error_text' => 'Din e-postadress har inte angetts eller är ogiltig!',
      ),
      'telephone~CustomerFrm' => 
      array (
        'name' => 'Telefonnummer',
        'description' => '',
        'error_text' => 'Ditt kontakttelefonnummer är inte angivet eller ogiltigt.',
      ),
      'firstname~RegisterCustomerFrm' => 
      array (
        'name' => 'Förnamn',
        'description' => '',
        'error_text' => 'Förnamn måste vara mellan 1 och 32 tecken!',
      ),
      'lastname~RegisterCustomerFrm' => 
      array (
        'name' => 'Efternamn',
        'description' => '',
        'error_text' => 'Efternamn måste vara mellan 1 och 32 tecken!',
      ),
      'email~RegisterCustomerFrm' => 
      array (
        'name' => 'E-post',
        'description' => '',
        'error_text' => 'Din e-postadress har inte angetts eller är ogiltig!',
      ),
      'telephone~RegisterCustomerFrm' => 
      array (
        'name' => 'Telefonnummer',
        'description' => '',
        'error_text' => 'Ditt kontakttelefonnummer har inte angetts eller är ogiltigt.',
      ),
      'country_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Land',
        'description' => '',
        'error_text' => 'Vänligen välj ett land!',
      ),
      'zone_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Region/Stat',
        'description' => '',
        'error_text' => 'Vänligen välj en region/stat!',
      ),
      'address_1~RegisterCustomerFrm' => 
      array (
        'name' => 'Adressrad 1',
        'description' => '',
        'error_text' => 'Adressrad 1 måste vara mellan 3 och 128 tecken!',
      ),
      'address_2~RegisterCustomerFrm' => 
      array (
        'name' => 'Adressrad 2',
        'description' => '',
        'error_text' => 'Adressrad 2 måste vara färre än 128 tecken!',
      ),
      'city~RegisterCustomerFrm' => 
      array (
        'name' => 'Stad',
        'description' => '',
        'error_text' => 'Stad måste vara mellan 3 och 128 tecken!',
      ),
      'postcode~RegisterCustomerFrm' => 
      array (
        'name' => 'Postnummer/Postkod',
        'description' => '',
        'error_text' => 'Postnummer/Postkod måste vara färre än 11 tecken!',
      ),
      'company~RegisterCustomerFrm' => 
      array (
        'name' => 'Företag',
        'description' => '',
        'error_text' => 'Företagsnamnet måste vara färre än 32 tecken!',
      ),
      'loginname~RegisterCustomerFrm' => 
      array (
        'name' => 'Inloggningsnamn',
        'description' => '',
        'error_text' => 'Inloggningsnamnet måste bestå enbart av alfanumeriska tecken och vara mellan 5 och 64 tecken!',
      ),
      'newsletter~RegisterCustomerFrm' => 
      array (
        'name' => 'Prenumerera',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Momsregistreringsnummer',
        'description' => '',
        'error_text' => 'Moms-ID-kod måste vara mellan 8 och 14 tecken!',
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
        'name' => 'Dina personliga uppgifter',
        'description' => '',
      ),
      'address' => 
      array (
        'name' => 'Din adress',
        'description' => '',
      ),
      'login' => 
      array (
        'name' => 'Inloggningsuppgifter',
        'description' => '',
      ),
      'newsletter' => 
      array (
        'name' => 'Nyhetsbrev',
        'description' => '',
      ),
    ),
  ),
);
