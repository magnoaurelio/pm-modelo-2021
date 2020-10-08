<?php
include './include/head.php';

$hoje = date('Y-m-d');
$hojePartes = new DataCalendario($hoje);
$data = $hojePartes->getDiaSemana($hoje) . ", " . $hojePartes->getDia() . " de " . $hojePartes->getMes() . " de " . $hojePartes->getAno();

$banco = new Bancos(UNIDADE_GESTORA);
?>
<body class="loading">
   
    <!-- page-header -->
    <div id="main-content" class="container clearfix">
       <?php
        include 'include/menu_home_topo.php';
        ?>
        <!-- main-top -->
        <div id="main-col" class="pull-left">
            <ul class="breadcrumb">
              <li><a href="index.php">Início</a></li>
              <li class="active">Bancos Diversos</li>
            </ul>
            <article class="post-content">
              
              <header class="clearfix">
                <h3 class="title-post">Bancos, Lotéricas e Cash e Posto Aqui </h3>
                <div class="header-bottom">
                  <p class="kp-metadata style-2">
                   <i class="fa fa-calendar fa-fw fa-lg"></i><span><?=$data?></span>
                   <i class="fa fa-home fa-fw fa-lg"></i><span><?=$data?></span>
                   <i class="fa fa-feed fa-fw fa-lg"></i><span></span>
                 </p>
                <p class="kp-share">
                  <span>Compartilhar:</span> 
                  <a href="#" class="icon-facebook3"></a>
                  <a href="#" class="icon-twitter"></a>
                  <a href="#" class="icon-google-plus3"></a>
                  <a href="#" class="icon-pinterest"></a>
                  <a href="#" class="icon-linkedin2"></a>
                </p>
                </div>
                <!-- header-bottom -->                
              </header>
                
                 <div class="kp-gallery">
               
             
                <div class="flexslider kp-gallery-slider">
                   
                    <ul class="slides">
                    <?php
                    $bancoTur = new Bancos(Bancos::MUNICIPIO);
                    foreach ($bancoTur->getResult() as $banco) {
                    ?>  
                        <li>
                            <h4> <?= $banco['bannome'] ?> </h4>
                            <div class="mask">
                                  <a href="?p=banco_detalhe&bancodigo=<?= $banco['bancodigo'] ?>" title=" Veja mais...  <?= $banco['bannome']?>">
                                   <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/banco/'. $banco['banfoto1'] ?>" width="797" height="429" alt="banco" />
                                 </a>
                            </div>
                            <div class="kp-gallery-caption">
                                <h5>Sobre:</h5>
                                <p> <?= trim($banco['bansobre']) ?></p>
                                   <span><hr class="kp-metadata" style="color-line: #ccc;"></span>
                                <p class="kp-social">
                                  <a href="#" class="kp-metadata"><span><i class="fa fa-calendar fa-fw fa-lg"></i>&nbsp;&nbsp;<?=  DataCalendario::date2br($banco['bandata']) ?> </span></a>
                                  <a href="#" class="kp-metadata"><span><i class="icon-phone fa-lg"></i>&nbsp;&nbsp;<?= $banco['banfone'] ?> </span></a>
                                  <a href="#" class="kp-metadata"><span><i class="fa fa-clock-o fa-fw fa-lg"></i>&nbsp;&nbsp;<?= $banco['banbairro'] ?></span></a>
                                  <a href="#" class="kp-metadata"><span><i class="icon-home  fa-lg"></i>&nbsp;&nbsp;<?= $banco['banendereco'] ?>-<?= $banco['banbairro'] ?> </span></a>
                                  <a href="#" class="kp-metadata"><span><i class="icon-user  fa-lg"></i>&nbsp;&nbsp;<?= $banco['bancep'] ?> </span></a>
                                </p>
                                  <span><hr class="kp-metadata" style="color-line: #ccc;"></span>
                                  <img src="images/slider/small-flex-next-2.png" alt="proximo"/>
                                  <img src="images/slider/small-flex-prev-2.png" alt="anterior"/>
                            </div>
                        </li>
                       <?php } ?>
                    </ul>
                     
                </div>
                <div class="flexslider kp-gallery-carousel">
                 
                    <ul class="slides">
                    <?php
                    $bancoTur = new Bancos(Bancos::MUNICIPIO);
                    foreach ($bancoTur->getResult() as $banco) {
                    ?>
                        <li><img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/banco/'. $banco['banfoto1'] ?>" width="200" height="120" alt="" />
                            <span class="kp-mask"></span>
                        </li>
                       <?php } ?>
                    </ul>
                   
                </div><!--kp-gallery-slider-->

                <nav>
                  <span class="total">Total: <span>1119</span> fotos</span>
                  <span class="status-caption" data-hide="Ocultar legendas" data-show="Mostrar legendas">Ocultar legendas</span>
                  <span class="status-slide" data-play="Reprodução automática" data-pause="Pausa"> Pausa </span>
                </nav>
             
              
                 </div>
              <!-- kp-gallery -->
            </article>           
        </div>
        <!-- main-col -->
        
        
        <div id="sidebar" class="pull-left">
            <?php
             include 'include/menu_publicidade_sidebar.php';
             include 'include/menu_home_clima_1.php';
             include 'include/menu_sidebar_mapa_localizacao.php';
             ?>
        </div>
        <!-- sidebar -->
        <!-- sidebar -->
        
        <div class="widget-area-5">
         <div class="widget-area-5">
          <div class="multimedia clearfix">
              <?php
            include 'include/menu_galeria_imagem_relac.php';
            include 'include/menu_galeria_video_relac.php';
             ?>
          </div>
          <!-- multimedia -->
        </div>
          <!-- multimedia -->
        </div>
        <!-- widget-area-5 -->
    </div>
    <!-- main-content -->
  
    
</body>
