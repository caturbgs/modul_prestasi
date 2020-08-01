<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prestasi_Mahasiswa extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('upload');
		$this->session->set_userdata( 'nim', 4617010044 );
		
	}

	public function testPDF()
	{
		$this->load->library('Mypdf');
		$content['data'] = $this->getData($this->session->userdata('nim'));
		$this->mypdf->generate('pages/prestasi/mahasiswa/laporan_prestasi', array('main' => $content));
	}

	public function index()
	{
		$data['title'] = 'Modul Prestasi';
		$content['data'] = $this->getData($this->session->userdata('nim'));
		$data['pages'] = $this->load->view('pages/prestasi/mahasiswa/dashboard', array('main' => $content), true);
		$this->load->view('pages/prestasi/mahasiswa/master', array('main'=>$data));
	}
	
	public function registerPrestasi()
	{
		$data['title'] = 'Modul Prestasi';
		$content['data'] = $this->getDataMhs($this->session->userdata('nim'));
		$data['pages'] = $this->load->view('pages/prestasi/mahasiswa/registerPrestasi', array('main'=>$content), true);
		$this->load->view('pages/prestasi/mahasiswa/master', array('main' => $data));
	}

	public function storePrestasi(){
		$data = array();
		$filename = '';

		$config = array(
			'upload_path'=>'uploads/sertifikat/',
			'allowed_types'=>'png|jpg|pdf|jpeg',
			'file_name'=>'sertif'.$_POST['mahasiswa_nim'].date('dmy'),
			'overwrite'=>'true',
			'max_size'=>2048
		);

		$this->upload->initialize($config);

		if ($this->upload->do_upload('file_sertifikat'))
		{
			$data_upload = $this->upload->data();
			$filename = $data_upload['file_name'];
			$path = $data_upload['upload_path'];
			$data['nama_prestasi'] = $_POST['nama_prestasi'];
			$data['tingkat'] = $_POST['tingkat'];
			$data['capaian'] = $_POST['capaian'];
			$data['nomor_sertifikat'] = $_POST['nomor_sertifikat'];
			$data['tahun_perolehan'] = $_POST['tahun_perolehan'];
			$data['jumlah_penghargaan'] = $_POST['jumlah_penghargaan'];
			$data['lembaga_pemberi'] = $_POST['lembaga_pemberi'];
			$data['individu_kelompok'] = $_POST['individu_kelompok'];
			$data['jumlah_peserta'] = $_POST['jumlah_peserta'];
			$data['file_sertifikat'] = $path.$filename;
			$data['mahasiswa_nim'] = $_POST['mahasiswa_nim'];
			
			$retr = $this->customguzzle->postBasicToken('PrestasiService/createPrestasi', 'application/json', json_encode($data));
		}
		else{
			$data['nama_prestasi'] = $_POST['nama_prestasi'];
			$data['tingkat'] = $_POST['tingkat'];
			$data['capaian'] = $_POST['capaian'];
			$data['nomor_sertifikat'] = $_POST['nomor_sertifikat'];
			$data['tahun_perolehan'] = $_POST['tahun_perolehan'];
			$data['jumlah_penghargaan'] = $_POST['jumlah_penghargaan'];
			$data['lembaga_pemberi'] = $_POST['lembaga_pemberi'];
			$data['individu_kelompok'] = $_POST['individu_kelompok'];
			$data['jumlah_peserta'] = $_POST['jumlah_peserta'];
			$data['file_sertifikat'] = 'empty';
			$data['mahasiswa_nim'] = $_POST['mahasiswa_nim'];
	
			$retr = $this->customguzzle->postBasicToken('PrestasiService/createPrestasi', 'application/json', json_encode($data));

		}

		if (json_decode($retr['data'])->responseCode == "00") {
			$this->session->set_flashdata('msg', 'sukses');
		} else {
			$this->session->set_flashdata('msg', 'gagal');
		}

		header("Location: " . site_url('Prestasi_Mahasiswa'));
	}

	public function storeMapres(){
		$data = array();
		$filename = '';

		$config = array(
			'upload_path'=>'uploads/sertifikat/',
			'allowed_types'=>'png|jpg|pdf|jpeg',
			'file_name'=>'sertif'.$_POST['nim'].date('dmy'),
			'overwrite'=>'true',
			'max_size'=>2048
		);

		$this->upload->initialize($config);

		if ($this->upload->do_upload('file_kti'))
		{
			$data_upload = $this->upload->data();
			$filename = $data_upload['file_name'];
			$path = $data_upload['upload_path'];
			$data['nim'] = $_POST['nim'];
			$data['file_kti'] = $path.$filename;
			// $data['tahun'] = date('Y');
			$data['skor_toefl'] = $_POST['skor_toefl'];
			// $data['created_at'] = date('Y-m-d h:i:s');
			// $data['updated_at'] = date('Y-m-d h:i:s');
			
			$retr = $this->customguzzle->postBasicToken('PrestasiService/createMapres', 'application/json', json_encode($data));
		}
		else{
			$data['nim'] = $_POST['nim'];
			// $data['tahun'] = date('Y');
			$data['skor_toefl'] = $_POST['skor_toefl'];
			// $data['created_at'] = date('Y-m-d h:i:s');
			// $data['updated_at'] = date('Y-m-d h:i:s');
	
			$retr = $this->customguzzle->postBasicToken('PrestasiService/createMapres', 'application/json', json_encode($data));

		}

		if (json_decode($retr['data'])->responseCode == "00") {
			$this->session->set_flashdata('msg', 'sukses');
		} else {
			$this->session->set_flashdata('msg', 'gagal');
		}

		header("Location: " . site_url('Prestasi_Mahasiswa/registerMapres'));
	}

	public function registerMapres()
	{
		$data['title'] = 'Modul Prestasi';
		$content['data'] = $this->getData($this->session->userdata('nim'));
		$content['datamhs'] = $this->getDataMhs($this->session->userdata('nim'));
		$content['data_mps'] = $this->getDataMapres($this->session->userdata('nim'));
        $data['pages'] = $this->load->view('pages/prestasi/mahasiswa/registerMapres', array('main' => $content), true);
		$this->load->view('pages/prestasi/mahasiswa/master', array('main' => $data));
	}
	
	public function getData($id){
		$retr = null;
		if($id){
			$retr  = $this->customguzzle->getBasicToken('PrestasiService/getPrestasiByNimMhs/'.$id,'application/json');
		}

		return json_decode($retr['data'])->data;
	}

	public function getDataMapres($id){
		$retr = null;
		if($id){
			$retr  = $this->customguzzle->getBasicToken('PrestasiService/getMapresByNimMhs/'.$id,'application/json');
		}

		return json_decode($retr['data'])->data;
	}

	public function getDataMhs($id){
		$retr = null;
		if($id){
			$retr  = $this->customguzzle->getBasicToken('PrestasiService/getMahasiswa/'.$id,'application/json');
		}

		return json_decode($retr['data'])->data;
	}
}
