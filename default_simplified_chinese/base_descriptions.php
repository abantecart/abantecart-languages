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
        'name' => '预购',
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
        'title' => '厘米',
        'unit' => '厘米',
      ),
      'MMET' => 
      array (
        'title' => '毫米',
        'unit' => '毫米',
      ),
      'INCH' => 
      array (
        'title' => '英寸',
        'unit' => '在',
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
        'title' => '千克',
        'unit' => '千克',
      ),
      'GRAM' => 
      array (
        'title' => '克',
        'unit' => 'g',
      ),
      'PUND' => 
      array (
        'title' => '英镑',
        'unit' => '磅',
      ),
      'USOU' => 
      array (
        'title' => '盎司',
        'unit' => '盎司',
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
        'name' => '不完整',
      ),
      'pending' => 
      array (
        'name' => '待处理',
      ),
      'processing' => 
      array (
        'name' => '处理中',
      ),
      'shipped' => 
      array (
        'name' => '已发货',
      ),
      'completed' => 
      array (
        'name' => '已完成',
      ),
      'canceled' => 
      array (
        'name' => '已取消',
      ),
      'denied' => 
      array (
        'name' => '拒绝',
      ),
      'canceled_reversal' => 
      array (
        'name' => '已取消冲销',
      ),
      'failed' => 
      array (
        'name' => '失败',
      ),
      'refunded' => 
      array (
        'name' => '已退款',
      ),
      'reversed' => 
      array (
        'name' => '已反转',
      ),
      'chargeback' => 
      array (
        'name' => '拒付',
      ),
      'canceled_by_customer' => 
      array (
        'name' => '已被客户取消',
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
        'type_name' => '产品选项',
      ),
      'download_attribute' => 
      array (
        'type_name' => '下载属性',
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
        'description' => '客户地址表单',
      ),
      'ContactUsFrm' => 
      array (
        'description' => '联系我们表单',
      ),
      'CustomerFrm' => 
      array (
        'description' => '客户详细信息表单',
      ),
      'GuestCheckoutFrm' => 
      array (
        'description' => '访客地址和详细信息表单',
      ),
      'RegisterCustomerFrm' => 
      array (
        'description' => '客户注册表单',
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
        'name' => '名字：',
        'description' => '',
        'error_text' => '名称长度必须在3到32个字符之间！',
      ),
      'email~ContactUsFrm' => 
      array (
        'name' => '电子邮件:',
        'description' => '',
        'error_text' => '电子邮件地址似乎无效！',
      ),
      'enquiry~ContactUsFrm' => 
      array (
        'name' => '询问：',
        'description' => '',
        'error_text' => '咨询内容长度必须在10到3000个字符之间！',
      ),
      'captcha~ContactUsFrm' => 
      array (
        'name' => '在下面的框中输入代码：',
        'description' => '',
        'error_text' => '人机验证失败！请再试一次。',
      ),
      'country_id~AddressFrm' => 
      array (
        'name' => '国家',
        'description' => '',
        'error_text' => '请选择一个国家！',
      ),
      'zone_id~AddressFrm' => 
      array (
        'name' => '区域',
        'description' => '',
        'error_text' => '请选择地区/州！',
      ),
      'company~AddressFrm' => 
      array (
        'name' => '公司',
        'description' => '',
        'error_text' => '公司名称必须少于32个字符！',
      ),
      'address_1~AddressFrm' => 
      array (
        'name' => '地址行1',
        'description' => '',
        'error_text' => '地址行1的长度必须在3到128个字符之间！',
      ),
      'address_2~AddressFrm' => 
      array (
        'name' => '地址行2',
        'description' => '',
        'error_text' => '地址行2必须少于128个字符！',
      ),
      'city~AddressFrm' => 
      array (
        'name' => '城市',
        'description' => '',
        'error_text' => '城市长度必须在3到128个字符之间！',
      ),
      'postcode~AddressFrm' => 
      array (
        'name' => '邮编/邮政编码',
        'description' => '',
        'error_text' => '邮政编码/邮编必须少于11个字符！',
      ),
      'firstname~AddressFrm' => 
      array (
        'name' => '名字',
        'description' => '',
        'error_text' => '名字长度必须介于1到32个字符之间！',
      ),
      'lastname~AddressFrm' => 
      array (
        'name' => '姓氏',
        'description' => '',
        'error_text' => '姓氏必须在1到32个字符之间！',
      ),
      'default~AddressFrm' => 
      array (
        'name' => '默认地址',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~AddressFrm' => 
      array (
        'name' => '增值税号',
        'description' => '',
        'error_text' => 'VAT ID 代码必须在 8 到 14 个字符之间！',
      ),
      'country_id~GuestCheckoutFrm' => 
      array (
        'name' => '国家',
        'description' => '',
        'error_text' => '请选择一个国家！',
      ),
      'zone_id~GuestCheckoutFrm' => 
      array (
        'name' => '地区/州',
        'description' => '',
        'error_text' => '请选择地区/州！',
      ),
      'company~GuestCheckoutFrm' => 
      array (
        'name' => '公司',
        'description' => '',
        'error_text' => '公司名称必须少于32个字符！',
      ),
      'address_1~GuestCheckoutFrm' => 
      array (
        'name' => '地址行 1',
        'description' => '',
        'error_text' => '地址第1行必须在3到128个字符之间！',
      ),
      'address_2~GuestCheckoutFrm' => 
      array (
        'name' => '地址第2行',
        'description' => '',
        'error_text' => '地址行2必须少于128个字符！',
      ),
      'city~GuestCheckoutFrm' => 
      array (
        'name' => '城市',
        'description' => '',
        'error_text' => '城市名称长度必须在3到128个字符之间！',
      ),
      'postcode~GuestCheckoutFrm' => 
      array (
        'name' => '邮编/邮政编码',
        'description' => '',
        'error_text' => '邮编/邮政编码 必须少于11个字符！',
      ),
      'firstname~GuestCheckoutFrm' => 
      array (
        'name' => '名字',
        'description' => '',
        'error_text' => '名字长度必须在1到32个字符之间！',
      ),
      'lastname~GuestCheckoutFrm' => 
      array (
        'name' => '姓氏',
        'description' => '',
        'error_text' => '“姓氏必须在1到32个字符之间！”',
      ),
      'vat_id~GuestCheckoutFrm' => 
      array (
        'name' => '增值税识别号',
        'description' => '',
        'error_text' => '增值税ID代码必须在8到14个字符之间！',
      ),
      'email~GuestCheckoutFrm' => 
      array (
        'name' => '电子邮件',
        'description' => '',
        'error_text' => '您的电子邮件未提供或无效！',
      ),
      'telephone~GuestCheckoutFrm' => 
      array (
        'name' => '电话号码',
        'description' => '',
        'error_text' => '您的联系电话未提供或无效。',
      ),
      'loginname~CustomerFrm' => 
      array (
        'name' => '登录名',
        'description' => '',
        'error_text' => '登录名必须在5到65个字符之间！',
      ),
      'firstname~CustomerFrm' => 
      array (
        'name' => '名字',
        'description' => '',
        'error_text' => '名字长度必须在1到32个字符之间！',
      ),
      'lastname~CustomerFrm' => 
      array (
        'name' => '姓氏',
        'description' => '',
        'error_text' => '姓氏长度必须在1到32个字符之间！',
      ),
      'email~CustomerFrm' => 
      array (
        'name' => '电子邮件',
        'description' => '',
        'error_text' => '您的电子邮件未提供或无效！',
      ),
      'telephone~CustomerFrm' => 
      array (
        'name' => '电话号码',
        'description' => '',
        'error_text' => '您的联系电话未提供或无效。',
      ),
      'firstname~RegisterCustomerFrm' => 
      array (
        'name' => '名',
        'description' => '',
        'error_text' => '名字必须在1到32个字符之间！',
      ),
      'lastname~RegisterCustomerFrm' => 
      array (
        'name' => '姓氏',
        'description' => '',
        'error_text' => '姓氏长度必须在1到32个字符之间！',
      ),
      'email~RegisterCustomerFrm' => 
      array (
        'name' => '电子邮件',
        'description' => '',
        'error_text' => '您的电子邮件未提供或无效！',
      ),
      'telephone~RegisterCustomerFrm' => 
      array (
        'name' => '电话号码',
        'description' => '',
        'error_text' => '您的联系电话未提供或无效。',
      ),
      'country_id~RegisterCustomerFrm' => 
      array (
        'name' => '国家',
        'description' => '',
        'error_text' => '请选择一个国家！',
      ),
      'zone_id~RegisterCustomerFrm' => 
      array (
        'name' => '区域/州',
        'description' => '',
        'error_text' => '请选择地区/州！',
      ),
      'address_1~RegisterCustomerFrm' => 
      array (
        'name' => '地址行1',
        'description' => '',
        'error_text' => '地址行1的长度必须在3到128个字符之间！',
      ),
      'address_2~RegisterCustomerFrm' => 
      array (
        'name' => '地址行 2',
        'description' => '',
        'error_text' => '地址行2的长度必须少于128个字符！',
      ),
      'city~RegisterCustomerFrm' => 
      array (
        'name' => '城市',
        'description' => '',
        'error_text' => '城市必须介于3到128个字符之间！',
      ),
      'postcode~RegisterCustomerFrm' => 
      array (
        'name' => '邮政编码/邮编',
        'description' => '',
        'error_text' => '邮政编码/邮政编码必须少于11个字符！',
      ),
      'company~RegisterCustomerFrm' => 
      array (
        'name' => '公司',
        'description' => '',
        'error_text' => '公司名称必须少于32个字符！',
      ),
      'loginname~RegisterCustomerFrm' => 
      array (
        'name' => '登录名',
        'description' => '',
        'error_text' => '登录名必须仅包含字母和数字，且长度在5到64个字符之间！',
      ),
      'newsletter~RegisterCustomerFrm' => 
      array (
        'name' => '订阅',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~RegisterCustomerFrm' => 
      array (
        'name' => '增值税识别号',
        'description' => '',
        'error_text' => 'VAT ID 代码必须介于8到14个字符之间！',
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
        'name' => '您的个人资料',
        'description' => '',
      ),
      'address' => 
      array (
        'name' => '您的地址',
        'description' => '',
      ),
      'login' => 
      array (
        'name' => '登录详细信息',
        'description' => '',
      ),
      'newsletter' => 
      array (
        'name' => '时事通讯',
        'description' => '',
      ),
    ),
  ),
);
