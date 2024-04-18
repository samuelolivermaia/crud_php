<?php
    // Inclui o arquivo de configuração
    include("config.php");

    // Verifica a ação a ser realizada (cadastrar, editar ou excluir)
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            // Cria um novo registro na tabela usuarios com os dados recebidos do formulário de cadastro
            $sql = "INSERT INTO usuarios 
                        (nome, email, telefone, marca, serviços)
                    VALUES
                        ('".$_POST["nome"]."','".$_POST["email"]."','".$_POST["telefone"]."','".$_POST["marca"]."', '".$_POST["serviços"]."')";

            // Executa a consulta
            $res = $conn->query($sql) or die($conn->error);

            // Verifica se o cadastro foi realizado com sucesso e exibe uma mensagem
            if($res==true){
                print "<script>alert('Cadastrou com sucesso!');</script>";
                print "<script>location.href='usuarios.php';</script>";
            }else{
                print "<script>alert('Não foi possível cadastrar.');</script>";
                print "<script>location.href='usuarios.php';</script>";
            }
            break;
        
        case 'editar':
            // Atualiza os dados de um usuário com base no ID recebido do formulário de edição
            $sql = "UPDATE usuarios SET
                        nome='".$_POST["nome"]."',
                        email='".$_POST["email"]."',
                        telefone='".$_POST["telefone"]."',
                        marca='".$_POST["marca"]."',
                        serviços='".$_POST["serviços"]."'
                    WHERE
                        id=".$_POST["id"];

            // Executa a consulta
            $res = $conn->query($sql) or die($conn->error);

            // Verifica se a edição foi realizada com sucesso e exibe uma mensagem
            if($res==true){
                print "<script>alert('Editou com sucesso!');</script>";
                print "<script>location.href='usuarios.php';</script>";
            }else{
                print "<script>alert('Não foi possível editar.');</script>";
                print "<script>location.href='usuarios.php';</script>";
            }
            break;

        case 'excluir':
            // Exclui um usuário com base no ID recebido da página de usuários
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            // Executa a consulta
            $res = $conn->query($sql) or die($conn->error);

            // Verifica se a exclusão foi realizada com sucesso e exibe uma mensagem
            if($res==true){
                print "<script>alert('Excluiu com sucesso!');</script>";
                print "<script>location.href='usuarios.php';</script>";
            }else{
                print "<script>alert('Não foi possível excluir.');</script>";
                print "<script>location.href='usuarios.php';</script>";
            }
            break;
    }
?>
