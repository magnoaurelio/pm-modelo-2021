<ul class="list-item list-unstyled clearfix">
    <?php
    $galeriaTur = new Galeria(Galeria::MUNICIPIO);
    foreach ($galeriaTur->getResult() as $galeria) {
    ?>  
    <li>
      <div class="item">
        <a href="#" class="caption">
          <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/galeria/'. $galeria['galarquivo'] ?>" width="150" height="100"  alt="imagem" />
          <span ><i class="icon-images"></i></span>             
        </a>
         <a href="#" class="kp-metadata"><span><i class="icon-phone  fa-lg"></i>&nbsp;&nbsp;<?=  DataCalendario::date2br($galeria['galdata']) ?> </span></a>
        <h4><a href="#"><?= trim($galeria['galnome']) ?></a></h4>
      </div>
    </li>
     <?php } ?>
 </ul>

    
 
