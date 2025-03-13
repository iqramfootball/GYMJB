<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pendaftaran</title>
    <style>
        /* Body Style */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        /* Header Style */
        .tajuk {
            text-align: center;
            padding-top: 50px;
        }

        .tajuk h1 {
            color: #333;
        }

        /* Form Container Style */
        .dalam {
            border: 2px solid #333;
            border-radius: 10px;
            margin: 20px auto;
            padding: 40px;
            width: 400px;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Table Style */
        .jadual table {
            width: 100%;
        }

        .jadual td {
            padding: 10px;
        }

        .jadual input[type="text"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Button Style */
        .butang {
            text-align: center;
            margin-top: 20px;
        }

        .butang input[type="submit"] {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .butang input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <!-- Header Section Start-->
    <div class="tajuk">
        <h1>Daftar Pekerja</h1>
    </div>
    <!-- Header Section End -->

    <!-- Form Section Start -->
    <div class="dalam">
        <form method="post" action="">
            <div class="jadual">
                <table>
                    <tr>
                        <td>Id Pekerja</td>
                        <td>:</td>
                        <td><input type="text" name="idahli" required></td>
                    </tr>
                    <tr>
                        <td>Nama Pekerja</td>
                        <td>:</td>
                        <td><input type="text" name="namapekerja" required></td>
                    </tr>
                    <tr>
                        <td>No Telefon</td>
                        <td>:</td>
                        <td><input type="text" name="notel" required></td>
                    </tr>
                    <tr>
                        <td>No Kad Pengenalan</td>
                        <td>:</td>
                        <td><input type="text" name="noic" required></td>
                    </tr>
                </table>
            </div>
            <div class="butang">
                <input type="submit" value="SIMPAN MAKLUMAT" name="simpan">
            </div>
        </form>
    </div>
    <!-- Form Section End -->

    <!-- PHP Code Start -->
    <?php
    include('config.php');

    if (isset($_POST['simpan'])) {
        $idahli= $_POST['idahli'];
        $namapekerja = $_POST['namapekerja'];
        $notel =$_POST['notel'];
        $noic =$_POST['noic'];

        $query = mysqli_query($sambungan, "INSERT INTO jadual_pekerja (idahli, namapekerja, notel, noic) 
        VALUES ('$idahli', '$namapekerja', '$notel', '$noic')");

        if ($query) {
            header("Location: paparan.php");
            exit();
        } else {
            echo "<script>alert('Gagal menyimpan data!');</script>";
        }
    }
    ?>
    <!-- PHP Code End -->
</body>
</html>