<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('menu_model');
		$this->load->model('activities_model');
		$this->load->model('oversea_jobs_model');
	}


	public function index()
	{
		$data['activities'] = $this->activities_model->getAll();
		$data['country_lists'] = $this->menu_model->get_country();
		$data['oversea_jobs'] = $this->oversea_jobs_model->get_oversea_jobs();
		$this->load->view('welcome_message', $data);
	}
}
