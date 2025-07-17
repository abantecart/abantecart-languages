<?php
//translated
$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", '预购')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", '厘米', '厘米'),
('2', ".$newLanguageId.", '毫米', '毫米'),
('3', ".$newLanguageId.", '英寸', '在')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", '公斤', '公斤'),
('2', ".$newLanguageId.", '克', '克'),
('5', ".$newLanguageId.", '磅', '磅'),
('6', ".$newLanguageId.", '盎司', '盎司')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", '不完整'),
('1', ".$newLanguageId.", '待办的'),
('2', ".$newLanguageId.", '加工'),
('3', ".$newLanguageId.", '已发货'),
('7', ".$newLanguageId.", '取消'),
('5', ".$newLanguageId.", '完全的'),
('8', ".$newLanguageId.", '被拒'),
('9', ".$newLanguageId.", '已取消的撤销'),
('10', ".$newLanguageId.", '失败的'),
('11', ".$newLanguageId.", '已退款'),
('12', ".$newLanguageId.", '反转'),
('13', ".$newLanguageId.", '退款'),
('14', ".$newLanguageId.", '客户取消')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", '所有其他页面', '', '', '', '', ''),
('2', ".$newLanguageId.", '主页', '', '', '', '', ''),
('3', ".$newLanguageId.", '登录页面', '', '', '', '', ''),
('4', ".$newLanguageId.", '联系我们页面', '', '', '', '', ''),
('5', ".$newLanguageId.", '默认产品页面', '', '', '', '', ''),
('7', ".$newLanguageId.", '维护页面', '', '', '', '', ''),
('8', ".$newLanguageId.", '客户仪表板', '', '', '', '', ''),
('9', ".$newLanguageId.", '帐户详细信息', '', '', '', '', ''),
('10', ".$newLanguageId.", '更改密码', '', '', '', '', ''),
('11', ".$newLanguageId.", '地址', '', '', '', '', ''),
('12', ".$newLanguageId.", '愿望清单', '', '', '', '', ''),
('13', ".$newLanguageId.", '订单历史记录', '', '', '', '', ''),
('14', ".$newLanguageId.", '交易历史', '', '', '', '', ''),
('15', ".$newLanguageId.", '下载', '', '', '', '', ''),
('16', ".$newLanguageId.", '通知', '', '', '', '', ''),
('17', ".$newLanguageId.", '购物车页面', '', '', '', '', ''),
('18', ".$newLanguageId.", '快速结帐页面', '', '', '', '', ''),
('19', ".$newLanguageId.", '快速结帐成功页面', '', '', '', '', ''),
('20', ".$newLanguageId.", '默认内容页面', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", '产品选项'),
('2', ".$newLanguageId.", '下载属性')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", '联系我们表格')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', '名：', '', ".$newLanguageId.", '名称必须介于 3 到 32 个字符之间！'),
('12', '电子邮件：', '', ".$newLanguageId.", '电子邮件地址似乎无效！'),
('13', '询问：', '', ".$newLanguageId.", '询问内容必须介于 10 至 3000 个字符之间！'),
('14', '在下面的框中输入代码：', '', ".$newLanguageId.", '人工验证失败！请重试。')");


