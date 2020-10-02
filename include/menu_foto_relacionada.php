<div class="owl-carousel owl-carousel-related">
    <?php
       $galeriaTur = new Galeria(Galeria::MUNICIPIO);
       foreach ($galeriaTur->getResult() as $galeria) {
    ?>  
       <div class="item">
         <a href="#" class="caption">
             <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/galeria/'. $galeria['galarquivo'] ?>" height="140" alt="imagem" />
           <span class="icon-plus"></span>
           <p><?= trim($galeria['galnome']) ?></p>
         </a>
       </div>
    <?php } ?>
       <!-- item -->

 </div>