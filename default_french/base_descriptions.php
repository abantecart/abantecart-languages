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
        'name' => 'Pré-commande',
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
        'title' => 'Centimètre',
        'unit' => 'cm',
      ),
      'MMET' => 
      array (
        'title' => 'Millimètre',
        'unit' => 'mm',
      ),
      'INCH' => 
      array (
        'title' => 'Pouce',
        'unit' => 'dans',
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
        'title' => 'Kilogramme',
        'unit' => 'kg',
      ),
      'GRAM' => 
      array (
        'title' => 'Gramme',
        'unit' => 'g',
      ),
      'PUND' => 
      array (
        'title' => 'Livre',
        'unit' => 'livre',
      ),
      'USOU' => 
      array (
        'title' => 'once',
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
        'name' => 'Incomplet',
      ),
      'pending' => 
      array (
        'name' => 'En attente',
      ),
      'processing' => 
      array (
        'name' => 'Traitement',
      ),
      'shipped' => 
      array (
        'name' => 'Expédié',
      ),
      'completed' => 
      array (
        'name' => 'Terminé',
      ),
      'canceled' => 
      array (
        'name' => 'Annulé',
      ),
      'denied' => 
      array (
        'name' => 'Refusé',
      ),
      'canceled_reversal' => 
      array (
        'name' => 'Réversion annulée',
      ),
      'failed' => 
      array (
        'name' => 'Échec',
      ),
      'refunded' => 
      array (
        'name' => 'Remboursé',
      ),
      'reversed' => 
      array (
        'name' => 'Inversé',
      ),
      'chargeback' => 
      array (
        'name' => 'Rétrofacturation',
      ),
      'canceled_by_customer' => 
      array (
        'name' => 'Annulé par le client',
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
        'type_name' => 'Option de produit',
      ),
      'download_attribute' => 
      array (
        'type_name' => 'Attribut de téléchargement',
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
        'description' => 'Formulaire d’adresse client',
      ),
      'ContactUsFrm' => 
      array (
        'description' => 'Formulaire de contact',
      ),
      'CustomerFrm' => 
      array (
        'description' => 'Formulaire de détails client',
      ),
      'GuestCheckoutFrm' => 
      array (
        'description' => 'Formulaire d’adresse et de détails de l’invité',
      ),
      'RegisterCustomerFrm' => 
      array (
        'description' => 'Formulaire d\'inscription client',
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
        'name' => 'Prénom :',
        'description' => '',
        'error_text' => 'Le nom doit comporter entre 3 et 32 caractères !',
      ),
      'email~ContactUsFrm' => 
      array (
        'name' => 'Courriel:',
        'description' => '',
        'error_text' => 'L’adresse e-mail ne semble pas être valide !',
      ),
      'enquiry~ContactUsFrm' => 
      array (
        'name' => 'Demande :',
        'description' => '',
        'error_text' => 'La demande doit contenir entre 10 et 3000 caractères !',
      ),
      'captcha~ContactUsFrm' => 
      array (
        'name' => 'Entrez le code dans la case ci-dessous :',
        'description' => '',
        'error_text' => 'La vérification humaine a échoué ! Veuillez réessayer agan.',
      ),
      'country_id~AddressFrm' => 
      array (
        'name' => 'Pays',
        'description' => '',
        'error_text' => 'Veuillez sélectionner un pays !',
      ),
      'zone_id~AddressFrm' => 
      array (
        'name' => 'Zone',
        'description' => '',
        'error_text' => 'Veuillez sélectionner une région/état !',
      ),
      'company~AddressFrm' => 
      array (
        'name' => 'Société',
        'description' => '',
        'error_text' => 'Le nom de la société doit contenir moins de 32 caractères !',
      ),
      'address_1~AddressFrm' => 
      array (
        'name' => 'Ligne d’adresse 1',
        'description' => '',
        'error_text' => 'Address Line 1 doit comporter entre 3 et 128 caractères !',
      ),
      'address_2~AddressFrm' => 
      array (
        'name' => 'Ligne d’adresse 2',
        'description' => '',
        'error_text' => 'La ligne d’adresse 2 doit comporter moins de 128 caractères !',
      ),
      'city~AddressFrm' => 
      array (
        'name' => 'Ville',
        'description' => '',
        'error_text' => 'La ville doit comporter entre 3 et 128 caractères !',
      ),
      'postcode~AddressFrm' => 
      array (
        'name' => 'Code postal/Code postal',
        'description' => '',
        'error_text' => 'Le code postal doit comporter moins de 11 caractères !',
      ),
      'firstname~AddressFrm' => 
      array (
        'name' => 'Prénom',
        'description' => '',
        'error_text' => 'Le prénom doit comporter entre 1 et 32 caractères !',
      ),
      'lastname~AddressFrm' => 
      array (
        'name' => 'Nom de famille',
        'description' => '',
        'error_text' => 'Le nom de famille doit comporter entre 1 et 32 caractères !',
      ),
      'default~AddressFrm' => 
      array (
        'name' => 'Adresse par défaut',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~AddressFrm' => 
      array (
        'name' => 'Numéro de TVA',
        'description' => '',
        'error_text' => 'Le code d’identification de la TVA doit comporter entre 8 et 14 caractères !',
      ),
      'country_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Pays',
        'description' => '',
        'error_text' => 'Veuillez sélectionner un pays !',
      ),
      'zone_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Région/État',
        'description' => '',
        'error_text' => 'Veuillez sélectionner une région/état !',
      ),
      'company~GuestCheckoutFrm' => 
      array (
        'name' => 'Entreprise',
        'description' => '',
        'error_text' => 'Le nom de l’entreprise doit comporter moins de 32 caractères !',
      ),
      'address_1~GuestCheckoutFrm' => 
      array (
        'name' => 'Adresse ligne 1',
        'description' => '',
        'error_text' => 'La ligne d’adresse 1 doit contenir entre 3 et 128 caractères !',
      ),
      'address_2~GuestCheckoutFrm' => 
      array (
        'name' => 'Adresse ligne 2',
        'description' => '',
        'error_text' => 'La ligne d’adresse 2 doit comporter moins de 128 caractères !',
      ),
      'city~GuestCheckoutFrm' => 
      array (
        'name' => 'Ville',
        'description' => '',
        'error_text' => 'La ville doit comporter entre 3 et 128 caractères !',
      ),
      'postcode~GuestCheckoutFrm' => 
      array (
        'name' => 'Code ZIP/Code postal',
        'description' => '',
        'error_text' => 'ZIP/Code postal doit comporter moins de 11 caractères !',
      ),
      'firstname~GuestCheckoutFrm' => 
      array (
        'name' => 'Prénom',
        'description' => '',
        'error_text' => 'Le prénom doit comporter entre 1 et 32 caractères !',
      ),
      'lastname~GuestCheckoutFrm' => 
      array (
        'name' => 'Nom de famille',
        'description' => '',
        'error_text' => 'Le nom de famille doit comporter entre 1 et 32 caractères !',
      ),
      'vat_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Numéro de TVA',
        'description' => '',
        'error_text' => 'Le code d’identification TVA doit comporter entre 8 et 14 caractères !',
      ),
      'email~GuestCheckoutFrm' => 
      array (
        'name' => 'E-mail',
        'description' => '',
        'error_text' => 'Votre e-mail n\'est pas fourni ou est invalide !',
      ),
      'telephone~GuestCheckoutFrm' => 
      array (
        'name' => 'Numéro de téléphone',
        'description' => '',
        'error_text' => 'Votre numéro de téléphone de contact n’est pas fourni ou est invalide.',
      ),
      'loginname~CustomerFrm' => 
      array (
        'name' => 'Nom d’utilisateur',
        'description' => '',
        'error_text' => 'Le nom de connexion doit comporter entre 5 et 65 caractères !',
      ),
      'firstname~CustomerFrm' => 
      array (
        'name' => 'Prénom',
        'description' => '',
        'error_text' => 'Le prénom doit comporter entre 1 et 32 caractères !',
      ),
      'lastname~CustomerFrm' => 
      array (
        'name' => 'Nom de famille',
        'description' => '',
        'error_text' => 'Le nom de famille doit comporter entre 1 et 32 caractères !',
      ),
      'email~CustomerFrm' => 
      array (
        'name' => 'E-mail',
        'description' => '',
        'error_text' => 'Votre e-mail n\'est pas fourni ou est invalide !',
      ),
      'telephone~CustomerFrm' => 
      array (
        'name' => 'Numéro de téléphone',
        'description' => '',
        'error_text' => 'Votre numéro de téléphone de contact n’est pas fourni ou est invalide.',
      ),
      'firstname~RegisterCustomerFrm' => 
      array (
        'name' => 'Prénom',
        'description' => '',
        'error_text' => 'Le prénom doit comporter entre 1 et 32 caractères !',
      ),
      'lastname~RegisterCustomerFrm' => 
      array (
        'name' => 'Nom de famille',
        'description' => '',
        'error_text' => 'Le nom de famille doit comporter entre 1 et 32 caractères !',
      ),
      'email~RegisterCustomerFrm' => 
      array (
        'name' => 'E-mail',
        'description' => '',
        'error_text' => 'Votre e-mail n\'est pas fourni ou est invalide !',
      ),
      'telephone~RegisterCustomerFrm' => 
      array (
        'name' => 'Numéro de téléphone',
        'description' => '',
        'error_text' => 'Votre numéro de téléphone de contact n’est pas fourni ou est invalide.',
      ),
      'country_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Pays',
        'description' => '',
        'error_text' => 'Veuillez sélectionner un pays !',
      ),
      'zone_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Région/État',
        'description' => '',
        'error_text' => 'Veuillez sélectionner une région/état !',
      ),
      'address_1~RegisterCustomerFrm' => 
      array (
        'name' => 'Ligne d\'adresse 1',
        'description' => '',
        'error_text' => 'La ligne d’adresse 1 doit comporter entre 3 et 128 caractères !',
      ),
      'address_2~RegisterCustomerFrm' => 
      array (
        'name' => 'Adresse Ligne 2',
        'description' => '',
        'error_text' => 'La ligne d’adresse 2 doit comporter moins de 128 caractères !',
      ),
      'city~RegisterCustomerFrm' => 
      array (
        'name' => 'Ville',
        'description' => '',
        'error_text' => 'La ville doit comporter entre 3 et 128 caractères !',
      ),
      'postcode~RegisterCustomerFrm' => 
      array (
        'name' => 'Code postal/Code postal',
        'description' => '',
        'error_text' => 'Le code postal doit comporter moins de 11 caractères !',
      ),
      'company~RegisterCustomerFrm' => 
      array (
        'name' => 'Société',
        'description' => '',
        'error_text' => 'Le nom de l\'entreprise doit comporter moins de 32 caractères !',
      ),
      'loginname~RegisterCustomerFrm' => 
      array (
        'name' => 'Nom d’utilisateur',
        'description' => '',
        'error_text' => 'Le nom d’utilisateur doit être uniquement alphanumérique et compter entre 5 et 64 caractères !',
      ),
      'newsletter~RegisterCustomerFrm' => 
      array (
        'name' => 'S\'abonner',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Numéro de TVA',
        'description' => '',
        'error_text' => 'Le code d’identification de TVA doit comporter entre 8 et 14 caractères !',
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
        'name' => 'Vos informations personnelles',
        'description' => '',
      ),
      'address' => 
      array (
        'name' => 'Votre adresse',
        'description' => '',
      ),
      'login' => 
      array (
        'name' => 'Informations de connexion',
        'description' => '',
      ),
      'newsletter' => 
      array (
        'name' => 'Lettre d\'information',
        'description' => '',
      ),
    ),
  ),
);
