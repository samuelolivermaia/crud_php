<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Meta tags necessárias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Lista de Usuários</title>
  </head>
  <body>
    <!-- Barra de navegação -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <!-- Link para a página de cadastro -->
            <a class="nav-link" href="index.php">Cadastro</a>
          </li>
          <li class="nav-item">
            <!-- Link para a página de serviços -->
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

                    // Consulta todos os usuários no banco de dados
                    $sql = "SELECT * FROM usuarios";
                    $res = $conn->query($sql) or die($conn->error);
                    $qtd = $res->num_rows;

                    if($qtd > 0){
                      // Se houver resultados, exibe a quantidade de resultados encontrados
                      print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
                      // Exibe uma tabela com os dados dos usuários
                      print "<table class='table table-striped table-hover'>";
                      print "<tr>";
                        print "<th>#</th>";
                        print "<th>Nome</th>";
                        print "<th>E-mail</th>";
                        print "<th>Telefone</th>";
                        print "<th>Marca</th>";
                        print "<th>Serviço à fazer</th>";
                        print "<th>Ações</th>";
                        print "</tr>";
                      while($row = $res->fetch_object()){
                        // Exibe uma linha para cada usuário com botões de edição e exclusão
                        print "<tr>";
                        print "<td>".$row->id."</td>";
                        print "<td>".$row->nome."</td>";
                        print "<td>".$row->email."</td>";
                        print "<td>".$row->telefone."</td>";
                        print "<td>".$row->marca."</td>";
                        print "<td>".$row->serviços."</td>";
                        print "<td>
                                 <!-- Botão para editar o usuário -->
                                 <button class='btn btn-success' onclick=\"location.href='editar-usuario.php?id=".$row->id."';\">Editar</button>
                                 <!-- Botão para excluir o usuário -->
                                 <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='salvar.php?acao=excluir&id=".$row->id."';}else{false;}\">Excluir</button>
                               </td>";
                        print "</tr>";
                      }
                      print "</table>";
                      
                    }else{
                      // Se não houver resultados, exibe uma mensagem
                      print "<br><h1>Nenhum resultado encontrado</h1>";
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- Scripts do Bootstrap e jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
           
  </body>
</html>