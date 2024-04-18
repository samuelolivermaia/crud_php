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
                <form action="salvar.php" method="POST">
                    <!-- Campo oculto para indicar a ação de cadastro -->
                    <input type="hidden" name="acao" value="cadastrar">
                    <div class="form-group">
                        <label>Nome</label>
                        <!-- Campo para inserir o nome do usuário -->
                        <input type="text" name="nome" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <!-- Campo para inserir o e-mail do usuário -->
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Telefone</label>
                        <!-- Campo para inserir o telefone do usuário -->
                        <input type="text" name="telefone" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="marca"><strong>Marca:</strong></label>
                        <!-- Select para escolher a marca -->
                        <select name="marca"> 
                        <option value="" id="marca" selected>Selecione opção</option>
                        <option value="honda" id="honda">Honda</option>
                        <option value="yamaha" id="yamaha">Yamaha</option>
                        <option value="Dafra" id="Dafra">Dafra</option>
                        <option value="Triumph" id="Triumph">Triumph</option>
                        <option value="Traxx" id="Traxx">Traxx</option>
                        <option value="Shineray" id="Shineray">Shineray</option>
                        <option value="Kawasaki" id="Kawasaki">Kawasaki</option>
                        <option value="Suzuki" id="Suzuki">Suzuki</option>
                        <!-- Outras opções de marcas -->
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="serviços">Digite Serviço Desejado:</label><br>
                      <!-- Campo para inserir o serviço desejado -->
                      <input type="text" id="serviços" name="serviços" size="90" required><br><br>
                    </div>  
                     <div class="form-group">
                        <!-- Botão para enviar o formulário de cadastro -->
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
