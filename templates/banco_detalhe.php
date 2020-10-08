<!DOCTYPE html>

<?php
include './include/head.php';

$hoje = date('Y-m-d');
$hojePartes = new DataCalendario($hoje);
$data = $hojePartes->getDiaSemana($hoje) . ", " . $hojePartes->getDia() . " de " . $hojePartes->getMes() . " de " . $hojePartes->getAno();

 $banco= new Bancos(intval($_GET['bancodigo']));

?>  
<!-- Mirrored from upsidethemes.net/demo/news-times/html/single-baneo.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Aug 2020 12:02:50 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<body class="kp-single">
    <!-- page-header -->
    <div id="main-content" class="container clearfix">
       <?php
        include 'include/menu_home_topo.php';
       
        ?>
        <!-- main-top -->
        <div id="main-col" class="pull-left">
            <?php
               //    $bancoAgro = new Agronegocio(Agronegocio::MUNICIPIO,'and bancodigo = $bancodigo');
               //    foreach ($bancoAgro->getResult() as $banco) {
              ?>
             <ul class="breadcrumb">
              <li><a href="index.php">Início</a></li>
              <li class="active" >Bancos Diversos</li>
            </ul>
           
            <article class="post-content">
              
              <header class="clearfix">
                <h3 class="title-post"><?= strtoupper($banco->bannome) ?>  </h3>
                <div class="header-bottom">
                 <p class="kp-metadata style-2">
                        <a href="#" class="kp-metadata"><span><i class="icon-phone  fa-lg"></i> <?=DataCalendario::date2br($banco->bandata ) ?> </span></a>
                    
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
                    <a target="_blank" href="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/banco/'. $banco->banfoto1 ?>" title=" Veja mais...  <?= $banco->bannome ?>" data-lightbox="example-set">
                           <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/banco/'. $banco->banfoto1 ?>" width="250" height="250" alt="">
                      </a>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       <a target="_blank" href="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/banco/'. $banco->banfoto2 ?>" title=" Veja mais... <?= $banco->bannome ?>"  data-lightbox="example-set">
                       <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/banco/'. $banco->banfoto2 ?>"  width="470" height="250" alt="">
                       </a>
                       <br> <br>
                       <a target="_blank" href="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/banco/'. $banco->banfoto3 ?>" title=" Veja mais... <?= $banco->bannome ?>"  data-lightbox="example-set">
                       <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/banco/'. $banco->banfoto3 ?>"  width="740" height="455" alt="">
                       </a>
                  
                        <h6>Sobre:</h6>  
                        <p> <?=$banco->bansobre ?></p>
                           <hr style="color-line: #c9c9c9;">
                </div>
              </div>
              <!-- entry-content -->
                <footer>
             
                <!-- kp-author -->
              </footer>
            </article>
            <!-- related-article -->
            <?php 
               include 'include/menu_pagina_comentario.php';
 
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
               include 'include/menu_publicidade_sidebar.php';
 
              ?>
            <div class="widget widget-ads" >
             <?php
             include_once 'include/menu_home_clima_1.php';
            //include_once 'include/menu_sidebar_noticia_popular.php';
             ?>
             </div>
           
           <?php
       //      include_once 'include/menu_sidebar_servico.php';
            //include_once 'include/menu_sidebar_noticia_popular.php';
             ?>

        <!-- fim sidebar -->
        <!-- widget-random -->
         <!-- widget-ads -->
            
            <?php
      //      include_once 'include/menu_sidebar_noticia_popular.php';
           ?>
         <!-- widget-random -->
          <?php
        //    include_once 'include/menu_sidebar_randon.php';
      //     ?>
         <!-- widget-tabs -->
          
           
          <?php
            include_once 'include/menu_sidebar_mapa_localizacao.php';
           ?>
            <!-- widget-espeo -->

        </div>
        <!-- sidebar -->
        
      <!-- inicio widget-area-5 BOLETIM DE NOTICIAS -->
        <?php include_once 'include/menu_home_newsletter.php'; ?>
        <!-- fim widget-area-5 -->
        <!-- widget-area-5 -->
    </div>
    <!-- main-content -->
</body>

<!-- Mirrored from upsidethemes.net/demo/news-times/html/single-espeo.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Aug 2020 12:02:50 GMT -->

