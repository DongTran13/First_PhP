CREATE TABLE nhanvien(
honv VARCHAR(30) NOT NULL,
    tenlotnv VARCHAR(30) NOT NULL,
    tennv VARCHAR(30) NOT NULL,
    phai VARCHAR(10) NOT NULL,
    luong INT(10) NOT NULL,
    manv INT(10) NOT NULL,
    ngsinh DATE NOT NULL,
    diachi VARCHAR(255),
    phg INT(10) NOT NULL
)

CREATE TABLE dean(
tenda VARCHAR(255) NOT NULL,
    mada INT(10) NOT NULL,
    ddiemda VARCHAR(255),
    phg INT(10) NOT NULL
)

CREATE TABLE phongban(
phg INT(10) NOT NULL,
    tenphg VARCHAR(255) NOT NULL
)
CREATE TABLE phancong(
	manv INT(100) NOT NULL,
    mada INT(10) NOT NULL,
    sogio FLOAT NOT NULL
)

INSERT INTO `nhanvien`(`honv`, `tenlotnv`, `tennv`, `phai`, `luong`, `manv`, `ngsinh`, `diachi`, `phg`) VALUES ("Đinh","Lê","Tiên","Nam","4000","123456789","1965-09-01","Nguyễn Trãi, Q5","1");



INSERT INTO `nhanvien`(`honv`, `tenlotnv`, `tennv`, `phai`, `luong`, `manv`, `ngsinh`, `diachi`, `phg`) VALUES ("Nguyễn","Thị","Loan","Nữ","2500","333445555","1955-08-12","Nguyễn Huệ, Q1","5");
INSERT INTO `nhanvien`(`honv`, `tenlotnv`, `tennv`, `phai`, `luong`, `manv`, `ngsinh`, `diachi`, `phg`) VALUES ("Nguyễn","Lan","Anh","Nữ","4300","666884444","1962-09-15","Lê Lợi, Q1","5");
INSERT INTO `nhanvien`(`honv`, `tenlotnv`, `tennv`, `phai`, `luong`, `manv`, `ngsinh`, `diachi`, `phg`) VALUES ("Trần","Thanh","Tâm","Nam","3800","453453453","1972-07-31","Trần Não, Q2","2");
INSERT INTO `dean`(`tenda`, `mada`, `ddiemda`, `phg`) VALUES ("Sản phẩm X", "1","Quy Nhơn", "5")
INSERT INTO `dean`(`tenda`, `mada`, `ddiemda`, `phg`) VALUES ("Sản phẩm Y", "2","Nha Trang", "5");
INSERT INTO `dean`(`tenda`, `mada`, `ddiemda`, `phg`) VALUES ("Sản phẩm Z", "3","TP HCM", "5");
INSERT INTO `dean`(`tenda`, `mada`, `ddiemda`, `phg`) VALUES ("Tin học hoá", "10","Bình Dương", "4");
INSERT INTO `phongban`(`phg`, `tenphg`) VALUES ("1","Nhân sự");
INSERT INTO `phongban`(`phg`, `tenphg`) VALUES ("2","KẾ hoạch");
INSERT INTO `phongban`(`phg`, `tenphg`) VALUES ("3","Kinh Doanh");
INSERT INTO `phongban`(`phg`, `tenphg`) VALUES ("4","Marketing");
INSERT INTO `phongban`(`phg`, `tenphg`) VALUES ("5","Kế toán");
INSERT INTO `phancong`(`manv`, `mada`, `sogio`) VALUES ("123456789","1","32.0");
INSERT INTO `phancong`(`manv`, `mada`, `sogio`) VALUES ("123456789","2","8.0");
INSERT INTO `phancong`(`manv`, `mada`, `sogio`) VALUES ("666884444","3","40.0");
INSERT INTO `phancong`(`manv`, `mada`, `sogio`) VALUES ("453453453","1","20.0")




SELECT
    *
FROM
    `nhanvien`


SELECT * FROM `nhanvien` WHERE phg ="5"

SELECT * FROM `nhanvien` WHERE phg ="5" && luong >=3000
SELECT * FROM `nhanvien` WHERE luong >=3000 && luong <=8000
SELECT * FROM `nhanvien` WHERE diachi like '%Nguyen%'


SELECT COUNT(*) 
FROM nhanvien
WHERE phg > 0

SELECT COUNT(*) 
FROM nhanvien
WHERE phg = 1

SELECT COUNT(*) 
FROM nhanvien
WHERE phg = 5


SELECT COUNT(*) 
FROM nhanvien
WHERE phg = 2

SELECT `tennv`, `manv`, `phg` FROM `nhanvien` WHERE phg = 5


