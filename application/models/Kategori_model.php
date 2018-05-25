<?php
class kategori_model extends CI_Model{

	function kategori_list(){
		$hasil=$this->db->get('categories');
		return $hasil->result();
	}

	function save_kategori(){
		$data = array(
				'cate_id' 	=> $this->input->post('cate_id'), 
				'cate_name' 	=> $this->input->post('cate_name'), 
				'cate_desc' => $this->input->post('cate_desc'), 
			);
		$result=$this->db->insert('categories',$data);
		return $result;
	}

	function update_kategori(){
		$cate_id=$this->input->post('cate_id');
		$cate_name=$this->input->post('cate_name');
		$cate_desc=$this->input->post('cate_desc');

		$this->db->set('cate_name', $cate_name);
		$this->db->set('cate_desc', $cate_desc);
		$this->db->where('cate_id', $cate_id);
		$result=$this->db->update('categories');
		return $result;
	}

	function delete_kategori(){
		$cate_id=$this->input->post('cate_id');
		$this->db->where('cate_id', $cate_id);
		$result=$this->db->delete('categories');
		return $result;
	}
	
}