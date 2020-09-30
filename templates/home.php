<!DOCTYPE html>
<?php

$hoje = date('Y-m-d');
$hojePartes = new DataCalendario($hoje);
$data = $hojePartes->getDiaSemana($hoje) . ", " . $hojePartes->getDia() . " de " . $hojePartes->getMes() . " de " . $hojePartes->getAno();
$ano  =  $hojePartes->getAno();
$prefeitura = new Prefeitura(UNIDADE_GESTORA);
?>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8"/>

<body class="kp-home">
<!-- page-header -->

<!-- page-header -->
<div id="main-content" class="container clearfix">

    <!-- inicio main-top -->
    <?php
    include_once 'include/menu_home_topo.php';
    ?>
    <!-- fim main-top -->

    <!-- inicio  main-col -->
    <div id="main-col" class="pull-left">

        <!-- inicio widget-area-1 -->
        <div class="widget-area-1">
            <div class=" widget slider-feature-news">
                <div class="owl-carousel owl-carousel-images">
                    <!-- item -->
                    <?php
                    $noticiasHome = new Noticia(Noticia::MUNICIPIO . " and home = 1 ");
                    foreach ($noticiasHome->getResult() as $noticia) {
                        ?>

                        <div class="item-lg" style="width: 100%">
                            <a href="?p=noticia_detalhe&notcodigo=<?= $noticia['notcodigo'] ?>" class="kp-caption">
                                <img src="<?= FILES . 'noticia/' . UNIDADE_GESTORA . '/' . $noticia['notfoto'] ?>"
                                     width="100%" alt="">
                                <div class="caption-wrapper" style="width: 100%">
                                    <h3><?= $noticia["nottitulo"] ?></h3>
                                    <p><?= substr(strip_tags($noticia['nottexto']), 0, 100) ?>...</p>

                                </div>
                            </a>
                        </div>
                        <?php
                    }
                    ?>

                </div>
                <!-- owl-carousel-images -->
            </div>
            <!-- slider-feature-news -->
              <?php include 'include/menu_publicidade_home_superior.php'; ?>
          </div>
     
        <div class="clearfix"></div>

        <!-- inicio widget-area-3 -->
        <div class="widget-area-3 pull-right">
            <div class="widget widget-featured-news">
                <h4 class="widget-title">Notícias destaque</h4>
                <div class="owl-carousel owl-carousel-feature">

                    <div class="item-wrapper clearfix">

                        <?php
                        $noticiasDestaque = new Noticia(Noticia::MUNICIPIO . " and home != 1");
                        foreach ($noticiasDestaque->getResult() as $noticia) {
                            ?>
                            <div class="item pull-left">
                                  <p class="kp-metadata style-2">
                                    <i class="fa fa-calendar fa-fw fa-lg"></i><span><?= DataCalendario::date2br($noticia['notdata']) ?></span>
                                    <i class="fa fa-home fa-fw fa-lg"></i><span><?=$noticia['notcategoria']?></span><br>
                                    <i class="fa fa-feed fa-fw fa-lg"></i><span><?=$noticia['notfonte']?></span>
                                  </p>
                                <a title="Veja mais..." href="?p=noticia_detalhe&notcodigo=<?= $noticia['notcodigo'] ?>" class="caption">
                                    <img src="<?= FILES . 'noticia/' . UNIDADE_GESTORA . '/' . $noticia['notfoto'] ?>"  height="200"  alt="">
                                    <p><?= substr(strip_tags($noticia['nottexto']), 0, 100) ?>...</p>
                                    <span class="icon-plus"></span>
                                </a>
                                <h6>
                                    <a title="Veja mais..." href="?p=noticia_detalhe&notcodigo=<?= $noticia['notcodigo'] ?>"><?=  substr(strip_tags($noticia['nottitulo']), 0, 75) ?>...</a>
                                </h6>
                            </div>

                        <?php } ?>
                    </div>
                    <!-- item-wrapper -->


                </div>
                <!-- owl-carousel-feature -->
            </div>
        </div>
        <!-- fim widget-area-3 -->

        <!-- inicio widget-area-2 -->
        <div class="widget-area-2 pull-left">
             <?php include 'include/menu_publicidade_sidebar.php'; ?>
             <?php include_once 'include/menu_home_clima_4.php'; ?>
            <!-- widget-last-post -->
            <div class="widget widget-ads">
                <!--a href="?p=noticia_detalhe"><img src="files/prefeituras/201002/banner/BANNER_MEIO_INFER_AGR.gif" alt=""></a-->
            </div>
            <!-- widget-ads -->
            <div class="widget widget-tw">
                <h3 class="widget-title">ÚLTIMOS TWEETS</h3>
                <div class="tweets">

                </div>
                <a href="?p=noticia_detalhe" class="clearfix"><span class="icon-twitter4"></span>Siga...</a>
            </div>
            <div class="widget widget-tw">
                <h3 class="widget-title">ÚLTIMOS FACEBOOK</h3>
                <div class="tweets">

                </div>
                <a href="?p=noticia_detalhe" class="clearfix"><span class="icon-facebook"></span>Siga...</a>
            </div>

            <!-- widget-tw -->
        </div>
        <!-- widget-area-2 -->


        <div class="clearfix"></div>

        <!-- inicio widget-area-4 -->
        <?php include 'include/menu_home_foto_inspiradora.php'; ?>

        <!-- fim widget-area-4 -->

    </div>
    <!-- fim main-col -->

    <!-- inicio sidebar -->
   
    <?php include 'include/menu_home_sidebar_adm.php'; ?>
    
   
        
         <!-- widget-ads -->
         
    <!-- fim sidebar -->
    <!-- inicio widget-area-5 BOLETIM DE NOTICIAS -->
    <?php include 'include/menu_home_newsletter.php'; ?>
    <?php include 'include/menu_publicidade_home_inferior.php'; ?>
    <br>
    <!-- fim widget-area-5 -->

</div>

</body>
</html>
