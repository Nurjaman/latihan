<?php
class Kategori extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('kategori_model');
	}
	function index(){
		$this->load->view('kategori_view');
	}

	function kategori_data(){
		$data=$this->kategori_model->kategori_list();
		echo json_encode($data);
	}

	function save(){
		$data=$this->kategori_model->save_kategori();
		echo json_encode($data);
	}

	function update(){
		$data=$this->kategori_model->update_kategori();
		echo json_encode($data);
	}

	function delete(){
		$data=$this->kategori_model->delete_kategori();
		echo json_encode($data);
	}

}