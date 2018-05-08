CREATE TABLE baibao_tukhoa
(
  IDBBTK BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  IDKHOA BIGINT NOT NULL,
  IDBAO  BIGINT NOT NULL
)
  ENGINE = InnoDB;

CREATE TABLE baiviet
(
  IDBV     BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  TENBV    VARCHAR(300)       NULL,
  HINHANH  TEXT               NULL,
  MOTA     TEXT               NULL,
  NOIDUNG  LONGTEXT           NULL,
  LINKBV   TEXT               NULL,
  LUOTXEM  BIGINT DEFAULT '0' NULL,
  NGAYDANG DATE               NULL,
  HIENTHI  BIT                NOT NULL
)
  ENGINE = InnoDB;

CREATE TABLE baiviet_chuyenmuc
(
  IDBVCM BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  IDBV   BIGINT NULL,
  IDCM   BIGINT NULL
)
  ENGINE = InnoDB;

CREATE TABLE baiviet_nguoidung
(
  IDBVND BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  IDBV   BIGINT NULL,
  IDND   BIGINT NULL
)
  ENGINE = InnoDB;

CREATE TABLE baocaotiendo
(
  IDTD    BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  IDDT    BIGINT NULL,
  CVDATH  TEXT   NULL,
  CVCANTH TEXT   NULL,
  DENGHI  TEXT   NULL,
  NGAYBC  DATE   NULL
)
  ENGINE = InnoDB;

CREATE TABLE baokhoahoc
(
  IDBAO       BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  TENBAO      VARCHAR(200)     NOT NULL,
  CAPBAIBAO   TEXT             NULL,
  TENQG       VARCHAR(50)      NOT NULL,
  TAPCHI      VARCHAR(200)     NULL,
  NAMXUATBAN  DATE             NULL,
  NOIDUNG     TEXT             NULL,
  BIB         TEXT             NULL,
  NGAYDANGBAI DATE             NULL,
  FILE        TEXT             NULL,
  DIEM        FLOAT            NULL,
  SOTIET      INT              NULL,
  ANHIEN      BIT DEFAULT b'1' NOT NULL
)
  ENGINE = InnoDB;

CREATE TABLE bieumau
(
  IDBM  BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  MABM  TEXT NULL,
  TENBM TEXT NULL,
  FILE  TEXT NULL
)
  ENGINE = InnoDB;

CREATE TABLE capbaibao
(
  IDC    BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  TENCAP TEXT NULL
)
  ENGINE = MyISAM;

CREATE TABLE chucdanhgiangvien
(
  IDCD        BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  TENCHUCDANH TEXT NULL
)
  ENGINE = MyISAM;

CREATE TABLE chucdanhkhoahoc
(
  IDCD        BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  TENCHUCDANH TEXT NULL
)
  ENGINE = MyISAM;

CREATE TABLE chucvu
(
  IDCV      BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  TENCHUCVU TEXT NULL
)
  ENGINE = MyISAM;

CREATE TABLE chuyenmuc
(
  IDCM   BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  TENCM  VARCHAR(200) NULL,
  MOTACM VARCHAR(200) NULL,
  LINKCM VARCHAR(200) NULL
)
  ENGINE = InnoDB;

CREATE TABLE congtacchuyenmon
(
  IDCT       BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  IDND       BIGINT NULL,
  THOIGIAN   DATE   NULL,
  NOICONGTAC TEXT   NULL,
  CONGVIEC   TEXT   NULL
)
  ENGINE = InnoDB;

CREATE TABLE daihoc
(
  IDDH         BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  IDND         BIGINT       NULL,
  HEDAOTAO     VARCHAR(100) NULL,
  NOIDAOTAO    TEXT         NULL,
  NGANHHOC     VARCHAR(200) NULL,
  NUOCDAOTAO   VARCHAR(100) NULL,
  NAMTOTNGHIEP INT(5)       NULL
)
  ENGINE = InnoDB;

CREATE TABLE detai
(
  IDDT              BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  TENDETAI          VARCHAR(200)                          NULL,
  MUCTIEU           TEXT                                  NULL,
  NOIDUNG           TEXT                                  NULL,
  CAPDETAI          VARCHAR(100)                          NULL,
  MOISANGTAO        TEXT                                  NULL,
  THUOCCHUONGTRINH  TEXT                                  NULL,
  SUCANTHIET        TEXT                                  NULL,
  TINHHINHNGHIENCUU TEXT                                  NULL,
  NGHIENCUULIENQUAN TEXT                                  NULL,
  PHUONGPHAPKYTHUAT TEXT                                  NULL,
  KINHPHINGANSACH   DECIMAL                               NULL,
  KINHPHINGUONKHAC  DECIMAL                               NULL,
  THANGTHUCHIEN     INT                                   NULL,
  THANGNAMBD        VARCHAR(20)                           NULL,
  THANGNAMKT        VARCHAR(20)                           NULL,
  KETQUA            TEXT                                  NULL,
  FILE              TEXT                                  NULL,
  NGAYTHEM          DATETIME DEFAULT CURRENT_TIMESTAMP    NULL,
  TRANGTHAI         VARCHAR(20) DEFAULT 'Chờ gửi đề xuất' NULL
)
  ENGINE = InnoDB;

CREATE TABLE detai_nguoidung
(
  IDDTND BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  IDDT   BIGINT NULL,
  IDND   BIGINT NULL
)
  ENGINE = InnoDB;

CREATE TABLE dexuatdetai
(
  IDDX       BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  IDDT       BIGINT                             NOT NULL,
  NGAYDEXUAT DATETIME DEFAULT CURRENT_TIMESTAMP NULL
)
  ENGINE = InnoDB;

CREATE TABLE hocvi
(
  IDHV     BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  TENHOCVI TEXT NULL
)
  ENGINE = MyISAM;

CREATE TABLE khoabomon
(
  IDKBM       INT AUTO_INCREMENT
    PRIMARY KEY,
  TENKBM      VARCHAR(200) NOT NULL,
  TENTIENGANH VARCHAR(100) NOT NULL,
  DIACHI      VARCHAR(200) NOT NULL,
  DIENTHOAI   VARCHAR(20)  NOT NULL CHARSET latin1,
  MAIL        VARCHAR(100) NOT NULL
)
  ENGINE = InnoDB;

CREATE TABLE kinhphi
(
  IDKP         BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  IDDT         BIGINT  NULL,
  KHOANCHI     TEXT    NULL,
  NGUONNSNN    DECIMAL NULL,
  NGUONTUCO    DECIMAL NULL,
  NGUONLIENKET DECIMAL NULL
)
  ENGINE = InnoDB;

CREATE TABLE linhvuckhoahoc
(
  IDLV  BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  IDDT  BIGINT       NULL,
  TENLV VARCHAR(100) NULL
)
  ENGINE = InnoDB;

CREATE TABLE loaihinhnghiencuu
(
  IDLH  BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  IDDT  BIGINT       NULL,
  TENLH VARCHAR(100) NULL
)
  ENGINE = InnoDB;

CREATE TABLE loaitaikhoan
(
  IDLTK  BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  TENLTK VARCHAR(20) NULL
)
  ENGINE = InnoDB;

CREATE TABLE loaitaikhoan_nguoidung
(
  IDLTKND BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  IDND    BIGINT NULL,
  IDLTK   BIGINT NULL
)
  ENGINE = InnoDB;

CREATE TABLE ngoaingu
(
  IDNN        BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  IDND        BIGINT       NULL,
  TENNGOAINGU VARCHAR(100) NULL,
  MUCDOSUDUNG VARCHAR(200) NULL
)
  ENGINE = InnoDB;

CREATE TABLE nguoidung
(
  IDND              BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  HO                VARCHAR(50)                      NULL,
  TEN               VARCHAR(50)                      NOT NULL,
  GIOITINH          VARCHAR(4) DEFAULT 'Nam'         NOT NULL,
  NGAYSINH          DATE                             NULL,
  NOISINH           TEXT                             NULL,
  QUEQUAN           TEXT                             NULL,
  DANTOC            VARCHAR(20)                      NULL,
  HOCVICAONHAT      TEXT                             NULL,
  NAMNUOCHOCVI      VARCHAR(100)                     NULL,
  CHUCDANHKHOAHOC   VARCHAR(100)                     NULL,
  NAMBONHIEM        TEXT                             NULL,
  CHUCVU            VARCHAR(100)                     NULL,
  DONVICONGTAC      VARCHAR(200)                     NULL,
  CHOORIENG         TEXT                             NULL,
  DIENTHOAICQ       VARCHAR(20)                      NULL,
  DIENTHOAINR       VARCHAR(20)                      NULL,
  DIENTHOAIDD       VARCHAR(20)                      NULL,
  FAX               VARCHAR(20)                      NULL,
  MAIL              VARCHAR(100)                     NOT NULL,
  THACSICHUYENNGANH TEXT                             NULL,
  NAMCAPBANGTSCN    TEXT                             NULL,
  NOIDAOTAOTSCN     TEXT                             NULL,
  TIENSICHUYENNGANH TEXT                             NULL,
  NAMCAPBANGTSCN2   TEXT                             NULL,
  NOIDAOTAOTSCN2    TEXT                             NULL,
  TENLUANAN         TEXT                             NULL,
  CHUCDANHGIANGVIEN VARCHAR(100)                     NULL,
  TRINHDOCHUYENMON  VARCHAR(100)                     NULL,
  TENDANGNHAP       VARCHAR(50)                      NOT NULL,
  MATKHAU           VARCHAR(100)                     NOT NULL,
  HINH              VARCHAR(1000)                    NULL,
  TRANGTHAI         VARCHAR(20) DEFAULT 'binhthuong' NULL
)
  ENGINE = InnoDB;

CREATE TABLE nguoidung_baibao
(
  IDTB  BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  IDBAO BIGINT NOT NULL,
  IDND  BIGINT NOT NULL
)
  ENGINE = InnoDB;

CREATE TABLE nguoidung_khoabomon
(
  IDNDKBM BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  IDND    BIGINT NULL,
  IDKBM   BIGINT NULL
)
  ENGINE = InnoDB;

CREATE TABLE quocgia
(
  cc_fips VARCHAR(2)   NULL,
  cc_iso  VARCHAR(2)   NULL,
  tld     VARCHAR(3)   NULL,
  ten     VARCHAR(100) NULL
)
  ENGINE = InnoDB
  COLLATE = utf8_bin;

CREATE INDEX idx_cc_fips
  ON quocgia (cc_fips);

CREATE INDEX idx_cc_iso
  ON quocgia (cc_iso);

CREATE TABLE slider
(
  id       BIGINT(10) AUTO_INCREMENT
    PRIMARY KEY,
  tieude   VARCHAR(100)     NULL,
  link     VARCHAR(100)     NULL,
  style    VARCHAR(50)      NOT NULL,
  hinhanh  VARCHAR(100)     NOT NULL,
  kichhoat BIT DEFAULT b'1' NOT NULL
)
  ENGINE = InnoDB;

CREATE TABLE tgbaokhoahoc
(
  IDTG     BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  TENTG    VARCHAR(100) NOT NULL,
  NGAYSINH DATE         NULL,
  MOTA     TEXT         NULL,
  DIACHI   VARCHAR(200) NULL
)
  ENGINE = InnoDB;

CREATE TABLE thanhviendetai
(
  IDTV       BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  IDDT       BIGINT NOT NULL,
  IDND       BIGINT NULL,
  CONGVIEC   TEXT   NULL,
  TRACHNHIEM TEXT   NULL
)
  ENGINE = InnoDB;

CREATE TABLE tiendodukien
(
  IDDKTD     BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  IDDT       BIGINT NULL,
  CONGVIEC   TEXT   NULL,
  SANPHAM    TEXT   NULL,
  THOIGIANBD DATE   NULL,
  THOIGIANKT DATE   NULL
)
  ENGINE = InnoDB;

CREATE TABLE tochucthamgia
(
  IDTC           BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  IDDT           BIGINT  NULL,
  THONGTINTC     TEXT    NULL,
  NOIDUNGTHAMGIA TEXT    NULL,
  KINHPHI        DECIMAL NULL
)
  ENGINE = InnoDB;

CREATE TABLE trinhdochuyenmon
(
  IDTD       BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  TENTRINHDO TEXT NULL
)
  ENGINE = MyISAM;

CREATE TABLE tukhoa
(
  IDKHOA  BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  TENKHOA VARCHAR(50) NOT NULL
)
  ENGINE = InnoDB;

CREATE TABLE xetduyetdetai
(
  IDXD             BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  IDDT             BIGINT                             NULL,
  IDND             INT                                NULL,
  VAITRO           TEXT                               NULL,
  LOAIHD           INT DEFAULT '0'                    NOT NULL,
  FILE             TEXT                               NULL,
  THOIGIANPHANCONG DATETIME DEFAULT CURRENT_TIMESTAMP NULL
)
  ENGINE = InnoDB;

CREATE TABLE xetduyetnghiemthu
(
  IDNT             BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  IDDT             BIGINT                             NULL,
  IDND             BIGINT                             NULL,
  FILE             TEXT                               NULL,
  THOIGIANPHANCONG DATETIME DEFAULT CURRENT_TIMESTAMP NULL
)
  ENGINE = InnoDB;

