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
        'name' => '사전 주문',
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
        'title' => '센티미터',
        'unit' => '센티미터',
      ),
      'MMET' => 
      array (
        'title' => '밀리미터',
        'unit' => 'mm',
      ),
      'INCH' => 
      array (
        'title' => '인치',
        'unit' => '안에',
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
        'title' => '킬로그램',
        'unit' => '킬로그램',
      ),
      'GRAM' => 
      array (
        'title' => '그램',
        'unit' => 'g',
      ),
      'PUND' => 
      array (
        'title' => '파운드',
        'unit' => '파운드',
      ),
      'USOU' => 
      array (
        'title' => '온스',
        'unit' => '온스',
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
        'name' => '미완성',
      ),
      'pending' => 
      array (
        'name' => '보류 중',
      ),
      'processing' => 
      array (
        'name' => '처리 중',
      ),
      'shipped' => 
      array (
        'name' => '배송됨',
      ),
      'completed' => 
      array (
        'name' => '완료됨',
      ),
      'canceled' => 
      array (
        'name' => '취소됨',
      ),
      'denied' => 
      array (
        'name' => '거부됨',
      ),
      'canceled_reversal' => 
      array (
        'name' => '취소된 되돌림',
      ),
      'failed' => 
      array (
        'name' => '실패',
      ),
      'refunded' => 
      array (
        'name' => '환불됨',
      ),
      'reversed' => 
      array (
        'name' => '반전된',
      ),
      'chargeback' => 
      array (
        'name' => '차지백',
      ),
      'canceled_by_customer' => 
      array (
        'name' => '고객에 의해 취소됨',
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
        'type_name' => '제품 옵션',
      ),
      'download_attribute' => 
      array (
        'type_name' => '다운로드 속성',
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
        'description' => '고객 주소 양식',
      ),
      'ContactUsFrm' => 
      array (
        'description' => '문의 양식',
      ),
      'CustomerFrm' => 
      array (
        'description' => '고객 세부 정보 양식',
      ),
      'GuestCheckoutFrm' => 
      array (
        'description' => '비회원 주소 및 세부 정보 양식',
      ),
      'RegisterCustomerFrm' => 
      array (
        'description' => '고객 등록 양식',
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
        'name' => '이름:',
        'description' => '',
        'error_text' => '이름은 3자 이상 32자 이하여야 합니다!',
      ),
      'email~ContactUsFrm' => 
      array (
        'name' => '이메일:',
        'description' => '',
        'error_text' => '이메일 주소가 유효하지 않아 보입니다!',
      ),
      'enquiry~ContactUsFrm' => 
      array (
        'name' => '문의',
        'description' => '',
        'error_text' => '문의는 10자 이상 3000자 이내여야 합니다!',
      ),
      'captcha~ContactUsFrm' => 
      array (
        'name' => '아래 상자에 코드를 입력하십시오:',
        'description' => '',
        'error_text' => '인간 확인에 실패했습니다! 다시 시도해 주세요.',
      ),
      'country_id~AddressFrm' => 
      array (
        'name' => '국가',
        'description' => '',
        'error_text' => '국가를 선택하세요!',
      ),
      'zone_id~AddressFrm' => 
      array (
        'name' => '지역',
        'description' => '',
        'error_text' => '지역/주를 선택해 주세요!',
      ),
      'company~AddressFrm' => 
      array (
        'name' => '회사',
        'description' => '',
        'error_text' => '회사 이름은 32자 미만이어야 합니다!',
      ),
      'address_1~AddressFrm' => 
      array (
        'name' => '주소 줄 1',
        'description' => '',
        'error_text' => '주소 줄 1은 3자 이상 128자 이하로 입력해야 합니다!',
      ),
      'address_2~AddressFrm' => 
      array (
        'name' => '주소 줄 2',
        'description' => '',
        'error_text' => '주소 줄 2는 128자 미만이어야 합니다!',
      ),
      'city~AddressFrm' => 
      array (
        'name' => '도시',
        'description' => '',
        'error_text' => '도시 이름은 3자 이상 128자 이하이어야 합니다!',
      ),
      'postcode~AddressFrm' => 
      array (
        'name' => '우편번호/우편번호',
        'description' => '',
        'error_text' => '우편번호/우편 코드는 11자 미만이어야 합니다!',
      ),
      'firstname~AddressFrm' => 
      array (
        'name' => '이름',
        'description' => '',
        'error_text' => '이름은 1자 이상 32자 이하이어야 합니다!',
      ),
      'lastname~AddressFrm' => 
      array (
        'name' => '성',
        'description' => '',
        'error_text' => '성은 1자 이상 32자 이하여야 합니다!',
      ),
      'default~AddressFrm' => 
      array (
        'name' => '기본 주소',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~AddressFrm' => 
      array (
        'name' => '부가가치세 등록번호',
        'description' => '',
        'error_text' => 'VAT ID 코드는 8자에서 14자 사이여야 합니다!',
      ),
      'country_id~GuestCheckoutFrm' => 
      array (
        'name' => '국가',
        'description' => '',
        'error_text' => '국가를 선택해 주세요!',
      ),
      'zone_id~GuestCheckoutFrm' => 
      array (
        'name' => '지역/주',
        'description' => '',
        'error_text' => '지역/주를 선택해주세요!',
      ),
      'company~GuestCheckoutFrm' => 
      array (
        'name' => '회사',
        'description' => '',
        'error_text' => '회사 이름은 32자 미만이어야 합니다!',
      ),
      'address_1~GuestCheckoutFrm' => 
      array (
        'name' => '주소 줄 1',
        'description' => '',
        'error_text' => '주소 줄 1은 3자 이상 128자 이하여야 합니다!',
      ),
      'address_2~GuestCheckoutFrm' => 
      array (
        'name' => '주소 줄 2',
        'description' => '',
        'error_text' => '주소 2행은 128자 미만이어야 합니다!',
      ),
      'city~GuestCheckoutFrm' => 
      array (
        'name' => '도시',
        'description' => '',
        'error_text' => '도시 이름은 3자 이상 128자 이하이어야 합니다!',
      ),
      'postcode~GuestCheckoutFrm' => 
      array (
        'name' => '우편번호/우편번호',
        'description' => '',
        'error_text' => '우편번호/우편 코드는 11자 미만이어야 합니다!',
      ),
      'firstname~GuestCheckoutFrm' => 
      array (
        'name' => '이름',
        'description' => '',
        'error_text' => '이름은 1자 이상 32자 이하이어야 합니다!',
      ),
      'lastname~GuestCheckoutFrm' => 
      array (
        'name' => '성',
        'description' => '',
        'error_text' => '성은 1자 이상 32자 이하이어야 합니다!',
      ),
      'vat_id~GuestCheckoutFrm' => 
      array (
        'name' => '부가가치세 식별번호',
        'description' => '',
        'error_text' => 'VAT ID 코드는 8자에서 14자 사이여야 합니다!',
      ),
      'email~GuestCheckoutFrm' => 
      array (
        'name' => '이메일',
        'description' => '',
        'error_text' => '귀하의 이메일이 제공되지 않았거나 유효하지 않습니다!',
      ),
      'telephone~GuestCheckoutFrm' => 
      array (
        'name' => '전화번호',
        'description' => '',
        'error_text' => '귀하의 연락처 전화번호가 제공되지 않았거나 유효하지 않습니다.',
      ),
      'loginname~CustomerFrm' => 
      array (
        'name' => '로그인 이름',
        'description' => '',
        'error_text' => '로그인 이름은 5자에서 65자 사이여야 합니다!',
      ),
      'firstname~CustomerFrm' => 
      array (
        'name' => '이름',
        'description' => '',
        'error_text' => '이름은 1자 이상 32자 이하이어야 합니다!',
      ),
      'lastname~CustomerFrm' => 
      array (
        'name' => '성',
        'description' => '',
        'error_text' => '성은 1자 이상 32자 이하이어야 합니다!',
      ),
      'email~CustomerFrm' => 
      array (
        'name' => '이메일',
        'description' => '',
        'error_text' => '귀하의 이메일이 제공되지 않았거나 유효하지 않습니다!',
      ),
      'telephone~CustomerFrm' => 
      array (
        'name' => '전화번호',
        'description' => '',
        'error_text' => '귀하의 연락처 전화번호가 제공되지 않았거나 유효하지 않습니다.',
      ),
      'firstname~RegisterCustomerFrm' => 
      array (
        'name' => '이름',
        'description' => '',
        'error_text' => '이름은 1자 이상 32자 이하이어야 합니다!',
      ),
      'lastname~RegisterCustomerFrm' => 
      array (
        'name' => '성',
        'description' => '',
        'error_text' => '성은 1자 이상 32자 이하이어야 합니다!',
      ),
      'email~RegisterCustomerFrm' => 
      array (
        'name' => '이메일',
        'description' => '',
        'error_text' => '귀하의 이메일이 제공되지 않았거나 올바르지 않습니다!',
      ),
      'telephone~RegisterCustomerFrm' => 
      array (
        'name' => '전화번호',
        'description' => '',
        'error_text' => '귀하의 연락처 전화번호가 제공되지 않았거나 올바르지 않습니다.',
      ),
      'country_id~RegisterCustomerFrm' => 
      array (
        'name' => '국가',
        'description' => '',
        'error_text' => '국가를 선택해 주세요!',
      ),
      'zone_id~RegisterCustomerFrm' => 
      array (
        'name' => '지역/주',
        'description' => '',
        'error_text' => '지역/주를 선택해주세요!',
      ),
      'address_1~RegisterCustomerFrm' => 
      array (
        'name' => '주소 줄 1',
        'description' => '',
        'error_text' => '주소 줄 1은 3자에서 128자 사이여야 합니다!',
      ),
      'address_2~RegisterCustomerFrm' => 
      array (
        'name' => '주소 줄 2',
        'description' => '',
        'error_text' => '주소 라인 2는 128자 미만이어야 합니다!',
      ),
      'city~RegisterCustomerFrm' => 
      array (
        'name' => '도시',
        'description' => '',
        'error_text' => '도시는 3자 이상 128자 이하이어야 합니다!',
      ),
      'postcode~RegisterCustomerFrm' => 
      array (
        'name' => '우편번호/우편코드',
        'description' => '',
        'error_text' => '우편번호/우편 코드는 11자 미만이어야 합니다!',
      ),
      'company~RegisterCustomerFrm' => 
      array (
        'name' => '회사',
        'description' => '',
        'error_text' => '회사 이름은 32자 미만이어야 합니다!',
      ),
      'loginname~RegisterCustomerFrm' => 
      array (
        'name' => '로그인 이름',
        'description' => '',
        'error_text' => '로그인 이름은 영숫자만 가능하며 5자 이상 64자 이내여야 합니다!',
      ),
      'newsletter~RegisterCustomerFrm' => 
      array (
        'name' => '구독',
        'description' => '',
        'error_text' => '',
      ),
      'vat_id~RegisterCustomerFrm' => 
      array (
        'name' => '부가가치세 식별번호',
        'description' => '',
        'error_text' => 'VAT ID 코드의 길이는 8자 이상 14자 이하이어야 합니다!',
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
        'name' => '귀하의 개인 세부 사항',
        'description' => '',
      ),
      'address' => 
      array (
        'name' => '귀하의 주소',
        'description' => '',
      ),
      'login' => 
      array (
        'name' => '로그인 세부 정보',
        'description' => '',
      ),
      'newsletter' => 
      array (
        'name' => '뉴스레터',
        'description' => '',
      ),
    ),
  ),
);
