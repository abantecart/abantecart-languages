<?php

$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'הזמנה מראש')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'סַנטִימֶטֶר', 'ס&quot;מ'),
('2', ".$newLanguageId.", 'מִילִימֶטֶר', 'מ&quot;מ'),
('3', ".$newLanguageId.", 'אִינְטשׁ', 'ב')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'קִילוֹגרָם', 'ק&quot;ג'),
('2', ".$newLanguageId.", 'גְרַם', 'ז'),
('5', ".$newLanguageId.", 'לִירָה', 'lb'),
('6', ".$newLanguageId.", 'אוּנְקִיָה', 'oz')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'לֹא שָׁלֵם'),
('1', ".$newLanguageId.", 'תָלוּי וְעוֹמֵד'),
('2', ".$newLanguageId.", 'עיבוד'),
('3', ".$newLanguageId.", 'נשלח'),
('7', ".$newLanguageId.", 'בּוּטלָה'),
('5', ".$newLanguageId.", 'הושלם'),
('8', ".$newLanguageId.", 'נדחתה'),
('9', ".$newLanguageId.", 'היפוך בוטל'),
('10', ".$newLanguageId.", 'נִכשָׁל'),
('11', ".$newLanguageId.", 'הוחזר'),
('12', ".$newLanguageId.", 'מְהוּפָּך'),
('13', ".$newLanguageId.", 'חיוב חוזר'),
('14', ".$newLanguageId.", 'בוטל על ידי הלקוח')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'כל שאר הדפים', '', '', '', '', ''),
('2', ".$newLanguageId.", 'עמוד הבית', '', '', '', '', ''),
('3', ".$newLanguageId.", 'עמוד התחברות', '', '', '', '', ''),
('4', ".$newLanguageId.", 'עמוד צור קשר', '', '', '', '', ''),
('5', ".$newLanguageId.", 'דף מוצר ברירת מחדל', '', '', '', '', ''),
('7', ".$newLanguageId.", 'דף תחזוקה', '', '', '', '', ''),
('8', ".$newLanguageId.", 'לוח מחוונים ללקוח', '', '', '', '', ''),
('9', ".$newLanguageId.", 'פרטי חשבון', '', '', '', '', ''),
('10', ".$newLanguageId.", 'שנה סיסמה', '', '', '', '', ''),
('11', ".$newLanguageId.", 'כתובות', '', '', '', '', ''),
('12', ".$newLanguageId.", 'רשימת משאלות', '', '', '', '', ''),
('13', ".$newLanguageId.", 'היסטוריית הזמנות', '', '', '', '', ''),
('14', ".$newLanguageId.", 'היסטוריית עסקאות', '', '', '', '', ''),
('15', ".$newLanguageId.", 'הורדות', '', '', '', '', ''),
('16', ".$newLanguageId.", 'התראות', '', '', '', '', ''),
('17', ".$newLanguageId.", 'עמוד עגלה', '', '', '', '', ''),
('18', ".$newLanguageId.", 'דף תשלום מהיר', '', '', '', '', ''),
('19', ".$newLanguageId.", 'דף הצלחה של קופה מהירה', '', '', '', '', ''),
('20', ".$newLanguageId.", 'דף תוכן ברירת מחדל', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'אפשרות למוצר'),
('2', ".$newLanguageId.", 'הורד תכונה')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'טופס צור קשר')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'שֵׁם פְּרַטִי:', '', ".$newLanguageId.", 'השם חייב להיות בין 3 ל-32 תווים!'),
('12', 'אֶלֶקטרוֹנִי:', '', ".$newLanguageId.", 'כתובת הדואר האלקטרוני לא תקפה!'),
('13', 'חֲקִירָה:', '', ".$newLanguageId.", 'שאילתה חייבת להיות בין 10 ל-3000 תווים!'),
('14', 'הזן את הקוד בתיבה למטה:', '', ".$newLanguageId.", 'אימות אנושי נכשל! אנא נסה את אגן.')");


