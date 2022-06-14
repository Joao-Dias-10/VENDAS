<html lang="pt-br">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <?php
    // error_reporting(E_ALL);
    // ini_set('display_errors', '0');
    $Usuario = $_POST['email'];
    $Senha = $_POST['Senha'];

    function grupo($Usuario,$Senha)
    {
        include "config.php";
        $sql = "SELECT usuario FROM login WHERE usuario='$Usuario' and senha='$Senha'";
        $query = $mysqli->query($sql);
        $total = mysqli_num_rows($query);

        return $total;
        
    }

    if (grupo($Usuario,$Senha) <> 0) {
        $adm = 'Administrador';
        //existe
        function grupo2($Usuario,$Senha,$adm)
        {
            include "config.php";
            $sql = "SELECT usuario FROM login WHERE usuario='$Usuario' and senha='$Senha' and funcao = '$adm'";
            $query = $mysqli->query($sql);
            $total2 = mysqli_num_rows($query);
    
            return $total2;
        }
        

        if (grupo2($Usuario,$Senha,$adm) <> 0) {
    ?>
            <script language='javascript'>
                window.location.href = "../ADM_index.php";
            </script>

        <?php
        } else {
        ?>
            <script language='javascript'>
                window.location.href = "../Produtos.php";
            </script>

        <?php
        }
    } else {
        ?>
        <script language='javascript'>
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Você não posssui cadastro!'
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    window.location.href = "../Login.php";
                }
            })
        </script>


    <?php


    }

    ?>


</body>

</html>