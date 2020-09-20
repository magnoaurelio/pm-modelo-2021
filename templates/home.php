<!DOCTYPE html>

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
                    $noticiasHome = new Noticia(Noticia::MUNICIPIO . " and home = 1");
                    foreach ($noticiasHome->getResult() as $noticia) {
                        ?>

                        <div class="item-lg" style="width: 100%">
                            <a href="?p=noticia_detalhe" class="kp-caption">
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
        </div>
        <!-- fim widget-area-1 -->

        <div class="clearfix"></div>

        <!-- inicio widget-area-3 -->
        <div class="widget-area-3 pull-right">
            <div class="widget widget-featured-news">
                <h3 class="widget-title">Notícias destaque</h3>
                <div class="owl-carousel owl-carousel-feature">

                    <div class="item-wrapper clearfix">

                        <?php
                        $noticiasDestaque = new Noticia(Noticia::MUNICIPIO . " and home != 1");
                        foreach ($noticiasDestaque->getResult() as $noticia) {
                            ?>
                            <div class="item pull-left">
                                <p class="kp-metadata style-2">
                                    <i class="icon-heart"></i><span>50 Acesso</span>
                                    <i class="icon-eye"></i><span>50 Visto</span>
                                    <i class="icon-user"></i><span>Portal</span>
                                </p>
                                <a href="?p=noticia_detalhe" class="caption">
                                    <img src="<?= FILES . 'noticia/' . UNIDADE_GESTORA . '/' . $noticia['notfoto'] ?>"
                                         alt="">
                                    <p><?= substr(strip_tags($noticia['nottexto']), 0, 100) ?>...</p>
                                    <span class="icon-plus"></span>
                                </a>
                                <h6>
                                    <a href="?p=noticia_detalh?notcodigo=<?= $noticia['notcodigo'] ?>"><?= $noticia["nottitulo"] ?></a>
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
            <div class="widget widget-last-post">
                <h3 class="widget-title">Secretarias</h3>


                <ul class="list-news list-unstyled">
                    <?php
                    $secretarias = new Secretaria(Secretaria::MUNICIPIO);
                    foreach ($secretarias->getResult() as $secretaria) {
                        ?>
                        <li>
                            <div class="item">
                                <a href="?p=noticia_detalhe">
                                    <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/secretaria/'. $secretaria['secfotor'] ?>" alt="">
                                    <span>
                                      <i class="icon-images"></i>
                                    </span>
                                </a>
                                <h3><a href="?p=noticia_detalhe"><?=$secretaria['secnome']?></a></h3>
                                <p class="kp-metadata">
                                    <span>Secretário: <?= $secretaria['secusual'] ?></span>
                                </p>
                            </div>
                        </li>
                    <?php } ?>
                    <li>
                        <?php
                        include_once 'include/menu_home_clima_1.php';
                        ?>
                    </li>
                </ul>
            </div>
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
        <?php include_once 'include/menu_home_foto_inspiradora.php'; ?>

        <!-- fim widget-area-4 -->

    </div>
    <!-- fim main-col -->

    <!-- inicio sidebar -->
    <?php include_once 'include/menu_home_sidebar.php'; ?>

    <!-- fim sidebar -->
    <!-- inicio widget-area-5 BOLETIM DE NOTICIAS -->
    <?php include_once 'include/menu_home_newsletter.php'; ?>
    <!-- fim widget-area-5 -->

</div>

</body>
</html>
