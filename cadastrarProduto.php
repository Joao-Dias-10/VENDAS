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
<?php include "Estrutura\menu.php"; ?>

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

        <form action="" method="post" enctype="multipart/form-data">

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