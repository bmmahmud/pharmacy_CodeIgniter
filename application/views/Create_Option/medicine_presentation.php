
 <!-- /.container -->
	<section id="main">
		<div class="container">

			<div class="row">
				<div class="col-md-3">
					<div class="list-group">
						<a href="index.html" class="list-group-item active main-color-bg">
							<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Create Option
						</a>
						<a href="<?php echo base_url(); ?>ShowForm/create_medicine_presentation"" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Medicine Presentation</a>
						<a href="#" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Generic Name </a>
						<a href="#" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Medicine Name</a>
					</div>
				</div>
					   <div class="col-md-9">
								<div class="panel panel-default">
								  <div class="panel-heading main-color-bg">
									<h3 class="panel-title">Create Medicine Presentation</h3>
								  </div>

								  <div class="panel-body">
									  <!-- /.Panel End -->
									  <div class="col-md-6">
										  <?php echo form_open_multipart('Insert/medicine_presentation'); ?>
										  <div class="box-body">
<!--											  <p  style="font-size: 20px; color: #066;">--><?php //echo $msg; ?><!--</p>-->
											  <div class="form-group" style="width: 400px;">
												  <label for="medicine_presentation">Medicine Presentation</label>
												  <input type="text" class="form-control" id="medicine_presentation" placeholder="" name="medicine_presentation">
											  </div>
										  </div>
										  <div class="box-footer">
											  <button type="submit" class="pull-left btn btn-primary">Create</button>
										  </div>
										  </form>
									  </div>
								  </div>
							   </div><!-- /.Panel End -->
						   <!-- /.Panel 2nd -->
						   <div class="panel panel-default">
							   <div class="panel-heading">
								   <h3 class="panel-title">Medicine Presentation List</h3>
							   </div>
							   <div class="panel-body">
								   <div class="panel-body">
									   <table class="table table-striped table-hover">
										   <thead>
										   <tr>
											   <th style="text-align: center;">Serial.</th>
											   <th style="text-align: center;">Medicine Presentation</th>
											   <th style="text-align: center;">Action</th>
										   </tr>
										   </thead>
										   <!-- /.Row from DB-->
										   <tbody>
										   <?php
										   $count = 0;
										   foreach ($all_value as $single_value) {
											   $count++;
											   ?>
											   <tr>
												   <td style="text-align: center;"><?php echo $count; ?></td>
												   <td style="text-align: center;"><?php echo $single_value->medicine_presentation; ?></td>
												   <td style="text-align: center;">
													   <a style="margin: 5px;" class="btn btn-danger"
														  href="<?php echo base_url(); ?>Delete/medicine_presentation/<?php echo $single_value->record_id; ?>">Delete
													   </a>
												   </td>
											   </tr>
										   <?php } ?>
										   </tbody>
									   </table>
								   </div>
							   </div>
						   </div>
					   </div>
			</div> <!-- /.row -->
		</div> <!-- /.Container -->
</section>

