<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class White_list extends CI_Controller {

	protected $page_size = 10;

	public function index($per_page = 1)
	{
		$this->load->model('Information_model');
		$this->load->library('table');

		$template = array('table_open'  => ' <table width="563" class="table">');
		$this->table->set_template($template);
		$this->table->set_heading('ID', '允许的卡号','操作');
		$table=$this->table->generate($this->Information_model->get_allow());

		$data['table'] = $table;

		$this->load->view('template/header');
		$this->load->view('white_list' , $data);
		$this->load->view('template/footer');
	}

	public function add()
	{
		$this->load->model('Information_model');

		$card_id = $this->input->post('card_id',TRUE);
		$this->Information_model->insert_allow($card_id);

		$data['alert_information']="白名单信息加入成功！ o(*￣▽￣*)ブ";
		$data['href']='white_list';
		$this->load->view('template/alert_and_location_href',$data);
	}

	public function delete()
	{
		$this->load->model('Information_model');

		$id = $this->input->get('id',TRUE);
		$this->Information_model->delete_allow($id);

		$data['alert_information']="删除信息成功！ o(*￣▽￣*)ブ";
		$data['href']='white_list';
		$this->load->view('template/alert_and_location_href',$data);
	}
}