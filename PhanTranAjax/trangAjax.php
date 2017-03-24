<?php
    require("dbCon.php");
    $sotin1trang = 5;

    $trang = $_GET["trang"];
    settype($trang, "int");

    $from = ($trang -1) * $sotin1trang;

    $qr = " SELECT * FROM tin 
            ORDER BY idTin ASC
            LIMIT $from, $sotin1trang
    ";

    $tin = mysql_query($qr);
    while($row = mysql_fetch_array($tin)){
       echo "<div class='motTin'>";
       echo $row["idTin"]. "-" .$row["TieuDe"];
       echo "</div>";
    }
?>