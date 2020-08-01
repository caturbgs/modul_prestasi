<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prestasi extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}


	public function testPDF()
	{
		$this->load->library('Mypdf');
		$this->mypdf->generate('pages/prestasi/mahasiswa/laporan_prestasi');
	}

	public function testForm()
	{
		
		$data['pages'] = $this->load->view('pages/prestasi/mahasiswa/coba_form');
		// $this->load->view('master',array('main'=>$data));
	}

	public function index()
	{
		$data['title'] = 'Modul Prestasi';
		$data['sidebar'] = $this->load->view('layouts/sidebar','',true);

		$content['data'] = $this->getData('');
		// print_r($content['data']);
		$data['pages'] = $this->load->view('pages/prestasi/admin/dashboard', array('main' => $content), true);
		$this->load->view('master', array('main' => $data));
	}

	public function approval($id)
	{
		$data['title'] = 'Modul Prestasi';
		$data['sidebar'] = $this->load->view('layouts/sidebar', '', true);

		$content['data'] = $this->getData($id);
		$data['pages'] = $this->load->view('pages/prestasi/admin/approval', array('main' => $content), true);
		$this->load->view('master', array('main' => $data));
	}

	public function storeApproval()
	{
		$data = array();
		$formSubmit = $this->input->post('submitForm');

		if ($formSubmit == 'Terima') {
			$data['status'] = 'accept';
		} else {
			$data['status'] = 'refuse';
		}

		$retr = $this->customguzzle->putBasicToken('PrestasiService/approvePrestasi/' . $_POST['id'], 'application/json', json_encode($data));
		if (json_decode($retr['data'])->responseCode == "00") {
			$this->session->set_flashdata('msg', 'sukses');
		} else {
			$this->session->set_flashdata('msg', 'gagal');
		}

		header("Location: " . site_url('prestasi'));
	}
	
	// public function listPrestasi()
	// {
	// 	$data['title'] = 'Modul Prestasi';

	// 	// $content['data'] = $this->getData($this->session->userdata('id'));
	// 	$content['data'] = $this->getData(1);
	// 	$data['pages'] = $this->load->view('pages/prestasi/mahasiswa/listPrestasi', array('main' => $content), true);
	// 	$this->load->view('master',array('main'=>$data));
	// }

	public function getData($id)
	{
		$retr = null;
		if ($id) {
			$retr  = $this->customguzzle->getBasicToken('PrestasiService/getPrestasiById/' . $id, 'application/json');
		} else {
			$retr  = $this->customguzzle->getBasicToken('PrestasiService/getPrestasi', 'application/json');
		}

		return json_decode($retr['data'])->data;
	}


	public function reportBerprestasi()
	{
		$data['title'] = 'Modul Prestasi';
		$data['sidebar'] = $this->load->view('layouts/sidebar', '', true);
		$data['pages'] = $this->load->view('pages/prestasi/admin/reportBerprestasi', '', true);
		$this->load->view('master', array('main' => $data));
	}

	// public function registerPrestasi()
	// {
	// 	$data['title'] = 'Modul Prestasi';
	// 	$data['sidebar'] = $this->load->view('layouts/sidebar','',true);
	// 	$data['pages'] = $this->load->view('pages/prestasi/mahasiswa/registerPrestasi', '', true);
	// 	$this->load->view('master', array('main' => $data));
	// }

	public function penilaianJuri()
	{
		$data['title'] = 'Modul Prestasi';
		$data['sidebar'] = $this->load->view('layouts/sidebar', '', true);
		$data['pages'] = $this->load->view('pages/prestasi/juri/penilaianJuri', '', true);
		$this->load->view('master', array('main' => $data));
	}

	// public function registerPrestasiv2()
	// {
	// 	$data['title'] = 'Modul Prestasi';
	// 	$data['sidebar'] = $this->load->view('layouts/sidebar','',true);
	//     $data['pages'] = $this->load->view('pages/prestasi/admin/registerPrestasiV2','',true);
	// 	$this->load->view('master',array('main'=>$data));
	// }

	// public function create_prestasi(){

	// 	$filename = date("YmdHis");
	// 	$config = array(
	// 		'upload_path'=>'upload/foto_sertifikat/',
	// 		'allowed_types'=>'jpg|png|jpeg',
	// 		'max_size'=>2086,
	// 		'file_name'=>$filename
	// 	);
	// 	$this->upload->initialize($config);
	// 	$this->upload->do_upload('file_pic');
	// 	$finfo = $this->upload->data();
	// 	$file_pic = $finfo['file_name'];

	// 	// $nama_lomba								= $this->input->post('nama_lomba');
	// 	// $tempat_pelaksanaan						= $this->input->post('tempat_pelaksanaan');
	// 	// $tingkat_lomba							= $this->input->post('tingkat_lomba');
	// 	// $capaian								= $this->input->post('capaian');
	// 	// $no_sertifikat							= $this->input->post('no_sertifikat');
	// 	// $tahun_perolehan						= $this->input->post('tahun_perolehan');
	// 	// $lembaga_pemberi						= $this->input->post('lembaga_pemberi');
	// 	// $jumlah_penghargaan						= $this->input->post('jumlah_penghargaan');
	// 	// $individu_kelompok						= $this->input->post('individu_kelompok');
	// 	// $jumlah_peserta							= $this->input->post('jumlah_peserta');
	// 	$status 	= "waiting";
	// 	$nim		= "4617010044";							

	// 	$data = array(
	// 		'nama_prestasi' 		=> $this->input->post('nama_lomba'),
	// 		'capain'				=> $this->input->post('capaian'),
	// 		'tingkat'				=> $this->input->post('tingkat_lomba'),
	// 		'file_sertifikat'		=> $file_pic,
	// 		'tahun_perolehan'		=> $this->input->post('tahun_perolehan'),
	// 		'lembaga_pemberi'		=> $this->input->post('lembaga_pemberi'),
	// 		'jumlah_penghargaan'	=> $this->input->post('jumlah_penghargaan'),
	// 		'individu_kelompok'		=> $this->input->post('individu_kelompok'),
	// 		'jumlah_peserta'		=> $this->input->post('jumlah_peserta'),
	// 		'nim'					=> $nim,
	// 	);

	// 	$this->Prestasi_m->input_data($data,'prestasi');
	// 	redirect('Prestasi/registerPrestasi');

	// }
	// public function registerMapres()

	// {
	// 	$data['title'] = 'Modul Prestasi';
	// 	// $data['sidebar'] = $this->load->view('layouts/sidebar','',true);
	// 	$content['data'] = $this->getData(1);
	// 	$data['pages'] = $this->load->view('pages/prestasi/mahasiswa/registerMapres', array('main' => $content), true);
	// 	$this->load->view('pages/prestasi/mahasiswa/master', array('main' => $data));
	// }
}
