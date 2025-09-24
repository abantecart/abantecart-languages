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
        'name' => 'Pre-pedido',
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
        'title' => 'Centímetro',
        'unit' => 'cm',
      ),
      'MMET' => 
      array (
        'title' => 'Milímetro',
        'unit' => 'mm',
      ),
      'INCH' => 
      array (
        'title' => 'Pulgada',
        'unit' => 'en',
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
        'title' => 'Kilogramo',
        'unit' => 'kg',
      ),
      'GRAM' => 
      array (
        'title' => 'Gramo',
        'unit' => 'g',
      ),
      'PUND' => 
      array (
        'title' => 'Libra',
        'unit' => 'lb',
      ),
      'USOU' => 
      array (
        'title' => 'Onza',
        'unit' => 'onza',
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
        'name' => 'Pendiente',
      ),
      'processing' => 
      array (
        'name' => 'Procesando',
      ),
      'shipped' => 
      array (
        'name' => 'Enviado',
      ),
      'completed' => 
      array (
        'name' => 'Completado',
      ),
      'canceled' => 
      array (
        'name' => 'Cancelado',
      ),
      'denied' => 
      array (
        'name' => 'Denegado',
      ),
      'canceled_reversal' => 
      array (
        'name' => 'Reversión cancelada',
      ),
      'failed' => 
      array (
        'name' => 'Fallido',
      ),
      'refunded' => 
      array (
        'name' => 'Reembolsado',
      ),
      'reversed' => 
      array (
        'name' => 'Invertido',
      ),
      'chargeback' => 
      array (
        'name' => 'Contracargo',
      ),
      'canceled_by_customer' => 
      array (
        'name' => 'Cancelado por el cliente',
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
        'type_name' => 'Opción de producto',
      ),
      'download_attribute' => 
      array (
        'type_name' => 'Descargar atributo',
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
        'description' => 'Formulario de dirección del cliente',
      ),
      'ContactUsFrm' => 
      array (
        'description' => 'Formulario de contacto',
      ),
      'CustomerFrm' => 
      array (
        'description' => 'Formulario de detalles del cliente',
      ),
      'GuestCheckoutFrm' => 
      array (
        'description' => 'Formulario de dirección y detalles del invitado',
      ),
      'RegisterCustomerFrm' => 
      array (
        'description' => 'Formulario de registro de cliente',
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
        'name' => 'Nombre:',
        'description' => '',
        'error_text' => '¡El nombre debe tener entre 3 y 32 caracteres!',
      ),
      'email~ContactUsFrm' => 
      array (
        'name' => 'Email:',
        'description' => '',
        'error_text' => 'La dirección de correo electrónico no parece ser válida!',
      ),
      'enquiry~ContactUsFrm' => 
      array (
        'name' => 'Consulta:',
        'description' => '',
        'error_text' => '¡La consulta debe tener entre 10 y 3000 caracteres!',
      ),
      'captcha~ContactUsFrm' => 
      array (
        'name' => 'Introduzca el código en el cuadro de abajo:',
        'description' => '',
        'error_text' => '¡La verificación humana ha fallado! Por favor, inténtalo de nuevo.',
      ),
      'country_id~AddressFrm' => 
      array (
        'name' => 'País',
        'description' => '',
        'error_text' => '¡Por favor seleccione un país!',
      ),
      'zone_id~AddressFrm' => 
      array (
        'name' => 'Zona',
        'description' => '',
        'error_text' => '¡Por favor seleccione una región/estado!',
      ),
      'company~AddressFrm' => 
      array (
        'name' => 'Empresa',
        'description' => '',
        'error_text' => '¡El nombre de la empresa debe tener menos de 32 caracteres!',
      ),
      'address_1~AddressFrm' => 
      array (
        'name' => 'Línea de dirección 1',
        'description' => '',
        'error_text' => '¡La línea de dirección 1 debe tener entre 3 y 128 caracteres!',
      ),
      'address_2~AddressFrm' => 
      array (
        'name' => 'Línea de dirección 2',
        'description' => '',
        'error_text' => 'La línea de dirección 2 debe tener menos de 128 caracteres!',
      ),
      'city~AddressFrm' => 
      array (
        'name' => 'Ciudad',
        'description' => '',
        'error_text' => 'La ciudad debe tener entre 3 y 128 caracteres!',
      ),
      'postcode~AddressFrm' => 
      array (
        'name' => 'Código postal / Código postal',
        'description' => '',
        'error_text' => 'El código ZIP/código postal debe tener menos de 11 caracteres!',
      ),
      'firstname~AddressFrm' => 
      array (
        'name' => 'Nombre',
        'description' => '',
        'error_text' => '¡El nombre debe tener entre 1 y 32 caracteres!',
      ),
      'lastname~AddressFrm' => 
      array (
        'name' => 'Apellido',
        'description' => '',
        'error_text' => 'El apellido debe tener entre 1 y 32 caracteres!',
      ),
      'default~AddressFrm' => 
      array (
        'name' => 'Dirección predeterminada',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~AddressFrm' => 
      array (
        'name' => 'ID de IVA',
        'description' => '',
        'error_text' => '¡El código de IVA debe tener entre 8 y 14 caracteres!',
      ),
      'country_id~GuestCheckoutFrm' => 
      array (
        'name' => 'País',
        'description' => '',
        'error_text' => '¡Por favor seleccione un país!',
      ),
      'zone_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Región/Estado',
        'description' => '',
        'error_text' => '¡Por favor seleccione una región/estado!',
      ),
      'company~GuestCheckoutFrm' => 
      array (
        'name' => 'Empresa',
        'description' => '',
        'error_text' => '¡El nombre de la empresa debe tener menos de 32 caracteres!',
      ),
      'address_1~GuestCheckoutFrm' => 
      array (
        'name' => 'Línea de dirección 1',
        'description' => '',
        'error_text' => 'La línea de dirección 1 debe tener entre 3 y 128 caracteres!',
      ),
      'address_2~GuestCheckoutFrm' => 
      array (
        'name' => 'Dirección Línea 2',
        'description' => '',
        'error_text' => 'La línea de dirección 2 debe tener menos de 128 caracteres!',
      ),
      'city~GuestCheckoutFrm' => 
      array (
        'name' => 'Ciudad',
        'description' => '',
        'error_text' => 'La ciudad debe tener entre 3 y 128 caracteres!',
      ),
      'postcode~GuestCheckoutFrm' => 
      array (
        'name' => 'Código postal/Código postal',
        'description' => '',
        'error_text' => 'El código postal/ZIP debe tener menos de 11 caracteres!',
      ),
      'firstname~GuestCheckoutFrm' => 
      array (
        'name' => 'Nombre',
        'description' => '',
        'error_text' => 'El primer nombre debe tener entre 1 y 32 caracteres!',
      ),
      'lastname~GuestCheckoutFrm' => 
      array (
        'name' => 'Apellido',
        'description' => '',
        'error_text' => '¡El apellido debe tener entre 1 y 32 caracteres!',
      ),
      'vat_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Identificación de IVA',
        'description' => '',
        'error_text' => '¡El código de identificación de IVA debe tener entre 8 y 14 caracteres!',
      ),
      'email~GuestCheckoutFrm' => 
      array (
        'name' => 'Correo electrónico',
        'description' => '',
        'error_text' => '¡Su correo electrónico no ha sido proporcionado o es inválido!',
      ),
      'telephone~GuestCheckoutFrm' => 
      array (
        'name' => 'Número de teléfono',
        'description' => '',
        'error_text' => 'Su número de teléfono de contacto no ha sido proporcionado o no es válido.',
      ),
      'loginname~CustomerFrm' => 
      array (
        'name' => 'Nombre de usuario',
        'description' => '',
        'error_text' => '¡El nombre de usuario debe tener entre 5 y 65 caracteres!',
      ),
      'firstname~CustomerFrm' => 
      array (
        'name' => 'Nombre',
        'description' => '',
        'error_text' => '¡El nombre debe tener entre 1 y 32 caracteres!',
      ),
      'lastname~CustomerFrm' => 
      array (
        'name' => 'Apellido',
        'description' => '',
        'error_text' => '¡El apellido debe tener entre 1 y 32 caracteres!',
      ),
      'email~CustomerFrm' => 
      array (
        'name' => 'Correo electrónico',
        'description' => '',
        'error_text' => '¡Su correo electrónico no ha sido proporcionado o es inválido!',
      ),
      'telephone~CustomerFrm' => 
      array (
        'name' => 'Número de teléfono',
        'description' => '',
        'error_text' => 'Su número de teléfono de contacto no ha sido proporcionado o es inválido.',
      ),
      'firstname~RegisterCustomerFrm' => 
      array (
        'name' => 'Nombre',
        'description' => '',
        'error_text' => '¡El Nombre debe tener entre 1 y 32 caracteres!',
      ),
      'lastname~RegisterCustomerFrm' => 
      array (
        'name' => 'Apellido',
        'description' => '',
        'error_text' => '¡El apellido debe tener entre 1 y 32 caracteres!',
      ),
      'email~RegisterCustomerFrm' => 
      array (
        'name' => 'Correo electrónico',
        'description' => '',
        'error_text' => '¡Su correo electrónico no se ha proporcionado o es inválido!',
      ),
      'telephone~RegisterCustomerFrm' => 
      array (
        'name' => 'Número de teléfono',
        'description' => '',
        'error_text' => 'Su número de teléfono de contacto no ha sido proporcionado o es inválido.',
      ),
      'country_id~RegisterCustomerFrm' => 
      array (
        'name' => 'País',
        'description' => '',
        'error_text' => '¡Por favor seleccione un país!',
      ),
      'zone_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Región/Estado',
        'description' => '',
        'error_text' => '¡Por favor seleccione una región/estado!',
      ),
      'address_1~RegisterCustomerFrm' => 
      array (
        'name' => 'Dirección Línea 1',
        'description' => '',
        'error_text' => 'La línea de dirección 1 debe tener entre 3 y 128 caracteres!',
      ),
      'address_2~RegisterCustomerFrm' => 
      array (
        'name' => 'Línea de dirección 2',
        'description' => '',
        'error_text' => '¡La línea de dirección 2 debe tener menos de 128 caracteres!',
      ),
      'city~RegisterCustomerFrm' => 
      array (
        'name' => 'Ciudad',
        'description' => '',
        'error_text' => '¡La ciudad debe tener entre 3 y 128 caracteres!',
      ),
      'postcode~RegisterCustomerFrm' => 
      array (
        'name' => 'Código postal',
        'description' => '',
        'error_text' => 'Código postal/Código postal debe tener menos de 11 caracteres!',
      ),
      'company~RegisterCustomerFrm' => 
      array (
        'name' => 'Empresa',
        'description' => '',
        'error_text' => '¡El nombre de la empresa debe tener menos de 32 caracteres!',
      ),
      'loginname~RegisterCustomerFrm' => 
      array (
        'name' => 'Nombre de usuario',
        'description' => '',
        'error_text' => '¡El nombre de usuario debe ser solo alfanumérico y tener entre 5 y 64 caracteres!',
      ),
      'newsletter~RegisterCustomerFrm' => 
      array (
        'name' => 'Suscribirse',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~RegisterCustomerFrm' => 
      array (
        'name' => 'ID de IVA',
        'description' => '',
        'error_text' => '¡El código de identificación de IVA debe tener entre 8 y 14 caracteres!',
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
        'name' => 'Tus datos personales',
        'description' => '',
      ),
      'address' => 
      array (
        'name' => 'Su dirección',
        'description' => '',
      ),
      'login' => 
      array (
        'name' => 'Detalles de inicio de sesión',
        'description' => '',
      ),
      'newsletter' => 
      array (
        'name' => 'Boletín de noticias',
        'description' => '',
      ),
    ),
  ),
);
