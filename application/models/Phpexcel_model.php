<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Phpexcel_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function ekspor()
    {
        $this->db->select('*');
        $this->db->from('tabel_pesan');
        $query = $this->db->get();
        return $query->result();
    }

	 public function upload_data($filename){
        ini_set('memory_limit', '-1');
        $inputFileName = './asset/donlot/'.$filename;
        try {
        $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
        } catch(Exception $e) {
        die('Error loading file :' . $e->getMessage());
        }
 
        $worksheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
        $numRows = count($worksheet);
 
        for ($i=2; $i < ($numRows+1) ; $i++) { 
 
            $ins = array (
                    "id"                => $worksheet[$i]["A"],
                    "makanan"           => $worksheet[$i]["B"],
                    "minuman"           => $worksheet[$i]["C"],
                    "jumlah makanan"    => $worksheet[$i]["D"],
                    "jumlah minuman"    => $worksheet[$i]["E"],
                    "harga makanan"     => $worksheet[$i]["F"],
                    "harga minuman"     => $worksheet[$i]["G"]
                   );
 
            $this->db->insert('tabel_pesan', $ins);
        }
    }

}

/* End of file Phpexcel_model.php */
/* Location: ./application/models/Phpexcel_model.php */