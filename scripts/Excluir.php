<html lang="pt-br">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php


    include "config.php";
    //Pegar nome do relatorio e do arquivo
    $var = $_GET["id"];
    //nome do relatorio
    $sub = substr($var, 1, 12);

    // deleta dados referentes do banco
    $sql = "DELETE FROM produtos WHERE codigo =  '$sub' ";
    //verifica se deleto
    if ($mysqli->query($sql) == TRUE) {

       
    ?>

            <script language='javascript'>
                Swal.fire({
                    icon: 'success',
                    title: 'Excluido com sucesso!'
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */

                    if (result.isConfirmed) {
                        window.location.href = "../ADM_produtos.php";
                    }
                })
            </script>



        <?php
        }  else {
        ?>
        <script language='javascript'>
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Não foi possivel fazer a exlusão!'
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