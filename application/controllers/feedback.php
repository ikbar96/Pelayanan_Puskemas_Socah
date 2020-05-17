<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class feedback extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('model_puskesmas');
		$this->load->helper('url');
		date_default_timezone_set('Asia/Jakarta');
 
	}
	public function index()
	{
		$this->load->view('feedback');
    }
    public function Tooperator()
	{
		$this->load->view('login');
	}
	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'katasandi' => $password
			);
		$cek = $this->model_puskesmas->dbwhere("login",$where);
		if(!empty($cek)){
			
			foreach($cek as $d){
				$id = $d->id;
			}
			$data_session = array(
				'id' => $id,
				'username' => $username,
				'password' => $password
				);
 
			$this->session->set_userdata($data_session);
 
			$judul=array("front_office","rekam_medis","kia","lansia","ifa","gigi","mtbs","bp","vk","tb","ugd","paramedik","konsul","indikasi_lab","obat","kasir");

			$data['hasil'] = $this->model_puskesmas->tampil_data_hasil();
			$datanya = $this->model_puskesmas->tampil_data_hasil();
			$banyak=0;
			$hasilnya=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
			foreach($datanya as $row){
				$banyak++;
				$hasilnya[0]=$hasilnya[0]+$row->front_office;
				$hasilnya[1]=$hasilnya[1]+$row->rekam_medik;
				$hasilnya[2]=$hasilnya[2]+$row->poli_kia;
				$hasilnya[3]=$hasilnya[3]+$row->poli_lansia;
				$hasilnya[4]=$hasilnya[4]+$row->poli_ifa;
				$hasilnya[5]=$hasilnya[5]+$row->poli_gigi;
				$hasilnya[6]=$hasilnya[6]+$row->poli_mtbs;
				$hasilnya[7]=$hasilnya[7]+$row->poli_bp;
				$hasilnya[8]=$hasilnya[8]+$row->poli_vk;
				$hasilnya[9]=$hasilnya[9]+$row->poli_tb;
				$hasilnya[10]=$hasilnya[10]+$row->ugd;
				$hasilnya[11]=$hasilnya[11]+$row->paramedik;
				$hasilnya[12]=$hasilnya[12]+$row->konsol;
				$hasilnya[13]=$hasilnya[13]+$row->indikasi_lab;
				$hasilnya[14]=$hasilnya[14]+$row->obat;
				$hasilnya[15]=$hasilnya[15]+$row->kasir;
			}
			for($x=0;$x<16;$x++){
				$hasilnya[$x]=$hasilnya[$x]/$banyak;
			}	
			$data['label'] = $judul;
			$data['nilai'] = $hasilnya;
			$this->load->view('hasil',$data);
 
		}else{
			$this->load->view('feedback');
		}
	}
	public function lookhasil()
	{

		$judul=array("front_office","rekam_medis","kia","lansia","ifa","gigi","mtbs","bp","vk","tb","ugd","paramedik","konsul","indikasi_lab","obat","kasir");

		$data['hasil'] = $this->model_puskesmas->tampil_data_hasil();
		$datanya = $this->model_puskesmas->tampil_data_hasil();
		$banyak=0;
        $hasilnya=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
		foreach($datanya as $row){
			$banyak++;
			$hasilnya[0]=$hasilnya[0]+$row->front_office;
			$hasilnya[1]=$hasilnya[1]+$row->rekam_medik;
			$hasilnya[2]=$hasilnya[2]+$row->poli_kia;
			$hasilnya[3]=$hasilnya[3]+$row->poli_lansia;
			$hasilnya[4]=$hasilnya[4]+$row->poli_ifa;
			$hasilnya[5]=$hasilnya[5]+$row->poli_gigi;
			$hasilnya[6]=$hasilnya[6]+$row->poli_mtbs;
			$hasilnya[7]=$hasilnya[7]+$row->poli_bp;
			$hasilnya[8]=$hasilnya[8]+$row->poli_vk;
			$hasilnya[9]=$hasilnya[9]+$row->poli_tb;
			$hasilnya[10]=$hasilnya[10]+$row->ugd;
			$hasilnya[11]=$hasilnya[11]+$row->paramedik;
			$hasilnya[12]=$hasilnya[12]+$row->konsol;
			$hasilnya[13]=$hasilnya[13]+$row->indikasi_lab;
			$hasilnya[14]=$hasilnya[14]+$row->obat;
			$hasilnya[15]=$hasilnya[15]+$row->kasir;
		}
		for($x=0;$x<16;$x++){
			$hasilnya[$x]=$hasilnya[$x]/$banyak;
		}
		$data['label'] = $judul;
		$data['nilai'] = $hasilnya;
		$this->load->view('hasil',$data);
	}
	public function cetak()
	{
		$data['hasil'] = $this->model_puskesmas->tampil_data_hasil();
		$this->load->view('cetak',$data);
	}
	public function lookakun()
	{
		$data['hasil'] = $this->model_puskesmas->tampil_data_pengguna();
		$this->load->view('lookakun',$data);
	}
	public function adduser()
	{
		$data = array( 
			'username'=>$this->input->post('un'),
			'katasandi'=>$this->input->post('pass'),
			);
			$this->model_puskesmas->input_data($data,'login');
		$data['hasil'] = $this->model_puskesmas->tampil_data_pengguna();
		$this->load->view('lookakun',$data);
	}
	public function edit()
	{
		$data["id"] = $this->uri->segment('3');
		$this->load->view('edit',$data);
	}
	public function edituser()
	{
		$datam = array( 
			'id'=>$this->input->post('id'),
			'katasandi'=>$this->input->post('pl')
		);
		$cek = $this->model_puskesmas->dbwhere("login",$datam);
		if(!empty($cek)){
			$datam = array( 
				'username'=>$this->input->post('un'),
				'katasandi'=>$this->input->post('pb')
			);
			$wh = array( 
				'id'=>$this->input->post('id')
			);
			$this->model_puskesmas->update_data($wh,$datam,'login');
		}
		$data['hasil'] = $this->model_puskesmas->tampil_data_pengguna();
		$this->load->view('lookakun',$data);
	}
	public function delete()
	{
		$data["id"] = $this->uri->segment('3');
		$this->load->view('hapus',$data);
	}
	public function deleteuser()
	{
		$datam = array( 
			'id'=>$this->input->post('id_user'),
			'katasandi'=>$this->input->post('pass')
		);
		$cek = $this->model_puskesmas->dbwhere("login",$datam);
		if(!empty($cek)){
			$datam = array( 
				'id'=>$this->input->post('id')
				);
			$this->model_puskesmas->delete_data($datam,'login');
		}
		$data['hasil'] = $this->model_puskesmas->tampil_data_pengguna();
		$this->load->view('lookakun',$data);
	}
	public function add()
	{
		$this->load->view('tambah');
	}
	public function tambahdatahasil()
	{
		$poli=array("kia","lansia","ifa","gigi","mtbs","bp","vk","tb");
		$hasilpoli=array(2,2,2,2,2,2,2,2);
		for($x=0;$x<8;$x++){
			if($this->input->post('poli')==$poli[$x]){
				$hasilpoli[$x]=$this->input->post('rating_poli');
			}
		};
		$data = array( 
		'front_office'=>$this->input->post('rating_fo'),
		'rekam_medik'=>$this->input->post('rating_rekmed'),
		'poli_gigi'=>$hasilpoli[3],
		'poli_lansia'=>$hasilpoli[1],
		'poli_kia'=>$hasilpoli[0],
		'poli_ifa'=>$hasilpoli[2],
		'poli_mtbs'=>$hasilpoli[4],
		'poli_vk'=>$hasilpoli[6],
		'poli_bp'=>$hasilpoli[5],
		'poli_tb'=>$hasilpoli[7],
		'ugd'=>$this->input->post('rating_ugd'),
		'paramedik'=>$this->input->post('rating_param'),
		'konsol'=>$this->input->post('rating_konsul'),
		'indikasi_lab'=>$this->input->post('rating_indikasi'),
		'obat'=>$this->input->post('rating_obat'),
		'kasir'=>$this->input->post('rating_kasir'),
		'kritiksaran'=>$this->input->post('komen'),
		'waktu'=>date('Y-m-d h:i:s')
		);
		$this->model_puskesmas->input_data($data,'hasil');
		$this->load->view('feedback');
	}
}
