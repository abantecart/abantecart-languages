<?php

$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'Išankstinis užsakymas')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'centimetras', 'cm'),
('2', ".$newLanguageId.", 'Milimetras', 'mm'),
('3', ".$newLanguageId.", 'Col', 'in')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Kilogramas', 'kg'),
('2', ".$newLanguageId.", 'Gramas', 'g'),
('5', ".$newLanguageId.", 'Svaras', 'lb'),
('6', ".$newLanguageId.", 'Uncija', 'oz')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'Nebaigta'),
('1', ".$newLanguageId.", 'Laukiama'),
('2', ".$newLanguageId.", 'Apdorojimas'),
('3', ".$newLanguageId.", 'Išsiųsta'),
('7', ".$newLanguageId.", 'Atšaukta'),
('5', ".$newLanguageId.", 'Baigta'),
('8', ".$newLanguageId.", 'Neigiamas'),
('9', ".$newLanguageId.", 'Atšauktas atšaukimas'),
('10', ".$newLanguageId.", 'Nepavyko'),
('11', ".$newLanguageId.", 'Grąžinta'),
('12', ".$newLanguageId.", 'Atvirkščiai'),
('13', ".$newLanguageId.", 'Mokėjimo grąžinimas'),
('14', ".$newLanguageId.", 'Atšaukė Klientas')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'Visi kiti puslapiai', '', '', '', '', ''),
('2', ".$newLanguageId.", 'Pagrindinis puslapis', '', '', '', '', ''),
('3', ".$newLanguageId.", 'Prisijungimo puslapis', '', '', '', '', ''),
('4', ".$newLanguageId.", 'Susisiekite su mumis puslapis', '', '', '', '', ''),
('5', ".$newLanguageId.", 'Numatytasis produkto puslapis', '', '', '', '', ''),
('7', ".$newLanguageId.", 'Priežiūros puslapis', '', '', '', '', ''),
('8', ".$newLanguageId.", 'Klientų prietaisų skydelis', '', '', '', '', ''),
('9', ".$newLanguageId.", 'Išsami sąskaitos informacija', '', '', '', '', ''),
('10', ".$newLanguageId.", 'Keisti slaptažodį', '', '', '', '', ''),
('11', ".$newLanguageId.", 'Adresai', '', '', '', '', ''),
('12', ".$newLanguageId.", 'Norų sąrašas', '', '', '', '', ''),
('13', ".$newLanguageId.", 'Užsakymų istorija', '', '', '', '', ''),
('14', ".$newLanguageId.", 'Sandorių istorija', '', '', '', '', ''),
('15', ".$newLanguageId.", 'Atsisiuntimai', '', '', '', '', ''),
('16', ".$newLanguageId.", 'Pranešimai', '', '', '', '', ''),
('17', ".$newLanguageId.", 'Krepšelio puslapis', '', '', '', '', ''),
('18', ".$newLanguageId.", 'Greitos patikros puslapis', '', '', '', '', ''),
('19', ".$newLanguageId.", 'Greitos patikros sėkmės puslapis', '', '', '', '', ''),
('20', ".$newLanguageId.", 'Numatytasis turinio puslapis', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'Produkto variantas'),
('2', ".$newLanguageId.", 'Atsisiųskite atributą')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'Susisiekite su mumis forma')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'Vardas:', '', ".$newLanguageId.", 'Pavadinimas turi būti nuo 3 iki 32 simbolių!'),
('12', 'El. paštas:', '', ".$newLanguageId.", 'Atrodo, kad el. pašto adresas negalioja!'),
('13', 'Užklausa:', '', ".$newLanguageId.", 'Užklausa turi būti nuo 10 iki 3000 simbolių!'),
('14', 'Įveskite kodą į žemiau esantį laukelį:', '', ".$newLanguageId.", 'Žmogaus patvirtinimas nepavyko! Pabandykite dar kartą.')");


