<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Get_ajax_value extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('CommonModel');
	}

	public
	function get_purchase_statement()
	{

			$date_from = $this->input->post('date_from');
			$date_to = $this->input->post('date_to');
			$medicine_name = $this->input->post('medicine_name');
			//$invoice = $this->input->post('invoice');
			$supplier = $this->input->post('supplier');
			$checking_array = array();
			if (!empty($date_from) && !empty($date_to)) {
				$checking_array['date>='] = $date_from;
				$checking_array['date<='] = $date_to;
			}
			if (!empty($medicine_name)) {
				$checking_array['medicine_name'] = $medicine_name;
			}
//			if (!empty($invoice)) {
//				$checking_array['invoice_no'] = $invoice;
//			}
			if (!empty($supplier)) {
				$checking_array['supplier'] = $supplier;
			}
			$result = $this->CommonModel->get_distinct_value_where('medicine_name', "insert_purchase_info", $checking_array);
			$count = 0;
			foreach ($result as $info) {
				$count++;
				$checking_array['medicine_name'] = $info->medicine_name;
				$data['product_result' . $count] = $this->CommonModel->get_all_info_by_array("insert_purchase_info", $checking_array);
			}
			$data['count_it'] = $count;
			$this->load->view('inventory/purchase_statement', $data);
	}
	function show_purchase_due()
	{
			$s_supplier= $this->input->post('s_supplier');

			if (empty($s_supplier)) {
				echo "<p style='color: #E13300;font-size: 20px;'>Please select a Supplier.</p>";
			} else {
				$data['all_value'] = $this->Common_model->get_allinfo_byid('purchase_due', 'insert_purchase_info', $s_supplier);
				$total = 0;
				$paid = 0;
				foreach ($data['all_value'] as $info) {
					$total += $info->total;
					$paid += $info->paid;
				}
				$old_due = $total - $paid;
				$data['old_due'] = $old_due;
				$data['supplier_name'] = $s_supplier;
				$this->load->view('inventory/show_purchase_due', $data);
			}
	}
	public function get_medicine_price() {
		$medicine_name= $this->input->post('medicine_name');
		$result = $this->CommonModel->get_allinfo_byid('insert_purchase_info', 'medicine_name', $medicine_name);
		$price = 0;
		foreach ($result as $info) {
			$price = $info->unit_sales_price;
		}
		echo $price;
	}

} //END
