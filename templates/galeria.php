<?php
include './include/head.php';

$hoje = date('Y-m-d');
$hojePartes = new DataCalendario($hoje);
$data = $hojePartes->getDiaSemana($hoje) . ", " . $hojePartes->getDia() . " de " . $hojePartes->getMes() . " de " . $hojePartes->getAno();

$prefeitura = new Prefeitura(UNIDADE_GESTORA);
$galeria = new Galeria(UNIDADE_GESTORA);
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
              <li class="active">Galeria de Fotos</li>
            </ul>
            <article class="post-content">
              
              <header class="clearfix">
                  <h3 class="title-post">Imagens de <strong><?=$prefeitura->prenome ?></strong> </h3>
                <div class="header-bottom">
                  <p class="kp-metadata style-2">
                   <i class="fa fa-calendar fa-fw fa-lg"></i><span><?=$data?></span>
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
                    $galeriaTur = new Galeria(Galeria::MUNICIPIO);
                    foreach ($galeriaTur->getResult() as $galeria) {
                    ?>  
                        <li>
                            <h4> <?= $galeria['galnome'] ?> </h4>
                            <div class="mask">
                                <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/galeria/'. $galeria['galarquivo'] ?>" width="797" height="429" alt="imagem" />
                            </div>
                            <div class="kp-gallery-caption">
                                <h5>Sobre:</h5>
                                <p> <?= trim($galeria['galsobre']) ?></p>
                                <p class="kp-social">
                                  <a href="#" class="kp-metadata"><span><i class="icon-phone  fa-lg"></i>&nbsp;&nbsp;<?=  DataCalendario::date2br($galeria['galdata']) ?> </span></a>
                                </p>
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
                    $galeriaTur = new Galeria(Galeria::MUNICIPIO);
                    foreach ($galeriaTur->getResult() as $galeria) {
                    ?>
                        <li><img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/galeria/'. $galeria['galarquivo'] ?>" width="200" height="120" alt="" />
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
            include 'include/menu_sidebar_randon.php';
          ?>
        <!-- widget-random -->
            <!-- widget-random -->
           
            <?php
            include_once 'include/menu_sidebar_noticia_popular.php';
           ?>
            <!-- widget-tabs -->
        </div>
        <!-- sidebar -->
        
        <div class="widget-area-5">
          <div class="multimedia clearfix">
            <h3 class="multimedia-title kp-title">imagens Diversos
                <a class="prev" href="#"></a>
                <a class="next" href="#"></a>
            </h3>
            <?php
            include_once 'include/menu_galeria_imagem.php';
           ?>
            <h3 class="multimedia-title kp-title">vídeos Diversos
               <a class="prev" href="#"></a>
               <a class="next" href="#"></a>
            </h3>
            <?php
            include_once 'include/menu_galeria_video.php';
           ?>
            <h3 class="multimedia-title kp-title">áudios Diversos
                <a class="prev" href="#"></a>
                <a class="next" href="#"></a>
            </h3>
             <?php
            include_once 'include/menu_galeria_audio.php';
           ?>
          </div>
          <!-- multimedia -->
        </div>
        <!-- widget-area-5 -->
    </div>
    <!-- main-content -->
  
    
</body>
