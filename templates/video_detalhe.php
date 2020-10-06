<!DOCTYPE html>

<?php
include './include/head.php';

$hoje = date('Y-m-d');
$hojePartes = new DataCalendario($hoje);
$data = $hojePartes->getDiaSemana($hoje) . ", " . $hojePartes->getDia() . " de " . $hojePartes->getMes() . " de " . $hojePartes->getAno();

 $video = new Videos(intval($_GET['vidcodigo']));

?>  
<!-- Mirrored from upsidethemes.net/demo/news-times/html/single-video.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Aug 2020 12:02:50 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<body class="kp-single">
    <!-- page-header -->
    <div id="main-content" class="container clearfix">
       <?php
        include 'include/menu_home_topo.php';
       
        ?>
        <!-- main-top -->
        <div id="main-col" class="pull-left">
             <ul class="breadcrumb">
              <li><a href="index.php">Início</a></li>
              <li class="active" style="font-size: 20px;"><strong>VÍDEOS DE AGRICOLÂNDIA</strong></li>
            </ul>
            <article class="post-content">
              
              <header class="clearfix">
                <h3 class="title-post"><?= strtoupper($video->descricao) ?>  </h3>
                <div class="header-bottom">
                 <p class="kp-metadata style-2">
                    <i class="fa fa-calendar fa-fw fa-lg"></i><span><?=$video->viddata ?></span>
                    <i class="fa fa-home fa-fw fa-lg"></i><span><?=$video->videstado ?></span>
                    <i class="fa fa-feed fa-fw fa-lg"></i><span><?=$video->vidmesano ?></span>
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
              <div class="kp-thumb">
                <div class="video-wrapper">
                    <a href="#" title="Click para Assistir..." class="caption">
                         <iframe width="400" height="225" src="<?= $video->vidurl ?>" frameborder="0" allowfullscreen></iframe>
                    </a>
                    <h6>
                        <a href="#"><?= $video->descricao ?></a>
                    </h6>    
                </div>
              </div>
                  <footer>  
                        <div class="kp-author">
                            <h3>LETRA OFICIAL</h3>
                            <p><?=$video->vidhino ?>"</p>
                        </div>
                        <div class="kp-author">
                             <h3>HISTÓRICO</h3>
                            <p><?=$video->vidsobre ?>"</p>
                        </div>
                   </footer> 
              
              <!-- entry-content -->
              
              <ul class="page-numbers clearfix">
                  <li><span>Page:</span></li>
                  <li><a href="#" class="page-numbers">1</a></li>
                  <li><span class="page-numbers current">2</span></li>
                  <li><a href="#" class="page-numbers">3</a></li>
              </ul>

              
              
               <footer>
                <div class="kp-author">
                    <h3>SOBRE O AUTOR DO <strong><?= $video->descricao ?></strong> </h3>
                <ul class="pager-page list-unstyled clearfix">
                  <li class="prev pull-left">
                    <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/videos/'. $video->vidautorimg1 ?>" width="100" height="100" class="pull-left"  alt="autor" />
                    <div class="item-right">
                      <h4><a href="#"><?= $video->vidautor1 ?>"</a></h4>
                      <p> <?= $video->vidautornot1 ?></p>
                      <p class="kp-social">
                        <a href="#" class="icon-vimeo2"></a>
                        <a href="#" class="icon-facebook2"></a>
                        <a href="#" class="icon-linkedin3"></a>
                        <a href="#" class="icon-google-plus"></a>
                      </p>
                    </div>
                  </li>
                  <li class="next pull-right">
                      <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/videos/'. $video->vidautorimg2 ?>" width="100" height="100" class="pull-left"  alt="autor" />
                    <div class="item-right">
                      <h4><a href="#"><?= $video->vidautor2 ?>"</a></h4>
                      <p> <?= $video->vidautornot2 ?></p>
                      <p class="kp-social">
                        <a href="#" class="icon-vimeo2"></a>
                        <a href="#" class="icon-facebook2"></a>
                        <a href="#" class="icon-linkedin3"></a>
                        <a href="#" class="icon-google-plus"></a>
                      </p>
                    </div>
                  </li>
                </ul>
                </div>
                <!-- kp-author -->
              </footer>
            </article>
           <div class="related-article">
              <div class="widget-title">ARTIGOS RELACIONADOS</div>
              <?php
              include 'include/menu_foto_relacionada.php';
              ?>
              <!-- owl-carousel-related -->
            </div>
            <!-- related-article -->
            <?php
            // include 'include/menu_pagina_comentario.php';
              ?>
            <!-- comments -->
            
            <div class="clearfix"></div>
               <!-- inicio widget-area-4 -->
             <?php //include_once 'include/menu_home_foto_inspiradora.php'; ?>
           <!-- fim widget-area-4 -->
            <!-- widget-area-4 -->
            
        </div>
        <!-- main-col -->
        <div id="sidebar" class="pull-left">
            <!-- inicio sidebar -->
              <?php 
               include 'include/menu_sidebar_propaganda.php';
 
              ?>
            <div class="widget widget-ads" >
             <?php
             include_once 'include/menu_home_clima_1.php';
            //include_once 'include/menu_sidebar_noticia_popular.php';
             ?>
             </div>
           
           <?php
             include_once 'include/menu_sidebar_servico.php';
            //include_once 'include/menu_sidebar_noticia_popular.php';
             ?>

        <!-- fim sidebar -->
        <!-- widget-random -->
         <!-- widget-ads -->
            
            <?php
            include_once 'include/menu_sidebar_noticia_popular.php';
           ?>
         <!-- widget-random -->
          <?php
            include_once 'include/menu_sidebar_randon.php';
           ?>
         <!-- widget-tabs -->
          
           
          <?php
            include_once 'include/menu_sidebar_mapa_localizacao.php';
           ?>
            <!-- widget-video -->

        </div>
        <!-- sidebar -->
        
      <!-- inicio widget-area-5 BOLETIM DE NOTICIAS -->
        <?php include_once 'include/menu_home_newsletter.php'; ?>
        <!-- fim widget-area-5 -->
        <!-- widget-area-5 -->
    </div>
    <!-- main-content -->
</body>

<!-- Mirrored from upsidethemes.net/demo/news-times/html/single-video.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Aug 2020 12:02:50 GMT -->

