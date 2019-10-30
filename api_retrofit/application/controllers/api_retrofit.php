<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_retrofit extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 function __construct(){
    parent::__construct(); // construct the Model class
  }

	public function index()
	{

		// echo "coba";

		// $this->load->view('welcome_message');
		// $this->m_data_user->tampil_data_user()->result();

		$data_user = $this->db->query(" SELECT * from data_user ")->result();
		echo json_encode($data_user);

		// foreach ($ambil_id_bahan_sesuai as $key ) {
		// 	echo $key->id."\n";
		// 	echo $key->username."\n";
		// }
	}
	public function read_data_sekolah(){
		$data_sekolah = $this->db->query(" SELECT * from sekolah ")->result();
		echo json_encode($data_sekolah);
	}

	public function created_data_sekolah(){
		$data_sekolah = $this->db->query(" INSERT INTO sekolah (nama_sekolah, alamat_sekolah, nohp_sekolah, photo_sekolah)
		VALUES ('SMAN 8 Kediri', 'jln patimura', '081335368840', ''); ")->result();
		echo json_encode($data_sekolah);
	}

}
