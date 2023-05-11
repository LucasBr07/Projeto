<?php
    require "connect.php";
    if(isset($_GET["select"])){
        
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        form {
            border: 1px solid black;
            padding: 1rem;
            margin-bottom: 1rem;
        }

        table, tr, td {
            border: 1px solid #000;
            padding: 1rem;
        }
    </style>
</head>
<body>
    <form action="adicionar.php" method="get">
        <label for="nome">nome</label>
        <input type="text" name="nome" id="nome"><br>
        <label for="nascimento">nascimento</label>
        <input type="date" name="nascimento" id="nascimento"><br>
        <label for="renda">renda</label>
        <input type="number" name="renda" id="renda"><br>
        <input type="submit" value="enviar">
    </form>
    <table>
    <?php
        $resultado = $conn->query("SELECT * FROM `aula1`");
        if($resultado->num_rows > 0){
            while($row = $resultado->fetch_assoc()){
                echo "
                <tr>
                    <td>".$row['nome']."</td>
                    <td>".$row['nascimento']."</td>
                    <td>".$row['renda']."</td>
                </tr>";
            }
        }
    ?>
    </table>
</body>
</html>