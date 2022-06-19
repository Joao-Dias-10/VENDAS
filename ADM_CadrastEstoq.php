<?php include "Estrutura\ADM_MENU.php"; ?>
<style>
  .s {
    border-radius: 8px;
    background-color: #4b4b4b;

    width: 98%;
  }

  .ss {
    border-radius: 8px;
    background-color: rgb(237, 237, 237);
    height: 10px;
    width: 100%;
  }

  .ss {
    border-radius: 8px;
    background-color: rgb(237, 237, 237);
    height: 10px;
    width: 100%;
  }

  h1 {
    color: #ffff;
  }

  h2 {
    color: #ffff;
  }

  .title {
    text-align: center;
  }

  .sss {
    border-radius: 8px;
    background-color: white;
    height: 65px;
    width: 100%;
  }
</style>




  <div class="container-fluid">
    <section id="caixa">

      <center>
        <div class="s">
          <div class="title">
            <h2>ATUALIZAR ESTOQUE</h2>

          </div>
        </div>
      </center>

      <div class="container-fluid">

        <form action="scripts\estoque.php" method="post" enctype="multipart/form-data">

          <div class="col-md-12">

            <label for="Codigo" class="form-label required ">Código</label>

            <input type="text" class="form-control" name="Codigo" id="Codigo" required />
          </div>
          <div class="col-md-12">

            <label for="Nome" class="form-label required ">Produto</label>

            <input type="text" class="form-control" name="Nome" id="Nome" required />
          </div>

          <div class="col-md-12">

            <label for="qtd" class="form-label required ">Quantidade</label>

            <input type="text" class="form-control" name="qtd" id="qtd" required />
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