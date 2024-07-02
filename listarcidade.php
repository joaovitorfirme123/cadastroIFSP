<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Cidades</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ccc;
        }
        th {
            background-color: #007bff;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .back-button {
            margin-top: 20px;
            text-align: center;
        }
        .back-button a {
            text-decoration: none;
            padding: 10px 20px;
            background-color: #6c757d;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        .back-button a:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            include('includes/conexao.php');
            $sql = "SELECT * FROM cidade";
            $result = mysqli_query($con, $sql);
        ?>

        <h1>Consulta de Cidades</h1>
        
        <table>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Estado</th>
            </tr>

            <?php
                while($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['nome']."</td>";
                    echo "<td>".$row['estado']."</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>

    
    <div class="back-button">
        <a href="index.html">Volte para a página inicial</a>
    </div>
</body>
</html>
