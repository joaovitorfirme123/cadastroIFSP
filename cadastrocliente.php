<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento de Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        h2 {
            color: #333;
        }
        .success {
            color: green;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            include('includes/conexao.php');
            
            // Verifica se o formulário foi enviado
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];
                
                // Limpa e valida os dados do formulário
                $nome = mysqli_real_escape_string($con, $nome);
                $email = mysqli_real_escape_string($con, $email);
                $senha = mysqli_real_escape_string($con, $senha);
                
                // Verifica se os campos estão preenchidos
                if (!empty($nome) && !empty($email) && !empty($sanha)) {
                    // Monta a query SQL para inserção
                    $sql = "INSERT INTO cliente (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
                    
                    // Executa a query
                    $result = mysqli_query($con, $sql);
                    
                    // Verifica se a inserção foi bem-sucedida
                    if ($result) {
                        echo "<h2 class='success'>Dados cadastrados com sucesso!</h2>";
                    } else {
                        echo "<h2 class='error'>Erro ao cadastrar os dados!</h2>";
                        echo "<p>" . mysqli_error($con) . "</p>";
                    }
                } else {
                    echo "<h2 class='error'>Por favor, preencha todos os campos do formulário!</h2>";
                }
            } else {
                echo "<h2 class='error'>Erro: método de requisição inválido!</h2>";
            }
        ?>
    </div>
</body>
</html>
