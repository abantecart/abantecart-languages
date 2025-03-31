<?php

$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'สั่งซื้อล่วงหน้า')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'เซนติเมตร', 'ซม.'),
('2', ".$newLanguageId.", 'มิลลิเมตร', 'มม.'),
('3', ".$newLanguageId.", 'นิ้ว', 'ใน')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'กิโลกรัม', 'กก.'),
('2', ".$newLanguageId.", 'กรัม', 'จี'),
('5', ".$newLanguageId.", 'ปอนด์', 'ปอนด์'),
('6', ".$newLanguageId.", 'ออนซ์', 'ออนซ์')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'ไม่สมบูรณ์'),
('1', ".$newLanguageId.", 'รอดำเนินการ'),
('2', ".$newLanguageId.", 'กำลังประมวลผล'),
('3', ".$newLanguageId.", 'จัดส่งแล้ว'),
('7', ".$newLanguageId.", 'ยกเลิก'),
('5', ".$newLanguageId.", 'สมบูรณ์'),
('8', ".$newLanguageId.", 'ปฏิเสธ'),
('9', ".$newLanguageId.", 'การย้อนกลับที่ถูกยกเลิก'),
('10', ".$newLanguageId.", 'ล้มเหลว'),
('11', ".$newLanguageId.", 'คืนเงินแล้ว'),
('12', ".$newLanguageId.", 'ย้อนกลับ'),
('13', ".$newLanguageId.", 'การเรียกเก็บเงินคืน'),
('14', ".$newLanguageId.", 'ถูกยกเลิกโดยลูกค้า')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'หน้าอื่นๆ ทั้งหมด', '', '', '', '', ''),
('2', ".$newLanguageId.", 'หน้าแรก', '', '', '', '', ''),
('3', ".$newLanguageId.", 'หน้าเข้าสู่ระบบ', '', '', '', '', ''),
('4', ".$newLanguageId.", 'หน้าติดต่อเรา', '', '', '', '', ''),
('5', ".$newLanguageId.", 'หน้าผลิตภัณฑ์เริ่มต้น', '', '', '', '', ''),
('7', ".$newLanguageId.", 'หน้าการบำรุงรักษา', '', '', '', '', ''),
('8', ".$newLanguageId.", 'แผงควบคุมลูกค้า', '', '', '', '', ''),
('9', ".$newLanguageId.", 'รายละเอียดบัญชี', '', '', '', '', ''),
('10', ".$newLanguageId.", 'เปลี่ยนรหัสผ่าน', '', '', '', '', ''),
('11', ".$newLanguageId.", 'ที่อยู่', '', '', '', '', ''),
('12', ".$newLanguageId.", 'รายการสิ่งที่ปรารถนา', '', '', '', '', ''),
('13', ".$newLanguageId.", 'ประวัติการสั่งซื้อ', '', '', '', '', ''),
('14', ".$newLanguageId.", 'ประวัติการทำธุรกรรม', '', '', '', '', ''),
('15', ".$newLanguageId.", 'ดาวน์โหลด', '', '', '', '', ''),
('16', ".$newLanguageId.", 'การแจ้งเตือน', '', '', '', '', ''),
('17', ".$newLanguageId.", 'หน้ารถเข็น', '', '', '', '', ''),
('18', ".$newLanguageId.", 'หน้าชำระเงินด่วน', '', '', '', '', ''),
('19', ".$newLanguageId.", 'หน้าชำระเงินสำเร็จอย่างรวดเร็ว', '', '', '', '', ''),
('20', ".$newLanguageId.", 'หน้าเนื้อหาเริ่มต้น', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'ตัวเลือกสินค้า'),
('2', ".$newLanguageId.", 'ดาวน์โหลดแอททริบิวท์')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'แบบฟอร์มติดต่อเรา')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'ชื่อจริง:', '', ".$newLanguageId.", 'ชื่อต้องมีความยาวระหว่าง 3 ถึง 32 ตัวอักษร!'),
('12', 'อีเมล:', '', ".$newLanguageId.", 'ที่อยู่อีเมลไม่ถูกต้อง!'),
('13', 'สอบถาม :', '', ".$newLanguageId.", 'การสอบถามต้องมีความยาวระหว่าง 10 ถึง 3,000 ตัวอักษร!'),
('14', 'ใส่รหัสลงในกล่องด้านล่าง:', '', ".$newLanguageId.", 'การตรวจสอบความเป็นมนุษย์ล้มเหลว กรุณาลองอีกครั้ง')");


