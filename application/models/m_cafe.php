<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cafe extends CI_Model { 

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}

	public function pegawai($table)
		{
			return $this->db->get('pegawai');
		}	

	public function input($table,$data)
	{
		$this->db->insert($table,$data);
	}

	public function tampil_data()
	{
		return $this->db->get('tabel_pesan');
	}
	public function hapus_daftar($table,$where)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function edit_pegawai($table,$where)
	{
		return $this->db->get_where($table,$where);
	}

	public function update_daftar()
	{
		return $this->db->get('pegawai');
	}

	public function update($table,$where,$data)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function listing($table)
	{
		return $this->db->get($table)->result();
	}

	public function pdf($table)
	{
		return $this->db->get($table)->result();
	}

	public function menu($table)
		{
			return $this->db->get('menu');
		}

	public function input_menu($table,$data)
	{
		$this->db->insert($table,$data);
	}

<<<<<<< HEAD

=======
>>>>>>> 75054f6d28b9a253cb9153b8f9884e543238925f
	public function input_pesan($table,$data)
	{
		$this->db->insert($table,$data);
	}

<<<<<<< HEAD

=======
>>>>>>> 75054f6d28b9a253cb9153b8f9884e543238925f
	public function hapus_menu($table,$where)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function edit_menu($table,$where)
	{
		return $this->db->get_where($table,$where);
	}

	public function update_menu()
	{
		return $this->db->get('menu');
	}

	public function update_menucafe($table,$data,$where)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
<<<<<<< HEAD
=======

	public function grafik()
	{
		 $query = $this->db->query("SELECT * from tabel_pesan");
         
        if($query->num_rows() > 0){
            foreach($grap->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
	}
>>>>>>> 75054f6d28b9a253cb9153b8f9884e543238925f

}

/* End of file m_cafe.php */
/* Location: ./application/models/m_cafe.php */