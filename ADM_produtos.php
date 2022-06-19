<?php include "Estrutura\ADM_MENU.php"; ?>
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

<section class="TABELA">
    <center>
        <div>
            <h2>PRODUTOS</h2>
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
<?php include "Estrutura\js.php"; ?>
<?php include "Estrutura\Footer.php"; ?>