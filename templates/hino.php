<!DOCTYPE html>
 <?php
$hoje = date('Y-m-d');
$hojePartes = new DataCalendario($hoje);
$data = $hojePartes->getDiaSemana($hoje) . ", " . $hojePartes->getDia() . " de " . $hojePartes->getMes() . " de " . $hojePartes->getAno();
$ano =  $hojePartes->getAno();

$prefeitura = new Prefeitura(UNIDADE_GESTORA);
$prefeito = new Prefeito(UNIDADE_GESTORA);

?> 
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
              <li class="active" >HINO DE AGRICOLÂNDIA</li>
            </ul>
            <article class="post-content">
                 <?php
                $videoBloco = new Videos(Videos::MUNICIPIO . " and vidtipo = '0' ");
                foreach ($videoBloco->getResult() as $video) {
                ?>
              <header class="clearfix">
                <h3 class="title-post">O Hino Oficial de AGRICOLÂNDIA (+ letra) </h3>
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
               
               <div class="item pull-left">
                 <p class="kp-metadata style-2">
                    <i class="fa fa-calendar fa-fw fa-lg"></i><span><?=$video['viddata'] ?></span>
                    <i class="fa fa-home fa-fw fa-lg"></i><span><?=$video['videstado']?></span>
                    <i class="fa fa-feed fa-fw fa-lg"></i><span><?=$video['vidmesano']?></span>
                  </p>
                  <!--Z7pFwsX6UVc -->
                     <a href="#" title="Click para Assistir..." class="caption">
                         <iframe width="800" height="425" src="<?= $video['vidurl'] ?>" frameborder="0" allowfullscreen></iframe>
                    </a>
                    <h6>
                        <a href="?p=video_detalhe&vidcodigo=<?= $video['vidcodigo'] ?>"><?= $video["descricao"] ?>
                        </a>
                    </h6>
                    <a href="?p=video_detalhe&vidcodigo=<?= $video['vidcodigo'] ?>" class="continue-reading">Mais ...</a>
            
                    
         
                </div>
            <!-- kp-thumb -->
              <footer>  
              <div class="kp-author">
                  <h3>LETRA OFICIAL</h3>
                  <p><?=$video['vidhino'] ?>"</p>
              </div>
              
                     
             
                   </footer> 
              <!-- entry-content -->
               </div>
              
                <?php
                }
                ?> 
            </article>
            <?php
          //   include 'include/menu_pagina_foto_relacionada.php';
        //      include 'include/menu_foto_relacionada.php';
              ?>
          
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
             <div class="widget widget-ads" style="margin-left: -25px; margin-top: -16px;" >
             <?php
             include 'include/menu_home_clima_2.php';
            //include_once 'include/menu_sidebar_noticia_popular.php';
             ?>
             </div>
             <div class="widget widget-ads" >
             <?php
             include 'include/menu_home_administra.php';
            //include_once 'include/menu_sidebar_noticia_popular.php';
             ?>
             </div>
           <?php
             include 'include/menu_sidebar_propaganda.php';
            
           ?>
           <?php
           include 'include/menu_sidebar_servico.php';
           ?>
       
       
            <!-- widget-video -->

        </div>
        <!-- sidebar -->
        
      <!-- inicio widget-area-5 BOLETIM DE NOTICIAS -->
        <?php // include_once 'include/menu_home_newsletter.php'; ?>
        <!-- fim widget-area-5 -->
        <!-- widget-area-5 -->
    </div>
    <!-- main-content -->
</body>

<!-- Mirrored from upsidethemes.net/demo/news-times/html/single-video.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Aug 2020 12:02:50 GMT -->

