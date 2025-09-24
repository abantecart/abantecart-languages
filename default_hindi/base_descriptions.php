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
        'name' => 'पूर्व-आदेश',
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
        'title' => 'सेंटीमीटर',
        'unit' => 'सेमी',
      ),
      'MMET' => 
      array (
        'title' => 'मिलीमीटर',
        'unit' => 'एमएम',
      ),
      'INCH' => 
      array (
        'title' => 'इंच',
        'unit' => 'में',
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
        'title' => 'किलोग्राम',
        'unit' => 'किलोग्राम',
      ),
      'GRAM' => 
      array (
        'title' => 'ग्राम',
        'unit' => 'जी',
      ),
      'PUND' => 
      array (
        'title' => 'पाउंड',
        'unit' => 'पाउंड',
      ),
      'USOU' => 
      array (
        'title' => 'औंस',
        'unit' => 'औंस',
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
        'name' => 'अपूर्ण',
      ),
      'pending' => 
      array (
        'name' => 'लंबित',
      ),
      'processing' => 
      array (
        'name' => 'प्रसंस्करण',
      ),
      'shipped' => 
      array (
        'name' => 'भेजा गया',
      ),
      'completed' => 
      array (
        'name' => 'पूर्ण',
      ),
      'canceled' => 
      array (
        'name' => 'रद्द किया गया',
      ),
      'denied' => 
      array (
        'name' => 'अस्वीकृत',
      ),
      'canceled_reversal' => 
      array (
        'name' => 'रद्द की गई वापसी',
      ),
      'failed' => 
      array (
        'name' => 'विफल',
      ),
      'refunded' => 
      array (
        'name' => 'रिफंड किया गया',
      ),
      'reversed' => 
      array (
        'name' => 'उल्टा',
      ),
      'chargeback' => 
      array (
        'name' => 'चार्जबैक',
      ),
      'canceled_by_customer' => 
      array (
        'name' => 'ग्राहक द्वारा रद्द किया गया',
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
        'type_name' => 'उत्पाद विकल्प',
      ),
      'download_attribute' => 
      array (
        'type_name' => 'डाउनलोड विशेषता',
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
        'description' => 'ग्राहक पता प्रपत्र',
      ),
      'ContactUsFrm' => 
      array (
        'description' => 'हमसे संपर्क फ़ॉर्म',
      ),
      'CustomerFrm' => 
      array (
        'description' => 'ग्राहक विवरण फॉर्म',
      ),
      'GuestCheckoutFrm' => 
      array (
        'description' => 'अतिथि पता और विवरण फ़ॉर्म',
      ),
      'RegisterCustomerFrm' => 
      array (
        'description' => 'ग्राहक पंजीकरण प्रपत्र',
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
        'name' => 'पहला नाम:',
        'description' => '',
        'error_text' => 'नाम 3 से 32 वर्णों के बीच होना चाहिए!',
      ),
      'email~ContactUsFrm' => 
      array (
        'name' => 'ईमेल:',
        'description' => '',
        'error_text' => 'ई-मेल पता वैध प्रतीत नहीं होता!',
      ),
      'enquiry~ContactUsFrm' => 
      array (
        'name' => 'पूछताछ:',
        'description' => '',
        'error_text' => 'पूछताछ 10 से 3000 वर्णों के बीच होनी चाहिए!',
      ),
      'captcha~ContactUsFrm' => 
      array (
        'name' => 'नीचे दिए गए बॉक्स में कोड दर्ज करें:',
        'description' => '',
        'error_text' => 'मानव सत्यापन विफल हो गया! कृपया पुनः प्रयास करें।',
      ),
      'country_id~AddressFrm' => 
      array (
        'name' => 'देश',
        'description' => '',
        'error_text' => 'कृपया एक देश चुनें!',
      ),
      'zone_id~AddressFrm' => 
      array (
        'name' => 'क्षेत्र',
        'description' => '',
        'error_text' => 'कृपया एक क्षेत्र/राज्य चुनें!',
      ),
      'company~AddressFrm' => 
      array (
        'name' => 'कंपनी',
        'description' => '',
        'error_text' => 'कंपनी का नाम 32 वर्णों से कम होना चाहिए!',
      ),
      'address_1~AddressFrm' => 
      array (
        'name' => 'पता पंक्ति 1',
        'description' => '',
        'error_text' => 'पता पंक्ति 1 3 और 128 वर्णों के बीच होनी चाहिए!',
      ),
      'address_2~AddressFrm' => 
      array (
        'name' => 'पता पंक्ति 2',
        'description' => '',
        'error_text' => 'पता पंक्ति 2 128 वर्णों से कम होनी चाहिए!',
      ),
      'city~AddressFrm' => 
      array (
        'name' => 'शहर',
        'description' => '',
        'error_text' => 'शहर 3 से 128 वर्णों के बीच होना चाहिए!',
      ),
      'postcode~AddressFrm' => 
      array (
        'name' => 'ज़िप/पोस्ट कोड',
        'description' => '',
        'error_text' => 'ज़िप/पोस्ट कोड 11 वर्णों से कम होना चाहिए!',
      ),
      'firstname~AddressFrm' => 
      array (
        'name' => 'पहला नाम',
        'description' => '',
        'error_text' => 'पहला नाम 1 से 32 वर्णों के बीच होना चाहिए!',
      ),
      'lastname~AddressFrm' => 
      array (
        'name' => 'उपनाम',
        'description' => '',
        'error_text' => 'उपनाम 1 से 32 वर्णों के बीच होना चाहिए!',
      ),
      'default~AddressFrm' => 
      array (
        'name' => 'डिफ़ॉल्ट पता',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~AddressFrm' => 
      array (
        'name' => 'मूल्य वर्धित कर पहचान संख्या',
        'description' => '',
        'error_text' => 'VAT आईडी कोड 8 और 14 वर्णों के बीच होना चाहिए!',
      ),
      'country_id~GuestCheckoutFrm' => 
      array (
        'name' => 'देश',
        'description' => '',
        'error_text' => 'कृपया एक देश चुनें!',
      ),
      'zone_id~GuestCheckoutFrm' => 
      array (
        'name' => 'क्षेत्र/राज्य',
        'description' => '',
        'error_text' => 'कृपया एक क्षेत्र/राज्य चुनें!',
      ),
      'company~GuestCheckoutFrm' => 
      array (
        'name' => 'कंपनी',
        'description' => '',
        'error_text' => 'कंपनी का नाम 32 अक्षरों से कम होना चाहिए!',
      ),
      'address_1~GuestCheckoutFrm' => 
      array (
        'name' => 'पता पंक्ति 1',
        'description' => '',
        'error_text' => 'पता पंक्ति 1 की लंबाई 3 से 128 अक्षरों के बीच होनी चाहिए!',
      ),
      'address_2~GuestCheckoutFrm' => 
      array (
        'name' => 'पता पंक्ति 2',
        'description' => '',
        'error_text' => 'पता पंक्ति 2 128 वर्णों से कम होनी चाहिए!',
      ),
      'city~GuestCheckoutFrm' => 
      array (
        'name' => 'शहर',
        'description' => '',
        'error_text' => 'शहर 3 से 128 वर्णों के बीच होना चाहिए!',
      ),
      'postcode~GuestCheckoutFrm' => 
      array (
        'name' => 'ज़िप/पोस्ट कोड',
        'description' => '',
        'error_text' => 'ज़िप/पोस्ट कोड 11 वर्णों से कम होना चाहिए!',
      ),
      'firstname~GuestCheckoutFrm' => 
      array (
        'name' => 'पहला नाम',
        'description' => '',
        'error_text' => 'पहला नाम 1 से 32 वर्णों के बीच होना चाहिए!',
      ),
      'lastname~GuestCheckoutFrm' => 
      array (
        'name' => 'उपनाम',
        'description' => '',
        'error_text' => 'उपनाम 1 से 32 वर्णों के बीच होना चाहिए!',
      ),
      'vat_id~GuestCheckoutFrm' => 
      array (
        'name' => 'वैट आईडी',
        'description' => '',
        'error_text' => 'VAT आईडी कोड 8 से 14 अक्षरों के बीच होना चाहिए!',
      ),
      'email~GuestCheckoutFrm' => 
      array (
        'name' => 'ईमेल',
        'description' => '',
        'error_text' => 'आपका ईमेल प्रदान नहीं किया गया है या अमान्य है!',
      ),
      'telephone~GuestCheckoutFrm' => 
      array (
        'name' => 'फोन नंबर',
        'description' => '',
        'error_text' => 'आपका संपर्क फोन नंबर प्रदान नहीं किया गया है या अमान्य है।',
      ),
      'loginname~CustomerFrm' => 
      array (
        'name' => 'लॉगिन नाम',
        'description' => '',
        'error_text' => 'लॉगिन नाम 5 से 65 अक्षरों के बीच होना चाहिए!',
      ),
      'firstname~CustomerFrm' => 
      array (
        'name' => 'पहला नाम',
        'description' => '',
        'error_text' => 'पहला नाम 1 और 32 वर्णों के बीच होना चाहिए!',
      ),
      'lastname~CustomerFrm' => 
      array (
        'name' => 'उपनाम',
        'description' => '',
        'error_text' => 'उपनाम 1 और 32 वर्णों के बीच होना चाहिए!',
      ),
      'email~CustomerFrm' => 
      array (
        'name' => 'ईमेल',
        'description' => '',
        'error_text' => 'आपका ईमेल प्रदान नहीं किया गया है या अमान्य है!',
      ),
      'telephone~CustomerFrm' => 
      array (
        'name' => 'फ़ोन नंबर',
        'description' => '',
        'error_text' => 'आपका संपर्क फोन नंबर प्रदान नहीं किया गया है या अमान्य है।',
      ),
      'firstname~RegisterCustomerFrm' => 
      array (
        'name' => 'पहला नाम',
        'description' => '',
        'error_text' => 'पहला नाम 1 से 32 वर्णों के बीच होना चाहिए!',
      ),
      'lastname~RegisterCustomerFrm' => 
      array (
        'name' => 'उपनाम',
        'description' => '',
        'error_text' => 'अंतिम नाम 1 से 32 वर्णों के बीच होना चाहिए!',
      ),
      'email~RegisterCustomerFrm' => 
      array (
        'name' => 'ईमेल',
        'description' => '',
        'error_text' => 'आपका ईमेल प्रदान नहीं किया गया है या अमान्य है!',
      ),
      'telephone~RegisterCustomerFrm' => 
      array (
        'name' => 'फ़ोन नंबर',
        'description' => '',
        'error_text' => 'आपका संपर्क फोन नंबर प्रदान नहीं किया गया है या अमान्य है।',
      ),
      'country_id~RegisterCustomerFrm' => 
      array (
        'name' => 'देश',
        'description' => '',
        'error_text' => 'कृपया एक देश चुनें!',
      ),
      'zone_id~RegisterCustomerFrm' => 
      array (
        'name' => 'क्षेत्र/राज्य',
        'description' => '',
        'error_text' => 'कृपया एक क्षेत्र/राज्य चुनें!',
      ),
      'address_1~RegisterCustomerFrm' => 
      array (
        'name' => 'पता पंक्ति 1',
        'description' => '',
        'error_text' => 'पता लाइन 1 को 3 और 128 वर्णों के बीच होना चाहिए!',
      ),
      'address_2~RegisterCustomerFrm' => 
      array (
        'name' => 'पता पंक्ति 2',
        'description' => '',
        'error_text' => 'पता पंक्ति 2 128 वर्णों से कम होनी चाहिए!',
      ),
      'city~RegisterCustomerFrm' => 
      array (
        'name' => 'शहर',
        'description' => '',
        'error_text' => 'शहर को 3 से 128 वर्णों के बीच होना चाहिए!',
      ),
      'postcode~RegisterCustomerFrm' => 
      array (
        'name' => 'ज़िप/पोस्ट कोड',
        'description' => '',
        'error_text' => 'ज़िप/पोस्ट कोड 11 वर्णों से कम होना चाहिए!',
      ),
      'company~RegisterCustomerFrm' => 
      array (
        'name' => 'कंपनी',
        'description' => '',
        'error_text' => 'कंपनी का नाम 32 वर्णों से कम होना चाहिए!',
      ),
      'loginname~RegisterCustomerFrm' => 
      array (
        'name' => 'लॉगिन नाम',
        'description' => '',
        'error_text' => 'लॉगिन नाम केवल अल्फा-न्यूमेरिक होना चाहिए और 5 से 64 वर्णों के बीच होना चाहिए!',
      ),
      'newsletter~RegisterCustomerFrm' => 
      array (
        'name' => 'सदस्यता लें',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~RegisterCustomerFrm' => 
      array (
        'name' => 'मूल्य संवर्धित कर पहचान संख्या',
        'description' => '',
        'error_text' => 'VAT ID कोड 8 से 14 वर्णों के बीच होना चाहिए!',
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
        'name' => 'आपके व्यक्तिगत विवरण',
        'description' => '',
      ),
      'address' => 
      array (
        'name' => 'आपका पता',
        'description' => '',
      ),
      'login' => 
      array (
        'name' => 'लॉगिन विवरण',
        'description' => '',
      ),
      'newsletter' => 
      array (
        'name' => 'सूचनापत्र',
        'description' => '',
      ),
    ),
  ),
);
