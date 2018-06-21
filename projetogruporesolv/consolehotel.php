<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ProjetoResolv";

$endereco = "";

$buscador = "";

$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['buscar_hotel'])){ 
$buscador = $_POST['procura_hotel'];
 $query = "SELECT * FROM tb_hotel WHERE nm_nome = '$buscador'";    
 $listhotel = mysqli_query($conn, $query);
    
}
else {
 $query = "SELECT * FROM tb_hotel";
 $listhotel = mysqli_query($conn, $query);    
}
?>


<!doctype html>
<HTML>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <link rel="stylesheet"  type="text/css" href="../projetogruporesolv/css/style.css">
    <title>Cadastro de Usuario</title>
</head>
<body>
    <?php include'navbar.php' ?>
    <br>
    <div class="container"> 
    <form method="post">
        <div class="form-group">
            <label><h3>Nome</h3></label>
            <input type="text" style="display: inline;" class="form-control"  placeholder="Nome" name="procura_hotel">
            <br>
            <button type="submit" name="buscar_hotel" class="btn btn-primary">Buscar hotel</button>
        </div>
    </form>
    </div>  
    <div class="container">
        <center>
        <?php while ($row = mysqli_fetch_array($listhotel)) { ?>
                <hr>
                <form action="database.php" method="post">
                <div>   
                <?php echo "<img src='".$row['file_img']."' height='600' width='600'>"; ?>   
                </div>     
                <div><h4>Nome do Hotel</h4><?php echo "<span class='data-visible data-". $row['cd_hotel']."'>" . $row['nm_nome'] . "</span><input type='text' class='edit-input-invisible' name='at_nome_hotel' id='hotel-". $row['cd_hotel'] ."'>"?></div>
                    <div><h4>Descrição do Hotel</h4><?php echo "<span class='data-visible data-". $row['cd_hotel']."''>" . $row['nm_desc'] . "</span><input type='text' class='edit-input-invisible' name='at_desc_hotel' id='desc-". $row['cd_hotel'] ."'>"?></div>
                    <div><h4>Número do Hotel</h4><?php echo "<span class='data-visible data-". $row['cd_hotel']."''>" . $row['cd_num'] . "</span><input type='number' class='edit-input-invisible' name='at_numero_hotel' id='numero-". $row['cd_hotel'] ."'>"?></div>
                  <div><h4>Rua do Hotel</h4><?php echo "<span class='data-visible data-". $row['cd_hotel']."'>" . $row['nm_rua'] . "</span><input type='text' class='edit-input-invisible' name='at_rua_hotel' id='rua-". $row['cd_hotel'] ."'>"?></div>  
                    <div><h4>Cidade do Hotel</h4><?php echo "<span class='data-visible data-". $row['cd_hotel']."'>" . $row['nm_cidade'] . "</span><input type='text' class='edit-input-invisible' name='at_cidade_hotel' id='cidade-". $row['cd_hotel'] ."'>"?></div>   
                    <div><h4>Estado do Hotel</h4><?php echo "<span class='data-visible data-". $row['cd_hotel']."'>" . $row['nm_estado'] . "</span><input type='text' class='edit-input-invisible' name='at_estado_hotel' id='estado-". $row['cd_hotel'] ."'>"?></div>     
                <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/search?q=<?php echo $endereco = $row['cd_num'] . $row['nm_rua'] . $row['nm_cidade'] . $row['nm_estado'];?>&key=AIzaSyCcZZ8U-w804ErGYMZKE7ADdW-WcEzwKak"> </iframe>    
                <div><button type="button"  class="btn btn-primary" onclick="editHotel(<?php echo $row['cd_hotel'] ?>)">Editar</button> 
                    <?php echo "<button type='submit' name='atualizar_hotel' class='edit-btn-invisible' id='btnatt-". $row['cd_hotel'] ."'>Atualizar</button>" ?>
                    <?php echo "<button type='submit' class='btn btn-danger' name='deletar_hotel' id='btndlt-". $row['cd_hotel'] ."'>Deletar</button>" ?>
                    </div>
                <input type="hidden" name="ref_cd_hotel" value="<?php echo $row['cd_hotel']?>"> 
                </form>
                <hr>
        <?php } ?>
        </center>    
    </div>
    
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="js/scripthotel.js"></script>
</body>
</HTML> 