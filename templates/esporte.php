<?php

$hoje = date('Y-m-d');
$hojePartes = new DataCalendario($hoje);
$data = $hojePartes->getDiaSemana($hoje) . ", " . $hojePartes->getDia() . " de " . $hojePartes->getMes() . " de " . $hojePartes->getAno();

$prefeitura = new Prefeitura(UNIDADE_GESTORA);
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
                  <i class="icon-comment"></i><span>50</span>
                  <i class="icon-eye"></i><span>50</span>
                  <i class="icon-eye"></i><span>50</span>
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
                        <li>
                            <div class="mask">
                                <img src="placeholders/gallery/g1.jpg" width="797" height="429" alt="" />

                            </div>
                            <div class="kp-gallery-caption">
                                Campos de futebol, Quadras Poliesportiva
                            </div>
                        </li>
                        <li>
                            <div class="mask">
                                 <img src="placeholders/gallery/g1.jpg" width="797" height="429" alt="" />
                            </div>
                            <div class="kp-gallery-caption">
                              Campos de futebol, Quadras Poliesportiva 
                            </div>
                        </li>
                        <li>
                            <div class="mask">
                                <img src="placeholders/gallery/g1.jpg" width="797" height="429" alt="" />
                            </div>
                            <div class="kp-gallery-caption">
                              Campos de futebol, Quadras Poliesportiva
                            </div>
                        </li>
                        <li>
                            <div class="mask">
                                <img src="placeholders/gallery/g1.jpg" width="797" height="429" alt="" />
                            </div>
                            <div class="kp-gallery-caption">
                           Campos de futebol, Quadras Poliesportiva                           
                            </div>
                        </li>
                        <li>
                            <div class="mask">
                                <img src="placeholders/gallery/g1.jpg" width="797" height="429" alt="" />
                            </div>
                            <div class="kp-gallery-caption">
                                Campos de futebol, Quadras Poliesportiva
                            </div>
                        </li>
                        <li>
                            <div class="mask">
                                <img src="placeholders/gallery/g1.jpg" width="797" height="429" alt="" />
                            </div>
                            <div class="kp-gallery-caption">
                              LOCAIS DE ALIMENTAÇÃO
                            </div>
                        </li>
                        <li>
                            <div class="mask">
                                <img src="placeholders/gallery/g1.jpg" width="797" height="429" alt="" />
                            </div>
                            <div class="kp-gallery-caption">
                               Campos de futebol, Quadras Poliesportiva
                            </div>
                        </li>
                        <li>
                            <div class="mask">
                                <img src="placeholders/gallery/g1.jpg" width="797" height="429" alt="" />
                            </div>
                            <div class="kp-gallery-caption">
                                Campos de futebol, Quadras Poliesportiva
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="flexslider kp-gallery-carousel">
                    <ul class="slides">
                        <li><img src="placeholders/gallery/g2.jpg" width="200" height="120" alt="" /><span class="kp-mask"></span></li>
                        <li><img src="placeholders/gallery/g2.jpg" width="200" height="120" alt="" /><span class="kp-mask"></span></li>
                        <li><img src="placeholders/gallery/g2.jpg" width="200" height="120" alt="" /><span class="kp-mask"></span></li>
                        <li><img src="placeholders/gallery/g2.jpg" width="200" height="120" alt="" /><span class="kp-mask"></span></li>
                        <li><img src="placeholders/gallery/g2.jpg" width="200" height="120" alt="" /><span class="kp-mask"></span></li>
                        <li><img src="placeholders/gallery/g2.jpg" width="200" height="120" alt="" /><span class="kp-mask"></span></li>
                        <li><img src="placeholders/gallery/g2.jpg" width="200" height="120" alt="" /><span class="kp-mask"></span></li>
                        <li><img src="placeholders/gallery/g2.jpg" width="200" height="120" alt="" /><span class="kp-mask"></span></li>
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
            <div class="widget widget-ads" style="margin-top: -16px; margin-left: -25px">
             <?php
             include_once 'include/menu_home_clima_2.php';
            //include_once 'include/menu_sidebar_noticia_popular.php';
             ?>
             </div>
          
           <?php
             include_once 'include/menu_sidebar_propaganda.php';
           
             include_once 'include/menu_home_video.php';
           ?>
            <?php
          //   include_once 'include/menu_sidebar_servico.php';
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
