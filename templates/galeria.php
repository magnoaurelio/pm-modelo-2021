<?php

$hoje =  date('d-m-Y');
//$hojePartes =  MDate::datePart($hoje);
//$data = MDate::getDiaSemana($hoje).", ".$hojePartes->dia." de ".MDate::getMeses(1, $hojePartes->mes)." de ".$hojePartes->ano;
//$ano  = $hojePartes->ano;
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
                <h3 class="title-post">Imagem atuais do Município de AGRICOLANDIA </h3>
                <div class="header-bottom">
                  <p class="kp-metadata style-2">
                  <i class="icon-eye"></i><span>50</span>
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
                                <img src="placeholders/gallery/igreja1.jpg" width="797" height="429" alt="" />

                            </div>
                            <div class="kp-gallery-caption">
                                Igreja católica Matriz de NOSSA SENHORA DE FÁTIMA
                            </div>
                        </li>
                        <li>
                            <div class="mask">
                                 <img src="placeholders/gallery/igreja2.jpg" width="797" height="429" alt="" />
                            </div>
                            <div class="kp-gallery-caption">
                               IGREJA POVOADO BURACO D'AGUA - IGREJA CATÓLICA DE SANTA TERESINHA  
                            </div>
                        </li>
                        <li>
                            <div class="mask">
                                <img src="placeholders/gallery/igreja3.jpg" width="797" height="429" alt="" />
                            </div>
                            <div class="kp-gallery-caption">
                                IGREJA ADVENTISTA DO SETÍMO DIA
                            </div>
                        </li>
                        <li>
                            <div class="mask">
                                <img src="placeholders/gallery/igreja4.jpg" width="797" height="429" alt="" />
                            </div>
                            <div class="kp-gallery-caption">
                            IGREJA ASSEMBLÉIA DE DEUS                            
                            </div>
                        </li>
                        <li>
                            <div class="mask">
                                <img src="placeholders/gallery/igreja5.jpg" width="797" height="429" alt="" />
                            </div>
                            <div class="kp-gallery-caption">
                                IGREJA BATISTA
                            </div>
                        </li>
                        <li>
                            <div class="mask">
                                <img src="placeholders/gallery/igreja6.jpg" width="797" height="429" alt="" />
                            </div>
                            <div class="kp-gallery-caption">
                                IGREJA CATÓLOCA NO BAIRRO PITOMBEIRA
                            </div>
                        </li>
                        <li>
                            <div class="mask">
                                <img src="placeholders/gallery/igreja7.jpg" width="797" height="429" alt="" />
                            </div>
                            <div class="kp-gallery-caption">
                                IGREJA POVOADO TAMBORIL - IGREJA CATÓLICA SÃO JOÃO BATISTA
                            </div>
                        </li>
                        <li>
                            <div class="mask">
                                <img src="placeholders/gallery/igreja8.jpg" width="797" height="429" alt="" />
                            </div>
                            <div class="kp-gallery-caption">
                                Igreja Matriz NOSSA SENHORA DE FÁTIMA vista panorâmica
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="flexslider kp-gallery-carousel">
                    <ul class="slides">
                        <li><img src="placeholders/gallery/igreja1.jpg" width="200" height="120" alt="" /><span class="kp-mask"></span></li>
                        <li><img src="placeholders/gallery/igreja2.jpg" width="200" height="120" alt="" /><span class="kp-mask"></span></li>
                        <li><img src="placeholders/gallery/igreja3.jpg" width="200" height="120" alt="" /><span class="kp-mask"></span></li>
                        <li><img src="placeholders/gallery/igreja4.jpg" width="200" height="120" alt="" /><span class="kp-mask"></span></li>
                        <li><img src="placeholders/gallery/igreja5.jpg" width="200" height="120" alt="" /><span class="kp-mask"></span></li>
                        <li><img src="placeholders/gallery/igreja6.jpg" width="200" height="120" alt="" /><span class="kp-mask"></span></li>
                        <li><img src="placeholders/gallery/igreja7.jpg" width="200" height="120" alt="" /><span class="kp-mask"></span></li>
                        <li><img src="placeholders/gallery/igreja8.jpg" width="200" height="120" alt="" /><span class="kp-mask"></span></li>
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
