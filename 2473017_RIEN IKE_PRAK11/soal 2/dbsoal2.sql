DROP DATABASE IF EXISTS db_sekolah;
CREATE DATABASE db_sekolah;

USE db_sekolah;

CREATE TABLE siswa (
    id INT(10) AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    kelas VARCHAR(50) NOT NULL
);

INSERT INTO siswa (id, nama, kelas) VALUES
(2, 'John Doe', '12'),
(3, 'Tim Benners-Lee', '12'),
(4, 'Quenel', '12');