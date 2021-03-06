<?php

class User_model extends CI_model{

	public $table = 'user';
	public $id    = 'id';

	public function ambil_data($id)

{
	$this->db->where('username', $id);
	return $this->db->get('user')->row();
}

   public function tampil_data($table)
   {
   	return $this->db->get($table);
   }

   public function insert_data($data,$table)
   {
   	$this->db->insert($table,$data);
   }

   public function hapus_data($whare,$table)
{
	$this->db->where($whare);
	$this->db->delete($table);
}

public function edit_data($where,$table){

	return $this->db->get_where($table,$where);

}

public function update_data($where,$data,$table)
  {
  	$this->db->where($where);
  	$this->db->update($table,$data);
  }

}