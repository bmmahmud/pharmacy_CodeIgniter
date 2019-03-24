
<div class="box-body table-responsive" style="width: 98%; color: black;">
	<div class="row" id="no_print2">
		<div class="form-group col-sm-3 col-xs-12">
			<label for="old_due">Previous Due</label>
			<input type="text" name="old_due" id="old_due" value="<?php echo $old_due; ?>" class="form-control" readonly>
		</div>
		<div class="form-group col-sm-3 col-xs-12">
			<label for="paid">Pay Amount</label>
			<input type="text" name="paid" id="paid" class="form-control">
		</div>
		<div class="form-group col-sm-3 col-xs-12">
			<label for="final_due">Final Due</label>
			<input type="text" name="final_due" id="final_due" class="form-control" readonly>
		</div>
		<div class="form-group col-sm-3 col-xs-12">
			<button type="button" class="pull-left btn btn-success" id="pay_btn"
					style="margin-top: 22px; width: 70%;">Pay</button>
		</div>
	</div>
	<table id="example2" class="table table-bordered table-hover">
		<thead>
		<tr>
			<th colspan="8">
				<p style="text-align: center; font-weight: bold;">Vendor Name: <?php echo $vendor_name; ?></p>
			</th>
		</tr>
		<tr>
			<th style="text-align: center;">SL</th>
			<th style="text-align: center;">Date</th>
			<th style="text-align: center;">Particular</th>
			<th style="text-align: center;">Vendor</th>
			<th style="text-align: center;">Total</th>
			<th style="text-align: center;">Paid</th>
			<th style="text-align: center;">Due</th>
			<th style="text-align: center;" id="no_print3">Action</th>
		</tr>
		</thead>
		<tbody>
		<?php
		$count = 0;
		foreach ($all_value as $single_value) {
			$count++;
			?>
			<tr>
				<td style="text-align: center;"><?php echo $count; ?></td>
				<td style="text-align: center;">
					<?php echo date('d/m/y', strtotime($single_value->date)); ?>
				</td>
				<td style="text-align: center;"><?php echo $single_value->voucher_no; ?></td>
				<td style="text-align: center;"><?php echo $single_value->manufacturer; ?></td>
				<td style="text-align: center;">
					<?php if($single_value->voucher_no=="Payment"){?>
						<?php echo ($single_value->due+$single_value->paid); ?>
					<?php }else{echo $single_value->total;}?>
				</td>
				<td style="text-align: center;"><?php echo $single_value->paid; ?></td>
				<td style="text-align: center;"><?php echo $single_value->due; ?></td>
				<td style="text-align: center;" id="no_print4">
					<?php
					if ($single_value->delete_status == 0) {
						echo "N/A";
					} else {
						?>
						<a style="margin: 5px;" class="btn btn-danger"
						   href="<?php echo base_url(); ?>Delete/purchase_due/<?php echo $single_value->record_id; ?>">Delete
						</a>
					<?php } ?>
				</td>
			</tr>
		<?php } ?>
		<tr>
			<td colspan="8">
				<p style="text-align: center; font-weight: bold;">Total Due: <?php echo $old_due; ?></p>
			</td>
		</tr>
		</tbody>
	</table>
	<p style="padding-left: 10px; text-align: right;"><button id="print_button" title="Click to Print" type="button"
															  onClick="window.print()" class="btn btn-flat btn-warning">Print</button></p>
</div>

<script type="text/javascript">
	$("#paid").on("change paste keyup", function () {
		var paid = $('#paid').val();
		var old_due = $('#old_due').val();
		if (paid >= 0) {
			var final_due = old_due - paid;
			$('#final_due').val(final_due);
		} else {
			$('#final_due').val(old_due);
		}
	});

	$('#pay_btn').on('click', function (e) {
		var search_vendor = $('#search_vendor').val();
		var paid = $('#paid').val();
		var final_due = $('#final_due').val();
		var post_data = {
			'paid': paid, 'search_vendor': search_vendor, 'final_due': final_due,
			'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
		};
		$.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>Insert/insert_purchase_payment",
			data: post_data,
			success: function (data) {
				$('#show_info').html(data);
			}
		});
	});
</script>

<style>
	@media print {
		a[href]:after {
			content: none !important;
		}
		#print_button {
			display: none;
		}
		#no_print1 {
			display: none;
		}
		#no_print2 {
			display: none;
		}
		#no_print3 {
			display: none;
		}
		#no_print4 {
			display: none;
		}
	}
</style>
