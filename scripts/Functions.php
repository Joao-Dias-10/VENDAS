<?php
function QTD_VENDIDA()
{
    // pegar qtd do banco e subtrair
    $servidor = "127.0.0.1";
    $usuario = "root";
    $senha = "";
    $banco = "vendas";

    //String de coneção
    $conn = new mysqli($servidor, $usuario, $senha, $banco);


    $sql = "SELECT SUM(qtd) as qtd FROM venda WHERE codigo <> 0";
    $sql = $conn->query($sql);
    $row = $sql->fetch_assoc();
    $soma = $row['qtd'];

    return  $soma;
}

function QTD_VENDIDA_MES()
{
    // pegar qtd do banco e subtrair
    $servidor = "127.0.0.1";
    $usuario = "root";
    $senha = "";
    $banco = "vendas";

    //String de coneção
    $conn = new mysqli($servidor, $usuario, $senha, $banco);


    $sql = "SELECT SUM(qtd) as qtd FROM venda WHERE codigo <> 0 and MONTH(data)= '06'";
    $sql = $conn->query($sql);
    $row = $sql->fetch_assoc();
    $soma = $row['qtd'];
    return $soma;
}
function QTD_VENDIDA_DIA()
{
    // pegar qtd do banco e subtrair
    $servidor = "127.0.0.1";
    $usuario = "root";
    $senha = "";
    $banco = "vendas";

    //String de coneção
    $conn = new mysqli($servidor, $usuario, $senha, $banco);


    $sql = "SELECT SUM(qtd) as qtd FROM venda WHERE codigo <> 0 and DAY(data)= '16'";
    $sql = $conn->query($sql);
    $row = $sql->fetch_assoc();
    $soma = $row['qtd'];
    return $soma;
}

function ESTOQUE()
{

    // pegar qtd do banco e subtrair
    $servidor = "127.0.0.1";
    $usuario = "root";
    $senha = "";
    $banco = "vendas";

    //String de coneção
    $conn = new mysqli($servidor, $usuario, $senha, $banco);


    $sql = "SELECT SUM(qtd) as qtd FROM estoque WHERE codigo <> 0";
    $sql = $conn->query($sql);
    $row = $sql->fetch_assoc();
    $som = $row['qtd'];

    return $som;
}

function P_CADASTRADOS()
{
    $servidor = "127.0.0.1";
    $usuario = "root";
    $senha = "";
    $banco = "vendas";

    //String de coneção
    $conn = new mysqli($servidor, $usuario, $senha, $banco);
    $sql = "SELECT * FROM produtos";
    if ($result = mysqli_query($conn, $sql)) {
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }
}
