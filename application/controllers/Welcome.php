<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model('MSudi');
	}


	public function index()
	{
		$data['content']='VBeranda';
		$this->load->view('welcome_message',$data);
	}


	public function blokKavling()
	{
		$data['DataKavling']=$this->MSudi->GetData('blok_kavling');
		$data['content']='kavling/VBlokKavling';
		$this->load->view('welcome_message',$data);
	}
	public function blokKavlingInsert()
	{
		$add['nama_blok'] = $this->input->post('nama_blok');
		$add['no_blok'] = $this->input->post('no_blok');
		$add['lokasi'] = $this->input->post('lokasi');
		$this->MSudi->AddData('blok_kavling', $add);
		redirect('Welcome/blokKavling', 'refresh');
	}
	public function blokKavlingUpdate()
	{
		$kode = $this->input->post('kd_blok');
		$update['nama_blok'] = $this->input->post('nama_blok');
		$update['no_blok'] = $this->input->post('no_blok');
		$update['lokasi'] = $this->input->post('lokasi');
		$this->MSudi->UpdateData('blok_kavling', 'kd_blok', $kode, $update);
		redirect(site_url('Welcome/blokKavling'));
	}
	public function blokKavlingDelete()
	{
		$kode = $this->uri->segment(3);
		$this->MSudi->DeleteData('blok_kavling','kd_blok',$kode);
		redirect(site_url('Welcome/blokKavling'));	
	}




	public function penduduk()
	{
		$data['DataPenduduk']=$this->MSudi->GetData('penduduk');
		$data['Select']=$this->MSudi->GetKavling('penduduk');
		$data['content']='penduduk/VPenduduk';
		$this->load->view('welcome_message',$data);
	}
	public function pendudukInsert()
	{
		$add['nik'] = $this->input->post('nik');
		$add['nama'] = $this->input->post('nama');
		$add['tempat_lahir'] = $this->input->post('tempat_lahir');
		$add['tgl_lahir'] = $this->input->post('tgl_lahir');
		$add['status1'] = $this->input->post('status1');
		$add['status2'] = $this->input->post('status2');
		$add['status3'] = $this->input->post('status3');
		$add['kd_blok'] = $this->input->post('kd_blok');
		$this->MSudi->AddData('penduduk', $add);
		redirect('Welcome/penduduk', 'refresh');
	}
	public function pendudukUpdate()
	{
		$kode = $this->input->post('kd_penduduk');
		$update['nik'] = $this->input->post('nik');
		$update['nama'] = $this->input->post('nama');
		$update['tempat_lahir'] = $this->input->post('tempat_lahir');
		$update['tgl_lahir'] = $this->input->post('tgl_lahir');
		$update['status1'] = $this->input->post('status1');
		$update['status2'] = $this->input->post('status2');
		$update['status3'] = $this->input->post('status3');
		$update['kd_blok'] = $this->input->post('kd_blok');
		$this->MSudi->UpdateData('penduduk', 'kd_penduduk', $kode, $update);
		redirect(site_url('Welcome/penduduk'));
	}
	public function pendudukDelete()
	{
		$kode = $this->uri->segment(3);
		$this->MSudi->DeleteData('penduduk','kd_penduduk',$kode);
		redirect(site_url('Welcome/penduduk'));	
	}
}
