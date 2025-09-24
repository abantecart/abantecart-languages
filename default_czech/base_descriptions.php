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
        'name' => 'Předobjednávka',
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
        'title' => 'Centimetr',
        'unit' => 'cm',
      ),
      'MMET' => 
      array (
        'title' => 'Milimetr',
        'unit' => 'mm',
      ),
      'INCH' => 
      array (
        'title' => 'Palec',
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
        'title' => 'Libra',
        'unit' => 'lb',
      ),
      'USOU' => 
      array (
        'title' => 'Unce',
        'unit' => 'unce',
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
        'name' => 'Nedokončeno',
      ),
      'pending' => 
      array (
        'name' => 'Čekající',
      ),
      'processing' => 
      array (
        'name' => 'Zpracování',
      ),
      'shipped' => 
      array (
        'name' => 'Odesláno',
      ),
      'completed' => 
      array (
        'name' => 'Dokončeno',
      ),
      'canceled' => 
      array (
        'name' => 'Zrušeno',
      ),
      'denied' => 
      array (
        'name' => 'Zamítnuto',
      ),
      'canceled_reversal' => 
      array (
        'name' => 'Zrušené vrácení',
      ),
      'failed' => 
      array (
        'name' => 'Selhalo',
      ),
      'refunded' => 
      array (
        'name' => 'Vráceno',
      ),
      'reversed' => 
      array (
        'name' => 'Obrácený',
      ),
      'chargeback' => 
      array (
        'name' => 'Zpětné stržení platby',
      ),
      'canceled_by_customer' => 
      array (
        'name' => 'Zrušeno zákazníkem',
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
        'type_name' => 'Možnost produktu',
      ),
      'download_attribute' => 
      array (
        'type_name' => 'Atribut ke stažení',
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
        'description' => 'Formulář adresy zákazníka',
      ),
      'ContactUsFrm' => 
      array (
        'description' => 'Kontaktní formulář',
      ),
      'CustomerFrm' => 
      array (
        'description' => 'Formulář údajů o zákazníkovi',
      ),
      'GuestCheckoutFrm' => 
      array (
        'description' => 'Formulář adresy a údajů hosta',
      ),
      'RegisterCustomerFrm' => 
      array (
        'description' => 'Registrační formulář zákazníka',
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
        'name' => 'Jméno:',
        'description' => '',
        'error_text' => 'Jméno musí mít mezi 3 a 32 znaky!',
      ),
      'email~ContactUsFrm' => 
      array (
        'name' => 'E-mail:',
        'description' => '',
        'error_text' => 'E-mailová adresa se nezdá být platná!',
      ),
      'enquiry~ContactUsFrm' => 
      array (
        'name' => 'Dotaz:',
        'description' => '',
        'error_text' => 'Dotaz musí obsahovat 10 až 3000 znaků!',
      ),
      'captcha~ContactUsFrm' => 
      array (
        'name' => 'Zadejte kód do pole níže:',
        'description' => '',
        'error_text' => 'Ověření člověka selhalo! Zkuste to prosím znovu.',
      ),
      'country_id~AddressFrm' => 
      array (
        'name' => 'Země',
        'description' => '',
        'error_text' => 'Vyberte prosím zemi!',
      ),
      'zone_id~AddressFrm' => 
      array (
        'name' => 'Zóna',
        'description' => '',
        'error_text' => 'Vyberte region/stát!',
      ),
      'company~AddressFrm' => 
      array (
        'name' => 'Společnost',
        'description' => '',
        'error_text' => 'Název společnosti musí mít méně než 32 znaků!',
      ),
      'address_1~AddressFrm' => 
      array (
        'name' => 'Řádek adresy 1',
        'description' => '',
        'error_text' => 'První řádek adresy musí mít mezi 3 a 128 znaky!',
      ),
      'address_2~AddressFrm' => 
      array (
        'name' => 'Řádek adresy 2',
        'description' => '',
        'error_text' => 'Řádek adresy 2 musí mít méně než 128 znaků!',
      ),
      'city~AddressFrm' => 
      array (
        'name' => 'Město',
        'description' => '',
        'error_text' => 'Město musí mít od 3 do 128 znaků!',
      ),
      'postcode~AddressFrm' => 
      array (
        'name' => 'PSČ',
        'description' => '',
        'error_text' => 'PSČ/Poštovní směrovací číslo musí mít méně než 11 znaků!',
      ),
      'firstname~AddressFrm' => 
      array (
        'name' => 'Křestní jméno',
        'description' => '',
        'error_text' => 'Jméno musí být dlouhé 1 až 32 znaků!',
      ),
      'lastname~AddressFrm' => 
      array (
        'name' => 'Příjmení',
        'description' => '',
        'error_text' => 'Příjmení musí mít mezi 1 a 32 znaky!',
      ),
      'default~AddressFrm' => 
      array (
        'name' => 'Výchozí adresa',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~AddressFrm' => 
      array (
        'name' => 'DIČ',
        'description' => '',
        'error_text' => 'Kód DIČ musí mít mezi 8 a 14 znaky!',
      ),
      'country_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Země',
        'description' => '',
        'error_text' => 'Prosím, vyberte zemi!',
      ),
      'zone_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Kraj/Stát',
        'description' => '',
        'error_text' => 'Prosím, vyberte region/stát!',
      ),
      'company~GuestCheckoutFrm' => 
      array (
        'name' => 'Společnost',
        'description' => '',
        'error_text' => 'Název společnosti musí mít méně než 32 znaků!',
      ),
      'address_1~GuestCheckoutFrm' => 
      array (
        'name' => 'Řádek adresy 1',
        'description' => '',
        'error_text' => 'Řádek adresy 1 musí mít 3 až 128 znaků!',
      ),
      'address_2~GuestCheckoutFrm' => 
      array (
        'name' => 'Řádek adresy 2',
        'description' => '',
        'error_text' => 'Adresní řádek 2 musí mít méně než 128 znaků!',
      ),
      'city~GuestCheckoutFrm' => 
      array (
        'name' => 'Město',
        'description' => '',
        'error_text' => 'Město musí mít mezi 3 a 128 znaky!',
      ),
      'postcode~GuestCheckoutFrm' => 
      array (
        'name' => 'PSČ',
        'description' => '',
        'error_text' => 'PSČ / Poštovní směrovací číslo musí mít méně než 11 znaků!',
      ),
      'firstname~GuestCheckoutFrm' => 
      array (
        'name' => 'Křestní jméno',
        'description' => '',
        'error_text' => 'Jméno musí mít od 1 do 32 znaků!',
      ),
      'lastname~GuestCheckoutFrm' => 
      array (
        'name' => 'Příjmení',
        'description' => '',
        'error_text' => 'Příjmení musí mít 1 až 32 znaků!',
      ),
      'vat_id~GuestCheckoutFrm' => 
      array (
        'name' => 'DIČ',
        'description' => '',
        'error_text' => 'Kód DIČ musí obsahovat 8 až 14 znaků!',
      ),
      'email~GuestCheckoutFrm' => 
      array (
        'name' => 'E-mail',
        'description' => '',
        'error_text' => 'Váš e-mail není poskytnut nebo je neplatný!',
      ),
      'telephone~GuestCheckoutFrm' => 
      array (
        'name' => 'Telefonní číslo',
        'description' => '',
        'error_text' => 'Vaše kontaktní telefonní číslo není uvedeno nebo je neplatné.',
      ),
      'loginname~CustomerFrm' => 
      array (
        'name' => 'Přihlašovací jméno',
        'description' => '',
        'error_text' => 'Přihlašovací jméno musí mít délku od 5 do 65 znaků!',
      ),
      'firstname~CustomerFrm' => 
      array (
        'name' => 'Křestní jméno',
        'description' => '',
        'error_text' => 'Křestní jméno musí mít mezi 1 a 32 znaky!',
      ),
      'lastname~CustomerFrm' => 
      array (
        'name' => 'Příjmení',
        'description' => '',
        'error_text' => 'Příjmení musí být mezi 1 a 32 znaky!',
      ),
      'email~CustomerFrm' => 
      array (
        'name' => 'E-mail',
        'description' => '',
        'error_text' => 'Váš e-mail nebyl zadán nebo je neplatný!',
      ),
      'telephone~CustomerFrm' => 
      array (
        'name' => 'Telefonní číslo',
        'description' => '',
        'error_text' => 'Vaše kontaktní telefonní číslo není uvedeno nebo je neplatné.',
      ),
      'firstname~RegisterCustomerFrm' => 
      array (
        'name' => 'Křestní jméno',
        'description' => '',
        'error_text' => 'Křestní jméno musí mít mezi 1 a 32 znaky!',
      ),
      'lastname~RegisterCustomerFrm' => 
      array (
        'name' => 'Příjmení',
        'description' => '',
        'error_text' => 'Příjmení musí mít mezi 1 a 32 znaky!',
      ),
      'email~RegisterCustomerFrm' => 
      array (
        'name' => 'E-mail',
        'description' => '',
        'error_text' => 'Váš e-mail není zadán nebo je neplatný!',
      ),
      'telephone~RegisterCustomerFrm' => 
      array (
        'name' => 'Telefonní číslo',
        'description' => '',
        'error_text' => 'Vaše kontaktní telefonní číslo není uvedeno nebo je neplatné.',
      ),
      'country_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Země',
        'description' => '',
        'error_text' => 'Vyberte prosím zemi!',
      ),
      'zone_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Kraj/Stát',
        'description' => '',
        'error_text' => 'Prosím vyberte region/stát!',
      ),
      'address_1~RegisterCustomerFrm' => 
      array (
        'name' => 'Řádek adresy 1',
        'description' => '',
        'error_text' => 'První řádek adresy musí být dlouhý od 3 do 128 znaků!',
      ),
      'address_2~RegisterCustomerFrm' => 
      array (
        'name' => 'Řádek adresy 2',
        'description' => '',
        'error_text' => 'Řádek adresy 2 musí mít méně než 128 znaků!',
      ),
      'city~RegisterCustomerFrm' => 
      array (
        'name' => 'Město',
        'description' => '',
        'error_text' => 'Město musí mít mezi 3 a 128 znaky!',
      ),
      'postcode~RegisterCustomerFrm' => 
      array (
        'name' => 'PSČ/Poštovní směrovací číslo',
        'description' => '',
        'error_text' => 'PSČ/poštovní směrovací číslo musí být méně než 11 znaků!',
      ),
      'company~RegisterCustomerFrm' => 
      array (
        'name' => 'Společnost',
        'description' => '',
        'error_text' => 'Název společnosti musí mít méně než 32 znaků!',
      ),
      'loginname~RegisterCustomerFrm' => 
      array (
        'name' => 'Přihlašovací jméno',
        'description' => '',
        'error_text' => 'Přihlašovací jméno musí být alfanumerické a mít délku od 5 do 64 znaků!',
      ),
      'newsletter~RegisterCustomerFrm' => 
      array (
        'name' => 'Přihlásit se',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~RegisterCustomerFrm' => 
      array (
        'name' => 'DIČ',
        'description' => '',
        'error_text' => 'Kód DIČ musí mít mezi 8 a 14 znaky!',
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
        'name' => 'Vaše osobní údaje',
        'description' => '',
      ),
      'address' => 
      array (
        'name' => 'Vaše adresa',
        'description' => '',
      ),
      'login' => 
      array (
        'name' => 'Přihlašovací údaje',
        'description' => '',
      ),
      'newsletter' => 
      array (
        'name' => 'Zpravodaj',
        'description' => '',
      ),
    ),
  ),
);
