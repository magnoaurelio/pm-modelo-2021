<?php
include './include/head.php';

$hoje = date('Y-m-d');
$hojePartes = new DataCalendario($hoje);
$data = $hojePartes->getDiaSemana($hoje) . ", " . $hojePartes->getDia() . " de " . $hojePartes->getMes() . " de " . $hojePartes->getAno();
$publicidade = new Publicidade(UNIDADE_GESTORA);
?>
<!-- inicio widget-area-1 -->
<div class="widget-area-1">
<?php
    $publicidadeHome = new Publicidade(Publicidade::MUNICIPIO . " and pubtipocodigo = 'MS' ");
    foreach ($publicidadeHome->getResult() as $publicidade) {
  ?>
      <h4 class="widget-title">Publicidade: 1<br/> <strong> <?=$publicidade['pubtitulo'] ?></strong></h4>
     <div class="caption" style="width: 100%; text-align: center;">
         <img src="<?= FILES .'prefeituras/' . UNIDADE_GESTORA . '/publicidade/' . $publicidade['pubimagem'] ?>"  alt="superior">
     </div>
           

 <?php
}
?>
</div>
