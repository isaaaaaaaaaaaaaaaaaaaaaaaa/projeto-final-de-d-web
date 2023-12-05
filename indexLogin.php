<?php

         //testando se os valores estao corretos

  if (isset($_POST ['submit']))

  {


    include_once('config.php');


 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $cpf = $_POST ['cpf'];
 $genero = $_POST['genero'];
 $data_nascimento= $_POST['data_nascimento'];
 $senha= $_POST['senha'];

 $result = mysqli_query($conexao, "INSERT INTO cliente (NomeCliente, Email, Cpf, Senha, DataNasc, genero)
 VALUES ('$nome', '$email', '$cpf', '$senha', '$data_nascimento', '$genero' )");
  
  // Ao cadastrar um usuário
$senha = $_POST['senha'];
$senhaHash = password_hash($senha, PASSWORD_BCRYPT);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastre-se Prime-Books</title>
    <link rel="stylesheet" type="text/css" href="styles/styleLogin.css">
    <link rel="icon" href="assets/logo.png" />
    
   
</head>
<body>
 

    <div class="box">
        <form action="indexLogin.php" method="POST">
            <fieldset>
                <legend><b>Cadastre-se</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="number" name="cpf" id="cpf" class="inputUser" required>
                    <label for="cpf" class="labelInput">CPF</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Criar senha</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>

    
    /*  -- ------------------------- CRUD -------------------------------- 
    
                // Read
            $result = mysqli_query($conexao, "SELECT * FROM cliente");
            $clientes = mysqli_fetch_all($result, MYSQLI_ASSOC);

            // Update
            if (isset($_POST['update'])) {
                $id = $_POST['id'];
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $cpf = $_POST['cpf'];
                $genero = $_POST['genero'];
                $data_nascimento = $_POST['data_nascimento'];

                $update_query = "UPDATE cliente SET NomeCliente='$nome', Email='$email', Cpf='$cpf', DataNasc='$data_nascimento', genero='$genero' WHERE id=$id";
                mysqli_query($conexao, $update_query);
            }

            // Delete
            if (isset($_GET['delete'])) {
                $id = $_GET['delete'];
                mysqli_query($conexao, "DELETE FROM cliente WHERE id=$id");
            }

    */
    
</body>
</html>