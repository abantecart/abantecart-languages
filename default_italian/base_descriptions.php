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
        'name' => 'Pre-ordine',
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
        'title' => 'centimetro',
        'unit' => 'cm',
      ),
      'MMET' => 
      array (
        'title' => 'Millimetro',
        'unit' => 'mm',
      ),
      'INCH' => 
      array (
        'title' => 'Pollice',
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
        'title' => 'Chilogrammo',
        'unit' => 'kg',
      ),
      'GRAM' => 
      array (
        'title' => 'Grammo',
        'unit' => 'g',
      ),
      'PUND' => 
      array (
        'title' => 'Sterlina',
        'unit' => 'lb',
      ),
      'USOU' => 
      array (
        'title' => 'Oncia',
        'unit' => 'oncia',
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
        'name' => 'Incompleto',
      ),
      'pending' => 
      array (
        'name' => 'In sospeso',
      ),
      'processing' => 
      array (
        'name' => 'Elaborazione',
      ),
      'shipped' => 
      array (
        'name' => 'Spedito',
      ),
      'completed' => 
      array (
        'name' => 'Completato',
      ),
      'canceled' => 
      array (
        'name' => 'Annullato',
      ),
      'denied' => 
      array (
        'name' => 'Negato',
      ),
      'canceled_reversal' => 
      array (
        'name' => 'Storno annullato',
      ),
      'failed' => 
      array (
        'name' => 'Fallito',
      ),
      'refunded' => 
      array (
        'name' => 'Rimborsato',
      ),
      'reversed' => 
      array (
        'name' => 'Invertito',
      ),
      'chargeback' => 
      array (
        'name' => 'Storno',
      ),
      'canceled_by_customer' => 
      array (
        'name' => 'Annullato dal cliente',
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
        'type_name' => 'Opzione prodotto',
      ),
      'download_attribute' => 
      array (
        'type_name' => 'Attributo di download',
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
        'description' => 'Modulo indirizzo cliente',
      ),
      'ContactUsFrm' => 
      array (
        'description' => 'Modulo Contattaci',
      ),
      'CustomerFrm' => 
      array (
        'description' => 'Modulo dettagli cliente',
      ),
      'GuestCheckoutFrm' => 
      array (
        'description' => 'Modulo Indirizzo e Dettagli dell’Ospite',
      ),
      'RegisterCustomerFrm' => 
      array (
        'description' => 'Modulo di registrazione cliente',
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
        'name' => 'Nome:',
        'description' => '',
        'error_text' => 'Il nome deve essere compreso tra 3 e 32 caratteri!',
      ),
      'email~ContactUsFrm' => 
      array (
        'name' => 'E-mail:',
        'description' => '',
        'error_text' => 'L\'indirizzo e-mail non sembra essere valido!',
      ),
      'enquiry~ContactUsFrm' => 
      array (
        'name' => 'Richiesta:',
        'description' => '',
        'error_text' => 'La richiesta deve essere compresa tra 10 e 3000 caratteri!',
      ),
      'captcha~ContactUsFrm' => 
      array (
        'name' => 'Inserisci il codice nella casella qui sotto:',
        'description' => '',
        'error_text' => 'La verifica umana non è riuscita! Per favore riprova.',
      ),
      'country_id~AddressFrm' => 
      array (
        'name' => 'Paese',
        'description' => '',
        'error_text' => 'Per favore seleziona un paese!',
      ),
      'zone_id~AddressFrm' => 
      array (
        'name' => 'Zona',
        'description' => '',
        'error_text' => 'Si prega di selezionare una regione/stato!',
      ),
      'company~AddressFrm' => 
      array (
        'name' => 'Azienda',
        'description' => '',
        'error_text' => 'Il nome dell’azienda deve contenere meno di 32 caratteri!',
      ),
      'address_1~AddressFrm' => 
      array (
        'name' => 'Riga indirizzo 1',
        'description' => '',
        'error_text' => 'La riga indirizzo 1 deve essere lunga tra 3 e 128 caratteri!',
      ),
      'address_2~AddressFrm' => 
      array (
        'name' => 'Seconda riga dell\'indirizzo',
        'description' => '',
        'error_text' => 'La riga 2 dell’indirizzo deve contenere meno di 128 caratteri!',
      ),
      'city~AddressFrm' => 
      array (
        'name' => 'Città',
        'description' => '',
        'error_text' => 'La città deve essere compresa tra 3 e 128 caratteri!',
      ),
      'postcode~AddressFrm' => 
      array (
        'name' => 'CAP/Codice Postale',
        'description' => '',
        'error_text' => 'CAP/Codice Postale deve avere meno di 11 caratteri!',
      ),
      'firstname~AddressFrm' => 
      array (
        'name' => 'Nome',
        'description' => '',
        'error_text' => 'Il nome deve essere compreso tra 1 e 32 caratteri!',
      ),
      'lastname~AddressFrm' => 
      array (
        'name' => 'Cognome',
        'description' => '',
        'error_text' => 'Il cognome deve essere compreso tra 1 e 32 caratteri!',
      ),
      'default~AddressFrm' => 
      array (
        'name' => 'Indirizzo predefinito',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~AddressFrm' => 
      array (
        'name' => 'Partita IVA',
        'description' => '',
        'error_text' => 'Il codice IVA deve essere compreso tra 8 e 14 caratteri!',
      ),
      'country_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Paese',
        'description' => '',
        'error_text' => 'Per favore seleziona un paese!',
      ),
      'zone_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Regione/Stato',
        'description' => '',
        'error_text' => 'Si prega di selezionare una regione/stato!',
      ),
      'company~GuestCheckoutFrm' => 
      array (
        'name' => 'Azienda',
        'description' => '',
        'error_text' => 'Il nome dell’azienda deve contenere meno di 32 caratteri!',
      ),
      'address_1~GuestCheckoutFrm' => 
      array (
        'name' => 'Indirizzo riga 1',
        'description' => '',
        'error_text' => 'La riga dell\'indirizzo 1 deve contenere tra 3 e 128 caratteri!',
      ),
      'address_2~GuestCheckoutFrm' => 
      array (
        'name' => 'Indirizzo riga 2',
        'description' => '',
        'error_text' => 'La seconda riga dell’indirizzo deve contenere meno di 128 caratteri!',
      ),
      'city~GuestCheckoutFrm' => 
      array (
        'name' => 'Città',
        'description' => '',
        'error_text' => 'La città deve essere compresa tra 3 e 128 caratteri!',
      ),
      'postcode~GuestCheckoutFrm' => 
      array (
        'name' => 'Codice di avviamento postale/Codice postale',
        'description' => '',
        'error_text' => 'CAP/Codice postale deve contenere meno di 11 caratteri!',
      ),
      'firstname~GuestCheckoutFrm' => 
      array (
        'name' => 'Nome',
        'description' => '',
        'error_text' => 'Il nome deve essere compreso tra 1 e 32 caratteri!',
      ),
      'lastname~GuestCheckoutFrm' => 
      array (
        'name' => 'Cognome',
        'description' => '',
        'error_text' => 'Il cognome deve essere compreso tra 1 e 32 caratteri!',
      ),
      'vat_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Partita IVA',
        'description' => '',
        'error_text' => 'Il codice partita IVA deve essere compreso tra 8 e 14 caratteri!',
      ),
      'email~GuestCheckoutFrm' => 
      array (
        'name' => 'E-mail',
        'description' => '',
        'error_text' => 'La tua email non è stata fornita o non è valida!',
      ),
      'telephone~GuestCheckoutFrm' => 
      array (
        'name' => 'Numero di telefono',
        'description' => '',
        'error_text' => 'Il tuo numero di telefono di contatto non è stato fornito o non è valido.',
      ),
      'loginname~CustomerFrm' => 
      array (
        'name' => 'Nome utente',
        'description' => '',
        'error_text' => 'Il nome di accesso deve essere compreso tra 5 e 65 caratteri!',
      ),
      'firstname~CustomerFrm' => 
      array (
        'name' => 'Nome',
        'description' => '',
        'error_text' => 'Il nome deve essere compreso tra 1 e 32 caratteri!',
      ),
      'lastname~CustomerFrm' => 
      array (
        'name' => 'Cognome',
        'description' => '',
        'error_text' => 'Il cognome deve essere compreso tra 1 e 32 caratteri!',
      ),
      'email~CustomerFrm' => 
      array (
        'name' => 'Posta elettronica',
        'description' => '',
        'error_text' => 'La tua email non è stata fornita o non è valida!',
      ),
      'telephone~CustomerFrm' => 
      array (
        'name' => 'Numero di telefono',
        'description' => '',
        'error_text' => 'Il tuo numero di telefono di contatto non è stato fornito o non è valido.',
      ),
      'firstname~RegisterCustomerFrm' => 
      array (
        'name' => 'Nome',
        'description' => '',
        'error_text' => 'Il nome deve essere compreso tra 1 e 32 caratteri!',
      ),
      'lastname~RegisterCustomerFrm' => 
      array (
        'name' => 'Cognome',
        'description' => '',
        'error_text' => 'Il cognome deve essere lungo da 1 a 32 caratteri!',
      ),
      'email~RegisterCustomerFrm' => 
      array (
        'name' => 'Email',
        'description' => '',
        'error_text' => 'La tua email non è fornita o è invalida!',
      ),
      'telephone~RegisterCustomerFrm' => 
      array (
        'name' => 'Numero di telefono',
        'description' => '',
        'error_text' => 'Il tuo numero di telefono di contatto non è stato fornito o non è valido.',
      ),
      'country_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Paese',
        'description' => '',
        'error_text' => 'Per favore, seleziona un paese!',
      ),
      'zone_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Regione/Stato',
        'description' => '',
        'error_text' => 'Per favore, seleziona una regione/stato!',
      ),
      'address_1~RegisterCustomerFrm' => 
      array (
        'name' => 'Indirizzo riga 1',
        'description' => '',
        'error_text' => 'La riga 1 dell’indirizzo deve essere compresa tra 3 e 128 caratteri!',
      ),
      'address_2~RegisterCustomerFrm' => 
      array (
        'name' => 'Indirizzo riga 2',
        'description' => '',
        'error_text' => 'La riga dell’indirizzo 2 deve contenere meno di 128 caratteri!',
      ),
      'city~RegisterCustomerFrm' => 
      array (
        'name' => 'Città',
        'description' => '',
        'error_text' => 'La città deve essere compresa tra 3 e 128 caratteri!',
      ),
      'postcode~RegisterCustomerFrm' => 
      array (
        'name' => 'CAP/Codice postale',
        'description' => '',
        'error_text' => 'CAP/Codice postale deve contenere meno di 11 caratteri!',
      ),
      'company~RegisterCustomerFrm' => 
      array (
        'name' => 'Azienda',
        'description' => '',
        'error_text' => 'Il nome dell\'azienda deve essere inferiore a 32 caratteri!',
      ),
      'loginname~RegisterCustomerFrm' => 
      array (
        'name' => 'Nome utente',
        'description' => '',
        'error_text' => 'Il nome di login deve essere alfanumerico e avere una lunghezza compresa tra 5 e 64 caratteri!',
      ),
      'newsletter~RegisterCustomerFrm' => 
      array (
        'name' => 'Iscriviti',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Partita IVA',
        'description' => '',
        'error_text' => 'Il Codice Partita IVA deve essere compreso tra 8 e 14 caratteri!',
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
        'name' => 'I tuoi dati personali',
        'description' => '',
      ),
      'address' => 
      array (
        'name' => 'Il tuo indirizzo',
        'description' => '',
      ),
      'login' => 
      array (
        'name' => 'Dettagli di accesso',
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
