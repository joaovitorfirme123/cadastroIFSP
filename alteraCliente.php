<?php
    include('includes/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM cliente WHERE id=$id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Cidade</title>
</head>
<body>
    <form action="alteracidadeexe.php" method="post">
        <fieldset>
            <legend>Alterar Cidade</legend>
            <div>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" value=<?php echo $row['nome']?>>
            </div>
            <div>
            <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" value=<?php echo $row['nome']?>>
            </div>
            <div>
                <button type="submit">Alterar</button>
            </div>

            <div>
                <input type="hidden" name="id" value=<?php echo $row['id']?>>
            </div>
        </fieldset>
    </form>

    <div class="back-button">
        <a href="index.html">Volte para a página inicial</a>
    </div>
</body>
</html>
