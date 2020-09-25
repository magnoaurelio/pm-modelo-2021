 <!-- widget-newsletter -->
<?php

$hoje =  date('d-m-Y');
//$hojePartes =  MDate::datePart($hoje);
//$data = MDate::getDiaSemana($hoje).", ".$hojePartes->dia." de ".MDate::getMeses(1, $hojePartes->mes)." de ".$hojePartes->ano;
//$ano  = $hojePartes->ano;
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
       <li>
        <div class="item">
          <a target="_blank"  href="files/prefeituras/201002/unidade/UE EVARISTO.jpg" class="caption" data-lightbox="example-set" >
            <img src="files/prefeituras/201002/unidade/UE EVARISTO.jpg" style="max-height:350px; margin:5px; border-radius:6px;" alt="">
            <span><i class="icon-images"></i></span>
          </a>
          <p class="kp-metadata"><span><i class="icon-calendar"></i> <?=$hoje ?></span></p>
         <p>UE EVARISTO</p>
          <h3><a href="?p=noticia_detalhe">A secretaria de Educação está em 1º lugar de todas as secretarias da região</a></h3>
        </div>
      </li>
       <li>
        <div class="item">
             <a target="_blank"  href="files/prefeituras/201002/unidade/UE LOURENCO VIRGULINO.jpg" class="caption" data-lightbox="example-set" >
            <img src="files/prefeituras/201002/unidade/UE LOURENCO VIRGULINO.jpg" style="max-height:350px; margin:5px; border-radius:6px;" alt="">
            <span><i class="icon-images"></i></span>
          </a>
          <p class="kp-metadata"><span><i class="icon-calendar"></i> <?=$hoje ?></span></p>
           <p>UE LOURENCO VIRGULINO</p>
          <h3><a href="?p=noticia_detalhe">A secretaria de Educação está em 1º lugar de todas as secretarias da região</a></h3>
        </div>
      </li>
       <li>
        <div class="item">
             <a target="_blank"  href="files/prefeituras/201002/unidade/UE ROQUE ALENCAR.jpg" class="caption" data-lightbox="example-set" >
            <img src="files/prefeituras/201002/unidade/UE ROQUE ALENCAR.jpg" style="max-height:350px; margin:5px; border-radius:6px;" alt="">
            <span><i class="icon-images"></i></span>
          </a>
          <p class="kp-metadata"><span><i class="icon-calendar"></i> <?=$hoje ?></span></p>
         <p>UE ROQUE ALENCAR</p>
          <h3><a href="?p=noticia_detalhe">A secretaria de Educação está em 1º lugar de todas as secretarias da região</a></h3>
        </div>
      </li>
       <li>
        <div class="item">
            <a target="_blank"  href="files/prefeituras/201002/unidade/ueJAO FERRY.jpg" class="caption" data-lightbox="example-set" >
            <img src="files/prefeituras/201002/unidade/ueJAO FERRY.jpg" style="max-height:350px; margin:5px; border-radius:6px;" alt="">
            <span><i class="icon-images"></i></span>
          </a>
          <p class="kp-metadata"><span><i class="icon-calendar"></i> <?=$hoje ?></span></p>
          <p>U E JOÃO FERRY</p>
          <h3><a href="?p=noticia_detalhe">A secretaria de Educação está em 1º lugar de todas as secretarias da região</a></h3>
        </div>
      </li>
       <li>
        <div class="item">
           <a target="_blank"  href="files/prefeituras/201002/unidade/creche.jpg" class="caption" data-lightbox="example-set" >
            <img src="files/prefeituras/201002/unidade/creche.jpg" style="max-height:350px; margin:5px; border-radius:6px;" alt="">
            <span><i class="icon-images"></i></span>
          </a>
          <p class="kp-metadata"><span><i class="icon-calendar"></i> <?=$hoje ?></span></p>
          <p>CRECHE INFANTIL</p>
          <h3><a href="?p=secretaria_unidade&prenumero=<?= $secretaria->prenumero ?>">A secretaria de Educação está em 1º lugar de todas as secretarias da região</a></h3>
          
        </div>
      </li>

    </ul>
</div>
          <!-- widget-morenews -->