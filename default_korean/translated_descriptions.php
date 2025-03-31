<?php

$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", '사전 주문')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", '센티미터', '센티미터'),
('2', ".$newLanguageId.", '밀리미터', 'mm'),
('3', ".$newLanguageId.", '인치', '%s에')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", '킬로그램', '킬로그램'),
('2', ".$newLanguageId.", '그램', 'g'),
('5', ".$newLanguageId.", '파운드', '파운드'),
('6', ".$newLanguageId.", '온스', '온스')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", '불완전한'),
('1', ".$newLanguageId.", '보류 중'),
('2', ".$newLanguageId.", '처리 중'),
('3', ".$newLanguageId.", '배송됨'),
('7', ".$newLanguageId.", '취소'),
('5', ".$newLanguageId.", '완전한'),
('8', ".$newLanguageId.", '거부됨'),
('9', ".$newLanguageId.", '취소된 반전'),
('10', ".$newLanguageId.", '실패한'),
('11', ".$newLanguageId.", '환불됨'),
('12', ".$newLanguageId.", '역전'),
('13', ".$newLanguageId.", '환불'),
('14', ".$newLanguageId.", '고객이 취소함')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", '다른 모든 페이지', '', '', '', '', ''),
('2', ".$newLanguageId.", '홈페이지', '', '', '', '', ''),
('3', ".$newLanguageId.", '로그인 페이지', '', '', '', '', ''),
('4', ".$newLanguageId.", '문의하기 페이지', '', '', '', '', ''),
('5', ".$newLanguageId.", '기본 제품 페이지', '', '', '', '', ''),
('7', ".$newLanguageId.", '유지 관리 페이지', '', '', '', '', ''),
('8', ".$newLanguageId.", '고객 대시보드', '', '', '', '', ''),
('9', ".$newLanguageId.", '계정 세부 정보', '', '', '', '', ''),
('10', ".$newLanguageId.", '비밀번호 변경', '', '', '', '', ''),
('11', ".$newLanguageId.", '구애', '', '', '', '', ''),
('12', ".$newLanguageId.", '위시리스트', '', '', '', '', ''),
('13', ".$newLanguageId.", '주문 내역', '', '', '', '', ''),
('14', ".$newLanguageId.", '거래 내역', '', '', '', '', ''),
('15', ".$newLanguageId.", '다운로드', '', '', '', '', ''),
('16', ".$newLanguageId.", '알림', '', '', '', '', ''),
('17', ".$newLanguageId.", '장바구니 페이지', '', '', '', '', ''),
('18', ".$newLanguageId.", '빠른 체크아웃 페이지', '', '', '', '', ''),
('19', ".$newLanguageId.", '빠른 체크아웃 성공 페이지', '', '', '', '', ''),
('20', ".$newLanguageId.", '기본 콘텐츠 페이지', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", '제품 옵션'),
('2', ".$newLanguageId.", '다운로드 속성')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", '문의하기 양식')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', '이름:', '', ".$newLanguageId.", '이름은 3%s32자여야 합니다!'),
('12', '이메일:', '', ".$newLanguageId.", '이메일 주소가 유효하지 않습니다!'),
('13', '문의:', '', ".$newLanguageId.", '문의사항은 10%s3000자 사이여야 합니다!'),
('14', '아래 상자에 코드를 입력하세요:', '', ".$newLanguageId.", '인간 검증에 실패했습니다! 다시 시도해 주세요.')");


