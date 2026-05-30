CREATE TABLE member (
    id_member INT PRIMARY KEY AUTO_INCREMENT,
    nama_member VARCHAR(250),
    nomor_member VARCHAR(15),
    alamat TEXT(500),
    tgl_mendaftar DATETIME,
    tgl_terakhir_bayar DATE
);

CREATE TABLE buku (
    id_buku INT PRIMARY KEY AUTO_INCREMENT,
    judul_buku VARCHAR(500),
    penulis VARCHAR(500),
    penerbit VARCHAR(250),
    tahun_terbit INT
);

CREATE TABLE peminjaman (
    id_peminjaman INT PRIMARY KEY AUTO_INCREMENT,
    tgl_pinjam DATE,
    tgl_kembali DATE,
    id_member INT,
    id_buku INT,
    FOREIGN KEY (id_member) REFERENCES member(id_member),
    FOREIGN KEY (id_buku) REFERENCES buku(id_buku)
);