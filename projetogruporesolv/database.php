<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ProjetoResolv";

//variaveis de usuarios
$nome_usuario = "";
$email_usuario = "";
$senha_usuario = "";
$cd_usuario = "";

//variaveis de hotel
$nome_hotel = "";
$desc_hotel = "";
$rua_hotel = "";
$cidade_hotel = "";
$estado_hotel = "";
$num_hotel = "";
$img_hotel ="";
$cd_hotel = "";

$conn = new mysqli($servername, $username, $password, $dbname);


//<---------------------------operações de usuario--------------------------------------->

//insert de usuarios
if (isset($_POST['salvar_usuario'])) {
    $nome_usuario = $_POST['nome_usuario'];
    $email_usuario = $_POST['email_usuario'];
    $senha_usuario = $_POST['senha_usuario'];

    $query = "INSERT INTO tb_usuario(nm_usuario, nm_email, cd_senha) VALUES ('$nome_usuario', '$email_usuario', '$senha_usuario')";
    mysqli_query($conn, $query);
    header('location: cadastrousuario.php');
}

//update de usuario

if (isset($_POST['atualizar_usuario'])) {
    $nome_usuario = $_POST['at_nome_usuario'];
    $email_usuario = $_POST['at_email_usuario'];
    $senha_usuario = $_POST['at_senha_usuario'];
    $cd_usuario = $_POST['ref_cd_usuario'];
    
    $query = "UPDATE tb_usuario SET nm_usuario = '$nome_usuario',  nm_email = '$email_usuario', cd_senha = '$senha_usuario' WHERE cd_usuario = $cd_usuario";
    mysqli_query($conn, $query);
    header('location: consoleusuario.php');
}

//deletar usuario 

if (isset($_POST['deletar_usuario'])) {

    $cd_usuario = $_POST['ref_cd_usuario'];
    
    $query = "DELETE FROM tb_usuario WHERE cd_usuario = $cd_usuario";
    mysqli_query($conn, $query);
    header('location: consoleusuario.php');
}

//<---------------------------operações de hotel--------------------------------------->

//insert de hotel
 
if (isset($_POST['salvar_hotel'])) {
    $nome_hotel =  $_POST['nome_hotel'];
    $desc_hotel = $_POST['desc_hotel'];
    $rua_hotel = $_POST['rua_hotel'];
    $cidade_hotel = $_POST['cidade_hotel'];
    $estado_hotel = $_POST['estado_hotel'];
    $num_hotel = $_POST['numero_hotel'];
    $img_hotel = $_FILES['foto_hotel']['name'];
   
    $target_dir = "projetogruporesolv/";
    move_uploaded_file($_FILES["foto_hotel"]["tmp_name"], $img_hotel);
    
    $query = "INSERT INTO tb_hotel(nm_nome, nm_desc, nm_rua, nm_cidade, nm_estado, cd_num, file_img) VALUES ('$nome_hotel','$desc_hotel','$rua_hotel','$cidade_hotel','$estado_hotel','$num_hotel','$img_hotel')";
    mysqli_query($conn, $query);
    header('location: cadastrohotel.php');
   
}

//update de hotel

if (isset($_POST['atualizar_hotel'])) {
    $nome_hotel =  $_POST['at_nome_hotel'];
    $desc_hotel = $_POST['at_desc_hotel'];
    $rua_hotel = $_POST['at_rua_hotel'];
    $cidade_hotel = $_POST['at_cidade_hotel'];
    $estado_hotel = $_POST['at_estado_hotel'];
    $num_hotel = $_POST['at_numero_hotel'];
    $cd_hotel = $_POST['ref_cd_hotel'];
    
    $query = "UPDATE tb_hotel SET nm_nome = '$nome_hotel',  nm_desc = '$desc_hotel', nm_rua = '$rua_hotel', nm_cidade = '$cidade_hotel', nm_estado = '$estado_hotel', cd_num = '$num_hotel' WHERE cd_hotel = $cd_hotel";
    mysqli_query($conn, $query);
    header('location: consolehotel.php');
}

if (isset($_POST['deletar_hotel'])) {

    $cd_hotel = $_POST['ref_cd_hotel'];
    
    $query = "DELETE FROM tb_hotel WHERE cd_hotel = $cd_hotel";
    mysqli_query($conn, $query);
    header('location: consolehotel.php');
}

?>