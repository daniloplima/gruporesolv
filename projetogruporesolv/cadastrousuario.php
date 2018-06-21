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
        <form method="post" action="database.php">
              <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control"  placeholder="Nome" name="nome_usuario">
              </div>
              <div class="form-group">
                <label>E-mail</label>
                <input type="email" class="form-control"  placeholder="E-mail@exemplo.com.br" name="email_usuario">
              </div>
              <div class="form-group">
                <label>Senha</label>
                <input type="password" class="form-control"  placeholder="Senha" name="senha_usuario">
              </div>
             <button type="submit" name="salvar_usuario" class="btn btn-primary mb-2">Cadastrar usuario</button>
        </form>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>
</HTML>