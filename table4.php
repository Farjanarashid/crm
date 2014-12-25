<!-- Live Stats -->
<div class="row-fluid">
    <div class="span12">
        <div class="top-bar">
            <h3><i class="icon-eye-open"></i> Rates Contact</h3>
        </div>      
        <div class="well no-padding">
            <?php
            require_once('db_connection.php');
            $myQuery = "SELECT * FROM rates_contact ";
            if ($id == 0) {
                $myQuery = $myQuery;
            } else if ($id == 1) {
                $myQuery .="WHERE customer_id like '$id'";
            } else if ($id == 2) {
                $myQuery .="WHERE customer_id like '$id'";
            }
            $queryProcess = mysql_query($myQuery);
            ?>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Fax</th>
                        <th >Email</th>
                        <th >IM</th>
                    </tr>

                </thead>
                <tbody> 
                       <?php
                        while ($row = mysql_fetch_array($queryProcess)) {
                             echo "<tr>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['phone'] . "</td>";
                            echo "<td>" . $row['fax'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['IM'] . "</td>";
                             echo "</tr>";
                        }
                            ?>                 
                </tbody>
            </table>
        </div>
        <!-- / Pie: Content -->
    </div>
    <!-- / Pie -->
</div>
<!-- / Live Stats -->