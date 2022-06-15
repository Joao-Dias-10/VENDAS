<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>

<body>

    <?php
    $codigo = $_POST['Codigo'];
    $nome = $_POST['Nome'];
    $valor = $_POST['Valor'];
    $qtd = $_POST['qtd'];
    $vlor2 = $valor * $qtd;


    if (isset($_POST['Nome'])) {

        function grupo($codigo, $nome)
        {
            include "config.php";
            $sql = "SELECT codigo FROM venda WHERE codigo='$codigo' and produto='$nome'";
            $query = $mysqli->query($sql);
            $total = mysqli_num_rows($query);

            return $total;
        }



        if (grupo($codigo, $nome) == 0) {

            $codigo = $_POST['Codigo'];
            $nome = $_POST['Nome'];
            $qtd = $_POST['qtd'];
        
                // pegar qtd do banco e subtrair
                $servidor = "127.0.0.1";
                $usuario = "root";
                $senha = "";
                $banco = "vendas";
                
                //String de coneção
                $conn = new mysqli($servidor,$usuario,$senha,$banco);
                  

$sql = "SELECT SUM(qtd) as qtd FROM estoque WHERE codigo = '$codigo'";
$sql = $conn->query($sql);
$row = $sql->fetch_assoc() ;
$soma = $row['qtd'] - $qtd;
$sub = $soma;

            // verificar se tem 

            // verificar se tem o suficiente

            include "config.php";
            $sql = "INSERT INTO venda (data,codigo,valor,qtd,produto) VALUES (NOW(),'$codigo','$vlor2','$qtd','$nome')";
            $query = $mysqli->query($sql);

            $sql = "UPDATE estoque SET codigo='$codigo',data = NOW(),produto ='$nome', Qtd ='$sub' WHERE codigo IN ('$codigo') and produto IN ('$nome')";
            $query = mysqli_query($mysqli, $sql);

    ?>

            <script language='javascript'>
                Swal.fire({
                    icon: 'success',
                    title: 'INSERIDO'
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        window.location.href = "../Vendas.php";
                    }
                })
            </script>

        <?php

        } else {


            // pegar qtd do banco e subtrair
            $servidor = "127.0.0.1";
            $usuario = "root";
            $senha = "";
            $banco = "vendas";

            //String de coneção
            $conn = new mysqli($servidor, $usuario, $senha, $banco);


            $sql = "SELECT SUM(qtd) as qtd FROM venda WHERE codigo = '$codigo'";
            $sql = $conn->query($sql);
            $row = $sql->fetch_assoc();
            $soma = $row['qtd'];
            $sub = $soma + $qtd;

           
            //--------------------
            $sql = "SELECT SUM(valor) as valor FROM venda WHERE codigo = '$codigo'";
            $sql = $conn->query($sql);
            $row = $sql->fetch_assoc();
            $soma = $row['valor'] +($valor * $qtd);
          


          
            include "config.php";
            $sql = "UPDATE venda SET data= NOW(),codigo = '$codigo',valor =' $soma', qtd =' $sub', produto='$nome' WHERE produto IN ('$nome')";
            $query = mysqli_query($mysqli, $sql);

            $codigo = $_POST['Codigo'];
            $nome = $_POST['Nome'];
            $qtd = $_POST['qtd'];
        
                // pegar qtd do banco e subtrair
                $servidor = "127.0.0.1";
                $usuario = "root";
                $senha = "";
                $banco = "vendas";
                
                //String de coneção
                $conn = new mysqli($servidor,$usuario,$senha,$banco);
                  

$sql = "SELECT SUM(qtd) as qtd FROM estoque WHERE codigo = '$codigo'";
$sql = $conn->query($sql);
$row = $sql->fetch_assoc() ;
$soma = $row['qtd'] - $qtd;
$sub = $soma;

            // verificar se tem 

            // verificar se tem o suficiente

            include "config.php";

            $sql = "UPDATE estoque SET codigo='$codigo',data = NOW(),produto ='$nome', Qtd ='$sub' WHERE codigo IN ('$codigo') and produto IN ('$nome')";
            $query = mysqli_query($mysqli, $sql);

        ?>


            <script language='javascript'>
                Swal.fire({
                    icon: 'success',
                    title: 'VENDA REALIZADA!!!'
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        window.location.href = "../Vendas.php";
                    }
                })
            </script>

        <?php

        }
    } else {
        ?>

        <script language='javascript'>
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Algo deu errado, tente novamente!'
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    window.location.href = "../Vendas.php";
                }
            })
        </script>

    <?php

    }
    //aa
    ?>


</body>

</html>
<?php
