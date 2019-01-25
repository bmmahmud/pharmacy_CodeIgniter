<?php
/**
 * Created by PhpStorm.
 * User: bmmah
 * Date: 1/25/2019
 * Time: 11:32 PM
 */

class ShowForm extends CI_Controller
{
	function create_medicine_presentation()
	{
		if ($this->session->userdata('username') != '') {
			$this->load->view("header");
			$this->load->view("Create_Option/medicine_presentation");
			$this->load->view("footer");
		}
	}
}
