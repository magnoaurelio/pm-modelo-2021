<?php
$hoje = date('Y-m-d');
$hojePartes = new DataCalendario($hoje);
$data = $hojePartes->getDiaSemana($hoje) . ", " . $hojePartes->getDia() . " de " . $hojePartes->getMes() . " de " . $hojePartes->getAno();
$ano  = $hojePartes->getAno();
?>
<!-- inicio widget-area-4 -->
<div class="widget-area-4">
   <div class="widget widget-photos">
      <h3 class="widget-title">Fotos inspiradoras</h3>
      <ul class="list-unstyled clearfix">
       
        <li class="col-sm col-sm-left">
          <ul class="list-unstyled">
            <?php
            $noticiasDestaque = new Noticia(Noticia::MUNICIPIO . " and home <> 2 order by RAND() limit 1,1");
            foreach ($noticiasDestaque->getResult() as $noticia) {
            ?>
            <li>
                <a title="Veja mais..." href="?p=noticia_detalhe&notcodigo=<?= $noticia['notcodigo'] ?>" class="caption">
                  <img src="<?= FILES . 'noticia/' . UNIDADE_GESTORA . '/' . $noticia['notfoto'] ?>" style="height:130px; max-height:350px; margin:5px; border-radius:6px;"  alt="">
                  <h4> <?= substr(strip_tags($noticia['nottitulo']), 0,20) ?>...</h4>
                <span class="icon-plus"></span>
              </a>
            </li>
             <?php } ?>
            <?php
            $noticiasDestaque = new Noticia(Noticia::MUNICIPIO . " and home <> 2 order by RAND() limit 2,1");
            foreach ($noticiasDestaque->getResult() as $noticia) {
            ?>
            <li>
               <a title="Veja mais..." href="?p=noticia_detalhe&notcodigo=<?= $noticia['notcodigo'] ?>" class="caption">
                  <img src="<?= FILES . 'noticia/' . UNIDADE_GESTORA . '/' . $noticia['notfoto'] ?>" style="height:130px; max-height:350px; margin:5px; border-radius:6px;" alt="">
                  <h4> <?= substr(strip_tags($noticia['nottitulo']), 0, 20) ?>...</h4>
                <span class="icon-plus"></span>
              </a>
            </li>
             <?php } ?>
          </ul>
        </li>
        <li class="col-center">
          <div class="owl-carousel owl-carousel-photos">
                  <?php
                  $noticiasDestaque = new Noticia(Noticia::MUNICIPIO . " and home <> 2 order by RAND() limit 1,1");
                  foreach ($noticiasDestaque->getResult() as $noticia) {
                  ?>
                  <a title="Veja mais..." href="?p=noticia_detalhe&notcodigo=<?= $noticia['notcodigo'] ?>" class="caption">
                  <img src="<?= FILES . 'noticia/' . UNIDADE_GESTORA . '/' . $noticia['notfoto'] ?>" style="height:300px; max-height:350px; margin:5px; border-radius:5px;" alt="">
                  <h4> <?= substr(strip_tags($noticia['nottitulo']), 0, 60) ?>...</h4>
                   <span class="icon-plus"></span>
                 </a>
                 <?php } ?>
              
                 <?php
                  $noticiasDestaque = new Noticia(Noticia::MUNICIPIO . " and home <> 2 order by RAND() limit 2,1");
                  foreach ($noticiasDestaque->getResult() as $noticia) {
                  ?>
                 <a title="Veja mais..." href="?p=noticia_detalhe&notcodigo=<?= $noticia['notcodigo'] ?>" class="caption">
                  <img src="<?= FILES . 'noticia/' . UNIDADE_GESTORA . '/' . $noticia['notfoto'] ?>" style="height:300px; max-height:350px; margin:5px; border-radius:5px;" alt="">
                  <h4> <?= substr(strip_tags($noticia['nottitulo']), 0, 60) ?>...</h4>
                   <span class="icon-plus"></span>
                </a>

                 <?php } ?>

                  <?php
                  $noticiasDestaque = new Noticia(Noticia::MUNICIPIO . " and home <> 2 order by RAND() limit 3,2");
                  foreach ($noticiasDestaque->getResult() as $noticia) {
                  ?>
                   <a title="Veja mais..." href="?p=noticia_detalhe&notcodigo=<?= $noticia['notcodigo'] ?>" class="caption">
                  <img src="<?= FILES . 'noticia/' . UNIDADE_GESTORA . '/' . $noticia['notfoto'] ?>" style="height:300px; max-height:350px; margin:5px; border-radius:5px;" alt="">
                  <h4> <?= substr(strip_tags($noticia['nottitulo']), 0, 60) ?>...</h4>
                   <span class="icon-plus"></span>
                    </a>
                 <?php } ?>

          </div>
        </li>
        <li class="col-sm col-sm-right">
           <ul class="list-unstyled">
            <?php
            $noticiasDestaque = new Noticia(Noticia::MUNICIPIO . " and home <> 2 order by RAND() limit 1,1");
            foreach ($noticiasDestaque->getResult() as $noticia) {
            ?>
            <li>
                <a title="Veja mais..." href="?p=noticia_detalhe&notcodigo=<?= $noticia['notcodigo'] ?>" class="caption">
                  <img src="<?= FILES . 'noticia/' . UNIDADE_GESTORA . '/' . $noticia['notfoto'] ?>" style="height:130px; max-height:350px; margin:5px; border-radius:6px;"  alt="">
                  <h4> <?= substr(strip_tags($noticia['nottitulo']), 0,20) ?>...</h4>
                <span class="icon-plus"></span>
              </a>
            </li>
             <?php } ?>
            <?php
            $noticiasDestaque = new Noticia(Noticia::MUNICIPIO . " and home <> 2 order by RAND() limit 2,1");
            foreach ($noticiasDestaque->getResult() as $noticia) {
            ?>
            <li>
               <a title="Veja mais..." href="?p=noticia_detalhe&notcodigo=<?= $noticia['notcodigo'] ?>" class="caption">
                  <img src="<?= FILES . 'noticia/' . UNIDADE_GESTORA . '/' . $noticia['notfoto'] ?>" style="height:130px; max-height:350px; margin:5px; border-radius:6px;" alt="">
                  <h4> <?= substr(strip_tags($noticia['nottitulo']), 0, 20) ?>...</h4>
                <span class="icon-plus"></span>
              </a>
            </li>
             <?php } ?>
          </ul>
        </li>
      </ul>
     
      <a href="?p=galeria" class="to-gallery">Veja mais...</a>
    </div>
    <!-- widget-photos -->
</div>
            <!-- fim widget-area-4 -->