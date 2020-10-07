<!DOCTYPE html>

<?php
include './include/head.php';

$hoje = date('Y-m-d');
$hojePartes = new DataCalendario($hoje);
$data = $hojePartes->getDiaSemana($hoje) . ", " . $hojePartes->getDia() . " de " . $hojePartes->getMes() . " de " . $hojePartes->getAno();

 $agronegocio= new Agronegocio(intval($_GET['agrocodigo']));

?>  
<!-- Mirrored from upsidethemes.net/demo/news-times/html/single-agroeo.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Aug 2020 12:02:50 GMT -->
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
               //    $agronegocioAgro = new Agronegocio(Agronegocio::MUNICIPIO,'and agrocodigo = $agrocodigo');
               //    foreach ($agronegocioAgro->getResult() as $agronegocio) {
              ?>
             <ul class="breadcrumb">
              <li><a href="index.php">Início</a></li>
              <li class="active" >AGRONEGÓCIO FEIRAS E EXPOSIÇÃO</li>
            </ul>
           
            <article class="post-content">
              
              <header class="clearfix">
                <h3 class="title-post"><?= strtoupper($agronegocio->agronome) ?>  </h3>
                <div class="header-bottom">
                 <p class="kp-metadata style-2">
                        <a href="#" class="kp-metadata"><span><i class="icon-phone  fa-lg"></i> <?=DataCalendario::date2br($agronegocio->agrodata ) ?> </span></a>
                    
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
                <div class="agroeo-wrapper">
                    <a href="?p=agronegocio_exposicao_detalhe&agrocodigo=<?= $agronegocio->agrocodigo ?>" title=" Veja mais...  <?= $agronegocio->agronome ?>">
                           <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/agronegocio/'. $agronegocio->agrofoto1 ?>" width="250" height="250" alt="">
                      </a>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       <a href="?p=agronegocio_exposicao_detalhe&agrocodigo=<?= $agronegocio->agrocodigo ?>" title=" Veja mais... <?= $agronegocio->agronome ?>">
                       <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/agronegocio/'. $agronegocio->agrofoto2 ?>"  width="470" height="250" alt="">
                       </a>
                    <h6>
                        <a href="#"><?=$agronegocio->agrosobre ?></a>
                    </h6>    
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
            <!-- widget-agroeo -->

        </div>
        <!-- sidebar -->
        
      <!-- inicio widget-area-5 BOLETIM DE NOTICIAS -->
        <?php include_once 'include/menu_home_newsletter.php'; ?>
        <!-- fim widget-area-5 -->
        <!-- widget-area-5 -->
    </div>
    <!-- main-content -->
</body>

<!-- Mirrored from upsidethemes.net/demo/news-times/html/single-agroeo.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Aug 2020 12:02:50 GMT -->

