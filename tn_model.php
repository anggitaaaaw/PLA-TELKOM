<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tn_model extends CI_Model {

	function __construct(){
			parent::__construct();
		}

		//cek keberadaan user di sistem
		function get_port(){
			$this->db->select('*');
			$this->db->from('port');
			return $this->db->get();
		}

			function get_merk(){
			$this->db->select('*');
			$this->db->from('merk');
			return $this->db->get();
		}
		
		function get_merk_by_id($id){
			$this->db->select('*');
			$this->db->from('merk');
			return $this->db->get();
		}
		function get_port_by_id($id){
			$this->db->select('*');
			$this->db->from('port');
			$this->db->where('id_port',$id);
			return $this->db->get();

		}

 	 function get_addressbook() {     
        $query = $this->db->get('port');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return FALSE;
        }
    }
 
    function insert_csv($data) {
        $this->db->insert('port', $data);
    }

    function update_port($id_port, $data){
			$this->db->where('id_port', $id_port);
			$this->db->update('port', $data);
	
	}

	function delete_nms($id_port){
		$this->db->where($id_port);
		$this->db->delete('port');
	}

}

/* End of file employee.php */
/* Location: ./application/models/employee.php */