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
        'name' => 'Vorbestellung',
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
        'title' => 'Zentimeter',
        'unit' => 'cm',
      ),
      'MMET' => 
      array (
        'title' => 'Millimeter',
        'unit' => 'mm',
      ),
      'INCH' => 
      array (
        'title' => 'Zoll',
        'unit' => 'in',
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
        'title' => 'Kilogramm',
        'unit' => 'kg',
      ),
      'GRAM' => 
      array (
        'title' => 'Gramm',
        'unit' => 'g',
      ),
      'PUND' => 
      array (
        'title' => 'Pfund',
        'unit' => 'lb',
      ),
      'USOU' => 
      array (
        'title' => 'Unze',
        'unit' => 'Unze',
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
        'name' => 'Unvollständig',
      ),
      'pending' => 
      array (
        'name' => 'Ausstehend',
      ),
      'processing' => 
      array (
        'name' => 'In Bearbeitung',
      ),
      'shipped' => 
      array (
        'name' => 'Versendet',
      ),
      'completed' => 
      array (
        'name' => 'Abgeschlossen',
      ),
      'canceled' => 
      array (
        'name' => 'Storniert',
      ),
      'denied' => 
      array (
        'name' => 'Abgelehnt',
      ),
      'canceled_reversal' => 
      array (
        'name' => 'Stornierte Rückbuchung',
      ),
      'failed' => 
      array (
        'name' => 'Fehlgeschlagen',
      ),
      'refunded' => 
      array (
        'name' => 'Erstattet',
      ),
      'reversed' => 
      array (
        'name' => 'Umgekehrt',
      ),
      'chargeback' => 
      array (
        'name' => 'Rückbuchung',
      ),
      'canceled_by_customer' => 
      array (
        'name' => 'Vom Kunden storniert',
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
        'type_name' => 'Produktoption',
      ),
      'download_attribute' => 
      array (
        'type_name' => 'Download-Attribut',
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
        'description' => 'Kundenadresse-Formular',
      ),
      'ContactUsFrm' => 
      array (
        'description' => 'Kontaktformular',
      ),
      'CustomerFrm' => 
      array (
        'description' => 'Kundendetails-Formular',
      ),
      'GuestCheckoutFrm' => 
      array (
        'description' => 'Formular für Gästeadresse und Details',
      ),
      'RegisterCustomerFrm' => 
      array (
        'description' => 'Kundenregistrierungsformular',
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
        'name' => 'Vorname:',
        'description' => '',
        'error_text' => 'Der Name muss zwischen 3 und 32 Zeichen lang sein!',
      ),
      'email~ContactUsFrm' => 
      array (
        'name' => 'E-Mail:',
        'description' => '',
        'error_text' => 'E-Mail-Adresse scheint ungültig zu sein!',
      ),
      'enquiry~ContactUsFrm' => 
      array (
        'name' => 'Anfrage:',
        'description' => '',
        'error_text' => 'Die Anfrage muss zwischen 10 und 3000 Zeichen lang sein!',
      ),
      'captcha~ContactUsFrm' => 
      array (
        'name' => 'Geben Sie den Code in das untenstehende Feld ein:',
        'description' => '',
        'error_text' => 'Menschliche Verifizierung ist fehlgeschlagen! Bitte versuchen Sie es erneut.',
      ),
      'country_id~AddressFrm' => 
      array (
        'name' => 'Land',
        'description' => '',
        'error_text' => 'Bitte wählen Sie ein Land aus!',
      ),
      'zone_id~AddressFrm' => 
      array (
        'name' => 'Zone',
        'description' => '',
        'error_text' => 'Bitte wählen Sie eine Region/Staat aus!',
      ),
      'company~AddressFrm' => 
      array (
        'name' => 'Unternehmen',
        'description' => '',
        'error_text' => 'Der Firmenname muss weniger als 32 Zeichen lang sein!',
      ),
      'address_1~AddressFrm' => 
      array (
        'name' => 'Adresszeile 1',
        'description' => '',
        'error_text' => 'Adresszeile 1 muss zwischen 3 und 128 Zeichen lang sein!',
      ),
      'address_2~AddressFrm' => 
      array (
        'name' => 'Adresszeile 2',
        'description' => '',
        'error_text' => 'Adresszeile 2 muss kürzer als 128 Zeichen sein!',
      ),
      'city~AddressFrm' => 
      array (
        'name' => 'Stadt',
        'description' => '',
        'error_text' => 'Stadt muss zwischen 3 und 128 Zeichen lang sein!',
      ),
      'postcode~AddressFrm' => 
      array (
        'name' => 'PLZ/Postleitzahl',
        'description' => '',
        'error_text' => 'PLZ/Postleitzahl muss weniger als 11 Zeichen lang sein!',
      ),
      'firstname~AddressFrm' => 
      array (
        'name' => 'Vorname',
        'description' => '',
        'error_text' => 'Vorname muss zwischen 1 und 32 Zeichen lang sein!',
      ),
      'lastname~AddressFrm' => 
      array (
        'name' => 'Nachname',
        'description' => '',
        'error_text' => 'Der Nachname muss zwischen 1 und 32 Zeichen lang sein!',
      ),
      'default~AddressFrm' => 
      array (
        'name' => 'Standardadresse',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~AddressFrm' => 
      array (
        'name' => 'Umsatzsteuer-Identifikationsnummer',
        'description' => '',
        'error_text' => 'Die Umsatzsteuer-Identifikationsnummer muss zwischen 8 und 14 Zeichen lang sein!',
      ),
      'country_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Land',
        'description' => '',
        'error_text' => 'Bitte wählen Sie ein Land!',
      ),
      'zone_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Region/Bundesland',
        'description' => '',
        'error_text' => 'Bitte wählen Sie eine Region/Bundesland aus!',
      ),
      'company~GuestCheckoutFrm' => 
      array (
        'name' => 'Unternehmen',
        'description' => '',
        'error_text' => 'Der Firmenname muss kürzer als 32 Zeichen sein!',
      ),
      'address_1~GuestCheckoutFrm' => 
      array (
        'name' => 'Adresszeile 1',
        'description' => '',
        'error_text' => 'Adresszeile 1 muss zwischen 3 und 128 Zeichen lang sein!',
      ),
      'address_2~GuestCheckoutFrm' => 
      array (
        'name' => 'Adresszeile 2',
        'description' => '',
        'error_text' => 'Adresszeile 2 muss weniger als 128 Zeichen lang sein!',
      ),
      'city~GuestCheckoutFrm' => 
      array (
        'name' => 'Stadt',
        'description' => '',
        'error_text' => 'Stadt muss zwischen 3 und 128 Zeichen lang sein!',
      ),
      'postcode~GuestCheckoutFrm' => 
      array (
        'name' => 'PLZ/Postleitzahl',
        'description' => '',
        'error_text' => 'PLZ/Postleitzahl muss weniger als 11 Zeichen lang sein!',
      ),
      'firstname~GuestCheckoutFrm' => 
      array (
        'name' => 'Vorname',
        'description' => '',
        'error_text' => 'Vorname muss zwischen 1 und 32 Zeichen lang sein!',
      ),
      'lastname~GuestCheckoutFrm' => 
      array (
        'name' => 'Nachname',
        'description' => '',
        'error_text' => 'Der Nachname muss zwischen 1 und 32 Zeichen lang sein!',
      ),
      'vat_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Umsatzsteuer-ID',
        'description' => '',
        'error_text' => 'USt-ID-Code muss zwischen 8 und 14 Zeichen lang sein!',
      ),
      'email~GuestCheckoutFrm' => 
      array (
        'name' => 'E-Mail',
        'description' => '',
        'error_text' => 'Ihre E-Mail-Adresse wurde nicht angegeben oder ist ungültig!',
      ),
      'telephone~GuestCheckoutFrm' => 
      array (
        'name' => 'Telefonnummer',
        'description' => '',
        'error_text' => 'Ihre Kontakttelefonnummer wurde nicht angegeben oder ist ungültig.',
      ),
      'loginname~CustomerFrm' => 
      array (
        'name' => 'Anmeldename',
        'description' => '',
        'error_text' => 'Login Name muss zwischen 5 und 65 Zeichen lang sein!',
      ),
      'firstname~CustomerFrm' => 
      array (
        'name' => 'Vorname',
        'description' => '',
        'error_text' => 'Der Vorname muss zwischen 1 und 32 Zeichen lang sein!',
      ),
      'lastname~CustomerFrm' => 
      array (
        'name' => 'Nachname',
        'description' => '',
        'error_text' => 'Nachname muss zwischen 1 und 32 Zeichen lang sein!',
      ),
      'email~CustomerFrm' => 
      array (
        'name' => 'E-Mail',
        'description' => '',
        'error_text' => 'Ihre E-Mail-Adresse wurde nicht angegeben oder ist ungültig!',
      ),
      'telephone~CustomerFrm' => 
      array (
        'name' => 'Telefonnummer',
        'description' => '',
        'error_text' => 'Ihre Kontakttelefonnummer wurde nicht angegeben oder ist ungültig.',
      ),
      'firstname~RegisterCustomerFrm' => 
      array (
        'name' => 'Vorname',
        'description' => '',
        'error_text' => 'Vorname muss zwischen 1 und 32 Zeichen lang sein!',
      ),
      'lastname~RegisterCustomerFrm' => 
      array (
        'name' => 'Nachname',
        'description' => '',
        'error_text' => 'Nachname muss zwischen 1 und 32 Zeichen lang sein!',
      ),
      'email~RegisterCustomerFrm' => 
      array (
        'name' => 'E-Mail',
        'description' => '',
        'error_text' => 'Ihre E-Mail-Adresse wurde nicht angegeben oder ist ungültig!',
      ),
      'telephone~RegisterCustomerFrm' => 
      array (
        'name' => 'Telefonnummer',
        'description' => '',
        'error_text' => 'Ihre Kontakttelefonnummer wurde nicht angegeben oder ist ungültig.',
      ),
      'country_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Land',
        'description' => '',
        'error_text' => 'Bitte wählen Sie ein Land aus!',
      ),
      'zone_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Region/Bundesland',
        'description' => '',
        'error_text' => 'Bitte wählen Sie eine Region/Bundesland aus!',
      ),
      'address_1~RegisterCustomerFrm' => 
      array (
        'name' => 'Adresszeile 1',
        'description' => '',
        'error_text' => 'Adresszeile 1 muss zwischen 3 und 128 Zeichen lang sein!',
      ),
      'address_2~RegisterCustomerFrm' => 
      array (
        'name' => 'Adresszeile 2',
        'description' => '',
        'error_text' => 'Adresszeile 2 muss weniger als 128 Zeichen lang sein!',
      ),
      'city~RegisterCustomerFrm' => 
      array (
        'name' => 'Stadt',
        'description' => '',
        'error_text' => 'Die Stadt muss zwischen 3 und 128 Zeichen lang sein!',
      ),
      'postcode~RegisterCustomerFrm' => 
      array (
        'name' => 'PLZ/Postleitzahl',
        'description' => '',
        'error_text' => 'PLZ/Postleitzahl muss weniger als 11 Zeichen lang sein!',
      ),
      'company~RegisterCustomerFrm' => 
      array (
        'name' => 'Unternehmen',
        'description' => '',
        'error_text' => 'Der Firmenname darf nicht länger als 32 Zeichen sein!',
      ),
      'loginname~RegisterCustomerFrm' => 
      array (
        'name' => 'Anmeldename',
        'description' => '',
        'error_text' => 'Login-Name muss alphanumerisch sein und zwischen 5 und 64 Zeichen lang sein!',
      ),
      'newsletter~RegisterCustomerFrm' => 
      array (
        'name' => 'Abonnieren',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Umsatzsteuer-Identifikationsnummer',
        'description' => '',
        'error_text' => 'USt-IdNr. muss zwischen 8 und 14 Zeichen lang sein!',
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
        'name' => 'Ihre persönlichen Daten',
        'description' => '',
      ),
      'address' => 
      array (
        'name' => 'Ihre Adresse',
        'description' => '',
      ),
      'login' => 
      array (
        'name' => 'Anmeldedaten',
        'description' => '',
      ),
      'newsletter' => 
      array (
        'name' => 'Newsletter',
        'description' => '',
      ),
    ),
  ),
);
