<?php
//translated
$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'Pre-pedido')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Centímetro', 'cm'),
('2', ".$newLanguageId.", 'Milímetro', 'mm'),
('3', ".$newLanguageId.", 'Pulgada', 'en')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Kilogramo', 'kg'),
('2', ".$newLanguageId.", 'Gramo', 'g'),
('5', ".$newLanguageId.", 'Libra', 'libra'),
('6', ".$newLanguageId.", 'Onza', 'oz')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'Incompleto'),
('1', ".$newLanguageId.", 'Pendiente'),
('2', ".$newLanguageId.", 'Procesando'),
('3', ".$newLanguageId.", 'Enviado'),
('5', ".$newLanguageId.", 'Completado'),
('7', ".$newLanguageId.", 'Cancelado'),
('8', ".$newLanguageId.", 'Denegado'),
('9', ".$newLanguageId.", 'Reversión cancelada'),
('10', ".$newLanguageId.", 'Fallido'),
('11', ".$newLanguageId.", 'Reembolsado'),
('12', ".$newLanguageId.", 'Invertido'),
('13', ".$newLanguageId.", 'Contracargo'),
('14', ".$newLanguageId.", 'Cancelado por el cliente')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'Todas las demás páginas', '', '', '', '', ''),
('2', ".$newLanguageId.", 'Página de inicio', '', '', '', '', ''),
('3', ".$newLanguageId.", 'Página de inicio de sesión', '', '', '', '', ''),
('4', ".$newLanguageId.", 'Página de Contacto', '', '', '', '', ''),
('5', ".$newLanguageId.", 'Página de producto predeterminada', '', '', '', '', ''),
('7', ".$newLanguageId.", 'Página de mantenimiento', '', '', '', '', ''),
('8', ".$newLanguageId.", 'Panel de control del cliente', '', '', '', '', ''),
('9', ".$newLanguageId.", 'Detalles de la cuenta', '', '', '', '', ''),
('10', ".$newLanguageId.", 'Cambiar contraseña', '', '', '', '', ''),
('11', ".$newLanguageId.", 'Direcciones', '', '', '', '', ''),
('12', ".$newLanguageId.", 'Lista de deseos', '', '', '', '', ''),
('13', ".$newLanguageId.", 'Historial de pedidos', '', '', '', '', ''),
('14', ".$newLanguageId.", 'Historial de transacciones', '', '', '', '', ''),
('15', ".$newLanguageId.", 'Descargas', '', '', '', '', ''),
('16', ".$newLanguageId.", 'Notificaciones', '', '', '', '', ''),
('17', ".$newLanguageId.", 'Página del carrito', '', '', '', '', ''),
('18', ".$newLanguageId.", 'Página de Pago Rápido', '', '', '', '', ''),
('19', ".$newLanguageId.", 'Página de éxito de Pago exprés', '', '', '', '', ''),
('20', ".$newLanguageId.", 'Página de contenido predeterminada', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'Opción de producto'),
('2', ".$newLanguageId.", 'Atributo de descarga')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'Formulario de contacto'),
('3', ".$newLanguageId.", 'aasasas')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'Nombre:', '', ".$newLanguageId.", '¡El nombre debe tener entre 3 y 32 caracteres!'),
('12', 'Correo electrónico:', '', ".$newLanguageId.", 'La dirección de correo electrónico no parece ser válida!'),
('13', 'Consulta:', '', ".$newLanguageId.", '¡La consulta debe tener entre 10 y 3000 caracteres!'),
('14', 'Ingrese el código en el cuadro de abajo:', '', ".$newLanguageId.", '¡La verificación humana ha fallado! Por favor, inténtalo agan.'),
('15', 'sss', 'q', ".$newLanguageId.", '')");


