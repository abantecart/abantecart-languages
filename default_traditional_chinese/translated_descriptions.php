<?php

$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'Pre-Order a Wobɛhyehyɛ')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Sɛntimita', 'cm'),
('2', ".$newLanguageId.", 'Milimita a wɔde yɛ adwuma', 'mm'),
('3', ".$newLanguageId.", 'Inch', 'mu')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Kilogram a ɛyɛ kilogram', 'kg'),
('2', ".$newLanguageId.", 'Gram', 'g'),
('5', ".$newLanguageId.", 'Pɔn', 'lb'),
('6', ".$newLanguageId.", 'Ounce na ɛyɛ', 'oz')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'Ɛnyɛ nea edi mũ'),
('1', ".$newLanguageId.", 'Retwɛn'),
('2', ".$newLanguageId.", 'Nneɛma a wɔyɛ'),
('3', ".$newLanguageId.", 'Wɔde mena'),
('7', ".$newLanguageId.", 'Wɔatwa mu'),
('5', ".$newLanguageId.", 'Wɔawie'),
('8', ".$newLanguageId.", 'Annye antom'),
('9', ".$newLanguageId.", 'Wɔatwa mu Reversal'),
('10', ".$newLanguageId.", 'Dii nkoguo'),
('11', ".$newLanguageId.", 'Wɔasan de sika no ama'),
('12', ".$newLanguageId.", 'Wɔadan no akyi'),
('13', ".$newLanguageId.", 'Chargeback a wɔde tua ho ka'),
('14', ".$newLanguageId.", 'Adetɔfo na wɔatwa mu')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'Nkratafa Afoforo Nyinaa', '', '', '', '', ''),
('2', ".$newLanguageId.", 'Home Page', '', '', '', '', ''),
('3', ".$newLanguageId.", 'Login Kratafa', '', '', '', '', ''),
('4', ".$newLanguageId.", 'Contact Us Page', '', '', '', '', ''),
('5', ".$newLanguageId.", 'Default Product Kratafa a Wɔde Di Dwuma', '', '', '', '', ''),
('7', ".$newLanguageId.", 'Nsiesiei Kratafa', '', '', '', '', ''),
('8', ".$newLanguageId.", 'Adetɔfo Dashboard', '', '', '', '', ''),
('9', ".$newLanguageId.", 'Akontaabu Ho Nsɛm', '', '', '', '', ''),
('10', ".$newLanguageId.", 'Sesa Password no', '', '', '', '', ''),
('11', ".$newLanguageId.", 'Address ahorow', '', '', '', '', ''),
('12', ".$newLanguageId.", 'Wish List', '', '', '', '', ''),
('13', ".$newLanguageId.", 'Order Abakɔsɛm', '', '', '', '', ''),
('14', ".$newLanguageId.", 'Nkitahodi Abakɔsɛm', '', '', '', '', ''),
('15', ".$newLanguageId.", 'Nneɛma a wɔtwe', '', '', '', '', ''),
('16', ".$newLanguageId.", 'Amanneɛbɔ ahorow', '', '', '', '', ''),
('17', ".$newLanguageId.", 'Teaseɛnam Kratafa', '', '', '', '', ''),
('18', ".$newLanguageId.", 'Fast Checkout Kratafa', '', '', '', '', ''),
('19', ".$newLanguageId.", 'Fast Checkout Nkonimdi Kratafa', '', '', '', '', ''),
('20', ".$newLanguageId.", 'Default Nsɛm a Ɛwɔ Mu Kratafa', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'Product Option a Wobɛpaw'),
('2', ".$newLanguageId.", 'Twe Su a Ɛwɔ Hɔ')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'Yɛn Nkitahodi Krataa')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'Fie din:', '', ".$newLanguageId.", 'Ɛsɛ sɛ edin no yɛ nkyerɛwde 3 kosi 32!'),
('12', 'Email:', '', ".$newLanguageId.", 'Ɛte sɛ nea E-Mail Address no nyɛ adwuma!'),
('13', 'Nhwehwɛmu:', '', ".$newLanguageId.", 'Ɛsɛ sɛ asɛmmisa no yɛ nkyerɛwde 10 kosi 3000!'),
('14', 'Hyehyɛ koodu no wɔ adaka a ɛwɔ ase ha no mu:', '', ".$newLanguageId.", 'Nnipa a wɔde wɔn ho hyɛ mu no adi nkogu! Mesrɛ wo sɔ hwɛ agan.')");


