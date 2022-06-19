
<?php
 
    if(!$_SESSION['usuario']){
        header('Location: ../VENDAS/Login.php');
        exit();

    }
?>