<?php session_start();
if (isset($_SESSION['send'])) {
    $data=$_SESSION['send'];
	unset($_SESSION['send']);
}
else{$data="";}
 
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
				<div class="top-bar">
					<h3><i class="icon-cog"></i> Rates Single Input Form</h3>
				</div>
				<!-- Forms: Content -->
				<div class="well no-padding" id="form_wrapper">

					<!-- Forms: Form -->
					<form action="rates_form_submit.php"  method="post" class="form-horizontal">
						
	                    <div class="control-group">													  
							<div class="controls">
								<h2>Rates Single Input Form</h2>
							</div>
						</div>						
						<div class="control-group">
							<label class="control-label">Vendor Code:</label>
							<div class="controls">
								<input type="text" name="vendor_code" required class="span6 m-wrap" placeholder="Vendor Code* " >
							</div>						
						</div>	
						<div class="control-group">
							<label class="control-label">Destination:</label>
							<div class="controls">
								<input name="destination"  class="span6 m-wrap" type="text" placeholder="destination*" >		
							</div>							
						</div>
						<div class="control-group">
							<label class="control-label">Code:</label>
	                         <div class="controls">
								<input name="code" class="span6 m-wrap" type="text" placeholder="Code*" >		
							</div>					
						</div>	
						<div class="control-group">
							<label class="control-label">Prefix:</label>
	                         <div class="controls">
								<input name="prefix" class="span6 m-wrap" type="text" placeholder="Prefix*" >		
							</div>					
						</div>	
						<div class="control-group">
							<label class="control-label">Rate:</label>
	                        <div class="controls">
								<input name="rate" class="span6 m-wrap" type="text" placeholder="Rate*" >		
							</div>					
						</div>
						<div class="control-group">
							<label class="control-label">Effective Date:<br/>(Y-M-D)</label>
	                        <div class="controls">
								<input name="date" class="span6 m-wrap" type="text" placeholder="Effective Date*" id="datepicker">		
							</div>					
						</div>									
						<div class="form-actions">
							<input type="submit" class="btn btn-primary" value="submit">   
							<div class="send send_bottom">
							 <?php echo $data;?>
							</div>
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
            // validation
            $(".form-horizontal").validate({
                    rules: {
                            vendor_code: "required",
                            destination: "required",
                            code: "required",
                            prefix: "required",
                            rate: "required",
                            date: "required",			
                    },
                    messages: {
                            vendor_code: "Please enter Vendor Code",
                            destination: "Please enter Destination",
                            code: "Please enter Code",
                            prefix: "Please enter Prefix",	
                            rate: "Please enter Rate",	
                            date: "Please enter Date",				
                    }
            });


    });
    </script>
  

<?php include_once('footer.php');?>