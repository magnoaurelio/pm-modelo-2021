<?php

$hoje = date('Y-m-d');
$hojePartes = new DataCalendario($hoje);
$data = $hojePartes->getDiaSemana($hoje) . ", " . $hojePartes->getDia() . " de " . $hojePartes->getMes() . " de " . $hojePartes->getAno();

$prefeito = new Prefeito(UNIDADE_GESTORA);
?>


<div id="sidebar" class="pull-left">
       <a href="?p=secretaria_geral">
       <h3 class="widget-title">Administração</h3>
      </a>
    
       <div class="col-sm-right col-12">
      <?php
       $prefeitoAdmin = new Prefeito(Prefeito::MUNICIPIO . " and pretipo = 0 ");
       foreach ($prefeitoAdmin->getResult() as $prefeito) {

       if ($prefeito['prepartidop'] == 11):
            $partido = 'pp';
            $pagina = '?p=prefeito';

       elseif ($prefeito['prepartidop'] == 15):
            $partido = 'pmdb';
            $pagina = '?p=prefeito_vice';
       endif;
       ?>
      <ul class="list-unstyled clearfix" >
        <li class="col-sm col-sm-left">
             <a href="<?= $pagina ?>" class="pull-left">
                 <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/'. $prefeito['prefotop'] ?>" width="150" height="150" alt="prefeito">
              </a>
            <div class="pull-right" >
               <h5>
                <a href="?p=prefeito" title="<?= $prefeito['prenomep'] ?>" >
                       <span ><strong><?= $prefeito['preapep'] ?></strong></span>
                       <p style="color:#9e9e9e;"><em>Prefeito</em></p>
                </a>
               </h5> 
                <h5>
              <a href="?p=secretaria_geral" class="pull-center" title="Site Oficial do <?= $prefeito['prepartidop'] ?> ">
                 <img src="<?= FILES . 'partido/'. $partido .'/'. $prefeito['preparfoto'] ?>"  width="140" height="50" alt="partido">              
                <p style="font-size: 12px; text-align: center;">Nº: <?= $prefeito['prepartidop'] ?> Sigla: <?= $prefeito['prepartidop'] ?></p>
              </a>
               </h5>
            </div>
        </li>
      </ul>
     <?php } ?>
    </div>
       <div class="col-sm-right col-12">
      <?php
       $prefeitoAdmin = new Prefeito(Prefeito::MUNICIPIO . " and pretipo = 1 ");
       foreach ($prefeitoAdmin->getResult() as $prefeito) {

       if ($prefeito['prepartidop'] == 11):
            $partido = 'pp';
            $pagina = '?p=prefeito';

       elseif ($prefeito['prepartidop'] == 15):
            $partido = 'pmdb';
            $pagina = '?p=prefeito_vice';
       endif;
       ?>
      <ul class="list-unstyled clearfix" >
        <li class="col-sm col-sm-left">
             <a href="<?= $pagina ?>" class="pull-left">
                 <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/'. $prefeito['prefotop'] ?>" width="150" height="150" alt="prefeito">
              </a>
             <div class="pull-right">
             <h5>
                 <a href="?p=prefeito" title="<?= $prefeito['prenomep'] ?>">
                     <span ><strong><?= $prefeito['preapep'] ?></strong></span>
                     <p style="color:#9e9e9e;"><em>Vice - Prefeito</em></p>
                </a>
            </h5> 
              <h5>
              <a href="?p=secretaria_geral" class="pull-right" title="Site Oficial do <?= $prefeito['prepartidop'] ?> ">
                 <img src="<?= FILES . 'partido/'. $partido .'/'. $prefeito['preparfoto'] ?>"  width="140" height="50" alt="partido">              
                <p style="font-size: 12px; text-align: center;">Nº: <?= $prefeito['prepartidop'] ?> Sigla: <?= $prefeito['prepartidop'] ?></p>
              </a>
             </h5> 
             </div>
        </li>
      </ul>
     <?php } ?>
    </div>
   <div class="clearfix"></div>
   <?php
  include_once 'include/menu_home_sidebar_secretaria.php';
  ?>
</div>
</div>
  
