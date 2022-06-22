<?php session_start();?>
<?php include "scripts\Verifica.php";?>
<?php include "scripts\Functions.php"; ?>


<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="pt-BR" dir="ltr">

<head>

    <meta charset="UTF-8">
    <title>VENDAS</title>
    <link rel="stylesheet" href="iuricode\assets\css\style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="iuricode\assets\css\cardindex\card.css">
    <link rel="icon" type="image/png" href="iuricode\assets\img\icons\excel (1).png" />

</head>

<body>
    <?php include "Estrutura\menu.php"; ?>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus icon'></i>
            <div class="logo_name">SISTEMA</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="ADM_index.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">DASHBOARD</span>
                </a>
                <span class="tooltip">DASHBOARD</span>
            </li>
            <li>
                <a href="ADM_produtos.php">
                    <i class='bx bx-folder'></i>
                    <span class="links_name">PRODUTOS</span>
                </a>
                <span class="tooltip">PRODUTOS</span>
            </li>
            <li>
                <a href="ADM_estoque.php">
                    <i class='bx bx-folder'></i>
                    <span class="links_name">ESTOQUE</span>
                </a>
                <span class="tooltip">ESTOQUE</span>
            </li>
            <li>
                <a href="ADM_VENDAS.php">
                    <i class='bx bx-cart-alt'></i>
                    <span class="links_name">VENDAS</span>
                </a>
                <span class="tooltip">VENDAS</span>
            </li>

            <li>
                <a href="ADM_usernew.php">
                    <i class='bx bx-user'></i>
                    <span class="links_name">NOVO USUÁRIO</span>
                </a>
                <span class="tooltip">NOVO USUÁRIO</span>
            </li>
            <!-- <li>
            <a href="ADM_CadrastEstoq.php">
          <i class='bx bx-folder'></i>    
          <span class="links_name">ATUALIZAR ESTOQUE</span>
        </a>
        <span class="tooltip">ATUALIZAR ESTOQUE</span>
      </li> -->
      
            <a href="scripts\logout.php">
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
        <center>
          
            <div>
                <div class="card">
                    <div class="card__image-holder">
                        <img class="card__image" src="iuricode\assets\img\python.gif" alt="wave" />
                    </div>
                    <div class="card-title">
                        <a href="ADM_VENDAS.php" class="toggle-info btn">
                            <span class="left"></span>
                            <span class="right"></span>
                        </a>
                        <h2>
                            QTD. VENDIDA
                            <center>
                                <small>
                                    <?php

                                    echo QTD_VENDIDA();

                                    ?>
                                </small>
                            </center>
                        </h2>
                    </div>


                </div>
                <div class="card">
                    <div class="card__image-holder">
                        <img class="card__image" src="iuricode\assets\img\python.gif" alt="wave" />
                    </div>
                    <div class="card-title">
                        <a href="ADM_VENDAS.php" class="toggle-info btn">
                            <span class="left"></span>
                            <span class="right"></span>
                        </a>
                        <h2>
                            QTD. VENDIDA MÊS
                            <center>
                                <small>
                                    <?php
                                    echo QTD_VENDIDA_MES();
                                    ?>
                                </small>
                            </center>
                        </h2>
                    </div>


                </div>
                <div class="card">
                    <div class="card__image-holder">
                        <img class="card__image" src="iuricode\assets\img\python.gif" alt="wave" />
                    </div>
                    <div class="card-title">
                        <a href="ADM_VENDAS.php" class="toggle-info btn">
                            <span class="left"></span>
                            <span class="right"></span>
                        </a>
                        <h2>
                            QTD. VENDIDA DIA
                            <center>
                                <small>
                                    <?php
                                    echo QTD_VENDIDA_DIA();
                                    ?>
                                </small>
                            </center>
                        </h2>
                    </div>


                </div>


                <div class="card">
                    <div class="card__image-holder">
                        <img class="card__image" src="iuricode\assets\img\python.gif" alt="wave" />
                    </div>
                    <div class="card-title">
                        <a href="ADM_VENDAS.php" class="toggle-info btn">
                            <span class="left"></span>
                            <span class="right"></span>
                        </a>
                        <h2>
                            TOP 10 VENDIDOS
                            <center>
                                <small>
                                    Verifique aqui ➱
                                </small>

                            </center>
                        </h2>
                    </div>
                    <div class="card-flap flap1">

                        <div class="card-flap flap2">
                            <div class="card-actions">
                                <a href="Baixar_grupo.php" class="btn">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card__image-holder">
                        <img class="card__image" src="iuricode\assets\img\python.gif" alt="wave" />
                    </div>
                    <div class="card-title">
                        <a href="ADM_estoque.php" class="toggle-info btn">
                            <span class="left"></span>
                            <span class="right"></span>
                        </a>
                        <h2>
                            ESTOQUE
                            <center>
                                <small>
                                    <?php echo ESTOQUE(); ?>
                                </small>
                            </center>
                        </h2>
                    </div>
                    <div class="card-flap flap1">

                        <div class="card-flap flap2">
                            <div class="card-actions">
                                <a href="ADM_produtos.php" class="btn">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card__image-holder">
                        <img class="card__image" src="iuricode\assets\img\python.gif" alt="wave" />
                    </div>
                    <div class="card-title">
                        <a href="Baixar_grupo.php" class="toggle-info btn">
                            <span class="left"></span>
                            <span class="right"></span>
                        </a>
                        <h2>
                            P. CADASTRADOS
                            <center>
                                <small>
                                    <?php
                                            echo P_CADASTRADOS();

                                    ?>
                                </small>
                            </center>
                        </h2>
                    </div>
                    <div class="card-flap flap1">

                        <div class="card-flap flap2">
                            <div class="card-actions">
                                <a href="Baixar_grupo.php" class="btn">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </center>



        <?php include "Estrutura\js.php"; ?>
        <?php include "Estrutura\Footer.php"; ?>