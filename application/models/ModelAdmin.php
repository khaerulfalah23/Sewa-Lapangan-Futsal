<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelAdmin extends CI_Model
{
    public function get_data($table,$limit,$start,$keyword = null,$nama){
        if ($keyword) {
            $this->db->like($nama,$keyword);
        }
		return $this->db->get($table,$limit,$start);
	}

    public function get_data_where($where,$table)
    {
        return $this->db->get_where($table,$where);
    }

    public function insert_data($data,$table){
		$this->db->insert($table,$data);
	}

    public function update_data($where,$data,$table){
		$this->db->WHERE($where);
		$this->db->UPDATE($table,$data);
	}

    public function delete_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

    public function getData($table)
    {
        return $this->db->get($table);
    }
}
