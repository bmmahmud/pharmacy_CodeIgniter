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

	// Create Option Start
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
	public function product_category() {
		if ($this->session->userdata('username') != '') { //Check Login
			$this->form_validation->set_rules('product_category', 'Product Category', 'trim|required'); // check form validation
			if ($this->form_validation->run() == FALSE) {
				redirect('ShowForm/create_product_category/empty', 'refresh'); //If form not  validate
			} else {

				$product_category= $this->input->post('product_category'); //get data from file to variable
				$insert_data = array(
					'product_category' => $product_category //insert data to column
				);
				$this->CommonModel->insert_data('create_product_category', $insert_data); //insert data to table
				redirect('ShowForm/create_product_category/created', 'refresh'); //after inserting back to the page
			}
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	public function product_name() {
		if ($this->session->userdata('username') != '') { //Check Login
			$this->form_validation->set_rules('product_category', 'Product Category', 'trim|required'); // check form validation
			$this->form_validation->set_rules('product_name', 'Product Name', 'trim|required'); // check form validation
			if ($this->form_validation->run() == FALSE) {
				redirect('ShowForm/create_product_name/empty', 'refresh'); //If form not  validate
			} else {

				$product_category= $this->input->post('product_category'); //get data from file to variable
				$product_name= $this->input->post('product_name'); //get data from file to variable
				$insert_data = array(
					'product_category' => $product_category,//insert data to column
					'product_name' => $product_name //insert data to column
				);
				$this->CommonModel->insert_data('create_product_name', $insert_data); //insert data to table
				redirect('ShowForm/create_product_name/created', 'refresh'); //after inserting back to the page
			}
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	public function supplier() {
		if ($this->session->userdata('username') != '') { //Check Login
			$this->form_validation->set_rules('company_name', 'Company Name', 'trim|required'); // check form validation

			if ($this->form_validation->run() == FALSE) {
				redirect('ShowForm/create_supplier/empty', 'refresh'); //If form not  validate
			} else {

				$company_name= $this->input->post('company_name'); //get data from file to variable
				$mobile= $this->input->post('mobile');			 				//get data from file to variable
				$address= $this->input->post('address'); 						//get data from file to variable
				$previous_due= $this->input->post('previous_due'); 	//get data from file to variable
				$insert_data = array(
					'company_name' => $company_name,//insert data to column
					'mobile' => $mobile,   						 //insert data to column
					'address' => $address,						//insert data to column
					'previous_due' => $previous_due	 //insert data to column
				);
				$this->CommonModel->insert_data('create_supplier', $insert_data); 			//insert data to table
				redirect('ShowForm/create_supplier/created', 'refresh'); 		//after inserting back to the page
			}
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	// Create Option End
	public function medicine_purchase_info() {
		if ($this->session->userdata('username') != '') { //Check Login
			$this->form_validation->set_rules('medicine_name', 'Medicine Name', 'trim|required'); // check form validation

			if ($this->form_validation->run() == FALSE) {
				redirect('ShowForm/medicine_purchase_info/empty', 'refresh'); //If form not  validate
			} else {

				$medicine_name= $this->input->post('medicine_name'); //get data from file to variable
				$generic= $this->input->post('generic');			 				//get data from file to variable
				$presentation= $this->input->post('presentation'); 						//get data from file to variable
				$supplier= $this->input->post('supplier'); 	//get data from file to variable
				$qty= $this->input->post('qty'); 	//get data from file to variable
				$unit_price= $this->input->post('unit_price'); 	//get data from file to variable
				$purchase_price= $this->input->post('purchase_price'); 	//get data from file to variable
				$unit_sales_price= $this->input->post('unit_sales_price'); 	//get data from file to variable
				$unit= $this->input->post('unit'); 	//get data from file to variable
				$purchase_paid= $this->input->post('purchase_paid'); 	//get data from file to variable
				$purchase_due= $this->input->post('purchase_due'); 	//get data from file to variable
				$ex_date= $this->input->post('ex_date'); 	//get data from file to variable
				$insert_data = array(
					'company_name' => $medicine_name,//insert data to column
					'mobile' => $generic,   						 //insert data to column
					'address' => $presentation,						//insert data to column
					'mobile' => $supplier,   						 //insert data to column
					'address' => $qty,
					'particulars' => 'Purchase Medicine',
					'mobile' => $unit_price,   						 //insert data to column
					'address' => $purchase_price,
					'company_name' => $unit_sales_price,//insert data to column
					'mobile' => $unit,   						 //insert data to column
					'address' => $purchase_paid,
					'address' => $purchase_due,
					'previous_due' => $ex_date	 //insert data to column
				);
				$this->CommonModel->insert_data('insert_purchase_info', $insert_data); 			//insert data to table
				redirect('ShowForm/medicine_purchase_info/created', 'refresh'); 		//after inserting back to the page
			}
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
}
