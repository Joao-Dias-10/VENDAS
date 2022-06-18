<?php include "Estrutura\header.php"; ?>
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
<?php include "Estrutura\ADM_MENU.php"; ?>
<div class="container-fluid">
  <section id="caixa">

    <center>
      <div class="s">
        <div class="title">
          <h2>CADASTRAR USUÁRIOS</h2>

        </div>
      </div>
    </center>

    <div class="container-fluid">

      <form action="scripts\cadasstrarUser.php" method="post" enctype="multipart/form-data">
        <label for="Nome" class="form-label required ">Função</label>
        <select class="form-control" id="funcao" name="funcao" required="">
          <option value="Vendedor"></option>
          <option value="Administrador">Administrador</option>
          <option value="Vendedor">Vendedor</option>
        </select>

        <div class="col-md-12">

          <label for="Nome" class="form-label required ">Nome</label>

          <input type="text" class="form-control" name="Nome" id="Nome" required />
        </div>

        <div class="col-md-12">

          <label for="Usuario" class="form-label required ">Usuário</label>

          <input type="text" class="form-control" name="Usuario" id="Usuario" required />
        </div>

        <div class="col-md-12">

          <label for="Login" class="form-label required">Login</label>

          <input type="text" class="form-control" name="Login" id="Fornecedor" required />
        </div>

        <div class="col-md-12">

          <label for="Senha" class="form-label required ">Senha</label>

          <input type="text" class="form-control" name="Senha" id="Senha" required />
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
<?php include "Estrutura\js.php"; ?>
<?php include "Estrutura\Footer.php"; ?>