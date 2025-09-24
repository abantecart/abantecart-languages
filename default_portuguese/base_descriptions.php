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
        'name' => 'Pré-encomenda',
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
        'title' => 'Polegada',
        'unit' => 'em',
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
        'title' => 'Quilograma',
        'unit' => 'kg',
      ),
      'GRAM' => 
      array (
        'title' => 'Grama',
        'unit' => 'g',
      ),
      'PUND' => 
      array (
        'title' => 'Libra',
        'unit' => 'lb',
      ),
      'USOU' => 
      array (
        'title' => 'Onça',
        'unit' => 'onça',
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
        'name' => 'Pendente',
      ),
      'processing' => 
      array (
        'name' => 'Processando',
      ),
      'shipped' => 
      array (
        'name' => 'Enviado',
      ),
      'completed' => 
      array (
        'name' => 'Concluído',
      ),
      'canceled' => 
      array (
        'name' => 'Cancelado',
      ),
      'denied' => 
      array (
        'name' => 'Negado',
      ),
      'canceled_reversal' => 
      array (
        'name' => 'Estorno Cancelado',
      ),
      'failed' => 
      array (
        'name' => 'Falhou',
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
        'name' => 'Estorno',
      ),
      'canceled_by_customer' => 
      array (
        'name' => 'Cancelado pelo Cliente',
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
        'type_name' => 'Opção de Produto',
      ),
      'download_attribute' => 
      array (
        'type_name' => 'Atributo de Download',
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
        'description' => 'Formulário de Endereço do Cliente',
      ),
      'ContactUsFrm' => 
      array (
        'description' => 'Formulário de Contato',
      ),
      'CustomerFrm' => 
      array (
        'description' => 'Formulário de Detalhes do Cliente',
      ),
      'GuestCheckoutFrm' => 
      array (
        'description' => 'Formulário de Endereço e Detalhes do Convidado',
      ),
      'RegisterCustomerFrm' => 
      array (
        'description' => 'Formulário de Registro de Cliente',
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
        'name' => 'Primeiro nome:',
        'description' => '',
        'error_text' => 'O nome deve ter entre 3 e 32 caracteres!',
      ),
      'email~ContactUsFrm' => 
      array (
        'name' => 'E-mail:',
        'description' => '',
        'error_text' => 'O endereço de e-mail não parece ser válido!',
      ),
      'enquiry~ContactUsFrm' => 
      array (
        'name' => 'Consulta:',
        'description' => '',
        'error_text' => 'A consulta deve ter entre 10 e 3000 caracteres!',
      ),
      'captcha~ContactUsFrm' => 
      array (
        'name' => 'Digite o código na caixa abaixo:',
        'description' => '',
        'error_text' => 'A verificação humana falhou! Por favor, tente novamente.',
      ),
      'country_id~AddressFrm' => 
      array (
        'name' => 'País',
        'description' => '',
        'error_text' => 'Por favor, selecione um país!',
      ),
      'zone_id~AddressFrm' => 
      array (
        'name' => 'Zona',
        'description' => '',
        'error_text' => 'Por favor, selecione uma região/estado!',
      ),
      'company~AddressFrm' => 
      array (
        'name' => 'Empresa',
        'description' => '',
        'error_text' => 'O nome da empresa deve ter menos de 32 caracteres!',
      ),
      'address_1~AddressFrm' => 
      array (
        'name' => 'Linha de Endereço 1',
        'description' => '',
        'error_text' => 'A linha de endereço 1 deve ter entre 3 e 128 caracteres!',
      ),
      'address_2~AddressFrm' => 
      array (
        'name' => 'Linha de Endereço 2',
        'description' => '',
        'error_text' => 'A Linha de Endereço 2 deve ter menos de 128 caracteres!',
      ),
      'city~AddressFrm' => 
      array (
        'name' => 'Cidade',
        'description' => '',
        'error_text' => 'A cidade deve ter entre 3 e 128 caracteres!',
      ),
      'postcode~AddressFrm' => 
      array (
        'name' => 'CEP/Código Postal',
        'description' => '',
        'error_text' => 'CEP/Código Postal deve ter menos de 11 caracteres!',
      ),
      'firstname~AddressFrm' => 
      array (
        'name' => 'Primeiro Nome',
        'description' => '',
        'error_text' => 'O primeiro nome deve ter entre 1 e 32 caracteres!',
      ),
      'lastname~AddressFrm' => 
      array (
        'name' => 'Sobrenome',
        'description' => '',
        'error_text' => 'Sobrenome deve ter entre 1 e 32 caracteres!',
      ),
      'default~AddressFrm' => 
      array (
        'name' => 'Endereço padrão',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~AddressFrm' => 
      array (
        'name' => 'ID de IVA',
        'description' => '',
        'error_text' => 'O código de identificação de IVA deve ter entre 8 e 14 caracteres!',
      ),
      'country_id~GuestCheckoutFrm' => 
      array (
        'name' => 'País',
        'description' => '',
        'error_text' => 'Por favor, selecione um país!',
      ),
      'zone_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Região/Estado',
        'description' => '',
        'error_text' => 'Por favor, selecione uma região/estado!',
      ),
      'company~GuestCheckoutFrm' => 
      array (
        'name' => 'Empresa',
        'description' => '',
        'error_text' => 'O Nome da Empresa deve ter menos de 32 caracteres!',
      ),
      'address_1~GuestCheckoutFrm' => 
      array (
        'name' => 'Linha de Endereço 1',
        'description' => '',
        'error_text' => 'A Linha de Endereço 1 deve ter entre 3 e 128 caracteres!',
      ),
      'address_2~GuestCheckoutFrm' => 
      array (
        'name' => 'Linha de Endereço 2',
        'description' => '',
        'error_text' => 'A linha de endereço 2 deve ter menos de 128 caracteres!',
      ),
      'city~GuestCheckoutFrm' => 
      array (
        'name' => 'Cidade',
        'description' => '',
        'error_text' => 'A cidade deve ter entre 3 e 128 caracteres!',
      ),
      'postcode~GuestCheckoutFrm' => 
      array (
        'name' => 'CEP/Código Postal',
        'description' => '',
        'error_text' => 'CEP/Código Postal deve ter menos de 11 caracteres!',
      ),
      'firstname~GuestCheckoutFrm' => 
      array (
        'name' => 'Primeiro Nome',
        'description' => '',
        'error_text' => 'Primeiro Nome deve ter entre 1 e 32 caracteres!',
      ),
      'lastname~GuestCheckoutFrm' => 
      array (
        'name' => 'Sobrenome',
        'description' => '',
        'error_text' => 'Sobrenome deve ter entre 1 e 32 caracteres!',
      ),
      'vat_id~GuestCheckoutFrm' => 
      array (
        'name' => 'ID de IVA',
        'description' => '',
        'error_text' => 'O código de identificação de IVA deve ter entre 8 e 14 caracteres!',
      ),
      'email~GuestCheckoutFrm' => 
      array (
        'name' => 'E-mail',
        'description' => '',
        'error_text' => 'Seu e-mail não foi fornecido ou é inválido!',
      ),
      'telephone~GuestCheckoutFrm' => 
      array (
        'name' => 'Número de Telefone',
        'description' => '',
        'error_text' => 'Seu número de telefone de contato não foi informado ou é inválido.',
      ),
      'loginname~CustomerFrm' => 
      array (
        'name' => 'Nome de login',
        'description' => '',
        'error_text' => 'O Nome de Login deve ter entre 5 e 65 caracteres!',
      ),
      'firstname~CustomerFrm' => 
      array (
        'name' => 'Primeiro Nome',
        'description' => '',
        'error_text' => 'O primeiro nome deve ter entre 1 e 32 caracteres!',
      ),
      'lastname~CustomerFrm' => 
      array (
        'name' => 'Sobrenome',
        'description' => '',
        'error_text' => 'Sobrenome deve ter entre 1 e 32 caracteres!',
      ),
      'email~CustomerFrm' => 
      array (
        'name' => 'E-mail',
        'description' => '',
        'error_text' => 'Seu e-mail não foi fornecido ou é inválido!',
      ),
      'telephone~CustomerFrm' => 
      array (
        'name' => 'Número de Telefone',
        'description' => '',
        'error_text' => 'Seu número de telefone de contato não foi fornecido ou é inválido.',
      ),
      'firstname~RegisterCustomerFrm' => 
      array (
        'name' => 'Primeiro Nome',
        'description' => '',
        'error_text' => 'Primeiro Nome deve ter entre 1 e 32 caracteres!',
      ),
      'lastname~RegisterCustomerFrm' => 
      array (
        'name' => 'Sobrenome',
        'description' => '',
        'error_text' => 'O sobrenome deve ter entre 1 e 32 caracteres!',
      ),
      'email~RegisterCustomerFrm' => 
      array (
        'name' => 'E-mail',
        'description' => '',
        'error_text' => 'Seu e-mail não foi fornecido ou é inválido!',
      ),
      'telephone~RegisterCustomerFrm' => 
      array (
        'name' => 'Número de Telefone',
        'description' => '',
        'error_text' => 'Seu número de telefone de contato não foi fornecido ou é inválido.',
      ),
      'country_id~RegisterCustomerFrm' => 
      array (
        'name' => 'País',
        'description' => '',
        'error_text' => 'Por favor, selecione um país!',
      ),
      'zone_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Região/Estado',
        'description' => '',
        'error_text' => 'Por favor, selecione uma região/estado!',
      ),
      'address_1~RegisterCustomerFrm' => 
      array (
        'name' => 'Linha de Endereço 1',
        'description' => '',
        'error_text' => 'A Linha de Endereço 1 deve ter entre 3 e 128 caracteres!',
      ),
      'address_2~RegisterCustomerFrm' => 
      array (
        'name' => 'Linha de Endereço 2',
        'description' => '',
        'error_text' => 'Linha de Endereço 2 deve ter meno​s de 128 caracteres!',
      ),
      'city~RegisterCustomerFrm' => 
      array (
        'name' => 'Cidade',
        'description' => '',
        'error_text' => 'A cidade deve ter entre 3 e 128 caracteres!',
      ),
      'postcode~RegisterCustomerFrm' => 
      array (
        'name' => 'CEP/Código Postal',
        'description' => '',
        'error_text' => 'CEP/Código Postal deve ter menos de 11 caracteres!',
      ),
      'company~RegisterCustomerFrm' => 
      array (
        'name' => 'Empresa',
        'description' => '',
        'error_text' => 'O nome da empresa deve ter menos de 32 caracteres!',
      ),
      'loginname~RegisterCustomerFrm' => 
      array (
        'name' => 'Nome de Login',
        'description' => '',
        'error_text' => 'Nome de Login deve ser apenas alfanumérico e ter entre 5 e 64 caracteres!',
      ),
      'newsletter~RegisterCustomerFrm' => 
      array (
        'name' => 'Inscrever-se',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Identificação de IVA',
        'description' => '',
        'error_text' => 'O Código de identificação de IVA deve ter entre 8 e 14 caracteres!',
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
        'name' => 'Seus Detalhes Pessoais',
        'description' => '',
      ),
      'address' => 
      array (
        'name' => 'Seu Endereço',
        'description' => '',
      ),
      'login' => 
      array (
        'name' => 'Detalhes de Login',
        'description' => '',
      ),
      'newsletter' => 
      array (
        'name' => 'Boletim informativo',
        'description' => '',
      ),
    ),
  ),
);
