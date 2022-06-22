<?php include "Estrutura\ADM_MENU.php"; ?>
<style>
    .s {
        border-radius: 8px;
        background-color: #4b4b4b;
        margin: 0.5%;
        height: 45px;
        width: 98%;
        display: inline-block;
    }

    .ss {
        height: 10px;
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

<div id="accordion">
    <div class="card">
        <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
                <CENTER>
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <img src="iuricode\assets\img\relatorio-de-dados (1).png" alt="" height="40">
                     <img src="iuricode\assets\img\CP.png" alt="" height="40"> 
                     <img src="iuricode\assets\img\relatorio-de-dados (1).png" alt="" height="40">
                    </button>
                </CENTER>
            </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
                <div class="container-fluid">
                    <section id="caixa">

                        <center>
                            <div class="s">
                                <div class="title">
                                    <h2>CADASTRAR PRODUTOS</h2>

                                </div>
                            </div>
                        </center>

                        <div class="container-fluid">

                            <form action="scripts\produto.php" method="post" enctype="multipart/form-data">

                                <div class="col-md-12">

                                    <label for="Codigo" class="form-label required ">Código Produto</label>

                                    <input type="text" class="form-control" name="Codigo" id="Codigo" required />
                                </div>
                                <div class="col-md-12">

                                    <label for="Nome" class="form-label required ">Nome Do Produto</label>

                                    <input type="text" class="form-control" name="Nome" id="Nome" required />
                                </div>
                                <div class="col-md-12">

                                    <label for="Fornecedor" class="form-label required">Fornecedor</label>

                                    <input type="text" class="form-control" name="Fornecedor" id="Fornecedor" required />
                                </div>

                                <div class="col-md-12">

                                    <label for="Custo" class="form-label required ">Custo Produto</label>

                                    <input type="text" class="form-control" name="Custo" id="Custo" required />
                                </div>

                                <div class="col-md-12">

                                    <label for="Valor" class="form-label required ">Valor de Venda</label>

                                    <input type="text" class="form-control" name="Valor" id="Valor" required />
                                </div>

                                <div class="ss">
                                    <div>
                                        <h1></h1>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <input type="submit" name="acao" class="btn btn-success" Value="Enviar" />
                                </div>

                            </form>
                            <div class="ss">
                                <div>
                                    <h1></h1>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <center>
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                    <img src="iuricode\assets\img\descricao-do-produto.png" alt="" height="40">
                     <img src="iuricode\assets\img\PC.png" alt="" height="40"> 
                     <img src="iuricode\assets\img\descricao-do-produto.png" alt="" height="40">

                    </button>
                </center>
            </h5>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <section class="TABELA">
                    <div class="container-fluid">
                        <div class="row">

                            <section class="content">
                                <div>
                                    <h3></h3>
                                </div>

                                <table class="table" id="mytable">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center">Produto</th>
                                            <th style="text-align: center">Nome</th>
                                            <th style="text-align: center">Cadastro</th>
                                            <!--data -->
                                            <th style="text-align: center">Fornecedor</th>
                                            <th style="text-align: center">Custo</th>
                                            <th style="text-align: center">$Venda</th>
                                            <th style="text-align: center">Excluir</th>

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
                                        $sql = "SELECT * FROM produtos";
                                        $query = $mysqli->query($sql);
                                        while ($dados = $query->fetch_array()) {
                                        ?>

                                            <tr>
                                                <td style="text-align: center">
                                                    <?php echo $dados['codigo']; ?>
                                                </td>
                                                <td style="text-align: center">
                                                    <?php echo $dados['nome']; ?>
                                                </td>
                                                <td style="text-align: center">
                                                    <?php echo $dados['data']; ?>
                                                </td>

                                                </td>
                                                <td style="text-align: center">
                                                    <?php echo $dados['fornecedor']; ?>
                                                </td>
                                                </td>
                                                <td style="text-align: center">
                                                    <?php echo $dados['custo']; ?>
                                                </td>
                                                <td style="text-align: center">
                                                    <?php echo $dados['venda']; ?>
                                                </td>
                                                <td style="text-align:center">

                                                    <a href='scripts\Excluir.php?id="<?php echo $dados['codigo'] ?>'>
                                                        <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                                                    </a>

                                                </td>

                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </section>

                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>

</div>
<?php include "Estrutura\js.php"; ?>
<?php include "Estrutura\Footer.php"; ?>