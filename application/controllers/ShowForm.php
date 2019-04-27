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
			$this->load->view("create_option/header");
			$this->load->view("create_option/medicine_presentation",$data);
			$this->load->view("create_option/footer");
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	public function create_generic_name($msg) {
		if ($this->session->userdata('username') != '') {
			$data['all_value'] = $this->CommonModel->get_all_info('create_generic_name');
			$data['msg'] = $msg;
			$this->load->view("create_option/header");
			$this->load->view("create_option/generic_name",$data);
			$this->load->view("create_option/footer");
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
			$this->load->view("create_option/header");
			$this->load->view("create_option/medicine_name",$data);
			$this->load->view("create_option/footer");
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	public function create_product_category($msg) {
		if ($this->session->userdata('username') != '') {
			$data['all_value'] = $this->CommonModel->get_all_info('create_product_category');
			$data['msg'] = $msg;
			$this->load->view("create_option/header");
			$this->load->view("create_option/product_category",$data);
			$this->load->view("create_option/footer");
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	public function create_product_name($msg) {
		if ($this->session->userdata('username') != '') {
			$data['all_product_cat'] = $this->CommonModel->get_all_info('create_product_category');
			$data['all_value'] = $this->CommonModel->get_all_info('create_product_name');
			$data['msg'] = $msg;
			$this->load->view("create_option/header");
			$this->load->view("create_option/product_name",$data);
			$this->load->view("create_option/footer");
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	public function create_supplier($msg) {
		if ($this->session->userdata('username') != '') {
			$data['all_value'] = $this->CommonModel->get_all_info('create_supplier');
			$data['msg'] = $msg;
			$this->load->view("create_option/header");
			$this->load->view("create_option/supplier",$data);
			$this->load->view("create_option/footer");
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}

	//Inventory Start
	public function medicine_purchase_info($msg) {
	if ($this->session->userdata('username') != '') {
		$data['all_value'] = $this->CommonModel->get_all_info('insert_purchase_info');
		$data['all_medicine'] = $this->CommonModel->get_all_info('create_medicine_name');
		$data['all_generic'] = $this->CommonModel->get_all_info('create_generic_name');
		$data['all_presen'] = $this->CommonModel->get_all_info('create_medicine_presentation');
		$data['all_sup'] = $this->CommonModel->get_all_info('create_supplier');
		$data['msg'] = $msg;
		$this->load->view("header");
		$this->load->view("inventory/medicine_purchase_info",$data);
		$this->load->view("footer");
	} else {
		$data['wrong_msg'] = "";
		$this->load->view('Main/login', $data);
	}
}

	public function edit_purchase_info($id) {
		if ($this->session->userdata('username') != '') {
			$data['all_value'] = $this->CommonModel->get_all_info('insert_purchase_info');
			$data['all_medicine'] = $this->CommonModel->get_all_info('create_medicine_name');
			$data['all_generic'] = $this->CommonModel->get_all_info('create_generic_name');
			$data['all_presen'] = $this->CommonModel->get_all_info('create_medicine_presentation');
			$data['all_sup'] = $this->CommonModel->get_all_info('create_supplier');
	    	$data['one_value'] = $this->CommonModel->get_allinfo_byid('insert_purchase_info', 'purchase_id', $id);

			$this->load->view("header");
			$this->load->view("inventory/edit_purchase_info",$data);
			$this->load->view("footer");
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}

	public function medicine_purchase_statement($msg) {
		if ($this->session->userdata('username') != '') {
			$data['all_value'] = $this->CommonModel->get_all_info('insert_purchase_info');
			$data['all_medicine'] = $this->CommonModel->get_all_info('create_medicine_name');
			$data['all_sup'] = $this->CommonModel->get_all_info('create_supplier');
			$data['msg'] = $msg;
			$this->load->view("header");
			$this->load->view("inventory/medicine_purchase_statement",$data);
			$this->load->view("footer");
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}

	public function supplier_payment($msg) {
		if ($this->session->userdata('username') != '' || $this->session->userdata('username') != 'staff' ) {
			$data['all_value'] = $this->CommonModel->get_all_info('insert_purchase_info');
			$data['all_medicine'] = $this->CommonModel->get_all_info('create_medicine_name');
			$data['all_sup'] = $this->CommonModel->get_all_info('create_supplier');
			$data['msg'] = $msg;
			$this->load->view("header");
			$this->load->view("inventory/supplier_payment",$data);
			$this->load->view("footer");
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
// Inventory END

//Sales Start
	public function sell_medicine($msg) {
		if ($this->session->userdata('username') != '') {
		//	$data['all_value'] = $this->CommonModel->get_all_info_not_null('insert_purchase_info','medicine_name');
		    $data['all_value'] = $this->CommonModel->get_all_info('insert_purchase_info');
			$data['all_medicine'] = $this->CommonModel->get_all_info('create_medicine_name');
			$data['all_sup'] = $this->CommonModel->get_all_info('create_supplier');
			$data['msg'] = $msg;
			$this->load->view("header");
			$this->load->view("sales/sell_product",$data);
			$this->load->view("footer");
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	public function sell_statement($msg)
	{
		if ($this->session->userdata('username') != '' || $this->session->userdata('username') != 'staff' ) {
			$data['all_value'] = $this->CommonModel->get_all_info('sales_product');
			$data['msg'] = $msg;
			$this->load->view("header");
			$this->load->view("sales/sell_statement", $data);
			$this->load->view("footer");
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);

		}
	}
	// Account
		public function profit_loss($msg)
		{
			if ($this->session->userdata('username') != '') {
				$data['all_value'] = $this->CommonModel->get_all_info('insert_purchase_info');
				$data['msg'] = $msg;
				$this->load->view("header");
				$this->load->view("account/profit_loss", $data);
				$this->load->view("footer");
			} else {
				$data['wrong_msg'] = "";
				$this->load->view('Main/login', $data);
			}
		}
		// Manage Staff
	public function manage_staff($msg)
	{
		if ($this->session->userdata('username') != '') {
			$data['all_value'] = $this->CommonModel->get_all_info('staff');
			$data['msg'] = $msg;
			$this->load->view("header");
			$this->load->view("manage_staff", $data);
			$this->load->view("footer");
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}
	public function edit_staff_info($id)
	{
		if ($this->session->userdata('username') != '') {
			$data['all_value'] = $this->CommonModel->get_all_info('staff');
			$data['one_value'] = $this->CommonMedit_purchase_infoodel->get_allinfo_byid('staff', 'id', $id);
			//$data['msg'] = $msg;
			$this->load->view("header");
			$this->load->view("edit_manage_staff", $data);
			$this->load->view("footer");
		} else {
			$data['wrong_msg'] = "";
			$this->load->view('Main/login', $data);
		}
	}

			}  // end
