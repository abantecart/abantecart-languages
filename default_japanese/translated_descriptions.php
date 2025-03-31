<?php

$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", '予約注文')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'センチメートル', 'cm'),
('2', ".$newLanguageId.", 'ミリメートル', 'んん'),
('3', ".$newLanguageId.", 'インチ', 'で')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'キログラム', 'kg'),
('2', ".$newLanguageId.", 'グラム', 'グ'),
('5', ".$newLanguageId.", 'ポンド', 'ポンド'),
('6', ".$newLanguageId.", 'オンス', 'オンス')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", '不完全'),
('1', ".$newLanguageId.", '保留中'),
('2', ".$newLanguageId.", '処理'),
('3', ".$newLanguageId.", '発送済み'),
('7', ".$newLanguageId.", 'キャンセル'),
('5', ".$newLanguageId.", '完了'),
('8', ".$newLanguageId.", '拒否されました'),
('9', ".$newLanguageId.", '取り消し取り消し'),
('10', ".$newLanguageId.", '失敗した'),
('11', ".$newLanguageId.", '返金'),
('12', ".$newLanguageId.", '逆転'),
('13', ".$newLanguageId.", 'チャージバック'),
('14', ".$newLanguageId.", '顧客によりキャンセルされました')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'その他すべてのページ', '', '', '', '', ''),
('2', ".$newLanguageId.", 'ホームページ', '', '', '', '', ''),
('3', ".$newLanguageId.", 'ログインページ', '', '', '', '', ''),
('4', ".$newLanguageId.", 'お問い合わせページ', '', '', '', '', ''),
('5', ".$newLanguageId.", 'デフォルトの製品ページ', '', '', '', '', ''),
('7', ".$newLanguageId.", 'メンテナンスページ', '', '', '', '', ''),
('8', ".$newLanguageId.", '顧客ダッシュボード', '', '', '', '', ''),
('9', ".$newLanguageId.", 'アカウントの詳細', '', '', '', '', ''),
('10', ".$newLanguageId.", 'パスワードを変更する', '', '', '', '', ''),
('11', ".$newLanguageId.", '住所', '', '', '', '', ''),
('12', ".$newLanguageId.", 'ウィッシュリスト', '', '', '', '', ''),
('13', ".$newLanguageId.", '注文履歴', '', '', '', '', ''),
('14', ".$newLanguageId.", '取引履歴', '', '', '', '', ''),
('15', ".$newLanguageId.", 'ダウンロード', '', '', '', '', ''),
('16', ".$newLanguageId.", '通知', '', '', '', '', ''),
('17', ".$newLanguageId.", 'カートページ', '', '', '', '', ''),
('18', ".$newLanguageId.", '高速チェックアウトページ', '', '', '', '', ''),
('19', ".$newLanguageId.", '高速チェックアウト成功ページ', '', '', '', '', ''),
('20', ".$newLanguageId.", 'デフォルトのコンテンツページ', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", '製品オプション'),
('2', ".$newLanguageId.", 'ダウンロード属性')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'お問い合わせフォーム')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'ファーストネーム：', '', ".$newLanguageId.", '名前は 3 文字から 32 文字まででなければなりません。'),
('12', 'メールアドレス:', '', ".$newLanguageId.", '電子メールアドレスが有効ではないようです。'),
('13', '問い合わせ：', '', ".$newLanguageId.", 'お問い合わせは10〜3000文字で入力してください。'),
('14', '以下のボックスにコードを入力してください:', '', ".$newLanguageId.", '人間による検証に失敗しました。もう一度お試しください。')");


