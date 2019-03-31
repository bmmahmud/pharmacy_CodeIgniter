
 <!-- /.container -->
 <section id="main">
	 <div class="container">
<div class="row">
   <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Inventory Overview</h3>
      </div>
      <div class="panel-body">
       <div class="col-md-4">
         <div class="well dash-box">
           <h2> <span class="glyphicon glyphicon-th" aria-hidden="true" style="color: #4cae4c;"></span>  <?php echo $medicine_qty; ?></h2>
          <h4>Medicine Type</h4>
          </div>
      </div>
      <div class="col-md-4">
          <div class="well dash-box">
            <h2> <span class="glyphicon glyphicon-th-large" aria-hidden="true" style="color: palevioletred;"></span> <?php echo $today_purchase_number; ?></h2>
           <h4>Today's Purchase Amount</h4>
           </div>
       </div>
       <div class="col-md-4">
          <div class="well dash-box">
            <h2> <span class="glyphicon glyphicon-usd" aria-hidden="true" style="color: red;"></span>  <?php echo $today_due; ?></h2>
           <h4>Total Purchase Due</h4>
           </div>
       </div>
       <div class="col-md-4">
          <div class="well dash-box">
            <h2> <span class="	glyphicon glyphicon-user" aria-hidden="true" style="color: #2e6da4;"></span>  <?php echo $monthly_sales_number; ?></h2>
           <h4> Sales of Month</h4>
           </div>
       </div>
		  <div class="col-md-4">
			  <div class="well dash-box">
				  <h2> <span class="glyphicon glyphicon-fire" aria-hidden="true" style="color: orange;"></span>  <?php echo $today_sale_number; ?></h2>
				  <h4> Today's Sale</h4>
			  </div>
		  </div>
		  <div class="col-md-4">
			  <div class="well dash-box">
				  <h2> <span class="glyphicon glyphicon-warning-sign" aria-hidden="true" style="color: darkred;"></span> <?php echo $near_expired_product; ?></h2>
				  <h4>  Expire Product</h4>
			  </div>
		  </div>
    </div>
   </div>

	</div >
  </div >
 </section>



