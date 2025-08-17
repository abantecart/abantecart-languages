<?php
//translated
$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'Pré-venda')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Centímetro', 'cm'),
('2', ".$newLanguageId.", 'Milímetro', 'mm'),
('3', ".$newLanguageId.", 'Polegada', 'em')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Quilograma', 'kg'),
('2', ".$newLanguageId.", 'Grama', 'g'),
('5', ".$newLanguageId.", 'Libra', 'libra'),
('6', ".$newLanguageId.", 'Onça', 'onça')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'Incompleto'),
('1', ".$newLanguageId.", 'Pendente'),
('2', ".$newLanguageId.", 'Processando'),
('3', ".$newLanguageId.", 'Enviado'),
('5', ".$newLanguageId.", 'Concluído'),
('7', ".$newLanguageId.", 'Cancelado'),
('8', ".$newLanguageId.", 'Negado'),
('9', ".$newLanguageId.", 'Reversão Cancelada'),
('10', ".$newLanguageId.", 'Falhou'),
('11', ".$newLanguageId.", 'Reembolsado'),
('12', ".$newLanguageId.", 'Invertido'),
('13', ".$newLanguageId.", 'Estorno'),
('14', ".$newLanguageId.", 'Cancelado pelo Cliente')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'Todas as Outras Páginas', '', '', '', '', ''),
('2', ".$newLanguageId.", 'Página Inicial', '', '', '', '', ''),
('3', ".$newLanguageId.", 'Página de Login', '', '', '', '', ''),
('4', ".$newLanguageId.", 'Página Fale Conosco', '', '', '', '', ''),
('5', ".$newLanguageId.", 'Página Padrão do Produto', '', '', '', '', ''),
('7', ".$newLanguageId.", 'Página de Manutenção', '', '', '', '', ''),
('8', ".$newLanguageId.", 'Painel do Cliente', '', '', '', '', ''),
('9', ".$newLanguageId.", 'Detalhes da Conta', '', '', '', '', ''),
('10', ".$newLanguageId.", 'Alterar Senha', '', '', '', '', ''),
('11', ".$newLanguageId.", 'Endereços', '', '', '', '', ''),
('12', ".$newLanguageId.", 'Lista de Desejos', '', '', '', '', ''),
('13', ".$newLanguageId.", 'Histórico de Pedidos', '', '', '', '', ''),
('14', ".$newLanguageId.", 'Histórico de Transações', '', '', '', '', ''),
('15', ".$newLanguageId.", 'Downloads', '', '', '', '', ''),
('16', ".$newLanguageId.", 'Notificações', '', '', '', '', ''),
('17', ".$newLanguageId.", 'Página do Carrinho', '', '', '', '', ''),
('18', ".$newLanguageId.", 'Página de checkout rápido', '', '', '', '', ''),
('19', ".$newLanguageId.", 'Página de Sucesso do Checkout Rápido', '', '', '', '', ''),
('20', ".$newLanguageId.", 'Página de Conteúdo Padrão', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'Opção de Produto'),
('2', ".$newLanguageId.", 'Atributo de Download'),
('3', ".$newLanguageId.", 'Atributo do Cliente')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'Formulário de Contato'),
('4', ".$newLanguageId.", 'Formulário de Endereço do Cliente'),
('5', ".$newLanguageId.", 'formulário de endereço e detalhes do convidado')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'Primeiro nome:', '', ".$newLanguageId.", 'O nome deve ter entre 3 e 32 caracteres!'),
('12', 'E-mail:', '', ".$newLanguageId.", 'O endereço de e-mail não parece ser válido!'),
('13', 'Consulta:', '', ".$newLanguageId.", 'A consulta deve ter entre 10 e 3000 caracteres!'),
('14', 'Digite o código na caixa abaixo:', '', ".$newLanguageId.", 'A verificação humana falhou! Por favor, tente novamente.'),
('15', 'ewqewewew', '', ".$newLanguageId.", ''),
('16', 'países', '', ".$newLanguageId.", ''),
('17', 'ccccccccc', '', ".$newLanguageId.", ''),
('18', 'Número de IVA', '', ".$newLanguageId.", ''),
('19', 'País', '', ".$newLanguageId.", 'Por favor, selecione um país!'),
('20', 'Zona', '', ".$newLanguageId.", 'Por favor, selecione uma região/estado!'),
('21', 'Empresa', '', ".$newLanguageId.", 'O nome da empresa deve ter menos de 32 caracteres!'),
('22', 'Linha de Endereço 1', '', ".$newLanguageId.", 'A linha de endereço 1 deve ter entre 3 e 128 caracteres!'),
('23', 'Linha de Endereço 2', '', ".$newLanguageId.", 'A linha 2 do endereço deve ter menos de 128 caracteres!'),
('24', 'Cidade', '', ".$newLanguageId.", 'Cidade deve ter entre 3 e 128 caracteres!'),
('25', 'CEP/código postal', '', ".$newLanguageId.", 'CEP/Código Postal deve ter menos de 11 caracteres!'),
('26', 'Primeiro Nome', '', ".$newLanguageId.", 'Primeiro Nome deve ter entre 1 e 32 caracteres!'),
('27', 'Sobrenome', '', ".$newLanguageId.", 'Sobrenome deve ter entre 1 e 32 caracteres!'),
('28', 'Endereço Padrão', '', ".$newLanguageId.", ''),
('29', 'Endereço Padrão', 'ID de IVA', ".$newLanguageId.", ''),
('30', 'ID do IVA', '', ".$newLanguageId.", 'O código de identificação de IVA deve ter entre 8 e 14 caracteres!'),
('31', 'País', '', ".$newLanguageId.", '')");


