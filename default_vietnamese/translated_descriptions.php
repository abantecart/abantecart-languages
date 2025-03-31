<?php

$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'Đặt hàng trước')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Centimet', 'cm'),
('2', ".$newLanguageId.", 'Milimet', 'mm'),
('3', ".$newLanguageId.", 'Inch', 'TRONG')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Kilôgam', 'kg'),
('2', ".$newLanguageId.", 'Gram', 'g'),
('5', ".$newLanguageId.", 'Pao', 'cân Anh'),
('6', ".$newLanguageId.", 'Ounce', 'oz')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'Chưa hoàn thành'),
('1', ".$newLanguageId.", 'Chưa giải quyết'),
('2', ".$newLanguageId.", 'Xử lý'),
('3', ".$newLanguageId.", 'Đã vận chuyển'),
('7', ".$newLanguageId.", 'Đã hủy'),
('5', ".$newLanguageId.", 'Hoàn thành'),
('8', ".$newLanguageId.", 'Từ chối'),
('9', ".$newLanguageId.", 'Hủy bỏ đảo ngược'),
('10', ".$newLanguageId.", 'Thất bại'),
('11', ".$newLanguageId.", 'Đã hoàn lại'),
('12', ".$newLanguageId.", 'Đảo ngược'),
('13', ".$newLanguageId.", 'Hoàn trả'),
('14', ".$newLanguageId.", 'Đã hủy bởi Khách hàng')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'Tất cả các trang khác', '', '', '', '', ''),
('2', ".$newLanguageId.", 'Trang chủ', '', '', '', '', ''),
('3', ".$newLanguageId.", 'Trang đăng nhập', '', '', '', '', ''),
('4', ".$newLanguageId.", 'Trang Liên hệ với chúng tôi', '', '', '', '', ''),
('5', ".$newLanguageId.", 'Trang sản phẩm mặc định', '', '', '', '', ''),
('7', ".$newLanguageId.", 'Trang bảo trì', '', '', '', '', ''),
('8', ".$newLanguageId.", 'Bảng điều khiển khách hàng', '', '', '', '', ''),
('9', ".$newLanguageId.", 'Chi tiết tài khoản', '', '', '', '', ''),
('10', ".$newLanguageId.", 'Thay đổi mật khẩu', '', '', '', '', ''),
('11', ".$newLanguageId.", 'Địa chỉ', '', '', '', '', ''),
('12', ".$newLanguageId.", 'Danh sách mong muốn', '', '', '', '', ''),
('13', ".$newLanguageId.", 'Lịch sử đơn hàng', '', '', '', '', ''),
('14', ".$newLanguageId.", 'Lịch sử giao dịch', '', '', '', '', ''),
('15', ".$newLanguageId.", 'Tải xuống', '', '', '', '', ''),
('16', ".$newLanguageId.", 'Thông báo', '', '', '', '', ''),
('17', ".$newLanguageId.", 'Trang giỏ hàng', '', '', '', '', ''),
('18', ".$newLanguageId.", 'Trang thanh toán nhanh', '', '', '', '', ''),
('19', ".$newLanguageId.", 'Trang thành công thanh toán nhanh', '', '', '', '', ''),
('20', ".$newLanguageId.", 'Trang Nội dung Mặc định', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'Tùy chọn sản phẩm'),
('2', ".$newLanguageId.", 'Tải xuống Thuộc tính')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'Biểu mẫu liên hệ với chúng tôi')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'Tên:', '', ".$newLanguageId.", 'Tên phải có từ 3 đến 32 ký tự!'),
('12', 'E-mail:', '', ".$newLanguageId.", 'Địa chỉ email có vẻ không hợp lệ!'),
('13', 'Cuộc điều tra:', '', ".$newLanguageId.", 'Yêu cầu phải có từ 10 đến 3000 ký tự!'),
('14', 'Nhập mã vào ô bên dưới:', '', ".$newLanguageId.", 'Xác minh của con người không thành công! Vui lòng thử lại.')");


