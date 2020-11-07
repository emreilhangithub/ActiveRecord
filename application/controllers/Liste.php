<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Liste extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model("ListeModel");
	}


	public function index()
	{

	$listele = $this->ListeModel->select();

	$viewData = array(
		'listele' => $listele);

			$this->load->view('Liste',$viewData); 
	}


	public function delete($id)
	{

		$where = array(
			'id' => $id			
		);

		$delete = $this->ListeModel->delete($where);

		redirect(base_url("Liste"));
	}

	public function insertPage()
	{
		
		$this->load->view('Ekle'); 
	}

	public function insert()
	{
		$isim = $this->input->post("isim");
		$soyisim =  $this->input->post("soyisim");
		$yas =  $this->input->post("yas");
		$mail =  $this->input->post("mail");

		$data = array(
			'isim' => $isim, 
			'soyisim' => $soyisim,
			'yas' => $yas,
			'mail' => $mail
		);

		$insert = $this->ListeModel->insert($data);	

		if ($insert) {
			redirect(base_url("Liste"));
		}
		else 
			{ redirect(base_url("insertPage")); }

	}

	public function editPage($id)
	{

		$where = array(
			'id' => $id			
		);

		$listele = $this->ListeModel->edit($where);

		$viewData = array('listele' => $listele);		

		$this->load->view("Duzenle",$viewData);
	}

	public function update($id)
	{
		$isim = $this->input->post("isim");
		$soyisim = $this->input->post("soyisim");
		$yas =  $this->input->post("yas");
		$mail =  $this->input->post("mail");

		$data = array(
			'isim' => $isim, 
			'soyisim' => $soyisim,
			'yas' => $yas,
			'mail' => $mail
		);

		$where = array(
			'id' => $id			
		);


		$update = $this->ListeModel->update($where,$data);

		if ($update) {
			redirect(base_url("Liste"));
		}
		else 
			{ redirect(base_url("Liste/update/$id")); }

		
	}
}
