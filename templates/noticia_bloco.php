<?php

$data1 =  date('d-m-Y');
//$hojePartes =  MDate::datePart($hoje);
//$data = MDate::getDiaSemana($hoje).", ".$hojePartes->dia." de ".MDate::getMeses(1, $hojePartes->mes)." de ".$hojePartes->ano;
//$ano  = $hojePartes->ano;
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
              <li class="active" style="font-size: 20px;"><strong>Notícias Bloco</strong></li>
            </ul>
            <div class="list-posts-cat clearfix">
              <p class="page-nav">
                <a href="?p=noticia_detalhe" class="prev"></a>
                <a href="?p=noticia_detalhe" class="next"></a>
              </p>
               <?php
                    $noticiasDestaque = new Noticia(Noticia::MUNICIPIO . " ");
                    foreach ($noticiasDestaque->getResult() as $noticia) {
                 //   $notdata1 = MDate::date2d($noticia->notdata);
               ?>
              <div class="item pull-left">
                 <p class="kp-metadata style-2">
                    <i class="fa fa-calendar fa-fw fa-lg"></i><span><?=$noticia['notdata'] ?></span>
                    <i class="fa fa-home fa-fw fa-lg"></i><span><?=$noticia['notcategoria']?></span><br>
                    <i class="fa fa-feed fa-fw fa-lg"></i><span><?=$noticia['notfonte']?></span>
                  </p>
                  <a href="?p=noticia_detalhe&notcodigo=<?= $noticia['notcodigo'] ?>" title="Veja Mais..." class="caption">
                    <img src="<?= FILES . 'noticia/' . UNIDADE_GESTORA . '/' . $noticia['notfoto'] ?>" height="240" alt="">
                        <p><?= substr(strip_tags($noticia['nottexto']), 0, 100) ?>...</p>
                        <span class="icon-plus"></span>
                    </a>
                    <h6>
                        <a href="?p=noticia_detalhe&notcodigo=<?= $noticia['notcodigo'] ?>"><?= $noticia["nottitulo"] ?></a>
                    </h6>
                    <a href="?p=noticia_detalhe&notcodigo=<?= $noticia['notcodigo'] ?>" class="continue-reading">Continue Lendo ...</a>
                </div>
            <?php } ?>
               
              </div>
              <!-- item -->
            
              <!-- item -->
              
            </div>
            <!-- list-posts-cat -->
            <div class="clearfix"></div>
              <ul class="page-numbers clearfix">
                  <li><a href="?p=noticia_detalhe" class="prev page-numbers">ANTERIOR</a></li>
                  <li><a href="?p=noticia_detalhe" class="page-numbers">1</a></li>
                  <li><span class="page-numbers current">2</span></li>
                  <li><span class="page-numbers dots">…</span></li>
                  <li><a href="?p=noticia_detalhe" class="page-numbers">5</a></li>
                  <li><a href="?p=noticia_detalhe" class="page-numbers">6</a></li>
                  <li><a href="?p=noticia_detalhe" class="next page-numbers">PRÓXIMO</a></li>
              </ul>
        </div>
        <!-- main-col -->
     <?php include_once 'include/menu_home_newsletter.php'; ?>
        <!-- fim widget-area-5 -->
        <!-- widget-area-5 -->
    </div>
    <!-- main-content -->
    
</body>