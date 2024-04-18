<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Cadastro de Serviços</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Cadastro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="usuarios.php">Serviços</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php
                  // Inclui o arquivo de configuração
                  include("config.php");
                  
                  // Seleciona o usuário a ser editado com base no ID passado pela URL
                  $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
                  $res = $conn->query($sql) or die($conn->error);
                  $row = $res->fetch_object();
                ?>
                <form action="salvar.php" method="POST">
                    <input type="hidden" name="acao" value="editar">
                    <!-- Campo oculto para enviar o ID do usuário -->
                    <input type="hidden" name="id" value="<?php print $row->id; ?>">
                    <div class="form-group">
                        <label>Nome</label>
                        <!-- Campo para editar o nome, preenchido com o valor atual -->
                        <input type="text" name="nome" class="form-control" value="<?php print $row->nome; ?>">
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <!-- Campo para editar o e-mail, preenchido com o valor atual -->
                        <input type="email" name="email" class="form-control" value="<?php print $row->email; ?>">
                    </div>
                    <div class="form-group">
                        <label>Telefone</label>
                        <!-- Campo para editar o telefone, preenchido com o valor atual -->
                        <input type="text" name="telefone" class="form-control" value="<?php print $row->telefone; ?>">
                    </div>
                    <div class="form-group">
                        <label for="marca">Marca:</label>
                        <!-- Select para escolher a marca -->
                        <select name="marca" id="marca" class="form-control">
                            <?php
                                // Consulta as marcas disponíveis
                                $sql_marca = "SELECT * FROM marca";
                                $res_marca = $conn->query($sql_marca);
                                while($marca = $res_marca->fetch_assoc()) {
                                    echo "<option value='" . $marca['id'] . "'>" . $marca['nome'] . "</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Digite Serviço Desejado:</label>
                        <!-- Campo para editar o serviço desejado, preenchido com o valor atual -->
                        <input type="text" name="serviços" class="form-control" value="<?php print $row->serviços; ?>">
                    </div>
                    <div class="form-group">
                        <!-- Botão para enviar o formulário de edição -->
                        <button class="btn btn-success" type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Scripts do Bootstrap e jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>
