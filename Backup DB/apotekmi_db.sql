-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 07 Agu 2023 pada 19.30
-- Versi server: 10.6.14-MariaDB-cll-lve
-- Versi PHP: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotekmi_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `no_reff` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama_reff` varchar(40) NOT NULL,
  `keterangan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`no_reff`, `id_user`, `nama_reff`, `keterangan`) VALUES
(111, 1, 'Kas', 'Kas Peruangan'),
(112, 1, 'Persediaan Barang', 'Persediaan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `coa`
--

CREATE TABLE `coa` (
  `kode_coa` int(11) NOT NULL,
  `nama_coa` varchar(50) NOT NULL,
  `header_akun` varchar(7) NOT NULL,
  `posisi_db_cr` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `coa`
--

INSERT INTO `coa` (`kode_coa`, `nama_coa`, `header_akun`, `posisi_db_cr`) VALUES
(111, 'Kas', '1', 'Debitt'),
(114, 'Persediaan', '2', 'Debit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_obat`
--

CREATE TABLE `jenis_obat` (
  `id_unit` int(11) NOT NULL,
  `unit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `jenis_obat`
--

INSERT INTO `jenis_obat` (`id_unit`, `unit`) VALUES
(5, 'Asap'),
(6, 'Cair'),
(1, 'Kapsul'),
(3, 'Sirup'),
(4, 'Tablet'),
(2, 'Uap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_obat`
--

CREATE TABLE `kategori_obat` (
  `id_kategori_obat` int(11) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL,
  `nama_rak_penyimpanan` varchar(15) NOT NULL,
  `des_kat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `kategori_obat`
--

INSERT INTO `kategori_obat` (`id_kategori_obat`, `nama_kategori`, `nama_rak_penyimpanan`, `des_kat`) VALUES
(228, 'Obat Bebas', 'RAK002', 'HANYA OBAT BEBAS'),
(230, 'Obat Keras', 'RAK001', 'Obat yang hanya boleh diserahkan dengan resep dokter');

-- --------------------------------------------------------

--
-- Struktur dari tabel `month`
--

CREATE TABLE `month` (
  `month_num` int(11) NOT NULL,
  `month_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `month`
--

INSERT INTO `month` (`month_num`, `month_name`) VALUES
(1, 'Januari'),
(2, 'Februari'),
(3, 'Maret'),
(4, 'April'),
(5, 'Mei'),
(6, 'Juni'),
(7, 'Juli'),
(8, 'Agustus'),
(9, 'September'),
(10, 'Oktober'),
(11, 'November'),
(12, 'Desember');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obats`
--

CREATE TABLE `obats` (
  `id_obat` int(11) NOT NULL,
  `kode_obat` varchar(7) NOT NULL,
  `nama_obat` varchar(30) NOT NULL,
  `jmlh_stok` int(11) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL,
  `tgl_beli` date DEFAULT NULL,
  `tgl_kadaluarsa` date NOT NULL,
  `des_obat` text NOT NULL,
  `harga_obat` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `nama_supplier` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `obats`
--

INSERT INTO `obats` (`id_obat`, `kode_obat`, `nama_obat`, `jmlh_stok`, `unit`, `nama_kategori`, `tgl_beli`, `tgl_kadaluarsa`, `des_obat`, `harga_obat`, `harga_jual`, `nama_supplier`) VALUES
(10, 'BL23139', 'rinos', 27, 'Kapsul', 'Obat Bebas', '2023-08-04', '2023-09-09', '-', 1000, 1000, 'Apotek 24 Jam'),
(11, 'BL74865', 'oskadon', 14, 'Kapsul', 'Obat Bebas', '2023-08-05', '2023-09-09', '', 10, 20, 'Apotek 24 Jam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `ref` varchar(10) NOT NULL,
  `nama_obat` varchar(30) NOT NULL,
  `harga_obat` int(11) NOT NULL,
  `banyak` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `nama_supplier` varchar(40) NOT NULL,
  `tgl_beli` date NOT NULL,
  `grandtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `ref`, `nama_obat`, `harga_obat`, `banyak`, `subtotal`, `nama_supplier`, `tgl_beli`, `grandtotal`) VALUES
(12, 'BL91211261', 'rinos', 1000, 15, 15000, 'Apotek 24 Jam', '2023-08-05', 15000),
(13, 'BL43343988', 'rinos', 1000, 2, 2000, 'Apotek 24 Jam', '2023-08-05', 2020),
(14, 'BL43343988', 'oskadon', 10, 2, 20, 'Apotek 24 Jam', '2023-08-05', 2020);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `reff` varchar(255) DEFAULT NULL,
  `nama_obat` varchar(255) DEFAULT NULL,
  `harga_obat` int(11) DEFAULT NULL,
  `banyak` varchar(255) DEFAULT NULL,
  `tgl_jual` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rak_penyimpanan`
--

CREATE TABLE `rak_penyimpanan` (
  `kode_rak` int(11) NOT NULL,
  `nama_rak_penyimpanan` varchar(15) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `rak_penyimpanan`
--

INSERT INTO `rak_penyimpanan` (`kode_rak`, `nama_rak_penyimpanan`) VALUES
(6, 'RAK001'),
(2, 'RAK002'),
(8, 'RAK003');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `alamat`, `no_telp`) VALUES
(111, 'Komia Farmu', 'Bandung', '088888'),
(112, 'Apotek 24 Jam', 'Pameungpeuk', '0812345678'),
(113, 'Makmur', 'Jl. sukasari', '081923456781');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_invoice`
--

CREATE TABLE `table_invoice` (
  `id_tagihan` int(11) NOT NULL,
  `ref` varchar(10) NOT NULL,
  `nama_obat` varchar(30) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `banyak` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `nama_pembeli` varchar(40) NOT NULL,
  `tgl_beli` date NOT NULL,
  `grandtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_user`
--

CREATE TABLE `table_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_akses` int(11) NOT NULL,
  `user_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `table_user`
--

INSERT INTO `table_user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_akses`, `user_status`) VALUES
(1, 'Tuanku Imam Bonjol', 'admin@gmail.com', 'admin123', 1, 1),
(2, 'Muhammad Hatta', 'apoteker@gmail.com', 'apoteker', 2, 1),
(3, 'Bagindo Aziz Chan', 'pegawai@gmail.com', 'pegawai', 3, 1),
(4, 'pemilik', 'pemilik@gmail.com', 'pemilik', 4, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_buku_besar`
--

CREATE TABLE `tbl_buku_besar` (
  `id` int(11) NOT NULL,
  `nama_akun` varchar(255) DEFAULT NULL,
  `tanggal` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `ref` varchar(255) DEFAULT NULL,
  `debet` varchar(255) DEFAULT NULL,
  `kredit` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tbl_buku_besar`
--

INSERT INTO `tbl_buku_besar` (`id`, `nama_akun`, `tanggal`, `keterangan`, `ref`, `debet`, `kredit`) VALUES
(10, 'Persediaan Barang', '2023-07-11', 'Pembelian', '112', '1000', NULL),
(11, 'Kas', '2023-07-11', 'Pembelian ', '111', NULL, '1000'),
(12, 'Persediaan Barang', '2023-07-11', 'Pembelian', '112', '1000000', NULL),
(13, 'Kas', '2023-07-11', 'Pembelian ', '111', NULL, '1000000'),
(14, 'Persediaan Barang', '2023-07-25', 'Pembelian', '112', '2000', NULL),
(15, 'Kas', '2023-07-25', 'Pembelian ', '111', NULL, '22000'),
(16, 'Persediaan Barang', '2023-07-26', 'Pembelian', '112', '10000', NULL),
(17, 'Kas', '2023-07-26', 'Pembelian ', '111', NULL, '10000'),
(18, 'Persediaan Barang', '2023-08-05', 'Pembelian', '112', '15000', NULL),
(19, 'Kas', '2023-08-05', 'Pembelian ', '111', NULL, '17020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jurnal_umum`
--

CREATE TABLE `tbl_jurnal_umum` (
  `no` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_coa` varchar(10) NOT NULL,
  `nama_perkiraan` varchar(45) NOT NULL,
  `debet` int(11) NOT NULL,
  `kredit` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tbl_jurnal_umum`
--

INSERT INTO `tbl_jurnal_umum` (`no`, `tanggal`, `kode_coa`, `nama_perkiraan`, `debet`, `kredit`, `keterangan`) VALUES
(19, '2023-07-25', '', 'Persediaan Barang', 2000, 0, 'Tunai'),
(20, '2023-07-25', '', 'Kas', 0, 22000, 'Pembelian'),
(21, '2023-07-26', '112', 'Persediaan Barang', 10000, 0, 'Tunai'),
(22, '2023-07-26', '111', 'Kas', 0, 10000, 'Pembelian'),
(23, '2023-08-05', '112', 'Persediaan Barang', 15000, 0, 'Tunai'),
(24, '2023-08-05', '111', 'Kas', 0, 17020, 'Pembelian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `no_reff` int(11) NOT NULL,
  `tgl_input` datetime NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `jenis_saldo` enum('debit','kredit','','') NOT NULL,
  `saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`no_reff`) USING BTREE,
  ADD KEY `id_user` (`id_user`) USING BTREE;

--
-- Indeks untuk tabel `coa`
--
ALTER TABLE `coa`
  ADD PRIMARY KEY (`kode_coa`) USING BTREE;

--
-- Indeks untuk tabel `jenis_obat`
--
ALTER TABLE `jenis_obat`
  ADD PRIMARY KEY (`id_unit`) USING BTREE,
  ADD UNIQUE KEY `unit` (`unit`) USING BTREE;

--
-- Indeks untuk tabel `kategori_obat`
--
ALTER TABLE `kategori_obat`
  ADD PRIMARY KEY (`id_kategori_obat`) USING BTREE,
  ADD UNIQUE KEY `kategori` (`nama_kategori`) USING BTREE,
  ADD KEY `nama_rak_penyimpanan` (`nama_rak_penyimpanan`) USING BTREE;

--
-- Indeks untuk tabel `month`
--
ALTER TABLE `month`
  ADD PRIMARY KEY (`month_num`) USING BTREE;

--
-- Indeks untuk tabel `obats`
--
ALTER TABLE `obats`
  ADD PRIMARY KEY (`id_obat`) USING BTREE,
  ADD KEY `med_unit` (`unit`) USING BTREE,
  ADD KEY `med_cat` (`nama_kategori`) USING BTREE,
  ADD KEY `med_sup` (`nama_supplier`) USING BTREE;

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`) USING BTREE;

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`) USING BTREE;

--
-- Indeks untuk tabel `rak_penyimpanan`
--
ALTER TABLE `rak_penyimpanan`
  ADD PRIMARY KEY (`kode_rak`) USING BTREE,
  ADD UNIQUE KEY `nama_rak_penyimpanan` (`nama_rak_penyimpanan`) USING BTREE;

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`) USING BTREE,
  ADD UNIQUE KEY `nama_supplier` (`nama_supplier`) USING BTREE;

--
-- Indeks untuk tabel `table_invoice`
--
ALTER TABLE `table_invoice`
  ADD PRIMARY KEY (`id_tagihan`) USING BTREE;

--
-- Indeks untuk tabel `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`user_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_buku_besar`
--
ALTER TABLE `tbl_buku_besar`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_jurnal_umum`
--
ALTER TABLE `tbl_jurnal_umum`
  ADD PRIMARY KEY (`no`) USING BTREE;

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`) USING BTREE,
  ADD KEY `id_user` (`id_user`) USING BTREE,
  ADD KEY `no_reff` (`no_reff`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `coa`
--
ALTER TABLE `coa`
  MODIFY `kode_coa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT untuk tabel `jenis_obat`
--
ALTER TABLE `jenis_obat`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kategori_obat`
--
ALTER TABLE `kategori_obat`
  MODIFY `id_kategori_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;

--
-- AUTO_INCREMENT untuk tabel `obats`
--
ALTER TABLE `obats`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rak_penyimpanan`
--
ALTER TABLE `rak_penyimpanan`
  MODIFY `kode_rak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT untuk tabel `table_invoice`
--
ALTER TABLE `table_invoice`
  MODIFY `id_tagihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `table_user`
--
ALTER TABLE `table_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_buku_besar`
--
ALTER TABLE `tbl_buku_besar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tbl_jurnal_umum`
--
ALTER TABLE `tbl_jurnal_umum`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kategori_obat`
--
ALTER TABLE `kategori_obat`
  ADD CONSTRAINT `nama_rakk` FOREIGN KEY (`nama_rak_penyimpanan`) REFERENCES `rak_penyimpanan` (`nama_rak_penyimpanan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `obats`
--
ALTER TABLE `obats`
  ADD CONSTRAINT `med_cat` FOREIGN KEY (`nama_kategori`) REFERENCES `kategori_obat` (`nama_kategori`) ON UPDATE CASCADE,
  ADD CONSTRAINT `med_sup` FOREIGN KEY (`nama_supplier`) REFERENCES `supplier` (`nama_supplier`) ON UPDATE CASCADE,
  ADD CONSTRAINT `med_unit` FOREIGN KEY (`unit`) REFERENCES `jenis_obat` (`unit`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
