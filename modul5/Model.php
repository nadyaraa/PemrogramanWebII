<?php
require_once 'Koneksi.php';

function getMember() {
    $stmt = koneksi()->prepare("SELECT * FROM member");
    $stmt->execute();
    return $stmt->fetchAll();
}

function getMemberById($id) {
    $stmt = koneksi()->prepare("SELECT * FROM member WHERE id_member = ?");
    $stmt->execute([$id]);
    return $stmt->fetch();
}

function addMember($nama, $nomor, $alamat, $tgl_daftar, $tgl_terakhir_bayar) {
    $stmt = koneksi()->prepare("INSERT INTO member VALUES (NULL, ?, ?, ?, ?, ?)");
    return $stmt->execute([$nama, $nomor, $alamat, $tgl_daftar, $tgl_terakhir_bayar]);
}

function editMember($id, $nama, $nomor, $alamat, $tgl_daftar, $tgl_terakhir_bayar) {
    $stmt = koneksi()->prepare("UPDATE member SET nama_member=?, nomor_member=?, alamat=?, tgl_mendaftar=?, tgl_terakhir_bayar=? WHERE id_member=?");
    return $stmt->execute([$nama, $nomor, $alamat, $tgl_daftar, $tgl_terakhir_bayar, $id]);
}

function deleteMember($id) {
    $stmt = koneksi()->prepare("DELETE FROM member WHERE id_member = ?");
    return $stmt->execute([$id]);
}

function getBuku() {
    $stmt = koneksi()->prepare("SELECT * FROM buku");
    $stmt->execute();
    return $stmt->fetchAll();
}

function getBukuById($id) {
    $stmt = koneksi()->prepare("SELECT * FROM buku WHERE id_buku = ?");
    $stmt->execute([$id]);
    return $stmt->fetch();
}

function addBuku($judul_buku, $penulis, $penerbit, $tahun) {
    $stmt = koneksi()->prepare("INSERT INTO buku VALUES (NULL, ?, ?, ?, ?)");
    return $stmt->execute([$judul_buku, $penulis, $penerbit, $tahun]);
}

function editBuku($id, $judul_buku, $penulis, $penerbit, $tahun) {
    $stmt = koneksi()->prepare("UPDATE buku SET judul_buku=?, penulis=?, penerbit=?, tahun_terbit=? WHERE id_buku=?");
    return $stmt->execute([$judul_buku, $penulis, $penerbit, $tahun, $id]);
}

function deleteBuku($id) {
    $stmt = koneksi()->prepare("DELETE FROM buku WHERE id_buku = ?");
    return $stmt->execute([$id]);
}

function getPeminjaman() {
    $sql = "SELECT p.*, m.nama_member, b.judul_buku FROM peminjaman p JOIN member m ON p.id_member = m.id_member JOIN buku b ON p.id_buku = b.id_buku";
    $stmt = koneksi()->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}

function getPeminjamanById($id) {
    $stmt = koneksi()->prepare("SELECT * FROM peminjaman WHERE id_peminjaman = ?");
    $stmt->execute([$id]);
    return $stmt->fetch();
}

function addPeminjaman($tgl_pinjam, $tgl_kembali, $id_member, $id_buku) {
    $sql = "INSERT INTO peminjaman (id_member, id_buku, tgl_pinjam, tgl_kembali) VALUES (?, ?, ?, ?)";
    $stmt = koneksi()->prepare($sql);
    return $stmt->execute([$id_member, $id_buku, $tgl_pinjam, $tgl_kembali]);
}

function editPeminjaman($id, $tgl_pinjam, $tgl_kembali, $id_member, $id_buku) {
    $sql = "UPDATE peminjaman SET id_member=?, id_buku=?, tgl_pinjam=?, tgl_kembali=? WHERE id_peminjaman=?";
    $stmt = koneksi()->prepare($sql);
    return $stmt->execute([$id_member, $id_buku, $tgl_pinjam, $tgl_kembali, $id]);
}

function deletePeminjaman($id) {
    $stmt = koneksi()->prepare("DELETE FROM peminjaman WHERE id_peminjaman = ?");
    return $stmt->execute([$id]);
}
?>