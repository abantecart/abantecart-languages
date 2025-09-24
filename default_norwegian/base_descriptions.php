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
        'name' => 'Forhåndsbestilling',
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
        'title' => 'Tomme',
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
        'unit' => 'pund',
      ),
      'USOU' => 
      array (
        'title' => 'Unse',
        'unit' => 'unse',
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
        'name' => 'Ufullstendig',
      ),
      'pending' => 
      array (
        'name' => 'Avventende',
      ),
      'processing' => 
      array (
        'name' => 'Behandles',
      ),
      'shipped' => 
      array (
        'name' => 'Sendt',
      ),
      'completed' => 
      array (
        'name' => 'Fullført',
      ),
      'canceled' => 
      array (
        'name' => 'Avbrutt',
      ),
      'denied' => 
      array (
        'name' => 'Avvist',
      ),
      'canceled_reversal' => 
      array (
        'name' => 'Avbrutt reversering',
      ),
      'failed' => 
      array (
        'name' => 'Mislyktes',
      ),
      'refunded' => 
      array (
        'name' => 'Tilbakebetalt',
      ),
      'reversed' => 
      array (
        'name' => 'Omvendt',
      ),
      'chargeback' => 
      array (
        'name' => 'Tilbakeføring',
      ),
      'canceled_by_customer' => 
      array (
        'name' => 'Avbestilt av kunde',
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
        'type_name' => 'Nedlastingsattributt',
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
        'description' => 'Kundeadresseskjema',
      ),
      'ContactUsFrm' => 
      array (
        'description' => 'Kontakt oss-skjema',
      ),
      'CustomerFrm' => 
      array (
        'description' => 'Kundedetaljer-skjema',
      ),
      'GuestCheckoutFrm' => 
      array (
        'description' => 'Gjestadresse- og detaljskjema',
      ),
      'RegisterCustomerFrm' => 
      array (
        'description' => 'Kunderegistreringsskjema',
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
        'name' => 'Fornavn:',
        'description' => '',
        'error_text' => 'Navnet må være mellom 3 og 32 tegn!',
      ),
      'email~ContactUsFrm' => 
      array (
        'name' => 'E-post:',
        'description' => '',
        'error_text' => 'E-postadressen ser ikke ut til å være gyldig!',
      ),
      'enquiry~ContactUsFrm' => 
      array (
        'name' => 'Forespørsel:',
        'description' => '',
        'error_text' => 'Forespørsel må være mellom 10 og 3000 tegn!',
      ),
      'captcha~ContactUsFrm' => 
      array (
        'name' => 'Skriv inn koden i boksen nedenfor:',
        'description' => '',
        'error_text' => 'Menneskelig verifisering mislyktes! Vennligst prøv igjen.',
      ),
      'country_id~AddressFrm' => 
      array (
        'name' => 'Land',
        'description' => '',
        'error_text' => 'Vennligst velg et land!',
      ),
      'zone_id~AddressFrm' => 
      array (
        'name' => 'Sone',
        'description' => '',
        'error_text' => 'Vennligst velg en region/stat!',
      ),
      'company~AddressFrm' => 
      array (
        'name' => 'Selskap',
        'description' => '',
        'error_text' => 'Firmanavn må være mindre enn 32 tegn!',
      ),
      'address_1~AddressFrm' => 
      array (
        'name' => 'Adresselinje 1',
        'description' => '',
        'error_text' => 'Adresselinje 1 må være mellom 3 og 128 tegn!',
      ),
      'address_2~AddressFrm' => 
      array (
        'name' => 'Adresselinje 2',
        'description' => '',
        'error_text' => 'Adresselinje 2 må være mindre enn 128 tegn!',
      ),
      'city~AddressFrm' => 
      array (
        'name' => 'By',
        'description' => '',
        'error_text' => 'By må være mellom 3 og 128 tegn!',
      ),
      'postcode~AddressFrm' => 
      array (
        'name' => 'Postnummer/Postnummer',
        'description' => '',
        'error_text' => 'Zip/Post-kode må være mindre enn 11 tegn!',
      ),
      'firstname~AddressFrm' => 
      array (
        'name' => 'Fornavn',
        'description' => '',
        'error_text' => 'Fornavn må være mellom 1 og 32 tegn!',
      ),
      'lastname~AddressFrm' => 
      array (
        'name' => 'Etternavn',
        'description' => '',
        'error_text' => 'Etternavn må være mellom 1 og 32 tegn!',
      ),
      'default~AddressFrm' => 
      array (
        'name' => 'Standardadresse',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~AddressFrm' => 
      array (
        'name' => 'MVA-ID',
        'description' => '',
        'error_text' => 'MVA-ID-kode må være mellom 8 og 14 tegn!',
      ),
      'country_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Land',
        'description' => '',
        'error_text' => 'Vennligst velg et land!',
      ),
      'zone_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Region/Stat',
        'description' => '',
        'error_text' => 'Vennligst velg en region/stat!',
      ),
      'company~GuestCheckoutFrm' => 
      array (
        'name' => 'Selskap',
        'description' => '',
        'error_text' => 'Firmanavn må være mindre enn 32 tegn!',
      ),
      'address_1~GuestCheckoutFrm' => 
      array (
        'name' => 'Adresselinje 1',
        'description' => '',
        'error_text' => 'Adresselinje 1 må være mellom 3 og 128 tegn!',
      ),
      'address_2~GuestCheckoutFrm' => 
      array (
        'name' => 'Adresselinje 2',
        'description' => '',
        'error_text' => 'Adresselinje 2 må være mindre enn 128 tegn!',
      ),
      'city~GuestCheckoutFrm' => 
      array (
        'name' => 'By',
        'description' => '',
        'error_text' => 'By må være mellom 3 og 128 tegn!',
      ),
      'postcode~GuestCheckoutFrm' => 
      array (
        'name' => 'Postnummer/Postkode',
        'description' => '',
        'error_text' => 'Postnummer/Postkode må være mindre enn 11 tegn!',
      ),
      'firstname~GuestCheckoutFrm' => 
      array (
        'name' => 'Fornavn',
        'description' => '',
        'error_text' => 'Fornavn må være mellom 1 og 32 tegn!',
      ),
      'lastname~GuestCheckoutFrm' => 
      array (
        'name' => 'Etternavn',
        'description' => '',
        'error_text' => 'Etternavn må være mellom 1 og 32 tegn!',
      ),
      'vat_id~GuestCheckoutFrm' => 
      array (
        'name' => 'MVA-nummer',
        'description' => '',
        'error_text' => 'MVA-ID-koden må være mellom 8 og 14 tegn!',
      ),
      'email~GuestCheckoutFrm' => 
      array (
        'name' => 'E-post',
        'description' => '',
        'error_text' => 'Din e-post er ikke oppgitt eller ugyldig!',
      ),
      'telephone~GuestCheckoutFrm' => 
      array (
        'name' => 'Telefonnummer',
        'description' => '',
        'error_text' => 'Ditt kontakttelefonnummer er ikke oppgitt eller er ugyldig.',
      ),
      'loginname~CustomerFrm' => 
      array (
        'name' => 'Brukernavn',
        'description' => '',
        'error_text' => 'Brukernavn må være mellom 5 og 65 tegn!',
      ),
      'firstname~CustomerFrm' => 
      array (
        'name' => 'Fornavn',
        'description' => '',
        'error_text' => 'Fornavn må være mellom 1 og 32 tegn!',
      ),
      'lastname~CustomerFrm' => 
      array (
        'name' => 'Etternavn',
        'description' => '',
        'error_text' => 'Etternavn må være mellom 1 og 32 tegn!',
      ),
      'email~CustomerFrm' => 
      array (
        'name' => 'E-post',
        'description' => '',
        'error_text' => 'Din e-post er ikke oppgitt eller ugyldig!',
      ),
      'telephone~CustomerFrm' => 
      array (
        'name' => 'Telefonnummer',
        'description' => '',
        'error_text' => 'Ditt kontaktnummer er ikke oppgitt eller ugyldig.',
      ),
      'firstname~RegisterCustomerFrm' => 
      array (
        'name' => 'Fornavn',
        'description' => '',
        'error_text' => 'Fornavn må være mellom 1 og 32 tegn!',
      ),
      'lastname~RegisterCustomerFrm' => 
      array (
        'name' => 'Etternavn',
        'description' => '',
        'error_text' => 'Etternavn må være mellom 1 og 32 tegn!',
      ),
      'email~RegisterCustomerFrm' => 
      array (
        'name' => 'E-post',
        'description' => '',
        'error_text' => 'Din e-postadresse er ikke oppgitt eller ugyldig!',
      ),
      'telephone~RegisterCustomerFrm' => 
      array (
        'name' => 'Telefonnummer',
        'description' => '',
        'error_text' => 'Ditt kontakttelefonnummer er ikke oppgitt eller ugyldig.',
      ),
      'country_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Land',
        'description' => '',
        'error_text' => 'Vennligst velg et land!',
      ),
      'zone_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Region/Stat',
        'description' => '',
        'error_text' => 'Vennligst velg en region/delstat!',
      ),
      'address_1~RegisterCustomerFrm' => 
      array (
        'name' => 'Adresselinje 1',
        'description' => '',
        'error_text' => 'Adresselinje 1 må være mellom 3 og 128 tegn!',
      ),
      'address_2~RegisterCustomerFrm' => 
      array (
        'name' => 'Adresselinje 2',
        'description' => '',
        'error_text' => 'Adresselinje 2 må være mindre enn 128 tegn!',
      ),
      'city~RegisterCustomerFrm' => 
      array (
        'name' => 'By',
        'description' => '',
        'error_text' => 'By må være mellom 3 og 128 tegn!',
      ),
      'postcode~RegisterCustomerFrm' => 
      array (
        'name' => 'Postnummer/Postnummer',
        'description' => '',
        'error_text' => 'Postnummer/Postkode må være mindre enn 11 tegn!',
      ),
      'company~RegisterCustomerFrm' => 
      array (
        'name' => 'Selskap',
        'description' => '',
        'error_text' => 'Firmanavn må være mindre enn 32 tegn!',
      ),
      'loginname~RegisterCustomerFrm' => 
      array (
        'name' => 'Innloggingsnavn',
        'description' => '',
        'error_text' => 'Innloggingsnavnet må være alfanumerisk og inneholde mellom 5 og 64 tegn!',
      ),
      'newsletter~RegisterCustomerFrm' => 
      array (
        'name' => 'Abonner',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~RegisterCustomerFrm' => 
      array (
        'name' => 'MVA-ID',
        'description' => '',
        'error_text' => 'MVA-ID-kode må være mellom 8 og 14 tegn!',
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
        'name' => 'Dine personlige opplysninger',
        'description' => '',
      ),
      'address' => 
      array (
        'name' => 'Din adresse',
        'description' => '',
      ),
      'login' => 
      array (
        'name' => 'Innloggingsdetaljer',
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
