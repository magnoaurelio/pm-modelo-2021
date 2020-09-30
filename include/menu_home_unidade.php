 <!-- widget-newsletter -->
<?php
$hoje = date('Y-m-d');
$hojePartes = new DataCalendario($hoje);
$data = $hojePartes->getDiaSemana($hoje) . ", " . $hojePartes->getDia() . " de " . $hojePartes->getMes() . " de " . $hojePartes->getAno();
$ano  = $hojePartes->getAno();
$secretaria =  new Secretaria(intval($_GET['prenumero']));
?>
<div class="widget widget-more-news multimedia">
    <h4 class="widget-title"><a href="?p=secretaria_geral">Unidades da:<strong> <?= $secretaria->secnome ?></strong> </a></h4>
    <ul class="list-unstyled clearfix">
         <?php
            $unidadeAdm = new Unidade(Unidade::MUNICIPIO . "and unisec = $secretaria->prenumero");
            foreach ($unidadeAdm->getResult() as $unidade) {

              if (is_file($unidade['uniimagem'])) {
                  $uniimagem = FILES . 'prefeituras/'.UNIDADE_GESTORA.'/galeria.png';
              }else{
                   $uniimagem = FILES . 'prefeituras/'.UNIDADE_GESTORA.'/unidade/'. $unidade['uniimagem'];
              }
             // var_dump($uniimagem);
          ?>
       <li>
        <div class="item">
            <a target="_blank"  href="<?= $uniimagem ?>" class="caption" data-lightbox="example-set" >
            <img src="<?= $uniimagem ?>" style="max-height:350px; margin:5px; border-radius:6px;" alt="">
            <span><i class="icon-images"></i></span>
          </a>
          <p class="kp-metadata"><span><i class="icon-calendar"></i> <?=$hoje ?></span></p>
           <p><?= $unidade['unifuncao'] ?></p>
          <h3><a href="?p=noticia_detalhe"><?= $unidade['unisobre'] ?></a></h3>
        </div>
      </li>
       <?php
        }
       ?>
    </ul>
</div>
          <!-- widget-morenews -->