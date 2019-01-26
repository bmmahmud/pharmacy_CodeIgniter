<?php

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Dhaka');

class Delete extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('CommonModel');
	}

	public function medicine_presentation($id) {
		if ($this->session->userdata('username') != '') {
			$this->CommonModel->delete_info('record_id', $id, 'create_medicine_presentation');
			redirect('ShowForm/create_medicine_presentation/delete', 'refresh');
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
}
