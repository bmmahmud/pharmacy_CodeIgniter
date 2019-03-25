<?php
if ($msg == "main") {
	$msg = "";
} elseif ($msg == "empty") {
	$msg = "Please fill out all required fields";
} elseif ($msg == "created") {
	$msg = "Created Successfully";
} elseif ($msg == "edit") {
	$msg = "Edited Successfully";
} elseif ($msg == "delete") {
	$msg = "Deleted Successfully";
}
?>
<!-- /.Breadcrumb -->
<section id="breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="#">Sales / Sell Medicine </a></li>
			<li class="active"><?php echo $msg; ?></li>
		</ol>
	</div>
</section>

<!-- /.container -->
<section id="main">
	<div class="container">

		<div class="row">
			<div class="col-md-3">
				<div class="list-group">
					<a href="index.html" class="list-group-item active main-color-bg">
						<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Sales Medicine </a>
					<a href="<?php echo base_url(); ?>ShowForm/medicine_purchase_info/main"
					   class="list-group-item">
						<span class="	fa fa-capsules" aria-hidden="true"></span> Sales Statement</a>
					<a href="<?php echo base_url(); ?>ShowForm/medicine_purchase_statement/main" class="list-group-item">
						<span class="fa fa-plus-circle" aria-hidden="true"></span> Client Payment</a>
<!--					<a href="--><?php //echo base_url(); ?><!--ShowForm/supplier_payment/main" class="list-group-item">-->
<!--						<span class="fa fa-pills" aria-hidden="true"></span> Supplier Payment</a>-->
					<!--					<a href="--><?php //echo base_url(); ?><!--ShowForm/create_product_name/main" class="list-group-item">-->
					<!--						<span class="fa fa-plus" aria-hidden="true"></span> Ledger</a>-->
				</div>
			</div>
			<div class="col-md-9" >
				<div class="panel panel-default">
					<div class="panel-heading main-color-bg">
						<h3 class="panel-title"> Sales Medicine </h3>
					</div>

					<div class="panel-body">

						<!-- /.Panel End -->
						<?php echo form_open_multipart('Insert/medicine_purchase_info'); ?>
						<div class="box-body">
							<div class="row">
								<div class="col-sm-4" style="">
									<label for="date">Date</label>
									<input type="date" class="form-control datepicker"
										   placeholder="Insert Date" name="date" id="date"
										   autocomplete="off">
								</div>
								<div class="col-sm-4" style="">
									<label for="customer_name">Customer Name</label>
									<input type="text" class="form-control"
										   placeholder="" name="customer_name" id="customer_name"
										   autocomplete="off">
								</div>
								<div class="col-sm-4" style="">
									<label for="customer_mobile">Mobile No.</label>
									<input type="text" class="form-control"
										   placeholder="" name="customer_mobile" id="customer_mobile"
										   autocomplete="off">
								</div>
								<div class="col-sm-4" style="">
									<label for="medicine_name">Medicine Name</label>
									<select name="medicine_name" id="medicine_name" class="form-control selectpicker"
											data-live-search="true">
										<option value="">-- Select --</option>
										<?php foreach ($all_value as $info) { ?>
											<option value="<?php echo $info->medicine_name_id."###".$info->medicine_name."###".$info->generic_name."###".$info->medicine_presentation; ?>"><?php echo $info->medicine_name." - ".$info->generic_name." [".$info->medicine_presentation."]"; ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="col-sm-4">
									<label for="unit_sales_price">Selling Price</label>
									<input type="text" class="form-control" id="unit_sales_price" placeholder="Tk"
										   name="unit_sales_price">
								</div>
								<div class="col-sm-4">
									<label for="qty">Quantity</label>
									<input type="text" class="form-control" id="qty" name="qty" value="0">
								</div>
								<div class="col-sm-4">
									<label for="purchase_price">Total Amount</label>
									<input type="text" class="form-control" id="purchase_price" placeholder="Tk"
										   name="purchase_price">
								</div>

								<div class="col-sm-4" style="margin-top: 25px;">
									<button type="button" class="pull-left btn btn-primary" id="add_item">ADD</button>
								</div>
							</div>

<!--							<div class="row">-->
<!--								<div class="col-sm-4" style="margin-top: 17px;">-->
<!--									<button type="button" class="pull-left btn btn-primary" id="search_purchase">Search</button>-->
<!--								</div>-->
<!--							</div>-->
							</form>
						</div>
					</div>
				</div><!-- /.Panel End -->
			</div>
			<!-- /.Panel 2nd -->
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Sales Medicine</h3>
					</div>


					<table id="salesList" class="table table-bordered table-hover">
						<thead>
						<tr>
							<th style="text-align: center;">Date</th>
							<th style="text-align: center;">Customer Name</th>
							<th style="text-align: center;">Medicine</th>
							<th style="text-align: center;">Unite Price</th>
							<th style="text-align: center;">Quantity</th>
							<th style="text-align: center;">Amount</th>
							<th style="text-align: left;">Action</th>
						</tr>
						</thead>
						<tbody id="show_all_sales">

						</tbody>
						<tr>
							<td colspan="">
								Amount<input type="text" class="form-control" id="amount"
											 style="color: black; border: black 2px solid;"
											 value="0" name="amount" readonly>
							</td>
							<td colspan="">
								Discount<input type="text" class="form-control" id="discount"
											   style="color: black; border: black 2px solid;"
											   value="0" placeholder="Discount" name="discount">
							</td>
							<td colspan="2">
								Sub Total<input type="text" class="form-control" id="sub_total"
												value="0" style="color: black; border: black 2px solid;"
												name="sub_total" readonly>
							</td>
							<td colspan="2">
								Pay<input type="text" class="form-control" id="pay"
										  value="0" style="color: black; border: black 2px solid;" name="pay">
							</td>
							<td colspan="2">
								Due<input type="text" class="form-control" id="due"
										  value="0" style="color: black; border: black 2px solid;" name="due"
										  readonly>
							</td>
							<td colspan="2">
								<div style="margin-top: 20px;color: #a61717;">
								<button style="" type="button" class=" btn btn-success "
										id="sell_btn">Sell</button>
								</div>
							</td>
						</tr>
					</table>

				</div>
			</div>
		</div> <!-- /.row -->
	</div> <!-- /.Container -->
</section>


<script type="text/javascript">
	$("#medicine_name").on("change paste keyup", function () {
		// var medicine_name = $('#medicine_name').val();
		var medicine = $('#medicine_name').val().split("###");
		var medicine_name_id = medicine[0];
		var medicine_name = medicine[1];
		var post_data = {
			'medicine_name': medicine_name,
			'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
		};

		$.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>Get_ajax_value/get_medicine_price",
			data: post_data,
			success: function (data) {
				$('#unit_sales_price').val(data);
			}
		});
	});  // Medicine Price
	//amount calculation
	$("#qty").on("change paste keyup", function () {
		var unit_sales_price = $('#unit_sales_price').val();
		var qty = $('#qty').val();
		var total = parseFloat(unit_sales_price) * parseFloat(qty);
		$('#purchase_price').val(total);
	});

	// ADD MEDICINE
	var complete_total = 0;
	var all_purchase = new Array();
	var product_count = 0;
	$("#add_item").click(function () {
		var date = $('#date').val();
		var customer_name = $('#customer_name').val();
		var medicine = $('#medicine_name').val().split("###");
		var medicine_name_id = medicine[0];
		var medicine_name = medicine[1];
		var generic_name = medicine[2];
		var medicine_presentation = medicine[3];
		var customer_mobile = $('#customer_mobile').val();
		var unit_sales_price = $('#unit_sales_price').val();
		var qty = $('#qty').val();
		var purchase_price = $('#purchase_price').val();
		all_purchase[product_count] = new Array(date, customer_name, medicine_name,unit_sales_price,qty,purchase_price,
			medicine_name_id, generic_name, medicine_presentation, customer_mobile);
		var full_table = "";
		var test_total = 0;
		for (var i = 0; i < all_purchase.length; i++) {
			test_total += Number(all_purchase[i][5]);
			full_table += "<tr>";
			for (var j = 0; j < all_purchase[i].length-4; j++) {
				full_table += "<td style='text-align: center;'>" + all_purchase[i][j] + "</td>";
			}
			full_table += "<td><button class='btn btn-danger' onclick='delete_data(" + i + ")'>Delete</button></td></tr>";
		}
		$('#show_all_sales').html(full_table);
		product_count++;
		complete_total = test_total;
		calculation();
	});
	// DELECT ADDED MEDICINE
	function delete_data(arr_no) {
		all_purchase.splice(arr_no, 1);
		var full_table = "";
		var test_total = 0;
		for (var i = 0; i < all_purchase.length; i++) {
			test_total += Number(all_purchase[i][5]);
			full_table += "<tr>";
			for (var j = 0; j < all_purchase[i].length-4; j++) {
				full_table += "<td style='text-align: center;'>" + all_purchase[i][j] + "</td>";
			}
			full_table += "<td><button class='btn btn-danger' onclick='delete_data(" + i + ")'>Delete</button></td></tr>";
		}
		$('#show_all_sales').html(full_table);
		product_count--;
		console.log(all_purchase);
		complete_total = test_total;
		calculation();
	}

	$("#discount, #pay").on("change paste keyup", function () {
		calculation();
	});
	function calculation() {
		$('#amount').val(complete_total);
		var discount = $('#discount').val();
		if (discount == "") {
			discount = 0;
		}
		$('#sub_total').val(Number(complete_total - discount));
		var pay = $('#pay').val();
		if (pay == "") {
			pay = 0;
		}
		var after_pay = Number(complete_total - discount - pay);
		if (after_pay >= 0) {
			$('#due').val(after_pay);
		}
	}
	$("#sell_btn").click(function () {
		var amount = $('#amount').val();
		var discount = $('#discount').val();
		var sub_total = $('#sub_total').val();
		var pay = $('#pay').val();
		var due = $('#due').val();

		var post_data = {
			'amount': amount, 'discount': discount, 'sub_total': sub_total, 'pay': pay, 'due': due,
			'all_purchase': all_purchase,
			'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
		};
		$.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>Get_ajax_value/sales_confirm",
			data: post_data,
			success: function (data) {
				$('#full_page').html(data);
			}
		});
	});
</script>
