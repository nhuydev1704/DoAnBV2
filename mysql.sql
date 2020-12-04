-- tao csdl
CREATE DATABASE BenhVien;

-- su dung 
USE BenhVien;

--tao bang kho thuoc
CREATE TABLE KhoThuoc(
    MaKho CHAR(50) PRIMARY KEY,
    TenKho NVARCHAR(50));

--tao bang bang bao giá
CREATE TABLE BangBaoGia(
    id INT AUTO_INCREMENT,
    SoPhieuBG CHAR(50),
    NgayBG DATE,
    MaNCC CHAR(50),
    PRIMARY KEY(id,SoPhieuBG));

--Tao bảng KhoaDT
CREATE TABLE KhoaDT(
    MaKhoa CHAR(50) PRIMARY KEY,
    TenKhoa NVARCHAR(50)
);

