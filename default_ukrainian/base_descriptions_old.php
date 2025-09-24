<?php
//translate base descriptions
$combinedReplaces = [
    'stock_statuses' => [
        'parent_table' => $this->db->table('stock_statuses'),
        'descriptions_table' => $this->db->table('stock_statuses'),
        'descriptions' => [
            'Pre-Order' => ['name' => 'Попереднє замовлення'],
        ]
    ],
    'length_class_descriptions' => [
        'parent_table' => $this->db->table('length_classes'),
        'descriptions_table' => $this->db->table('length_class_descriptions'),
        'descriptions' => [
            'CM'   => ['title' => 'Сантиметр', 'unit' => 'см'],
            'MM'   => ['title' => 'Міліметр', 'unit' => 'мм'],
            'INCH' => ['title' => 'Дюйм', 'unit' => '″']
        ]
    ],
    'weight_class_descriptions' => [
        'parent_table' => $this->db->table('weight_classes'),
        'descriptions_table' => $this->db->table('weight_class_descriptions'),
        'descriptions' => [
            'KG' => ['title' => 'Кілограм', 'unit' => 'кг'],
            'G' => ['title' => 'Грам', 'unit' => 'г'],
            'LB' => ['title' => 'Фунт', 'unit' => 'фунт'],
            'OZ' => ['title' => 'Унція', 'unit' => 'унц']
        ]
    ],
    'order_statuses' => [
        'parent_table' => $this->db->table('order_status_ids'),
        'descriptions_table' => $this->db->table('order_statuses'),
        'descriptions' => [
            'incomplete'           => ['name' => 'Незавершено'],
            'pending'              => ['name' => 'В очікуванні'],
            'processing'           => ['name' => 'Обробка'],
            'shipped'              => ['name' => 'Відправлено'],
            'completed'            => ['name' => 'Виконано'],
            'canceled'             => ['name' => 'Скасовано'],
            'denied'               => ['name' => 'Відмовлено'],
            'canceled_reversal'    => ['name' => 'Скасоване Відкликання'],
            'failed'               => ['name' => 'Не вдалося'],
            'refunded'             => ['name' => 'Відшкодовано'],
            'reversed'             => ['name' => 'Зворотній'],
            'chargeback'           => ['name' => 'Відкликання платежу'],
            'canceled_by_customer' => ['name' => 'Скасовано Клієнтом']
        ]
    ],
    'page_descriptions' => [
        'parent_table' => $this->db->table('pages'),
        'descriptions_table' => $this->db->table('page_descriptions'),
        'descriptions' => [
            'generic~~' => [
                'name' => 'All Other Pages',
                'title' => '',
                'seo_url' => '',
                'keywords' => '',
                'description' => '',
                'content' => ''
            ],
            'pages/index/home~~' => [
                'name' => 'Home Page',
                'title' => '',
                'seo_url' => '',
                'keywords' => '',
                'description' => '',
                'content' => ''
            ],
            'pages/account/login~~' => [
                'name' => 'Login Page',
                'title' => '',
                'seo_url' => '',
                'keywords' => '',
                'description' => '',
                'content' => ''
            ],
            'pages/content/contact~~' => [
                'name' => 'Contact Us Page',
                'title' => '',
                'seo_url' => '',
                'keywords' => '',
                'description' => '',
                'content' => ''
            ],
            'pages/product/default_product~~' => [
                'name' => 'Default Product Page',
                'title' => '',
                'seo_url' => '',
                'keywords' => '',
                'description' => '',
                'content' => ''
            ],
            'pages/product/listing~~' => [
                'name' => 'Product Listing Page (Category)',
                'title' => '',
                'seo_url' => '',
                'keywords' => '',
                'description' => '',
                'content' => ''
            ],
            'pages/maintenance~~' => [
                'name' => 'Maintenance Page',
                'title' => '',
                'seo_url' => '',
                'keywords' => '',
                'description' => '',
                'content' => ''
            ],
            'pages/account/dashboard~~' => [
                'name' => 'Customer Dashboard',
                'title' => '',
                'seo_url' => '',
                'keywords' => '',
                'description' => '',
                'content' => ''
            ],
            'pages/account/details~~' => [
                'name' => 'Account Details',
                'title' => '',
                'seo_url' => '',
                'keywords' => '',
                'description' => '',
                'content' => ''
            ],
            'pages/account/change_password~~' => [
                'name' => 'Change Password',
                'title' => '',
                'seo_url' => '',
                'keywords' => '',
                'description' => '',
                'content' => ''
            ],
            'pages/account/addresses~~' => [
                'name' => 'Addresses',
                'title' => '',
                'seo_url' => '',
                'keywords' => '',
                'description' => '',
                'content' => ''
            ],
            'pages/account/wishlist~~' => [
                'name' => 'Wish List',
                'title' => '',
                'seo_url' => '',
                'keywords' => '',
                'description' => '',
                'content' => ''
            ],
            'pages/account/order_history~~' => [
                'name' => 'Order History',
                'title' => '',
                'seo_url' => '',
                'keywords' => '',
                'description' => '',
                'content' => ''
            ],
            'pages/account/transaction_history~~' => [
                'name' => 'Transaction History',
                'title' => '',
                'seo_url' => '',
                'keywords' => '',
                'description' => '',
                'content' => ''
            ],
            'pages/account/downloads~~' => [
                'name' => 'Downloads',
                'title' => '',
                'seo_url' => '',
                'keywords' => '',
                'description' => '',
                'content' => ''
            ],
            'pages/account/notifications~~' => [
                'name' => 'Notifications',
                'title' => '',
                'seo_url' => '',
                'keywords' => '',
                'description' => '',
                'content' => ''
            ],
            'pages/cart~~' => [
                'name' => 'Cart Page',
                'title' => '',
                'seo_url' => '',
                'keywords' => '',
                'description' => '',
                'content' => ''
            ],
            'pages/checkout/fast_checkout~~' => [
                'name' => 'Fast Checkout Page',
                'title' => '',
                'seo_url' => '',
                'keywords' => '',
                'description' => '',
                'content' => ''
            ],
            'pages/checkout/fast_checkout_success~~' => [
                'name' => 'Fast Checkout Success Page',
                'title' => '',
                'seo_url' => '',
                'keywords' => '',
                'description' => '',
                'content' => ''
            ],
            'pages/content/default~~' => [
                'name' => 'Default Content Page',
                'title' => '',
                'seo_url' => '',
                'keywords' => '',
                'description' => '',
                'content' => ''
            ]
        ]
    ],
    'global_attributes_type_descriptions' => [
        'parent_table' => $this->db->table('global_attributes_types'),
        'descriptions_table' => $this->db->table('global_attributes_type_descriptions'),
        'descriptions' => [
            'product_option' => ['type_name' => 'Опція Продукту'],
            'download_attribute' => ['type_name' => 'Завантажити Атрибут'],
        ]
    ],
    'form_descriptions' => [
        'parent_table' => $this->db->table('forms'),
        'descriptions_table' => $this->db->table('form_descriptions'),
        'descriptions' => [
            'ContactUsFrm' => [
                'description' => 'Contact Us Form',
            ],
            'AddressFrm' => [
                'description' => 'Customer Address Form',
            ],
            'GuestCheckoutFrm' => [
                'description' => 'Guest Address and Details Form',
            ],
            'CustomerFrm' => [
                'description' => 'Customer Details Form',
            ],
            'RegisterCustomerFrm' => [
                'description' => 'Customer Registration Form',
            ],
        ]
    ],
    'field_descriptions' => [
        'fields_table' => $this->db->table('fields'),
        'parent_table' => $this->db->table('forms'),
        'field_descriptions_table' => $this->db->table('field_descriptions'),
        'descriptions' => [
            'ContactUsFrm~first_name' => [
                'name' => 'First name:',
                'description' => '',
                'error_text' => 'Name must be between 3 and 32 characters!',
            ],
            'ContactUsFrm~email' => [
                'name' => 'Email:',
                'description' => '',
                'error_text' => 'E-Mail Address does not appear to be valid!',
            ],
            'ContactUsFrm~enquiry' => [
                'name' => 'Enquiry:',
                'description' => '',
                'error_text' => 'Enquiry must be between 10 and 3000 characters!',
            ],
            'ContactUsFrm~captcha' => [
                'name' => 'Enter the code in the box below:',
                'description' => '',
                'error_text' => 'Human verification has failed! Please try again.',
            ],
            'AddressFrm~country_id' => [
                'name' => 'Country:',
                'description' => '',
                'error_text' => 'Please select a country!',
            ],
            'AddressFrm~zone_id' => [
                'name' => 'Zone:',
                'description' => '',
                'error_text' => 'Please select a region/state!',
            ],
            'AddressFrm~company' => [
                'name' => 'Company:',
                'description' => '',
                'error_text' => 'Company Name must be less than 32 characters!',
            ],
            'AddressFrm~address_1' => [
                'name' => 'Address Line 1:',
                'description' => '',
                'error_text' => 'Address Line 1 must be between 3 and 128 characters!',
            ],
            'AddressFrm~address_2' => [
                'name' => 'Address Line 2:',
                'description' => '',
                'error_text' => 'Address Line 2 must be less than 128 characters!',
            ],
            'AddressFrm~city' => [
                'name' => 'City:',
                'description' => '',
                'error_text' => 'City must be between 3 and 128 characters!',
            ],
            'AddressFrm~postcode' => [
                'name' => 'Zip/Post Code:',
                'description' => '',
                'error_text' => 'Zip/Post Code must be less than 11 characters!',
            ],
            'AddressFrm~firstname' => [
                'name' => 'First Name:',
                'description' => '',
                'error_text' => 'First Name must be between 1 and 32 characters!',
            ],
            'AddressFrm~lastname' => [
                'name' => 'Last Name:',
                'description' => '',
                'error_text' => 'Last Name must be between 1 and 32 characters!',
            ],
            'AddressFrm~default' => [
                'name' => 'Default Address:',
                'description' => '',
                'error_text' => '',
            ],
            'AddressFrm~vat_id' => [
                'name' => 'VAT ID:',
                'description' => '',
                'error_text' => 'VAT ID Code must be between 8 and 14 characters!',
            ],
            'CustomerFrm~telephone' => [
                'name' => 'Phone Number:',
                'description' => '',
                'error_text' => 'Your contact phone number is not provided or invalid.',
            ],
            'CustomerFrm~loginname' => [
                'name' => 'Login Name:',
                'description' => '',
                'error_text' => 'Login Name must be between 5 and 65 characters!',
            ],
            'CustomerFrm~newsletter' => [
                'name' => 'Subscribe:',
                'description' => '',
                'error_text' => '',
            ],
            'RegisterCustomerFrm~firstname' => [
                'name' => 'First Name:',
                'description' => '',
                'error_text' => 'First Name must be between 1 and 32 characters!',
            ],
            'RegisterCustomerFrm~lastname' => [
                'name' => 'Last Name:',
                'description' => '',
                'error_text' => 'Last Name must be between 1 and 32 characters!',
            ],
            'RegisterCustomerFrm~email' => [
                'name' => 'Email:',
                'description' => '',
                'error_text' => 'Your email is not provided or invalid!',
            ],
            'GuestCheckoutFrm~country_id' => [
                'name' => 'Country:',
                'description' => '',
                'error_text' => 'Please select a country!',
            ],
            'GuestCheckoutFrm~zone_id' => [
                'name' => 'Zone:',
                'description' => '',
                'error_text' => 'Please select a region/state!',
            ],
            'GuestCheckoutFrm~address_1' => [
                'name' => 'Address Line 1:',
                'description' => '',
                'error_text' => 'Address Line 1 must be between 3 and 128 characters!',
            ],
            'GuestCheckoutFrm~address_2' => [
                'name' => 'Address Line 2:',
                'description' => '',
                'error_text' => 'Address Line 2 must be less than 128 characters!',
            ],
            'GuestCheckoutFrm~city' => [
                'name' => 'City:',
                'description' => '',
                'error_text' => 'City must be between 3 and 128 characters!',
            ],
            'GuestCheckoutFrm~postcode' => [
                'name' => 'Zip/Post Code:',
                'description' => '',
                'error_text' => 'Zip/Post Code must be less than 11 characters!',
            ],
            'GuestCheckoutFrm~company' => [
                'name' => 'Company:',
                'description' => '',
                'error_text' => 'Company Name must be less than 32 characters!',
            ],
            'GuestCheckoutFrm~loginname' => [
                'name' => 'Login Name:',
                'description' => '',
                'error_text' => 'Login Name must be alphanumeric only and between 5 and 64 characters!',
            ],
            'GuestCheckoutFrm~newsletter' => [
                'name' => 'Subscribe:',
                'description' => '',
                'error_text' => '',
            ],
            'GuestCheckoutFrm~vat_id' => [
                'name' => 'VAT ID:',
                'description' => '',
                'error_text' => 'VAT ID Code must be between 8 and 14 characters!',
            ]
        ]
    ]
];
