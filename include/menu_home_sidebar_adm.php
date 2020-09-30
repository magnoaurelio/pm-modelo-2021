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
                $prepartidop = $prefeito['prepartidop'];
       ?>
      <ul class="list-unstyled clearfix" >
        <li class="col-sm col-sm-left">
             <a href="?p=prefeito" title=" Veja mais sobre...<?= $prefeito['prenomep'] ?>"  class="pull-left">
                 <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/'. $prefeito['prefotop'] ?>" width="150" height="150" alt="prefeito">
              </a>
            <div class="pull-right" >
               <h5>
                <a href="?p=prefeito" title=" Veja mais sobre...<?= $prefeito['prenomep'] ?>" >
                       <span ><strong><?= $prefeito['preapep'] ?></strong></span>
                       <p style="color:#9e9e9e;"><em>Prefeito</em></p>
                </a>
               </h5> 
                 <?php
                    $partido = new Partido("where parcodigo = $prepartidop ");
                    foreach ($partido->getResult() as $partido) {
                  ?>
               
                <h5>
                     <a href="<?= $partido['parsite'] ?>" target="_blank" class="pull-center" title="Site Oficial do <?= $partido['parnome'] ?> - <?= $partido['parcodigo'] ?> - <?= $partido['parsigla'] ?>">
                        <img src="<?= FILES . 'partido/'. strtolower($partido['parsigla']) .'/'. $partido['parlogo'] ?>"  width="120" height="40" alt="partido">              
                         <p style="font-size: 12px; text-align: center; color:#9e9e9e;">Nº: <?= $partido['parcodigo'] ?> Sigla: <?= $partido['parsigla'] ?> </p>
                     </a>
               </h5>
                 <?php } ?>
            </div>
        </li>
      </ul>
     <?php } ?>
    </div>
       <div class="col-sm-right col-12">
      <?php
       $prefeitoAdmin = new Prefeito(Prefeito::MUNICIPIO . " and pretipo = 1 ");
       foreach ($prefeitoAdmin->getResult() as $prefeito) {
                $prepartidop = $prefeito['prepartidop'];
       ?>
      <ul class="list-unstyled clearfix" >
        <li class="col-sm col-sm-left">
             <a href="?p=prefeito_vice" class="pull-left" title=" Veja mais sobre...<?= $prefeito['prenomep'] ?>" >
                 <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/'. $prefeito['prefotop'] ?>" width="150" height="150" alt="prefeito">
              </a>
             <div class="pull-right">
             <h5>
                 <a href="?p=prefeito_vice" title=" Veja mais sobre... <?= $prefeito['prenomep'] ?>">
                     <span ><strong><?= $prefeito['preapep'] ?></strong></span>
                     <p style="color:#9e9e9e;"><em>Vice - Prefeito</em></p>
                </a>
            </h5> 
              <?php
                    $partido = new Partido("where parcodigo = $prepartidop ");
                    foreach ($partido->getResult() as $partido) {
                  ?>
               
                <h5>
                     <a href="<?= $partido['parsite'] ?>" target="_blank" class="pull-center" title="Site Oficial do <?= $partido['parnome'] ?> - <?= $partido['parcodigo'] ?> - <?= $partido['parsigla'] ?>">
                        <img src="<?= FILES . 'partido/'. strtolower($partido['parsigla']) .'/'. $partido['parlogo'] ?>"  width="120" height="40" alt="partido">              
                         <p style="font-size: 12px; text-align: center; color:#9e9e9e;">Nº: <?= $partido['parcodigo'] ?> Sigla: <?= $partido['parsigla'] ?> </p>
                     </a>
               </h5>
                 <?php } ?>
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
  
