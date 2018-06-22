<?php include'database.php'; 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION['email'])){
    header ('location: index.php');
}

?>
<!doctype html>
<HTML>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet"  type="text/css" href="../projetogruporesolv/css/style.css">
    <title>Cadastro de Hotel</title>
</head>
<body>
    <?php include'navbar.php' ?>
    <div class="container" style="border-radius: 15px; margin-top: 25px; margin-bottom: 25px;">
        <form method="post" action="database.php" enctype="multipart/form-data">
              <div class="form-group" >
                <label>Nome do Hotel</label>
                <input type="text" class="form-control" placeholder="Nome do Hotel" name="nome_hotel">
              </div>
              <div class="form-group">
                 <label>Descrição</label>
                 <input type="text" class="form-control" placeholder="Descrição do hotel" name="desc_hotel" rows="3">
              </div>
              <div class="form-group">
                <label>Rua </label>
                <input type="text" class="form-control"  name="rua_hotel" placeholder="Rua do Hotel">
              </div>
              <div class="form-group">
                <label>Cidade </label>
                <input type="text" class="form-control"  name="cidade_hotel" placeholder="Cidade do Hotel">
              </div>
              <div class="form-group">
                <label>Estado </label>
                <input type="text" class="form-control"  name="estado_hotel" placeholder="Estado do Hotel">
              </div>            
              <div class="form-group">
                <label>Número </label>
                <input type="number" class="form-control" name="numero_hotel" placeholder="Número do Hotel">
              </div>            
              <div class="form-group">
                <label for="exampleFormControlFile1">Foto</label>
                <input type="file" name="foto_hotel" class="form-control-file">
              </div>
             <button type="submit" name="salvar_hotel" class="btn btn-primary mb-2">Cadastrar hotel</button>
        </form>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>
</HTML>