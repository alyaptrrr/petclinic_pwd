<?php
session_start();
if(!isset($_SESSION['login'])) {
    echo "<script> alert('PLEASE LOGIN FIRST!');window.location.replace('../login/form_login230018.php');</script>";
}
if($_SESSION['userType'] != 'Manager') {
    echo "<script> alert('ACCESS FORBIDDEN!');window.location.replace('../index.php');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Clinic</title>
</head>

<body>
    <h1>Alys Pet Clinic</h1>
    <hr>
    <h3>Monthly Report</h3>
    <?php
    $month = array(
        'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November', 
        'Desember');

    $year = date('Y');
    ?>
    <form>
        <p>Select
            <select name="month" required>
                <option value="">Month</option>
                <?php for ($m = 1; $m <= 12; $m++) {  ?>
                    <option value="<?= $m ?>" (isset($_GET['month']) && $_GET['month'] == $m ? 'selected' :)<?= $month[$m - 1] ?>></option>
                <?php } ?>
            </select>
            <select name="year" required>
                <option value="">Year</option>
                <?php for ($y = 0; $y <= 2; $y++) {  ?>
                    <option value="<?= $year - $y ?>"><?= $year - $y ?></option>
                <?php } ?>
            </select>
            <input type="submit" value="View Report">
        </p>
    </form>
    <?php
    if (isset($_GET['year'])) {
        include '../connection_230018.php';
        // $query="SELECT * FROM medicals_230018";
        $query = "SELECT m.mrDate_230018, p.petName_230018, d.docName_230018, p.petOwn_230018, 
        m.cost_230018 FROM medicals_230018 AS m, doctors_230018 AS d, pets_230018 AS p WHERE 
        m.petId_230018=p.petId_230018 AND m.doctorsId_230018=d.doctorsId_230018 AND 
        MONTH(m.mrDate_230018)='$_GET[month]' AND YEAR(m.mrDate_230018)='$_GET[year]'";
        $report = mysqli_query($db_connection, $query);

    ?>
        <h4>Report Periode <?=$month[$_GET['month']-1]?> - <?=$_GET['year']?></h4>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Date</th>
                <th>Pet</th>
                <th>Doctors</th>
                <th>Owner</th>
                <th>Pay ($)</th>
            </tr>
            <?php
            if (mysqli_num_rows($report) > 0) {
                $i = 1;
                $total = 0;
                foreach ($report as $data) :
                    $total = $total + $data['cost_230018'];
            ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $data['mrDate_230018'] ?></td>
                        <td><?= $data['petName_230018'] ?></td>
                        <td><?= $data['docName_230018'] ?></td>
                        <td><?= $data['petOwn_230018'] ?></td>
                        <td align="right"><?= $data['cost_230018'] ?></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <th colspan="7" align="right">Total : $ <?= $total ?></th>
                </tr>
            <?php } else { ?>
                <tr>
                    <td colspan="7" align="center">No Record!</td>
                </tr>
            <?php } ?>
        </table>
    <?php } ?>
    <p><a href="../index.php">
            << Back Home</a>
    </p>
</body>
</html>