<?php
include './include/head.php';

$hoje = date('Y-m-d');
$hojePartes = new DataCalendario($hoje);
$data = $hojePartes->getDiaSemana($hoje) . ", " . $hojePartes->getDia() . " de " . $hojePartes->getMes() . " de " . $hojePartes->getAno();

$ano =  $hojePartes->getAno();
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
              <li class="active">AGRONEGOCIO GERAL</li>
            </ul>
            <article class="post-content">
              
              <header class="clearfix">
                <h3 class="title-post">  Exposição, Feiras e Eventos do AGRONEGÓCIO</h3>
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
                    $agronegocioAgro = new Agronegocio(Agronegocio::MUNICIPIO);
                    foreach ($agronegocioAgro->getResult() as $agronegocio) {
                     ?>
                        <li>
                            <div class="mask">
                                <a href="?p=agronegocio_exposicao_detalhe&agrocodigo=<?= $agronegocio['agrocodigo'] ?>" title=" Veja mais...  <?= $agronegocio['agronome'] ?>">
                                  <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/agronegocio/'. $agronegocio['agrofoto2'] ?>" width="797" height="429"  alt="">
                                 </a>
                            </div>
                            <div class="kp-gallery-caption">
                                 <?= $agronegocio['agronome'] ?>
                            </div>
                        </li>
                      <?php } ?>
                    </ul>
                </div>
                <div class="flexslider kp-gallery-carousel">
                      <ul class="slides">
                        <?php
                           $agronegocioAgro = new Agronegocio(Agronegocio::MUNICIPIO);
                           foreach ($agronegocioAgro->getResult() as $agronegocio) {
                        ?>
                        <li>
                            <a href="?p=agronegocio_exposicao_detalhe&agrocodigo=<?= $agronegocio['agrocodigo'] ?>" title=" Veja mais...  <?= $agronegocio['agronome'] ?>">
                           <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/agronegocio/'. $agronegocio['agrofoto1'] ?>" width="200" height="120" alt="">
                            </a>
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
             include 'include/menu_home_clima_2.php';
            //include_once 'include/menu_sidebar_noticia_popular.php';
          
             include 'include/menu_publicidade_sidebar.php';
           
             include 'include/menu_home_video.php';
           ?>
        </div>
        <!-- sidebar -->
        
         <div class="widget-area-5">
          <div class="multimedia clearfix">
           
            <?php
            include_once 'include/menu_galeria_imagem_relac.php';
           ?>
            
            <?php
            include_once 'include/menu_galeria_video_relac.php';
           ?>
            
             <?php
            //include_once 'include/menu_galeria_audio_relac.php';
           ?>
          </div>
          <!-- multimedia -->
        </div>
          <!-- multimedia -->
        
        <!-- widget-area-5 -->
    </div>
    <!-- main-content -->
  
    
</body>
