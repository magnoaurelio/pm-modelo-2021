<?php

$hoje = date('Y-m-d');
$hojePartes = new DataCalendario($hoje);
$data = $hojePartes->getDiaSemana($hoje) . ", " . $hojePartes->getDia() . " de " . $hojePartes->getMes() . " de " . $hojePartes->getAno();
$ano  =  $hojePartes->getAno();

?>

<body class="page-full-width">
   
    <!-- page-header -->
    <div id="main-content" class="container clearfix">
       <?php
          include 'include/menu_home_topo.php';
        ?>
        <!-- main-top -->
        <div id="main-col" class="pull-left">
             <ul class="breadcrumb">
              <li><a href="index.php">Início</a></li>
              <li class="active" style="font-size: 20px;"><strong>Vídeos Diversos</strong></li>
            </ul>
            <div class="list-posts-cat clearfix">
              <p class="page-nav">
                <a href="?p=vidio_detalhe" class="prev"></a>
                <a href="?p=vidio_detalhe" class="next"></a>
              </p>
               <?php
                    $videoBloco = new Videos(Videos::MUNICIPIO . " ");
                    foreach ($videoBloco->getResult() as $video) {
               ?>
              <div class="item pull-left">
                 <p class="kp-metadata style-2">
                    <i class="fa fa-calendar fa-fw fa-lg"></i><span><?=$video['viddata'] ?></span>
                    <i class="fa fa-home fa-fw fa-lg"></i><span><?=$video['videstado']?></span>
                    <i class="fa fa-feed fa-fw fa-lg"></i><span><?=$video['vidmesano']?></span>
                  </p>
                  <!--Z7pFwsX6UVc -->
                     <a href="#" title="Click para Assistir..." class="caption">
                         <iframe width="400" height="225" src="<?= $video['vidurl'] ?>" frameborder="0" allowfullscreen></iframe>
                    </a>
                    <h6>
                        <a href="?p=video_detalhe&prenumero=<?= $video['prenumero'] ?>"><?= $video["descricao"] ?>
                        </a>
                    </h6>
                    <a href="?p=video_detalhe&prenumero=<?= $video['prenumero'] ?>" class="continue-reading">Mais ...</a>
                </div>
            <?php } ?>
               
              </div>
              <!-- item -->
            
              <!-- item -->
              
            </div>
            <!-- list-posts-cat -->
            <div class="clearfix"></div>
              <ul class="page-numbers clearfix">
                  <li><a href="#" class="prev page-numbers">ANTERIOR</a></li>
                  <li><a href="#" class="page-numbers">1</a></li>
                  <li><span class="page-numbers current">2</span></li>
                  <li><span class="page-numbers dots">…</span></li>
                  <li><a href="#" class="page-numbers">5</a></li>
                  <li><a href="#" class="page-numbers">6</a></li>
                  <li><a href="#" class="next page-numbers">PRÓXIMO</a></li>
              </ul>
        </div>
        <!-- main-col -->
     <?php include_once 'include/menu_home_newsletter.php'; ?>
        <!-- fim widget-area-5 -->
        <!-- widget-area-5 -->
    </div>
    <!-- main-content -->
    
</body>