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
  
  
  <h2>Pembuatan API di Framework Codeigniter</h2>
  <p>Langkah Pertama  :<br>
  Buat database yang bernama api_retrofit <br>
  lalu masukan sourcecode sql ke dalam database api_retofit 
  </p>
  
  ```javascript

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `alamat_sekolah` varchar(100) NOT NULL,
  `nohp_sekolah` bigint(20) NOT NULL,
  `photo_sekolah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `sekolah` (`id_sekolah`, `nama_sekolah`, `alamat_sekolah`, `nohp_sekolah`, `photo_sekolah`) VALUES
(1, 'SMAN 7 Kediri', 'jalan penaanggungan no.11', 81335368840, 'content://com.android.providers.media.documents/document/image%3A337917'),
(2, 'SMAN 8 Kediri', 'jln patimura', 81335368840, ''),
(3, 'SMAN 8 Kediri', 'jln patimura', 81335368840, ''),
(4, 'SMAN 8 Kediri', 'jln patimura', 81335368840, '');

ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

  ```
  
  <p>Langkah Kedua  :<br>
  Konfigurasi database di Framework Codeigniter <br>
  Pergi ke file database.php yang berada di {nama_project_anda}/aplication/config/database.php <br>
  Isi file database.php tersebut seperti dibawah ini
  </p>
  
  ```javascript
  ......
  $db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'api_retrofit',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
  ......
  );
  ```
  
  <p>Langkah Ketiga  :<br>
  Buat satu controller yang bernama api_retofit <br>
  letak controller harus berada di {nama_project_anda}/aplication/controller/api_retrofit.php <br>
  Tambah kode berikut di file api_retrofit.php
  </p>
  
  ```javascript
  ......
  public function read_data_sekolah(){
		$data_sekolah = $this->db->query(" SELECT * from sekolah ")->result();
		echo json_encode($data_sekolah);
  }
  ......
  ```
  
  <p>Langkah keempat  :<br>
  jalankan framwork Codeigniter <br>
  dengan mengetik {http://localhost/{nama_aplikasi_anda}/index.php/api_retrofit/read_data_sekolah} <br>
  dan jika API tersebut berhasil, maka akan tampil data yang bertype JSON
  </p>
  
  
  
  
  
</html> 
