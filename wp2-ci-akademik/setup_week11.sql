-- ============================================================
-- Week 11 Lab Activity – SQL Setup
-- Database: akademik
-- ============================================================

-- Tabel user
CREATE TABLE IF NOT EXISTS `user` (
  `email`    VARCHAR(100)  NOT NULL,
  `password` VARCHAR(100)  NOT NULL,
  `nama`     VARCHAR(100)  NOT NULL,
  `active`   TINYINT(1)    NOT NULL DEFAULT 1,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabel user_log
CREATE TABLE IF NOT EXISTS `user_log` (
  `id`        INT           NOT NULL AUTO_INCREMENT,
  `email`     VARCHAR(100)  DEFAULT NULL,
  `timestamp` DATETIME      DEFAULT NULL,
  `status`    INT           DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ============================================================
-- Contoh data user (password: admin123)
-- ============================================================
INSERT INTO `user` (`email`, `password`, `nama`, `active`)
VALUES ('admin@example.com', MD5('admin123'), 'Administrator', 1);

-- Keterangan status di user_log:
--  1 = Login berhasil
--  2 = Email tidak terdaftar
--  3 = Password salah
--  4 = Akun dinonaktifkan (active = 0)
--  5 = Unidentified error
