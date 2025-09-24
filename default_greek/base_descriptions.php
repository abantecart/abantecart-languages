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
        'name' => 'Προ-παραγγελία',
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
        'title' => 'εκατοστό',
        'unit' => 'cm',
      ),
      'MMET' => 
      array (
        'title' => 'χιλιοστό',
        'unit' => 'mm',
      ),
      'INCH' => 
      array (
        'title' => 'ίντσα',
        'unit' => 'σε',
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
        'title' => 'Χιλιόγραμμο',
        'unit' => 'κιλό',
      ),
      'GRAM' => 
      array (
        'title' => 'Γραμμάριο',
        'unit' => 'g',
      ),
      'PUND' => 
      array (
        'title' => 'Στερλίνα',
        'unit' => 'λίβρα',
      ),
      'USOU' => 
      array (
        'title' => 'Ουγγιά',
        'unit' => 'ουγγιές',
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
        'name' => 'Ελλιπές',
      ),
      'pending' => 
      array (
        'name' => 'Εκκρεμεί',
      ),
      'processing' => 
      array (
        'name' => 'Επεξεργασία',
      ),
      'shipped' => 
      array (
        'name' => 'Απεστάλη',
      ),
      'completed' => 
      array (
        'name' => 'Ολοκληρώθηκε',
      ),
      'canceled' => 
      array (
        'name' => 'Ακυρώθηκε',
      ),
      'denied' => 
      array (
        'name' => 'Απορρίφθηκε',
      ),
      'canceled_reversal' => 
      array (
        'name' => 'Ακυρωμένη Αντιστροφή',
      ),
      'failed' => 
      array (
        'name' => 'Απέτυχε',
      ),
      'refunded' => 
      array (
        'name' => 'Επιστράφηκε',
      ),
      'reversed' => 
      array (
        'name' => 'Αντεστραμμένο',
      ),
      'chargeback' => 
      array (
        'name' => 'Επιστροφή χρέωσης',
      ),
      'canceled_by_customer' => 
      array (
        'name' => 'Ακυρώθηκε από τον πελάτη',
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
        'type_name' => 'Επιλογή Προϊόντος',
      ),
      'download_attribute' => 
      array (
        'type_name' => 'Χαρακτηριστικό λήψης',
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
        'description' => 'Φόρμα Διεύθυνσης Πελάτη',
      ),
      'ContactUsFrm' => 
      array (
        'description' => 'Φόρμα Επικοινωνίας',
      ),
      'CustomerFrm' => 
      array (
        'description' => 'Φόρμα Στοιχείων Πελάτη',
      ),
      'GuestCheckoutFrm' => 
      array (
        'description' => 'Φόρμα Διεύθυνσης και Στοιχείων Επισκέπτη',
      ),
      'RegisterCustomerFrm' => 
      array (
        'description' => 'Φόρμα Εγγραφής Πελάτη',
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
        'name' => 'Όνομα:',
        'description' => '',
        'error_text' => 'Το όνομα πρέπει να είναι μεταξύ 3 και 32 χαρακτήρων!',
      ),
      'email~ContactUsFrm' => 
      array (
        'name' => 'Ηλεκτρονικό ταχυδρομείο:',
        'description' => '',
        'error_text' => 'Η διεύθυνση ηλεκτρονικού ταχυδρομείου δεν φαίνεται να είναι έγκυρη!',
      ),
      'enquiry~ContactUsFrm' => 
      array (
        'name' => 'Ερώτηση:',
        'description' => '',
        'error_text' => 'Η ερώτηση πρέπει να έχει από 10 έως 3000 χαρακτήρες!',
      ),
      'captcha~ContactUsFrm' => 
      array (
        'name' => 'Εισάγετε τον κωδικό στο παρακάτω πλαίσιο:',
        'description' => '',
        'error_text' => 'Η επαλήθευση ανθρώπου απέτυχε! Παρακαλώ δοκιμάστε ξανά.',
      ),
      'country_id~AddressFrm' => 
      array (
        'name' => 'Χώρα',
        'description' => '',
        'error_text' => 'Παρακαλώ επιλέξτε μια χώρα!',
      ),
      'zone_id~AddressFrm' => 
      array (
        'name' => 'Ζώνη',
        'description' => '',
        'error_text' => 'Παρακαλώ επιλέξτε περιοχή/πολιτεία!',
      ),
      'company~AddressFrm' => 
      array (
        'name' => 'Εταιρεία',
        'description' => '',
        'error_text' => 'Το όνομα εταιρείας πρέπει να είναι λιγότερο από 32 χαρακτήρες!',
      ),
      'address_1~AddressFrm' => 
      array (
        'name' => 'Γραμμή διεύθυνσης 1',
        'description' => '',
        'error_text' => 'Η Γραμμή Διεύθυνσης 1 πρέπει να έχει μήκος μεταξύ 3 και 128 χαρακτήρων!',
      ),
      'address_2~AddressFrm' => 
      array (
        'name' => 'Γραμμή διεύθυνσης 2',
        'description' => '',
        'error_text' => '2η γραμμή διεύθυνσης πρέπει να έχει λιγότερους από 128 χαρακτήρες!',
      ),
      'city~AddressFrm' => 
      array (
        'name' => 'Πόλη',
        'description' => '',
        'error_text' => 'Η πόλη πρέπει να έχει μήκος μεταξύ 3 και 128 χαρακτήρων!',
      ),
      'postcode~AddressFrm' => 
      array (
        'name' => 'Κωδικός Ταχυδρομείου',
        'description' => '',
        'error_text' => 'Ταχυδρομικός/Κωδικός πρέπει να είναι λιγότερο από 11 χαρακτήρες!',
      ),
      'firstname~AddressFrm' => 
      array (
        'name' => 'Όνομα',
        'description' => '',
        'error_text' => 'Το όνομα πρέπει να είναι από 1 έως 32 χαρακτήρες!',
      ),
      'lastname~AddressFrm' => 
      array (
        'name' => 'Επίθετο',
        'description' => '',
        'error_text' => 'Το επώνυμο πρέπει να είναι από 1 έως 32 χαρακτήρες!',
      ),
      'default~AddressFrm' => 
      array (
        'name' => 'Προεπιλεγμένη Διεύθυνση',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~AddressFrm' => 
      array (
        'name' => 'ΑΦΜ',
        'description' => '',
        'error_text' => 'Ο κωδικός VAT ID πρέπει να έχει μήκος από 8 έως 14 χαρακτήρες!',
      ),
      'country_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Χώρα',
        'description' => '',
        'error_text' => 'Παρακαλώ επιλέξτε μια χώρα!',
      ),
      'zone_id~GuestCheckoutFrm' => 
      array (
        'name' => 'Περιοχή/Πολιτεία',
        'description' => '',
        'error_text' => 'Παρακαλώ επιλέξτε μια περιοχή/πολιτεία!',
      ),
      'company~GuestCheckoutFrm' => 
      array (
        'name' => 'Εταιρεία',
        'description' => '',
        'error_text' => 'Το όνομα της εταιρείας πρέπει να είναι μικρότερο από 32 χαρακτήρες!',
      ),
      'address_1~GuestCheckoutFrm' => 
      array (
        'name' => 'Γραμμή διεύθυνσης 1',
        'description' => '',
        'error_text' => 'Η Γραμμή διεύθυνσης 1 πρέπει να έχει μήκος από 3 έως 128 χαρακτήρες!',
      ),
      'address_2~GuestCheckoutFrm' => 
      array (
        'name' => 'Γραμμή διεύθυνσης 2',
        'description' => '',
        'error_text' => 'Η Γραμμή Διεύθυνσης 2 πρέπει να έχει λιγότερους από 128 χαρακτήρες!',
      ),
      'city~GuestCheckoutFrm' => 
      array (
        'name' => 'Πόλη',
        'description' => '',
        'error_text' => 'Η πόλη πρέπει να έχει μήκος μεταξύ 3 και 128 χαρακτήρων!',
      ),
      'postcode~GuestCheckoutFrm' => 
      array (
        'name' => 'Κωδικός ZIP/Ταχυδρομικός κώδικας',
        'description' => '',
        'error_text' => 'Κωδικός ZIP/Ταχυδρομικός Κώδικας πρέπει να έχει λιγότερους από 11 χαρακτήρες!',
      ),
      'firstname~GuestCheckoutFrm' => 
      array (
        'name' => 'Όνομα',
        'description' => '',
        'error_text' => 'Το Όνομα πρέπει να έχει από 1 έως 32 χαρακτήρες!',
      ),
      'lastname~GuestCheckoutFrm' => 
      array (
        'name' => 'Επώνυμο',
        'description' => '',
        'error_text' => 'Το επώνυμο πρέπει να είναι μεταξύ 1 και 32 χαρακτήρων!',
      ),
      'vat_id~GuestCheckoutFrm' => 
      array (
        'name' => 'ΑΦΜ',
        'description' => '',
        'error_text' => 'Ο Κωδικός ΑΦΜ πρέπει να είναι μεταξύ 8 και 14 χαρακτήρων!',
      ),
      'email~GuestCheckoutFrm' => 
      array (
        'name' => 'Ηλεκτρονικό ταχυδρομείο',
        'description' => '',
        'error_text' => 'Το email σας δεν έχει δοθεί ή είναι άκυρο!',
      ),
      'telephone~GuestCheckoutFrm' => 
      array (
        'name' => 'Αριθμός τηλεφώνου',
        'description' => '',
        'error_text' => 'Ο αριθμός τηλεφώνου επικοινωνίας σας δεν παρέχεται ή είναι άκυρος.',
      ),
      'loginname~CustomerFrm' => 
      array (
        'name' => 'Όνομα Σύνδεσης',
        'description' => '',
        'error_text' => 'Το όνομα σύνδεσης πρέπει να είναι μεταξύ 5 και 65 χαρακτήρων!',
      ),
      'firstname~CustomerFrm' => 
      array (
        'name' => 'Όνομα',
        'description' => '',
        'error_text' => 'Το όνομα πρέπει να είναι μεταξύ 1 και 32 χαρακτήρων!',
      ),
      'lastname~CustomerFrm' => 
      array (
        'name' => 'Επώνυμο',
        'description' => '',
        'error_text' => 'Το επώνυμο πρέπει να περιέχει από 1 έως 32 χαρακτήρες!',
      ),
      'email~CustomerFrm' => 
      array (
        'name' => 'Ηλεκτρονικό ταχυδρομείο',
        'description' => '',
        'error_text' => 'Η διεύθυνση ηλεκτρονικού ταχυδρομείου σας δεν έχει δοθεί ή είναι άκυρη!',
      ),
      'telephone~CustomerFrm' => 
      array (
        'name' => 'Αριθμός Τηλεφώνου',
        'description' => '',
        'error_text' => 'Ο αριθμός τηλεφώνου επικοινωνίας σας δεν έχει δοθεί ή είναι άκυρος.',
      ),
      'firstname~RegisterCustomerFrm' => 
      array (
        'name' => 'Όνομα',
        'description' => '',
        'error_text' => 'Το Όνομα πρέπει να είναι μεταξύ 1 και 32 χαρακτήρων!',
      ),
      'lastname~RegisterCustomerFrm' => 
      array (
        'name' => 'Επώνυμο',
        'description' => '',
        'error_text' => 'Το επώνυμο πρέπει να έχει από 1 έως 32 χαρακτήρες!',
      ),
      'email~RegisterCustomerFrm' => 
      array (
        'name' => 'Ηλεκτρονικό ταχυδρομείο',
        'description' => '',
        'error_text' => 'Το email σας δεν έχει παρασχεθεί ή είναι άκυρο!',
      ),
      'telephone~RegisterCustomerFrm' => 
      array (
        'name' => 'Αριθμός τηλεφώνου',
        'description' => '',
        'error_text' => 'Ο αριθμός τηλεφώνου επικοινωνίας σας δεν έχει δοθεί ή είναι άκυρος.',
      ),
      'country_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Χώρα',
        'description' => '',
        'error_text' => 'Παρακαλώ επιλέξτε μια χώρα!',
      ),
      'zone_id~RegisterCustomerFrm' => 
      array (
        'name' => 'Περιφέρεια/Πολιτεία',
        'description' => '',
        'error_text' => 'Παρακαλώ επιλέξτε περιοχή/πολιτεία!',
      ),
      'address_1~RegisterCustomerFrm' => 
      array (
        'name' => '1η γραμμή διεύθυνσης',
        'description' => '',
        'error_text' => 'Η Γραμμή Διεύθυνσης 1 πρέπει να είναι μεταξύ 3 και 128 χαρακτήρων!',
      ),
      'address_2~RegisterCustomerFrm' => 
      array (
        'name' => 'Γραμμή διεύθυνσης 2',
        'description' => '',
        'error_text' => 'Η γραμμή διεύθυνσης 2 πρέπει να έχει λιγότερους από 128 χαρακτήρες!',
      ),
      'city~RegisterCustomerFrm' => 
      array (
        'name' => 'Πόλη',
        'description' => '',
        'error_text' => 'Η πόλη πρέπει να έχει μήκος μεταξύ 3 και 128 χαρακτήρων!',
      ),
      'postcode~RegisterCustomerFrm' => 
      array (
        'name' => 'Ταχυδρομικός Κώδικας/Ταχυδρομικός Κώδικας',
        'description' => '',
        'error_text' => 'Ο ταχυδρομικός κωδικός/ταχυδρομικός κώδικας πρέπει να είναι μικρότερος από 11 χαρακτήρες!',
      ),
      'company~RegisterCustomerFrm' => 
      array (
        'name' => 'Εταιρεία',
        'description' => '',
        'error_text' => 'Το όνομα εταιρείας πρέπει να είναι λιγότερο από 32 χαρακτήρες!',
      ),
      'loginname~RegisterCustomerFrm' => 
      array (
        'name' => 'Όνομα Σύνδεσης',
        'description' => '',
        'error_text' => 'Το όνομα σύνδεσης πρέπει να είναι μόνο αλφαριθμητικό και να έχει μήκος μεταξύ 5 και 64 χαρακτήρων!',
      ),
      'newsletter~RegisterCustomerFrm' => 
      array (
        'name' => 'Εγγραφείτε',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~RegisterCustomerFrm' => 
      array (
        'name' => 'ΑΦΜ',
        'description' => '',
        'error_text' => 'Ο Κωδικός ΑΦΜ πρέπει να είναι μεταξύ 8 και 14 χαρακτήρων!',
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
        'name' => 'Τα προσωπικά σας στοιχεία',
        'description' => '',
      ),
      'address' => 
      array (
        'name' => 'Η διεύθυνσή σας',
        'description' => '',
      ),
      'login' => 
      array (
        'name' => 'Στοιχεία σύνδεσης',
        'description' => '',
      ),
      'newsletter' => 
      array (
        'name' => 'Ενημερωτικό Δελτίο',
        'description' => '',
      ),
    ),
  ),
);
