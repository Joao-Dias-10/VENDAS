<?php include "Estrutura\header.php"; ?>
<!---https://developer.mozilla.org/pt-BR/docs/Web/CSS/margin--->
<!---https://www.visualdicas.com.br/programacao/php/30-como-obter-o-ultimo-registro-id-de-uma-tabela-mysql-com-php#:~:text=Obter%20o%20%C3%BAltimo%20registro%20por,o%20nome%20da%20sua%20tabela.-->
<style>
    .s {
        border-radius: 8px;
        background-color: #4b4b4b;
        margin: 1%;
        height: 100px;
        width: 25%;
        display: inline-block;
    }


    h4 {
        color: white;
    }

    .qtd {
        text-align: self;
    }

    h1 {
        color: white;
    }

    h2 {
        color: white;
    }

    #Opercaobaixar {
        background: white;
    }

    #cor {
        color: white;
    }

    select {
        border-radius: 25px;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">

            <img src="iuricode/assets/image/Logo.png" class="img-fluid" id="imagem-topo">

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">


        </div>
    </div>
</nav>

<div class="sidebar">
    <div class="logo-details">
        <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">SISTEMA</div>
        <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
        <!-- <li>
      <a href="index.php">
        <i class='bx bx-grid-alt'></i>
        <span class="links_name">DASHBOARD</span>
      </a>
      <span class="tooltip">DASHBOARD</span>
    </li>
   <li>
        <a href="#">
          <i class='bx bx-user'></i>
          <span class="links_name">User</span>
        </a>
        <span class="tooltip">User</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-chat'></i>
          <span class="links_name">Messages</span>
        </a>
        <span class="tooltip">Messages</span>
      </li>
    <li>
      <a href="Baixar_grupo.php">
        <i class='bx bx-folder'></i>
        <span class="links_name">EQUIPE MIS</span>
      </a>
      <span class="tooltip">EQUIPE MIS</span>
    </li> -->
        <li>
            <a href="cadastrarProduto.php">
                <i class='bx bx-cog'></i>
                <span class="links_name">CADASTRO PRODUTO</span>
            </a>
            <span class="tooltip">CADASTRAR PRODUTOS</span>
        </li>
        <li>
            <a href="Produtos.php">
                <i class='bx bx-folder'></i>
                <span class="links_name">PRODUTOS</span>
            </a>
            <span class="tooltip">PRODUTOS</span>
        </li>

        <li>
            <a href="Vendas.php">
                <i class='bx bx-cart-alt'></i>
                <span class="links_name">VENDIDO</span>
            </a>
            <span class="tooltip">VENDIDO</span>
        </li>

        <!-- <li>
            <a href="CadrastEstoq.php">
          <i class='bx bx-folder'></i>    
          <span class="links_name">ATUALIZAR ESTOQUE</span>
        </a>
        <span class="tooltip">ATUALIZAR ESTOQUE</span>
      </li> -->
        <li>
            <a href="vender.php">
                <i class='bx bx-cart-alt'></i>
                <span class="links_name">VERDER</span>
            </a>
            <span class="tooltip">VERDER</span>
        </li>
        <!-- <li>
        <a href="#">
          <i class='bx bx-heart'></i>
          <span class="links_name">Saved</span>
        </a>
        <span class="tooltip">Saved</span>
      </li> -->
        <a href="Login.php">
            <li class="profile">

                <div class="profile-details">
                    <img src="iuricode\assets\img\logo.png" alt="profileImg">

                    <div class="name_job">
                        <div class="name">Desenvolvido</div>
                        <div class="job">Por João Dias</div>
                    </div>
                </div>

                <i class='bx bx-log-out' id="log_out"></i>

            </li>
        </a>
    </ul>
</div>

<section class="home-section">

    <section class="TABELA">
        <center>
            <div>
                <h2>VENDAS</h2>
            </div>
        </center>
        <div class="container-fluid">
            <div class="row">

                <section class="content">
                    <div>
                        <h3></h3>
                    </div>

                    <table class="table" id="mytable">
                        <thead>
                            <tr>
                                <th style="text-align: center">Data</th>
                                <th style="text-align: center">Código</th>
                                <th style="text-align: center">Produto</th>
                                <th style="text-align: center">$Valor</th>
                                <th style="text-align: center">QTD</th>

                            </tr>
                        </thead>

                        <tbody>

                            <?php


                            // ---------------------------------------------------------------AQUI
                            // ---------------------------------------------------------------AQUI
                            // ---------------------------------------------------------------AQUI
                            // ---------------------------------------------------------------AQUI
                            // ---------------------------------------------------------------AQUI



                            include "scripts\config.php";
                            $sql = "SELECT * FROM venda";
                            $query = $mysqli->query($sql);
                            while ($dados = $query->fetch_array()) {
                            ?>


                                <tr>
                                    <td style="text-align: center">
                                        <?php echo $dados['data']; ?>
                                    </td>

                                    <td style="text-align: center">
                                        <?php echo $dados['codigo']; ?>
                                    </td>
                                    <td style="text-align: center">
                                        <?php echo $dados['produto']; ?>
                                    </td>
                                    <td style="text-align: center">
                                        <?php echo $dados['valor']; ?>
                                    </td>
                                    <td style="text-align: center">
                                        <?php echo $dados['qtd']; ?>
                                    </td>


                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </section>

            </div>
        </div>

    </section>



    <?php include "Estrutura\js.php"; ?>
    <?php include "Estrutura\Footer.php"; ?>