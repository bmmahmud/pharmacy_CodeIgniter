<?php
/**
 * Created by PhpStorm.
 * User: bmmah
 * Date: 3/26/2019
 * Time: 12:22 PM
 */

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
			<li><a href="#">Sales / Sell Statement</a></li>
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
						<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Sales</a>
					<a href="<?php echo base_url(); ?>ShowForm/sell_medicine/main"
					   class="list-group-item">
						<span class="	fa fa-capsules" aria-hidden="true"></span> Sell Medicine</a>
					<a href="<?php echo base_url(); ?>ShowForm/sell_statement/main"
					   class="list-group-item">
						<span class="	fa fa-capsules" aria-hidden="true"></span> Sales Statement</a>
<!--					<a href="--><?php //echo base_url(); ?><!--ShowForm/medicine_purchase_statement/main" class="list-group-item">-->
<!--						<span class="fa fa-plus-circle" aria-hidden="true"></span> Client Payment</a>-->
				</div>
			</div>
			<div class="col-md-9">
				<div class="panel panel-default">
					<div class="panel-heading main-color-bg">
						<h3 class="panel-title"> Sell Statement</h3>
					</div>

					<div class="panel-body">

						<!-- /.Panel End -->
						<?php echo form_open_multipart('Insert/medicine_purchase_info'); ?>
						<div class="box-body">
							<div class="row">
								<div class="col-sm-6" style="">
									<label for="date_from">Date From</label>
									<input type="date" class="form-control datepicker"
										   placeholder="Insert Date" name="date_from" id="date_from"
										   autocomplete="off">
								</div>
								<div class="col-sm-6" style="">
									<label for="date_to">Date To</label>
									<input type="date" class="form-control _datepicker"
										   placeholder="Insert Date" name="date_to" id="date_to"
										   autocomplete="off">
								</div>
							</div>

							<div class="row">
								<div class="col-sm-4" style="margin-top: 17px;">
									<button type="button" class="pull-left btn btn-primary" id="search_purchase">Search</button>
								</div>
							</div>
							</form>
						</div>
					</div>
				</div><!-- /.Panel End -->
			</div>
			<!-- /.Panel 2nd -->
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
							<h3 class="panel-title">Sell Statement</h3>
					</div>
					<div class="panel-body" id="show_purchase">

					</div>

				</div>
			</div>
		</div> <!-- /.row -->
	</div> <!-- /.Container -->
</section>


<script type="text/javascript">
	$("#search_purchase").click(function () {
		var date_from = $('#date_from').val();
		var date_to = $('#date_to').val();
		var medicine_name = $('#medicine_name').val();
		//var invoice = $('#invoice').val();
		// var supplier = $('#supplier').val();
		var post_data = {
			'date_from': date_from, 'date_to': date_to, 'medicine_name': medicine_name
		};
		$.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>Get_ajax_value/get_sales_statement",
			data: post_data,
			success: function (data) {
				$('#show_purchase').html(data);
			}
		});
	});
</script>
