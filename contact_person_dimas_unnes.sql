-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Okt 2023 pada 17.58
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact_person`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agama`
--

CREATE TABLE `agama` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `agama`
--

INSERT INTO `agama` (`id`, `nama`) VALUES
(1, 'Islam'),
(2, 'Kristen Protestan'),
(3, 'Katholik'),
(4, 'Hindu'),
(5, 'Buddha');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `fullname` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `pass` varchar(45) NOT NULL,
  `role` enum('admin','member') NOT NULL,
  `foto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `fullname`, `username`, `pass`, `role`, `foto`) VALUES
(3, 'Dimas Andhika', 'dmsandhika', 'feb51880a7a8085361ecd7065de6abcc19dd1714', 'admin', NULL),
(4, 'Firmansyah', 'firman', 'c07ae2e7314de57501ba9974844f30b4174ce41c', 'member', NULL),
(5, 'Andhikaaa', 'andhika', 'c9c76dfbabf87f14dfd9f532ed3cbed03ec5e057', 'member', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `tempatlahir` varchar(20) NOT NULL,
  `tgllahir` date NOT NULL,
  `alamat` text NOT NULL,
  `idagama` int(11) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `sosmed` varchar(45) NOT NULL,
  `univ` varchar(45) NOT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `quotes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `person`
--

INSERT INTO `person` (`id`, `nama`, `gender`, `tempatlahir`, `tgllahir`, `alamat`, `idagama`, `telp`, `email`, `sosmed`, `univ`, `foto`, `quotes`) VALUES
(2, '  Irgi Rama Sulistio', 'L', '  Bogor', '2002-03-06', '  Kp.Babakan RT:02/03 No:16 Kec.Cileungsi Kab.Bogor', 1, '089612431791', 'irgirama01@gmail.com', 'irgiramz', 'Politeknik Negeri Media Kreatif', 'Irgi.jpg', 'Semangat dan teruslah berusaha'),
(3, 'Dimas Andhika Firmansyah', 'L', 'Pemalang', '2003-07-20', 'Pemalang, Jawa Tengah', 1, '089630147925', 'dmsandhika87@gmail.com', 'dmsandhika_', 'Universitas Negeri Semarang', '', 'Jika kamu merasa tidak ada orang baik, jadilah orang baik tersebut'),
(4, 'Ahmad Fadhliansyah ', 'L', 'DKI Jakarta', '2003-06-13', 'Jl Lapangan Roos III', 1, '082114254952', 'fadhliansyah9f@gmail.com', 'fadhliansyaah', 'Stt NF', 'fadhli.jpg', 'Janganlah menjadi orang yang tidak menghargai orang lain.'),
(5, 'Nata Nara Narendra Putra Suanda', 'L', 'Sumbawa Besar', '2003-07-30', 'Jl. Gunung Agung Gang. 1C Perumahan Pesona Agung Graha Adi No. B2', 4, '089675998114', 'natanaranarendra@gmail.com', 'natanaraps', 'Universitas Udayana', 'nata.jpg', 'Tetap semangat walaupun hidup sangat berat'),
(6, 'Muhammad Jaisy Adli', 'L', 'Bekasi', '2004-01-13', 'Jln. H. Taqwa no 108 rt/rw 006/009', 1, '089512391211', 'muhjaisyadli@gmail.com', 'jaisyadli', 'STT NF', 'jaisy.jpg', '2 3 ular kebo, kita hidup harus semangat tlus lo phei phei'),
(7, 'Adi', 'L', 'Pamekasan', '2000-10-29', 'Sumber Waru Waru Jawa Timur', 1, '081937264222', 'adilrindu29@gmail.com', 'adialfatih45', 'Institut Sains danTeknologi Annuqayah', 'adi.webp', 'Jangan pernah takut untuk mencoba'),
(8, 'Qonita Azizah ', 'P', 'Panyalaian ', '2002-02-08', 'Jalan Allogio barat 3, Medang, kec pegedangan, banten', 1, '085761434808', 'qonita.azizah@student.pradita.', 'qonitaazh_', 'Pradita University ', 'qonita.webp', 'Jadi diri sendiri '),
(9, 'Milda Khusnul Khotimah', 'P', 'Lumajang', '2003-02-26', 'Lumajang, Jawa Timur', 1, '087863533945', 'mildakhusnul999@gmai.com', '_mldkhsnl', 'Politeknik Negeri Malang', 'milda.jpg', 'Life is to be grateful'),
(10, 'Izzudin muktar ', 'L', 'Depok', '2003-06-26', 'Dsn bebegan, jati kabupaten Blora Jawa Tengah ', 1, '083122661966', 'izudinmuktar5@gmail.com', 'mukktaaaaar', 'STT Terpadu Nurul Fikri ', 'izudin.jpg', 'Guru terbaik adalah pengalaman orang lain.'),
(11, '  Moch Fikri Ramdahan', 'L', 'Depok', '2001-10-11', 'JL. Situ Indah No.3 Rt.06/10 Kel.Tugu Kec.Cimanggis Depok', 1, '089684711291', 'libr.libr1711@gmail.com', 'fikrii1711', 'Sekolah Tinggi Teknologi Terpadu Nurul Fikri', 'fikri.jpg', 'Everything you do, do it 100%'),
(12, 'Sri Lestari', 'P', 'Pati', '2002-09-28', 'Ds.Sukolilo RT 06/RW 07', 1, '08157945227', 'lestatari41@gmail.com', 'taarrrrri', 'Universitas Muria Kudus', 'tari.jpg', 'Tuhan memiliki rencananya sendiri. Percayai itu dan nikmati saat  ini.'),
(13, 'Septia Dwi Kurniasih', 'P', 'Jakarta', '1995-09-18', 'Kp. Pulo Makasar Jakarta Timur', 1, '087889018920', 'septiadk2@gmail.com', 'cepiaaaws', 'Unsurya', 'cepia.jpeg', 'Sebaik apapun diri kita, kita tidak akan pernah terlihat sempurna oleh manusia lain.'),
(14, 'Putra Habib Al Aziz ', 'L', 'Rantau karya ', '2003-12-23', '  OKI, Sumatera Selatan ', 1, '085377519996', 'putrahabibalaziz@gmail.com', 'ajizz11_', 'Politeknik Manufaktur Negeri Bangka Belitung ', 'putra.jpg', 'Bernafaslah selagi masih hidup '),
(15, 'Siti Amdah', 'P', 'Tangerang', '2001-04-14', 'Tigaraksa, Tangerang-Banten', 1, '08979281365', 'siti.amdah14@gmail.com', 'amdah14', 'STT Terpadu Nurul Fikri', 'amdah.jpg', ''),
(16, 'Renawati', 'P', 'Tangerang', '2002-05-22', 'Kp.Daraham ', 1, '085282884467', 'rena09910@gmail.com', 'ren_aniqobie', 'STT Terpadu Nurul Fikri', 'rena.jpeg', 'If you\'re finish changing, you\'re finished'),
(17, 'Hanif Hidayatulloh ', 'L', 'Brebes', '2003-11-28', 'Purwokerto Utara', 1, '087862678478', 'hanifhidayatulloh2811@gmail.co', 'hanief_nief', 'Universitas Amikom Purwokerto ', 'hanif.jpg', 'Jangan kau penjarakan ucapanmu, jika kau menghamba kepada ketakutan kau hanya akan memperpanjang barisan perbudakan'),
(18, 'Ariza Akmal Syahida', 'L', 'Bantul', '2003-04-13', 'Bantul, Daerah Istimewa Yogyakarta', 1, '083849257999', 'arizaakmal04@gmail.com', 'arizaakmal13', 'Universitas Amikom Yogyakarta', 'ariza.jpg', 'Jadilah lebih baik dari hari kemarin'),
(19, 'Muarif Rizqy', 'L', 'Brebes', '2001-11-21', 'Kec. Paguyangan jl. Bumiayu - Purwokerto', 1, '085326762608', 'murizqyarf17@gmail.com', 'Arif_rzym', 'Universitas Peradaban', 'muarif.jpg', 'Ayo makan biar nggak mati'),
(20, 'Muhammad Alifi Ferdiansyah', 'L', 'Tulungagung', '2000-07-24', 'Desa Tenggong, Kecamatan Rejotangan, Kabupaten Tulungagung', 1, '088217206039', 'alifi240700@gmail.com', 'alifi_24', 'Universitas Bhinneka PGRI', 'alifi.png', 'Just Do It Man!'),
(21, 'Fajar septianto', 'L', 'jakarta selatan', '2002-09-06', 'cinere, depok', 1, '085889432197', 'fajar23.septianto@gmail.com', 'slashandback', 'STT Nurul Fikri', 'fajar.jpg', 'we can buy the time. setiap proses yang bisa di kurangi waktunya sama dengan membeli waktu'),
(22, 'Kurniawan', 'L', 'Sumedang', '2001-08-19', 'Sumedang', 1, '081411096708', 'ikurniawannf@gmail.com', 'i_kr19', 'SEKOLAH TINGGI TEKNOLOGI TERPADU NURUL FIKRI', 'kurniawan.jpg', 'Jangan malu untuk menjadi diri sendiri'),
(23, 'Muhammad Bahrul Ulum', 'L', 'Pontianak', '2002-09-15', 'Jalan Bujama Desa Pal IX Kecamatan Sungai Kakap Kabupaten Kubu Raya', 1, '087716374672', 'rangga.agg2018@gmail.com', 'ulum_kane', 'Universitas Tanjungpura', 'ulum.jpg', 'Dunia memang tidak memihakmu, Tapi bukan berarti kau harus kalah darinya'),
(24, 'Zian Naisila Anjarwati', 'P', 'Sumedang', '2001-02-24', 'Jl. Caringin Cikungkurak Bandung', 1, '089652639063', 'ziannaisilaa@gmail.com', 'ziannaisilaa', 'STMIK - IM Bandung', 'zian.png', 'spion dulu diri sendiri, baru klakson orang lain'),
(25, 'Hadi Prasetiyo', 'L', 'Samarinda', '2002-06-16', 'Samarinda, Kalimantan Timur', 1, '085711228592', 'hadiiyok01@gmail.com', 'hadiiprasetiyo', 'Universitas Mulawarman', 'hadi.jpg', 'Sesulit apapun tugasmu pasti akan selesai dimenit terakhir'),
(26, 'Euis safania', 'P', 'Cirebon', '2001-10-25', 'Kabupaten Cirebon Provinsi Jawa Barat ', 1, '083156525468', 'euissafania8703@students.unnes', 'safania.euis', 'Universitas Negeri Semarang', 'euis.jpg', 'Sukses bukanlah kunci kebahagiaan, tapi kebahagian adalah kunci sukses'),
(27, 'Ulayya Salmaa Khoirunnisaa', 'P', 'Kudus', '2003-05-28', 'Bulungcangkring RT 03/ RW 01, Kec. Jekulo, Kab. Kudus', 1, '081215627905', 'ulayyasalmaa28@gmail.com', 'salmaaul._', 'Universitas Muria Kudus', 'ulayya.jpg', 'Hidup itu seperti di drama Korea, penuh dengan plot twist, tapi pasti ada episode happy endingnya.'),
(28, 'Ahmad Riziq', 'L', 'Jakarta', '2002-07-18', 'Kp.Roke Des. Negkasari Kec.Jasinga Kab. Bogor Provinsi.jawa barat', 1, '085939446587', 'ahmadriziq010@gmail.com', 'arizieq', 'Sekolah Tinggi Teknologi terpadu Nurul fikri', 'riziq.jpg', 'Satu Satunya perjalanan yg Mustahil, adalah perjalanan yg tidak pernah kamu mulai'),
(29, 'Carmennita Soleman', 'P', 'Samarinda', '2004-01-24', 'Jl. Budaya Pampang, Samarinda, Kalimantan Timur', 2, '085350232057', 'nitacarmen06@gmail.com', 'carmeennita', 'Universitas Mulawarman', 'carmennita.jpg', 'Be Grateful'),
(30, 'Ahmad Zuaidi', 'L', 'Sumenep ', '2002-11-02', 'Lembung Barat Lenteng Sumenep Jatim', 1, '085963093822', 'ahmadzuaidi892@gmail.com', 'ahmd.zdi__', 'IST Annuqayah', 'hadzi.jpg', 'Fatum brutum amor fati. Sebab kata orang Tuhan tidak pernah bermain dadu.'),
(31, 'Shabrina Primadewi', 'P', 'Kudus', '2003-01-09', 'Desa Sadang, Rt 03 Rw 02, Kecamatan Jekulo, Kabupaten Kudus, Jawa Tengah', 1, '085848686194', 'shabrinaprima@gmail.com', 'shabrinampol', 'Universitas Muria Kudus', 'shabrina.png', 'Kamu seringkali berkata gak sanggup, bahkan beberapa kali ingin menyerah, tapi lihat kamu masih bertahan sampai saat ini. Teruslah mengeluh sampai semua pada akhirnya terselesaikan juga'),
(32, 'Ridwan Khomarudin Muharram ', 'L', 'Tanggerang ', '2003-03-10', 'Citayam kp. Kelapa gg. Nusaindah rt04/rw16', 1, '081281238348', 'ridwanmts812@gmail.com', 'arraaamm__', 'STT Terpadu Nurul Fikri ', '', 'Kamu seringkali berkata gak sanggup, bahkan beberapa kali ingin menyerah, tapi lihat kamu masih bertahan sampai saat ini. Teruslah mengeluh sampai semua pada akhirnya terselesaikan juga'),
(33, 'Anisa', 'P', 'Depok', '2003-10-09', 'Kp. Sindangkarsa Rt01/07, sukamaju baru, Tapos depok', 1, '083895461608', 'anisaaabcd@gmail.com', 'SyNissa', 'Stt terpadu nurul Fikri ', 'anisa.jpg', 'Stop wishing, start doing! :)'),
(34, 'Shafa Salsabila Febriani', 'P', 'Depok', '2002-02-20', 'Jl Bhakti Abri Rt 02 Rw 10 ', 1, '0895706510309', 'shafafebriani4@gmail.com', 'shafaslls', 'UBSI Depok', 'shafa.jpg', 'Jadilah diri sendiri'),
(35, 'Nasyath Faykar ', 'L', 'Pekalongan ', '2002-11-03', 'Jalan KH Ahmad Dahlan Tirto Gg. 7 No. 31', 1, '088806923500', 'nasyathfaykar@gmail.com', 'faykarr_', 'STMIK WIDYA PRATAMA PEKALONGAN ', 'nasyath.jpg', 'Learn to be best rather than yesterday.'),
(36, 'Maulidhiansyah Bayu Setiawan', 'L', 'Jakarta ', '2003-05-10', 'Jl. Jantung Harapan RT 08/07 Kel.pabuaran Kec.cibinong', 1, '089507631813', 'maulidhiansyahbayu@gmail.com', 'inibayou', 'STT Terpadu Nurul Fikri ', 'bayu.jpg', 'Hiduplah seperti larry'),
(37, 'Rangga Ekklesia Gabriel Anugrahnu', 'L', 'Palangka Raya', '2002-06-08', 'Jl.Perkebunan komp perikanan ', 2, '083143508517', 'ranggaekkle20020806@gmail.com', 'rangga_e.g.a', 'UNIVERSITAS PALANGKARAYA ', '', 'Ngoding Tanpa Error impossible!'),
(38, 'Muhammad Alif Firdaus Arizona', 'L', 'Surabaya', '2002-03-14', 'Perum TNI AL Candi ', 1, '082132306322', '20410100080@dinamika.ac.id', 'afarizona_', 'Universitas Dinamika', 'alif.jpeg', 'Aut viam inveniam aut faciam'),
(39, 'Mukhammad Rifkhi Rifangga ', 'L', 'Kudus ', '2002-05-13', 'Sunggingan RT 03 RW 03 Kota Kudus ', 1, '08812670156', 'rifkhirifangga@gmail.com', 'rifkhi.rifangga_', 'Universitas Muria Kudus ', 'rifkhi.jpg', 'Tawa adalah cara terbaik untuk lupa '),
(40, 'Winanda afrilia harisya', 'P', 'Sungai penuh', '2003-04-26', 'Kapalo koto, Pauh, Padang', 1, '+62 878-4218-27', 'winandaafrilia0304@gmail.com', '_winandaah', 'Universitas Andalas', '', 'Walaupun hidup tidak menyenangkan akhir akhir ini, tapi setidaknya masih layak di jalani dan dicoba'),
(41, 'Muhammad Anwar Fauzan', 'L', 'Serang', '2003-01-15', 'Bumi Agung Permai 1', 1, '085939410330', 'anwar.fauzan98@gmail.com', 'anwarfz__', 'Universitas Banten Jaya', 'anwar.jpg', 'Your future created by what you do today not tomorrow'),
(42, 'Erick Darmawan', 'L', 'Kota Serang', '2003-08-13', 'Kota Serang', 1, '085282568210', 'erickdarmawanboeniarto130803@g', 'erick.db13', 'Universitas Banten Jaya', 'erick.jpg', 'tetap Semangat'),
(43, 'Lora Lorensa Manafe ', 'P', 'Sulamu', '2003-10-13', 'Sulamu ', 2, '081353024713', 'lhomanafe@gmail.com', 'Lhomnfe30 ', 'Politeknik Negeri kupang ', '', 'Jalan mu memang beda dengan mereka, tetapi kamu akan lebih kuat dari mereka.'),
(44, 'Bagus Febriyanto', 'L', 'Pati', '2002-02-02', 'Kab. Pati, Kec. Tayu, desa Pondowan', 1, '08978270522', 'bagusfebriyanto19@gmail.com', '__imnotbgs', 'Universitas Muria Kudus', 'bagus.jpg', '\"Itami o kanjiro   Itami o kangaero  Itami o uketore   Itami o shire   Koko yori.... sekai ni itami o..... SHINRA TENSEI!!!! ???\"	'),
(45, 'Safitri ', 'P', 'Jakarta ', '2003-10-16', 'Jakarta ', 1, '084567444545', 'safitri1337@gmail.com', 'safitri16__', 'Universitas Bina Nusantara ', '', 'Nothing '),
(46, 'Bagus Muhammad Mumtaza ', 'L', 'Kota Pekalongan ', '2003-08-20', 'Indonesia, Jawa Tengah, Kota Pekalongan, Jl. KHM. Mansyur Bendan GG. 7', 1, '085875282178', 'bagusbendan07@gmail.com', 'mmtza.mm', 'STMIK Widya Pratama Pekalongan ', '', 'Tetap semangat dan jangan menyerah apapun yang terjadi'),
(47, 'Riyanto', 'L', 'Indonesia', '2002-06-04', 'Indonesia', 1, '088225448521', 'alfyansyahriyan31@gmail.com', '@alfya', 'Universitas Sains Alqur an', '', ''),
(48, 'Febi Febiyanti', 'P', 'Depok', '2003-06-11', 'Depok', 3, '085951422824', 'febi20289ti@student.nurulfikri', 'febiii', 'STT NF', '', ''),
(49, 'Jhofy Ricardo P. Sitindaon', 'L', 'Palembang', '2003-07-18', 'Palembang', 2, '082218994202', 'jhofyricardo@icloud.com', 'jhofyyyy', 'Politeknik Negeri Sriwijaya', '', ''),
(50, 'Riski Eggy Saputro', 'L', 'Jawa Tengah', '2001-06-13', 'Jawa Tengah', 1, '081911049214', 'eggy.riski27@gmail.com', 'riskieggy', 'Universitas Banten Jaya', '', ''),
(51, 'Mahez Arya Panangsang', 'L', 'Banten', '2023-10-25', 'Banten', 4, '081298020766', 'mahezarya23@gmail.com', 'mahezzzzz', 'Universitas Banten Jaya', '', ''),
(52, 'Nasrul', 'L', '-', '1980-10-10', '-', 1, '085780844411', 'nasrul99@gmail.com', '-', 'Sekolah Tinggi Teknologi Terpadu Nurul Fikri', '', ''),
(53, 'Fathan Mubin', 'L', '-', '1997-09-21', '', 1, '085882103423', 'fathan@nurulfikri.ac.id', '', 'Sekolah Tinggi Teknologi Terpadu Nurul Fikri', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sosmed_UNIQUE` (`sosmed`),
  ADD KEY `fk_person_agama_idx` (`idagama`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agama`
--
ALTER TABLE `agama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `fk_person_agama` FOREIGN KEY (`idagama`) REFERENCES `agama` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
