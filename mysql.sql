-- tao csdl
-- CREATE DATABASE BenhVien;
-- su dung 
USE BenhVien;


CREATE TABLE KhoThuoc(
    MaKho CHAR(50) PRIMARY KEY,
    TenKho NVARCHAR(50));


CREATE TABLE BangBaoGia(
    id INT AUTO_INCREMENT,
    SoPhieuBG CHAR(50),
    NgayBG DATE,
    MaNCC CHAR(50),
    PRIMARY KEY(id,SoPhieuBG));


CREATE TABLE KhoaDT(
    MaKhoa CHAR(50) PRIMARY KEY,
    TenKhoa NVARCHAR(50)
);



CREATE TABLE NhaCungCap(
    MaNCC CHAR(50) PRIMARY KEY,
    TenNCC NVARCHAR(50),
    DiaChi NVARCHAR(50),
    SoDT CHAR(50));



CREATE TABLE NhanVien(
    MaNV CHAR(50) PRIMARY KEY,
    TenNV NVARCHAR(50),
    DiaChi NVARCHAR(50),
    GioiTinh NVARCHAR(50),
    NgaySinh DATE,
    SoDT CHAR(50));


CREATE TABLE PhieuDatMua(
    SoPhieuMua CHAR(50) PRIMARY KEY,
    NgayMua DATE,
    MaNV CHAR(50),
    MaNCC CHAR(50));


CREATE TABLE PhieuNhap(
    id INT AUTO_INCREMENT,
    SoPhieuNhap CHAR(50),
    NgayNhap DATE,
    MaNV CHAR(50),
    MaKho CHAR(50),
    MaKhoa CHAR(50),
    MaNCC CHAR(50),
    PRIMARY KEY(id, SoPhieuNhap)
);

CREATE TABLE Thuoc(
    MaThuoc CHAR(50) PRIMARY KEY,
    TenThuoc NVARCHAR(50),
    DonViTinh CHAR(50),
    DonGia FLOAT,
    NgaySanXuat DATE,
    HanSuDung DATE,
    NhaSanXuat NVARCHAR(50),
    SoLuongTon CHAR(50)
    );

CREATE TABLE ThuocBaoGia(
    id1 INT PRIMARY KEY AUTO_INCREMENT,
    SoPhieuBG CHAR(50),
    MaThuoc CHAR(50),
    FOREIGN KEY(MaThuoc) REFERENCES Thuoc(MaThuoc)
);

CREATE TABLE ThuocDatMua(
    id INT PRIMARY KEY AUTO_INCREMENT,
    SoPhieuMua CHAR(50),
    MaThuoc CHAR(50),
    SoLuong CHAR(50),
    FOREIGN KEY(SoPhieuMua) REFERENCES PhieuDatMua(SoPhieuMua)
);


CREATE TABLE ThuocNhap(
    id1 INT PRIMARY KEY AUTO_INCREMENT,
    SoPhieuNhap CHAR(50),
    MaThuoc CHAR(50),
    SoLuong CHAR(50),
    FOREIGN KEY(MaThuoc) REFERENCES Thuoc(MaThuoc)
);


CREATE TABLE PhieuXuat(
    id INT AUTO_INCREMENT,
    SoPhieuXuat CHAR(50),
    NgayXuat DATE,
    MaNV CHAR(50),
    MaKho CHAR(50),
    MaKhoa CHAR(50),
    MaNCC CHAR(50),
    PRIMARY KEY(id, SoPhieuXuat)
);

CREATE TABLE ThuocXuat(
    id1 INT PRIMARY KEY AUTO_INCREMENT,
    SoPhieuXuat CHAR(50),
    MaThuoc CHAR(50),
    SoLuong CHAR(50),
    FOREIGN KEY(MaThuoc) REFERENCES Thuoc(MaThuoc)
);


CREATE TABLE BienBanHuy(
    id INT AUTO_INCREMENT,
    SoPhieuBB CHAR(50),
    NgayBB DATE,
    MaNV CHAR(50),
    MaKho CHAR(50),
    PRIMARY KEY(id, SoPhieuBB)
);

CREATE TABLE ThuocHuy(
    id1 INT PRIMARY KEY AUTO_INCREMENT,
    SoPhieuHuy CHAR(50),
    MaThuoc CHAR(50),
    SoLuong CHAR(50),
    FOREIGN KEY(MaThuoc) REFERENCES Thuoc(MaThuoc)
);