<?php session_start();
if (isset($_SESSION['upload'])) {
    $data=$_SESSION['upload'];
	unset($_SESSION['upload']);
} else{$data="";}

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
					<h3><i class="icon-cog"></i> Insert Company Documents</h3>
				</div>
				<!-- Forms: Content -->
				<div class="well no-padding" id="form_wrapper">
					<!-- Forms: Form -->
					<form action="docs_submit.php"  method="post" class="form-horizontal" enctype="multipart/form-data">
						
						<div class="control-group">													  
							<div class="controls">
								<h2>Insert Company Documents</h2>
							</div>
						</div>	
						<div class="control-group">							
						   <label class="control-label">Company Type:</label>
							<div class="controls">
								<select class="span6 m-wrap" name="type" data-placeholder="Choose a Category" tabindex="1">								
									<option value="Vendor">Vendor</option>
									<option value="Customer">Customer</option>
								</select>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Company Name:</label>
							<div class="controls">
								<input type="text" name="company_name" class="span6 m-wrap" placeholder="Company Name* " >
							</div>
							
						</div>	
						<div class="control-group">
							<label class="control-label">Information Type:</label>
							<div class="controls">
								<select class="span6 m-wrap" name="info_type" required data-placeholder="Choose a Category" tabindex="1">
								
									<option value="Agreement">Agreement</option>
									<option value="Invoice">Invoice</option>
									<option value="SOA">SOA</option>
									<option value="Payment Copy">Payment Copy</option>
									<option value="Credit Note">Credit Note</option>
								</select>
							</div>
							
						</div>
						<div class="control-group">
							<label class="control-label">Upload File:</label>
							<div class="controls">
								<input type="file" name="file" class="span6 m-wrap"  >
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
		</div>
	</div> 	
	<script>
            $().ready(function() {
                    // validation
                    $(".form-horizontal").validate({
                            rules: {
                                    type: "required",
                                    company_name: "required",
                                    info_type: "required",
                                    file: "required",
                            },
                            messages: {
                                    company_name: "Please enter Company Name",
                                    type: "Please Select a Type",
                                    info_type: "Please Select a Type",
                                    file: "Please Select a file",	
                            }
                    });
            });
         </script>
	<?php include_once('footer.php');?>