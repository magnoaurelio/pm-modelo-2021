<?php

$hoje = date('Y-m-d');
$hojePartes = new DataCalendario($hoje);
$data = $hojePartes->getDiaSemana($hoje) . ", " . $hojePartes->getDia() . " de " . $hojePartes->getMes() . " de " . $hojePartes->getAno();

$esportes = new Esportes(UNIDADE_GESTORA);
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
              <li class="active">Praças de Esportes</li>
            </ul>
            <article class="post-content">
              
              <header class="clearfix">
                <h3 class="title-post">Campos de futebol, Quadras Poliesportiva </h3>
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
                    <?php
                    $esporteTur = new Esportes(Esportes::MUNICIPIO);
                    foreach ($esporteTur->getResult() as $esportes) {
                    ?>
                    <ul class="slides">
                        
                        <li>
                            <h4> <?= $esportes['espnome'] ?> -  <?= $esportes['espusual'] ?></h4>
                            <div class="mask">
                                <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/esporte/'. $esportes['espfoto1'] ?>" width="797" height="429" alt="imagem" />
                            </div>
                            <div class="kp-gallery-caption">
                              
                                <hr style="color-line: #ccc;">
                                <p class="kp-social">
                                  <a href="#" class="kp-metadata"><span><i class="icon-phone  fa-lg"></i>&nbsp;&nbsp;<?= $esportes['espdata'] ?> </span></a>
                                  <a href="#" class="kp-metadata"><span><i class="icon-email  fa-lg"></i>&nbsp;&nbsp;<?= $esportes['espusual'] ?> </span></a>
                                  <a href="#" class="kp-metadata"><span><i class="icon-home  fa-lg"></i>&nbsp;&nbsp;<?= $esportes['esporte_tipo_id'] ?></span></a>
                                  <a href="#" class="kp-metadata"><span><i class="icon-phone2  fa-lg"></i>&nbsp;&nbsp;<?= strtolower($esportes['espendereco']) ?> </span></a>
                                  <a href="#" class="kp-metadata"><span><i class="icon-phone2  fa-lg"></i>&nbsp;&nbsp;<?= $esportes['espbairro'] ?> </span></a>
                                </p>
                                <hr style="color-line: #ccc;">
                                <h5>Sobre:</h5>
                                 <p> <?= $esportes['espsobre'] ?></p>
                            </div>
                        </li>
                       
                    </ul>
                     <?php } ?>
                </div>
                <div class="flexslider kp-gallery-carousel">
                     <?php
                    $esporteTur = new Esportes(Esportes::MUNICIPIO);
                    foreach ($esporteTur->getResult() as $esportes) {
                    ?>
                    <ul class="slides">
                        <li><img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/esporte/'. $esportes['espfoto1'] ?>" width="200" height="120" alt="" />
                            <span class="kp-mask"></span>
                        </li>
                    </ul>
                     <?php } ?>
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
            <div class="widget widget-ads" style="margin-top: -16px; margin-left: -25px">
             <?php
             include_once 'include/menu_home_clima_2.php';
             ?>
             </div>
          
           <?php
             include_once 'include/menu_sidebar_propaganda.php';
           
             include_once 'include/menu_home_video.php';
             include_once 'include/menu_sidebar_mapa_localizacao.php';
           ?>
            <?php
           include_once 'include/menu_home_video.php';
            //include_once 'include/menu_sidebar_noticia_popular.php';
             ?>
        </div>
        <!-- sidebar -->
        <!-- sidebar -->
        
        <div class="widget-area-5">
         <div class="widget-area-5">
          <div class="multimedia clearfix">
            <h3 class="multimedia-title kp-title">imagens relacionadas
                <a class="prev" href="#"></a>
                <a class="next" href="#"></a>
            </h3>
            <?php
            include_once 'include/menu_galeria_imagem_relac.php';
           ?>
            <h3 class="multimedia-title kp-title">vídeos relacionadas
               <a class="prev" href="#"></a>
               <a class="next" href="#"></a>
            </h3>
            <?php
            include_once 'include/menu_galeria_video_relac.php';
           ?>
            <h3 class="multimedia-title kp-title">áudios relacionadas
                <a class="prev" href="#"></a>
                <a class="next" href="#"></a>
            </h3>
             <?php
            include_once 'include/menu_galeria_audio_relac.php';
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
