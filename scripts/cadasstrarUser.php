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

    $funcao = $_POST['funcao'];
    $nome = $_POST['Nome'];
    $Usuario = $_POST['Usuario'];
    $Login = $_POST['Login'];
    $Senha = $_POST['Senha'];


    if(isset( $_POST['Nome'])){
    

    function grupo($Usuario)
    {
        include "config.php";
        $sql = "SELECT usuario FROM login WHERE usuario='$Usuario'";
        $query = $mysqli->query($sql);
        $total = mysqli_num_rows($query);

        return $total;
        
    }



    

    if (grupo($Usuario) <> 0) {

        ?>

            <script language='javascript'>
                Swal.fire({
                    title: 'Oops...',
                    title: 'Nome de usuário já esta sendo usado!'
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        window.location.href = "../ADM_usernew.php";
                    }
                })
            </script>

    <?php



    } else {
        include "config.php";
        
        
        $sql = "INSERT INTO login (funcao,usuario,senha,nome,login) VALUES ('$funcao','$Usuario','$Senha',' $nome','$Login')";
        $query = $mysqli->query($sql);
        



    ?>



        <script language='javascript'>
            Swal.fire({
                icon: 'success',
                title: 'Cadastrado!'
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    window.location.href = "../ADM_usernew.php";
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
                    text: 'Preencha todos os campos e tente novamente!'
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        window.location.href = "../ADM_usernew.php";
                    }
                })


            </script>
            

        <?php
        

    }
    ?>


</body>

</html>
<?php
