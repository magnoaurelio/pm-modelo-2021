 <div class="related-article">
      <h3 class="multimedia-title kp-title">vídeos relacionados</h3>
    <div class="owl-carousel owl-carousel-related">
        <?php
            $videoBloco = new Videos(Videos::MUNICIPIO . " ");
            foreach ($videoBloco->getResult() as $video) {
         ?> 
          <div class="item">
               <a href="#" title="Click para Assistir..." class="caption">
                 <iframe width="270" height="160" src="<?= $video['vidurl'] ?>" frameborder="0" allowfullscreen></iframe>
               </a>
               <p><?= trim($video['descricao']) ?></p>
                <a href="?p=video_detalhe&vidcodigo=<?= $video['vidcodigo'] ?>" class="continue-reading">Mais ...</a>
          </div>
       <?php } ?>
      
    </div>
    <!-- owl-carousel-related -->
  </div>