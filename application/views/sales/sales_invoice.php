
<!-- /.Breadcrumb -->
<section id="breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="#">Sales / Sell Medicine </a></li>

		</ol>
	</div>
</section>

<!-- /.container -->
<section id="main">
	<div class="container">



			<div class="col-md-9" >
				<div class="panel panel-default">
					<div class="panel-heading main-color-bg">
						<h3 class="panel-title"> Sales Medicine  Invoice</h3>
					</div>

					<div class="panel-body">
						<div class="box-header"  style="color: black; text-align: center;">
							<p style="padding: 10px; text-align: left;"><button id="print_button" title="Click to Print" type="button"
																				onClick="window.print()" class="btn btn-flat btn-warning">Print</button></p>
						</div>
						<div class="row">
							<div class="form-group col-xs-4 col-xs-12"><b>
									Patient ID:</b> <?php echo "hi"; ?>
							</div>
							<div class="form-group col-xs-4 col-xs-12"><b>
									Patient Name:</b> <?php echo "hi"; ?>
							</div>
							<div class="form-group col-xs-4 col-xs-12"><b>
									Age:</b> <?php echo "hi"; ?>
							</div>
							<div class="form-group col-xs-4 col-xs-12"><b>
									Mobile:</b> <?php echo $mobile; ?>
							</div>
							<div class="form-group col-xs-4 col-xs-12"><b>
									Doctor Name:</b> <?php echo "hi"; ?>
							</div>
							<div class="form-group col-xs-4 col-xs-12"><b>
									Date:</b> <?php echo $date; ?>
							</div>
							<div class="form-group col-xs-12 col-xs-12"><b>
									Test Name & Price:</b> <?php echo "hi"; ?>
							</div>
							<div class="form-group col-xs-4 col-xs-12"><b>
									Amount:</b> <?php echo $amount; ?>
							</div>
							<div class="form-group col-xs-4 col-xs-12"><b>
									Discount:</b> <?php echo $discount; ?>
							</div>
							<div class="form-group col-xs-4 col-xs-12"><b>
									Sub Total:</b> <?php echo $sub_total; ?>
							</div>
							<div class="form-group col-xs-4 col-xs-12"><b>
									Pay:</b> <?php echo $pay; ?>
							</div>
							<div class="form-group col-xs-4 col-xs-12"><b>
									Due:</b> <?php echo $due; ?>
							</div>
							<div class="form-group col-xs-4 col-xs-12"><b>
									Advance:</b> <?php echo "hi"; ?>
							</div>
						</div>
						<!-- /.Panel End -->
					</div>
				</div><!-- /.Panel End -->
			</div>
			<!-- /.Panel 2nd -->
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Sales Medicine</h3>
					</div>




				</div>
			</div>

	</div> <!-- /.Container -->
</section>

<style>
	@media print {
		:-webkit-scrollbar {
			display: none;
		}
		@page {
			size: A4; /* DIN A4 standard, Europe */
			margin:0;
		}
		/*         div.divHeader {
                    position: fixed;
                    height: 80px;  put the image height here
                    width: 97%;  put the image width here
                    top: 0;
                }
                div.divFooter {
                    position: fixed;
                    height: 80px;  put the image height here
                    width: 97%;  put the image width here
                    bottom: 0;
                }*/
		a[href]:after {
			content: none !important;
		}
		#print_button {
			display: none;
		}
	}
</style>
