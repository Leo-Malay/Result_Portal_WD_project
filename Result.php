<?php include("./db.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="./CSS/general.css">
    <link rel="stylesheet" href="./CSS/result.css">
</head>
<body>
    <center>
        <div class="result" id="result">
            <table border=1>
                <tr id="header">
                    <td colspan=12><img src="./IMG/ADIT_default.png" alt="ADIT" id="logo"/></td>
                </tr>
                <tr>
                    <th colspan=1>Enrollment</th>
                    <td colspan=3><?php echo $_POST['enrollment']; ?></td>
                    <th colspan=2>Name</th>
                    <?php
                        $get_name_query = "SELECT A.fname, A.mname, A.lname FROM USER A WHERE enrollment = '".$_POST['enrollment']."';";
                        $result1 = $db->query($get_name_query)->fetch_assoc();
                        echo "<td colspan=6>".$result1['fname']." ".$result1['mname']." ".$result1['lname']."</td>";
                    ?>
                </tr>
                <tr>
                    <th colspan=1>Term</th>
                    <td colspan=3>Winter 2020</td>
                    <th colspan=2>Semester</th>
                    <td colspan=2>5</td>
                    <th colspan=1>Branch</th>
                    <td colspan=3>IT</td>
                </tr>
                <tr>
                    <th id="th1" colspan=1 rowspan=2>Code</th>
                    <th id="th2" colspan=3 rowspan=2>Subject</th>
                    <th id="th3" colspan=4>Theory</th>
                    <th id="th4" colspan=3>Practical</th>
                    <th id="th5" colspan=1 rowspan=2>Overall</th>
                </tr>
                <tr>
                    <th colspan=1>E</th>
                    <th colspan=1>I</th>
                    <th colspan=1>V</th>
                    <th colspan=1>Total</th>
                    <th colspan=1>I</th>
                    <th colspan=1>V</th>
                    <th colspan=1>Total</th>
                </tr>
                <!-- ADD SUBJECT ALONG WITH MARKS -->
                <?php
                    $get_result_query = "SELECT B.subject, C.* FROM marks C INNER JOIN SUBJECT B ON C.code = B.code WHERE C.enrollment='".$_POST['enrollment']."';";
                    $result =  $db->query($get_result_query);
                    while($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td colspan=1>".$row['code']."</td>";
                        echo "<td colspan=3>".$row['subject']."</td>";
                        echo "<td colspan=1>".$row['TE']."</td>";
                        echo "<td colspan=1>".$row['TI']."</td>";
                        echo "<td colspan=1>".$row['TV']."</td>";
                        echo "<td colspan=1>".$row['Theory_total']."</td>";
                        echo "<td colspan=1>".$row['PI']."</td>";
                        echo "<td colspan=1>".$row['PV']."</td>";
                        echo "<td colspan=1>".$row['Practical_total']."</td>";
                        echo "<td colspan=1>".$row['Theory_total']."</td>";
                        echo "</tr>";
                    }
                ?>
                <!-- SUBJECT WITH MARKS END -->
                <tr id="footer">
                    <td colspan=12>@All Rights Reserved</td>
                </tr>
            </table>
        </div>
    </center>
</body>
</html>