<?php
include './include/head.php';

$hoje = date('Y-m-d');
$hojePartes = new DataCalendario($hoje);
$data = $hojePartes->getDiaSemana($hoje) . ", " . $hojePartes->getDia() . " de " . $hojePartes->getMes() . " de " . $hojePartes->getAno();
$publicidade = new Publicidade(UNIDADE_GESTORA);
?>
<!-- inicio widget-area-1 -->
<div class="widget-content">
      
               <!-- item -->
            <?php
            $publicidadeHome = new Publicidade(Publicidade::MUNICIPIO . " and pubtipocodigo = 'RO' ");
            foreach ($publicidadeHome->getResult() as $publicidade) {
            ?>
                <h4 class="widget-title">Publicidade: 4<br/><strong> <?=$publicidade['pubtitulo'] ?></strong> </h4>
                <div class="caption" style="width: 100%; text-align: center;">
                    <img src="<?= FILES . 'prefeituras/' . UNIDADE_GESTORA . '/publicidade/' . $publicidade['pubimagem'] ?>"  alt="">
                </div>
            <?php
            }
            ?>
    <!-- slider-feature-news -->
</div>
        <!-- fim widget-area-1 -->