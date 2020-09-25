 <!-- widget-newsletter -->
<?php
$hoje = date('Y-m-d');
$hojePartes = new DataCalendario($hoje);
$data = $hojePartes->getDiaSemana($hoje) . ", " . $hojePartes->getDia() . " de " . $hojePartes->getMes() . " de " . $hojePartes->getAno();
$ano  = $hojePartes->getAno();
?>
<div class="widget widget-more-news multimedia">
    <h3 class="widget-title"><a href="?p=noticia_geral">Mais Notícias</a></h3>
    <ul class="list-unstyled clearfix">
         <?php
            $noticiasDestaque = new Noticia(Noticia::MUNICIPIO . " and notcategoria = 1");
            foreach ($noticiasDestaque->getResult() as $noticia) {
          ?>
      <li>
        <div class="item">
          <a title="Veja mais..." href="?p=noticia_detalhe&notcodigo=<?= $noticia['notcodigo'] ?>" class="caption" data-lightbox="example-set">
            <img src="<?= FILES . 'noticia/' . UNIDADE_GESTORA . '/' . $noticia['notfoto'] ?>" style="height:120px; max-height:350px; margin:5px; border-radius:6px;"  alt="">
            <span class="icon-plus"></span>
         </a>
          <p class="kp-metadata style-2">
            <i class="fa fa-calendar fa-fw fa-lg"></i><span><?= DataCalendario::date2br($noticia['notdata']) ?></span>
            <i class="fa fa-home fa-fw fa-lg"></i><span><?=$noticia['notcategoria']?></span><br>
            <i class="fa fa-feed fa-fw fa-lg"></i><span><?=$noticia['notfonte']?></span>
          </p>
      
          <h3>
              <a href="?p=noticia_detalhe&notcodigo=<?= $noticia['notcodigo'] ?>">
                 <?= substr(strip_tags($noticia['nottitulo']), 0, 100) ?>...
              </a>
          </h3>
          <p> <a href="?p=noticia_detalhe&notcodigo=<?= $noticia['notcodigo'] ?>">Leia mais... </a></p>
        </div>
      </li>
      <?php } ?>

    </ul>
</div>
      
          <!-- widget-morenews -->