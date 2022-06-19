<?php include "Estrutura\ADM_MENU.php"; ?>
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
                            <!--data -->
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