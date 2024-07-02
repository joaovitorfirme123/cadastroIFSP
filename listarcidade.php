<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listagem de cidade</title>
</head>
<body>
    <?php
            include('includes/conexao.php');
            $sql = "SELECT * FROM  cidade";

            $result =  mysqli_query($con,$sql);

            


    ?>

    <h1>consulta cidade</h1>
    <table align="center"  border="1" width="500">
        <tr>
            <th>código</th>
            <th>nome</th>
            <th>estado</th>

        </tr>

        <?php
            while($row = mysqli_fetch_array($result)){

                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nome']."</td>";
                echo "<td>".$row['estado']."</td>";
                echo "</tr>";
            }
        ?>






    </table>
</body>
</html>