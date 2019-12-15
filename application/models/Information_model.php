<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Information_model extends CI_Model{

	public function __construct() 
	{	
		parent::__construct();
	}

	public function get_tcp_data($count=10,$offset=0) 
	{
		$this->db->select("*");
		$this->db->from('tcp_data');
		$this->db->limit($count,$offset);
		$this->db->order_by('time','DESC');
		$query=$this->db->get();

		return $query->result_array();
	}

	public function get_open_door($count=10,$offset=0) 
	{
		$this->db->select("*");
		$this->db->from('open_door');
		$this->db->limit($count,$offset);
		$this->db->order_by('time','DESC');
		$query=$this->db->get();

		return $query->result_array();
	}

	public function count_tcp_data() 
	{
		return $this->db->count_all('tcp_data');
	}

	public function count_open_door() 
	{
		return $this->db->count_all('open_door');
	}

	public function get_allow()
	{
		$this->db->select("*");
		$this->db->from('allow');
		$query=$this->db->get();
		$query=$query->result_array();

		foreach ($query as $key => $value) {
			$query[$key]['operation']='<a href="'.site_url("white_list/delete")."?id=".$value["id"].'" class="btn btn-primary"><i class="fa fa-hand-o-right"></i> 删除</a>';
		}

		return $query;
	}

	public function insert_allow($card_id)
	{
		$data = array('allow_card_id' => $card_id);
		$this->db->insert('allow', $data);
	}

	public function delete_allow($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('allow');
	}
}