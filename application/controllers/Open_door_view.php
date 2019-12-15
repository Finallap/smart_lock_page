<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Open_door_view extends CI_Controller {

	protected $page_size = 10;

	public function index($per_page = 1)
	{
		$this->load->model('Information_model');
		$this->load->library('pagination');

		$config['base_url'] = site_url('open_door_view/index');
		$config['total_rows'] = $this->Information_model->count_open_door();
		$config['per_page'] = $this->page_size;

		$this->pagination->initialize($config);

		$data['all_count']=$this->Information_model->count_open_door();
		$data['pagination'] = $this->pagination->create_links();
		$data['page']=$per_page;
		$data['open_door_list']=$this->Information_model->get_open_door($this->page_size,($per_page-1)*$this->page_size);

		$this->load->view('template/header');
		$this->load->view('open_door_view',$data);
		$this->load->view('template/footer');
	}
}