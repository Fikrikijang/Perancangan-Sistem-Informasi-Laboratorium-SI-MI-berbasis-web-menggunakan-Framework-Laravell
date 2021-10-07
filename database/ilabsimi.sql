-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Sep 2020 pada 09.45
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ilabsimi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `asisten`
--

CREATE TABLE `asisten` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npm` char(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `akun` int(1) NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `asisten`
--

INSERT INTO `asisten` (`id`, `nama`, `npm`, `tgl_lahir`, `email`, `jenis_kelamin`, `agama`, `no_hp`, `status`, `akun`, `gambar`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Anggi Amilia Pratiwi', '30417187', '2405199', 'anggipratiwi@gmail.com', 'Perempuan', 'Islam', '089673456735', 1, 1, 'uploads/asistens/1592668541anggi.jpg', 'Bojonegoro', '2020-06-20 08:55:41', '2020-07-03 07:28:44'),
(3, 'Aldira Rahmania', '10417165', '', 'aldira@gmail.com', 'Perempuan', 'Islam', '089673456735', 1, 1, 'uploads/asistens/1593180403aldira.jpg', 'Tanggerang Selatan', '2020-06-26 07:06:43', '2020-06-26 07:06:43'),
(4, 'Dewy Fortuna', '10417183', '', 'dewy@gmail.com', 'Perempuan', 'Islam', '085809878909', 1, 1, 'uploads/asistens/1593180480dewy.jpg', 'Cakung, Bekasi.', '2020-06-26 07:08:00', '2020-06-26 07:08:00'),
(5, 'Ade Fikriatul Ilmi', '30417129', '', 'adhefikri98@gmail.com', 'Laki-laki', 'Islam', '085809878909', 1, 1, 'uploads/asistens/1593180561fikri.jpg', 'Bekasi', '2020-06-26 07:09:21', '2020-06-26 07:09:21'),
(6, 'Nur Islamiyah', '30417280', '', 'iis@gmail.com', 'Perempuan', 'Islam', '085809878909', 1, 1, 'uploads/asistens/1593180633iis.jpg', 'Jakarta Selatan', '2020-06-26 07:10:33', '2020-06-26 07:10:33'),
(7, 'Septian Dwi Rizky', '10417124', '', 'septian@gmail.com', 'Laki-laki', 'Islam', '089673456735', 1, 2, 'uploads/asistens/1593180700septian.jpg', 'Ciledug, Jakarta Selatan.', '2020-06-26 07:11:40', '2020-06-26 07:11:40'),
(8, 'Salsabilah Suci Gustiani', '30417019', '2405200', 'suci@gmail.com', 'Perempuan', 'Islam', '085809878909', 0, 1, 'uploads/asistens/1593180770suci.jpg', 'Cilandak Barat, Jakarta Selatan.', '2020-06-26 07:12:50', '2020-07-05 00:18:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `nama_buku`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Cover Buku Praktikum', '1594302463.pdf', '2020-07-09 06:47:43', '2020-07-09 07:01:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Agenda', 'agenda', '2020-06-20 12:37:57', '2020-06-20 12:39:14'),
(2, 'Berita', 'berita', '2020-06-20 12:39:32', '2020-06-20 12:39:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kelas_pr` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari_pr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_pr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruang_pr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `praktikum_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id`, `kelas_pr`, `hari_pr`, `jam_pr`, `ruang_pr`, `praktikum_id`, `created_at`, `updated_at`) VALUES
(2, '105', 'Senin', '3/4', 'LAB NComputing', '4', '2020-07-16 23:50:30', '2020-07-16 23:50:30'),
(3, '104', 'Senin', '5/6', 'LAB NComputing', '4', '2020-07-16 23:50:52', '2020-07-16 23:50:52'),
(4, '105', 'Senin', '7/8', 'LAB NComputing', '5', '2020-07-16 23:51:14', '2020-07-16 23:51:14'),
(5, '104', 'Senin', '9/10', 'LAB NComputing', '5', '2020-07-16 23:51:32', '2020-07-16 23:51:32'),
(6, '106', 'Senin', '11/12', 'LAB NComputing', '5', '2020-07-16 23:52:22', '2020-07-16 23:52:22'),
(7, '108', 'Senin', '13/14', 'LAB NComputing', '5', '2020-07-16 23:52:39', '2020-07-16 23:52:39'),
(8, '102', 'Selasa', '3/4', 'LAB NComputing', '4', '2020-07-16 23:52:58', '2020-07-16 23:52:58'),
(9, '102', 'Selasa', '5/6', 'LAB NComputing', '5', '2020-07-16 23:53:30', '2020-07-16 23:53:30'),
(10, '103', 'Selasa', '7/8', 'LAB NComputing', '4', '2020-07-16 23:54:01', '2020-07-16 23:54:01'),
(11, '203', 'Selasa', '9/10', 'LAB NComputing', '9', '2020-07-16 23:54:24', '2020-07-16 23:54:24'),
(12, '104', 'Senin', '3/4', 'LAB PC', '6', '2020-07-16 23:55:05', '2020-07-16 23:55:05'),
(13, '105', 'Senin', '5/6', 'LAB PC', '6', '2020-07-16 23:55:29', '2020-07-16 23:55:29'),
(14, '102', 'Senin', '7/8', 'LAB PC', '6', '2020-07-16 23:55:49', '2020-07-16 23:55:49'),
(15, '304', 'Senin', '9/10', 'LAB PC', '12', '2020-07-16 23:56:30', '2020-07-16 23:56:30'),
(16, '207', 'Senin', '11/12', 'LAB PC', '8', '2020-07-16 23:56:54', '2020-07-16 23:56:54'),
(17, '207', 'Senin', '13/14', 'LAB PC', '9', '2020-07-16 23:57:22', '2020-07-16 23:57:22'),
(18, '202', 'Selasa', '3/4', 'LAB PC', '9', '2020-07-16 23:57:44', '2020-07-16 23:57:44'),
(19, '202', 'Selasa', '5/6', 'LAB PC', '8', '2020-07-16 23:58:12', '2020-07-16 23:58:12'),
(20, '203', 'Selasa', '7/8', 'LAB PC', '8', '2020-07-16 23:58:40', '2020-07-16 23:58:40'),
(21, '103', 'Selasa', '9/10', 'LAB PC', '6', '2020-07-16 23:58:59', '2020-07-16 23:58:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoris`
--

INSERT INTO `kategoris` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'website', 'website', '2020-06-19 09:58:31', '2020-06-20 10:39:38'),
(2, 'android', 'android', '2020-06-20 10:38:07', '2020-06-20 10:40:13'),
(3, 'dekstop', 'dekstop', '2020-06-20 10:40:42', '2020-06-20 10:40:42'),
(4, 'html', 'html', '2020-06-20 10:40:53', '2020-06-20 10:40:53'),
(5, 'css', 'css', '2020-06-20 10:41:05', '2020-06-20 10:41:05'),
(6, 'php', 'php', '2020-06-20 10:41:22', '2020-06-20 10:41:22'),
(7, 'responsive', 'responsive', '2020-06-20 10:41:57', '2020-06-20 10:41:57'),
(8, 'database', 'database', '2020-06-20 10:42:50', '2020-06-20 10:42:50'),
(9, 'python', 'python', '2020-06-20 10:43:27', '2020-06-20 10:43:27'),
(10, 'visual basic', 'visual-basic', '2020-06-20 10:43:44', '2020-06-20 10:43:44'),
(11, 'java', 'java', '2020-06-22 21:22:39', '2020-06-22 21:22:39'),
(12, 'foxpro', 'foxpro', '2020-06-22 21:27:53', '2020-06-22 21:27:53'),
(13, 'c++', 'c', '2020-07-18 10:23:31', '2020-07-18 10:23:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoris_kelas`
--

CREATE TABLE `kategoris_kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `kategoris_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoris_kelas`
--

INSERT INTO `kategoris_kelas` (`id`, `kelas_id`, `kategoris_id`, `created_at`, `updated_at`) VALUES
(1, 1, 4, NULL, NULL),
(3, 2, 6, NULL, NULL),
(4, 3, 9, NULL, NULL),
(5, 4, 2, NULL, NULL),
(7, 6, 1, NULL, NULL),
(8, 5, 12, NULL, NULL),
(9, 7, 4, NULL, NULL),
(10, 7, 7, NULL, NULL),
(11, 7, 13, NULL, NULL),
(12, 8, 13, NULL, NULL),
(13, 9, 1, NULL, NULL),
(14, 9, 5, NULL, NULL),
(15, 9, 6, NULL, NULL),
(16, 9, 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoris_playlists`
--

CREATE TABLE `kategoris_playlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `playlists_id` int(11) NOT NULL,
  `kategoris_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoris_playlists`
--

INSERT INTO `kategoris_playlists` (`id`, `playlists_id`, `kategoris_id`, `created_at`, `updated_at`) VALUES
(1, 1, 6, NULL, NULL),
(2, 2, 6, NULL, NULL),
(3, 3, 4, NULL, NULL),
(4, 4, 6, NULL, NULL),
(5, 5, 6, NULL, NULL),
(6, 6, 6, NULL, NULL),
(7, 7, 6, NULL, NULL),
(8, 8, 6, NULL, NULL),
(9, 9, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `judul`, `content`, `gambar`, `created_at`, `updated_at`, `slug`, `deleted_at`, `users_id`) VALUES
(1, 'Belajar HTML dari dasar', '<p>Belajar HTML dari dasar, HTML adalah bahasa yang digunakan untuk membuat struktur dasar website, bagian awal untuk yang ingin terjun ke dunia pengembangan website</p>', 'uploads/kelas/1592725589html dasar.jpg', '2020-06-21 00:42:15', '2020-06-22 21:07:26', 'belajar-html-dari-dasar', NULL, 1),
(2, 'Belajar PHP dari dasar', '<h2>Berkenalan dengan php, bahasa program yang sangat populer yang digunakan pada bagian back-end website untuk mengatur logika dan interaksi dengan database.</h2>', 'uploads/kelas/1592885449tutorial-dasar-php.jpg', '2020-06-22 21:10:49', '2020-06-22 21:10:49', 'belajar-php-dari-dasar', NULL, 1),
(3, 'Belajar python untuk pemula', '<h2>Python menjadi salah satu bahasa program yang sangat populer dan termasuk bahasa pemrograman sangat baik. Selain digunakan untuk membuat website ada banyak hal-hal yang berkaitan dengan data science seperti artificial intelligence, machine learning dan banyak lagi!</h2>', 'uploads/kelas/1595092565Python-Logo-Featured-Image.png', '2020-06-22 21:13:56', '2020-07-18 10:18:52', 'belajar-python-untuk-pemula', NULL, 1),
(4, 'Belajar android untuk pemula', '<h2>Pasti kamu sudah mendengar apa itu android. Tapi bagaimana dengan cara membuat aplikasi android dari nol? untuk mengikuti playlist ini pasitkan kamu sudah belajar bahasa program kotlin di sekolahkoding sebelumnya. Ini adalah bagian dasar dari membuat aplikasi android dengan native menggunakan bahasa program kotlin</h2>', 'uploads/kelas/1592885804587-belajar-membuat-aplikasi-android-untuk-pemula.jpg', '2020-06-22 21:16:44', '2020-06-22 21:16:44', 'belajar-android-untuk-pemula', NULL, 1),
(5, 'Belajar foxpro untuk pemula', '<h2>Pasti kamu sudah mendengar apa itu foxpro. Tapi bagaimana dengan cara membuat aplikasi dekstop dari nol? Ini adalah bagian dasar dari membuat aplikasi foxpro dengan native menggunakan foxpro versi 9.0.</h2>', 'uploads/kelas/1592886514Microsoft-Visual-Fox-Pro.jpg', '2020-06-22 21:22:10', '2020-06-22 21:28:34', 'belajar-foxpro-untuk-pemula', NULL, 1),
(6, 'Belajar Java untuk pemula', '<h2>Pasti kamu sudah mendengar apa itu java. Tapi bagaimana dengan cara membuat aplikasi android atau website dari nol? Ini adalah bagian dasar dari membuat aplikasi java dengan native menggunakan neatbens.</h2>', 'uploads/kelas/1592886130java-oracle-juuchini.jpg', '2020-06-22 21:22:10', '2020-06-22 21:22:10', 'belajar-java-untuk-pemula', NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npm` char(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `npm`, `tgl_lahir`, `kelas`, `email`, `gambar`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dian Delia', '30417005', '0404199', '306', 'dian@gmail.com', 'uploads/mahasiswa/159393370730417005.JPG', 'Aktif', '2020-07-05 00:21:47', '2020-07-05 00:21:47'),
(2, 'Minkhatul Maula', '30417006', '0404199', '306', 'maula@gmail.com', 'uploads/mahasiswa/159393374930417006.JPG', 'Aktif', '2020-07-05 00:22:29', '2020-07-05 00:22:29'),
(3, 'Prasasti Nazwa Safitri', '30417007', '2405200', '306', 'sasti@gmail.com', 'uploads/mahasiswa/159393379530417007.JPG', 'Aktif', '2020-07-05 00:23:15', '2020-07-05 00:23:15'),
(4, 'Salman Al Farizi', '30417008', '2405199', '306', 'salman@gmail.com', 'uploads/mahasiswa/159393384430417008.JPG', 'Aktif', '2020-07-05 00:24:04', '2020-07-05 00:24:04'),
(5, 'Ahmad Syufyan', '30417009', '2405199', '306', 'ahmad@gmail.com', 'uploads/mahasiswa/159393390530417009.JPG', 'Aktif', '2020-07-05 00:25:05', '2020-07-05 00:25:05'),
(6, 'Salsabilah Suci Gustiani', '30417019', '0404199', '306', 'suci@yhoo.com', 'uploads/mahasiswa/159393395630417019.JPG', 'Aktif', '2020-07-05 00:25:56', '2020-07-05 00:25:56'),
(7, 'Agil Aufani Attalah', '30417028', '2405199', '306', 'agil@yahoo.com', 'uploads/mahasiswa/159393401330417028.JPG', 'Tidak Aktif', '2020-07-05 00:26:53', '2020-07-05 00:26:53'),
(8, 'Anastasya Pratiwi', '30417034', '0404199', '306', 'chichi@gmail.com', 'uploads/mahasiswa/159393407430417034.JPG', 'Aktif', '2020-07-05 00:27:54', '2020-07-05 00:27:54'),
(9, 'Rifqi Ardiansyah', '30417037', '2405199', '306', 'rifqi@gmail.com', 'uploads/mahasiswa/159393411330417037.JPG', 'Aktif', '2020-07-05 00:28:33', '2020-07-05 00:28:33'),
(10, 'Alfandi Izhar', '30417042', '2405199', '306', 'alfandi@gmail.com', 'uploads/mahasiswa/159393416330417042.JPG', 'Aktif', '2020-07-05 00:29:23', '2020-07-05 00:29:23'),
(11, 'Ervian Nabil Muhammad', '30417066', '2405199', '306', 'ervian@yahoo.com', 'uploads/mahasiswa/159393429730417066.JPG', 'Tidak Aktif', '2020-07-05 00:31:37', '2020-07-05 00:31:37'),
(12, 'Fahrez', '30417122', '0404199', '306', 'fahrez@gmail.com', 'uploads/mahasiswa/159393434730417122.JPG', 'Tidak Aktif', '2020-07-05 00:32:27', '2020-07-05 00:32:27'),
(13, 'Fajar Subhan', '30417073', '2405200', '306', 'fajar@gmail.com', 'uploads/mahasiswa/159393439430417073.JPG', 'Aktif', '2020-07-05 00:33:14', '2020-07-05 00:33:14'),
(14, 'Galang Cikal Nuraini', '30417081', '0404199', '306', 'cikal@gmail.com', 'uploads/mahasiswa/159393445430417081.JPG', 'Aktif', '2020-07-05 00:34:14', '2020-07-05 00:34:14'),
(15, 'Dibiyo Wiranto', '30417119', '2405199', '306', 'dibiyo@gmail.com', 'uploads/mahasiswa/159393450830417119.JPG', 'Tidak Aktif', '2020-07-05 00:35:08', '2020-07-05 00:35:08'),
(16, 'Ade Fikriatul Ilmi', '30417129', '05051998', '306', 'adhefikri98@gmail.com', 'uploads/mahasiswa/159393466030417129.JPG', 'Aktif', '2020-07-05 00:37:40', '2020-07-05 00:37:40'),
(17, 'Annisa Bintang Karlina', '30417179', '0404199', '306', 'bintang@gmail.com', 'uploads/mahasiswa/159393470430417179.JPG', 'Aktif', '2020-07-05 00:38:24', '2020-07-05 00:38:24'),
(18, 'Anggi Amilia Pratiwi', '30417187', '0404199', '306', 'anggipratiwi@gmail.com', 'uploads/mahasiswa/159393476130417187.JPG', 'Aktif', '2020-07-05 00:39:21', '2020-07-05 00:39:21'),
(19, 'Bayu Faturahman', '30417188', '0404199', '306', 'bayu@gmail.com', 'uploads/mahasiswa/159393480630417188.JPG', 'Aktif', '2020-07-05 00:40:07', '2020-07-05 00:40:07'),
(20, 'Rinadi Rizki', '30417206', '05081998', '306', 'rinaldi@yahoo.com', 'uploads/mahasiswa/159393487030417206.JPG', 'Tidak Aktif', '2020-07-05 00:41:10', '2020-07-05 00:47:32'),
(21, 'Adrian Pamungkas', '30417226', '05081998', '306', 'adrian@gmail.com', 'uploads/mahasiswa/159393491530417226.JPG', 'Aktif', '2020-07-05 00:41:55', '2020-07-05 00:41:55'),
(22, 'Rizki', '30417235', '2405199', '306', 'rizki@yahoo.com', 'uploads/mahasiswa/159393500930417235.JPG', 'Tidak Aktif', '2020-07-05 00:43:29', '2020-07-05 00:43:29'),
(23, 'Rizki Rajab', '30417252', '2405200', '306', 'rajab@gmail.com', 'uploads/mahasiswa/159393505530417252.JPG', 'Tidak Aktif', '2020-07-05 00:44:15', '2020-07-05 00:44:15'),
(24, 'Nur Islamiyah', '30417280', '2405199', '306', 'iis@gmail.com', 'uploads/mahasiswa/159393509930417280.JPG', 'Aktif', '2020-07-05 00:44:59', '2020-07-05 00:44:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa_matkul`
--

CREATE TABLE `mahasiswa_matkul` (
  `id` int(11) NOT NULL,
  `mahasiswa_id` int(11) NOT NULL,
  `matkul_id` int(11) NOT NULL,
  `kelas` int(3) NOT NULL,
  `pertemuan` varchar(3) NOT NULL,
  `nilai` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa_matkul`
--

INSERT INTO `mahasiswa_matkul` (`id`, `mahasiswa_id`, `matkul_id`, `kelas`, `pertemuan`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 306, 'P1', 70, '2020-07-01 10:49:21', '0000-00-00 00:00:00'),
(2, 1, 2, 306, 'P1', 75, '2020-07-01 10:49:21', '0000-00-00 00:00:00'),
(3, 1, 1, 306, 'P2', 80, '2020-07-01 08:35:47', '2020-07-01 15:35:47'),
(4, 1, 2, 306, 'P2', 90, '2020-07-01 09:11:14', '2020-07-01 16:11:14'),
(5, 1, 1, 306, 'P3', 80, '2020-07-04 21:31:19', '2020-07-05 04:31:19'),
(6, 2, 1, 306, 'P1', 90, '2020-07-04 21:32:41', '2020-07-05 04:32:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matkul`
--

CREATE TABLE `matkul` (
  `id` int(11) NOT NULL,
  `kode` varchar(191) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `semester` varchar(45) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `matkul`
--

INSERT INTO `matkul` (`id`, `kode`, `nama`, `semester`, `created_at`, `updated_at`) VALUES
(1, 'MI-001', 'WEB', 'Genap', '2020-07-01 10:46:01', '0000-00-00 00:00:00'),
(2, 'MI-002', 'Python', 'Ganjil', '2020-07-01 10:46:01', '0000-00-00 00:00:00'),
(3, 'MI-001', 'Pemrograman 1', 'Genap', '2020-07-01 15:56:06', '0000-00-00 00:00:00'),
(4, 'MI-004', 'Pemrograman 2', 'Ganjil', '2020-07-01 15:57:14', '0000-00-00 00:00:00'),
(5, 'MI-005', 'Pemrograman 3', 'Genap', '2020-07-01 15:57:14', '0000-00-00 00:00:00'),
(6, 'MI-006', 'KSI A / PPN A', 'Ganjil', '2020-07-01 15:58:10', '0000-00-00 00:00:00'),
(7, 'MI-007', 'KSI B / PPN B', 'Ganjil', '2020-07-01 15:58:10', '0000-00-00 00:00:00'),
(8, 'MI-008', 'Algoritma', 'Ganjil', '2020-07-01 15:58:39', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 8),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_10_23_084940_create_category_table', 1),
(4, '2019_10_25_065203_create_tags_table', 1),
(5, '2019_10_25_080532_create_posts_table', 1),
(6, '2019_10_25_090336_add_new_slug_posts_table', 1),
(7, '2019_10_25_104221_create_post_tag_table', 1),
(8, '2019_10_26_050904_tambah_softdelete_ke_post', 1),
(9, '2019_10_28_085904_tambah_field_user_post', 1),
(10, '2019_10_28_095902_add_tipe_user', 1),
(11, '2020_04_02_175440_create_asisten_table', 1),
(12, '2020_06_10_092035_create_mahasiswa_table', 1),
(13, '2020_06_18_073525_create_kategoris_table', 2),
(14, '2020_06_18_075141_create_kelas_table', 2),
(15, '2020_06_18_162116_add_new_slug_kelas_table', 2),
(16, '2020_06_18_162739_create_kelas_kategoris_table', 2),
(17, '2020_06_18_163155_tambah_softdelete_ke_kelas', 2),
(18, '2020_06_18_163808_tambah_field_user_kelas', 2),
(22, '2020_06_20_154030_create_playlists_table', 3),
(23, '2020_06_20_162521_create_praktikum_table', 3),
(24, '2020_06_20_180024_add_new_slug_playlists_table', 4),
(25, '2020_06_20_180223_tambah_field_user_playlists', 5),
(26, '2020_06_21_075620_create_kategoris_playlists_table', 6),
(27, '2020_06_23_135023_create_jadwal_table', 7),
(32, '2020_06_29_142003_create_strukturlab_table', 9),
(33, '2020_06_30_051634_create_buku_table', 10),
(34, '2020_06_30_145223_create_pendaftaran_table', 11),
(36, '2020_07_08_062247_create_students_table', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npm` char(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ipk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `krs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dns` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `nama`, `npm`, `email`, `jk`, `ipk`, `foto`, `krs`, `dns`, `telp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Luqman Helmi Rabbani', '10418123', 'luqman@gmail.com', 'Laki-laki', '3.8', 'uploads/pendaftaran/1594655943Road Map Of My Life.jpg', 'uploads/pendaftaran/15946559431594263690.pdf', 'uploads/pendaftaran/15946559431594302463.pdf', '08978678687', 'Jakarta Selatan', '2020-07-13 08:59:04', '2020-07-13 08:59:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `playlists`
--

CREATE TABLE `playlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pertemuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `praktikum_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `playlists`
--

INSERT INTO `playlists` (`id`, `pertemuan`, `judul`, `praktikum_id`, `kelas_id`, `content`, `file`, `video`, `created_at`, `updated_at`, `slug`, `deleted_at`, `users_id`) VALUES
(1, 'Pertemuan 1', 'Pengenalan Syntak PHP', 9, 2, '<p>Di video kali ini kita akan bahas mengenai sintaks dasar pemrograman pada PHP diantaranya: komentar, standar output, variabel dan operator</p>', '1594788987.doc', 'XTrU0GzMfCk&list=PLFIM0718LjIUqXfmEIBE3-uzERZPh3vp6&index=4', '2020-07-14 21:56:27', '2020-07-14 21:56:27', 'pengenalan-syntak-php', NULL, 1),
(2, 'Pertemuan 2', 'Tipe data', 9, 2, '<p>Di video kali ini kita akan bahas mengenai struktur tipe data pada php.</p>', '1594789151.doc', '6LnVx7PONsk', '2020-07-14 21:59:11', '2020-07-18 10:54:39', 'tipe-data', NULL, 1),
(3, 'Pertemuan 1', 'Syntak Penulisan HTML', 10, 1, '<p>sjdbsfdfiudgiufgugfghfklngklh</p>', '1594792471.doc', '3sLSi9L5nWE', '2020-07-14 22:54:31', '2020-07-17 23:59:04', 'syntak-penulisan-html', '2020-07-17 23:59:04', 1),
(4, 'Pertemuan 3', 'Percabangan', 9, 2, '<p>Playlist ini mengenai tentang percabangan pada php</p>', '1595057755.doc', 'lD7Jw3uppH8&list=PLCZlgfAG0GXADD_i0xL_Dkv4zT_vFmdnS&index=21', '2020-07-18 00:35:55', '2020-07-18 00:35:55', 'percabangan', NULL, 2),
(5, 'Pertemuan 4', 'For Loop pada PHP', 9, 2, '<p>Playlist ini tentang perulangan pada php</p>', '1595057880.doc', '0dlEeOfSOJQ&list=PLCZlgfAG0GXADD_i0xL_Dkv4zT_vFmdnS&index=15', '2020-07-18 00:38:00', '2020-07-18 00:38:00', 'for-loop-pada-php', NULL, 2),
(6, 'Pertemuan 5', 'Insert dan Delete', 9, 2, '<p>Playlist ini mengisi tentang tambah data dan hapus data pada php.</p>', '1595058144.doc', 'L-gKceeb61Q&list=PLFIM0718LjIUqXfmEIBE3-uzERZPh3vp6&index=12', '2020-07-18 00:42:24', '2020-07-18 00:42:24', 'insert-dan-delete', NULL, 2),
(7, 'Pertemuan 6', 'Update data PHP', 9, 2, '<p>Playlist ini mengisi tentang ubah data pada database di php.</p>', '1595058585.doc', 'wlJ-UvXucpc&list=PLFIM0718LjIUqXfmEIBE3-uzERZPh3vp6&index=13', '2020-07-18 00:49:45', '2020-07-18 00:49:45', 'update-data-php', NULL, 2),
(8, 'Pertemuan 7', 'Searching pada php', 9, 2, '<p>Playlist ini berisi tetang pencarian data pada php.</p>', '1595058700.doc', 'K_ldbZMOvGA&list=PLFIM0718LjIUqXfmEIBE3-uzERZPh3vp6&index=14', '2020-07-18 00:51:40', '2020-07-18 00:51:40', 'searching-pada-php', NULL, 2),
(9, 'Pertemuan 8', 'Login pada php', 9, 2, '<p>Playlist ini berisi tentang cara membuat login pada php.</p>', '1595059071.doc', '2pAApp655es&list=PLFIM0718LjIUqXfmEIBE3-uzERZPh3vp6&index=17', '2020-07-18 00:57:51', '2020-07-18 00:57:51', 'login-pada-php', NULL, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `judul`, `category_id`, `content`, `gambar`, `created_at`, `updated_at`, `slug`, `deleted_at`, `users_id`) VALUES
(1, 'Tasyakuran dan Tumpengan 2018', 2, '<p>Kebersamaan yang indah yaitu dimana saat-saat kita sedang berkumpul dengan orang yang kita sayangi dan kita cintai. Disaat itulah pasti kita merasakan betapa indahnya hidup di dunia ini. Kebersamaan dengan keluarga, sahabat ataupun pacar, disaat kita sedang bersama mereka pasti kita akan merasa bahagia dan merasa nyaman.</p>\r\n\r\n<p>Pastinya saat kita sedang bersama orang-orang yang kita sayang dan orang-orang yang dekat dengan kita, kita akan selalu merasa nyaman, merasa tidak mempunyai beban dan yang pasti selalu bahagia, dengan kebersamaan semua akan menjadi lebih indah dari apa yang kita bayangkan dan merasa hidup di dunia tidak sendirian.</p>\r\n\r\n<p>Hidup itu tidak akan indah jika kita selalu menyendiri. Kebersamaan itu sangatlah dibutuhkan, disaat kita sedang bersama keluarga, kita bisa bercerita-cerita kepada mereka bagaimana waktu dulu disaat kita masih kecil sampai dewasa apakah ada perbedaan, tentunya kita juga bisa mengetahui semasa kecil seperti apa. Bersama sahabat kita bisa bercerita tentang perjalanan hidup kita, keluh kesah yang pernah dialami, pastilah diantara semuanya mempunyai banyak perbedaan.</p>\r\n\r\n<p>Indahnya kebersamaan akan selalu dirasakan jika kita selalu bersama orang-orang yang membuat hidup kita nyaman, tak bisa dibayangkan jika kita hidup di dunia ini hanya sendiri dan selalu menyendiri, kebersamaan selalu dan akan tetap dibutuhkan oleh kita, jadi jagalah orang-orang yang kita sayang yang bisa membuat hari-hari kita ceria dan selalu membuat tersenyum.</p>', 'uploads/posts/1592672897VXxVjdgVbHLqiEgHL189W4JIFcdJKvI2IZrUuW1p.jpeg', '2020-06-20 10:08:17', '2020-07-05 01:27:11', 'tasyakuran-dan-tumpengan-2018', NULL, 2),
(2, 'Buka Bersama sebagai Ajang Silaturahmi ( Ramadhan 2019 )', 2, '<p><em>Makan bersama merupakan salah satu momen yang banyak dinikmati sepanjang Ramadan. Apa saja hal-hal baik yang implisit dari menikmati kesempatan berkumpul sembari berbuka puasa?</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tak terasa waktu terus bergulir. Saatnya hadir bulan penuh rahmat, bulan Ramadhan. Momentum ini selalu kita tunggu bersama. Tak hanya menyajikan kehangatan berbuka puasa atau kekhusyukan berpuasa, bulan ini menjadi saat yang tepat untuk berbagi kedamaian dan kebahagiaan.&nbsp;</p>\r\n\r\n<p>Salah satu cara sederhana menciptakan dan melestarikan kedamaian adalah dengan berbuka puasa bersama. Tradisi ini sudah sangat dikenal oleh masyarakat. Selain menjadi salah satu kesempatan untuk mengumpulkan sanak saudara, buka puasa bersama juga merupakan ajang silaturahmi dan berbagi kebahagiaan. Di sini, kita bisa saling tertawa dan bercanda setelah satu hari mengalahkan hawa nafsu.</p>\r\n\r\n<p>Dengan berbuka puasa bersama, kita juga dapat mendapatkan semangat untuk melanjutkan ibadah puasa kita keesokan harinya. Semangat buka bersama bersama orang-orang tercinta menjadi bekal untuk mengalahkan hawa nafsu dan semakin banyak berbagi berkat di bulan yang penuh berkah.</p>', 'uploads/posts/1592672960QskAWzB07DTZ5f6YHr3Cos4O076xjc0Bemu5CMiQ.jpeg', '2020-06-20 10:09:20', '2020-07-05 01:18:31', 'buka-bersama-sebagai-ajang-silaturahmi-ramadhan-2019', NULL, 2),
(3, 'STMIK Jakarta STI&K menyelenggarakan Pelatihan Microsoft Office untuk siswa SMA', 1, '<blockquote>\r\n<p>Perwujudan salah satu Tri Dharma Perguruan tinggi yaitu Pengabdian kepada Masyarakat kembali menjadi fokus Kampus <em>STMIK Jakarta STI&amp;K</em> hingga akhir tutup tahun 2019. Pada tanggal 11-14 Desember 2019&nbsp;, <strong>LP2M</strong> (Lembaga Penelitian dan Pengabdian Masyarakat) bekerjasama dengan Laboratorium Sistem Informasi menyelenggarakan Pelatihan Microsoft Office Basic untuk siswa SMA. sebanyak 50 siswa SMA berpartisipasi dalam program ini.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&ldquo;Kemampuan menggunakan komputer merupakan salah satu kompetensi yang harus dimiliki sumber daya manusia sebagai prasyarat masuk dalam dunia kerja. Untuk itu penguasaan kompetensi tersebut perlu dimiliki oleh siswa siswi SMA/SMK , terutama di lingkungan sekitar kampus polman astra, agar dapat meningkatkan daya saing mereka&rdquo; demikian diutarakan Radix Rascalia, Sekretaris Program Studi Manajemen Informatika. Perkembangan teknologi Informatika (IT) akhir akhir ini memang sangat pesat dan hal inilah yang menjadi latar belakang keinginan Polman Astra untuk membagikan kompetensinya kepada masyarakat sekitar. Tak bisa dipungkiri saat ini IT sudah merasuk ke semua bidang pekerjaan, termasuk sektor sektor pekerjaan yang nantinya akan ditempati oleh lulusan lulusan SMA/SMK. &ldquo;Sebetulnya Program studi Manajemen Informatika dan mahasiswanya perlu bisa menangkap permasalahan sehari-hari yang ada di lingkungan sekitar dan menawarkan alternatif solusinya berbasis teknologi informasi. Rasanya bisa dijajaki kerjasama dengan organisasi di lingkungan sekitar untuk melakukan kegiatan pengabdian masyarakat semacam ini&rdquo; demikian diungkapkan juga oleh Radix menanggapi rencana kelanjutan dari program pengabdian kepada Masyarakat ini.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&ldquo;kami melibatkan tidak hanya instruktur dalam program ini, namun kita juga melibatkan mahasiswa untuk bisa membantu di program ini. Hal ini tentunya untuk menjadi bekal pengalaman dan penambahan wawasan bagi para mahasiswa kedepannya&rdquo; demikian dijabarkan Yunita Sari, salah satu intruktur pelaksana program pelatihan ini. &rdquo;Kompetensi siswa SMA/SMK untuk menguasai Microsoft Word, Excel, Power Point sudah menjadi keharusan saat ini, bahkan saat mereka magang di perusahaan kemampuan itu sangat dibutuhkan&rdquo; sambung Yudi Chandara Irawan. S.Kom,. MMSI. <em>STMIK Jakarta STI&amp;K </em>akan secara rutin melaksanakan program program pengabdian masyarakat seperti ini setiap tahunnya dan cakupan pesertanya juga akan diperluas.</p>\r\n</blockquote>', 'uploads/posts/15926730235BP9952T60Rs8VX0HBBW8VZO0Oak7VvXAPNtBALf.jpeg', '2020-06-20 10:10:23', '2020-07-05 01:30:50', 'stmik-jakarta-stik-menyelenggarakan-pelatihan-microsoft-office-untuk-siswa-sma', NULL, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts_tags`
--

CREATE TABLE `posts_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `posts_id` int(11) NOT NULL,
  `tags_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts_tags`
--

INSERT INTO `posts_tags` (`id`, `posts_id`, `tags_id`, `created_at`, `updated_at`) VALUES
(3, 3, 1, NULL, NULL),
(6, 2, 2, NULL, NULL),
(7, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `praktikum`
--

CREATE TABLE `praktikum` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `praktikum`
--

INSERT INTO `praktikum` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Algoritma A', 'algoritma-a', '2020-06-20 12:37:28', '2020-06-21 08:59:46'),
(2, 'PTI', 'pti', '2020-06-21 01:22:58', '2020-06-21 01:22:58'),
(3, 'Bahasa C', 'bahasa-c', '2020-06-21 01:23:21', '2020-06-21 01:23:21'),
(4, 'KSI A / PPN A', 'ksi-a-ppn-a', '2020-06-21 01:23:51', '2020-06-21 01:23:51'),
(5, 'KSI B / PPN B', 'ksi-b-ppn-b', '2020-06-21 01:28:41', '2020-06-21 01:28:41'),
(6, 'Pemrograman 1', 'pemrograman-1', '2020-06-21 01:31:32', '2020-06-21 01:31:32'),
(7, 'Pemrograman 2', 'pemrograman-2', '2020-06-21 01:31:50', '2020-06-21 01:31:50'),
(8, 'Pemrograman 3', 'pemrograman-3', '2020-06-21 01:32:32', '2020-06-21 01:32:32'),
(9, 'WEB PHP', 'web-php', '2020-06-21 01:32:55', '2020-06-21 01:32:55'),
(10, 'WEB Javascript', 'web-javascript', '2020-06-21 01:35:58', '2020-06-21 01:35:58'),
(11, 'PBO', 'pbo', '2020-06-21 01:36:17', '2020-06-21 01:36:17'),
(12, 'PBD', 'pbd', '2020-06-21 01:36:39', '2020-06-21 01:36:39'),
(13, 'Pemrograman Python', 'pemrograman-python', '2020-06-21 01:37:10', '2020-06-21 01:37:10'),
(14, 'KSBP', 'ksbp', '2020-06-21 01:37:29', '2020-06-21 01:37:29'),
(15, 'Multimedia', 'multimedia', '2020-06-21 01:38:04', '2020-06-21 01:38:04'),
(16, 'Asembler', 'asembler', '2020-06-21 01:38:28', '2020-06-21 01:38:28'),
(18, 'Laravel', 'laravel', '2020-06-21 11:53:00', '2020-06-21 11:53:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `strukturlab`
--

CREATE TABLE `strukturlab` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `strukturlab`
--

INSERT INTO `strukturlab` (`id`, `nama`, `jabatan`, `email`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Indah Lestari', 'Staff Administrasi Laboratorium SI/MI', 'indah@yahoo.com', 'uploads/strukturlab/1593446822indah.jpg', '2020-06-29 09:07:02', '2020-06-29 09:07:02'),
(2, 'Septian Dwi Rizky', 'Staff Maintenance Laboratorium SI/MI', 'septian@gmail.com', 'uploads/strukturlab/1593446894septian.jpg', '2020-06-29 09:07:40', '2020-06-29 09:09:59'),
(3, 'Delvia Tri Ramadani', 'Staff Administrasi Laboratorium SI/MI', 'delvia@gmail.com', 'uploads/strukturlab/1593447039delvia.jpg', '2020-06-29 09:10:39', '2020-06-29 09:10:39'),
(4, 'Yudi Irawan Chandra., SKOM,. MMSI.', 'Kepala Laboratorium SI/MI', 'yudichandra@gmail.com', 'uploads/strukturlab/1593447089pak yudi.jpg', '2020-06-29 09:11:29', '2020-06-29 09:11:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npm` char(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `students`
--

INSERT INTO `students` (`id`, `name`, `npm`, `tgl_lahir`, `kelas`, `foto`, `bio`, `status`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dian Delia', '30417005', '0404199', '306', 'uploads/mahasiswa/159465999030417005.JPG', '“Pendidikan bukanlah proses mengisi wadah yang kosong. Pendidikan adalah proses menyalakan api pikiran.”', 'Aktif', 'dian@gmail.com', NULL, '$2y$10$XnvFTjvjYBwuePrXxMGKJe5Y1M2ABHYYi4xnZ7AI4xmOl6rKC3GYa', NULL, '2020-07-08 00:44:43', '2020-07-14 09:41:55'),
(2, 'Minkhatul Maula', '30417006', '2405200', '306', 'uploads/mahasiswa/159473965130417006.JPG', '', 'Aktif', 'maula@gmail.com', NULL, '$2y$10$f.huVGRMUBUloE4ExYQZ5OsJQJxCP51.6sRgur3.U7jsSnijBeEdW', NULL, '2020-07-14 08:14:11', '2020-07-14 08:14:11'),
(3, 'Prasasti Nazwa Safitri', '30417007', '05081999', '306', 'uploads/mahasiswa/159497085030417007.JPG', '-', 'Aktif', 'sasti@gmail.com', NULL, '$2y$10$MQOnR6F8bOQ8drMk0HqNte2pJKGTs8D/8PCpjd/tkdq9PAQISX5cy', NULL, '2020-07-17 00:27:30', '2020-07-17 00:27:30'),
(4, 'Salman Alfarizi', '30417008', '04041999', '306', 'uploads/mahasiswa/159497091130417008.JPG', '-', 'Aktif', 'salman@gmail.com', NULL, '$2y$10$EAZV8veTnJ/hiiH9PTD99uerBxMUco3UwxQuZ5Nw.9CxRrxlnFdXO', NULL, '2020-07-17 00:28:31', '2020-07-17 00:28:31'),
(5, 'Ahmad Sophiyan', '30417009', '05081999', '306', 'uploads/mahasiswa/159497121130417009.JPG', '-', 'Aktif', 'sopiyan@gmail.com', NULL, '$2y$10$ERuynnRCxiZcG4TCHntM4.ktei/MGH9c7J41b5V9WtnDp0S3STkHW', NULL, '2020-07-17 00:33:31', '2020-07-17 00:33:31'),
(6, 'Salsabillah Suci G', '30417019', '24051999', '306', 'uploads/mahasiswa/159497127030417019.JPG', '-', 'Aktif', 'suci@gmail.com', NULL, '$2y$10$RyMtfUOeU4tCncbub1NoQOIItWIpB7UJmiAngSMxeVmRBURqMIyyi', NULL, '2020-07-17 00:34:30', '2020-07-17 00:34:30'),
(7, 'Anastasya Pratiwi', '30417034', '05081998', '306', 'uploads/mahasiswa/159497133530417034.JPG', '-', 'Aktif', 'chacha@gmail.com', NULL, '$2y$10$vHJGoYg8i00O/lDSaGgCI.nuu.GU2f3.PdGyaoxNzbY7hOs7gu8QW', NULL, '2020-07-17 00:35:35', '2020-07-17 00:35:35'),
(8, 'Rifqi Ardiansyah', '30417037', '24051999', '306', 'uploads/mahasiswa/159497138730417037.JPG', '-', 'Aktif', 'rifqi@gmail.com', NULL, '$2y$10$P5xriI8QXB6MNZcoPuNimuxPn07eKTmF6Wxrs3FuZrTuX2Fw50BqG', NULL, '2020-07-17 00:36:27', '2020-07-17 00:36:27'),
(10, 'Galang Cikal Nuraini', '30417081', '24051999', '306', 'uploads/mahasiswa/159497202230417081.JPG', '-', 'Aktif', 'cikal@gmail.com', NULL, '$2y$10$fB52ZzAHE8EEELH.TlnYDOWMos8j5fc5Hmk62SzSFTndaweZBpjBq', NULL, '2020-07-17 00:47:02', '2020-07-17 00:47:02'),
(11, 'Alfandi Izhar', '30417042', '05081999', '306', 'uploads/mahasiswa/159505980030417042.JPG', '-', 'Aktif', 'alfandi@gmail.com', NULL, '$2y$10$rXmWG/5v4/1VKy9XdmVQD.Yb4yr1euaSZN83Q2ggkzXdvg8EiLcEm', NULL, '2020-07-18 01:10:00', '2020-07-18 01:10:00'),
(12, 'Fajar Subhan', '30417073', '05081998', '306', 'uploads/mahasiswa/159505990530417073.JPG', '-', 'Aktif', 'adhefikri98@gmail.com', NULL, '$2y$10$3TbL/dmbh/5Sgw0sDYFgw.j8E8088R4coBnKEvpHzuR6YYgs.MVdS', NULL, '2020-07-18 01:11:45', '2020-07-18 01:11:45'),
(13, 'Dibiyo Wiranto', '30417119', '2405200', '306', 'uploads/mahasiswa/159506005430417119.JPG', '-', 'Tidak Aktif', 'dibiyo@gmail.com', NULL, '$2y$10$xHvfojnyDk4CSGq7qj/wcOU.i4WFocHQaf3TAMMxJP4i3d9ehtsva', NULL, '2020-07-18 01:14:14', '2020-07-18 01:14:14'),
(16, 'Ade Fikriatul Ilmi', '30417129', '05051998', '306', 'uploads/mahasiswa/159506029630417129.JPG', '-', 'Aktif', 'adhefikri@gmail.com', NULL, '$2y$10$wSsbV3fqCjzU98jXzV7uKO5jIUxiPX/8NxOlQub62SPo2WihjXYuW', NULL, '2020-07-18 01:18:16', '2020-07-18 01:18:16'),
(17, 'Annisa Bintang Karlina', '30417179', '24012000', '306', 'uploads/mahasiswa/159506044430417179.JPG', '-', 'Aktif', 'bintang@gmail.com', NULL, '$2y$10$JgYbLgbyX5gBoaFuSGCzT.iP4hczNkaLrS8i6sWoK/zj4FVAbMax2', NULL, '2020-07-18 01:20:44', '2020-07-18 01:20:44'),
(18, 'Anggi Amilia Pratiwi', '30417187', '05081998', '306', 'uploads/mahasiswa/159506062330417187.JPG', '-', 'Aktif', 'anggipratiwi@gmail.com', NULL, '$2y$10$bEfTvCNlRreaulEpd3sNce/RR8Py9X8enhRr9w7JvXp8oEMSzZrnm', NULL, '2020-07-18 01:23:43', '2020-07-18 01:23:43'),
(19, 'Bayu Faturahman', '30417189', '24051999', '306', 'uploads/mahasiswa/159506067830417188.JPG', '-', 'Aktif', 'bayu@gmail.com', NULL, '$2y$10$iD0URqg9r9pkUP1DD9kU2e7Lzy2iY98ffiB0ikf77KSRCMYM2c0o6', NULL, '2020-07-18 01:24:38', '2020-07-18 01:24:38'),
(21, 'Adrian Pamungkas', '30417226', '24051996', '306', 'uploads/mahasiswa/159506075830417226.JPG', '-', 'Aktif', 'adrian@gmail.com', NULL, '$2y$10$71KrlXXiUJPyz9J9LYUbJeLxfS06RoJRByDmq6FWDWHk0sAyPyMKC', NULL, '2020-07-18 01:25:58', '2020-07-18 01:25:58'),
(22, 'Rizki Rajab', '30417252', '05081998', '306', 'uploads/mahasiswa/159506080830417252.JPG', '-', 'Tidak Aktif', 'rajab@gmail.com', NULL, '$2y$10$zUQoGj2fn7WrqsrW4v5nE.dnY4MtpW.3NzbLhqhcSUhVEyRTIyTxe', NULL, '2020-07-18 01:26:48', '2020-07-18 01:26:48'),
(23, 'Nur Islamiyah', '30417280', '05081998', '306', 'uploads/mahasiswa/159506086630417280.JPG', '-', 'Aktif', 'iis@gmail.com', NULL, '$2y$10$i8u7QUgtIX2DFx1I1QGsm.PK3Uz5xyg7MWYBZf4A6uYtVKWvtlBUe', NULL, '2020-07-18 01:27:46', '2020-07-18 01:27:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'utama', 'utama', '2020-06-20 10:05:33', '2020-07-05 00:51:31'),
(2, 'silahturahmi', 'silahturahmi', '2020-07-05 00:49:55', '2020-07-05 00:49:55'),
(3, 'bukber', 'bukber', '2020-07-05 00:52:39', '2020-07-05 00:52:39'),
(4, 'ultah', 'ultah', '2020-07-05 00:52:50', '2020-07-05 00:52:50'),
(5, 'pelatihan', 'pelatihan', '2020-07-05 00:53:04', '2020-07-05 00:53:04'),
(6, 'workshop', 'workshop', '2020-07-05 00:53:17', '2020-07-05 00:53:17'),
(7, 'lomba', 'lomba', '2020-07-05 00:53:30', '2020-07-05 00:53:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipe` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `foto`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `tipe`) VALUES
(1, 'Ade Fikriatul Ilmi', 'uploads/users/Fikri.png', 'adhefikri98@gmail.com', NULL, '$2y$10$/KXj2S0vI/e1gA48HvKJ/OJ.ztmCzwL0JcB6KmzL.NL0.5hqxwA4S', NULL, '2020-07-10 10:27:21', '2020-07-10 10:27:21', 1),
(2, 'Delvia Tri Ramadhani', 'uploads/users/delvia.png', 'delvia@gmail.com', NULL, '$2y$10$9Pp4mNvSZGmzdEpifNPMzOc/Ti8ie5KmYIxgMZqlqvSS0dlg4YatS', NULL, '2020-07-10 10:51:37', '2020-07-10 10:51:37', 0),
(3, 'Kepala Laboratorium', 'uploads/users/default.jpg', 'admin@gmail.com', NULL, '$2y$10$xDd5dm/8zd4ySf0ywNbMe.8kRqYUr5.pB9CbEdgWa3m5dqfnAlaoa', NULL, '2020-07-18 05:59:29', '2020-07-18 05:59:29', 1),
(4, 'Luqman Helmi', 'uploads/users/default.jpg', 'luqman@gmail.com', NULL, '$2y$10$9mAtxrBE1EkU5vPGP6zjruZ9E4fqt9yMb.5lOuJPHIuEHNAwo1p42', NULL, '2020-07-27 00:26:28', '2020-07-27 00:26:28', 1),
(5, 'Indah Lestari', 'uploads/users/default.jpg', 'indah@gmail.com', NULL, '$2y$10$hDiehyouJXFeLcHJmvmaveI88K0KEzFxNhzLkfqSVRloDy.KuumlK', NULL, '2020-07-27 00:32:00', '2020-07-27 00:32:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `asisten`
--
ALTER TABLE `asisten`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `asisten_npm_unique` (`npm`),
  ADD UNIQUE KEY `asisten_email_unique` (`email`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategoris_kelas`
--
ALTER TABLE `kategoris_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategoris_playlists`
--
ALTER TABLE `kategoris_playlists`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mahasiswa_npm_unique` (`npm`),
  ADD UNIQUE KEY `mahasiswa_email_unique` (`email`);

--
-- Indeks untuk tabel `mahasiswa_matkul`
--
ALTER TABLE `mahasiswa_matkul`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pendaftaran_npm_unique` (`npm`),
  ADD UNIQUE KEY `pendaftaran_email_unique` (`email`);

--
-- Indeks untuk tabel `playlists`
--
ALTER TABLE `playlists`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `posts_tags`
--
ALTER TABLE `posts_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `praktikum`
--
ALTER TABLE `praktikum`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `strukturlab`
--
ALTER TABLE `strukturlab`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `strukturlab_email_unique` (`email`);

--
-- Indeks untuk tabel `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_email_unique` (`email`);

--
-- Indeks untuk tabel `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `asisten`
--
ALTER TABLE `asisten`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `kategoris_kelas`
--
ALTER TABLE `kategoris_kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `kategoris_playlists`
--
ALTER TABLE `kategoris_playlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa_matkul`
--
ALTER TABLE `mahasiswa_matkul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `playlists`
--
ALTER TABLE `playlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `posts_tags`
--
ALTER TABLE `posts_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `praktikum`
--
ALTER TABLE `praktikum`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `strukturlab`
--
ALTER TABLE `strukturlab`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
