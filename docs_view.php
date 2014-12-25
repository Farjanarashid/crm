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
            <h3><i class="icon-eye-open"></i>Information Documents</h3>
        </div>
        <!-- Pie: Content -->
        <div class="well no-padding">
            <?php
            require_once('db_connection.php');
            $myQuery = "SELECT * FROM docs ";        
            $queryProcess = mysql_query($myQuery);
            ?>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Type </th>
                        <th>Company_name</th>
                        <th>Information Type</th>
                        <th>Upload Time</th>
                        <th>File Name</th>
                        <th> Extension</th>
                        <th>View</th>
                        <th>Download</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                         while ($row = mysql_fetch_array($queryProcess)) {
                          $file = "upload/" . $row['file_name'];
                            echo "<tr>";
                            echo "<td>" . $row['type'] . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['info_type'] . "</td>";
                            echo "<td>" . $row['time'] . "</td>";
                            echo "<td>" . $row['file_name'] . "</td>";
                            echo "<td>" . $row['file_extension'] . "</td>";
                            echo "<td><a class='media' href='".  $file."' target='_blank'>". $row['file_name']."</a></td>";	
                            echo "<td><a class='media' href='download.php?file_id=".  $row['id']."'><i class='icon-down'></i></a></td>";	
                            echo "</tr>";
                         }
                      ?>					
                </tbody>
            </table>
        </div>
        <!-- / Pie: Content -->
    </div>
</div>
</div>
<?php include_once('footer.php');?>