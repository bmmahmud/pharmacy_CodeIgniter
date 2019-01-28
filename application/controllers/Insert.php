<?php
/**
 * Created by PhpStorm.
 * User: bmmah
 * Date: 1/25/2019
 * Time: 11:39 PM
 */

class Insert extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->model('CommonModel');
	}
	public function medicine_presentation() {
		if ($this->session->userdata('username') != '') { //Check Login
			$this->form_validation->set_rules('medicine_presentation', 'Medicine Presentation', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				redirect('ShowForm/create_medicine_presentation/empty', 'refresh');
			} else {
				$medicine_presentation = $this->input->post('medicine_presentation');
				$insert_data = array(
					'medicine_presentation' => $medicine_presentation
				);
				$this->CommonModel->insert_data('create_medicine_presentation', $insert_data); //insert data to table
				redirect('ShowForm/create_medicine_presentation/created', 'refresh');
			}
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	public function generic_name() {
		if ($this->session->userdata('username') != '') { //Check Login
			$this->form_validation->set_rules('generic_name', 'Generic Name', 'trim|required');// check form validation

			if ($this->form_validation->run() == FALSE) {
				redirect('ShowForm/create_generic_name/empty', 'refresh'); //If form not  validate
			} else {
				$generic_name = $this->input->post('generic_name');
				$insert_data = array(
					'generic_name' => $generic_name
				);
				$this->CommonModel->insert_data('create_generic_name', $insert_data); //insert data to table
				redirect('ShowForm/create_generic_name/created', 'refresh');
			}
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	public function medicine_name() {
		if ($this->session->userdata('username') != '') { //Check Login
			$this->form_validation->set_rules('generic_name', 'Generic Name', 'trim|required'); // check form validation
			$this->form_validation->set_rules('medicine_name', 'Medicine Name', 'trim|required'); // check form validation
			if ($this->form_validation->run() == FALSE) {
				redirect('ShowForm/create_generic_name/empty', 'refresh'); //If form not  validate
			} else {
				$generic_name = $this->input->post('generic_name');
				$medicine_name = $this->input->post('medicine_name');
				$insert_data = array(
					'generic_name' => $generic_name,
					'medicine_name' => $medicine_name
				);
				$this->CommonModel->insert_data('create_medicine_name', $insert_data); //insert data to table
				redirect('ShowForm/create_medicine_name/created', 'refresh');
			}
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
}
