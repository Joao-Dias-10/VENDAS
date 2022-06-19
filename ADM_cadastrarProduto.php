<?php include "Estrutura\ADM_MENU.php"; ?>
<style>
  .s {
    border-radius: 8px;
    background-color: #4b4b4b;
    margin: 0.1%;
    height: 46px;
    width: 98%;
    display: inline-block
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


<?php include "Estrutura\js.php"; ?>
<?php include "Estrutura\Footer.php"; ?>