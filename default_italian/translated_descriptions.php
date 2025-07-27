<?php
//translated
$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'Pre-Ordine')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Centimetro', 'cm'),
('2', ".$newLanguageId.", 'Millimetro', 'mm'),
('3', ".$newLanguageId.", 'Pollice', 'in')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Chilogrammo', 'kg'),
('2', ".$newLanguageId.", 'Grammo', 'g'),
('5', ".$newLanguageId.", 'Sterlina', 'lb'),
('6', ".$newLanguageId.", 'Oncia', 'oncia')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'Incompleto'),
('1', ".$newLanguageId.", 'In sospeso'),
('2', ".$newLanguageId.", 'Elaborazione'),
('3', ".$newLanguageId.", 'Spedito'),
('5', ".$newLanguageId.", 'Completato'),
('7', ".$newLanguageId.", 'Cancellato'),
('8', ".$newLanguageId.", 'Negato'),
('9', ".$newLanguageId.", 'Storno annullato'),
('10', ".$newLanguageId.", 'Fallito'),
('11', ".$newLanguageId.", 'Rimborsato'),
('12', ".$newLanguageId.", 'Invertito'),
('13', ".$newLanguageId.", 'Contestazione di addebito'),
('14', ".$newLanguageId.", 'Annullato dal cliente')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'Tutte le altre pagine', '', '', '', '', ''),
('2', ".$newLanguageId.", 'Pagina iniziale', '', '', '', '', ''),
('3', ".$newLanguageId.", 'Pagina di accesso', '', '', '', '', ''),
('4', ".$newLanguageId.", 'Pagina Contattaci', '', '', '', '', ''),
('5', ".$newLanguageId.", 'Pagina del prodotto predefinita', '', '', '', '', ''),
('7', ".$newLanguageId.", 'Pagina di manutenzione', '', '', '', '', ''),
('8', ".$newLanguageId.", 'Pannello di controllo cliente', '', '', '', '', ''),
('9', ".$newLanguageId.", 'Dettagli dell\'account', '', '', '', '', ''),
('10', ".$newLanguageId.", 'Cambia password', '', '', '', '', ''),
('11', ".$newLanguageId.", 'Indirizzi', '', '', '', '', ''),
('12', ".$newLanguageId.", 'Lista dei desideri', '', '', '', '', ''),
('13', ".$newLanguageId.", 'Cronologia degli ordini', '', '', '', '', ''),
('14', ".$newLanguageId.", 'Cronologia delle transazioni', '', '', '', '', ''),
('15', ".$newLanguageId.", 'Scaricamenti', '', '', '', '', ''),
('16', ".$newLanguageId.", 'Notifiche', '', '', '', '', ''),
('17', ".$newLanguageId.", 'Pagina del carrello', '', '', '', '', ''),
('18', ".$newLanguageId.", 'Pagina di pagamento veloce', '', '', '', '', ''),
('19', ".$newLanguageId.", 'Pagina di successo del checkout rapido', '', '', '', '', ''),
('20', ".$newLanguageId.", 'Pagina di contenuto predefinito', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'Opzione prodotto'),
('2', ".$newLanguageId.", 'Attributo di download')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'Modulo Contattaci'),
('3', ".$newLanguageId.", 'aasasas')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'Nome:', '', ".$newLanguageId.", 'Il nome deve essere compreso tra 3 e 32 caratteri!'),
('12', 'Email:', '', ".$newLanguageId.", 'L’indirizzo e-mail non sembra essere valido!'),
('13', 'Richiesta:', '', ".$newLanguageId.", 'La richiesta deve contenere tra 10 e 3000 caratteri!'),
('14', 'Inserisci il codice nella casella sottostante:', '', ".$newLanguageId.", 'La verifica umana non è riuscita! Per favore riprova.'),
('15', 'sss', 'q', ".$newLanguageId.", '')");


