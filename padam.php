<!-- Padam Php Start -->
<?php
    include("config.php");

    if(isset($_GET['idahli'])) {
        $idahli = $_GET['idahli'];
    }
    else {
        $idahli="";
    }

    mysqli_query($sambungan ,
    "DELETE FROM jadual_pekerja
    WHERE idahli = '".$idahli."' ");

    header("location:paparan.php");
?>
<!-- Padam Php End -->