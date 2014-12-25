<?php
session_start();
if(isset($_SESSION['r'])){
 $r=$_SESSION['r'];
 $name=$_SESSION['name'];
}else{
 $r="";
header('location: index.php');
}
?>
<?php include_once('header.php'); ?>
<!-- Content Container -->
<div class="container">
    <?php include_once('top_menu.php'); ?>
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];    
        
        if($r==0 ){
        include_once('table1.php');        
        include_once('table2.php');       
        include_once('table3.php');        
        include_once('table4.php');       
        include_once('table5.php');        
        include_once('table6.php');
        
        }
    }else{
        $id=0;
        if($r==0 ){
        include_once('table1.php');       
        include_once('table2.php');       
        include_once('table3.php');        
        include_once('table4.php');      
        include_once('table5.php');        
        include_once('table6.php');       
        }
	}
    ?>
  
</div> 
<!-- / Content Container -->
<?php include_once('footer.php'); ?>


