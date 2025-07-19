<?php
//translated
$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", '선주문')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", '센티미터', '센티미터'),
('2', ".$newLanguageId.", '밀리미터', '밀리미터'),
('3', ".$newLanguageId.", '인치', '안에')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", '킬로그램', 'kg'),
('2', ".$newLanguageId.", '그램', '지'),
('5', ".$newLanguageId.", '파운드', '파운드'),
('6', ".$newLanguageId.", '온스', '온스')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", '미완료'),
('1', ".$newLanguageId.", '보류 중'),
('2', ".$newLanguageId.", '처리 중'),
('3', ".$newLanguageId.", '발송됨'),
('5', ".$newLanguageId.", '완료됨'),
('7', ".$newLanguageId.", '취소됨'),
('8', ".$newLanguageId.", '거부됨'),
('9', ".$newLanguageId.", '반전 취소됨'),
('10', ".$newLanguageId.", '실패'),
('11', ".$newLanguageId.", '환불됨'),
('12', ".$newLanguageId.", '반전됨'),
('13', ".$newLanguageId.", '차지백'),
('14', ".$newLanguageId.", '고객에 의해 취소됨')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", '모든 기타 페이지', '', '', '', '', ''),
('2', ".$newLanguageId.", '홈 페이지', '', '', '', '', ''),
('3', ".$newLanguageId.", '로그인 페이지', '', '', '', '', ''),
('4', ".$newLanguageId.", '문의하기 페이지', '', '', '', '', ''),
('5', ".$newLanguageId.", '기본 상품 페이지', '', '', '', '', ''),
('7', ".$newLanguageId.", '유지 보수 페이지', '', '', '', '', ''),
('8', ".$newLanguageId.", '고객 대시보드', '', '', '', '', ''),
('9', ".$newLanguageId.", '계정 세부정보', '', '', '', '', ''),
('10', ".$newLanguageId.", '비밀번호 변경', '', '', '', '', ''),
('11', ".$newLanguageId.", '주소', '', '', '', '', ''),
('12', ".$newLanguageId.", '위시리스트', '', '', '', '', ''),
('13', ".$newLanguageId.", '주문 내역', '', '', '', '', ''),
('14', ".$newLanguageId.", '거래 내역', '', '', '', '', ''),
('15', ".$newLanguageId.", '다운로드', '', '', '', '', ''),
('16', ".$newLanguageId.", '알림', '', '', '', '', ''),
('17', ".$newLanguageId.", '장바구니 페이지', '', '', '', '', ''),
('18', ".$newLanguageId.", '빠른 결제 페이지', '', '', '', '', ''),
('19', ".$newLanguageId.", '빠른 체크아웃 성공 페이지', '', '', '', '', ''),
('20', ".$newLanguageId.", '기본 콘텐츠 페이지', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", '상품 옵션'),
('2', ".$newLanguageId.", '다운로드 속성')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", '문의 양식'),
('3', ".$newLanguageId.", '에이에이에스에이에스에이에스')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', '이름:', '', ".$newLanguageId.", '이름은 3자 이상 32자 이하이어야 합니다!'),
('12', '이메일:', '', ".$newLanguageId.", '이메일 주소가 유효해 보이지 않습니다!'),
('13', '문의:', '', ".$newLanguageId.", '문의는 10자에서 3000자 사이여야 합니다!'),
('14', '아래 상자에 코드를 입력하세요:', '', ".$newLanguageId.", '사용자 확인에 실패했습니다! 다시 시도해 주세요.'),
('15', '에스에스에스', '큐', ".$newLanguageId.", '')");


