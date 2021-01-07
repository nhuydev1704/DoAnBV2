-- tao csdl file chuaanr
CREATE DATABASE BenhVien1;
-- su dung 
USE BenhVien;



CREATE TABLE GioHang(id INT PRIMARY KEY AUTO_INCREMENT,
    MaThuoc VARCHAR(255),
    TenThuoc VARCHAR(255),
    DonViTinh VARCHAR(255),
    Anh VARCHAR(255),
    Gia INT,
    HanSuDung DATE,
    NhaSanXuat VARCHAR(255));

CREATE TABLE donhang(id INT PRIMARY KEY AUTO_INCREMENT
    , name VARCHAR(255), 
    phone VARCHAR(255), 
    address VARCHAR(255), 
    note VARCHAR(255), 
    total INT, 
    created_time DATETIME, 
    last_updated DATETIME);

CREATE TABLE KhoThuoc(
    id INT AUTO_INCREMENT,
    MaKho CHAR(50),
    TenKho NVARCHAR(50),
    PRIMARY KEY(id, MaKho)
    );


CREATE TABLE BangBaoGia(
    id INT AUTO_INCREMENT,
    SoPhieuBG CHAR(50),
    NgayBG DATE,
    MaNCC CHAR(50),
    PRIMARY KEY(id,SoPhieuBG));


CREATE TABLE KhoaDT(
    id INT AUTO_INCREMENT,
    MaKhoa CHAR(50),
    TenKhoa NVARCHAR(50),
    PRIMARY KEY(id, MaKhoa)
);



CREATE TABLE NhaCungCap(
    id INT AUTO_INCREMENT,
    MaNCC CHAR(50),
    TenNCC NVARCHAR(50),
    DiaChi NVARCHAR(50),
    SoDT CHAR(50),
    PRIMARY KEY(id, MaNCC)
    );



CREATE TABLE NhanVien(
    id INT AUTO_INCREMENT,
    MaNV CHAR(50),
    TenNV NVARCHAR(50),
    DiaChi NVARCHAR(50),
    GioiTinh NVARCHAR(50),
    NgaySinh DATE,
    SoDT CHAR(50),
    PRIMARY KEY(id, MaNV)
    );


CREATE TABLE PhieuDatMua(
    id INT PRIMARY KEY AUTO_INCREMENT,
    SoPhieuMua CHAR(50),
    NgayMua DATE,
    MaNV CHAR(50),
    MaNCC CHAR(50)
    );


CREATE TABLE PhieuNhap(
    id INT AUTO_INCREMENT,
    SoPhieuNhap CHAR(50),
    NgayNhap DATE,
    MaNV CHAR(50),
    MaKho CHAR(50),
    MaKhoa CHAR(50),
    MaNCC CHAR(50),
    PRIMARY KEY(id)
);

CREATE TABLE Thuoc(
    id INT AUTO_INCREMENT,
    MaThuoc CHAR(50),
    TenThuoc NVARCHAR(50),
    DonViTinh CHAR(50),
    DonGia INT,
    Anh VARCHAR(255),
    NgaySanXuat DATE,
    HanSuDung DATE,
    NhaSanXuat NVARCHAR(50),
    SoLuongTon CHAR(50),
    PRIMARY KEY(id,MaThuoc)
    );

CREATE TABLE ThuocBaoGia(
    id INT PRIMARY KEY AUTO_INCREMENT,
    SoPhieuBG CHAR(50),
    MaThuoc CHAR(50)
);

CREATE TABLE ThuocDatMua(
    id INT PRIMARY KEY AUTO_INCREMENT,
    SoPhieuMua CHAR(50),
    MaThuoc CHAR(50),
    SoLuong CHAR(50)
);


CREATE TABLE ThuocNhap(
    id INT PRIMARY KEY AUTO_INCREMENT,
    SoPhieuNhap CHAR(50),
    MaThuoc CHAR(50),
    SoLuong CHAR(50)
);


CREATE TABLE PhieuXuat(
    id INT PRIMARY KEY AUTO_INCREMENT,
    SoPhieuXuat CHAR(50),
    NgayXuat DATE,
    MaNV CHAR(50),
    MaKho CHAR(50),
    MaKhoa CHAR(50),
    MaNCC CHAR(50)
);

CREATE TABLE ThuocXuat(
    id INT PRIMARY KEY AUTO_INCREMENT,
    SoPhieuXuat CHAR(50),
    MaThuoc CHAR(50),
    SoLuong CHAR(50)
);


CREATE TABLE BienBanHuy(
    id INT PRIMARY KEY AUTO_INCREMENT,
    SoPhieuBB CHAR(50),
    NgayBB DATE,
    MaNV CHAR(50),
    MaKho CHAR(50)
);

CREATE TABLE ThuocHuy(
    id INT PRIMARY KEY AUTO_INCREMENT,
    SoPhieuHuy CHAR(50),
    MaThuoc CHAR(50),
    SoLuong CHAR(50)
);