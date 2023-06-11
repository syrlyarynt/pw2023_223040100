-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2023 at 02:15 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eysblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(93, 'Teknologi informasi'),
(94, 'Teknologi Komunikasi'),
(95, 'Teknologi Transportasi');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int NOT NULL,
  `kategori_id` int NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `detail` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kategori_id`, `nama`, `foto`, `detail`) VALUES
(6, 94, 'Smartphone', 'Nf5JzvgLkrAA53FosUge.png', '                                                Smartphone merupakan gadget genggam elektronik yang mencakup fungsionalitas lanjutan selain melakukan panggilan telepon dan mengirim pesan teks.\r\nHal ini menjelaskan bahwasanya smartphone memiliki kelebihan tertentu dalam memberikan pelayanan terhadap penggunanya. Misalnya saja seperti iPhone atau ponsel berbasis Android lainnya, yang mana dapat menjalankan aplikasi pihak ketiga dengan menyediakan fungsionalitas tanpa batas. Dalam jaringan komunikasi seperti Internet, smartphone sendiri bekerja dengan memanfaatkan gelombang radio digital. Dalam hal ini yang membuatnya mampu menangani sejumlah informasi yang diterima dan dikirim melalui perangkat digital satu ke lainnya menggunakan teknologi yang disebut FSK (Frequency Shift Keying).\r\nPada dasarnya smartphone Anda adalah radio mini yang terus-menerus menerima sinyal lain dari jaringan seluler terpisah ke dalam gelombang elektronik yang berbeda-beda. Masing-masing gelombang tersebut memiliki sinyal antena yang mengirimkan gelombang seluler terhadap perangkat elektronik pada area tertentu.\r\nSejarah dan Perkembangan Smartphone: Dengan perkembangan internet yang semakin maju, smartphone menjadi sebuah gadget praktis yang populer karena memiliki banyak fitur dan kemampuan yang membuatnya seperti sebuah ukuran mini dari komputer. '),
(7, 93, 'Radio', 'OdRLuQNE24fBYaKKvWHs.png', '                        Radio adalah teknologi yang digunakan untuk pengiriman sinyal dengan cara modulasi dan radiasi elektromagnetik (gelombang elektromagnetik). Gelombang ini melintas, dan merambat lewat udara, dan bisa juga merambat lewat ruang angkasa yang hampa udara, karena gelombang ini tidak memerlukan medium pengangkut (seperti molekul udara). Saat ini radio dapat didengarkan melalui ponsel pintar, berbeda halnya sebelum abad ke-20, ketika konsep nirkabel masih dianggap kisah fiksi semata.\r\nSejarah radio adalah sejarah teknologi yang menghasilkan peralatan radio yang menggunakan gelombang radio. Stasiun radio paling awal menggunakan sistem radiotelegrafi dan tidak membawa audio. Agar siaran audio dimungkinkan, perangkat deteksi dan amplifikasi elektronik harus digunakan.\r\n Sejarah penemuan radio dimulai di Inggris dan Amerika Serikat. Donald Mc. Nicol dalam bukunya Radio’s Conquest of Space menyatakan bahwa terkalahkannya ruang angkasa oleh radio dimulai tahun 1802 oleh Dane, yaitu dengan ditemukannya suatu pesan dalam jarak pendek dengan menggunakan alat sederhana berupa kawat beraliran listrik. Penemuan berikutnya adalah oleh tiga orang cendikiawan muda, di antaranya adalah James Maxwell berkebangsaan Inggris pada tahun 1865. Ia dijuluki scientific father of wireless, karena berhasil menemukan rumus-rumus yang diduga mewujudkan gelombang elektromagnetik, yakni gelombang yang digunakan radio dan televisi.                                   '),
(8, 93, 'Televesi', 'xqFZDPisGoIKMyAYr9rg.png', 'Televisi (serapan dari bahasa Belanda: televisie; akronim: TV) adalah sebuah media telekomunikasi yang diciptakan dari sinar elektroda ciptaan John Mc. Graham dari Saththam. Penggunaan kata &quot;Televisi&quot; sendiri juga dapat merujuk kepada &quot;kotak televisi&quot;, &quot;acara televisi&quot;, ataupun &quot;transmisi televisi&quot;. Penemuan televisi disejajarkan dengan penemuan roda, karena penemuan ini mampu mengubah peradaban dunia. Di Indonesia &#039;televisi&#039; secara tidak formal sering disebut dengan TV (dibaca: tivi, teve ataupun tipi.) Kotak televisi pertama kali dijual secara komersial sejak tahun 1930-an, dan sejak saat itu televisi telah menjadi barang biasa di rumah, kantor bisnis, maupun institusi, khususnya sebagai sumber kebutuhan akan hiburan dan berita serta menjadi media periklanan. Sejak 1970-an, kemunculan kaset video, cakram laser, DVD dan kini cakram Blu-ray, juga menjadikan kotak televisi sebagai alat untuk melihat materi siaran serta hasil rekaman. Dalam tahun-tahun terakhir, siaran televisi telah dapat diakses melalui Internet, misalnya melalui iPlayer dan Hulu.                '),
(21, 95, 'Kapal Laut', 'AjjwN7NkuKq7u6jApWZW.jpg', 'Kapal merupakan transportasi laut yang mana digunakan sebagai pengangkut penumpang dan barang, sama seperti sampan atau perahu kecil.\r\nSetidaknya terdapat 25 jenis kapal yang dikenal dalam dunia pelayaran. Mulai dari kapal kecil yang digunakan untuk khusus penumpang hingga kapal yang mempunyai ukuran raksasa yang mana digunakan untuk mengangkut minyak atau peralatan berat.\r\nSejarah dan Penemu Kapal Laut: Ternyata kapal sendiri sudah ada pada zaman nenek moyang dulu tetapi, bentuk dari kapal tersebut masih sangat sederhana, yakni berupa rakit dan batang kayu. Hal tersebut tentunya menjadi bukti bahwa dari dulu hingga saat ini, teknologi perkapalan terus berkembang, baik untuk kepentingan komersil, militer maupun politik dan sains.\r\nLantas siapa penemu kapal? Meskipun kapal sudah ada sejak zaman nenek moyang yang mana berupa rakit, namun penemu kapal sendiri yaitu Robert Fulton merupakan seorang penemu, ahli teknik, dan seniman berkebangsaan Amerika yang mana berhasil membuat kapal uap untuk pertama kalinya di dunia. Kapal uap tersebut dibuat untuk melindungi pelabuhan New York dari seranga Inggris pada zaman perang.Kapal uap tersebut memiliki berat 2,745 ton dan memiliki panjang 156 kaki atau setara dengan 48 meter. Kapal yang diluncurkan pada bulan Okteber 1924 ini diberi nama The Domologos atau Fulton. Bukan hanya kapal saja, Robert Fulton juga berhasil membuat kapal yang berupa transportasi lintas air dan kapal selam'),
(22, 94, 'Laptop', 'EsyDcbDTZZK2o2VOo7yz.png', 'Laptop memiliki pengertian sebuah perangkat yang diciptakan untuk mengolah, menyimpan bahkan menciptakan data multimedia yang dikomandokan oleh sistem akun secara manual dan sering disebut komputer portabel yang memudahkan penggunanya agar dapat menggunakannya di mana saja. usul nama laptop diambil dari kata &quot;lap&quot; yang berarti &quot;pangkuan&quot; dan &quot;top&quot; yang berarti &quot;atas&quot; jika disatukan dapat diartikan sebagai &quot;diatas pangkuan&quot;. Arti lebih sederhananya yaitu komputer kecil yang dapat dilipat dan dapat digunakan di atas pangkuan. Nama yang diberikan sesuai dengan kelebihannya yaitu mudah dibawa ke mana saja.\r\nSejarah Laptop: Anda mengenal laptop, Anda terlebih dahulu harus mengetahui rangkaian-rangkaian peristiwa yang menjadi faktor munculnya sebuah laptop dan orang yang menciptakannya.\r\nJika ditelusuri lebih lanjut, laptop ini berasal dari teknologi sebelumnya yakni komputer. Komputer merupakan rangkaian dari beberapa alat elektronik yang dibuat khusus. Kemudian alat-alat elektronik ini dihubungkan dengan rangkaian yang sudah disusun di dalam CPU dan ditampilkan pada monitor. Komputer juga memiliki generasi-generasinya, mulai dari generasi pertama hingga generasi terakhir. Pembuatan laptop sudah direncanakan di awal tahun 1970.  Hal ini terjadi karena penggunaan komputer terlalu terbatas. Lalu, muncul ide untuk membuat komputer portabel atau laptop yang dikemukakan oleh Alan Kay. Kemudian, seorang warga negara Amerika Serikat yang menjadi designer PC melanjutkan ide dari Alan. Designer PC (Personal Computer) ini bernama Adam Osborne.\r\nAdam merealisasikan konsep Alan Kay ke dalam dunia nyata. sehingga lahirlah laptop pertama yang diciptakan Adam Osborne pada tahun 1975 dengan bantuan Felsenstein sebagai ilmuwan pembuat professor. Komputer portabel ini dilahirkan dengan ukuran yang ringkas, bahkan jauh lebih ringkas dibanding komputer laptop ini bernama IBM Portable PC 500.'),
(23, 94, 'Komputer', 'k8iHeJ2DjoAO24fbWbkZ.png', '                        Komputer adalah alat yang dipakai untuk mengolah data menurut prosedur yang telah dirumuskan. Kata computer semula dipergunakan untuk menggambarkan orang yang perkerjaannya melakukan perhitungan aritmatika, dengan atau tanpa alat bantu, tetapi arti kata ini kemudian dipindahkan kepada mesin itu sendiri. Asal mulanya, pengolahan informasi hampir eksklusif berhubungan dengan masalah aritmatika, tetapi komputer modern dipakai untuk banyak tugas yang tidak berhubungan dengan matematika.Dalam definisi seperti itu terdapat alat seperti slide rule, jenis kalkulator mekanik mulai dari abakus dan seterusnya, sampai semua komputer elektronik yang kontemporer. Istilah lebih baik yang cocok untuk arti luas seperti “komputer” adalah “yang memproses informasi” atau “sistem pengolah informasi.” Saat ini, komputer sudah semakin canggih. Tetapi, sebelumnya komputer tidak sekecil, secanggih, sekeren dan seringan sekarang. Dalam sejarah komputer, ada 5 generasi dalam sejarah komputer. Komputer bermula sejak abad ke-19, merupakan hasil penemuan dari seorang profesor matematika yaitu Charles Babbage. Ia merancang sebuah mesin analisis yang dapat melakukan operasi matematika sederhana. Hal ini kemudian menjadi kerangka dasar dari perkembangan komputer berikutnya.'),
(24, 95, 'Pesawat Terbang', 'cyCByEWeJBbE0KMUU9PF.jpg', '                        Apa itu Pesawat Terbang? Secara umum, pengertian pesawat terbang adalah kendaraan bermesin yang dapat terbang di udara.\r\nBerdasarkan Undang-undang Nomor 1 Tahun 2009 tentang Penerbangan, menyebutkan pesawat terbang adalah pesawat udara yang lebih berat dari udara, bersayap tetap dan dapat terbang dengan tenaganya sendiri. Sebagian orang menganggap jika pesawat terbang dan pesawat udara memiliki pengertian yang smaa. Namun menurut dunia penerbangan, keduanya memiliki pengertian berbeda. Penyebutan pesawat udara memiliki pengertian yang luas karena tidak hanya menyebutkan tentang pesawat terbang saja melainkan kendaraan udara jenis lainnya seperti helikopter. Penemu dan Sejarah Pesawat: Orville Wright dan Wilbur Wright atau yang akrab disapa dengan Wright Bersaudara adalah penemu, perancang sekaligus penerbang pesawat terbang yang lebih berat dari udara untuk pertama kalinya. Pesawat yang dimaksud adalah Flayer yang berhasil diluncurkan pada tahun 1903 di Amerika Serikat. Kemudian, pada tahun 1910 seorang berkebangsaan Inggris bernama Samuel F Cody juga tercatat sebagai penemu pesawat sekaligus melangsungkan aksinya untuk pertama kali di lapangan Farnborough. Jauh sebelum itu, penemuan akan pesawat yang lebih ringan dari udara yang diaplikasikan lewat balon udara panas berhasil ditemukan pertama kali oleh kebangsaan Prancis pada tahun 1782 yakni Etiene Montgolfier dan Joseph Montgolfier.               '),
(25, 95, 'Kereta Api', 'Was18sIPGNk3X9zl5P9d.jpg', '                                                                        Kereta api (bahasa Inggris: train) adalah bentuk pengangkutan rel yang terdiri dari serangkaian kendaraan yang ditarik sepanjang jalur kereta api untuk mengangkut kargo atau penumpang. Gaya gerak disediakan oleh lokomotif yang terpisah atau motor individu dalam beberapa unit. Meskipun propulsi historis mesin uap mendominasi, bentuk-bentuk modern yang paling umum adalah mesin diesel dan listrik lokomotif, yang disediakan oleh kabel overhead atau rel tambahan. Sumber energi lain termasuk kuda, tali atau kawat, gravitasi, pneumatik, baterai, dan turbin gas. Rel kereta api biasanya terdiri dari dua, tiga atau empat rel, dengan sejumlah monorel dan guideways maglev dalam campuran. Etimologi kata &quot;train&quot; berasal dari Bahasa Prancis Kuno trahiner, dari bahasa Latin trahere &#039;tarik, menarik&#039;. Ada berbagai jenis kereta api yang dirancang untuk tujuan tertentu. Kereta api bisa terdiri dari kombinasi satu atau lebih dari lokomotif dan gerbong kereta terpasang, atau beberapa unit yang digerakkan sendiri (atau kadang-kadang pelatih bertenaga tunggal atau diartikulasikan, disebut sebuah kereta mobil). Kereta pertama dengan bentuk ditarik menggunakan tali, gravitasi bertenaga atau ditarik oleh kuda. \r\n Sejarah Kereta Api: Sejarah perkeretaapian sama seperti sejarah alat transportasi umumnya yang diawali dengan penemuan roda. Mulanya dikenal kereta kuda yang hanya terdiri dari satu kereta (rangkaian), kemudian dibuatlah kereta kuda yang menarik lebih dari satu rangkaian serta berjalan di jalur tertentu yang terbuat dari besi (rel) dan dinamakan sepur.                                        '),
(26, 93, 'Website', 'wIEcYfFiXJU778Way6x0.png', ' Website adalah serangkaian halaman web berisi informasi yang terhubung satu sama lain dan diakses melalui internet. Pada era digital saat ini, website telah menjadi salah satu elemen penting di dalam kehidupan manusia. Bagi pengunjung, website memberikan akses yang mudah dan cepat untuk mencari informasi, membeli produk, atau mendapat pengalaman baru. Sedangkan bagi pelaku bisnis, website dapat meningkatkan branding perusahaan serta memfasilitasi penjualan produk secara online. Sejarah Website: Website pertama di dunia diluncurkan pada tahun 1991 oleh ahli komputer asal Inggris bernama Sir Timothy John “Tim” Berners-Lee. Awalnya, tujuan Tim dalam merancang website adalah untuk memfasilitasi pertukaran dan pembaruan informasi antar sesama peneliti di tempat kerjanya. Itu karena, website tersebut hanya dibangun menggunakan HTML (HyperText Markup Language). HTML adalah bahasa markup yang hanya mampu menampilkan teks dan gambar yang statis. Baru setelahnya pada tahun 1996, muncul inovasi bernama CSS (Cascading Style Sheets). CSS adalah teknologi yang diperkenalkan untuk mempercantik tampilan website. Di tahun yang sama, bahasa pemrograman JavaScript dirilis ke publik sebagai bahasa yang memungkinkan website menjadi lebih interaktif dan dinamis. Kemudian pada dekade 2000-an, teknologi Flash diluncurkan untuk membuat animasi dan video interaktif pada halaman web. Inovasi lain dalam perkembangan website adalah munculnya responsive design. Website responsif adalah halaman situs yang dapat menyesuaikan diri dengan ukuran layar pengguna. Inovasi ini penting mengingat tren penggunaan smartphone dan tablet untuk mengakses internet.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(5, 'eii', 'eii@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'user'),
(6, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(7, 'jo', 'z@gmail.com', 'fbade9e36a3f36d3d676c1b808451dd7', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`),
  ADD KEY `kategori_produk` (`kategori_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `kategori_produk` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
