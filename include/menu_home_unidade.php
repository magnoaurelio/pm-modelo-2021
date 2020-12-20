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
                   $unifoto   = FILES . 'prefeituras/'.UNIDADE_GESTORA.'/unidade/'. $unidade['unifoto'];
              }
             // var_dump($uniimagem);
          ?>
       <li>
        <div class="item">
            <p class="kp-metadata"><i class="icon-home" style="color: #000; font-size: 16px;"> <strong> <?=$unidade['uninome'] ?></strong></i></p>
            <p class="kp-metadata"><span><i class="icon-user"></i><strong> <?=$unidade['unifuncao'] ?></strong></span></p>
            <a target="_blank"  href="<?= $uniimagem ?>" class="caption" data-lightbox="example-set" >
            
            <img src="<?= $uniimagem ?>" style=" width: 250px; max-height:350px; margin:5px; border-radius:6px;" alt="">
            <span><i class="icon-images"></i></span>
          </a>
          <p class="kp-metadata">
              <span><i class="icon-calendar"></i> <?=DataCalendario::date2br($unidade['unidata']) ?></span><br>
              <span><i class="icon-home"></i> <?=$unidade['unilocal'] ?></span><br>
              <span><i class="icon-home"></i> <?=$unidade['unibairro'] ?></span><br>
              <span><i class="icon-email"></i> <?=$unidade['uniemail'] ?></span><br>
              <span><i class="icon-phone"></i> <?=$unidade['unifone'] ?></span>
          </p>
         
          <h3><a href="?p=noticia_detalhe"><?= $unidade['unisobre'] ?></a></h3>
        </div>
      </li>
       <?php
        }
       ?>
    </ul>
</div>
          <!-- widget-morenews -->