<?php 

class Dbislem extends CI_Controller 
{

	public function index()
	{
		//row dersek biz bir kayıt
	    //result dersek tüm kayıtları dondurud
		$baglanti = $this->db->get("personel")->result();

		//print_r($baglanti);

		$viewData = array(
			'baglanti' => $baglanti 
		);		

		$this->load->view("dbislem",$viewData);
	}


	public function insertPage ()

	{ 
		$this->load->view("insert");
	}

	public function insert ()

	{ 
		
	$title = $this->input->post("title");
	$detail = $this->input->post("detail");
	// echo $title . $detail; ekranda gosterdik insert ile tıptıkısını yaptık yani suana kadar

	$eklemeislemi = array(
		'title' => $title,
		'detail' =>$detail 
	);
	
	
	$bastır = $this->db->insert("personel",$eklemeislemi);

	if($bastır)
	{
		redirect(base_url("dbislem"));
	}
	else{echo "kayıt başarısız";}

	}
	

	public function editPage ($id)

	{ 
		//echo $id;

		$rows = $this->db
		->where("id",$id)
		->get("personel")
		->row();

		//print_r($row);
				
	    $viewData = array(
	    	'rows' => $rows);

		$this->load->view("duzenle",$viewData);


		
	}

	public function update ($id)

	{ 

	$detail = $this->input->post("detail");
	$title = $this->input->post("title");

	$guncellemeislemi = array(
		'title' => $title,
		'detail' => $detail 
);


	$bastır = $this
	->db
	->where("id",$id) 
	->update("personel",$guncellemeislemi);

	if($bastır)
	{
		redirect(base_url("dbislem"));
	}
	else{echo "kayıt başarısız";}


	}

	

	

	public function delete ($id)

	{ 



		$sil = $this->db->where("id",$id)
		->delete("personel");

		//8 inci kayıtı sildirmiş olduk

		if($sil)
	{
		redirect(base_url("dbislem"));
	}
	else{echo "kayıt başarısız";}

	
	}
	
}