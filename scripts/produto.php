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
    $fornecedor = $_POST['Fornecedor'];
    $custo = $_POST['Custo'];
    $valor = $_POST['Valor'];


    if (isset($_POST['Nome'])) {

        function grupo($codigo, $nome)
        {
            include "config.php";
            $sql = "SELECT codigo FROM produtos WHERE codigo='$codigo' and nome='$nome'";
            $query = $mysqli->query($sql);
            $total = mysqli_num_rows($query);

            return $total;
        }



        if (grupo($codigo, $nome) == 0) {

        
            // verificar se tem o suficiente

            include "config.php";
            $sql = "INSERT INTO produtos (codigo,nome,data,fornecedor,custo,venda) VALUES ('$codigo',' $nome',NOW(),'$fornecedor','$custo','$valor')";
            $query = $mysqli->query($sql);  

    ?>

            <script language='javascript'>
                Swal.fire({
                    icon: 'success',
                    title: 'INSERIDO'
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        window.location.href = "../ADM_produtos.php";
                    }
                })
            </script>

        <?php

        } else {



            include "config.php";
            $sql = "UPDATE produtos SET codigo='$codigo',nome ='$nome',data = NOW(), custo ='$custo', venda='$valor' WHERE codigo IN ('$codigo') and produto IN ('$nome')";
            $query = mysqli_query($mysqli, $sql);

        ?>


            <script language='javascript'>
                Swal.fire({
                    icon: 'success',
                    title: 'ATUALIZADO NO SISTEMA'
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        window.location.href = "../ADM_produtos.php";
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
                    window.location.href = "../ADM_produtos.php";
                }
            })
        </script>

    <?php

    }
    ?>


</body>

</html>
<?php
