<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tcp_view extends CI_Controller {

	protected $page_size = 10;

	public function index($per_page = 1)
	{
		$this->load->model('Information_model');
		$this->load->library('pagination');

		$config['base_url'] = site_url('tcp_view/index');
		$config['total_rows'] = $this->Information_model->count_tcp_data();
		$config['per_page'] = $this->page_size;

		$this->pagination->initialize($config);

		$data['all_count']=$this->Information_model->count_tcp_data();
		$data['pagination'] = $this->pagination->create_links();
		$data['page']=$per_page;
		$data['tcp_list']=$this->Information_model->get_tcp_data($this->page_size,($per_page-1)*$this->page_size);

		$this->load->view('template/header');
		$this->load->view('tcp_view',$data);
		$this->load->view('template/footer');
	}
}