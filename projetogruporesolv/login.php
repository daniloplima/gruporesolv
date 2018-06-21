<?php
$email_login = $_POST['email_login'];
$senha_login = $_POST['senha_login'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ProjetoResolv";

$conn = new mysqli($servername, $username, $password, $dbname);

$verificacao = "SELECT * FROM tb_usuario WHERE nm_email = '$email_login' AND cd_senha  = '$senha_login'";
$loginlist = mysqli_query($conn, $verificacao);
if($row = mysqli_fetch_assoc($loginlist)){
    session_start();
    $_SESSION['email'] = $row['nm_email'];
    header ('location: consolehotel.php');
} 
else {
    header ('location: index.php?l=f');
}

?>