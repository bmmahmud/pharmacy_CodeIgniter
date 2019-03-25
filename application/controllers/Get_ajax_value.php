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

	public function sales_confirm() {
		$all_purchase = $this->input->post('all_purchase');
		$amount = $this->input->post('amount');
		$discount = $this->input->post('discount');
		$sub_total = $this->input->post('sub_total');
		$pay = $this->input->post('pay');
		$due = $this->input->post('due');
		$advance = $this->input->post('advance');

		$result = $this->CommonModel->find_last_id('invoice', 'sales_product');
		if (empty($result)) {
			$invoice = 1;
		} else {
			foreach ($result as $info) {
				$invoice = $info->invoice;
			}
			$invoice += 1;
		}

		foreach ($all_purchase as $single_purchase) {
			$date = $single_purchase[0];
			$customer_name = $single_purchase[1];
			$medicine_name = $single_purchase[2];
			$unit_sales_price = $single_purchase[3];
			$qty= $single_purchase[4];
			$purchase_price= $single_purchase[5];
			$medicine_name_id = $single_purchase[6];
			$generic_name = $single_purchase[7];
			$medicine_presentation = $single_purchase[8];
			$customer_mobile = $single_purchase[9];

			$insert_data = array(
				'date' => $date,
				'invoice' => $invoice,
				'particular'=>"Sales Medicine",
			//	'patient_id' => $medicine_name,
				'customer_name' => $customer_name,
				'mobile' => $customer_mobile,
				'medicine_presentation' => $medicine_presentation,
				'medicine_name' => $medicine_name,
				'medicine_name_id' => $medicine_name_id,
				'generic_name' => $generic_name,
				'qty' => $qty,
				'unit_sales_price' => $unit_sales_price,
				'total_price' => $purchase_price,
				'total_amount' => $amount,
				'total_discount' => $discount,
				'discount_price' => $sub_total,
				'sales_paid' => $pay,
				'sales_due' => $due
			);
			$this->Common_model->insert_data('sales_product', $insert_data);
		}
		$data['date'] = $date;
		//$data['customer_id'] = $customer_id;
		$data['customer_name'] = $customer_name;
		$data['mobile'] = $customer_mobile;
		$data['medicine_name'] = $medicine_name;
		$data['medicine_presentation'] = $medicine_presentation;
		$data['unit_sales_price'] = $unit_sales_price;
		$data['qty'] = $qty;
		$data['amount'] = $amount;
		$data['discount'] = $discount;
		$data['sub_total'] = $sub_total;
		$data['pay'] = $pay;
		$data['due'] = $due;
		$data['advance'] = $advance;

		$this->load->view('sales/sales_invoice', $data);
	}


} //END
