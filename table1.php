<!-- Live Stats -->
<div class="row-fluid">
    <!-- Pie: Box -->
    <div class="span12">
        <div class="top-bar">
            <h3><i class="icon-eye-open"></i> Company Information</h3>
        </div>
        <div class="well no-padding">
            <?php
            require_once('db_connection.php');
            $myQuery = "SELECT * FROM company_info ";
            if ($id == 0) {
                $myQuery = "SELECT * FROM company_info";
            } else if ($id == 1) {
                $myQuery .="WHERE customer_id like '$id'";
            } else if ($id == 2) {
                $myQuery .="WHERE customer_id like '$id'";
            }
            $queryProcess = mysql_query($myQuery);
            ?>
            <table class="data-table editableTable">
                <thead>
                    <tr>
                        <th>Company Id</th>
                        <th>Company Name</th>
                        <th>Address</th>
                        <th>City/Town</th>
                        <th >State</th>
                        <th >Country</th>
                        <th>zip Code</th>
                    </tr>

                </thead>
                <tbody>
                   
                        <?php
                        while ($row = mysql_fetch_array($queryProcess)) {
                             echo "<tr>";
                            echo "<td>" . $row['company_id'] . "</td>";
                            echo "<td>" . $row['company_name'] . "</td>";
                            echo "<td>" . $row['company_address'] . "</td>";
                            echo "<td>" . $row['city'] . "</td>";
                            echo "<td>" . $row['state'] . "</td>";
                            echo "<td>" . $row['country'] . "</td>";
                            echo "<td class='new'>" . $row['zip_code'] . "<span style='display:none'>" . $row['company_id'] . "</span>" . "</td>";
                             echo "</tr>";
                        }
                            ?>
                     
                </tbody>

            </table>

        </div>
    </div>
</div>
