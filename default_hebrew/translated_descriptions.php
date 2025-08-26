<?php
//translated
$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'הזמנה מראש')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'סנטימטר', 'ס\"מ'),
('2', ".$newLanguageId.", 'מילימטר', 'mm'),
('3', ".$newLanguageId.", 'אינץ׳', 'ב')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'קילוגרם', 'ק\"ג'),
('2', ".$newLanguageId.", 'גרם', 'ג'),
('5', ".$newLanguageId.", 'לירה', 'lb'),
('6', ".$newLanguageId.", 'אונקיה', 'עוז')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'לא הושלם'),
('1', ".$newLanguageId.", 'ממתין'),
('2', ".$newLanguageId.", 'מעבד'),
('3', ".$newLanguageId.", 'נשלח'),
('5', ".$newLanguageId.", 'הושלם'),
('7', ".$newLanguageId.", 'בוטל'),
('8', ".$newLanguageId.", 'נדחה'),
('9', ".$newLanguageId.", 'היפוך מבוטל'),
('10', ".$newLanguageId.", 'נכשל'),
('11', ".$newLanguageId.", 'הוחזר'),
('12', ".$newLanguageId.", 'הפוך'),
('13', ".$newLanguageId.", 'ביטול חיוב'),
('14', ".$newLanguageId.", 'בוטל על ידי הלקוח')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'כל שאר העמודים', '', '', '', '', ''),
('2', ".$newLanguageId.", 'דף הבית', '', '', '', '', ''),
('3', ".$newLanguageId.", 'דף התחברות', '', '', '', '', ''),
('4', ".$newLanguageId.", 'דף יצירת קשר', '', '', '', '', ''),
('5', ".$newLanguageId.", 'דף מוצר ברירת מחדל', '', '', '', '', ''),
('7', ".$newLanguageId.", 'דף תחזוקה', '', '', '', '', ''),
('8', ".$newLanguageId.", 'לוח המחוונים של הלקוח', '', '', '', '', ''),
('9', ".$newLanguageId.", 'פרטי חשבון', '', '', '', '', ''),
('10', ".$newLanguageId.", 'שנה סיסמה', '', '', '', '', ''),
('11', ".$newLanguageId.", 'כתובות', '', '', '', '', ''),
('12', ".$newLanguageId.", 'רשימת המשאלות', '', '', '', '', ''),
('13', ".$newLanguageId.", 'היסטוריית הזמנות', '', '', '', '', ''),
('14', ".$newLanguageId.", 'היסטוריית העסקאות', '', '', '', '', ''),
('15', ".$newLanguageId.", 'הורדות', '', '', '', '', ''),
('16', ".$newLanguageId.", 'התראות', '', '', '', '', ''),
('17', ".$newLanguageId.", 'דף עגלת הקניות', '', '', '', '', ''),
('18', ".$newLanguageId.", 'דף תשלום מהיר', '', '', '', '', ''),
('19', ".$newLanguageId.", 'דף הצלחה של רכישה מהירה', '', '', '', '', ''),
('20', ".$newLanguageId.", 'דף תוכן ברירת מחדל', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'אפשרות מוצר'),
('2', ".$newLanguageId.", 'מאפיין להורדה'),
('3', ".$newLanguageId.", 'מאפיין לקוח')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'טופס יצירת קשר'),
('4', ".$newLanguageId.", 'טופס כתובת לקוח'),
('5', ".$newLanguageId.", 'טופס הכתובת והפרטים של האורח'),
('6', ".$newLanguageId.", 'טופס פרטי הלקוח'),
('7', ".$newLanguageId.", 'טופס רישום לקוח')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'שם פרטי:', '', ".$newLanguageId.", 'השם חייב להיות בין 3 ל-32 תווים!'),
('12', 'דוא\"ל:', '', ".$newLanguageId.", 'כתובת האימייל אינה נראית כתקינה!'),
('13', 'שאלה:', '', ".$newLanguageId.", 'הפנייה חייבת להיות בין 10 ל-3000 תווים!'),
('14', 'הזן את הקוד בתיבה למטה:', '', ".$newLanguageId.", 'אימות אנושי נכשל! אנא נסה אגן.'),
('16', 'מדינות', '', ".$newLanguageId.", ''),
('18', 'מספר זיהוי למע\"מ', '', ".$newLanguageId.", ''),
('19', 'מדינה', '', ".$newLanguageId.", 'אנא בחר מדינה!'),
('20', 'אזור', '', ".$newLanguageId.", 'אנא בחר אזור/מדינה!'),
('21', 'חברה', '', ".$newLanguageId.", 'שם החברה חייב להיות פחות מ-32 תווים!'),
('22', 'שורת כתובת 1', '', ".$newLanguageId.", 'שורת כתובת 1 חייבת להיות בין 3 ל-128 תווים!'),
('23', 'שורת כתובת 2', '', ".$newLanguageId.", 'שורה 2 של הכתובת חייבת להיות פחות מ-128 תווים!'),
('24', 'עיר', '', ".$newLanguageId.", 'העיר חייבת להיות בין 3 ל-128 תווים!'),
('25', 'מיקוד/קוד דואר', '', ".$newLanguageId.", 'מיקוד/מיקוד דואר חייב להיות פחות מ-11 תווים!'),
('26', 'שם פרטי', '', ".$newLanguageId.", 'שם פרטי חייב להיות בין 1 ל-32 תווים!'),
('27', 'שם משפחה', '', ".$newLanguageId.", 'שם משפחה חייב להיות בין 1 ל-32 תווים!'),
('29', 'כתובת ברירת מחדל', '', ".$newLanguageId.", ''),
('30', 'מספר מע\"מ', '', ".$newLanguageId.", 'קוד זיהוי מע\"מ חייב להיות בין 8 ל-14 תווים!'),
('31', 'מדינה', '', ".$newLanguageId.", 'אנא בחר מדינה!'),
('32', 'אזור/מדינה', '', ".$newLanguageId.", 'אנא בחר אזור/מדינה!'),
('33', 'חברה', '', ".$newLanguageId.", 'שם החברה חייב להיות פחות מ-32 תווים!'),
('34', 'שורה 1 של הכתובת', '', ".$newLanguageId.", 'שורת כתובת 1 חייבת להיות בין 3 ל-128 תווים!'),
('35', 'שורה 2 של הכתובת', '', ".$newLanguageId.", 'שורת כתובת 2 חייבת להיות פחות מ-128 תווים!'),
('36', 'עיר', '', ".$newLanguageId.", 'העיר חייבת להיות באורך בין 3 ל-128 תווים!'),
('37', 'מיקוד/מיקוד', '', ".$newLanguageId.", 'מיקוד/מיקוד דואר חייב להיות פחות מ-11 תווים!'),
('38', 'שם פרטי', '', ".$newLanguageId.", 'שם פרטי חייב להיות בין 1 ל-32 תווים!'),
('39', 'שם משפחה', '', ".$newLanguageId.", 'שם משפחה חייב להיות בין 1 ל-32 תווים!'),
('40', 'מספר זיהוי מע\"מ', '', ".$newLanguageId.", 'קוד זיהוי מע\"מ חייב להיות בין 8 ל-14 תווים!'),
('41', 'דוא\"ל', '', ".$newLanguageId.", 'האימייל שלך לא סופק או אינו תקף!'),
('42', 'מספר טלפון', '', ".$newLanguageId.", 'מספר הטלפון ליצירת הקשר שלך לא סופק או אינו תקין.'),
('43', 'שם משתמש', '', ".$newLanguageId.", 'שם המשתמש חייב להיות בין 5 ל-65 תווים!'),
('44', 'שם פרטי', '', ".$newLanguageId.", 'השם הפרטי חייב להיות בין 1 ל-32 תווים!'),
('45', 'שם משפחה', '', ".$newLanguageId.", 'שם משפחה חייב להיות בין 1 ל-32 תווים!'),
('46', 'דואר אלקטרוני', '', ".$newLanguageId.", 'הדואר האלקטרוני שלך לא סופק או לא תקין!'),
('47', 'מספר טלפון', '', ".$newLanguageId.", 'מספר הטלפון ליצירת הקשר שלך לא סופק או אינו תקף.'),
('49', 'שם פרטי', '', ".$newLanguageId.", 'שם פרטי חייב להיות בין 1 ל-32 תווים!'),
('50', 'שם משפחה', '', ".$newLanguageId.", 'שם משפחה חייב להיות בין 1 ל-32 תווים!'),
('51', 'דואר אלקטרוני', '', ".$newLanguageId.", 'כתובת האימייל שלך לא סופקה או אינה חוקית!'),
('52', 'מספר טלפון', '', ".$newLanguageId.", 'מספר הטלפון ליצירת הקשר שלך לא סופק או אינו תקין.'),
('53', 'מדינה', '', ".$newLanguageId.", 'אנא בחר מדינה!'),
('54', 'אזור/מדינה', '', ".$newLanguageId.", 'אנא בחר אזור/מדינה!'),
('55', 'שורה 1 של הכתובת', '', ".$newLanguageId.", 'שורה 1 של הכתובת חייבת להיות בין 3 ל-128 תווים!'),
('56', 'שורת כתובת 2', '', ".$newLanguageId.", 'שורת כתובת 2 חייבת להכיל פחות מ-128 תווים!'),
('57', 'עיר', '', ".$newLanguageId.", 'עיר חייבת להיות באורך בין 3 ל-128 תווים!'),
('58', 'מיקוד/קוד דואר', '', ".$newLanguageId.", 'מיקוד/קוד דואר חייב להכיל פחות מ-11 תווים!'),
('59', 'חברה', '', ".$newLanguageId.", 'שם החברה חייב להיות פחות מ-32 תווים!'),
('60', 'שם משתמש', '', ".$newLanguageId.", 'שם משתמש חייב להיות אלפאנומרי בלבד ובין 5 ל-64 תווים!'),
('61', 'הירשם', '', ".$newLanguageId.", ''),
('62', 'מספר מע\"מ', '', ".$newLanguageId.", 'קוד זיהוי מע\"מ חייב להיות בין 8 ל-14 תווים!')");


