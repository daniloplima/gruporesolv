<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ProjetoResolv";

$buscador = "";

$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['buscar_usuario'])){ 
$buscador = $_POST['procura_usuario'];
 $query = "SELECT * FROM tb_usuario WHERE nm_usuario = '$buscador'";
 $list = mysqli_query($conn, $query);
}
else {
 $query = "SELECT * FROM tb_usuario";
 $listusuario = mysqli_query($conn, $query);    
}
?>

 <?php include'database.php' ?>
<!doctype html>
<HTML>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"  type="text/css" href="../projetogruporesolv/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Cadastro de Usuario</title>
</head>
<body>
    <?php include'navbar.php' ?>
    <br>
    <div class="container"> 
    <form method="post">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" style="display: inline;" class="form-control"  placeholder="Nome" name="procura_usuario">
            <button type="submit" name="buscar_usuario" class="btn glyphicon glyphicon-search">Buscar usuario</button>
        </div>
    </form>
    </div>  
    
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Senha</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_array($listusuario)) { ?>
            <tr>
                <form action="database.php" method="post">
                <td><?php echo "<span class='data-visible data-". $row['cd_usuario']."'>" . $row['nm_usuario'] . "</span><input type='text' class='edit-input-invisible' name='at_nome_usuario' id='user-". $row['cd_usuario'] ."'>"?></td>
                <td><?php echo "<span class='data-visible data-". $row['cd_usuario']."''>" . $row['nm_email'] . "</span><input type='email' class='edit-input-invisible' name='at_email_usuario' id='email-". $row['cd_usuario'] ."'>"?></td>
                <td><?php echo "<span class='data-visible data-". $row['cd_usuario']."''>" . $row['cd_senha'] . "</span><input type='password' class='edit-input-invisible' name='at_senha_usuario' id='password-". $row['cd_usuario'] ."'>"?></td>
                <td><button type="button" onclick="editUsuario(<?php echo $row['cd_usuario'] ?>)">Editar</button> 
                    <?php echo "<button type='submit' name='atualizar_usuario' class='edit-btn-invisible' id='btnatt-". $row['cd_usuario'] ."'>Atualizar</button>" ?>
                    <?php echo "<button type='submit' name='deletar_usuario' id='btndlt-". $row['cd_usuario'] ."'>Deletar</button>" ?>
                </td>
                <input type="hidden" name="ref_cd_usuario" value="<?php echo $row['cd_usuario']?>"> 
                </form>
            </tr>
        <?php } ?>
    </tbody>
    </table>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="js/scriptusuario.js"></script>
</body>
</HTML>    