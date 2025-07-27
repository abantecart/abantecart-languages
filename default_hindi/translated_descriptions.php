<?php
//translated
$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'प्री-ऑर्डर')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'सेंटीमीटर', 'से.मी.'),
('2', ".$newLanguageId.", 'मिलीमीटर', 'एमएम'),
('3', ".$newLanguageId.", 'इंच', 'में')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'किलोग्राम', 'किलोग्राम'),
('2', ".$newLanguageId.", 'ग्राम', 'जी'),
('5', ".$newLanguageId.", 'पाउंड', 'पाउंड'),
('6', ".$newLanguageId.", 'औंस', 'औंस')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'अपूर्ण'),
('1', ".$newLanguageId.", 'लंबित'),
('2', ".$newLanguageId.", 'प्रसंस्करण'),
('3', ".$newLanguageId.", 'भेज दिया गया'),
('5', ".$newLanguageId.", 'पूर्ण'),
('7', ".$newLanguageId.", 'रद्द'),
('8', ".$newLanguageId.", 'अस्वीकृत'),
('9', ".$newLanguageId.", 'रद्द किया गया उलटफेर'),
('10', ".$newLanguageId.", 'विफल'),
('11', ".$newLanguageId.", 'रिफंड किया गया'),
('12', ".$newLanguageId.", 'विपरीत'),
('13', ".$newLanguageId.", 'चार्जबैक'),
('14', ".$newLanguageId.", 'ग्राहक द्वारा रद्द किया गया')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'सभी अन्य पृष्ठ', '', '', '', '', ''),
('2', ".$newLanguageId.", 'मुख्य पृष्ठ', '', '', '', '', ''),
('3', ".$newLanguageId.", 'प्रवेश पृष्ठ', '', '', '', '', ''),
('4', ".$newLanguageId.", 'हमसे संपर्क करें पृष्ठ', '', '', '', '', ''),
('5', ".$newLanguageId.", 'डिफॉल्ट उत्पाद पृष्ठ', '', '', '', '', ''),
('7', ".$newLanguageId.", 'रखरखाव पृष्ठ', '', '', '', '', ''),
('8', ".$newLanguageId.", 'ग्राहक डैशबोर्ड', '', '', '', '', ''),
('9', ".$newLanguageId.", 'खाता विवरण', '', '', '', '', ''),
('10', ".$newLanguageId.", 'पासवर्ड बदलें', '', '', '', '', ''),
('11', ".$newLanguageId.", 'पते', '', '', '', '', ''),
('12', ".$newLanguageId.", 'इच्छा सूची', '', '', '', '', ''),
('13', ".$newLanguageId.", 'ऑर्डर इतिहास', '', '', '', '', ''),
('14', ".$newLanguageId.", 'लेनदेन इतिहास', '', '', '', '', ''),
('15', ".$newLanguageId.", 'डाउनलोड्स', '', '', '', '', ''),
('16', ".$newLanguageId.", 'सूचनाएं', '', '', '', '', ''),
('17', ".$newLanguageId.", 'कार्ट पृष्ठ', '', '', '', '', ''),
('18', ".$newLanguageId.", 'त्वरित चेकआउट पेज', '', '', '', '', ''),
('19', ".$newLanguageId.", 'त्वरित चेकआउट सफलता पृष्ठ', '', '', '', '', ''),
('20', ".$newLanguageId.", 'डिफ़ॉल्ट सामग्री पृष्ठ', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'उत्पाद विकल्प'),
('2', ".$newLanguageId.", 'डाउनलोड विशेषता')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'हमसे संपर्क करें प्रपत्र'),
('3', ".$newLanguageId.", 'aasasas')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'पहला नाम:', '', ".$newLanguageId.", 'नाम 3 से 32 वर्णों के बीच होना चाहिए!'),
('12', 'ईमेल:', '', ".$newLanguageId.", 'ई-मेल पता मान्य नहीं प्रतीत होता!'),
('13', 'पूछताछ:', '', ".$newLanguageId.", 'पूछताछ 10 और 3000 वर्णों के बीच होनी चाहिए!'),
('14', 'नीचे दिए गए बॉक्स में कोड दर्ज करें:', '', ".$newLanguageId.", 'मानव सत्यापन विफल हो गया! कृपया पुनः प्रयास करें।'),
('15', 'एसएसएस', 'क्यू', ".$newLanguageId.", '')");


