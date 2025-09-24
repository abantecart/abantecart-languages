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
        'name' => 'Forudbestilling',
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
        'title' => 'millimeter',
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
        'title' => 'Ounce',
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
        'name' => 'Ufuldstændig',
      ),
      'pending' => 
      array (
        'name' => 'Afventer',
      ),
      'processing' => 
      array (
        'name' => 'Under behandling',
      ),
      'shipped' => 
      array (
        'name' => 'Afsendt',
      ),
      'completed' => 
      array (
        'name' => 'Fuldført',
      ),
      'canceled' => 
      array (
        'name' => 'Annulleret',
      ),
      'denied' => 
      array (
        'name' => 'Afvist',
      ),
      'canceled_reversal' => 
      array (
        'name' => 'Annulleret tilbageførsel',
      ),
      'failed' => 
      array (
        'name' => 'Mislykkedes',
      ),
      'refunded' => 
      array (
        'name' => 'Refunderet',
      ),
      'reversed' => 
      array (
        'name' => 'Omvendt',
      ),
      'chargeback' => 
      array (
        'name' => 'Tilbageførsel',
      ),
      'canceled_by_customer' => 
      array (
        'name' => 'Annulleret af kunden',
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
        'type_name' => 'Produktmulighed',
      ),
      'download_attribute' => 
      array (
        'type_name' => 'Downloadattribut',
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
        'description' => 'Kundeadresseformular',
      ),
      'ContactUsFrm' => 
      array (
        'description' => 'Kontakt os formular',
      ),
      'CustomerFrm' => 
      array (
        'description' => 'Kundeoplysningsformular',
      ),
      'GuestCheckoutFrm' => 
      array (
        'description' => 'Formular for gæsteadresse og detaljer',
      ),
      'RegisterCustomerFrm' => 
      array (
        'description' => 'Kunde Registreringsformular',
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
        'error_text' => 'Navn skal være mellem 3 og 32 tegn!',
      ),
      'email~ContactUsFrm' => 
      array (
        'name' => 'E-mail:',
        'description' => '',
        'error_text' => 'E-mailadresse ser ikke ud til at være gyldig!',
      ),
      'enquiry~ContactUsFrm' => 
      array (
        'name' => 'Forespørgsel:',
        'description' => '',
        'error_text' => 'Forespørgsel skal være mellem 10 og 3000 tegn!',
      ),
      'captcha~ContactUsFrm' => 
      array (
        'name' => 'Indtast koden i boksen nedenfor:',
        'description' => '',
        'error_text' => 'Menneskelig verifikation mislykkedes! Prøv venligst igen.',
      ),
      'country_id~AddressFrm' => 
      array (
        'name' => 'Land',
        'description' => '',
        'error_text' => 'Vælg venligst et land!',
      ),
      'zone_id~AddressFrm' => 
      array (
        'name' => 'Zone',
        'description' => '',
        'error_text' => 'Vælg venligst en region/stat!',
      ),
      'company~AddressFrm' => 
      array (
        'name' => 'Firma',
        'description' => '',
        'error_text' => 'Firmanavn skal være mindre end 32 tegn!',
      ),
      'address_1~AddressFrm' => 
      array (
        'name' => 'Adresse Linje 1',
        'description' => '',
        'error_text' => 'Adresse linje 1 skal være mellem 3 og 128 tegn!',
      ),
      'address_2~AddressFrm' => 
      array (
        'name' => 'Adresselinje 2',
        'description' => '',
        'error_text' => 'Adresselinje 2 skal være mindre end 128 tegn!',
      ),
      'city~AddressFrm' => 
      array (
        'name' => 'By',
        'description' => '',
        'error_text' => 'By skal være mellem 3 og 128 tegn!',
      ),
      'postcode~AddressFrm' => 
      array (
        'name' => 'Postnummer/Postnummer',
        'description' => '',
        'error_text' => 'Postnummer/ZIP-kode skal være mindre end 11 tegn!',
      ),
      'firstname~AddressFrm' => 
      array (
        'name' => 'Fornavn',
        'description' => '',
        'error_text' => 'Fornavn skal være mellem 1 og 32 tegn!',
      ),
      'lastname~AddressFrm' => 
      array (
        'name' => 'Efternavn',
        'description' => '',
        'error_text' => 'Efternavn skal være mellem 1 og 32 tegn!',
      ),
      'default~AddressFrm' => 
      array (
        'name' => 'Standardadresse',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~AddressFrm' => 
      array (
        'name' => 'Moms-ID',
        'description' => '',
        'error_text' => 'MOMS-ID-kode skal være mellem 8 og 14 tegn!',
      ),
      'country_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Land',
        'description' => '',
        'error_text' => 'Vælg venligst et land!',
      ),
      'zone_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Region/Delstat',
        'description' => '',
        'error_text' => 'Vælg venligst en region/stat!',
      ),
      'company~GuestCheckoutFrm' => 
      array (
        'name' => 'Firma',
        'description' => '',
        'error_text' => 'Firmanavn skal være mindre end 32 tegn!',
      ),
      'address_1~GuestCheckoutFrm' => 
      array (
        'name' => 'Adresse linje 1',
        'description' => '',
        'error_text' => 'Adresselinje 1 skal være mellem 3 og 128 tegn!',
      ),
      'address_2~GuestCheckoutFrm' => 
      array (
        'name' => 'Adresse Linje 2',
        'description' => '',
        'error_text' => 'Adresselinje 2 skal være under 128 tegn!',
      ),
      'city~GuestCheckoutFrm' => 
      array (
        'name' => 'By',
        'description' => '',
        'error_text' => 'By skal være mellem 3 og 128 tegn!',
      ),
      'postcode~GuestCheckoutFrm' => 
      array (
        'name' => 'Postnummer/Postnummer',
        'description' => '',
        'error_text' => 'Postnummer/postkode må være mindre end 11 tegn!',
      ),
      'firstname~GuestCheckoutFrm' => 
      array (
        'name' => 'Fornavn',
        'description' => '',
        'error_text' => 'Fornavn skal være mellem 1 og 32 tegn!',
      ),
      'lastname~GuestCheckoutFrm' => 
      array (
        'name' => 'Efternavn',
        'description' => '',
        'error_text' => 'Efternavn skal være mellem 1 og 32 tegn!',
      ),
      'vat_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Moms-ID',
        'description' => '',
        'error_text' => 'Moms-ID-kode skal være mellem 8 og 14 tegn!',
      ),
      'email~GuestCheckoutFrm' => 
      array (
        'name' => 'E-mail',
        'description' => '',
        'error_text' => 'Din e-mail er ikke angivet eller ugyldig!',
      ),
      'telephone~GuestCheckoutFrm' => 
      array (
        'name' => 'Telefonnummer',
        'description' => '',
        'error_text' => 'Dit kontakttelefonnummer er ikke angivet eller ugyldigt.',
      ),
      'loginname~CustomerFrm' => 
      array (
        'name' => 'Login-navn',
        'description' => '',
        'error_text' => 'Loginnavn skal være mellem 5 og 65 tegn!',
      ),
      'firstname~CustomerFrm' => 
      array (
        'name' => 'Fornavn',
        'description' => '',
        'error_text' => 'Fornavn skal være mellem 1 og 32 tegn!',
      ),
      'lastname~CustomerFrm' => 
      array (
        'name' => 'Efternavn',
        'description' => '',
        'error_text' => 'Efternavn skal være mellem 1 og 32 tegn!',
      ),
      'email~CustomerFrm' => 
      array (
        'name' => 'E-mail',
        'description' => '',
        'error_text' => 'Din e-mail er ikke angivet eller ugyldig!',
      ),
      'telephone~CustomerFrm' => 
      array (
        'name' => 'Telefonnummer',
        'description' => '',
        'error_text' => 'Dit kontakttelefonnummer er ikke angivet eller ugyldigt.',
      ),
      'firstname~RegisterCustomerFrm' => 
      array (
        'name' => 'Fornavn',
        'description' => '',
        'error_text' => 'Fornavn skal være mellem 1 og 32 tegn!',
      ),
      'lastname~RegisterCustomerFrm' => 
      array (
        'name' => 'Efternavn',
        'description' => '',
        'error_text' => 'Efternavn skal være mellem 1 og 32 tegn!',
      ),
      'email~RegisterCustomerFrm' => 
      array (
        'name' => 'E-mail',
        'description' => '',
        'error_text' => 'Din e-mail er ikke angivet eller ugyldig!',
      ),
      'telephone~RegisterCustomerFrm' => 
      array (
        'name' => 'Telefonnummer',
        'description' => '',
        'error_text' => 'Dit kontakttelefonnummer er ikke angivet eller ugyldigt.',
      ),
      'country_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Land',
        'description' => '',
        'error_text' => 'Vælg venligst et land!',
      ),
      'zone_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Region/Stat',
        'description' => '',
        'error_text' => 'Vælg venligst en region/stat!',
      ),
      'address_1~RegisterCustomerFrm' => 
      array (
        'name' => 'Adresse linje 1',
        'description' => '',
        'error_text' => 'Adresse Linje 1 skal være mellem 3 og 128 tegn!',
      ),
      'address_2~RegisterCustomerFrm' => 
      array (
        'name' => 'Adresse linje 2',
        'description' => '',
        'error_text' => 'Adressefelt 2 skal være mindre end 128 tegn!',
      ),
      'city~RegisterCustomerFrm' => 
      array (
        'name' => 'By',
        'description' => '',
        'error_text' => 'Byen skal være mellem 3 og 128 tegn!',
      ),
      'postcode~RegisterCustomerFrm' => 
      array (
        'name' => 'Postnummer/Postnummer',
        'description' => '',
        'error_text' => 'Postnummer/Postkode skal være mindre end 11 tegn!',
      ),
      'company~RegisterCustomerFrm' => 
      array (
        'name' => 'Virksomhed',
        'description' => '',
        'error_text' => 'Firmanavn skal være mindre end 32 tegn!',
      ),
      'loginname~RegisterCustomerFrm' => 
      array (
        'name' => 'Brugernavn',
        'description' => '',
        'error_text' => 'Loginnavn skal kun indeholde alfanumeriske tegn og være mellem 5 og 64 tegn langt!',
      ),
      'newsletter~RegisterCustomerFrm' => 
      array (
        'name' => 'Abonner',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Moms-ID',
        'description' => '',
        'error_text' => 'VAT ID-kode skal være mellem 8 og 14 tegn!',
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
        'name' => 'Dine personlige detaljer',
        'description' => '',
      ),
      'address' => 
      array (
        'name' => 'Din adresse',
        'description' => '',
      ),
      'login' => 
      array (
        'name' => 'Loginoplysninger',
        'description' => '',
      ),
      'newsletter' => 
      array (
        'name' => 'Nyhedsbrev',
        'description' => '',
      ),
    ),
  ),
);
