<?php

$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'Réamh-Ordú')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Ceintiméadar', 'cm'),
('2', ".$newLanguageId.", 'Milliméadar', 'mm'),
('3', ".$newLanguageId.", 'orlach', 'isteach')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Cileagram', 'kg'),
('2', ".$newLanguageId.", 'Gram', 'g'),
('5', ".$newLanguageId.", 'punt', 'lb'),
('6', ".$newLanguageId.", 'Unsa', 'unsa')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'Neamhiomlán'),
('1', ".$newLanguageId.", 'Ar feitheamh'),
('2', ".$newLanguageId.", 'Próiseáil'),
('3', ".$newLanguageId.", 'Seolta'),
('7', ".$newLanguageId.", 'Ar ceal'),
('5', ".$newLanguageId.", 'Críochnaithe'),
('8', ".$newLanguageId.", 'Diúltaíodh'),
('9', ".$newLanguageId.", 'Aisiompú Cealaithe'),
('10', ".$newLanguageId.", 'Theip'),
('11', ".$newLanguageId.", 'Aisíocadh'),
('12', ".$newLanguageId.", 'droim ar ais'),
('13', ".$newLanguageId.", 'aisíocaíocht'),
('14', ".$newLanguageId.", 'Ar ceal ag an gCustaiméir')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'Gach Leathanach Eile', '', '', '', '', ''),
('2', ".$newLanguageId.", 'Leathanach Baile', '', '', '', '', ''),
('3', ".$newLanguageId.", 'Leathanach Logáil Isteach', '', '', '', '', ''),
('4', ".$newLanguageId.", 'Déan Teagmháil Linn Leathanach', '', '', '', '', ''),
('5', ".$newLanguageId.", 'Leathanach Réamhshocraithe Táirge', '', '', '', '', ''),
('7', ".$newLanguageId.", 'Leathanach Cothabhála', '', '', '', '', ''),
('8', ".$newLanguageId.", 'Painéal na gCustaiméirí', '', '', '', '', ''),
('9', ".$newLanguageId.", 'Sonraí Cuntais', '', '', '', '', ''),
('10', ".$newLanguageId.", 'Athraigh Pasfhocal', '', '', '', '', ''),
('11', ".$newLanguageId.", 'Seoltaí', '', '', '', '', ''),
('12', ".$newLanguageId.", 'Liosta Mianta', '', '', '', '', ''),
('13', ".$newLanguageId.", 'Stair Ordú', '', '', '', '', ''),
('14', ".$newLanguageId.", 'Stair Idirbheart', '', '', '', '', ''),
('15', ".$newLanguageId.", 'Íoslódálacha', '', '', '', '', ''),
('16', ".$newLanguageId.", 'Fógraí', '', '', '', '', ''),
('17', ".$newLanguageId.", 'Leathanach Cairte', '', '', '', '', ''),
('18', ".$newLanguageId.", 'Leathanach Seiceáil Thapa', '', '', '', '', ''),
('19', ".$newLanguageId.", 'Leathanach Ratha Seiceáil Thapa', '', '', '', '', ''),
('20', ".$newLanguageId.", 'Leathanach Réamhshocraithe Ábhar', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'Rogha Táirge'),
('2', ".$newLanguageId.", 'Íosluchtaigh tréithe')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'Foirm Déan Teagmháil Linn')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'Céad ainm:', '', ".$newLanguageId.", 'Caithfidh an t-ainm a bheith idir 3 agus 32 carachtar!'),
('12', 'Ríomhphost:', '', ".$newLanguageId.", 'Is cosúil nach bhfuil Seoladh R-phoist bailí!'),
('13', 'Fiosrúchán:', '', ".$newLanguageId.", 'Caithfidh idir 10 agus 3000 carachtar a bheith san fhiosrúchán!'),
('14', 'Cuir isteach an cód sa bhosca thíos:', '', ".$newLanguageId.", 'Theip ar fhíorú an duine! Bain triail as arís le do thoil.')");


