CREATE DATABASE Redlock; USE Redlock
CREATE TABLE users(
  ID int PRIMARY KEY,
  JABATAN varchar(100),
  ALAMAT varchar(100),
  NAMA varchar(100)
);

INSERT INTO users (ID, NAMA, ALAMAT, JABATAN) 
VALUES 
	   (11, 'Ardian','Bogor','Karyawan'),
     (22, 'Bardian','Bandung','Karyawan'),
     (33, 'Cardian','Tangerang','Karyawan'),
	   (44, 'Dardian','Surabaya','Karyawan'),
     (55, 'Erdian','Depok','Karyawan');