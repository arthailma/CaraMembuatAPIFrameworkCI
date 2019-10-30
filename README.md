<html>
  <h1>API FRAMEWORK CodeIgniter</h1>
  <h2>Instalasi Framework Codeigniter</h2>
  <p>Langkah Pertama  :</br>
  Download XAMPP di link <a href = "https://www.apachefriends.org/download.html">https://www.apachefriends.org/download.html</a>
  </p>
  <p>Langkah Kedua  : </br>
  Instalasi XAMPP yang sudah di download, link tutorial istall xampp bisa di lihat di link berikut 
  <br>
  <a href="https://webhostmu.com/cara- instal-xampp/"> 
  https://webhostmu.com/cara-instal-xampp/</a>
  </p>
  <p>Langkah Ketiga  : </br>
  Instalasi framework Codeigniter 
  <br> 
  Link Donwload Framework CI
  <br>
  <a href="https://codeigniter.com/download">
  https://codeigniter.com/download</a>
  </p>
  
  <h2>langkah langkah pembuatan API</h2>
  <p>Langkah Pertama  :<br>
  Buat database terlebih dahulu <br>
  contoh SQL pembuatan database seperti berikut 
  ```sql
    CREATE TABLE `sekolah` (
    `id_sekolah` int(11) NOT NULL,
    `nama_sekolah` varchar(100) NOT NULL,
    `alamat_sekolah` varchar(100) NOT NULL,
    `nohp_sekolah` bigint(20) NOT NULL,
    `photo_sekolah` varchar(100) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
    INSERT INTO `sekolah` (`id_sekolah`, `nama_sekolah`, `alamat_sekolah`, `nohp_sekolah`, `photo_sekolah`) VALUES
    (1, 'SMAN 7 Kediri', 'jalan penaanggungan no.11', 81335368840,      'content://com.android.providers.media.documents/document/image%3A337917'),
    (2, 'SMAN 8 Kediri', 'jln patimura', 81335368840, ''),
    (3, 'SMAN 8 Kediri', 'jln patimura', 81335368840, ''),
    (4, 'SMAN 8 Kediri', 'jln patimura', 81335368840, '');
    ALTER TABLE `sekolah`
    ADD PRIMARY KEY (`id_sekolah`);
    ALTER TABLE `sekolah`
      MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
    COMMIT;
  ```
  Pergi ke file database.php ({nama_aplikasi_anda}/aplication/config/database.php) <br>
  isikan dari database.php <br>
  </p>
  <p>Langkah Kedua  : </br>
  Instalasi XAMPP yang sudah di download, link tutorial istall xampp bisa di lihat di link berikut 
  <br>
  <a href="https://webhostmu.com/cara- instal-xampp/"> 
  https://webhostmu.com/cara-instal-xampp/</a>
  </p>
  <p>Langkah Ketiga  : </br>
  Instalasi framework Codeigniter 
  <br> 
  Link Donwload Framework CI
  <br>
  <a href="https://codeigniter.com/download">
  https://codeigniter.com/download</a>
  </p>
  
  
  
  
</html> 
