<?php session_start(); 
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
            <h3><i class="icon-eye-open"></i>Rates Information</h3>
        </div>
        <div class="well no-padding">
            <?php
            require_once('db_connection.php');
            $myQuery = "SELECT * FROM rates  order by effective_date ASC ";
            $queryProcess = mysql_query($myQuery);
            ?>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Vendor Code </th>
                        <th>Destination</th>
                        <th>Code</th>
                        <th>Prefix</th>
                        <th>Rate</th>
                        <th> Effective Data</th>
                    </tr>

                </thead>
                <tbody>                   
                    <?php
                    while ($row = mysql_fetch_array($queryProcess)) {
                            echo "<tr>";
                            echo "<td>" . $row['vendor_code'] . "</td>";
                            echo "<td>" . $row['destination'] . "</td>";
                            echo "<td>" . $row['code'] . "</td>";
                            echo "<td>" . $row['prefix'] . "</td>";
                            echo "<td>" . $row['rate'] . "</td>";
                            echo "<td>" . $row['effective_date'] . "</td>";	
                            echo "</tr>";
                            }
                       ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<?php include_once('footer.php');?>