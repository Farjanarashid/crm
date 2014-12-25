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
					<h3><i class="icon-cog"></i> Customer and Vendor Mass Information Form </h3>
				</div>
				<!-- Forms: Content -->
				<div class="well no-padding" id="form_wrapper">
				<!-- Forms: Form -->											
				        <form action="csv_input.php" method="post" enctype="multipart/form-data"class="csv_data">
					        <div class="send">
						 <?php echo $data;?>
						</div>
						  <input type="file" name="file" />
						  <input class="btn btn-primary" type="submit" value="submit"/>
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
	<?php include_once('footer.php');?>