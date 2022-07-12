 <html>
     
         <head>
             <title>Eliana-Connect Invoice
         </head>
         <body>
 <!--Invoice blade starts here-->

				 
 <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td{
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

ul {
  list-style-type: none;
 }

	/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


/* Input type Styling */
input[type=number], select {
  width: 100%;
  
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
} 
	</style>




<div class="row" id="employee_payslip">
						<div class="col-md-12">
							<div class="card">
								<div class="card-body">
								<center>
								
								
								<img src=""><br>
								
								</center>
									<div class="row">
										<div>
											
											<ul class="list-unstyled mb-0">
												<li>Name: {{Auth::user()->name}}</li>
												<li>Email: {{Auth::user()->email}}</li>
												<li>MoMo Number: {{Auth::user()->momo_number}}</li>
											</ul>
										</div>
										<center>
										<div>
											<div class="invoice-details">
												<h3 style="font-weight:bold">{{Str::upper(Auth::user()->name)}}'s INVOICE</h3>
											</div>
										</div>
 </center>
										
									</div>
									<hr>
									<div class="row">
                                        <!-- Category Column Starts here-->
										<div class="column">
											<div>
												<h4><strong>Category</strong></h4>
												<table>
													<tbody>
														<tr>
															<td style="margin:4px">Device(s)<span class="float-right"></span></td>
														</tr>
														<tr>
															<td>Subscription <span class="float-right"></span></td>
														</tr>
														<tr>
															<td>Fuel Monitoring<span class="float-right"></span></td>
														</tr>
                                                        <tr>
															<td>Total <span class="float-right"></span></td>
														</tr>
														
													</tbody>
												</table>
											</div>
										</div>
<!-- Category Column Ends here-->



<!-- Quantity Column Starts here-->

<div class="column">
											<div>
												<h4><strong>Quantity</strong></h4>
												<table>
													<tbody>
														<tr>
															<td>{{$generated_invoice->deviceqty}}<span class="float-right"></span></td>
														</tr>
														<tr>
															<td>{{$generated_invoice->subqty}}<span class="float-right"></span></td>
														</tr>
														<tr>
															<td>{{$generated_invoice->fuelqty}}<span class="float-right"></span></td>
														</tr>
                                                        <tr>
															<td>{{$generated_invoice->totalqty}}<span class="float-right"></span></td>
														</tr>
														
													</tbody>
												</table>
											</div>
										</div>

<!-- Quantity Column Ends here-->





<!-- Prices Column Starts Here-->  
										<div class="column" >
											<div>
												<h4><strong>Price (ZMW)</strong></h4>
												<table>
													<tbody>
                                                    <tr>
															<td><strong>{{$generated_invoice->deviceprice}}<span class="float-right"></span></td>
														</tr>
														<tr>
															<td>{{$generated_invoice->subprice}}<span class="float-right"></span></td>
														</tr>
														<tr>
															<td>{{$generated_invoice->fuelprice}}<span class="float-right"></span></td>
														</tr>
														
														<tr>
															<td>{{$generated_invoice->totalprice}}<span class="float-right"></span></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									<!-- Prices Column Ends Here--> 	
									</div>
								</div>
							</div>
						</div>
					</div>
               
				<!-- /Page Content -->
				
         
<!--Invoice blade ends here-->


<footer class="app-footer">
		    <div class="container text-center py-3">
		         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Invoice Generated <span class="sr-only"></span><i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link" href="http://myeliana.com" target="_blank">Eliana Connect</a></small>
            <small style="font-style:italic" class="copyright"> on {{$generated_invoice->created_at}}</small>
		       
		    </div>
	    </footer><!--//app-footer-->





				
				
                </body>
                </html>