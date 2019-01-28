<?php
/**
 * Created by PhpStorm.
 * User: bmmah
 * Date: 1/25/2019
 * Time: 11:32 PM
 */

class ShowForm extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->model('CommonModel');
	} // Load Common Model

	public function create_medicine_presentation($msg) {
		if ($this->session->userdata('username') != '') {
			$data['all_value'] = $this->CommonModel->get_all_info('create_medicine_presentation');
			$data['msg'] = $msg;
			$this->load->view("header");
			$this->load->view("Create_Option/medicine_presentation",$data);
			$this->load->view("footer");
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	public function create_generic_name($msg) {
		if ($this->session->userdata('username') != '') {
			$data['all_value'] = $this->CommonModel->get_all_info('create_generic_name');
			$data['msg'] = $msg;
			$this->load->view("header");
			$this->load->view("Create_Option/generic_name",$data);
			$this->load->view("footer");
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	public function create_medicine_name($msg) {
		if ($this->session->userdata('username') != '') {
			$data['all_generic'] = $this->CommonModel->get_all_info('create_generic_name');
			$data['all_value'] = $this->CommonModel->get_all_info('create_medicine_name');
			$data['msg'] = $msg;
			$this->load->view("header");
			$this->load->view("Create_Option/medicine_name",$data);
			$this->load->view("footer");
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
}
