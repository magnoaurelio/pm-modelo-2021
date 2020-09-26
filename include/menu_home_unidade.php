 <!-- widget-newsletter -->
<?php
$hoje = date('Y-m-d');
$hojePartes = new DataCalendario($hoje);
$data = $hojePartes->getDiaSemana($hoje) . ", " . $hojePartes->getDia() . " de " . $hojePartes->getMes() . " de " . $hojePartes->getAno();
$ano  = $hojePartes->getAno();
$secretaria =  new Secretaria(intval($_GET['prenumero']));
?>
<div class="widget widget-more-news multimedia">
    <h3 class="widget-title"><a href="?p=noticia_geral">Unidades da Secretaria de EDUCAÇÃO </a></h3>
    <ul class="list-unstyled clearfix">
       <li>
        <div class="item">
            <a target="_blank"  href="files/prefeituras/201002/unidade/seduc1.jpg" class="caption" data-lightbox="example-set" >
            <img src="files/prefeituras/201002/unidade/seduc1.jpg" style="max-height:350px; margin:5px; border-radius:6px;" alt="">
            <span><i class="icon-images"></i></span>
          </a>
          <p class="kp-metadata"><span><i class="icon-calendar"></i> <?=$hoje ?></span></p>
           <p>SECRETARIA EDUCAÇÃO</p>
          <h3><a href="?p=noticia_detalhe">A secretaria de Educação está em 1º lugar de todas as secretarias da região</a></h3>
        </div>
      </li>
      

    </ul>
</div>
          <!-- widget-morenews -->