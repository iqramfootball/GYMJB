<html>
    <title>GYM JB</title>
    <head>
        <style>
        /* Body */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: url('gym.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        /* Content Start */
        .content {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            padding: 40px;
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .content h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }
        .content form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .content input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .content input[type="submit"], .content input[type="reset"] {
            background-color: coral;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .content input[type="submit"]:hover, .content input[type="reset"]:hover {
            background-color: #ff7f50;
        }
        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }
        /* Content End */
        /* Footer */
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: coral;
            color: white;
            text-align: center;
            padding: 10px 0;
            font-weight: bold;
        }
        </style>
    </head>
    <body>
        <!-- Code PHP Start -->
        <?php
        session_start();
        include("config.php");
        $error = '';

        if(isset($_POST['hantar'])){

            if(empty($_POST['username']) || empty($_POST['password'])){
               $error = "Username or Password is Invalid";
            } else{
                $username = mysqli_real_escape_string($sambungan, $_POST['username']);
                $password = mysqli_real_escape_string($sambungan, $_POST['password']);
                // Select * From
                $query = mysqli_query($sambungan, "SELECT * FROM jadual_daftarmasuk WHERE namapengguna='$username' AND katalaluan='$password'");    
                $rows = mysqli_num_rows($query);
                    if($rows == 1){
                    header("location:paparan.php");
                    } else{
                        $error = "Username of Password is Invalid";
                    } 
                    mysqli_close($sambungan);
            }
            }
        ?>
        <!-- HTML untuk Log In Start -->
        <div class="content">
        <h1>Log In Gym JB</h1>
        <form method="post">
            <input type="text" name="username" placeholder="Nama Pengguna" required>
            <input type="password" name="password" placeholder="Kata Laluan" required>
            <p class="error-message">
                <?php echo $error; ?></p>
            <input type="submit" value="Hantar" name="hantar">
            <input type="reset" value="Reset">
        </form>
    </div>
        <!--Footer--> 
        <div class="footer"> 
            Copyright &copy; Gym JB, 2025  
        </div> 
    </body>
</html>