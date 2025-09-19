        <?php

    
    if (isset ($_POST['year'])) {
    $year = $_POST['year'];
    echo   '<table border="1">';
    echo '<tr>
        <th>Year</th>
        <th>Amount deposited</th>
        <th>interest rate</th>
        <th>interest gained</th>
        <th>Total amount</th>
    </tr>';
    $totalAmount = 0;
        for ($i = 1; $i <= $year; $i++) {
            $deposit = $_POST["deposit$i"];
            if ($deposit <= 0) {
                $interestRate = 0;
            }
            else {
                if ($i <= 3) {
                    $interestRate = 0.03; 
                } elseif ($i <= 6) {
                    $interestRate = 0.04; 
                } elseif ($i <= 8) {
                    $interestRate = 0.045; 
                } else {
                    $interestRate = 0.05; 
                }
            }

                  
            if ($i<= 1) {
            $totalAmount = $totalAmount + $deposit + ($deposit * $interestRate);
            $interestGained = $totalAmount - $deposit ;
            }
            else {
                $interestGained = ($totalAmount + $deposit ) * $interestRate;
                $totalAmount = ($totalAmount + $deposit)* (1 + $interestRate);
                
            }
            

            $interestGained = round($interestGained, 2);
            $totalAmount = round($totalAmount, 2);
            echo "<tr>
                <td>year $i</td>
                <td>$deposit</td>
                <td>$interestRate</td>
                <td>$interestGained</td>
                <td>$totalAmount</td>
            </tr>";
        }
    echo '</table>';
    }
    

?>
