<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?PHP

        include('includes/conexao.php');
        $nome = $_POST['nome'];
        $estado = $_POST['estado'];
        echo "nome: $nome <br>";
        echo "estado $estado<br>";
       
        $sql = "INSERT INTO cidade (nome, estado)";
        $sql .= " VALUES ('".$nome."', '".$estado."')";
      
        echo $sql;
        
        $result = mysqli_query($con,$sql);
        if($result){
                echo "<h2>Dados cadastrados com sucesso!";
            }
            else{
                echo "<h2>erro ao se cadastrar!";
                echo mysqli_error($con);
            }

                


    ?>
</body>
</html>