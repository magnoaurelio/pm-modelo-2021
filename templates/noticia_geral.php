<!DOCTYPE html>
<?php

$hoje = date('Y-m-d');
$hojePartes = new DataCalendario($hoje);
$data = $hojePartes->getDiaSemana($hoje) . ", " . $hojePartes->getDia() . " de " . $hojePartes->getMes() . " de " . $hojePartes->getAno();
$ano  = $hojePartes->getAno();

?>

<body class="kp-category-1">
    <!-- page-header -->
    <div id="main-content" class="container clearfix">
        
        <?php
          include 'include/menu_home_topo.php';
        ?>
        <!-- main-top -->
        <div id="main-col" class="pull-left">
            <ul class="breadcrumb">
              <li><a href="index.php">Início</a></li>
              <li class="active" style="font-size: 20px;"><strong>Notícias Geral</strong></li>
            </ul>
            <div class="list-posts-cat clearfix">
              <p class="page-nav">
                <a href="?p=noticia_detalhe" class="prev"></a>
                <a href="?p=noticia_detalhe" class="next"></a>
              </p>
               <?php
                    $noticiasDestaque = new Noticia(Noticia::MUNICIPIO . " ");
                    foreach ($noticiasDestaque->getResult() as $noticia) {
                
               ?>
              <div class="item clearfix">
                <div class="pull-left">
                   <a href="?p=noticia_detalhe&notcodigo=<?= $noticia['notcodigo'] ?>" title="Veja Mais..." class="caption">
                       <img src="<?= FILES . 'noticia/' . UNIDADE_GESTORA . '/' . $noticia['notfoto'] ?>" width="350" height="200" alt="">
                        <p><?= substr(strip_tags($noticia['nottexto']), 0, 100) ?>...</p>
                        <span class="icon-plus"></span>
                    </a>
                </div>
                
                <div class="item-right">
                  <p class="kp-metadata style-2">
                    <i class="fa fa-calendar fa-fw fa-lg"></i><span><?=DataCalendario::date2br($noticia['notdata']) ?></span>
                    <i class="fa fa-home fa-fw fa-lg"></i><span><?=$noticia['notcategoria']?></span>
                    <i class="fa fa-feed fa-fw fa-lg"></i><span><?=$noticia['notfonte']?></span>
                   </p>
                  <h3><a href="?p=noticia_detalhe&notcodigo=<?= $noticia['notcodigo'] ?>"><?= $noticia["nottitulo"] ?></a></h3>
                  <p>
                      <a href="?p=noticia_detalhe&notcodigo=<?= $noticia['notcodigo'] ?>"><?= $noticia["notsubtitulo"] ?></a>
                  </p>
                  <a href="?p=noticia_detalhe&notcodigo=<?= $noticia['notcodigo'] ?>" class="continue-reading">Continue Lendo ...</a>
                </div>
                <!-- item-right -->
                
              </div>
              <?php } ?>
              <div class="clearfix"></div>
              
            </div>
            <!-- list-posts-cat -->
            <div class="clearfix"></div>
            <ul class="page-numbers clearfix">
                  <li><a href="?p=noticia_detalhe" class="prev page-numbers">Previous</a></li>
                  <li><a href="?p=noticia_detalhe" class="page-numbers">1</a></li>
                  <li><span class="page-numbers current">2</span></li>
                  <li><span class="page-numbers dots">…</span></li>
                  <li><a href="#" class="page-numbers">5</a></li>
                  <li><a href="#" class="page-numbers">6</a></li>
                  <li><a href="#" class="next page-numbers">Next</a></li>
              </ul>
           <!-- inicio widget-area-4 -->
             <?php // include_once 'include/menu_home_foto_inspiradora.php'; ?>
           <!-- fim widget-area-4 -->
            <!-- widget-area-4 -->
            
        </div>
        <!-- main-col -->
        <div id="sidebar" class="pull-left">
            <!-- inicio sidebar -->
              <?php 
               include 'include/menu_sidebar_propaganda.php';
              ?>

             <?php
            include 'include/menu_sidebar_randon.php';
          ?>
        <!-- widget-random -->
           <?php
            include 'include/menu_sidebar_servico.php';
           ?>
        
         <!-- widget_categories -->            <!-- widget_categories -->
            <!-- widget_categories -->
        
            <!-- widget-ads -->
           
             <?php
            include 'include/menu_sidebar_noticia_popular.php';
           ?>
         <!-- widget-tabs -->
           
          <?php
            include 'include/menu_home_video.php';
         ?>
            <!-- widget-video -->

        </div>
        <!-- sidebar -->
        
         <?php include 'include/menu_home_newsletter.php'; ?>
        <!-- fim widget-area-5 -->
        <!-- widget-area-5 -->
    </div>
    <!-- main-content -->
   
    
</body>


