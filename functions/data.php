<?php

    header('Content-Type: application/json');

    $conn = mysqli_connect("localhost","root","","togetsuite_bar");
    $sqlQuery = "SELECT pr_designation, SUM(fa_quantite) as total FROM tsb_factures GROUP BY pr_designation";
    $result = mysqli_query($conn,$sqlQuery);
    $data = array();

    foreach ($result as $row) {
        $data[] = $row;
    }

    mysqli_close($conn);
    echo json_encode($data);
?>