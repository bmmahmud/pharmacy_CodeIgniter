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
            <li><a href="#">Create Option</a></li>
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
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Create Option</a>
                    <a href="<?php echo base_url(); ?>ShowForm/create_medicine_presentation/main"
                        class="list-group-item">
                        <span class="	fa fa-capsules" aria-hidden="true"></span> Medicine Presentation</a>
                    <a href="<?php echo base_url(); ?>ShowForm/create_generic_name/main" class="list-group-item">
                        <span class="fa fa-plus-circle" aria-hidden="true"></span> Generic Name </a>
                    <a href="<?php echo base_url(); ?>ShowForm/create_medicine_name/main" class="list-group-item">
                        <span class="fa fa-pills" aria-hidden="true"></span> Medicine Name</a>
<!--                    <a href="--><?php //echo base_url(); ?><!--ShowForm/create_product_category/main" class="list-group-item">-->
<!--                        <span class="fa fa-tasks" aria-hidden="true"></span> Product Category</a>-->
<!--                    <a href="--><?php //echo base_url(); ?><!--ShowForm/create_product_name/main" class="list-group-item">-->
<!--                        <span class="fa fa-plus" aria-hidden="true"></span> Product Name</a>-->
                    <a href="<?php echo base_url(); ?>ShowForm/create_supplier/main" class="list-group-item">
                        <span class="fa fa-truck-moving" aria-hidden="true"></span> Supplier</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading main-color-bg">
                        <h3 class="panel-title">Create Supplier</h3>
                    </div>

                    <div class="panel-body">

                        <!-- /.Panel End -->
                        <?php echo form_open_multipart('Insert/supplier'); ?>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-6" style="">
                                    <label for="company_name">Supplier Name</label>
                                    <input type="text" class="form-control" id="company_name" placeholder="Ex:"
                                        name="company_name">
                                </div>
                                <div class="col-sm-6">
                                    <label for="mobile">Mobile</label>
                                    <input type="text" class="form-control" id="mobile" placeholder="Ex: +880"
                                        name="mobile">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6" style="">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" placeholder="Ex: Mirpur"
                                        name="address">
                                </div>
                                <div class="col-sm-6">
                                    <label for="previous_due">Previous Due</label>
                                    <input type="text" class="form-control" id="previous_due" placeholder="Tk"
                                        name="previous_due">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4" style="margin-top: 17px;">
                                    <button type="submit" class="pull-left btn btn-primary">Create</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div><!-- /.Panel End -->
                <!-- /.Panel 2nd -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <form method="post" action="<?php echo base_url(); ?>export_csv/export">
                            <h3 class="panel-title">Supplier List <input type="submit" name="export"
                                    class="btn btn-success btn-xs" value="Export to CSV" /></h3>
                    </div>
                    <div class="panel-body">
                        <div class="panel-body">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">Serial.</th>
                                        <th style="text-align: center;">Company Name</th>
                                        <th style="text-align: center;">Mobile</th>
                                        <th style="text-align: center;">Address</th>
                                        <th style="text-align: center;">Previous Due</th>
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
                                        <td style="text-align: center;"><?php echo $single_value->supplier_name; ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->mobile; ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->address; ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->previous_due; ?></td>
                                        <td style="text-align: center;">
                                            <a style="margin: 5px;" class="btn btn-danger"
                                                href="<?php echo base_url(); ?>Delete/supplier/<?php echo $single_value->supplier_id; ?>">Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </form> <!-- /.Excel form -->
                </div>
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.Container -->
</section>
