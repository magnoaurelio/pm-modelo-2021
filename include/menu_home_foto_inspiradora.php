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
                $galeriaTur = new Galeria(Galeria::MUNICIPIO . " and galtipo = 0 order by RAND() limit 2");
                foreach ($galeriaTur->getResult() as $galeria) {
             ?> 
            <li>
                <a title="Veja mais..." href="?p=galeria" class="caption">
                 <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/galeria/'. $galeria['galarquivo'] ?>"   style=" width: 200; height:130px; max-height:350px; margin:5px;" alt="imagem" />
                 <p><?= trim($galeria['galnome']) ?></p>
                   <span class="icon-images"></span>
               </a>
            </li>
             <?php } ?>
            
          </ul>
        </li>
        <li class="col-center">
          <div class="owl-carousel owl-carousel-photos">
                 <?php
                    $galeriaTur = new Galeria(Galeria::MUNICIPIO . " and galtipo = 0 order by RAND() limit 4");
                    foreach ($galeriaTur->getResult() as $galeria) {
                 ?> 
                    <a title="Veja mais..." href="?p=galeria" class="caption">
                         <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/galeria/'. $galeria['galarquivo'] ?>"  style="height:300px; max-height:350px; margin:5px; " alt="imagem" />
                         <!--border-radius:5px; -->
                         <p><?= trim($galeria['galnome']) ?></p>
                           <span class="icon-images"></span>
                       </a>
                 <?php } ?>
              

          </div>
        </li>
        <li class="col-sm col-sm-right">
           <ul class="list-unstyled">
           <?php
                $galeriaTur = new Galeria(Galeria::MUNICIPIO . " and galtipo = 0 order by RAND() limit 2");
                foreach ($galeriaTur->getResult() as $galeria) {
             ?> 
            <li>
                <a title="Veja mais..." href="?p=galeria" class="caption">
                 <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/galeria/'. $galeria['galarquivo'] ?>"   style=" width: 200; height:130px; max-height:350px; margin:5px;" alt="imagem" />
                 <p><?= trim($galeria['galnome']) ?></p>
                   <span class="icon-images"></span>
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