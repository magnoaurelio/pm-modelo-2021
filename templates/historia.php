<!DOCTYPE html>

<?php
$hoje = date('Y-m-d');
$hojePartes = new DataCalendario($hoje);
$data = $hojePartes->getDiaSemana($hoje) . ", " . $hojePartes->getDia() . " de " . $hojePartes->getMes() . " de " . $hojePartes->getAno();
$ano =  $hojePartes->getAno();

$prefeitura = new Prefeitura(UNIDADE_GESTORA);
$prefeito = new Prefeito(UNIDADE_GESTORA);

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
              <li class="active" style="font-size: 20px;">HISTÓRIA DE AGRICOLÂNDIA</li>
            </ul>
            <article class="post-content">
              
              <header class="clearfix">
                <h3 class="title-post">O Histórico de AGRICOLÂNDIA  </h3>
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
              <div class="kp-thumb">
                <div class="video-wrapper">
                <?php
                   // include_once 'include/menu_home_video.php';
                // include_once 'include/menu_home_noticias_detaque.php';
                 ?>  
                     <h3 class="widget-title" style="margin-top: 3px; ">Visão Panorâmica </h3>
           <div class="widget widget-ads">
                <?php
                    $galeriaTur = new Galeria(Galeria::MUNICIPIO . ' and galtipo = 0 order by RAND() limit 1 ');
                    foreach ($galeriaTur->getResult() as $galeria) {
                    ?>
                <a target="_blank"  href="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/galeria/'. $galeria['galarquivo'] ?>" class="caption" data-lightbox="example-set" >
                   <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/galeria/'. $galeria['galarquivo'] ?>" width="797" height="429" alt="imagem" />
                </a>
                <?php
                    }
                 ?>  
           </div>
                </div>
              </div>
              
              <!-- kp-thumb -->
              <div class="entry-content">
                   <?php
                     $prefeituraAdmin = new Prefeitura(Prefeitura::MUNICIPIO . "");
                     foreach ($prefeituraAdmin->getResult() as $prefeitura) {
                        
                     ?>
                  <p>  <?= $prefeitura['historico']?></p>
                   <?php
                     }
                     ?>
              </div>
              <!-- entry-content -->
              
              <ul class="page-numbers clearfix">
                  <li><span>Page:</span></li>
                  <li><a href="#" class="page-numbers">1</a></li>
                  <li><span class="page-numbers current">2</span></li>
                  <li><a href="#" class="page-numbers">3</a></li>
              </ul>

              <footer>
              <?php
              include 'include/menu_publicidade_home_inferior.php';
              ?> 
              </footer>
              
              <!--footer>
                <ul class="pager-page list-unstyled clearfix">
                  <li class="prev pull-left">
                    <h3><span class="icon-double-angle-left"></span><a href="#">Artigos Anteriores </a></h3>
                    <a href="#">Dia da Proclamação da Repubica</a>
                  </li>
                  <li class="next pull-right">
                    <h3><a href="#">Próximos Artigos </a> <span class="icon-double-angle-right"></span></h3>
                    <a href="#">Emancipação do Municipio de Agricolandia</a>
                  </li>
                </ul>
             
                <!-- kp-author >
              </footer-->
            </article>
            
           <div class="related-article">
              <div class="widget-title">IMAGENS RELACIONADAS</div>
               <?php
              include 'include/menu_foto_relacionada.php';
              ?>
              <!-- owl-carousel-related -->
            </div>
            <!-- related-article -->
              <?php
             // include 'include/menu_pagina_comentario.php';
              ?>
        </div>
        <!-- main-col -->
        <div id="sidebar" class="pull-left">
            <!-- inicio sidebar -->
            <div class="widget widget-ads" style="margin-left: -25px; margin-top: -16px;">
             <?php
             include_once 'include/menu_home_clima_2.php';
            //include_once 'include/menu_sidebar_noticia_popular.php';
             ?>
             </div>
         
             <?php
             include_once 'include/menu_publicidade_sidebar.php';
             ?>
           <?php
           //  include_once 'include/menu_sidebar_servico.php';
            include_once 'include/menu_sidebar_noticia_popular.php';
             ?>

           
          <?php
           include_once 'include/menu_sidebar_servico.php';
           ?>
          <?php
            include_once 'include/menu_home_video.php';
           ?>
            <!-- widget-video -->

        </div>
        <!-- sidebar -->
         <hr>
      <!-- inicio widget-area-5 BOLETIM DE NOTICIAS -->
        <?php 
        //include 'include/menu_publicidade_home_inferior.php';
        ?>
      <br>
        <!-- fim widget-area-5 -->
        <!-- widget-area-5 -->
    </div>
    <!-- main-content -->
</body>

<!-- Mirrored from upsidethemes.net/demo/news-times/html/single-video.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Aug 2020 12:02:50 GMT -->

