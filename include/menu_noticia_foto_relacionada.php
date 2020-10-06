 <?php 
 //$noticia = new Noticia(UNIDADE_GESTORA);
 ?>
<div class="widget-title">FOTOS RELACIONADAS</div>
<div class="owl-carousel owl-carousel-related">
      <?php
            $noticiasFoto = new NoticiaFoto(NoticiaFoto::MUNICIPIO . " and notcodigo = $notcodigo ");
            foreach ($noticiasFoto->getResult() as $noticiafoto) {
       ?>
      <div class="item" >
         <a class="caption"href="?p=noticia_detalhe&notcodigo=<?= $noticia->notcodigo ?>" title="Veja Mais..." >
           <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/galeria/'. $noticiafoto['nofimagem'] ?>" height="180" alt="imagem" />
             <p><?= substr(strip_tags($noticiafoto['noflegenda']), 0, 100) ?>...</p>
             <p><?= substr(strip_tags($noticiafoto['noffonte']), 0, 100) ?>...</p>
             <span class="icon-plus"></span>
         </a>
      <?php } ?>

</div>