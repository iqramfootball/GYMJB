<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KIRA BMI</title>
    <style>
        /* Body Style */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
        }
        h1 {
            color: #333;
        }
        /* Table Style */
        table {
            border-collapse: collapse;
            width: 300px;
            margin: 20px 0;
        }
        td, th {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #333;
            color: white;
        }
        input[type="number"] {
            width: 100%;
            padding: 5px;
            box-sizing: border-box;
        }
        button {
            padding: 10px 20px;
            margin: 5px;
            border: none;
            background-color: #333;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #555;
        }
        .jadual {
            margin-top: 20px;
        }
        #keputusan {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- Form Style Start -->
    <h1>KIRA BMI</h1>
    <form onsubmit="return false;">
        <table>
            <tr>
                <td><label for="berat">Berat (KG): </label></td>
                <td><input type="number" id="berat" step="0.1" required></td>
            </tr>
            <tr>
                <td><label for="tinggi">Tinggi (M): </label></td>
                <td><input type="number" id="tinggi" step="0.01" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="button" onclick="hantar()">HANTAR</button>
                    <button type="button" onclick="reset()">RESET</button>
                </td>
            </tr>
        </table>
    </form>
    <!-- Form STyle End -->

    <br>
    <!-- Jadual Start -->
    <div class="jadual">
        <table border="1">
            <tr>
                <th>Berat</th>
                <th>Tinggi</th>
                <th>BMI</th>
                <th>Keputusan</th>
            </tr>
            <tr>
                <td id="berat3"></td>
                <td id="tinggi3"></td>
                <td id="bmi"></td>
                <td id="keputusan"></td>
            </tr>
        </table>
    </div>
    <!-- Jadual End -->

    <!-- JS Start -->
    <script>
        function hantar() {
            var berat = parseFloat(document.getElementById("berat").value);
            var tinggi = parseFloat(document.getElementById("tinggi").value);

            if (isNaN(berat) || isNaN(tinggi) || berat <= 0 || tinggi <= 0) {
                alert("Sila masukkan nilai berat dan tinggi yang sah!");
                return;
            }

            // Calculate BMI
            var bmi = berat / (tinggi * tinggi);
            document.getElementById("berat3").innerHTML = berat.toFixed(1);
            document.getElementById("tinggi3").innerHTML = tinggi.toFixed(2);
            document.getElementById("bmi").innerHTML = bmi.toFixed(2);

            // BMI kategori
            var keputusan = "";
            var warna = "";

            if (bmi < 18.5) {
                keputusan = "KURUS";
                warna = "red";
            } else if (bmi >= 18.5 && bmi <= 25) {
                keputusan = "NORMAL";
                warna = "yellowgreen";
            } else if (bmi >= 25 && bmi <= 30) {
                keputusan = "GEMUK";
                warna = "orange";
            } else {
                keputusan = "OBESITI";
                warna = "crimson";
            }

            // Keputusan
            document.getElementById("keputusan").innerHTML = keputusan;
            document.getElementById("keputusan").style.backgroundColor = warna;
        }

        function reset() {
            document.getElementById("berat").value = "";
            document.getElementById("tinggi").value = "";
            document.getElementById("berat3").innerHTML = "";
            document.getElementById("tinggi3").innerHTML = "";
            document.getElementById("bmi").innerHTML = "";
            document.getElementById("keputusan").innerHTML = "";
            document.getElementById("keputusan").style.backgroundColor = "transparent";
        }
    </script>
    <!-- JS End -->
</body>
</html>