<?php session_start();
if (isset($_SESSION['send'])) {
    $data=$_SESSION['send'];
	unset($_SESSION['send']);
}
else{$data="";
}
 
if(isset($_SESSION['r'])){
 $r=$_SESSION['r'];
 $name=$_SESSION['name'];
}else{
 $r="";
header('location: index.php');
}
?>
<?php include_once('header.php');?>
	<div class="container">
	 <?php include_once('top_menu.php');?>
		<div class="row-fluid">
			<div class="span12">
				<!-- Forms: Top Bar -->
				<div class="top-bar">
					<h3><i class="icon-cog"></i> Customer and Vendor Information Form </h3>
				</div>
				<!-- Forms: Content -->
				<div class="well no-padding" id="form_wrapper">
					<!-- Forms: Form -->
					<form action="form_submit.php" id="form" method="post" class="form-horizontal">
						<div class="send">
						 <?php echo $data;?>
						</div>
						<div class="control-group">													  
							<div class="controls">
								<h2>Customer and Vendor Information Form</h2>
							</div>
						</div>	
						<div class="control-group">							
						   <label class="control-label">Company Type:</label>
						   <br/>
							<div class="controls">
								<select class="span6 m-wrap" name="type" data-placeholder="Choose a Category" tabindex="1">
									
									<option value="1">Vendor</option>
									<option value="2">Customer</option>
								</select>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Company Information:</label>
							<br/>
							<div class="controls">
							    <p>Company Name:</p>
								<input type="text" name="company_name" class="span6 m-wrap" placeholder="Company Name* " >
							</div>
							<div class="controls">
							    <p>Address:</p>
								<input name="company_address" class="span6 m-wrap" type="text" placeholder="Address*" >		
							</div>
							<div class="controls">
							    <p>City/town:</p>
								<input name="company_city" class="span6 m-wrap" type="text" placeholder="City/town*">		
							</div>
							<div class="controls">
							    <p>State:</p>
								<input name="company_state" class="span6 m-wrap" type="text" placeholder="State*" >		
							</div>
							<div class="controls">
							    <p>Country:</p>
								<input name="company_country" class="span6 m-wrap" type="text" placeholder="Country*" >		
							</div>
							<div class="controls">
							    <p>Zip Code:</p>
								<input name="zipcode" class="span6 m-wrap" type="text" placeholder="Zip Code*" >		
							</div>
						</div>	
						<div class="control-group">
							<label class="control-label">Commercial Contact:</label>
							<br/>
							<div class="controls">
							    <p>Name:</p>
								<input name="commercial_name"  class="span6 m-wrap" type="text" placeholder="Name*" >		
							</div>
							<div class="controls">
							    <p>Phone:</p>
								<input name="commercial_phone"  class="span6 m-wrap" type="text" placeholder="Phone*" >		
							</div>
							<div class="controls">
							    <p>Fax:</p>
								<input name="commercial_fax"  class="span6 m-wrap" type="text" placeholder="Fax" >		
							</div>
							<div class="controls">
							    <p>Email:</p>
								<input  name="commercial_email" class="span6 m-wrap" type="text" placeholder="Email*" >		
							</div>
							<div class="controls">
							    <p>IM:</p>
								<input  name="commercial_im" class="span6 m-wrap" type="text" placeholder="IM" >		
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Technical Contact:</label>
							<br/>
	                        <div class="controls">
							    <p>Name:</p>
								<input name="technical_name" class="span6 m-wrap" type="text" placeholder="Name*" >		
							</div>
							<div class="controls">
							    <p>Phone:</p>
								<input  name="technical_phone" class="span6 m-wrap" type="text" placeholder="Phone*" >		
							</div>
							<div class="controls">
							    <p>Fax:</p>
								<input name="technical_fax" class="span6 m-wrap" type="text" placeholder="Fax" >		
							</div>
							<div class="controls">
							    <p>Email:</p>
								<input name="technical_email" class="span6 m-wrap" type="text" placeholder="Email*" >		
							</div>
							<div class="controls">
							    <p>IM:</p>
								<input name="technical_im" class="span6 m-wrap" type="text" placeholder="IM" >		
							</div>
						</div>	
						<div class="control-group">
							<label class="control-label">Rates Contact:</label>	 
                            <br/>							
                            <div class="controls">
							    <p>NAme:</p>
								<input name="rates_name" class="span6 m-wrap" type="text" placeholder="Name*" >		
							</div>
							<div class="controls">
							    <p>Phone:</p>
								<input name="rates_phone" class="span6 m-wrap" type="text" placeholder="Phone*" >		
							</div>
							<div class="controls">
							    <p>Fax:</p>
								<input name="rates_fax" class="span6 m-wrap" type="text" placeholder="Fax" >		
							</div>
							<div class="controls">
							    <p>Email:</p>
								<input name="rates_email" class="span6 m-wrap" type="text" placeholder="Email*" >		
							</div>
							<div class="controls">
							    <p>IM:</p>
								<input name="rates_im" class="span6 m-wrap" type="text" placeholder="IM" >		
							</div>
						</div>	
						<div class="control-group">
							<label class="control-label">Billing Contact:</label>
							<br/>
	                        <div class="controls">
							    <p>Name:</p>
								<input name="billing_name" class="span6 m-wrap" type="text" placeholder="Name*" >		
							</div>
							<div class="controls">
							    <p>Phone:</p>
								<input name="billing_phone" class="span6 m-wrap" type="text" placeholder="Phone*" >		
							</div>
							<div class="controls">
							    <p>Fax:</p>
								<input name="billing_fax" class="span6 m-wrap" type="text" placeholder="Fax" >		
							</div>
							<div class="controls">
							    <p>Email:</p>
								<input name="billing_email" class="span6 m-wrap" type="text" placeholder="Email*" >		
							</div>
							<div class="controls">
							    <p>IM:</p>
								<input name="billing_im" class="span6 m-wrap" type="text" placeholder="IM" >		
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Interconnection Information:</label>
							<br/>
	                        <div class="controls">
							    <p>Equipment Manufacturer and Model:</p>
								<input name="model" class="span6 m-wrap" type="text" placeholder="Equipment Manufacturer and Model" >		
							</div>
							<div class="controls">
							    <p>IP Address (Traffic from Voicepace):</p>
								<input  name="voicepace1" class="span6 m-wrap" type="text" placeholder="IP Address (Traffic from Voicepace)" >		
							</div>
							<div class="controls">
							    <p>IP Address (Traffic to Voicepace):</p>
								<input  name="voicepace2" class="span6 m-wrap" type="text" placeholder="IP Address (Traffic to Voicepace)" >		
							</div>
							<div class="controls">
							    <p>Protocol  (SIP and/or H323):</p>
								<input  name="protocol" class="span6 m-wrap" type="text" placeholder="Protocol  (SIP and/or H323)*" >		
							</div>
							<div class="controls">
							    <p>Is prefix required? If yes, which?:</p>
								<input  name="prefix" class="span6 m-wrap" type="text" placeholder="Is prefix required? If yes, which?" >		
							</div>
							<div class="controls">
							    <p>CODEC:</p>
								<input  name="codec" class="span6 m-wrap" type="text" placeholder="CODEC" >		
							</div>
							<div class="controls">
							    <p>Termination Type (analog / digital):</p>
								<input  name="analog_digital" class="span6 m-wrap" type="text" placeholder="Termination Type (analog / digital)" >		
							</div>
						</div>

						
						<div class="form-actions">
							<input type="submit" class="btn btn-primary" value="submit">							
						</div>
					</form>
					<!-- / Forms: Form -->           
				</div>
				<!-- / Forms: Content -->
			</div>
                    <!-- / Forms: Box -->
		</div>
		<!-- / Forms -->
	</div> 
	<!-- / Content Container -->
	
	<script>


        $().ready(function() {
	// validate  form 
	$(".form-horizontal").validate({
		rules: {
			type: "required",
			company_name: "required",
			company_address: "required",
			company_city: "required",
			company_country: "required",
			company_state: "required",
			zipcode: "required",
			commercial_name: "required",
			commercial_phone: "required",
			commercial_email: "required",
			technical_name: "required",
			technical_phone: "required",
			rates_name: "required",
			rates_phone: "required",
			billing_name: "required",
			billing_phone: "required",
			protocol: "required",					
			commercial_email: {
				required: true,
				email: true
			},
			technical_email: {
				required: true,
				email: true
			},
			rates_email: {
				required: true,
				email: true
			},
			billing_email: {
				required: true,
				email: true
			},
		
		
		},
		messages: {
			company_name: "Please enter Company Name",
			company_address: "Please enter Company Address",
			company_city: "Please enter Company City",
			company_country: "Please enter Company Country",	
			company_state: "Please enter Company State",	
			zipcode: "Please enter Zip Code",	
			email: "Please enter a valid email Email",
			
                            }
                    });

            });
            </script>

	  <?php include_once('footer.php');?>