<?php 
//translated 
return 
array (
  'stock_statuses' => 
  array (
    'parent_table' => 'stock_statuses',
    'descriptions_table' => 'stock_statuses',
    'descriptions' => 
    array (
      'Pre-Order' => 
      array (
        'name' => 'הזמנה מראש',
      ),
    ),
  ),
  'length_class_descriptions' => 
  array (
    'parent_table' => 'length_classes',
    'descriptions_table' => 'length_class_descriptions',
    'descriptions' => 
    array (
      'CMET' => 
      array (
        'title' => 'סנטימטר',
        'unit' => 'ס"מ',
      ),
      'MMET' => 
      array (
        'title' => 'מילימטר',
        'unit' => 'mm',
      ),
      'INCH' => 
      array (
        'title' => 'אינץ\'',
        'unit' => 'ב',
      ),
    ),
  ),
  'weight_class_descriptions' => 
  array (
    'parent_table' => 'weight_classes',
    'descriptions_table' => 'weight_class_descriptions',
    'descriptions' => 
    array (
      'KILO' => 
      array (
        'title' => 'קילוגרם',
        'unit' => 'ק"ג',
      ),
      'GRAM' => 
      array (
        'title' => 'גרם',
        'unit' => 'ג',
      ),
      'PUND' => 
      array (
        'title' => 'לירה',
        'unit' => 'lb',
      ),
      'USOU' => 
      array (
        'title' => 'אונקיה',
        'unit' => 'אונקיה',
      ),
    ),
  ),
  'order_statuses' => 
  array (
    'parent_table' => 'order_status_ids',
    'descriptions_table' => 'order_statuses',
    'descriptions' => 
    array (
      'incomplete' => 
      array (
        'name' => 'לא הושלם',
      ),
      'pending' => 
      array (
        'name' => 'בהמתנה',
      ),
      'processing' => 
      array (
        'name' => 'בעיבוד',
      ),
      'shipped' => 
      array (
        'name' => 'נשלח',
      ),
      'completed' => 
      array (
        'name' => 'הושלם',
      ),
      'canceled' => 
      array (
        'name' => 'מבוטל',
      ),
      'denied' => 
      array (
        'name' => 'נדחה',
      ),
      'canceled_reversal' => 
      array (
        'name' => 'היפוך שבוטל',
      ),
      'failed' => 
      array (
        'name' => 'נכשל',
      ),
      'refunded' => 
      array (
        'name' => 'הוחזר',
      ),
      'reversed' => 
      array (
        'name' => 'הפוך',
      ),
      'chargeback' => 
      array (
        'name' => 'החזר חיוב',
      ),
      'canceled_by_customer' => 
      array (
        'name' => 'בוטל על ידי הלקוח',
      ),
    ),
  ),
  'global_attributes_type_descriptions' => 
  array (
    'parent_table' => 'global_attributes_types',
    'descriptions_table' => 'global_attributes_type_descriptions',
    'descriptions' => 
    array (
      'product_option' => 
      array (
        'type_name' => 'אפשרות מוצר',
      ),
      'download_attribute' => 
      array (
        'type_name' => 'תכונת הורדה',
      ),
    ),
  ),
  'form_descriptions' => 
  array (
    'parent_table' => 'forms',
    'descriptions_table' => 'form_descriptions',
    'descriptions' => 
    array (
      'AddressFrm' => 
      array (
        'description' => 'טופס כתובת לקוח',
      ),
      'ContactUsFrm' => 
      array (
        'description' => 'טופס יצירת קשר',
      ),
      'CustomerFrm' => 
      array (
        'description' => 'טופס פרטי הלקוח',
      ),
      'GuestCheckoutFrm' => 
      array (
        'description' => 'טופס כתובת ופרטי אורח',
      ),
      'RegisterCustomerFrm' => 
      array (
        'description' => 'טופס הרשמת לקוח',
      ),
    ),
  ),
  'field_descriptions' => 
  array (
    'parent_table' => 'fields',
    'descriptions_table' => 'field_descriptions',
    'descriptions' => 
    array (
      'first_name~ContactUsFrm' => 
      array (
        'name' => 'שם פרטי:',
        'description' => '',
        'error_text' => 'השם חייב להיות בין 3 ל-32 תווים!',
      ),
      'email~ContactUsFrm' => 
      array (
        'name' => 'דוא"ל:',
        'description' => '',
        'error_text' => 'כתובת דוא"ל אינה נראית תקינה!',
      ),
      'enquiry~ContactUsFrm' => 
      array (
        'name' => 'פנייה:',
        'description' => '',
        'error_text' => 'הפנייה חייבת להיות בין 10 ל-3000 תווים!',
      ),
      'captcha~ContactUsFrm' => 
      array (
        'name' => 'הזן את הקוד בתיבה למטה:',
        'description' => '',
        'error_text' => 'אימות אנושי נכשל! אנא נסה שוב.',
      ),
      'country_id~AddressFrm' => 
      array (
        'name' => 'מדינה',
        'description' => '',
        'error_text' => 'אנא בחר מדינה!',
      ),
      'zone_id~AddressFrm' => 
      array (
        'name' => 'אזור',
        'description' => '',
        'error_text' => 'אנא בחר/י אזור/מדינה!',
      ),
      'company~AddressFrm' => 
      array (
        'name' => 'חברה',
        'description' => '',
        'error_text' => 'שם החברה חייב להיות פחות מ-32 תווים!',
      ),
      'address_1~AddressFrm' => 
      array (
        'name' => 'שורה ראשונה של הכתובת',
        'description' => '',
        'error_text' => 'שורה 1 של הכתובת חייבת להיות בין 3 ל-128 תווים!',
      ),
      'address_2~AddressFrm' => 
      array (
        'name' => 'שורת כתובת 2',
        'description' => '',
        'error_text' => 'השורה השנייה של הכתובת חייבת להיות פחות מ-128 תווים!',
      ),
      'city~AddressFrm' => 
      array (
        'name' => 'עיר',
        'description' => '',
        'error_text' => 'העיר חייבת להיות באורך בין 3 ל-128 תווים!',
      ),
      'postcode~AddressFrm' => 
      array (
        'name' => 'מיקוד/קוד דואר',
        'description' => '',
        'error_text' => 'מיקוד/מיקוד דואר חייב להכיל פחות מ-11 תווים!',
      ),
      'firstname~AddressFrm' => 
      array (
        'name' => 'שם פרטי',
        'description' => '',
        'error_text' => 'השם הפרטי חייב להיות בין 1 ל-32 תווים!',
      ),
      'lastname~AddressFrm' => 
      array (
        'name' => 'שם משפחה',
        'description' => '',
        'error_text' => 'שם משפחה חייב להיות בין 1 ל-32 תווים!',
      ),
      'default~AddressFrm' => 
      array (
        'name' => 'כתובת ברירת מחדל',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~AddressFrm' => 
      array (
        'name' => 'מספר מע"מ',
        'description' => '',
        'error_text' => 'קוד זיהוי מע"מ חייב להיות בין 8 ל-14 תווים!',
      ),
      'country_id~GuestCheckoutFrm' => 
      array (
        'name' => 'מדינה',
        'description' => '',
        'error_text' => 'אנא בחר מדינה!',
      ),
      'zone_id~GuestCheckoutFrm' => 
      array (
        'name' => 'אזור/מדינה',
        'description' => '',
        'error_text' => 'אנא בחר אזור/מדינה!',
      ),
      'company~GuestCheckoutFrm' => 
      array (
        'name' => 'חברה',
        'description' => '',
        'error_text' => 'שם החברה חייב להיות פחות מ-32 תווים!',
      ),
      'address_1~GuestCheckoutFrm' => 
      array (
        'name' => 'שורת כתובת 1',
        'description' => '',
        'error_text' => 'שורת כתובת 1 חייבת להיות באורך בין 3 ל-128 תווים!',
      ),
      'address_2~GuestCheckoutFrm' => 
      array (
        'name' => 'שורה 2 של הכתובת',
        'description' => '',
        'error_text' => 'שורה 2 של הכתובת חייבת להכיל פחות מ-128 תווים!',
      ),
      'city~GuestCheckoutFrm' => 
      array (
        'name' => 'עיר',
        'description' => '',
        'error_text' => 'העיר חייבת להכיל בין 3 ל-128 תווים!',
      ),
      'postcode~GuestCheckoutFrm' => 
      array (
        'name' => 'מיקוד/קוד דואר',
        'description' => '',
        'error_text' => 'מיקוד/מיקוד חייב להיות פחות מ-11 תווים!',
      ),
      'firstname~GuestCheckoutFrm' => 
      array (
        'name' => 'שם פרטי',
        'description' => '',
        'error_text' => 'השם הפרטי חייב להיות בין 1 ל-32 תווים!',
      ),
      'lastname~GuestCheckoutFrm' => 
      array (
        'name' => 'שם משפחה',
        'description' => '',
        'error_text' => 'שם משפחה חייב להיות בין 1 ל-32 תווים!',
      ),
      'vat_id~GuestCheckoutFrm' => 
      array (
        'name' => 'מספר מע"מ',
        'description' => '',
        'error_text' => 'קוד זיהוי מע"מ חייב להיות בין 8 ל-14 תווים!',
      ),
      'email~GuestCheckoutFrm' => 
      array (
        'name' => 'דואר אלקטרוני',
        'description' => '',
        'error_text' => 'כתובת האימייל שלך לא סופקה או אינה תקינה!',
      ),
      'telephone~GuestCheckoutFrm' => 
      array (
        'name' => 'מספר טלפון',
        'description' => '',
        'error_text' => 'מספר הטלפון ליצירת קשר שלך לא סופק או אינו תקין.',
      ),
      'loginname~CustomerFrm' => 
      array (
        'name' => 'שם משתמש',
        'description' => '',
        'error_text' => 'שם המשתמש חייב להיות בין 5 ל-65 תווים!',
      ),
      'firstname~CustomerFrm' => 
      array (
        'name' => 'שם פרטי',
        'description' => '',
        'error_text' => 'שם פרטי חייב להיות בין 1 ל-32 תווים!',
      ),
      'lastname~CustomerFrm' => 
      array (
        'name' => 'שם משפחה',
        'description' => '',
        'error_text' => 'שם משפחה חייב להיות בין 1 ל-32 תווים!',
      ),
      'email~CustomerFrm' => 
      array (
        'name' => 'דוא"ל',
        'description' => '',
        'error_text' => 'כתובת האימייל שלך לא סופקה או שגויה!',
      ),
      'telephone~CustomerFrm' => 
      array (
        'name' => 'מספר טלפון',
        'description' => '',
        'error_text' => 'מספר הטלפון ליצירת קשר שלך לא סופק או אינו תקין.',
      ),
      'firstname~RegisterCustomerFrm' => 
      array (
        'name' => 'שם פרטי',
        'description' => '',
        'error_text' => 'שם פרטי חייב להיות בין 1 ל-32 תווים!',
      ),
      'lastname~RegisterCustomerFrm' => 
      array (
        'name' => 'שם משפחה',
        'description' => '',
        'error_text' => 'שם משפחה חייב להיות בין 1 ל-32 תווים!',
      ),
      'email~RegisterCustomerFrm' => 
      array (
        'name' => 'דואר אלקטרוני',
        'description' => '',
        'error_text' => 'כתובת הדואר האלקטרוני שלך לא סופקה או אינה תקפה!',
      ),
      'telephone~RegisterCustomerFrm' => 
      array (
        'name' => 'מספר טלפון',
        'description' => '',
        'error_text' => 'מספר הטלפון ליצירת קשר שלך לא סופק או אינו תקין.',
      ),
      'country_id~RegisterCustomerFrm' => 
      array (
        'name' => 'מדינה',
        'description' => '',
        'error_text' => 'אנא בחר מדינה!',
      ),
      'zone_id~RegisterCustomerFrm' => 
      array (
        'name' => 'אזור/מדינה',
        'description' => '',
        'error_text' => 'אנא בחר אזור/מדינה!',
      ),
      'address_1~RegisterCustomerFrm' => 
      array (
        'name' => 'שורה 1 של הכתובת',
        'description' => '',
        'error_text' => 'שורה 1 של הכתובת חייבת להיות בין 3 ל-128 תווים!',
      ),
      'address_2~RegisterCustomerFrm' => 
      array (
        'name' => 'שורת הכתובת 2',
        'description' => '',
        'error_text' => 'שורת כתובת 2 חייבת להיות פחות מ-128 תווים!',
      ),
      'city~RegisterCustomerFrm' => 
      array (
        'name' => 'עיר',
        'description' => '',
        'error_text' => 'העיר חייבת להיות בין 3 ל-128 תווים!',
      ),
      'postcode~RegisterCustomerFrm' => 
      array (
        'name' => 'מיקוד/קוד דואר',
        'description' => '',
        'error_text' => 'מיקוד/מיקוד דואר חייב להיות פחות מ-11 תווים!',
      ),
      'company~RegisterCustomerFrm' => 
      array (
        'name' => 'חברה',
        'description' => '',
        'error_text' => 'שם החברה חייב להיות פחות מ-32 תווים!',
      ),
      'loginname~RegisterCustomerFrm' => 
      array (
        'name' => 'שם משתמש',
        'description' => '',
        'error_text' => 'שם המשתמש חייב להיות אלפאנומרי בלבד ובאורך בין 5 ל־64 תווים!',
      ),
      'newsletter~RegisterCustomerFrm' => 
      array (
        'name' => 'הירשם',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~RegisterCustomerFrm' => 
      array (
        'name' => 'מספר מע"מ',
        'description' => '',
        'error_text' => 'קוד זיהוי מע"מ חייב להיות בין 8 ל-14 תווים!',
      ),
    ),
  ),
  'field_group_descriptions' => 
  array (
    'parent_table' => 'field_groups',
    'descriptions_table' => 'field_group_descriptions',
    'descriptions' => 
    array (
      'details' => 
      array (
        'name' => 'הפרטים האישיים שלך',
        'description' => '',
      ),
      'address' => 
      array (
        'name' => 'הכתובת שלך',
        'description' => '',
      ),
      'login' => 
      array (
        'name' => 'פרטי התחברות',
        'description' => '',
      ),
      'newsletter' => 
      array (
        'name' => 'ניוזלטר',
        'description' => '',
      ),
    ),
  ),
);
