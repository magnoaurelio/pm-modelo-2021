<!DOCTYPE html>
<?php
include './include/head.php';

$hoje = date('Y-m-d');
$hojePartes = new DataCalendario($hoje);
$data = $hojePartes->getDiaSemana($hoje) . ", " . $hojePartes->getDia() . " de " . $hojePartes->getMes() . " de " . $hojePartes->getAno();
$simbolo = new Simbolo(UNIDADE_GESTORA);
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
              <li class="active" >SIMBOLOS</li>
            </ul>
            <article class="post-content">
              
              <header class="clearfix">
                  <?php
                     $simboloAdmin = new Simbolo(Simbolo::MUNICIPIO);
                     foreach ($simboloAdmin->getResult() as $simbolo) {
                       
                     ?>
                <h3 class="title-post" style="color: #9e9e9e;">Simbolo:  &nbsp;&nbsp; 
                    <span >
                        <a href="?p=simbolo" title="<?= $simbolo['simnome'] ?>" >
                               <span ><strong><?= $simbolo['simnome'] ?></strong></span>
                        </a>
                        &nbsp;&nbsp;
                    </span>
                 </h3>
                <!-- header-bottom -->                
            
              <footer>
                   
                <div class="kp-author">
                  <div class="author-body clearfix">
                    <div class="col-sm-right col-12">
                   
                     <div class="item-left" >
                       <a target="_blank"  title="Veja mais.. <?= $simbolo['simnome'] ?>"  href="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/simbolo/'. $simbolo['simfoto1'] ?>" width="250" height="250" class="pull-left" data-lightbox="example-set" alt="simbolo" >
                            <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/simbolo/'. $simbolo['simfoto1'] ?>" width="250" height="250" alt="simbolo">
                            &nbsp;&nbsp;
                       </a>
                       
                       <div class="item-right" >
                        <a target="_blank"  title=" Veja mais..  <?= $simbolo['simnome'] ?>"  href="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/simbolo/'. $simbolo['simfoto2'] ?>" width="250" height="250" class="pull-left" data-lightbox="example-set" alt="simbolo" >
                          <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/simbolo/'. $simbolo['simfoto2'] ?>" width="470" height="250" alt="simbolo">
                        </a>
                       </div>
                         <br>
                       <div class="item-right" >
                       <a target="_blank"  title=" Veja mais..  <?= $simbolo['simnome'] ?>"  href="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/simbolo/'. $simbolo['simfoto3'] ?>" width="250" height="250" class="pull-left" data-lightbox="example-set" alt="simbolo" >
                          <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/simbolo/'. $simbolo['simfoto3'] ?>"  alt="simbolo">
                       </a>
                       </div>
                     
                      </div>
                        <hr style="color-line: #ccc;">
                       <p class="kp-social">
                        <a href="#" class="icon-vimeo2"></a>
                        <a href="#" class="icon-facebook2"></a>
                        <a href="#" class="icon-linkedin3"></a>
                        <a href="#" class="icon-google-plus"></a>
                       </p>
                       <br>
                       <p class="kp-social">
                           <a href="#" class="kp-metadata"><span><i class="icon-calendar  fa-lg"></i> <?=DataCalendario::date2br( $simbolo['simdata']) ?> </span></a><br>
                        <a href="#" class="kp-metadata"><span><i class="fa fa-flag-o  fa-lg"></i> <?= $simbolo['simdetalhe'] ?> </span></a>
                        </p>
                      <hr style="color-line: #ccc;">
                      <h6>Sobre:</h6>
                      <p> <?= $simbolo['simsobre'] ?></p>
                     
                    </div>
                    <!-- item-right -->
                    </div>
                  <!-- author-body -->
                </div>
                 
                  </footer>
                  <?php } ?>
              </header>
             
         
            </article>
       
            <!-- related-article -->
           
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
             <div class="widget widget-ads"  >
             <?php
           
             include 'include/menu_publicidade_sidebar.php';
            // include_once 'include/menu_home_clima_4.php';
             ?>
             </div>
            <?php
              include 'include/menu_home_sidebar_adm.php';
             ?>
         
        <!-- fim sidebar -->
        <!-- widget-random -->
         <!-- widget-ads -->
            
           
            <!-- widget-video -->

        </div>
        <!-- sidebar -->
        
      <!-- inicio widget-area-5 BOLETIM DE NOTICIAS -->
        <?php// include_once 'include/menu_home_newsletter.php'; ?>
       <?php
           
             include 'include/menu_publicidade_home_inferior.php';
            // include_once 'include/menu_home_clima_4.php';
             ?>
      <br>
        <!-- fim widget-area-5 -->
        <!-- widget-area-5 -->
    </div>
    <!-- main-content -->
</body>

<!-- Mirrored from upsidethemes.net/demo/news-times/html/single-video.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Aug 2020 12:02:50 GMT -->

