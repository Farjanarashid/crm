<!-- Live Stats -->
<div class="row-fluid">
    <!-- Pie: Box -->
    <div class="span12">
        <!-- Pie: Top Bar -->
        <div class="top-bar">
            <h3><i class="icon-eye-open"></i>Interconnection Information</h3>
        </div>
        <div class="well no-padding">
            <?php
            require_once('db_connection.php');
            $myQuery = "SELECT * FROM interconnection_info ";
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
                        <th>Equipment Manufacturer and Model </th>
                        <th>IP Address(Traffic from Voicepace)</th>
                        <th>IP Address(Traffic to Voicepace)</th>
                        <th>Protocol  (SIP and/or H323)</th>
                        <th>Is prefix required? If yes, which?</th>
                        <th>CODEC</th>
                        <th>Termination Type (analog / digital)</th>

                    </tr>

                </thead>
                <tbody>
                    <?php
                    while ($row = mysql_fetch_array($queryProcess)) {
                         echo "<tr>";
                        echo "<td>" . $row['equipment'] . "</td>";
                        echo "<td>" . $row['ip_address_TFV'] . "</td>";
                        echo "<td>" . $row['ip_address_TTV'] . "</td>";
                        echo "<td>" . $row['protocol'] . "</td>";
                        echo "<td>" . $row['if_prefex_required'] . "</td>";
                        echo "<td>" . $row['codex'] . "</td>";
                        echo "<td>" . $row['termination_type'] . "</td>";
                         echo "<tr>";
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