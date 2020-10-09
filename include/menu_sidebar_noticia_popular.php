<?php

$hoje = date('Y-m-d');
$hojePartes = new DataCalendario($hoje);
$data = $hojePartes->getDiaSemana($hoje) . ", " . $hojePartes->getDia() . " de " . $hojePartes->getMes() . " de " . $hojePartes->getAno();
$ano  = $hojePartes->getAno();
?>  
<div class="widget widget-tabs">

    <div class="kp-tabs">
      <ul>
        <li><a href="#tabs-1">recente</a></li>
        <li><a href="#tabs-2">popular</a></li>
        <li><a href="#tabs-3">geral</a></li>
      </ul>
      <div id="tabs-1" class="tabs-1">
        <div class="tab-content">
            <ul class="list-posts list-unstyled">
            <?php
            $n = 1;
            $noticiasDestaque = new Noticia(Noticia::MUNICIPIO . " and home = 1");
            foreach ($noticiasDestaque->getResult() as $noticia) {
            ?>
                <li>
                <div class="item clearfix">
                  
                     <a title="Veja mais..." href="?p=noticia_detalhe&notcodigo=<?= $noticia['notcodigo'] ?>" class="pull-left">
                         <?=$n ?>
                     </a>
                    <div class="item-right">
                        <h4><a href="?p=noticia_detalhe&notcodigo=<?= $noticia['notcodigo'] ?>">
                            <?= substr(strip_tags($noticia['nottitulo']), 0, 100) ?>...
                         </a></h4>
                        <p class="kp-metadata">
                            <span><i class="icon-calendar"></i>
                            <?= DataCalendario::date2br($noticia['notdata']) ?>
                            </span>
                            <span> 
                                <i class="fa fa-pencil fa-fw fa-lg"></i><span><?= DadosFixos::TipoNoticia($noticia['notcategoria'])?></span>                               
</span>
                        </p>
                    </div>
                </div>
              </li>
            <?php 
            $n++;
            } ?>
            </ul>
        </div>
        <!-- tab-content -->

      </div>
      <div id="tabs-2" class="tabs-2">
        <div class="tab-content">
            <ul class="list-posts list-unstyled">
            <?php
            $n = 1;
            $noticiasDestaque = new Noticia(Noticia::MUNICIPIO . " and home != 1");
            foreach ($noticiasDestaque->getResult() as $noticia) {
            ?>
              <li>
                  <div class="item clearfix">
                      <a title="Veja mais..." href="?p=noticia_detalhe&notcodigo=<?= $noticia['notcodigo'] ?>" class="pull-left">
                        <img src="<?= FILES . 'noticia/' . UNIDADE_GESTORA . '/' . $noticia['notfoto'] ?>" style="height:50px; max-height:350px; margin:5px;"  alt="">
                     </a>
                      <div class="item-right">
                         <h4>
                             <a href="?p=noticia_detalhe&notcodigo=<?= $noticia['notcodigo'] ?>">
                            <?= substr(strip_tags($noticia['nottitulo']), 0, 100) ?>...
                            </a>
                         </h4>
                        <p class="kp-metadata">
                            <span><i class="icon-calendar"></i>
                            <?= DataCalendario::date2br($noticia['notdata']) ?>
                            </span>
                            <span> <i class="fa fa-feed fa-fw fa-lg"></i><?=$noticia['notcategoria']?></span>
                        </p>
                      </div>
                  </div>
              </li>
            <?php 
            $n++;
            } ?>
            </ul>
        </div>
        <!-- tab-content -->                    
      </div>
      <div id="tabs-3" class="tabs-3">
        <div class="tab-content">
          <ul class="list-posts list-unstyled">
           <?php
            $n = 1;
            $noticiasDestaque = new Noticia(Noticia::MUNICIPIO . " and home <> 2 order by RAND() LIMIT 5 ");
            foreach ($noticiasDestaque->getResult() as $noticia) {
            ?>
              <li>
                  <div class="item clearfix">
                      <a title="Veja mais..." href="?p=noticia_detalhe&notcodigo=<?= $noticia['notcodigo'] ?>" class="pull-left">
                        <img src="<?= FILES . 'noticia/' . UNIDADE_GESTORA . '/' . $noticia['notfoto'] ?>" style="height:50px; max-height:350px; margin:5px;"  alt="">
                     </a>
                      <div class="item-right">
                         <h4>
                             <a href="?p=noticia_detalhe&notcodigo=<?= $noticia['notcodigo'] ?>">
                            <?= substr(strip_tags($noticia['nottitulo']), 0, 100) ?>...
                            </a>
                         </h4>
                        <p class="kp-metadata">
                            <span><i class="icon-calendar"></i>
                            <?= DataCalendario::date2br($noticia['notdata']) ?>
                            </span>
                            <span> <i class="fa fa-feed fa-fw fa-lg"></i><?=$noticia['notcategoria']?></span>
                        </p>
                      </div>
                  </div>
              </li>
            <?php 
            $n++;
            } ?>
           
          </ul>
        </div>
        <!-- tab-content -->                    
      </div>
    </div>
</div>
<!-- widget-tabs -->