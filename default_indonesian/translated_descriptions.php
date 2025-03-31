<?php

$this->db->query("INSERT INTO ".$this->db->table('stock_statuses')." (`stock_status_id`, `language_id`, `name`)
VALUES
('1', ".$newLanguageId.", 'Pesan Sekarang')");


$this->db->query("INSERT INTO ".$this->db->table('length_class_descriptions')." (`length_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Sentimeter', 'cm'),
('2', ".$newLanguageId.", 'Milimeter', 'satuan'),
('3', ".$newLanguageId.", 'Inci', 'di dalam')");


$this->db->query("INSERT INTO ".$this->db->table('weight_class_descriptions')." (`weight_class_id`, `language_id`, `title`, `unit`)
VALUES
('1', ".$newLanguageId.", 'Kilogram', 'kg'),
('2', ".$newLanguageId.", 'Gram', 'G'),
('5', ".$newLanguageId.", 'Pound', 'pon'),
('6', ".$newLanguageId.", 'Ons', 'ons')");


$this->db->query("INSERT INTO ".$this->db->table('order_statuses')." (`order_status_id`, `language_id`, `name`)
VALUES
('0', ".$newLanguageId.", 'Tidak lengkap'),
('1', ".$newLanguageId.", 'Tertunda'),
('2', ".$newLanguageId.", 'Pengolahan'),
('3', ".$newLanguageId.", 'Dikirim'),
('7', ".$newLanguageId.", 'Dibatalkan'),
('5', ".$newLanguageId.", 'Selesai'),
('8', ".$newLanguageId.", 'Ditolak'),
('9', ".$newLanguageId.", 'Pembalikan yang Dibatalkan'),
('10', ".$newLanguageId.", 'Gagal'),
('11', ".$newLanguageId.", 'Dikembalikan dananya'),
('12', ".$newLanguageId.", 'Terbalik'),
('13', ".$newLanguageId.", 'Penagihan balik'),
('14', ".$newLanguageId.", 'Dibatalkan oleh Pelanggan')");


$this->db->query("INSERT INTO ".$this->db->table('page_descriptions')." (`page_id`, `language_id`, `name`, `title`, `seo_url`, `keywords`, `description`, `content`)
VALUES
('1', ".$newLanguageId.", 'Semua Halaman Lainnya', '', '', '', '', ''),
('2', ".$newLanguageId.", 'Halaman Depan', '', '', '', '', ''),
('3', ".$newLanguageId.", 'Halaman Login', '', '', '', '', ''),
('4', ".$newLanguageId.", 'Halaman Hubungi Kami', '', '', '', '', ''),
('5', ".$newLanguageId.", 'Halaman Produk Default', '', '', '', '', ''),
('7', ".$newLanguageId.", 'Halaman Pemeliharaan', '', '', '', '', ''),
('8', ".$newLanguageId.", 'Dasbor Pelanggan', '', '', '', '', ''),
('9', ".$newLanguageId.", 'Rincian Akun', '', '', '', '', ''),
('10', ".$newLanguageId.", 'Ubah Kata Sandi', '', '', '', '', ''),
('11', ".$newLanguageId.", 'Alamat', '', '', '', '', ''),
('12', ".$newLanguageId.", 'Daftar Keinginan', '', '', '', '', ''),
('13', ".$newLanguageId.", 'Riwayat Pesanan', '', '', '', '', ''),
('14', ".$newLanguageId.", 'Riwayat Transaksi', '', '', '', '', ''),
('15', ".$newLanguageId.", 'Unduhan', '', '', '', '', ''),
('16', ".$newLanguageId.", 'Pemberitahuan', '', '', '', '', ''),
('17', ".$newLanguageId.", 'Halaman Keranjang', '', '', '', '', ''),
('18', ".$newLanguageId.", 'Halaman Pembayaran Cepat', '', '', '', '', ''),
('19', ".$newLanguageId.", 'Halaman Sukses Pembayaran Cepat', '', '', '', '', ''),
('20', ".$newLanguageId.", 'Halaman Konten Default', '', '', '', '', '')");


$this->db->query("INSERT INTO ".$this->db->table('global_attributes_type_descriptions')." (`attribute_type_id`, `language_id`, `type_name`)
VALUES
('1', ".$newLanguageId.", 'Opsi Produk'),
('2', ".$newLanguageId.", 'Unduh Atribut')");


$this->db->query("INSERT INTO ".$this->db->table('form_descriptions')." (`form_id`, `language_id`, `description`)
VALUES
('2', ".$newLanguageId.", 'Formulir Hubungi Kami')");


$this->db->query("INSERT INTO ".$this->db->table('field_descriptions')." (`field_id`, `name`, `description`, `language_id`, `error_text`)
VALUES
('11', 'Nama depan:', '', ".$newLanguageId.", 'Nama harus antara 3 dan 32 karakter!'),
('12', 'E-mail:', '', ".$newLanguageId.", 'Alamat E-Mail tampaknya tidak valid!'),
('13', 'Pertanyaan:', '', ".$newLanguageId.", 'Pertanyaan harus antara 10 dan 3000 karakter!'),
('14', 'Masukkan kode pada kotak di bawah ini:', '', ".$newLanguageId.", 'Verifikasi manusia gagal! Silakan coba lagi.')");


