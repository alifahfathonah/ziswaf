<?php 
 
class ModelAkun extends CI_Model{	
	function daftarAkun($data){
		$this->db->insert('user', $data);
	}	

	function login($where){
		return $this->db->get_where('user',$where);
	}

	function get(){
		return $this->db->get('user');
	}

	function get_where($username){
		$this->db->where('username', $username);
		return $this->db->get('user');
	}

	function cek($username,$email){
		$this->db->where('username',$username);
		$this->db->where('email',$email);
		return $this->db->get('user');
	}

	function hapus($username){
		$this->db->where('username',$username);
		return $this->db->delete('user');
	}

	function ubah($data, $email){
		$this->db->where('email',$email);
		return $this->db->update('user',$data);
	}
}