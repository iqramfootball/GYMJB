<?php
$sambungan = mysqli_connect("localhost", "root", "", "gymjb");
if (!$sambungan) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<?php
$severname = "localhost";
$username = "root";
$password = "";
$db = "gymjb";
$sambungan = mysqli_connect($severname, $username, $password,$db) or die("Unabel to connect");

$sql="SELECT * FROM jadual_pelanggan INNER JOIN jadual_gym ON jadual_pelanggan.idgym=jadual_gym.idgym";

?>