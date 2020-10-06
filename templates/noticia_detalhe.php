<?php
include './include/head.php';

$hoje = date('Y-m-d');
$hojePartes = new DataCalendario($hoje);
$data = $hojePartes->getDiaSemana($hoje) . ", " . $hojePartes->getDia() . " de " . $hojePartes->getMes() . " de " . $hojePartes->getAno();
$igreja = new Igreja(UNIDADE_GESTORA);
?>
<body class="page-full-width">

<!-- page-header -->
<div id="main-content" class="container clearfix">
    <?php
    include 'include/menu_home_topo.php';
    $noticia = new Noticia(intval($_GET['notcodigo']));
    ?>
    <!-- main-top -->
    <div id="main-col" class="pull-left">
        <ul class="breadcrumb">
            <li><a href="index.php">Início</a></li>
            <li class="active">Notícia Detalhe</li>
        </ul>
        <article class="post-content">

            <header class="clearfix">
                <h3 class="title-post"><?= strtoupper($noticia->nottitulo) ?> </h3>
                <div class="header-bottom">
                    <p class="kp-metadata style-2">
                        <i class="fa fa-calendar fa-fw fa-lg"></i><span><?= DataCalendario::date2br($noticia->notdata) ?></span>
                        <i class="fa fa-home fa-fw fa-lg"></i><span><?= $noticia->notcategoria ?></span>
                        <i class="fa fa-feed fa-fw fa-lg"></i><span><?= $noticia->notfonte ?></span>
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
                <img src="<?= FILES . 'noticia/' . UNIDADE_GESTORA . '/' . $noticia->notfoto ?>" alt="">
            </div>
            <!-- kp-thumb -->
            <div class="entry-content">
                <?= $noticia->nottexto ?>
            </div>
            <!-- entry-content -->

            <ul class="page-numbers clearfix">
                <li><span>Page:</span></li>
                <li><a href="#" class="page-numbers">1</a></li>
                <li><span class="page-numbers current">2</span></li>
                <li><a href="#" class="page-numbers">3</a></li>
            </ul>
            <div class="related-article">
                <div class="widget-title">FOTOS RELACIONADAS</div>
                <div class="owl-carousel owl-carousel-related">
                     <?php
                        $galeriaTur = new Galeria(Galeria::MUNICIPIO);
                        foreach ($galeriaTur->getResult() as $galeria) {
                     ?>  
                        <div class="item">
                          <a href="#" class="caption">
                              <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/galeria/'. $galeria['galarquivo'] ?>" height="180" alt="imagem" />
                            <span class="icon-plus"></span>
                            <p><?= trim($galeria['galnome']) ?></p>
                          </a>
                        </div>
                     <?php } ?>

                </div>
                <!-- owl-carousel-related -->
            </div>


            <!--footer>
                <ul class="pager-page list-unstyled clearfix">
                    <li class="prev pull-left">
                        <h3><span class="icon-double-angle-left"></span><a href="#">previous article</a></h3>
                        <a href="#">1914 translation by H. Rackham</a>
                    </li>
                    <li class="next pull-right">
                        <h3><a href="#">next Article</a> <span class="icon-double-angle-right"></span></h3>
                        <a href="#">US labour market shows strong rise: 236,000</a>
                    </li>
                </ul>
                <div class="kp-author">
                    <h3>about author</h3>
                    <div class="author-body clearfix">
                        <img src="placeholders/avartar/img.jpg" class="pull-left" alt="">
                        <div class="item-right">
                            <h3><a href="#">Jolie Angelina</a></h3>
                            <p>Etiam varius dui eget lorem elementum eget mattis sapien interdum. In hac habitasse
                                platea dictumst.</p>
                            <p class="kp-social">
                                <a href="#" class="icon-vimeo2"></a>
                                <a href="#" class="icon-facebook2"></a>
                                <a href="#" class="icon-linkedin3"></a>
                                <a href="#" class="icon-google-plus"></a>
                            </p>
                        </div>
                      
                    </div>
                  
                </div>
               
            </footer-->
        </article>

        <!-- related-article -->
       <?php
        //    include 'include/menu_pagina_comentario.php';
              ?>
        <!-- comments -->

        <div class="clearfix"></div>

    </div>
    <!-- main-col -->


    <div class="widget-area-5">
        <?php include_once 'include/menu_home_newsletter.php'; ?>
        <!-- widget-newsletter -->

        <!-- widget-morenews -->
    </div>
    <!-- widget-area-5 -->
</div>
<!-- main-content -->


</body>
