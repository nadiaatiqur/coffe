<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cafe extends CI_Model {

	public function pegawai($table)
		{
			return $this->db->get('pegawai');
		}	

	public function input($table,$data)
	{
		$this->db->insert($table,$data);
	}

	public function hapus_daftar($table,$where)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

}

/* End of file m_cafe.php */
/* Location: ./application/models/m_cafe.php */