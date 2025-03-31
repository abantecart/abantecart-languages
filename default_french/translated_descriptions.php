<?php

$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'Précommande')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Centimètre', 'cm'),
('2', ".$newLanguageId.", 'Millimètre', 'mm'),
('3', ".$newLanguageId.", 'Pouce', 'dans')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Kilogramme', 'kg'),
('2', ".$newLanguageId.", 'Gramme', 'g'),
('5', ".$newLanguageId.", 'Livre', 'kg'),
('6', ".$newLanguageId.", 'Once', 'once')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'Incomplet'),
('1', ".$newLanguageId.", 'En attente'),
('2', ".$newLanguageId.", 'Traitement'),
('3', ".$newLanguageId.", 'Expédié'),
('7', ".$newLanguageId.", 'Annulé'),
('5', ".$newLanguageId.", 'Complété'),
('8', ".$newLanguageId.", 'Refusé'),
('9', ".$newLanguageId.", 'Annulation de l&#39;annulation'),
('10', ".$newLanguageId.", 'Échoué'),
('11', ".$newLanguageId.", 'Remboursé'),
('12', ".$newLanguageId.", 'Renversé'),
('13', ".$newLanguageId.", 'Rétrofacturation'),
('14', ".$newLanguageId.", 'Annulé par le client')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'Toutes les autres pages', '', '', '', '', ''),
('2', ".$newLanguageId.", 'Page d&#39;accueil', '', '', '', '', ''),
('3', ".$newLanguageId.", 'Page de connexion', '', '', '', '', ''),
('4', ".$newLanguageId.", 'Page Contactez-nous', '', '', '', '', ''),
('5', ".$newLanguageId.", 'Page produit par défaut', '', '', '', '', ''),
('7', ".$newLanguageId.", 'Page de maintenance', '', '', '', '', ''),
('8', ".$newLanguageId.", 'Tableau de bord client', '', '', '', '', ''),
('9', ".$newLanguageId.", 'Détails du compte', '', '', '', '', ''),
('10', ".$newLanguageId.", 'Changer le mot de passe', '', '', '', '', ''),
('11', ".$newLanguageId.", 'Adresses', '', '', '', '', ''),
('12', ".$newLanguageId.", 'Liste de souhaits', '', '', '', '', ''),
('13', ".$newLanguageId.", 'Historique des commandes', '', '', '', '', ''),
('14', ".$newLanguageId.", 'Historique des transactions', '', '', '', '', ''),
('15', ".$newLanguageId.", 'Téléchargements', '', '', '', '', ''),
('16', ".$newLanguageId.", 'Notifications', '', '', '', '', ''),
('17', ".$newLanguageId.", 'Page du panier', '', '', '', '', ''),
('18', ".$newLanguageId.", 'Page de paiement rapide', '', '', '', '', ''),
('19', ".$newLanguageId.", 'Page de réussite du paiement rapide', '', '', '', '', ''),
('20', ".$newLanguageId.", 'Page de contenu par défaut', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'Option de produit'),
('2', ".$newLanguageId.", 'Télécharger l&#39;attribut')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'Formulaire de contact')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'Prénom:', '', ".$newLanguageId.", 'Le nom doit comporter entre 3 et 32 caractères !'),
('12', 'E-mail:', '', ".$newLanguageId.", 'L&#39;adresse e-mail ne semble pas être valide !'),
('13', 'Enquête:', '', ".$newLanguageId.", 'La demande doit comporter entre 10 et 3000 caractères !'),
('14', 'Entrez le code dans la case ci-dessous :', '', ".$newLanguageId.", 'La vérification humaine a échoué ! Veuillez réessayer.')");


