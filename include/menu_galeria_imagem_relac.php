 <div class="related-article">
     <h3 class="multimedia-title kp-title">Imágens Relacionadas</h3>
    <div class="owl-carousel owl-carousel-related">
       <?php
          $galeriaTur = new Galeria(Galeria::MUNICIPIO);
          foreach ($galeriaTur->getResult() as $galeria) {
       ?>  
          <div class="item">
            <a href="#" class="caption">
              <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/galeria/'. $galeria['galarquivo'] ?>"  width="150" height="150" alt="imagem" />
              <p><?= trim($galeria['galnome']) ?></p>
            </a>
          </div>
       <?php } ?>
      
    </div>
    <!-- owl-carousel-related -->
  </div>