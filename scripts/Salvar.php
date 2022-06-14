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
    $nome = $_POST['nome'];
    $operacao = $_POST['operacao'];

    if(isset( $_POST['nome'])){
    

    function grupo($operacao, $nome)
    {
        include "config.php";
        $sql = "SELECT operacao FROM arquivo WHERE operacao='$operacao' and nome='$nome'";
        $query = $mysqli->query($sql);
        $total = mysqli_num_rows($query);

        return $total;
    }





    if (grupo($operacao, $nome) == 0) {


            $nome = $_POST['nome'];
            $arquivo = $operacao . $arquivo['name'];
            $operacao = $_POST['operacao'];
            $variavel = "s";
            $id = uniqid();



            $sql = "INSERT INTO arquivo (codigo, nome,arquivo,operacao,data) VALUES ('$id','$nome','$arquivo','$operacao',NOW())";
            $query = $mysqli->query($sql);



        ?>



            <script language='javascript'>
                Swal.fire({
                    icon: 'success',
                    title: 'INSERIDO'
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        window.location.href = "../salvar.php";
                    }
                })
            </script>

        <?php

    } else {

            $nome = $_POST['nome'];
            $arquivo = $operacao . $arquivo['name'];
            $operacao = $_POST['operacao'];
            $variavel = "s";
            $id = uniqid();


            include "config.php";

            $sql = "UPDATE arquivo SET codigo='$id', nome ='$nome',arquivo ='$arquivo',operacao ='$operacao', data = NOW() WHERE operacao IN ('$operacao') and nome IN ('$nome')";
            $query = mysqli_query($mysqli, $sql)


        ?>




            <script language='javascript'>
                Swal.fire({
                    icon: 'success',
                    title: 'ATUALIZADO NO SISTEMA'
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        window.location.href = "../salvar.php";
                    }
                })
            </script>

    <?php

        }
    } else{
        ?>
        
            <script language='javascript'>
                Swal.fire({
                    icon: 'warning',
                    title: 'Oops...',
                    text: 'Tamanho do arquivo excede o permitido pelo sistema!'
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        window.location.href = "../salvar.php";
                    }
                })


            </script>
            

        <?php
        

    }
    ?>


</body>

</html>
<?php
